<?php



class Products
{

    public function __construct()
    {
        $user = $_SESSION['user'] ?? [];
        if (!$user || $user['role'] != 'admin') {
            header("location: " . ROOT_URL);
            exit(); // Dừng chương trình ngay sau khi chuyển hướng
        }
    }

    public function index()
    {
        $products = (new Product)->all();

        $message = $_SESSION['message'] ?? '';

        unset($_SESSION['message']);

        return view('admin.product.list', compact('products', 'message'));
    }


    public function create()
    {
        $categories = (new Category)->all();

        return view('admin.product.add', compact('categories'));
    }

    public function store()
    {
        $data = $_POST;

        $image = "";

        $file = $_FILES['image'];

        if ($file['size'] > 0) {
            $image = "images/" . $file['name'];
            //upload ảnh
            move_uploaded_file($file['tmp_name'], ROOT_DIR . $image);
        }

        $data['image'] = $image;

        (new Product)->create($data);

        $_SESSION['message'] = "Thêm dữ liệu thành công";

        header("location: " . ADMIN_URL . "?ctl=listsp");

        die;
    }

    public function edit()
    {
        $id = $_GET['id'];

        $product = (new Product)->find($id);

        $categories = (new Category)->all();

        return view(
            'admin.product.edit',
            compact('product', 'categories')
        );
    }

    public function update()
    {
        session_start();

        $data = $_POST;

        $product = new Product;

        $item = $product->find($data['id']);

        $image = $item['image'];

        $file = $_FILES['image'];

        if ($file['size'] > 0) {
            $image = "images/" . $file['name'];
            //upload ảnh
            move_uploaded_file($file['tmp_name'], ROOT_DIR . $image);
        }
        $data['image'] = $image;

        //Update
        $product->update($data['id'], $data);

        $_SESSION['message'] = "Cập nhật sản phẩm thành công!";
        // header("location: " . ADMIN_URL . "?ctl=editsp&id=" . $data['id']);
        header("location: " . ADMIN_URL . "?ctl=listsp");
        die;
    }

    public function delete()
    {
        $id = $_GET['id'];

        (new Product)->delete($id);

        $_SESSION['message'] = "Xóa dữ liệu thành công";

        header("location: " . ADMIN_URL . "?ctl=listsp");
        die;
    }
}
