<?php
require_once "connect.php";
require_once "response.php";

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

  $table = "offers";
  $cols = "location, city, country, description, price, latitude, longitude, img, src, url";
  $data = "'$location','$city','$country','$description',$price,$latitude,$longitude,'$img','$src','$url'";
  $query = "INSERT INTO $table ($cols) VALUES ($data)";
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
    response(200, "Entry created", $offer);
  } else {
    response(400, mysqli_error($connect), $offer);
  }
} else {
  response(400, "Invalid request", null);
}
