<?php
require_once "../api/connect.php";

if (isset($_GET["id"]) && !empty($_GET["id"])) {
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= "$location"?> Details</title>
  <link rel="stylesheet" href="../style/style.css">
  <?php require_once "../php/bootstrap.php"?></head>

<body>

  <div class="container d-flex justify-content-center">
    <div class="m-auto mt-3">

      <div class="text-end">
        <a class="btn btn-sm btn-info link-light" href="../offers.html">Back</a>
      </div>
      <h1 class="text-white mt-0 mb-4">Offer details</h1>

      <table class="table shadow-lg bg-white max-w">
        <tbody>
          <tr>
            <td class="p-3">
              <span class="badge bg-light text-dark"><?=$country?></span>
              <br>
              <a href="../img/<?=$img?>">
                <img class="img-thumbnail my-1" src="../img/<?=$img?>" alt="<?=$src?>">
              </a>
            </td>

            <td class="p-3">
              <h3 class="card-title">
                <?=$location?>
              </h3>
              <p>
                <b>Location:</b>
                <?=$city?>, <?=$region?>, <?=$country?>
              </p>
              <p class="<?=$d_description?>">
                <b>Description:</b>
                  <?=$description?>
              </p>
              <p>
                <b>Price:</b>
                  From <?=$price?>€/<?=$per?>
                </a>
              <p>
              <p>
                <i class="bi bi-globe"></i>
                <a class="text-decoration-none" href="<?=$url?>"><?=$location?></a>
              </p>

              <a class=" btn btn-sm btn-light link-dark my-2" href="../user/home.php?status=<?=$free?>">
                <?=$free?>
              </a>
            </td>
            <td class="p-3">
              <a class="btn btn-success btn-sm my-1" href="edit.php?id=<?=$id?>">
              Edit</a>
              <a class="btn btn-danger btn-sm my-1" href="delete.php?id=<?=$id?>">
              Delete</a><br>
            </td>

          </tr>
        </tbody>
      </table>

      <div id="map" class="mb-5"></div>

    </div>
  </div>
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
  <script>
  var map;
  function initMap() {
    var location = {
    lat: <?=$entry["latitude"]?>,
    lng: <?=$entry["longitude"]?>
    };

    map = new google.maps.Map(document.getElementById("map"), {
      center: location,
      zoom: 8
    });
    var pinpoint = new google.maps.Marker({
      position: location,
      map: map
      });
    }
    initMap()
  </script>

</body>

</html>