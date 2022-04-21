<?php
require_once "../../api/connect.php";

if ($_POST) {
  $id = $_POST["id"];
  $img = $_POST["img"];

  $query = "DELETE FROM offers WHERE id = $id";
  if (mysqli_query($connect, $query)) {
    $class = "success";
    $message = "Successfully Deleted!";
    header("refresh:3;url=../../offers.html");
  } 
  else {
    $class = "danger";
    $message = "The entry was not deleted due to:<br>".$connect->error;
    header("refresh:3;url=../offers.php?id=$id");
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
  <title>Delete offer</title>
  <link rel="stylesheet" href="../../css/style.css">
  <?php require_once "../../php/bootstrap.php"?>
</head>

<body>
  <div class="container max-w">
    <div class="mt-3 mb-3">
      <h1>Delete offer</h1>
    </div>
    
    <div class="alert alert-<?=$class?>" role="alert">
      <p><?=$message?></p>
    </div>
  </div>
</body>

</html>