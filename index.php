<?php

session_start();

//Model
require_once __DIR__ . "/env.php";
require_once __DIR__ . "/Common/function.php";
require_once __DIR__ . "/Models/BaseModel.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/User.php";
require_once __DIR__ . "/Models/Order.php";
require_once __DIR__ . "/Models/Comment.php";

//Controller
require_once __DIR__ . "/Controllers/AutherController.php";
require_once __DIR__ . "/Controllers/CartController.php";
require_once __DIR__ . "/Controllers/HomeController.php";
require_once __DIR__ . "/Controllers/SearchController.php";
require_once __DIR__ . "/Controllers/OrderController.php";
require_once __DIR__ . "/Controllers/ProductController.php";

$ctl = $_GET['ctl'] ?? '';

match ($ctl) {
    '', 'home' => (new HomeController)->index(),
    'category' => (new ProductController)->list(),
    'detail' => (new ProductController)->show(),
    'register' => (new AutherController)->register(),
    'login' =>( new AutherController)->login(),
    'logout' => (new AutherController)->logout(), 
    'add-cart' => (new CartController)->add(),
    'view-cart' => (new CartController)->view(),
    'delete-cart' => (new CartController)->delete(),
    'update-cart' => (new CartController)->update(),
    'search' => (new SearchController)->search(),
    'view-check' => (new CartController)->viewCheck(),
    'checkout' => (new CartController)->checkout(),
    'success' => (new CartController)->success(),
    'list-order' => (new OrderController)->showUser(),
    'order-detail' => (new OrderController)->detail(),
    default => view( 'errors.404'),
};