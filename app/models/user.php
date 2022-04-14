<?php

namespace MVC\models;
use Dcblogdev\PdoWrapper\Database;
use MVC\core\model;
class user extends model
{
    public function GetAllUsers(){
        $data = model::db()->rows("SELECT * FROM employees");
        return $data;
    }
    public function GetUser($email, $password){
        $data = model::db()->row("SELECT * FROM employees WHERE email = ? && password = ?", [$email, $password]);
        return $data;
    }
}
