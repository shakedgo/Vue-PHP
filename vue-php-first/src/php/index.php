<?php
  header('Access-Control-Allow-Origin: *'); // enable cors
  
  $requestMethod = $_SERVER['REQUEST_METHOD'];

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo 'GET method';
  } else {
    echo 'method not allowed, GET only';
  }

?>