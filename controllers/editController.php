<?php

$strId = URL_PARAMS['id'] ?? '';
$id = (int)$strId;
$isSend = false;
$err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$title = trim($_POST['title']);
	$content = trim($_POST['content']);
	$cat = trim($_POST['cat']);

	if ($title === '' || $content === '') {
		$err = 'Заполните все поля!';
	} else {
		editArticle($id, $title, $content, $cat);
		$isSend = true;
	}
} else {
	$article = getArticle($id);
	$title = $article['title'];
	$content = $article['text'];
	$cats = getCategories();
	$cat = getCategory($article['id_category']);
}

$pageTitle = 'Добавить Запись';
$pageContent = template('tpl_edit_form', [
	'isSend' => $isSend,
	'addedId' => $addedId,
	'cats' => $cats,
	'cat' => $cat,
	'article' => $article,
	'content' => $content,
	'title' => $title,
]);
