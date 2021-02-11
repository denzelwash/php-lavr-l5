<?php

  include_once("core/db.php");

  function getCategories() {
    $sql = "SELECT * FROM categories";
    $query = dbQuery($sql);
    dbCheckQuery($query);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  function getCategory($id){
    $sql = "SELECT * FROM categories WHERE id_category = $id";
    $query = dbQuery($sql);
    dbCheckQuery($query);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
  }