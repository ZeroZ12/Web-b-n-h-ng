<?php include_once ROOT_DIR . "Views/admin/Header.php"; ?>

<div class="flex min-h-screen justify-center items-center bg-gray-100">
    <div class="w-full max-w-lg bg-white shadow-md rounded-lg p-8">
        <!-- Hiển thị thông báo -->
        <?php if (!empty($message)) : ?>
            <div class="mb-4 p-3 text-green-700 bg-green-100 rounded-lg text-center">
                <?= $message ?>
            </div>
        <?php endif; ?>

        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">
            Cập Nhật Thông Tin Tài Khoản
        </h2>

        <form action="<?= ROOT_URL . '?ctl=update-us' ?>" method="post" enctype="multipart/form-data" class="space-y-4">
            <!-- Họ và Tên -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">
                    Họ và Tên
                </label>
                <input name="fullname" class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" type="text" value="<?= htmlspecialchars($user['fullname']) ?>" />
            </div>

            <!-- Số điện thoại -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">
                    Số điện thoại
                </label>
                <input name="phone" class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" type="tel" value="<?= htmlspecialchars($user['phone']) ?>" />
            </div>

            <!-- Vai trò (Role) -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">
                    Chức vụ
                </label>
                <div class="flex space-x-4">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="role" value="admin" class="form-radio h-5 w-5 text-blue-600" <?= ($user['role'] === 'admin') ? 'checked' : '' ?> />
                        <span class="text-gray-700">Admin</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="role" value="user" class="form-radio h-5 w-5 text-blue-600" <?= ($user['role'] === 'user') ? 'checked' : '' ?> />
                        <span class="text-gray-700">User</span>
                    </label>
                </div>
            </div>

            <!-- Email -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">
                    Email
                </label>
                <input name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" type="email" value="<?= htmlspecialchars($user['email']) ?>" />
            </div>

            <!-- Địa chỉ -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">
                    Địa chỉ
                </label>
                <input name="address" class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" type="text" value="<?= htmlspecialchars($user['address']) ?>" />
            </div>

            <!-- Nút Lưu -->
            <button class="w-full bg-red-600 text-white px-4 py-3 rounded-lg text-lg font-semibold hover:bg-red-700 transition duration-200">
                LƯU THAY ĐỔI
            </button>
        </form>
    </div>
</div>

<?php include_once ROOT_DIR . "Views/admin/Footer.php"; ?>
