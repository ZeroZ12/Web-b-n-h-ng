<?php

function view($path_view, $data  = [])
{
    extract($data);

    $path_view = str_replace(".", "/", $path_view);

    include_once ROOT_DIR . "Views/$path_view.php";

}
// var_dump(ROOT_DIR);
// exit;

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function session_flash($key)
{
    $message = $_SESSION[$key] ?? '';
    unset($_SESSION[$key]);
    return $message;
}