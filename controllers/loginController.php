<?php

$isSend = false;
$err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$login = trim($_POST['login']);
	$password = trim($_POST['password']);
	$remember = isset($_POST['remember']);

	if ($login === '' || $password === '') {
		$err = 'Заполните все поля!';
	} else {
		$user = getUser($login);
		if (is_array($user) && password_verify($password, $user['password'])) {
			$token = substr(bin2hex(random_bytes(128)), 0, 128);
			addSession($user['id_user'], $token);
			$_SESSION['token'] = $token;
			if ($remember) {
				setcookie('token', $token, time() + 3600 * 24 * 30, '/');
			}
			header('Location: ' . BASE_URL);
			exit();
		} else {
			$err = 'Ошибка авторизации';
		}
		$isSend = true;
	}
}

$pageTitle = 'Логин';
$pageContent = template('tpl_login', [
	'isSend' => $isSend,
	'err' => $err,
]);
