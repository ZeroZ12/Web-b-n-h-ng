<?php

class CartController
{
    public function add()
    {
        $cartst = $_SESSION['carts'] ?? [];

        $id = $_GET['id'];

        $product = (new Product)->find($id);

        // if(isset($cartst[$id])) {
        //     return header("location: " . $_SESSION['URI']);
        // }

        if(isset($cartst[$id])) {
            $cartst[$id]['quantity'] += 1;
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
    // Kiểm tra nếu có dữ liệu gửi từ form
    if (isset($_POST['quantity'])) {
        $quantities = $_POST['quantity'];

        // Duyệt qua các sản phẩm trong giỏ hàng và cập nhật số lượng
        foreach ($quantities as $id => $qty) {
            // Chỉ cập nhật nếu sản phẩm tồn tại trong giỏ hàng và số lượng là hợp lệ
            if (isset($_SESSION['carts'][$id]) && is_numeric($qty) && $qty > 0) {
                $_SESSION['carts'][$id]['quantity'] = (int) $qty;
            }
        }

        // Cập nhật lại tổng số lượng trong giỏ hàng
        $_SESSION['totalQuantity'] = $this->totalQuantityInCart();
    }

    // Chuyển hướng người dùng đến trang giỏ hàng sau khi cập nhật
    return header("location: " . ROOT_URL . "?ctl=view-cart");
}
    public function delete()
    {
        $id = $_GET['id'];

        unset($_SESSION['carts'][$id]);
        
        // $_SESSION['carts'] = [];

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
    public function checkout()
    {
        $user_id = $_POST['user_id'] ?? null;
        $fullname = $_POST['fullname'] ?? null;
        $phone = $_POST['phone'] ?? null;
        $address = $_POST['address'] ?? null;
        $payment_method = $_POST['payment_method'] ?? null;

        if(!$user_id || !$fullname || !$phone || !$address || !$payment_method) {
            die("Vui lòng nhập đầy đủ thông tin thanh toán!!");
        }

        $user = [
            'id' => $user_id,
            'fullname' => $fullname,
            'phone' => $phone,
            'address' => $address,
            'role' => $_SESSION['user']['role'],
            'active' => $_SESSION['user']['active'],
        ];
        (new User)->update($user_id, $user);

        $sumPrice = $this->totalPriceInCart();

        if($sumPrice <= 0){
            die("Giỏ hàng của bạn hiện ko có sp để thanh toán");
        }

        $order = [
            'user_id' => $user_id,
            'status' => 1,
            'payment_method' => $payment_method,
            'total_price' => $sumPrice,
        ];
        $order_id = (new Order)->create($order);

        $cartst = $_SESSION['carts'] ?? [];
        foreach ($cartst as $id =>$cart) {
            $order_detail = [
                'order_id' => $order_id,
                'product_id' => $id,
                'price' => $cart['price'],
                'quantity' => $cart['quantity'],
            ];
            (new Order)->createOrderDetail($order_detail);
        }

        $_SESSION['last'] = $_SESSION['carts'];

        $this->clearCart();

        return header("location: " . ROOT_URL . '?ctl=success');
    }
    public function clearCart()
    {
        unset($_SESSION['carts']);
        unset($_SESSION['totalQuantity']);
        unset($_SESSION['URI']);
    }
    public function success()
    {
        $user = $_SESSION['user'] ?? null;
        $carts = $_SESSION['last'] ?? [];
        $sumPrice = $this->totalPriceInCart(); 
        return view("clients.carts.success", compact('user', 'carts', 'sumPrice'));
    }
}