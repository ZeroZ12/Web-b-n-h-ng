<?php

class HomeController
{
    public function index()
    {
        $product = new Product;
        $laptop = (new Product)->listProductLapGaming();
        $products = (new Product)->listProductOtherLaptop();

        $categories = (new Category)->all();

        return view("clients.home",compact('laptop', 'products' ,'categories'));
    }
}