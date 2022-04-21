<?php
require_once "connect.php";
require_once "response.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $id = $_GET["id"];
  $table = "offers";
  $query = "SELECT * FROM $table WHERE id = $id";
  $result = mysqli_query($connect, $query);
  $entry = mysqli_fetch_assoc($result);

  if ($result->num_rows == 1) {
    response(200, "Success", $entry);
  } else {
    response(200, "No data", null);
  }
} else {
  response(400, "Invalid request", null);
}
