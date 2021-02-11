<?php

	include_once('model/articles.php');
	include_once('model/categories.php');
	
	$articles = getArticles();
	include_once('tpl/tpl_index.php');

?>

	