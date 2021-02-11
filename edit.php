<?php

	include_once('model/articles.php');
	include_once('model/categories.php');

	$strId = $_GET['id'] ?? '';
	$id = (int)$strId;
	$isSend = false;
	$err = '';

	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$title = trim($_POST['title']);
		$content = trim($_POST['content']);
		$cat = trim($_POST['cat']);
		
		if($title === '' || $content === ''){
			$err = 'Заполните все поля!';
		}
		else{
			editArticle($id, $title, $content, $cat);
			$isSend = true;
		}
	}
	else{
		$article = getArticle($id);
		$title = $article['title'];
		$content = $article['text'];
		$catId = $article['id_category'];
		$cats = getCategories();
	}

	include_once('tpl/tpl_edit_form.php');

?>
