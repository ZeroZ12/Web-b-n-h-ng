<?php include_once ROOT_DIR . "/Views/clients/header.php"; ?>

<form action="<?= ROOT_URL . '?ctl=update-cart' ?>" method="post" class="max-w-5xl mx-auto p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-bold text-center mb-6">Giỏ hàng của bạn</h2>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="p-3">ID</th>
                    <th class="p-3">IMG</th>
                    <th class="p-3">Tên sản phẩm</th>
                    <th class="p-3">Giá</th>
                    <th class="p-3">Số lượng</th>
                    <th class="p-3">Thành tiền</th>
                    <th class="p-3">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cartst as $id => $carts) : ?>
                    <tr class="border-b border-gray-300 text-center">
                        <td class="p-3"><?= $id ?></td>
                        <td class="p-3">
                            <img src="<?= $carts['image'] ?>" alt="<?= $carts['name'] ?>" class="h-20 w-20 object-cover rounded-lg">
                        </td>
                        <td class="p-3 font-semibold"><?= $carts['name'] ?></td>
                        <td class="p-3 text-blue-500 font-bold"><?= number_format($carts['price']) ?> đ</td>
                        <td class="p-3">
                            <input type="number" name="quantity[<?= $id ?>]" value="<?= $carts['quantity'] ?>" min="1"
                                class="w-16 p-2 border rounded-lg text-center">
                        </td>
                        <td class="p-3 text-red-500 font-semibold"><?= number_format($carts['price'] * $carts['quantity']) ?> đ</td>
                        <td class="p-3">
                            <a href="<?= ROOT_URL . '?ctl=delete-cart&id=' . $id ?>"
                                class="px-3 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                                Xóa
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Tổng tiền -->
    <div class="flex justify-between items-center mt-6 p-4 bg-gray-100 rounded-lg">
        <p class="text-lg font-bold">Tổng tiền:</p>
        <p class="text-xl text-red-600 font-semibold"><?= number_format($totalPrice) ?> VNĐ</p>
    </div>

    <!-- Nút hành động -->
    <div class="flex justify-between items-center mt-6">
        <a href="<?= ROOT_URL ?>" class="px-4 py-2 bg-gray-300 text-black rounded-lg hover:bg-gray-400 transition">
            Tiếp tục mua sắm
        </a>

        <div class="space-x-4">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                Cập nhật giỏ hàng
            </button>

            <a href="<?= ROOT_URL . '?ctl=view-check' ?>" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
                Thanh toán
            </a>
        </div>
    </div>
</form>

<?php include_once ROOT_DIR . "/Views/clients/footer.php"; ?>
