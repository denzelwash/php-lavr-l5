<?php

function template(string $name, array $params = []) : string {
  $str = "tpl/$name.php";
  extract($params);
  ob_start();
  include($str);
  $res = ob_get_clean();
  return $res;
}