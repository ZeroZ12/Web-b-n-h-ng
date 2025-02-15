<?php

class HomeController
{
    public function index()
    {
        $laptops = (new Product)->listProductLapGaming();
        $products = (new Product)->listProductOtherLaptop();

        $categories = (new Category)->all();

        return view("clients.home",compact('laptops', 'products' ,'categories'));
    }
}