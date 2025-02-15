<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>

<div class="w-4/5 p-6">
            <div class="flex justify-between items-center mb-6">
                <input type="text" placeholder="Tìm kiếm sản phẩm" class="border p-2 w-1/2">
                <a href="<?= ADMIN_URL . '?ctl=addsp' ?>" class="btn btn-primary">+ Thêm mới</a>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-bold mb-4">DANH SÁCH SẢN PHẨM</h2>
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
                            <th class="p-2 border">Tên sản phẩm</th>
                            <th class="p-2 border">Loại sản phẩm</th>
                            <th class="p-2 border">Tình trạng</th>
                            <th class="p-2 border">Thương hiệu</th>
                            <th class="p-2 border">Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                            <td class="p-2 border">Tai nghe Bluetooth T5 Plus 2023</td>
                            <td class="p-2 border">Sản phẩm có sẵn</td>
                            <td class="p-2 border text-green-500">Còn hàng</td>
                            <td class="p-2 border text-blue-500">Tai nghe</td>
                            <td class="p-2 border"><input type="checkbox" checked></td>
                        </tr>

                        <!-- Repeat for each product -->
                        <tr class="bg-gray-100">
                            <td class="p-2 border">Ốp lưng MagSafe iPhone 13 Pro Silicone Apple Màu vàng</td>
                            <td class="p-2 border">Sản phẩm có sẵn</td>
                            <td class="p-2 border text-green-500">Còn hàng</td>
                            <td class="p-2 border text-blue-500">Phụ kiện</td>
                            <td class="p-2 border"><input type="checkbox" checked></td>
                        </tr>

                    </tbody>
                </table>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex space-x-2">
                        <button class="bg-gray-200 px-4 py-2 rounded">1</button>
                        <button class="bg-gray-200 px-4 py-2 rounded">2</button>
                        <button class="bg-gray-200 px-4 py-2 rounded">3</button>
                    </div>
                    <div class="text-gray-500">Showing 1 to 10 of 30 entries</div>
                </div>
            </div>
        </div>
    </div>

<?php include_once ROOT_DIR . "Views/admin/footer.php";