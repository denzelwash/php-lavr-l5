<?php

$articles = getAllArticles();

$pageTitle = 'Главная';
$pageContent = template('tpl_index', [
	'articles' => $articles
]);
