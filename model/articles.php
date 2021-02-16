<?php

	include_once("core/db.php");

	function editArticle(int $id, string $title, string $content, int $cat) : bool{
		$sql = "UPDATE articles SET id_category=:cat, title=:title, text=:text WHERE id_article=$id";
		$updArticle = [
			'title' => htmlspecialchars($title),
			'text' => htmlspecialchars($content),
			'cat' => $cat
		];
		$query = dbQuery($sql, $updArticle);
		dbCheckQuery($query);
		return $query->rowCount();
	}

	function getAllArticles(){
		$sql = "SELECT * FROM articles";
		$query = dbQuery($sql);
		dbCheckQuery($query);
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	function getCategoryArticles($id){
		$sql = "SELECT * FROM articles WHERE id_category = $id";
		$query = dbQuery($sql);
		dbCheckQuery($query);
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	function getArticle($id){
		$sql = "SELECT * FROM articles WHERE id_article = $id";
		$query = dbQuery($sql);
		if (is_string(dbCheckQuery($query))) {
			return null;
		}
		$result = $query->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

	function addArticle(string $title, string $text, int $cat){
		$article = [
			'title' => htmlspecialchars($title),
			'text' => htmlspecialchars($text),
			'cat' => $cat
		];
		$sql = "INSERT INTO articles (id_category, title, text) VALUES (:cat, :title, :text)";
		$query = dbQuery($sql, $article);
		dbCheckQuery($query);
		$addedId = dbInstance()->lastInsertId();
		return $addedId;
	}

	function removeArticle(int $id) : bool{
		$sql = "DELETE FROM articles WHERE id_article = $id";
		$query = dbQuery($sql);
		dbCheckQuery($query);
		return $query->rowCount();
	}
