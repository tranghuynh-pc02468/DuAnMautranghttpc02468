<?php
// $servername = "localhost";
// $username = "root";
// $password = "mysql";

$servername = "sql.freedb.tech";
$username = "freedb_php1_test";
$password = "3ppdxa8WD?NNQyB";

try {
  $conn = new PDO("mysql:host=$servername;dbname=freedb_php1_test", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}










?>