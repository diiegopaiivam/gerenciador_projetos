<?php 

namespace Config\Events;

class UsersCreated{
    
    public function __invoke($e){
        $event = $e->getName();
        $params = $e->getParams();
        echo $data = sprintf('Disparado event "%s" , com parâmetros: %s', $event , json_encode($params));
    }
}