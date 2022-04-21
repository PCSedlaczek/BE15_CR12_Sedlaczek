<?php
require_once "../../api/connect.php";

if ($_POST) {
  $location = $_POST["location"];
  $city = $_POST["city"];
  $region = $_POST["region"];
  $country = $_POST["country"];
  $description = $_POST["description"];
  $price = $_POST["price"];
  $per = $_POST["per"];
  $latitude = $_POST["latitude"];
  $longitude = $_POST["longitude"];
  $img = $_POST["img"];
  $src = $_POST["src"];
  $url = $_POST["url"];
  $free = $_POST["free"];

  $query = "INSERT INTO offers (location, city, region, country, description, price, per, latitude, longitude, img, src, url, free) VALUES ('$location', '$city', '$region', '$country', '$description', $price, '$per', '$latitude', '$longitude', '$img', '$src', '$url', '$free')";

  if (mysqli_query($connect, $query)) {
    $class = "success";
    $message = "The entry below was successfully created:<br>
    <table>
      <tr>
        <td>Location:</td>
        <td>$location</td>
      </tr>
      <tr>
        <td>City:</td>
        <td>$city</td>
      </tr>
      <tr>
        <td>Region:</td>
        <td>$region</td>
      </tr>
      <tr>
        <td>Country:</td>
        <td>$country</td>
      </tr>
      <tr>
        <td>Description:</td>
        <td>$description</td>
      </tr>
      <tr>
        <td>Price:</td>
        <td>$price/$per</td>
      </tr>
      <tr>
        <td>Latitude:</td>
        <td>$latitude</td>
      </tr>
      <tr>
        <td>Longitude:</td>
        <td>$longitude</td>
      </tr>
      <tr>
        <td>Image:</td>
        <td>$img</td>
      </tr>
      <tr>
        <td>Img source:</td>
        <td>$src</td>
      </tr>
      <tr>
        <td>URL:</td>
        <td>$url</td>
      </tr>
      <tr>
        <td>Free:</td>
        <td>$free</td>
      </tr>
    </table>
    <hr>";
    
    header("refresh:2;url=../../manage.html");
  } 
  else {
    $class = "danger";
    $message = "Error while creating record. Try again:<br>".$connect->error;
    header("refresh:2;url=../../manage.html");
  }
  mysqli_close($connect);
}
else {
  header("location: ../../php/error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Create offer</title>
  <link rel="stylesheet" href="../../css/style.css">
  <?php require_once "../../php/bootstrap.php"?>
</head>

<body>
  <div class="container max-w">
    <div class="mt-3 mb-3">
      <h1>Create offer</h1>
    </div>
    <div class="alert alert-<?=$class?>" role="alert">
      <p><?=($message) ?? ""?></p>
    </div>
  </div>
</body>

</html>