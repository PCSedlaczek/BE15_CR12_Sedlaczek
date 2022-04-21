<?php
require_once "../api/connect.php";

if ($_GET["id"]) {
  $id = $_GET["id"];
  $query = "SELECT * FROM offers WHERE id = $id";
  $result = mysqli_query($connect, $query);
  $entry = mysqli_fetch_assoc($result);

  if (mysqli_num_rows($result) == 1) {
    $location = $entry["location"];
    $city = $entry["city"];
    $region = $entry["region"];
    $country = $entry["country"];
    $description = $entry["description"];
    $price = $entry["price"];
    $per = $entry["per"];
    $latitude = $entry["latitude"];
    $longitude = $entry["longitude"];
    $img = $entry["img"];
    $src = $entry["src"];
    $url = $entry["url"];
    $free = $entry["free"];
  } 
  else {
    header("location: ../php/error.php");
  }
  mysqli_close($connect);
} 
else {
  header("location: ../php/error.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Offer</title>
  <link rel="stylesheet" href="../css/style.css">
  <?php require_once "../php/bootstrap.php"?>
</head>

<body class="d-flex justify-content-center">
  <fieldset class="max-w shadow-lg p-4 m-5">
    <legend class="h2 my-3">Delete offer</legend>
      <img class="img-thumbnail rounded" src="../img/<?=$img?>" alt="<?=$name?>">
    </legend>
    <h5>You have selected the entry below:</h5>
    <table class="table w-75 mt-3">
      <tr>
        <td><?=$location?></td>
      </tr>
    </table>

    <h3 class="mb-4">Do you really want to delete this offer?</h3>
    <p>This action cannot be undone!</p>
    <form action="actions/delete.php" method="post">
      <input type="hidden" name="id" value="<?=$id?>">
      <input type="hidden" name="img" value="<?=$img?>">
      <button class="btn btn-danger" type="submit">Delete</button>
      <a class="btn btn-warning" href="amimals.php">Cancel</a>
    </form>
  </fieldset>
</body>

</html>