<?php

$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);

if (count($routesArray) == 0) {
    $json = array(
        'status' => 404,
        'result' => "not found"
    );
    echo json_encode($json, http_response_code($json['status']));
    return;
}



