<?php

session_start();

require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../Common/function.php";

//Require model
require_once __DIR__ . "/../Models/Model.php";
require_once __DIR__ . "/../models/Category.php";
require_once __DIR__ . "/../models/Product.php";
require_once __DIR__ . "/../models/User.php";


//require controllers
require_once __DIR__ . "/../controllers/admin/AdminProductController.php";
require_once __DIR__ . "/../controllers/admin/AdminCategoryController.php";
require_once __DIR__ . "/../controllers/admin/DashboardController.php";

$ctl = $_GET['ctl'] ?? "";

match ($ctl) {
    '' => (new Dashboard)->index(),
    'listsp' => (new Products)->index(),
    'addsp' => (new Products)->create(),
    'storesp' => (new Products)->store(),
    'editsp' => (new Products)->edit(),
    'updatesp' => (new Products)->update(),
    'deletesp' => (new Products)->delete(),

    default =>view('errors.404'),
};