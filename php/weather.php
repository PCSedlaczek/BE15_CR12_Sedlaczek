<?php

// $cityKey = 31868; // Get from Database

$apiKey = "vvdxJ9TUBYMoSACFuRjGXNGSNMOtRPPD";

$url = "http://dataservice.accuweather.com/currentconditions/v1/$cityKey?apikey=$apiKey&language=en-gb&details=true";

// Initialize new CURL
$client = curl_init($url);

// Set option for CURL transfer
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

// Execute CURL and return response (JSON)
$response = curl_exec($client);

// Close CURL session and free resources
curl_close($client);

// Return information to client
echo $response;