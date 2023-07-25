<?php
// Read raw POST data
$rawData = file_get_contents('php://input');

// Attempt to decode JSON data
$decodedData = json_decode($rawData, true);

if ($decodedData === null) {
    // JSON decoding failed, handle the error
    $response = array('error' => 'Invalid JSON data');
} else {
    // JSON decoding successful, process the data
    // For this example, we'll simply log the received data
    file_put_contents('received_data.log', print_r($decodedData, true) . PHP_EOL, FILE_APPEND);

    // Prepare a response
    $response = array('message' => 'JSON data received successfully');
}

// Set the response headers
header('Content-Type: application/json');

// Send the response
echo json_encode($response);
