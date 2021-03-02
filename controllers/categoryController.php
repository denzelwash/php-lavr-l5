<?php

$strId = URL_PARAMS['id'] ?? '';
$id = (int)$strId;
$category = getCategory($id);

if(is_array($category)) {
  $articles = getCategoryArticles($category['id_category']);
  $pageTitle = 'Категория';
  $pageContent = template('tpl_category', [
    'articles' => $articles
  ]);
} else {
  $pageTitle = 'Страница не найдена';
  $pageContent = template('tpl_404');
}