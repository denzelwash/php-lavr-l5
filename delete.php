<?php

	include_once('model/articles.php');
	$id = (int)($_GET['id'] ?? '');
	$res = removeArticle($id);
	include_once('tpl/tpl_delete.php');
	
?>
