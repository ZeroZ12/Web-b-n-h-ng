<?php include_once ROOT_DIR . "./Views/clients/header.php" ?>

<div class=" flex min-h-screen">
    <!-- Sidebar -->
    <?php include_once ROOT_DIR . "./Views/clients/users/sidebar.php" ?>
    <!-- Main Content -->
    <div class="w-3/4 bg-white p-8">
        <?php if (!empty($message)) : ?>
            <div class="mb-4 p-3 text-green-700 bg-green-100 rounded-lg">
                <?= $message ?>
            </div>
        <?php endif; ?>

        <h2 class="text-xl font-semibold mb-6">
            Thông tin tài khoản
        </h2>
        <form action="<?= ROOT_DIR . '?ctl=update-user' ?>" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">
                    Tên
                </label>
                <input name="fullname" class="w-full p-2 border border-gray-300 rounded" type="text" value="<?= $user['fullname'] ?>" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">
                    Giới tính
                </label>
                <!-- <div class="flex items-center">
                    <input class="mr-2" id="male" name="gender" type="radio" />
                    <label class="mr-4" for="male">
                        Nam
                    </label>
                    <input class="mr-2" id="female" name="gender" type="radio" />
                    <label for="female">
                        Nữ
                    </label>
                </div> -->
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">
                    Số điện thoại
                </label>
                <div class="flex items-center">
                    <input class="w-full p-2 border border-gray-300 rounded" name="phone" type="phone" value="<?= $user['phone'] ?>" />
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">
                    Email
                </label>
                <div class="flex items-center">
                    <input class="w-full p-2 border border-gray-300 rounded" name="email" type="email" value="<?= $user['email'] ?>" />
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">
                    Địa chỉ
                </label>
                <div class="flex items-center">
                    <input class="w-full p-2 border border-gray-300 rounded" name="address" type="text" value="<?= $user['address'] ?>" />
                </div>
            </div>
            <button class="bg-red-600 text-white px-4 py-2 rounded" type="submit">
                LƯU THAY ĐỔI
            </button>
        </form>
    </div>
</div>

<?php include_once ROOT_DIR . "./Views/clients/footer.php" ?>