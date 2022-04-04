<?php

require_once "connect.php";

// Database query
$table = "offers";
$query = "SELECT * FROM $table WHERE id = $id";
$result = mysqli_query($connect, $query);
$entry = mysqli_fetch_assoc($result);

// Store values into variables
$location = @$entry["location"] ?: null;
$city = @$entry["city"] ?: null;
$country = @$entry["country"] ?: null;
$description = @$entry["description"] ?: null;
$price = @$entry["price"] ?: null;
$latitude = @$entry["latitude"] ?: null;
$longitude = @$entry["longitude"] ?: null;
$img = @$entry["img"] ?: null;
$src = @$entry["src"] ?: null;
$url = @$entry["url"] ?: null;
$free = @$entry["free"] ?: null;

// Close database connection
mysqli_close($connect);