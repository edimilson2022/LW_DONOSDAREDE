<?php
declare(strict_types= 1);

$pdo = null;

try{
  $pdo = new PDO('mysql:host=localhost;dbname=projeto', 'root', '');
}catch(Exception $e){
  echo $e->getMessage();
  die();
}

return $pdo;

 mysql_connect("localhost", "root", ""); mysql_select_db("mxmasters");
