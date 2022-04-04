<?php

header("Content-Type:application/json");

// ID passed to URL
if(!empty($_GET["id"])){
   $id = $_GET["id"];

  // Check ID in database and get values
  require_once("check.php");

  // ID not found in database
  if(empty($location) && empty($city) && empty($country)){
    response(200, "Entry not found", NULL, NULL);
  }
  // ID found in database
  else {
    response(200, "Entry found", $location, $city, $country, $description, $price, $latitude, $longitude, $img, $src, $url, $free);
  }
}
// No ID passed to URL
else {
  response(400, "Invalid request", NULL, NULL);
}

// Deliver JSON response
function response($status, $message, $location, $city, $country, $description, $price, $latitude, $longitude, $img, $src, $url, $free) {
     
  // Offer array
  $offer["status"] = $status;
  $offer["message"] = $message;
  $offer["location"] = $location;
  $offer["city"] = $city;
  $offer["country"] = $country;
  $offer["description"] = $description;
  $offer["price"] = $price;
  $offer["latitude"] = $latitude;
  $offer["longitude"] = $longitude;
  $offer["img"] = $img;
  $offer["src"] = $src;
  $offer["url"] = $url;
  $offer["free"] = $free;

  // Generate JSON from $response array
  $json = json_encode($offer);

  // Output JSON to client
  echo $json;
}
?>