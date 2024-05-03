<?php

require_once 'app/config/env.php';

$host = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$database = $_ENV['DB_NAME'];

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error){
  die("koneksi database gagal: ".$conn->connect_error);
}
?>