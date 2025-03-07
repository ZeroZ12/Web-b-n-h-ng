<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>

<div class="bg-white p-6 rounded shadow">
    <form action="<?= ADMIN_URL . '?ctl=store' ?>" method="post" enctype="multipart/form-data">
        <div class="grid grid-cols-3 gap-6">
            <!-- General Information -->
            <div>
                <h2 class="text-lg font-semibold mb-4">
                    Thông Tin Chung
                </h2>
                <div class="mb-4">
                    <label class="block text-gray-700">
                        Tên danh mục
                        <span class="text-red-500">
                            *
                        </span>
                    </label>
                    <input class="border rounded w-full px-4 py-2" type="text" placeholder="Danh mục" name="cate_name" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">
                        Loại sản phẩm <span class="text-red-500">*</span>
                    </label>
                    <div class="flex items-center space-x-6">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input class="hidden peer" type="radio" name="type" value="1" />
                            <div class="w-5 h-5 border-2 border-gray-400 rounded-full flex items-center justify-center peer-checked:border-blue-500 peer-checked:bg-blue-500">
                                <div class="w-2.5 h-2.5 bg-white rounded-full"></div>
                            </div>
                            <span class="text-gray-700">Laptop</span>
                        </label>

                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input class="hidden peer" type="radio" name="type" value="0" />
                            <div class="w-5 h-5 border-2 border-gray-400 rounded-full flex items-center justify-center peer-checked:border-blue-500 peer-checked:bg-blue-500">
                                <div class="w-2.5 h-2.5 bg-white rounded-full"></div>
                            </div>
                            <span class="text-gray-700">PC</span>
                        </label>
                    </div>
                </div>
                <!-- <div>
                    <label class="block text-gray-700">
                        Ảnh đại diện
                    </label>
                    <img alt="Avatar" class="rounded-full w-24 h-24" height="100" src="" width="100" />
                    <input type="file" name="image">
                </div> -->
            </div>
        </div>
        <div class="flex justify-end mt-6">
            <button class="bg-blue-600 text-white px-6 py-2 rounded" type="submit">
                Lưu thông tin
            </button>
        </div>
    </form>

</div>

<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>