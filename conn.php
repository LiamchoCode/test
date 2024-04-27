<?php 

$host = "localhost";
$user = "root";
$pass = "root";
$db   = "test";

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>
