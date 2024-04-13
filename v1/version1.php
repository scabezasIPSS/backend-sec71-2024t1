<?php
$_metodo = $_SERVER['REQUEST_METHOD']; // get, post, patch, put, delete
$_ubicacion = $_SERVER['HTTP_HOST']; // localhost
$_path = $_SERVER['REQUEST_URI']; // todo despues del server
$_partes = explode('/', $_path);
$_version = $_partes[2];
$_mantenedor = $_partes[3];
$_parametros = [];
$_parametros = $_partes[4];

if (strlen($_parametros)> 0){
    $_parametros = explode('?', $_parametros)[1];
    $_parametros = explode('&', $_parametros);
}else{
    $_parametros = [];
}

//header
header("Acces-Control-Allow-Origin: *");
header("Acces-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE");
header("Content-Type: application/json; charset=UTF-8");

//Authorization
$_header = null;
try {
    $_header = isset(getallheaders()['Authorization']) ? getallheaders()['Authorization'] : null;
    if ($_header === null){
        throw new Exception("No tiene autorizacion");
    }
} catch (Exception $e) {
    http_response_code(401);
    echo json_encode(['Error' => $e->getMessage()]);
}

//Tokens
$_token_get = 'Bearer get';
$_token_post = 'Bearer post';
$_token_put = 'Bearer put';
$_token_patch = 'Bearer patch';
$_token_delete = 'Bearer delete';