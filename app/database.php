<?php

$server = 'localhost:3307';
$username = 'root';
$password = '';
$database = 'php_contacto_test';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>