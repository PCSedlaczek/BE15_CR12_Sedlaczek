<?php
require_once "../../api/connect.php";
require_once "../../php/upload.php";

if ($_POST) {
  $id = $_POST["id"];
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

  $table = "";
  $default = "pexels-denis-linine-753772.jpg";
  $values = "
    location = '$location',
    city = '$city',
    region = '$region',
    country = '$country',
    description = '$description',
    price = '$price',
    per = '$per',
    latitude = '$latitude',
    longitude = '$longitude',
    img = '$img',
    src = '$src',
    url = '$url',
    free = '$free'";

  $query = "UPDATE offers SET $values WHERE id = $id";

  if (mysqli_query($connect, $query)) {
    $class = "success";
    $message = "The record was successfully updated";
    header("refresh:2;url=../edit.php?id=$id");
  } 
  else {
    $class = "danger";
    $message = "Error while updating record:<br>".mysqli_connect_error();
    header("refresh:2;url=../edit.php?id=$id");
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
  <title>Update Offers</title>
  <link rel="stylesheet" href="../../css/style.css">
  <?php require_once "../../php/bootstrap.php"?>
</head>

<body>
  <div class="container max-w">
    <div class="mt-3 mb-3">
      <h1>Update offer</h1>
    </div>
    <div class="alert alert-<?=$class?>" role="alert">
      <p><?=($message) ?? ""?></p>
      <p><?=($uploadError) ?? ""?></p>
    </div>
  </div>
</body>

</html>