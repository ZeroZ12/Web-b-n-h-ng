<?php

function view($path_view, $data  = [])
{
    extract($data);

    $path_view = str_replace(".", "/", $path_view);

    include_once ROOT_DIR . "Views/$path_view.php";

}

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}