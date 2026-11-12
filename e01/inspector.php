<?php

header("Content-Type: application/json");

$datos = [
    'metodo' => $_SERVER['REQUEST_METHOD'] ?? 'DESCONOCIDO',
    'protocolo' => $_SERVER['SERVER_PROTOCOL'] ?? 'DESCONOCIDO',
    'uri' => $_SERVER['REQUEST_URI'] ?? '',
    'get' => $_GET,
    'post' => $_POST,
]; 

echo json_encode($datos); 

?>