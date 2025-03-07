<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>

<div class="w-4/5 p-6">
    
    <div class="flex justify-between items-center mb-6">
        <div class="relative w-1/2">
            <input class="w-full py-2 px-4 rounded border border-gray-300" placeholder="Tìm kiếm tại đây" type="text" />
            <i class="fas fa-search absolute top-3 right-3 text-gray-400">
            </i>
        </div>
        <div class="flex items-center space-x-4">
            <i class="fas fa-bell text-xl text-gray-600">
            </i>
            <div class="flex items-center space-x-2">
                <img alt="User avatar" class="w-10 h-10 rounded-full" height="40" src="https://storage.googleapis.com/a1aa/image/n7eBQxkork-jYYh3z-mCzPrIQ54Y9LSjihPddgpN_3U.jpg" width="40" />
                <div>
                    <p class="text-gray-800 font-semibold">
                        Tan-admin
                    </p>
                    <p class="text-gray-500 text-sm">
                        Quản trị viên
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold">
                DANH SÁCH ĐÁNH GIÁ
            </h2>
        </div>
        <div class="flex space-x-4 mb-4">
            <select class="py-2 px-4 rounded border border-gray-300">
                <option>
                    Chọn tình trạng
                </option>
            </select>
            <div class="relative flex-1">
                <input class="w-full py-2 px-4 rounded border border-gray-300" placeholder="Nhập để tìm kiếm..." type="text" />
                <i class="fas fa-search absolute top-3 right-3 text-gray-400">
                </i>
            </div>
        </div>
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border">
                        ID
                    </th>
                    <th class="py-2 px-4 border">
                        Sản phẩm
                    </th>
                    <th class="py-2 px-4 border">
                        Số lượng bình luận
                    </th>
                    <th class="py-2 px-4 border">
                        Xem chi tiết
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $pro) : ?>
                <tr>
                    <td class="py-2 px-4 border text-blue-600">
                        <?= $pro['id'] ?>
                    </td>
                    <td class="py-2 px-4 border">
                        <?= $pro['name'] ?>
                    </td>
                    <td class="py-2 px-4 border text-blue-600">
                        <?= $pro['count'] ?>
                    </td>
                    <td class="py-2 px-4 border">
                        <a href="<?= ADMIN_URL . '?ctl=detail-comment&id=' . $pro['id'] ?>" class="btn btn-primary" >Xem</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>