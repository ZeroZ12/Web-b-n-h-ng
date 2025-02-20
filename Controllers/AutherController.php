<?php

class AutherController
{
    public function register()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $data = $_POST;

            $password = $_POST['password'];

            $password = password_hash($password, PASSWORD_DEFAULT);

            $data['password'] = $password;

            (new User)->create($data);

            $_SESSION['message'] = 'Đăng ký thành công';

            header("location: " . ROOT_URL . "?ctl=login");
            die;
        }
        return view('clients.users.register');
    }

    public function login()
    {
        $error = null;
        if($_SERVER['REQUEST_METHOD'] === "POST")
        {
            $email = $_POST['email'];

            $password = $_POST['password'];

            $user = (new User)->findUserOfEmail($email);

            if($user)
            {
                if(password_verify($password, $user['password']))
                {
                    $_SESSION['user'] = $user;

                    if($user['role'] == 'admin')
                    {
                        header("location: " . ADMIN_URL);
                    }header("location: " . ROOT_URL);
                }else{
                    $error = "Email / Mật khẩu của bạn không đúng";
                }
            }else{
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
        return view('admin.users.list', compact('users'));
    }

}