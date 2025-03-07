<?php
if (!isset($order) || empty($order)) {
    echo "Dữ liệu đơn hàng ko tồn tại";
    exit;
}
// print_r($order);
$orderDate = !empty($order['created_at']) ? date('d-m-Y H:i:s', strtotime($order['created_at'])) : "Không xác định";
$total = 0;
?>
<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>

<div class="w-4/5 p-6">
    <?php if ($message != "") : ?>
        <div class="alert alert-success">
            <?= $message ?>
        </div>
    <?php endif ?>
    <div class="flex justify-between items-center mb-6">
        <input class="border rounded p-2 w-1/3" placeholder="Tìm kiếm đơn hàng" type="text" />
        <div class="flex items-center space-x-4">
            <i class="fas fa-bell text-xl">
            </i>
            <div class="flex items-center space-x-2">
                <img alt="User avatar" class="rounded-full" height="30" src="https://storage.googleapis.com/a1aa/image/iZ82j5ksgkPLWZqb3uZleGg-xZ_d-v3AZMZwJIDqO4M.jpg" width="30" />
                <span>
                    Hello <?= $_SESSION['user']['fullname'] ?? '' ?>
                    <?php if (isset($_SESSION['user'])) : ?>
                        <li><a href="<?= ROOT_URL . '?ctl=logout' ?>">Đăng xuất</a></li>
                    <?php endif ?>
                </span>
            </div>
        </div>
    </div>
    <h2 class="text-2xl font-bold mb-4">
        CHI TIẾT ĐƠN HÀNG
    </h2>
    <div class="bg-white p-6 rounded shadow">
        <form action="" method="post">
            <div class="flex justify-between items-center mb-4">

                <h3 class="text-xl font-semibold">

                    Đơn hàng #<?= $order['id'] ?>
                    
                </h3>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                    Lưu thông tin
                </button>
            </div>
            <table class="w-full mb-6">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2 text-left">
                            Sản phẩm
                        </th>
                        <th class="p-2 text-right">
                            Giá
                        </th>
                        <th class="p-2 text-right">
                            Số lượng
                        </th>
                        <th class="p-2 text-right">
                            Tổng
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($order_details as $stt => $detail) ?>
                    <tr class="border-b">
                        <td class="p-2 flex items-center">
                        <td><?= $stt + 1 ?></td>
                        <img alt="Product image" class="w-12 h-12 mr-4" height="50" src="<?= ROOT_URL . $detail['image'] ?>" width="50" />
                        <div>
                            <p>
                                <?= $detail['name'] ?>
                            </p>
                            <p class="text-sm text-gray-500">
                                Phụ kiện
                            </p>
                        </div>
                        </td>
                        <td class="p-2 text-right">
                            <?= number_format($detail['price']) ?> đ
                        </td>
                        <td class="p-2 text-right">
                            <?= $detail['quantity'] ?>
                        </td>
                        <td class="p-2 text-right">
                            <?= number_format($detail['quantity'] * $detail['price']) ?> đ
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-between items-center mb-6">
                <div>
                    <p class="text-gray-500">
                        Tạm tính
                    </p>
                    <p class="text-gray-500">
                        Phí vận chuyển
                    </p>
                    <p class="text-gray-500">
                        Phương thức thanh toán
                    </p>
                    <p class="text-gray-500">
                        Tổng tiền
                    </p>
                </div>
                <div class="text-right">
                    <p>
                        <?= number_format($detail['quantity'] * $detail['price']) ?> đ
                    </p>
                    <p>
                        miễn phí (hiện tại) đ
                    </p>
                    <p>
                        Thanh toán khi nhận hàng
                    </p>
                    <p class="font-bold">
                        <?= number_format($order['total_price']) ?> đ
                    </p>
                </div>
            </div>
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center">
                    <img alt="Delivery icon" class="w-12 h-12 mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/Ad7OhvxKzXF4GoY9cslGueZB1zHdmjFtkdqPpblLjqQ.jpg" width="50" />
                    <!-- <div>
                        <p class="text-gray-500">
                            Đang giao
                        </p>
                        <p class="text-gray-500">
                            Chưa thanh toán
                        </p>
                    </div> -->
                </div>

                <div class="flex space-x-4">
                    <label for="orderStatus">Trạng thái đơn hàng</label>
                    <select name="status" id="orderStatus">
                        <?php foreach ($status as $key => $value) : ?>
                            <option value="<?= $key ?>"
                                <?= $order['status'] == $key ? 'selected' : '' ?> ?>
                                <?php
                                if ($order['status'] == 2 && in_array($key, [1, 4])) {
                                    echo "disabled";
                                } elseif ($order['status'] == 3 && in_array($key, [1, 2, 4])) {
                                    echo "disabled";
                                } elseif ($order['status'] == 4 && in_array($key, [1, 2, 3])) {
                                    echo "disabled";
                                }
                                ?>>
                                <?= $value ?>
                            </option>
                        <?php endforeach ?>
                    </select>
        </form>
        <!-- <button class="bg-blue-500 text-white px-4 py-2 rounded">
                    Xác nhận thanh toán
                </button>
                <button class="bg-gray-500 text-white px-4 py-2 rounded">
                    Xác nhận hoàn thành
                </button> -->
    </div>
</div>
<div class="bg-gray-100 p-4 rounded">
    <h4 class="font-semibold mb-2">
        Khách hàng
    </h4>
    <div class="flex items-center mb-4">
        <img alt="Customer avatar" class="w-12 h-12 rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/0r1G4H_H73zHziKE7lommPaVYIEkD-YCRhksnZ7NG2w.jpg" width="50" />
        <div>
            <p class="font-semibold">
                <?= $order['fullname'] ?? 'Không xác định' ?>
            </p>
            <p class="text-gray-500">
                <?= $order['email'] ?? 'Không xác định' ?>
            </p>
        </div>
    </div>
    <div>
        <p class="text-gray-500">
            Số điện thoại:
        </p>
        <p>
            <?= $order['phone'] ?? 'Không xác định' ?>
        </p>
    </div>
    <div>
        <p class="text-gray-500">
            Địa chỉ giao hàng:
        </p>
        <p>
            <?= $order['address'] ?? 'Không xác định' ?>
        </p>
    </div>
</div>
</div>
</div>

<?php include_once ROOT_DIR . "Views/admin/Footer.php" ?>