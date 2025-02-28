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
require_once __DIR__ . "/../Models/Comment.php";



//require controllers
require_once __DIR__ . "/../Controllers/Admin/Categorys.php";
require_once __DIR__ . "/../Controllers/Admin/Dashboards.php";
require_once __DIR__ . "/../Controllers/Admin/Products.php";
require_once __DIR__ . "/../Controllers/AutherController.php";
require_once __DIR__ . "/../Controllers/OrderController.php";
require_once __DIR__ . "/../Controllers/Admin/CommentController.php";

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
    'adddm'=> (new Categorys)->add(),
    'store' => (new Categorys)->store(),
    'editdm' => (new Categorys)->edit(),
    'updatedm'=> (new Categorys)->update(),
    'deletedm' => (new Categorys)->delete(),

    'listuser' => (new AutherController)->index(),
    'updateuser' => (new AutherController)->update(),
    'detailA' => (new AutherController)->userAdminDetail(),
    'update-us' => (new AutherController)->updatedetailuserA(),

    'listorder' => (new OrderController)->index(),
    'detilorder' => (new OrderController)->show(),
    'status-order' => (new OrderController)->orderstast(),

    'product-comment' => (new CommentController)->index(),
    'detail-comment' => (new CommentController)->list(),
    'active-comment' => (new CommentController)->updateActive(),
    default =>view('errors.404'),
};