<?php 

$router->add('GET', '/', function() use ($container){
    $pdo =  $container['db'];
    var_dump($pdo);
    return 'Estamos aqui na homepage';
});

$router->add('GET', '/projetos/(\d+)', function($params){
    return 'Estamos listando o projeto de id:'. $params[1];
});