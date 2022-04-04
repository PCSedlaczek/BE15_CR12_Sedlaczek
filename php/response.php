<?php

function response($status, $message, $data)
{
  $response = [
    "status" => $status,
    "message" => $message,
    "data" => $data,
  ];

  echo json_encode($response);
}