<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class AuthGroupUserModel{
    protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
    }

    public function getData(){
        $q = $this->db->query("
        SELECT user_id, 
        users.username,
        IF(group_id=1,CONCAT('setRoleNotAdmin/',user_id),CONCAT('setRoleAsAdmin/',user_id)) as urlSetting,
        IF(group_id=1,'Jadikan User','Jadikan Admin') as caption
        FROM auth_groups_users
        INNER JOIN users ON auth_groups_users.user_id = users.id
        ORDER BY username");
        return $q->getResult() ;
    }

    public function setRoleAsAdmin($iduser = null){
        if ($iduser != null){
            $q = $this->db->query('UPDATE auth_groups_users SET group_id=1 WHERE user_id='.$iduser);
            return $q;
        }
    }
    
    public function setRoleNotAdmin($iduser = null){
        if ($iduser != null){
            $q = $this->db->query('UPDATE auth_groups_users SET group_id=2 WHERE user_id='.$iduser);
            return $q;
        }
    }
}