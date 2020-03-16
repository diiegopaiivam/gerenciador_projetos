<?php

namespace App;

use App\Response;
use App\Exceptions\HttpException;


Class App {

    private $router;
    private $container;
    private $middlewares = [
        'before'    => [],
        'after'     => [],
     ];

    public function __construct($router, $container){
        $this->container = $container;
        $this->router = $router;
    }

    public function middleware($on, $callback){
        $this->middlewares[$on][] = $callback;
    }

    public function run(){
        try {
            $result = $this->router->run();
            $response = new Response;
        
            $params = [
                'container' => $this->container,
                'params' => $result['params'],
            ];
            
            foreach ($this->middlewares['before'] as $middleware){
                $middleware($this->container);
            }
        
            $response($result['action'], $params);
        
            foreach($this->middlewares['after'] as $middleware){
                $middleware($this->container);
            }
        
        
        } catch(HttpException $e) {
            echo $e->getMessage();
        }
    }
}