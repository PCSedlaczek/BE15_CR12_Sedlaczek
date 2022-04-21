<?php
require_once "connect.php";
require_once "response.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $query = "SELECT * FROM offers";
  $result = mysqli_query($connect, $query);
  $entries = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  if (count($entries) != 0) {
    response(200, "Success", $entries);
  } else {
    response(200, "No data", null);
  }
} else {
  response(400, "Invalid request", null);
}
