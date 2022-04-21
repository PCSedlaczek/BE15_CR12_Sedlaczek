<?php
?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
<script>
// Google Maps Script
  var map;
  function initMap() {
      var location = {
      lat: <?=$row["latitude"]?>,
      lng: <?=$row["longitude"]?>
    };
    map = new google.maps.Map(document.getElementById('map'), {
      center: location,
      zoom: 8
    });
    var pinpoint = new google.maps.Marker({
      position: location,
      map: map
        });
    }
</script>





<div id="map" class="mb-5"></div>

<script>
  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: { lat: 48.20849, lng: 16.37208 }, zoom: 8
    });
  }
  var map;
  function initMap() {
    var city = {
      lat: <?php=$latitude?>,
      lng: <?php=$longitude?>
    };
  map = new google.maps.Map(document.getElementById('map'), {
    center: city,
    zoom: 8
  });
  var pinpoint = new google.maps.Marker({
    position: city,
    map: map
  });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer>
</script>