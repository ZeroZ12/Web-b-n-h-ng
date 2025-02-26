<?php

class ProductController
{
    public function index()
    {
        $id = $_GET['id'];

        //lấy sản phẩm theo danh mục id
        $products = (new Product)->listProductInCategory($id);

        //Lấy tên danh mục
        $title = $products[0]['cate_name'] ?? '';

        $categories = (new Category)->all();

        // Lưu thông tin URI VÀO SESSION
        $_SESSION['URI'] = $_SERVER['REQUEST_URI'];

        return view(
            'clients.category.category',
            compact('products', 'categories', 'title')
        );
    }

    public function show(){

        $id = $_GET['id'];

        $product = (new Product)->find($id);

        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $data = $_POST;
            $data['product_id'] = $id;
            $data['user_id'] = $_SESSION['user']['id'];
            // (new Comment)->create($data);
        }

        $categories = (new Category)->all();

        $title = $product['name'] ?? "";

        $productReleads = (new Product)->listProductReload($product['category_id'], $id);

        $_SESSION['URI'] = $_SERVER['REQUEST_URI'];

        // $_SESSION['totalQuantity'] = (new CartController)-> totalQuantityInCart();
        // $comments = (new Comment)->listCommentInProduct($id);
        return view(
            'clients.products.detail', compact('product','categories','title','productReleads')
        );
    }
    public function list()
    {
        $id = $_GET['id'];
        $products = (new Product)->listProductInCategory($id);
        $category_name = (new Category)->all();
        $categories = (new Category)->all();
        $title = $category_name;
        return view('clients.detail', compact('products','category_name','title','categories'));
    }
}