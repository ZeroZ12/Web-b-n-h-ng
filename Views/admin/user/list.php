<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>

<div class="w-4/5 p-6">
    <?php if ($message != '') : ?>
        <div class="mt-3 mb-3 alert alert-success">
            <?= $message ?>
        </div>
    <?php endif ?>
    <div class="flex justify-between items-center mb-6">
        <input type="text" placeholder="Tìm kiếm sản phẩm" class="border p-2 w-1/2">
        <a class="bg-green-500 text-white px-4 py-2 rounded" href="<?= ADMIN_URL . '?ctl=addsp' ?>">+ Thêm mới</a>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-xl font-bold mb-4">DANH SÁCH NGƯỜI DÙNG</h2>
        <div class="flex justify-between items-center mb-4">
            <div class="flex space-x-4">
                <select class="border p-2">
                    <option>Chọn tình trạng</option>
                </select>
                <input type="text" placeholder="Nhập tên sản phẩm" class="border p-2">
            </div>
            <div class="flex space-x-4">
                <button class="bg-gray-200 px-4 py-2 rounded">Tất cả trạng thái</button>
                <button class="bg-orange-500 text-white px-4 py-2 rounded">Lưu trữ</button>
            </div>
        </div>
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">ID</th>
                    <th class="p-2 border">Name</th>
                    <th class="p-2 border">IMG</th>
                    <th class="p-2 border">Email</th>
                    <th class="p-2 border">Type</th>
                    <th class="p-2 border">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $pro) : ?>

                    <tr class="bg-white">
                        <td class="p-2 border"><?= $pro['name'] ?></td>
                        <td class="p-2 border"><img src="<?= ROOT_URL . $pro['image'] ?>" width="60" alt=""></td>
                        <td class="p-2 border text-green-500"><?= $pro['price'] ?></td>
                        <td class="p-2 border text-blue-500"><?= $pro['quantity'] ?></td>
                        <td class="p-2 border text-blue-500"><?= $pro['status'] ? 'Đang kinh doanh' : 'Ngừng kinh doanh' ?></td>
                        <td class="p-2 border text-blue-500"><?= $pro['cate_name'] ?></td>
                        <td class="p-2 border"><input type="checkbox" checked></td>
                        <td>
                            <a href="<?= ADMIN_URL . '?ctl=editsp&id=' . $pro['id'] ?>" class="btn btn-primary">Sửa</a>
                            <a href="<?= ADMIN_URL . '?ctl=deletesp&id=' . $pro['id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không')">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="flex justify-between items-center mt-4">
            <div class="flex space-x-2">
                <button class="bg-gray-200 px-4 py-2 rounded">1</button>
            </div>
            <div class="text-gray-500">Showing 1 to 10 of 30 entries</div>
        </div>
    </div>
</div>

<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>