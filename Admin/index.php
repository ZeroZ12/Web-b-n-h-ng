<?php

session_start();
require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../Common/function.php";

//Require model
require_once __DIR__ . "/../Models/BaseModel.php";
require_once __DIR__ . "/../Models/Category.php";
require_once __DIR__ . "/../Models/Product.php";
require_once __DIR__ . "/../Models/User.php";
require_once __DIR__ . "/../Models/Order.php";


//require controllers
require_once __DIR__ . "/../Controllers/Admin/Categorys.php";
require_once __DIR__ . "/../Controllers/Admin/Dashboards.php";
require_once __DIR__ . "/../Controllers/Admin/Products.php";


$ctl = $_GET['ctl'] ?? "";

match ($ctl) {
    '' => (new Dashboards)->index(),
    'listsp' => (new Products)->index(),
    'addsp' => (new Products)->create(),
    'storesp' => (new Products)->store(),
    'editsp' => (new Products)->edit(),
    'updatesp' => (new Products)->update(),
    'deletesp' => (new Products)->delete(),

    'listdm' => (new Categorys)->index(),
    'adđm'=> (new Categorys)->add(),
    'store' => (new Categorys)->store(),
    'editdm' => (new Categorys)->edit(),
    'updatedm'=> (new Categorys)->update(),
    'deletedm' => (new Categorys)->delete(),
 
    default =>view('errors.404'),
};