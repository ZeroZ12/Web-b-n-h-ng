<?php include_once ROOT_DIR . "./Views/clients/header.php" ?>

<div class="signup bg-white p-6 rounded-lg shadow-lg w-full max-w-sm">
    <?php if ($message != '') : ?>
        <div class="mt-3 mb-3 alert alert-success">
            <?= $message ?>
        </div>
    <?php endif ?>
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold">ĐĂNG KÝ TÀI KHOẢN</h2>
        <button class="text-gray-500 text-xl">&times;</button>
    </div>
    <form action="<?= ROOT_URL . '?ctl=register' ?>" method="post">
        <div class="mb-4">
            <input type="text" name="fullname" placeholder="Họ và Tên" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <input type="email" name="email" placeholder="Email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <input type="number" name="phone" placeholder="Số điện thoại" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <input type="password" name="password" placeholder="Mật khẩu" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <input type="text" name="address" placeholder="Địa chỉ" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4 flex items-center">
            <input type="checkbox" id="subscribe" class="mr-2">
            <label for="subscribe" class="text-sm">Đăng ký nhận tin khuyến mãi qua Email</label>
        </div>
        <button type="submit" class="w-full bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700">TẠO TÀI KHOẢN</button>
    </form>
    <div class="flex items-center my-4">
        <hr class="flex-grow border-t border-gray-300">
        <span class="mx-2 text-gray-500">hoặc đăng ký bằng</span>
        <hr class="flex-grow border-t border-gray-300">
    </div>
    <div class="flex justify-between">
        <button class="w-1/2 bg-red-600 text-white py-2 rounded-lg font-semibold flex items-center justify-center mr-2">
            <i class="fab fa-google mr-2"></i> Google
        </button>
        <button class="w-1/2 bg-blue-600 text-white py-2 rounded-lg font-semibold flex items-center justify-center ml-2">
            <i class="fab fa-facebook-f mr-2"></i> Facebook
        </button>
    </div>
    <div class="text-center mt-4">
        <p class="text-sm">Bạn đã có tài khoản? <a href="index.php?ctl=login" class="text-blue-500">Đăng nhập!</a></p>
    </div>
</div>

<?php include_once ROOT_DIR . "./Views/clients/footer.php" ?>