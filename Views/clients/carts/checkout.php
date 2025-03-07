<?php include_once ROOT_DIR . "./Views/clients/header.php" ?>

<div class="max-w-6xl mx-auto bg-white p-6 mt-10 rounded-lg shadow-lg">
    <!-- Bước tiến trình -->
    <form action="<?= ROOT_URL . '?ctl=checkout' ?>" method="post">
        <div class="flex justify-between items-center mb-6">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-red-500 text-white flex items-center justify-center rounded-full">1</div>
                <span>Giỏ hàng</span>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-red-500 text-white flex items-center justify-center rounded-full">2</div>
                <span>Thông tin đặt hàng + Thanh toán</span>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-gray-300 text-gray-500 flex items-center justify-center rounded-full">3</div>
                <span>Hoàn tất</span>
            </div>
        </div>

        <!-- Thông tin khách hàng và sản phẩm -->
        <div class="flex space-x-8">
            <!-- Thông tin khách hàng -->
            <div class="w-1/2">
                <div class="mb-6">
                    <h2 class="text-lg font-semibold mb-2">Thông tin khách mua hàng</h2>
                    <div class="flex items-center mb-4">
                        <label class="mr-4">
                            <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['id'] ?? '') ?>" required>
                            <input type="radio" name="gender" class="mr-1"> Anh
                        </label>
                        <label>
                            <input type="radio" name="gender" class="mr-1"> Chị
                        </label>
                    </div>
                    <div class="flex space-x-4 mb-4">
                        <input type="text" name="fullname" value="<?= htmlspecialchars($user['fullname'] ?? '') ?>" placeholder="Nhập họ tên" class="w-1/2 p-2 border border-gray-300 rounded" required>
                        <input type="text" name="phone" value="<?= htmlspecialchars($user['phone'] ?? '') ?>" placeholder="Nhập số điện thoại" class="w-1/2 p-2 border border-gray-300 rounded" required>
                    </div>
                    <div class="space-y-4 mb-4">
                        <div class="flex space-x-4">
                            <input type="text" name="address" value="<?= htmlspecialchars($user['address'] ?? '') ?>" placeholder="Số nhà, tên đường" class="w-full p-2 border border-gray-300 rounded" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <input type="text" name="note"  placeholder="Lưu ý giao hàng (Không bắt buộc)" class="w-full p-2 border border-gray-300 rounded">
                    </div>
                </div>
                <div class="mb-6" class="payment-method">
                    <h2 class="text-lg font-semibold mb-2">Dịch vụ giao hàng</h2>
                    <div class="mb-4">
                        <label class="flex items-center">
                            <input type="radio" name="shipping" class="mr-2"> Miễn phí vận chuyển (Giao hàng tiêu chuẩn)
                        </label>
                    </div>
                    <h2 class="text-lg font-semibold mb-2">Phương thức thanh toán</h2>
                    <label class="flex items-center mb-2" for="cod">
                        <input id="cod" class="mr-2" name="payment_method" type="radio" value="COD" required>
                        Thanh toán khi giao hàng (COD)
                    </label>
                    <p class="text-sm text-gray-600 mb-4">
                        Là phương thức khách hàng trả tiền mặt khi nhận hàng. Áp dụng với tất cả các đơn hàng trên toàn quốc.
                    </p>
                    <!-- <label class="flex items-center mb-2" href="" for="bank">
                        <input id="bank" class="mr-2" name="payment_method" type="radio" value="BANK" required>
                        Thanh toán online qua tk ngân hàng
                    </label> -->
                </div>
            </div>

            <!-- Thông tin sản phẩm -->
            <div class="w-1/2">
                <div class="mb-6">
                    <h2 class="text-lg font-semibold mb-2">Thông tin sản phẩm</h2>
                    <?php foreach ($cartst as $id => $carts) : ?>
                        <div class="flex items-center mb-4">
                            <img alt="<?= $carts['name'] ?>" class="w-12 h-12 rounded mr-4" height="50" src="<?= $carts['image'] ?>" width="50" />
                            <div>
                                <p><?= $carts['name'] ?></p>
                                <p class="text-gray-600"><?= number_format($carts['price']) ?>₫</p> x <?= $carts['quantity'] ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Phí vận chuyển và tổng tiền -->
        <div class="mb-6">
            <div class="flex justify-between items-center mb-4">
                <span>Phí vận chuyển:</span>
                <span>Miễn phí</span>
            </div>
            <div class="flex justify-between items-center text-lg font-semibold">
                <span>Tổng tiền:</span>
                <span class="text-red-500"><?= number_format($sumPrice) ?>₫</span>
            </div>
        </div>

        <!-- Nút đặt hàng -->
         <button type="submit" class="w-full bg-red-500 text-white py-3 rounded-lg text-lg font-semibold">Thanh toán</button>
    </form>

</div>

<?php include_once ROOT_DIR . "./Views/clients/footer.php" ?>