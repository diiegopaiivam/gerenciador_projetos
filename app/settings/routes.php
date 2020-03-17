<?php 

use Config\Models\Users;

$router->add('GET', '/', function() use ($container){
    $pdo =  $container['db'];
    var_dump($pdo);
    return 'Estamos aqui na homepage';
});

$router->add('GET', '/users/(\d+)', '\Config\Controllers\UserController::show');