<?php

class AutherController 
{
    public function register()
    {
        $message = $_SESSION['message'] ?? null;
        unset($_SESSION['message']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = $_POST;

            $userModel = new User;

            if($userModel->emailExists($data['email'])) {
                $_SESSION['message'] = "Email này đã tồn tại";
                header("location: " . ROOT_URL . "?ctl=register");
                exit();
            }

            // Mặc định gán role là 'user' nếu không có trong request
            $data['role'] = $data['role'] ?? 'user';

            // $password = $_POST['password'];
            $password = password_hash(($data['password']), PASSWORD_DEFAULT);
            $data['password'] = $password;

            (new User)->create($data);

            $_SESSION['message'] = 'Đăng ký thành công';

            header("location: " . ROOT_URL . "?ctl=login");
            exit(); // Dừng chương trình ngay sau khi chuyển hướng
        }
        return view('clients.users.register', compact('message'));
    }
    public function login()
    {
        $error = null;
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $email = $_POST['email'];

            $password = $_POST['password'];

            $user = (new User)->findUserOfEmail($email);

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user'] = $user;

                    if ($user['role'] == 'admin') {
                        header("location: " . ADMIN_URL);
                        exit(); // Dừng chương trình ngay sau khi chuyển hướng
                    }
                    header("location: " . ROOT_URL);
                    exit(); // Dừng chương trình ngay sau khi chuyển hướng
                } else {
                    $error = "Email / Mật khẩu của bạn không đúng";
                }
            } else {
                $error = "Email / Mật khẩu của bạn không đúng";
            }
        }
        $message = session_flash('message');
        return view('clients.users.login', compact('message', 'error'));
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header("location: index.php");
    }

    public function index()
    {
        $users = (new User)->all();
        return view('admin.user.list', compact('users'));
    }

    public function update()
    {
        $data = $_POST;
        $data['active'] = $data['active'] ? 0 : 1;
        (new User)->updateActive($data['id'], $data['active']);
        return header('location: ' . ADMIN_URL . '?ctl=listuser');
    }
}
