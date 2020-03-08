<?php 

require __DIR__.'/vendor/autoload.php';

$router = new App\Router;

require __DIR__.'/settings/containers.php';
require __DIR__.'/settings/routes.php';

try {
    echo $router->run();
} catch(\App\Exceptions\HttpException $e) {
    echo $e->getMessage();
}
