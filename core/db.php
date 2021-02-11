<?php

  function dbInstance() {
    static $db;
    if($db === null) {
      $db = new PDO('mysql:host=localhost;dbname=lesson4_dz;charset=UTF8', 'root', 'root');
    }
    return $db;
  }

  function dbQuery(string $sql, array $params = []) {
		$query = dbInstance()->prepare($sql);
		$query-> execute($params);
		return $query;
  }

  function dbCheckQuery($query) {
		if ($query->errorInfo()[0] !== PDO::ERR_NONE) {
			return $query->errorInfo()[2];
    }
  }