<?php
$status = [
    1 => "Chờ xử lý",
    2 => "Đang xử lý",
    3 => "Hoàn thành",
    4 => "Đã hủy"
];
?>
<?php include_once ROOT_DIR . "./Views/clients/header.php"; ?>

<div class="flex min-h-screen">
    <!-- Sidebar -->
    <?php include_once ROOT_DIR . "./Views/clients/users/sidebar.php"; ?>

    <!-- Main Content -->
    <div class="w-3/4 p-6">
        <h1 class="text-xl font-bold mb-4">Quản lý đơn hàng</h1>

        <div class="flex items-center mb-4">
            <input class="border p-2 flex-grow" placeholder="Tìm đơn hàng theo Mã đơn hàng" type="text" />
            <button class="bg-blue-500 text-white p-2 ml-2 hover:bg-blue-700 transition">
                Tìm đơn hàng
            </button>
        </div>

        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">ID</th>
                    <th class="border p-2">Phương thức</th>
                    <th class="border p-2">Tổng tiền</th>
                    <th class="border p-2">Trạng thái</th>
                    <th class="border p-2">Ngày mua</th>
                    <th class="border p-2">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order) : ?>
                    <tr class="text-center">
                        <td class="border p-2"><?= htmlspecialchars($order['id']) ?></td>
                        <td class="border p-2"><?= htmlspecialchars($order['payment_method']) ?></td>
                        <td class="border p-2"><?= number_format($order['total_price']) ?> VND</td>
                        <td class="border p-2"><?= htmlspecialchars($status[$order['status']] ?? 'Không xác định') ?></td>
                        <td class="border p-2"><?= date('d-m-Y H:i:s', strtotime($order['created_at'])) ?></td>
                        <td class="border p-2">
                            <a href="<?= ROOT_URL . '?ctl=order-detail&id=' . $order['id'] ?>" class="text-blue-500 hover:underline">
                                Chi tiết
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="mt-6">
            <a href="<?= ROOT_URL ?>" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 transition">
                TIẾP TỤC MUA HÀNG
            </a>
        </div>
    </div>
</div>

<?php include_once ROOT_DIR . "./Views/clients/footer.php"; ?>