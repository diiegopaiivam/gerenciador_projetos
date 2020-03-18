<?php 

use Config\Models\Users;

$router->add('GET', '/', function() use ($container){
    $pdo =  $container['db'];
    var_dump($pdo);
    return 'Estamos aqui na homepage';
});

$router->add('GET', '/users', '\Config\Controllers\UserController::index');
$router->add('GET', '/users/(\d+)', '\Config\Controllers\UserController::show');
$router->add('POST', '/users', '\Config\Controllers\UserController::create');
$router->add('PUT', '/users/(\d+)', '\Config\Controllers\UserController::update');
$router->add('DELETE', '/users/(\d+)', '\Config\Controllers\UserController::delete');