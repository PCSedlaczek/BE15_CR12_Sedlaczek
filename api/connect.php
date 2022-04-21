<?php
// Create database connection
$connect = @mysqli_connect(
  $host = "localhost", 
  $user = "root", 
  $pwd = "", 
  $db = "BE15_CR12_Mount_Everest_Sedlaczek");

// Check database connection
if (!$connect) {
  die("Database connection failed: ".mysqli_connect_error());
}