<?php

function getUser($str)
{
	$params = [
		'str' => $str
	];
	$sql = "SELECT * FROM users WHERE login = :str";
	$query = dbQuery($sql, $params);
	if (is_string(dbCheckQuery($query))) {
		return null;
	}
	$result = $query->fetch(PDO::FETCH_ASSOC);
	return $result;
}

function getUserById($id)
{
	$sql = "SELECT id_user, login, email FROM users WHERE id_user = :id";
	$query = dbQuery($sql, ['id' => $id]);
	if (is_string(dbCheckQuery($query))) {
		return null;
	}
	$result = $query->fetch(PDO::FETCH_ASSOC);
	return $result ? $result : null;
}

function addSession($id, $token)
{
	$params = [
		'id_user' => $id,
		'token' => $token
	];
	$sql = "INSERT INTO sessions (id_user, token) VALUES (:id_user, :token)";
	$query = dbQuery($sql, $params);
	dbCheckQuery($query);
	return true;
}

function getSession($token)
{
	$sql = "SELECT * FROM sessions WHERE token = :token";
	$query = dbQuery($sql, ['token' => $token]);
	dbCheckQuery($query);
	$result = $query->fetch(PDO::FETCH_ASSOC);
	return $result ? $result : null;
}
