<?php
require_once "../api/connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Offer</title>
  <link rel="stylesheet" href="../css/style.css">
  <?php require_once "../php/bootstrap.php"?>
</head>

<body class="d-flex justify-content-center">
  <fieldset class="max-w shadow-lg p-4 m-5">
    <legend class="h2 my-3">Add offer</legend>
    
    <form action="actions/create.php" method="post" enctype="multipart/form-data">

      <table class="table">
        <tr>
          <th>Location</th>
          <td>
            <input class="form-control" type="text" name="location" placeholder="Location name">
          </td>
        </tr>
        <tr>
          <th>Image</th>
          <td>
            <input class="form-control" type="text" name="img" placeholder="Image URL">
            <input class="form-control mt-2" type="text" name="src" placeholder="Image source">
          </td>
        </tr>
        <tr>
          <th>City</th>
          <td>
            <input class="form-control" type="text" name="city" placeholder="City">
          </td>
        </tr>
        <tr>
          <th>Region</th>
          <td>
            <input class="form-control" type="text" name="region" placeholder="Region">
          </td>
        </tr>
        <tr>
          <th>Country</th>
          <td>
            <input class="form-control" type="text" name="country" placeholder="Country">
          </td>
        </tr>
        <tr>
          <th>Description</th>
          <td>
            <input class="form-control" type="text" name="description" placeholder="Description">
          </td>
        </tr>
        <tr>
          <th>Price</th>
          <td>
            <input class="form-control" type="number" name="price" placeholder="Price">
            <input class="form-control mt-2" type="text" name="per" placeholder="per">
          </td>
        </tr>
        <tr>
          <th>Latitude</th>
          <td>
            <input class="form-control" type="text" name="latitude" placeholder="Latitude">
          </td>
        </tr>
        <tr>
          <th>Longitude</th>
          <td>
            <input class="form-control" type="text" name="longitude" placeholder="Longitude">
          </td>
        </tr>
        <tr>
          <th>URL</th>
          <td>
            <input class="form-control" type="text" name="url" placeholder="URL">
          </td>
        </tr>
        <tr>
          <th>Status</th>
          <td>
            <select class="form-select" name="free" aria-label="Select Status">
              <option selected value="Available">Available</option>
              <option value="Full">Full</option>
              <option value="Closed">Closed</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <button class="btn btn-success" type="submit">Add</button>
          </td>
          <td>
            <a class="btn btn-warning" href="../index.php">Back</a>
          </td>
        </tr>
      </table>
    </form>
  </fieldset>

</body>

</html>