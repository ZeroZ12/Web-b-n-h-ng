<?php include_once ROOT_DIR . "Views/admin/Header.php"; ?>

<div class="max-w-4xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
    <?php if (!empty($message)) : ?>
        <div class="mb-4 p-3 text-green-700 bg-green-100 rounded-lg">
            <?= $message ?>
        </div>
    <?php endif; ?>

    <h2 class="text-2xl font-bold text-gray-800 mb-6">Cập Nhật Danh Sản Phẩm</h2>

    <form action="<?= ADMIN_URL . '?ctl=updatedm' ?>" method="post">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Tên nhóm sản phẩm -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Tên danh sản phẩm (*)</label>
                <input type="text" name="cate_name" value="<?= htmlspecialchars($category['cate_name']) ?>" 
                       class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" required>
            </div>

            <!-- Loại sản phẩm -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Mô tả danh mục sản phẩm</label>
                <div class="flex items-center space-x-4">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="type" value="1" 
                               class="form-radio text-blue-600" 
                               <?= $category['type'] ? 'checked' : '' ?>>
                        <span class="text-gray-700">Laptop</span>
                    </label>

                    <label class="flex items-center space-x-2">
                        <input type="radio" name="type" value="0" 
                               class="form-radio text-blue-600" 
                               <?= $category['type'] == 0 ? 'checked' : '' ?>>
                        <span class="text-gray-700">PC</span>
                    </label>
                </div>
            </div>
        </div>

        <input type="hidden" name="id" value="<?= $category['id'] ?>">

        <!-- Nút Lưu -->
        <div class="flex justify-end mt-6">
            <button type="submit" 
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                Lưu Thông Tin
            </button>
        </div>
    </form>
</div>

<?php include_once ROOT_DIR . "Views/admin/Footer.php"; ?>
