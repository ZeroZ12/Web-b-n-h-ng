<?php

class OrderController
{
    public function index()
    {
        $orders = (new Order)->all();
        return view("admin.order.list", compact('orders'));
    }
    public function show()
    {
        $id = $_GET['id'];
        $message = "";
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $status = $_POST['status'];
            (new Order)->updateStatus($id, $status);
            $message = "Cập nhật thành công";
        }
        $order = (new Order)->find($id);
        $order_details = (new Order)->listOrderDetail($id);
        $status = (new Order)->status_details;
        return view("admin.order.detail", compact('order','order_details','status','message'));
    }
    public function showUser()
    {
        $user_id = $_SESSION['user']['id'];
        $orders = (new Order)->findOrderUser($user_id);
        $user = $_SESSION['user'];
        $categories = (new Category)->all();
        return view("clients.users.order", compact('orders','user','categories'));
    }
    public function detail()
    {
        $id = $_GET['id'];
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            (new Order)->updateStatus($id,4);
        }
        $order = (new Order)->find($id);
        $user = $_SESSION['user'];
        $order_details = (new Order)->listOrderDetail($id);
        $status = (new Order)->status_details;
        return view("clients.users.list-order", compact('order','user','order_details','status',));
    }
    public function orderstast()
    {
        $orderModel = new Order();
        $totalRevenue = $orderModel->TotalPrice();
        $totalOrder = $orderModel->TotalOrder();
        $grossProfit = $totalRevenue * 0.3;
        return view("admin.order.orderstats",compact('orderModel','totalRevenue','totalOrder','grossProfit'));
    }
}