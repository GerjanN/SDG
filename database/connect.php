<?php 

function dbConnect() {
  try {
    $conn = new PDO("mysql:host=localhost;dbname=sdg", "DB_NAME", "DB_PASSWORD");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  
  return $conn;
}