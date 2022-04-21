<?php
require_once "../api/connect.php";

if ($_GET["id"]) {
  $id = $_GET["id"];
  $query = "SELECT * FROM offers WHERE id = $id";
  $result = mysqli_query($connect, $query);

  if (mysqli_num_rows($result) == 1) {
    $entry = mysqli_fetch_assoc($result);

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
    $status = "";
    $freeList = ['Available','Booked','Closed'];
    foreach ($freeList as $option) {
      if ($option == $free) {
        $status .= "<option value='$option' selected>$option</option>";
      }
      else {
        $status .= "<option value='$option'>$option</option>";
      }
    }
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
<html>

<head>
  <title>Edit Offer</title>
  <link rel="stylesheet" href="../css/style.css">
  <?php require_once "../php/bootstrap.php"?>
</head>

<body class="d-flex justify-content-center">
  <fieldset class="max-w shadow-lg p-4 m-5">
    <legend class="h2 my-3">Edit offer</legend>
      <img class="img-thumbnail rounded" src="../img/<?=$img?>" alt="<?=$location?>">
    </legend>

    <form action="actions/update.php" method="post" enctype="multipart/form-data">

      <table class="table">
        <tr>
          <th>Location</th>
          <td>
            <input class="form-control" type="text" name="location" placeholder="Location name" value="<?=$location?>">
          </td>
        </tr>
        <tr>
          <th>Image</th>
          <td>
            <input class="form-control" type="file" name="img">
            <input class="form-control mt-2" type="text" name="src" placeholder="Image source" value="<?=$src?>">
          </td>
        </tr>
        <tr>
          <th>City</th>
          <td>
            <input class="form-control" type="text" name="city" placeholder="City" value="<?=$city?>">
          </td>
        </tr>
        <tr>
          <th>Region</th>
          <td>
            <input class="form-control" type="text" name="region" placeholder="Region" value="<?=$region?>">
          </td>
        </tr>
        <tr>
          <th>Country</th>
          <td>
            <input class="form-control" type="text" name="country" placeholder="Country" value="<?=$country?>">
          </td>
        </tr>
        <tr>
          <th>Description</th>
          <td>
            <input class="form-control" type="text" name="description" placeholder="Description" value="<?=$description?>">
          </td>
        </tr>
        <tr>
          <th>Price</th>
          <td>
            <input class="form-control" type="number" name="price" placeholder="Price" step="any" value="<?=$price?>">
            <input class="form-control" type="text" name="per" placeholder="per" value="<?=$per?>">
          </td>
        </tr>
        <tr>
          <th>Longitude</th>
          <td>
            <input class="form-control" type="text" name="longitude" placeholder="Longitude" value="<?=$longitude?>">
          </td>
        </tr>
        <tr>
          <th>Latitude</th>
          <td>
            <input class="form-control" type="text" name="latitude" placeholder="Latitude" value="<?=$latitude?>">
          </td>
        </tr>
        <tr>
          <th>URL</th>
          <td>
            <input class="form-control" type="text" name="url" placeholder="URL" value="<?=$url?>">
          </td>
        </tr>
        <tr>
          <th>Free</th>
          <td>
            <select class="form-select" name="free" aria-label="Select status">
              <?=$status?>
            </select>
        </tr>
        <tr>
          <input type="hidden" name="id" value="<?=$entry["id"]?>">

          <input type="hidden" name="img" value="<?=$entry["img"]?>">
          <td>
            <button class="btn btn-success" type="submit">Save</button>
          </td>
          <td>
            <a class="btn btn-warning" href="../index.html">Back</a>
          </td>
        </tr>
      </table>
    </form>
  </fieldset>
</body>

</html>