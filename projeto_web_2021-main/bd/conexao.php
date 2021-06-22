<?php

$dsn = 'mysql:dbname=projeto_web_2021_1;host=127.0.0.1;charset=utf8';
$user = 'root';
$password = 'root';

try{
  $conn = new PDO($dsn, $user, $password);
}catch (PDOException $e){
  die('DB Error: ' . $e->getMessage());
}

?>