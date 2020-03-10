<?php 

require __DIR__.'/vendor/autoload.php';

$router = new App\Router;

require __DIR__.'/settings/containers.php';
require __DIR__.'/settings/routes.php';

try {
    $result = $router->run();
    $response = new App\Response;

    $params = [
        'container' => $container,
        'params' => $result['params'],
    ];

    $response($result['action'], $params);


} catch(\App\Exceptions\HttpException $e) {
    echo $e->getMessage();
}
