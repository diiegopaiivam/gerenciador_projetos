<?php

namespace App;

use App\Modules\Contract;

class Module implements Contract {
    public function getNamespaces() :array {

        return [
            'Config\\' => __DIR__ . '/src'
        ];
    }
    public function getContainerConfig() :string {
        return __DIR__ . '/settings/containers.php';
    }
    public function getEventConfig() :string {
        return __DIR__ . '/settings/events.php';
    }
    public function getMiddlewareConfig() :string {
        return __DIR__ . '/settings/middlewares.php';
    }
    public function getRouteConfig() :string {
        return __DIR__ . '/settings/routes.php';
    }
}