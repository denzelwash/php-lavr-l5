<?php

	include_once('model/articles.php');
	include_once('model/categories.php');
  
	$strId = $_GET['id'] ?? '';
	$id = (int)$strId;
	$normId = ($strId === (string)$id);
	$post = getArticle($id);

	if (is_array($post)) {
		$catTitle = getCategory($post['id_category'])['title'];
		include_once('tpl/tpl_article.php');
	} else {
		include_once('tpl/tpl_404.php');
	}


?>
