<?php

$conn = new mysqli("localhost","root","","mydb");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>