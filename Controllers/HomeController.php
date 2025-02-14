<?php

class HomeController
{
    public function index()
    {
        $product = new Product;
        $laptop = (new Product)->listProductInCategory(1);
        $PC = (new Product)->listProductInCategory(2);

        $categories = (new Category)->all();

        return view("clients.home",compact('laptop', 'PC', 'categories'));
    }
}