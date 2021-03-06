<?php 

namespace Config\Controllers;

use Config\Models\Users;

class UserController {

    public function index($container, $request){
        
        $user = new Users($container);
        return $user->all();
       
    }

    public function show($container, $request){
        
        $user = new Users($container);
        $id = $request->attributes->get(1);
        return $user->get(['id' => $id]);
       
    }

    public function create($container, $request){

        $user = new Users($container);
        return $user->create($request->request->all());
    
    }

    public function update($container, $request){
        $user = new Users($container);
        $id = $request->attributes->get(1);
        return $user->update($id, $request->request->all());
    }

    public function delete($container, $request){
        $user = new Users($container);
        $id = $request->attributes->get(1);
        return $user->delete(['id' => $id]);
    }

}