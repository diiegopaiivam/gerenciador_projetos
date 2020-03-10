<?php 

namespace Config\Controllers;

use Config\Models\Users;

class UserController {

    public function show($container, $request){
        
        $user = new Users($container);
        return $user->get($request->attributes->get(1));
       
    }

}