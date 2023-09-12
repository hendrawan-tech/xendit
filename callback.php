<?php

$rawData = file_get_contents("php://input");

if (!empty($rawData)) {
    $data = json_decode($rawData, true);

    if ($data !== null) {
        $jsonCallbackValue = json_encode($data);
        echo 'Callback Value: ' . $jsonCallbackValue . '<br>';
    } else {
        echo 'Error decoding JSON data.';
    }
} else {
    echo 'No data received in the request body.';
}
