<?php

namespace MVC\controllers;

use MVC\CORE\Session;
use MVC\core\controller;
use MVC\models\category;
use MVC\core\helpers;

class admincategorycontroller extends controller
{
    public $user_data;
    public $category;

    public function __construct()
    {
        Session::Start();
        $this->user_data = Session::Get('user');
        if (empty($this->user_data)) {
            echo "class not access";
            die;
        }
        $this->category = new category;
    }
    public function index()
    {
        $data = $this->category->GetAllCategory();
        $this->view('back/category', ['title' => 'admin', 'data' => $data]);
    }
    public function delete($id)
    {
        $data = $this->category->deletecategory($id);
        if ($data) {
            helpers::redirect('admincategory');
        }
    }

    public function add()
    {
        $this->view('back/addcategory', []);
    }
    public function postadd()
    {

        $img = $_FILES['img'];
        move_uploaded_file($img['tmp_name'], 'img/' . $img['name']);



        $data = ['name' => $_POST['name'], 'icon' => $_POST['icon'], 'user_id' => 2, 'img' => $img['name']];
        $data = $this->category->addcategory($data);
        if ($data) {
            helpers::redirect('admincategory/index');
        }
    }

    public function update($id)
    {
        $data = $this->category->GetCategory($id);
        $this->view('back/updatecategory',['data'=>$data]);
    }
    public function postupdata($data)
    {
        $data = ['name' => $_POST['name'], 'icon' => $_POST['icon']];
        $data = $this->category->addcategory($data);
        if ($data) {
            helpers::redirect('admincategory');
        }
    }
}
