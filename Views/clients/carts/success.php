<?php echo ($sumPrice) ?>
<?php include_once ROOT_DIR . "./Views/clients/header.php" ?>

<div class="max-w-4xl mx-auto p-4">
    <div class="bg-white p-6 rounded-lg shadow-lg flex">
        <div class="w-2/3 pr-4">
            <div class="mt-4">
                <h2 class="text-lg font-semibold">Đặt hàng thành công</h2>
                <!-- <p class="text-gray-600">Mã đơn hàng</p> -->
                <p class="text-gray-600">Cảm ơn bạn đã mua hàng!</p>
            </div>
            <div class="mt-6">
                <h3 class="text-md font-semibold">Thông tin đơn hàng</h3>
                <div class="border p-4 mt-2">
                    <p class="text-gray-600">Thông tin giao hàng</p>
                    <p class="text-gray-600"><?= $user['fullname'] ?></p>
                    <p class="text-gray-600"><?= $user['address'] ?></p>
                    <p class="text-gray-600 mt-4">Phương thức thanh toán</p>
                    <p class="text-gray-600">Thanh toán khi giao hàng (COD)</p>
                </div>
            </div>
            <div class="mt-6">
                <a class="bg-blue-500 text-white px-4 py-2 rounded" href="<?= ROOT_URL ?>">Tiếp tục mua hàng</a>
            </div>
            <div class="mt-4">
                <a class="text-blue-500" href="#">Cần hỗ trợ? Liên hệ chúng tôi</a>
            </div>
        </div>
        <div class="w-full mx-auto pl-4">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex flex-col gap-4">
                    <?php if (!empty($carts)) : ?>
                        <?php foreach ($carts as $id => $cart) : ?>
                            <div class="flex items-center gap-4">
                                <img alt="<?= $cart['name'] ?>" class="w-12 h-12 object-cover rounded-lg" src="<?= $cart['image'] ?>" />
                                <div>
                                    <p class="text-gray-600"><?= $cart['name'] ?></p>
                                </div>
                            </div>
                            <p class="text-gray-600 "><?= number_format($cart['price'] * $cart['quantity']) ?>đ</p>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p class="text-gray-500">Giỏ hàng trống.</p>
                    <?php endif; ?>
                </div>
                <div class="mt-4">
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <p class="text-gray-600">Phí vận chuyển</p>
                        <p class="text-gray-600 ">Miễn phí</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-4 font-semibold">
                        <p class="text-gray-600">Tổng cộng</p>
                        <p class="text-gray-600 ">VND <?= number_format($sumPrice) ?>đ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once ROOT_DIR . "./Views/clients/footer.php" ?>