<?php

$strId = URL_PARAMS['id'] ?? '';
$id = (int)$strId;
$normId = ($strId === (string)$id);
$post = getArticle($id);
if (is_array($post)) {
	$cat = getCategory($post['id_category']);
	$pageTitle = 'Запись';
	$pageContent = template('tpl_article', [
		'post' => $post,
		'cat' => $cat,
		'id' => $id
	]);
} else {
	$pageTitle = 'Страница не найдена';
	$pageContent = template('tpl_404');
}
