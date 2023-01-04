<?php
try {
  $conn = new PDO("mysql:host=127.0.0.1;dbname=loginandregistrationform;charset=utf8", 'root', 'secret');
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}
?>