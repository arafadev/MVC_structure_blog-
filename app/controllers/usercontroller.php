<?php

namespace MVC\controllers;

use GUMP;
use MVC\core\controller;
use MVC\core\helpers;
use MVC\models\user;
use MVC\core\Session;

class usercontroller extends controller
{
    public function __construct()
    {
        Session::Start();
    }
    public function index()
    {
        echo 'welcome to usercontroller';
    }
    public function login()
    {
        $this->view('home/login', ['title' => 'login']);
    }

    public function postlogin()
    {

        $validate = GUMP::is_valid($_POST, [
            'email' => 'required'
        ]);

        if ($validate == 1) {
            $user = new user();
            $data = $user->GetUser($_POST['email'], $_POST['password']);
            Session::Set('user', $data);
            helpers::redirect('adminpost/index');
        }
    }
}
