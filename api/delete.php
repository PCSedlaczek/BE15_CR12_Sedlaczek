<?php
require_once "connect.php";
require_once "response.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_GET["id"];
  $table = "offers";
  $query = "DELETE FROM $table WHERE id = $id";
  $result = mysqli_query($connect, $query);
  $entry = mysqli_fetch_assoc($result);

  if ($result->num_rows == 1) {
    response(200, "Entry deleted", $offer);
  } else {
    response(400, mysqli_error($connect), $offer);
  }
} else {
  response(400, "Invalid request", null);
}

mysqli_close($connect);