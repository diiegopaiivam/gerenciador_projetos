<?php 

require __DIR__.'/vendor/autoload.php';

$router = new App\Router;

require __DIR__.'/settings/containers.php';

require __DIR__.'/settings/events.php';
require __DIR__.'/settings/routes.php';

$app = new App\App($router, $container);

require __DIR__.'/settings/middlewares.php';

$app->run();
