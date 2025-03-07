<?php

class Dashboards
{
    public function __construct()
    {
        $user = $_SESSION['user'] ?? [];

        // Nếu user chưa đăng nhập hoặc không phải admin, chuyển hướng về trang chủ
        if (!$user || $user['role'] !== 'admin') {
            header("location: " . ROOT_URL);
            exit();
        }
    }

    public function index()
    {
        return view('admin.dash');
    }
}
