<?php include_once ROOT_DIR . "./Views/clients/header.php" ?>


    <div class="signin bg-white p-6 rounded-lg shadow-lg w-full max-w-sm ">
        <?php if ($message != '') : ?>

            <div class="alert alert-success">
                <?= $message ?>
            </div>

            <?php if ($error != '') : ?>

                <div class="alert alert-danger">
                    <?= $error ?>
                </div>

            <?php endif ?>
        <?php endif ?>
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">ĐĂNG NHẬP</h2>
            <button class="text-gray-500"><i class="fas fa-times"></i></button>
        </div>
        <form action="<?= ROOT_URL . '?ctl=login' ?>" method="post">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4 relative">
                <label for="password" class="block text-sm font-medium text-gray-700">Mật khẩu</label>
                <input type="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                </button>
            </div>
            <div class="flex justify-end mb-4">
                <a href=" <?= ROOT_URL . '?ctl=go' ?>" class="text-sm text-gray-500">Quên mật khẩu?</a>
            </div>
            <button type="submit" class="w-full bg-red-600 text-white py-2 rounded-md text-sm font-semibold">ĐĂNG NHẬP</button>

            <div class="flex items-center my-4">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="mx-2 text-sm text-gray-500">hoặc đăng nhập bằng</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>
            <div class="flex justify-between">
                <button class="flex items-center justify-center w-1/2 bg-red-500 text-white py-2 rounded-md mr-2">
                    <i class="fab fa-google mr-2"></i> Google
                </button>
                <button class="flex items-center justify-center w-1/2 bg-blue-600 text-white py-2 rounded-md ml-2">
                    <i class="fab fa-facebook-f mr-2"></i> Facebook
                </button>
            </div>
            <div class="text-center mt-4">
                <span class="text-sm text-gray-500">Bạn chưa có tài khoản? <a href="index.php?ctl=register" class="text-blue-500">Đăng ký ngay!</a></span>
            </div>
        </form>
    </div>

<?php include_once ROOT_DIR . "./Views/clients/footer.php" ?>