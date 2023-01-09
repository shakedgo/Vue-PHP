<?php 
header('Access-Control-Allow-Origin: *'); // enable cors

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Retrieve the request body
  $input = file_get_contents('php://input');
  $data = json_decode($input, true);

  // Validate the form data
  if (empty($data['name'])) {
    $errors['name'] = 'Name is required';
  }
  if (empty($data['email'])) {
    $errors['email'] = 'Email is required';
  }
  if (empty($data['pass'])) {
    $errors['pass'] = 'Password is required';
  }

  // If the form data is valid, process it
  if (empty($errors)) {
    // Return a success response
    header('Content-Type: application/json');
    echo json_encode([
      'success' => true,
      'name' => $data['name'],
      'mail' => $data['email'],
      'password' => $data['pass'],
    ]);
    exit;
  } else {
    // Return an error response
    header('Content-Type: application/json');
    http_response_code(400);
    echo json_encode([
      'success' => false,
      'errors' => $errors
    ]);
    exit;
  }
} else {
    echo 'method not allowed, POST only';
}

?>