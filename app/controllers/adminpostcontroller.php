<?php

namespace MVC\controllers;
use MVC\CORE\Session;
use MVC\core\controller;

class adminpostcontroller extends controller
{
    public function __construct()
    {
        Session::Start();
        $user_data = Session::Get('user');
        if(empty($user_data)){
            echo "Page not found 404!";
            die;
        }

    }
    public function index()
    {
        $this->view('back/article', ['title' => 'admin']);
    }
}
