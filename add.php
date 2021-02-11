<?php

	include_once('model/articles.php');
	include_once('model/categories.php');
  
	$isSend = false;
	$err = '';

	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$title = trim($_POST['title']);
		$text = trim($_POST['text']);
		$cat = trim($_POST['cat']);
		
		if($title === '' || $text === ''){
			$err = 'Заполните все поля!';
		}
		else{
			$addedId = addArticle($title, $text, $cat);
			$isSend = true;
		}
	}
	else{
		$title = '';
		$text = '';
		$cats = getCategories();
	}

	include_once('tpl/tpl_add_form.php');

?>
