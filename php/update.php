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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $location = $_POST["location"];
  $city = $_POST["city"];
  $country = $_POST["country"];
  $description = $_POST["description"];
  $price = $_POST["price"];
  $latitude = $_POST["latitude"];
  $longitude = $_POST["longitude"];
  $img = $_POST["img"];
  $src = $_POST["src"];
  $url = $_POST["url"];
  $free = $_POST["free"];

  $cols = "
    location = '$location',
    city = '$city',
    country = '$country',
    description = '$description',
    price = $price,
    latitude = $latitude,
    longitude = $longitude,
    img = '$img',
    src = '$src',
    url = '$url'";
  $query = "UPDATE $table SET $cols";
  $result = mysqli_query($connect, $query);

  $offer = [
    "id" => mysqli_insert_id($connect),
    "location" => $location,
    "city" => $city,
    "country" => $country,
    "description" => $description,
    "price" => $price,
    "latitude" => $latitude,
    "longitude" => $longitude,
    "img" => $img,
    "src" => $src,
    "url" => $url,
    "free" => $free,
  ];

  if ($result) {
    response(200, "Entry updated", $offer);
  } else {
    response(400, mysqli_error($connect), $offer);
  }
} else {
  response(400, "Invalid request", null);
}
