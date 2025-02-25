<?php

class HomeController
{
    public function index()
    {
        $laptops = (new Product)->listProductLaptop();
        $products = (new Product)->listProductOtherLaptop();

        $pcComponents = (new Product)->listPcComponents();
        $PCs = (new Product)->listPcComponent();

        $categories = (new Category)->all();

        return view("clients.home", compact('laptops', 'products', 'pcComponents', 'PCs', 'categories'));
    }
}