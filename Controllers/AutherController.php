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

    public function detail($id)
    {
        $users = (new User)->find($id);
        return view('clients.users.login', compact('users'));
    }
    public function update()
    {
        $data = $_POST;
        $data['active'] = $data['active'] ? 0 : 1;
        (new User)->updateActive($data['id'], $data['active']);
        return header('location: ' . ADMIN_URL . '?ctl=listuser');
    }
    public function detailuser()
    {
        $user = $_SESSION['user'];
        return view('clients.users.detail', compact('user'));
    }

    public function updatedetailuser()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $id = $_SESSION['user']['id'];
            $fullname = $_POST['fullname'] ?? '';
            $email = $_POST['email'] ?? '';
            $address = $_POST['address'] ?? '';
            $phone = $_POST['phone'] ?? '';

            $userMo = new User;

            $exitUser = $userMo->findUserOfEmail($email);
            if($exitUser && $exitUser['id'] != $id) {
                $_SESSION['message'] = "Email này đã được sử dụng";
                header("location: " . ROOT_URL . "?ctl=detai-luser");
                exit();
            }
            
            $dataU = [
                'fullname' => $fullname,
                'email' => $email,
                'address' => $address,
                'phone' => $phone
            ];
            $dataU['id'] = $id;
            if($userMo->updateUser($id,$dataU)){
                $_SESSION['message'] = "CẬP NHẬT THÀNH CÔNG";
            } else {
                $_SESSION['message'] = "Có lỗi xảy ra";
            }
        
            header("location: " . ROOT_URL . "?ctl=detail-user");
            exit();
        }
        $_SESSION['message'] = "Có lỗi xảy ra";
        header("location: " . ROOT_URL . "?ctl=detail-user");
        exit();
    }
    public function userAdminDetail()
    {
        $user = $_SESSION['user'];
        return view('admin.user.edit', compact('user'));
    }
    public function updatedetailuserA()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $id = $_SESSION['user']['id'];
            $fullname = $_POST['fullname'] ?? '';
            $email = $_POST['email'] ?? '';
            $role = $_POST['role'] ?? '';
            $address = $_POST['address'] ?? '';
            $phone = $_POST['phone'] ?? '';

            $userMo = new User;

            $exitUser = $userMo->findUserOfEmail($email);
            if($exitUser && $exitUser['id'] != $id) {
                $_SESSION['message'] = "Email này đã được sử dụng";
                header("location: " . ROOT_URL . "?ctl=detail-user");
                exit();
            }
            
            $dataU = [
                'id' => $id,
                'fullname' => $fullname,
                'email' => $email,
                'role' => $role,
                'address' => $address,
                'phone' => $phone
            ];

            if($userMo->updateUser($id,$dataU)){
                $_SESSION['message'] = "CẬP NHẬT THÀNH CÔNG";
            } else {
                $_SESSION['message'] = "Có lỗi xảy ra";
            }
        
            header("location: " . ROOT_URL . "?ctl=detail-user");
            exit();
        }
        $_SESSION['message'] = "Có lỗi xảy ra";
        header("location: " . ROOT_URL . "?ctl=detail-user");
        exit();
    }
}
