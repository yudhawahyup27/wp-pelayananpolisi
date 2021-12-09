<?php

namespace App\Controllers;

class setAuth extends BaseController
{
    
    public function show(){
        $db = \Config\Database::connect();
        $auth = new \App\Models\AuthGroupUserModel($db);
        $data['data'] = $auth->getData();
        return view('setAuth',$data);
    }

    public function setRoleAsAdmin($iduser = null){
        if ($iduser != null){
            $db = \Config\Database::connect();
            $auth = new \App\Models\AuthGroupUserModel($db);
            if($auth->setRoleAsAdmin($iduser)){
                return redirect()->to(base_url().'/setAuth/show'); 
            }
        }
    }
    
    public function setRoleNotAdmin($iduser = null){
        if ($iduser != null){
            $db = \Config\Database::connect();
            $auth = new \App\Models\AuthGroupUserModel($db);
            if($auth->setRoleNotAdmin($iduser)){
                return redirect()->to(base_url().'/setAuth/show');
            }
        }
    }
}

?>