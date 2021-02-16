<?php

	$id = (int)($_GET['id'] ?? '');
	$res = removeArticle($id);

	$pageTitle = 'Удалить запись';
	$pageContent = template('tpl_delete', [
		'res' => $res,
	]);
	
?>
