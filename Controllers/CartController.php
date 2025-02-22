<?php

class CartController
{
    public function add()
    {
        $cartst = $_SESSION['carts'] ?? [];

        $id = $_GET['id'];

        $product = (new Product)->find($id);

        if(isset($cartst[$id])) {
            return header("location: " . $_SESSION['URI']);
        }

        if(isset($cartst[$id])) {
            $cartst[$id]['quantity'] = (int) $cartst[$id]['quantity'] + 1;
        }else{
            $cartst[$id] = [
                'name' => $product['name'],
                'image' => $product['image'],
                'price' => $product['price'],
                'quantity' => 1,
            ];
        }
        $_SESSION['carts'] = $cartst;

        $_SESSION['totalQuantity'] = $this->totalQuantityInCart();

        $uri = $_SESSION['URI'];

        return header("location: " . $uri);
    }
    public function totalQuantityInCart()
    {
        $cartst = $_SESSION['carts'] ?? [];
        $total = 0;
        foreach($cartst as $carts) {
            $total += (int) $carts['quantity'];
        }
        return $total;
    }
    public function totalPriceInCart()
    {
        $cartst = $_SESSION['carts'] ?? [];
        $total = 0;
        foreach($cartst as $carts) {
            $total += (int) $carts['price'] * (int) $carts['quantity'];
        }
        return $total;
    }
    public function view()
    {
        $cartst = $_SESSION['carts'] ?? [];
        $categories = (new Category)->all();
        $totalPrice = $this->totalPriceInCart();
        return view('clients.carts.cart', compact('cartst','categories','totalPrice'));
    }
    public function update()
    {
        $quantities = $_POST['quantity'];

        foreach ($quantities as $id => $qty) 
        {
            $_SESSION['carts'][$id]['quantity'] = (int) $qty;
        }
        return header("location: " . ROOT_URL . "?ctl=view-cart");
    }
    public function delete()
    {
        $id = $_GET['id'];

        unset($_SESSION['carts'][$id]);
        
        $_SESSION['carts'] = [];

        $_SESSION['totalQuantity'] = $this->totalQuantityInCart();
        return  header("location: " . ROOT_URL . "?ctl=view-cart");
    }
    public function viewCheck()
    {
        if (!isset($_SESSION['user']))
        {
            return header("location: " . ROOT_URL . '?ctl=login');
        }
        $user = $_SESSION['user'];
        $cartst = $_SESSION['carts'] ?? [];
        $sumPrice = $this->totalPriceInCart();
        return view("clients.carts.checkout", compact('user','cartst','sumPrice'));
    }
}