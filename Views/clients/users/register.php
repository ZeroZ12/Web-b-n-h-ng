<<<<<<< HEAD
<!-- register.php -->
<?php include_once ROOT_DIR . "./Views/clients/header.php" ?>
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl p-8">
        <div class="flex justify-end mb-2">
            <a href="<?= ROOT_URL ?>" class="text-gray-400 hover:text-gray-500">
                <i class="fas fa-times text-lg"></i>
            </a>
        </div>

        <?php if ($message != ''): ?>
        <div class="mb-4 p-3 rounded-lg bg-green-100 text-green-700 text-sm">
            <?= $message ?>
        </div>
        <?php endif; ?>

        <h2 class="text-2xl font-bold text-gray-800 text-center mb-8">ĐĂNG KÝ TÀI KHOẢN</h2>
        
        <form class="space-y-5" action="<?= ROOT_URL . '?ctl=register' ?>" method="post">
            <div>
                <input type="text" name="fullname" placeholder="Họ và Tên" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition duration-200">
            </div>

            <div>
                <input type="email" name="email" placeholder="Email" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition duration-200">
            </div>

            <div>
                <input type="tel" name="phone" placeholder="Số điện thoại" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition duration-200">
            </div>

            <div>
                <input type="password" name="password" placeholder="Mật khẩu" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition duration-200">
            </div>

            <div>
                <input type="text" name="address" placeholder="Địa chỉ" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition duration-200">
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="subscribe" class="w-4 h-4 text-red-600 rounded focus:ring-red-500">
                <label for="subscribe" class="ml-2 text-sm text-gray-600">Đăng ký nhận tin khuyến mãi qua Email</label>
            </div>

            <button type="submit" 
                class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-lg font-semibold transition duration-200 transform hover:scale-105">
                TẠO TÀI KHOẢN
            </button>

            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">hoặc đăng ký bằng</span>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <button type="button" 
                    class="flex items-center justify-center gap-2 bg-red-500 hover:bg-red-600 text-white py-2.5 rounded-lg transition duration-200">
                    <i class="fab fa-google"></i>
                    <span>Google</span>
                </button>
                <button type="button" 
                    class="flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white py-2.5 rounded-lg transition duration-200">
                    <i class="fab fa-facebook-f"></i>
                    <span>Facebook</span>
                </button>
            </div>

            <p class="text-center text-sm text-gray-600">
                Đã có tài khoản? 
                <a href="index.php?ctl=login" class="text-red-600 hover:text-red-700 font-semibold">Đăng nhập ngay!</a>
            </p>
        </form>
    </div>
</div>
<?php include_once ROOT_DIR . "./Views/clients/footer.php" ?>