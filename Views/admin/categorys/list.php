<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>

<div class="flex-1 p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <?php if ($message != '') : ?>
            <div class="mt-3 mb-3 alert alert-success">
                <?= $message ?>
            </div>
        <?php endif ?>
        <div class="flex items-center space-x-4">
            <i class="fas fa-bell text-xl">
            </i>
            <div class="flex items-center space-x-2">
                <img alt="User avatar" class="rounded-full" height="30" src="https://storage.googleapis.com/a1aa/image/WQo27Ha-8uFRQiGnxBMcMaOOGdlvGfm2Vm9Jcgo5CR8.jpg" width="30" />
                <span>
                    Hello <?= $_SESSION['user']['fullname'] ?? '' ?>
                    <?php if (isset($_SESSION['user'])) : ?>
                        <li><a href="<?= ROOT_URL . '?ctl=logout' ?>">Đăng xuất</a></li>
                    <?php endif ?>
                </span>
            </div>
        </div>
    </div>
    <!-- Product List -->
    <form action="<?= ADMIN_URL . '?ctl=storedm' ?>" method="post" enctype="multipart/form-data">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">
                    DANH SÁCH DANH MỤC SẢN PHẨM
                </h2>
                <a href="<?= ADMIN_URL . '?ctl=adddm' ?>" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg transition duration-300">
                    + Thêm mới
                </a>
            </div>
            <div class="flex justify-between items-center mb-6">
                <div class="flex space-x-4">
                    <select class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                        <option>
                            Chọn tình trạng
                        </option>
                    </select>
                    <input class="border border-gray-300 rounded-lg p-2 w-64 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Nhập để tìm kiếm..." type="text" />
                </div>
            </div>
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border p-3 text-sm font-semibold text-gray-700">Tên danh mục sản phẩm</th>
                        <th class="border p-3 text-sm font-semibold text-gray-700">Ảnh</th>
                        <th class="border p-3 text-sm font-semibold text-gray-700">Loại sản phẩm</th>
                        <th class="border p-3 text-sm font-semibold text-gray-700">Thao tác</th>
                        <th class="border p-3 text-sm font-semibold text-gray-700">Vị trí</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $cate): ?>
                        <tr class="hover:bg-gray-50 transition duration-200">
                            <td class="border p-3 text-sm text-gray-700"><?= $cate['cate_name'] ?></td>
                            <td class="border p-3">
                                <img alt="Phụ kiện" class="rounded-lg" height="50" src="https://images2.thanhnien.vn/528068263637045248/2024/1/25/e093e9cfc9027d6a142358d24d2ee350-65a11ac2af785880-17061562929701875684912.jpg" width="50" />
                            </td>
                            <td class="border p-3 text-sm text-gray-700"><?= $cate['type'] ? 'Laptop' : 'PC' ?></td>
                            <td class="border p-3">
                                <a href="<?= ADMIN_URL . '?ctl=editdm&id=' . $cate['id'] ?>" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg mr-2 transition duration-300">Sửa</a>
                                <a href="<?= ADMIN_URL . '?ctl=deletedm&id=' . $cate['id'] ?>" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition duration-300" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a>
                            </td>
                            <td class="border p-3 text-sm text-gray-700"><?= $cate['id'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </form>
</div>
<div>


    <?php include_once ROOT_DIR . "Views/admin/Header.php" ?>