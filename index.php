<?php

include_once('model/articles.php');
include_once('model/categories.php');
include_once('core/utils.php');

$url = $_GET['mainurl'] ?? '';
$routes = include('core/routes.php');
$route = parseUrl($url, $routes);

define('URL_PARAMS', $route['params']);

$pathFull = 'controllers/' . $route['controller'] . 'Controller.php';
$pageTitle = 'Project';
$pageContent = '';


if (file_exists($pathFull)) {
	include_once($pathFull);
} else {
	include_once("controllers/404Controller.php");
}

$mainTemplate = template('base/tpl_main', [
	'title' => $pageTitle,
	'content' => $pageContent
]);

echo $mainTemplate;
