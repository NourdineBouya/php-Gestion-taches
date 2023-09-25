<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "todolist";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
  // set the PDO error mode to exception

  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
