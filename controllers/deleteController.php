<?php

if ($user === null) {
	header('Location: ' . BASE_URL . 'login');
	exit();
}

$id = (int)(URL_PARAMS['id'] ?? '');
$res = removeArticle($id);

$pageTitle = 'Удалить запись';
$pageContent = template('tpl_delete', [
	'res' => $res,
]);
