<?php

namespace MVC\models;

use Dcblogdev\PdoWrapper\Database;
use MVC\core\model;

class category extends model
{
    public function GetAllCategory()
    {
        $data = model::db()->rows("SELECT * FROM category");
        return $data;
    }
    public function GetCategory($id)
    {
        $data = model::db()->row("SELECT * FROM category where `id` = $id");
        return $data;
    }
    public function deletecategory($id)
    {
        $data = model::db()->delete("category", ['id' => $id]);
        return $data;
    }
    public function updatecategory($id)
    {

        // $data = model::db()->update("category", ['id' => $id]);
        // return $data;
    }
    public function addcategory($data)
    {
         $data = model::db()->insert("category",$data);
        return $data;
    }
}
