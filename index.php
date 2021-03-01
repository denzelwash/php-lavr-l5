<?php

include_once('model/articles.php');
include_once('model/categories.php');
include_once('core/utils.php');
$name = $_GET['c'] ?? 'index';
$pathFull = 'controllers/' . $name .'Controller.php';
$pageTitle = 'Project';
$pageContent = '';

if(file_exists($pathFull)) {
  include_once($pathFull);
} else {
  include_once("controllers/404Controller.php");
}

$mainTemplate = template('base/tpl_main', [
  'title' => $pageTitle,
  'content' => $pageContent
]);

echo $mainTemplate;