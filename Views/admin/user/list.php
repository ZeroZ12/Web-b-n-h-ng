<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>

<div class="w-4/5 p-6">
    
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
                    <th class="p-2 border">Email</th>
                    <th class="p-2 border">Phone</th>
                    <th class="p-2 border">Role</th>
                    <th class="p-2 border">Action</th>
                    <th class="p-2 border">Địa chỉ</th>
                    <th class="p-2 border">Cập nhật</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>

                    <tr class="bg-white">
                        <td class="p-2 border"><?= $user['id'] ?></td>
                        <td class="p-2 border"><?= $user['fullname'] ?></td>
                        <td class="p-2 border text-green-500"><?= $user['email'] ?></td>
                        <td class="p-2 border text-blue-500"><?= $user['phone'] ?></td>
                        <td class="p-2 border text-blue-500"><?= $user['role'] ?></td>
                        <td class="p-2 border text-blue-500">
                            <?php if ($user['active'] == 1) : ?>
                                <span class="badge bg-success">
                                    Hoạt động
                                </span>
                            <?php else : ?>
                                <span class="badge bg-danger">
                                    Khóa
                                </span>
                            <?php endif ?>
                        </td>
                        <td class="p-2 border text-blue-500"><?= $user['address'] ?></td>
                        <td>
                        <form action="<?= ADMIN_URL . '?ctl=updateuser' ?>" method="post">

                            <input type="hidden" name="id" value="<?= $user['id'] ?>">

                            <input type="hidden" name="active" value="<?= $user['active'] ?>">

                            <?php if ($user['role'] != 'admin') : ?>
                                <?php if (isset($user['active']) && $user['active'] == 1) : ?>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-lock-fill"></i> Khóa
                                    </button>
                                <?php else : ?>
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-unlock-fill"></i> Kích hoạt
                                    </button>
                                <?php endif ?>
                            <?php endif ?>
                            <a href="<?= ADMIN_URL . '?ctl=detailA' ?>">Chỉnh sửa</a>
                        </form>
                        
                    </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>