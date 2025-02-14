<?php

session_start();

//Model
require_once __DIR__ . "/env.php";
require_once __DIR__ . "/Common/function.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Model.php";
require_once __DIR__ . "/Models/Order.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/User.php";
require_once __DIR__ . "/Models/Comment.php";

//Controller
require_once __DIR__ . "/Controllers/AutherController.php";
require_once __DIR__ . "/Controllers/CartController.php";
require_once __DIR__ . "/Controllers/HomeController.php";
require_once __DIR__ . "/Controllers/OrderController.php";
require_once __DIR__ . "/Controllers/ProductController.php";

$ctl = $_GET['ctl'] ?? '';

match ($ctl) {
    '', 'home' => (new HomeController)->index(),
    // 'category' => (new ProductController)->list()
    'detail' => (new ProductController)->show(),
    'register' => (new AuthController)->register(),
    'login' =>( new AuthController)->login(),
    'logout' => (new AuthController)->logout(), 
    'search' => (new SearchController)->search(),
    'checkout' => ( new CartController)->checkOut(),
    'success' => (new CartController)->success(),
    default => view( 'errors.404'),
};

echo "trang chủ";