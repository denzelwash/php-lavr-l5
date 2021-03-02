<?php

const BASE_URL = '/';

function template(string $name, array $params = []) : string {
  $str = "tpl/$name.php";
  extract($params);
  ob_start();
  include($str);
  $res = ob_get_clean();
  return $res;
}

function parseUrl(string $url, array $routes) : array {
  $res = [
    'controller' => '404',
    'params' => []
  ];
  $mathes = [];
  foreach($routes as $route) {
    if (preg_match($route['test'], $url, $mathes)) {
      $res['controller'] = $route['controller'];
      $res['params'] = $urlArr[1];
      if(isset($route['params'])) {
        foreach($route['params'] as $key => $val) {
          $res['params'][$key] = $mathes[$val];
        }
      }
      break;
    }
  }

  
  return $res;
}