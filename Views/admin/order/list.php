<?php
$status_labels = [
    1 => "Chờ xử lý",
    2 => "Đang xử lý",
    3 => "Hoàn thành",
    4 => "Đã hủy"
];
?>
<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>

<div class="w-4/5 p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center">
            <i class="fas fa-bars text-xl mr-4"></i>
            <input type="text" placeholder="Tìm kiếm ở đây" class="border rounded p-2 w-96">
        </div>
        <div class="flex items-center">
            <i class="fas fa-bell text-xl mr-4"></i>
            <i class="fas fa-user-circle text-xl">
                Hello <?= $_SESSION['user']['fullname'] ?? '' ?>
                <?php if (isset($_SESSION['user'])) : ?>
                    <li><a href="<?= ROOT_URL . '?ctl=logout' ?>">Đăng xuất</a></li>
                <?php endif ?>
            </i>
        </div>
    </div>
    <!-- Order List -->
    <div class="bg-white p-6 rounded shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold">DANH SÁCH ĐƠN HÀNG</h2>
        </div>
        <div class="flex justify-between items-center mb-4">
            <div class="flex space-x-4">
                <button class="bg-gray-200 px-4 py-2 rounded">Trạng thái đơn hàng</button>
                <button class="bg-gray-200 px-4 py-2 rounded">Trạng thái thanh toán</button>
                <input type="text" placeholder="Nhập để tìm kiếm" class="border rounded p-2">
            </div>
            <button class="bg-gray-200 px-4 py-2 rounded">Tải lại trang</button>
        </div>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">STT</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Tổng tiền</th>
                    <th class="py-2 px-4 border-b">Phí vận chuyển</th>
                    <th class="py-2 px-4 border-b">Giảm giá</th>
                    <th class="py-2 px-4 border-b">Tổng cộng</th>
                    <th class="py-2 px-4 border-b">Hình thức thanh toán</th>
                    <th class="py-2 px-4 border-b">Trạng thái đơn hàng</th>
                    <th class="py-2 px-4 border-b">Ngày đặt</th>
                    <th class="py-2 px-4 border-b">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td class="py-2 px-4 border-b"><?= $order['id'] ?></td>
                        <td class="py-2 px-4 border-b"><?= $order['fullname'] ?><br><?= $order['email'] ?></td>
                        <td class="py-2 px-4 border-b"><?= number_format($order['total_price']) ?> đ </td>
                        <td class="py-2 px-4 border-b">miễn phí(hiện tại) đ</td>
                        <td class="py-2 px-4 border-b">-</td>
                        <td class="py-2 px-4 border-b"><?= number_format($order['total_price']) ?> đ </td>
                        <td class="py-2 px-4 border-b text-green-500"><?= $order['payment_method'] ?></td>
                        <td class="py-2 px-4 border-b text-red-500"><?= $status_labels[$order['status']] ?? 'Không xác định' ?></td>
                        <td class="py-2 px-4 border-b"><?= $order['created_at'] ?></td>
                        <td class="py-2 px-4 border-b"><a href="<?= ADMIN_URL . '?ctl=detilorder&id=' . $order['id'] ?>" class="bg-blue-500 text-white px-2 py-1 rounded">Xem</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="flex justify-between items-center mt-4">
            <div class="text-gray-600">Hiển thị 1 đến 10 của 50 mục</div>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border rounded">1</button>
                <button class="px-3 py-1 border rounded">2</button>
                <button class="px-3 py-1 border rounded">3</button>
                <button class="px-3 py-1 border rounded">4</button>
                <button class="px-3 py-1 border rounded">5</button>
            </div>
        </div>
    </div>
</div>

<?php include_once ROOT_DIR . "Views/admin/Footer.php" ?>