<?php include_once ROOT_DIR . "./Views/clients/header.php" ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Progress steps -->
    <div class="mb-12">
        <div class="flex justify-between items-center">
            <div class="flex flex-col items-center w-1/3">
                <div class="w-10 h-10 bg-red-600 text-white flex items-center justify-center rounded-full mb-2">1</div>
                <span class="text-sm font-medium text-gray-600">Giỏ hàng</span>
            </div>
            <div class="flex flex-col items-center w-1/3">
                <div class="w-10 h-10 bg-red-600 text-white flex items-center justify-center rounded-full mb-2">2</div>
                <span class="text-sm font-medium text-gray-900">Thông tin & Thanh toán</span>
            </div>
            <div class="flex flex-col items-center w-1/3">
                <div class="w-10 h-10 bg-gray-200 text-gray-500 flex items-center justify-center rounded-full mb-2">3</div>
                <span class="text-sm font-medium text-gray-600">Hoàn tất</span>
            </div>
        </div>
        <div class="mt-4 h-1 bg-gray-200 rounded-full overflow-hidden">
            <div class="w-2/3 h-full bg-red-600"></div>
        </div>
    </div>

    <form action="<?= ROOT_URL . '?ctl=checkout' ?>" method="post" class="bg-white rounded-xl shadow-lg p-8">
        <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['id'] ?? '') ?>" required>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Customer Information -->
            <div class="space-y-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Thông tin thanh toán</h2>
                
                <!-- Gender Selection -->
                <div class="flex space-x-4">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="gender" value="male" class="form-radio h-5 w-5 text-red-600" required>
                        <span class="text-gray-700">Anh</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="gender" value="female" class="form-radio h-5 w-5 text-red-600">
                        <span class="text-gray-700">Chị</span>
                    </label>
                </div>

                <!-- Contact Info -->
                <div class="grid grid-cols-1 gap-4">
                    <input type="text" name="fullname" value="<?= htmlspecialchars($user['fullname'] ?? '') ?>" 
                           placeholder="Họ và tên" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent" required>

                    <input type="tel" name="phone" value="<?= htmlspecialchars($user['phone'] ?? '') ?>" 
                           placeholder="Số điện thoại"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent" required>
                </div>

                <!-- Address -->
                <div class="space-y-4">
                    <input type="text" name="address" value="<?= htmlspecialchars($user['address'] ?? '') ?>" 
                           placeholder="Địa chỉ nhận hàng"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent" required>

                    <textarea name="note" rows="3" 
                              placeholder="Ghi chú đơn hàng (không bắt buộc)"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent"></textarea>
                </div>

                <!-- Shipping Method -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-gray-800">Phương thức vận chuyển</h3>
                    <div class="space-y-2">
                        <label class="flex items-center p-4 border rounded-lg hover:border-red-500 cursor-pointer">
                            <input type="radio" name="shipping" value="standard" class="form-radio h-5 w-5 text-red-600" checked>
                            <div class="ml-3">
                                <span class="font-medium">Giao hàng tiêu chuẩn</span>
                                <p class="text-sm text-gray-500">Miễn phí vận chuyển</p>
                            </div>
                        </label>
                        <label class="flex items-center p-4 border rounded-lg hover:border-red-500 cursor-pointer">
                            <input type="radio" name="shipping" value="express" class="form-radio h-5 w-5 text-red-600">
                            <div class="ml-3">
                                <span class="font-medium">Giao hàng nhanh</span>
                                <p class="text-sm text-gray-500">Phí 30,000₫</p>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Payment Method -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-gray-800">Phương thức thanh toán</h3>
                    <label class="flex items-center p-4 border rounded-lg hover:border-red-500 cursor-pointer">
                        <input type="radio" name="payment_method" value="COD" 
                               class="form-radio h-5 w-5 text-red-600" checked>
                        <div class="ml-3">
                            <span class="font-medium">Thanh toán khi nhận hàng (COD)</span>
                            <p class="text-sm text-gray-500">Nhận hàng trước, kiểm tra trước khi thanh toán</p>
                        </div>
                    </label>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="bg-gray-50 rounded-xl p-6 h-fit sticky top-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Đơn hàng của bạn</h2>
                
                <!-- Products List -->
                <div class="space-y-4 mb-6">
                    <?php foreach ($cartst as $id => $carts) : ?>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img src="<?= $carts['image'] ?>" alt="<?= $carts['name'] ?>" 
                                 class="w-16 h-16 object-contain rounded-lg border">
                            <div>
                                <p class="font-medium"><?= $carts['name'] ?></p>
                                <p class="text-sm text-gray-500">
                                    <?= number_format($carts['price']) ?>₫ x <?= $carts['quantity'] ?>
                                </p>
                            </div>
                        </div>
                        <span class="font-medium">
                            <?= number_format($carts['price'] * $carts['quantity']) ?>₫
                        </span>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Price Summary -->
                <div class="space-y-3 border-t pt-4">
                    <div class="flex justify-between">
                        <span>Tạm tính:</span Bảng giá:</span>
                        <span><?= number_format($sumPrice) ?>₫</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Phí vận chuyển:</span>
                        <span id="shipping-fee">0₫</span>
                    </div>
                    <div class="flex justify-between font-bold text-lg pt-2">
                        <span>Tổng cộng:</span>
                        <span id="total-price"><?= number_format($sumPrice) ?>₫</span>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                        class="w-full bg-red-600 text-white py-4 rounded-lg text-lg font-semibold mt-6 hover:bg-red-700 transition-colors">
                    Đặt hàng ngay
                </button>
            </div>
        </div>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const shippingOptions = document.querySelectorAll('input[name="shipping"]');
    const shippingFeeElement = document.getElementById('shipping-fee');
    const totalPriceElement = document.getElementById('total-price');
    const basePrice = <?= $sumPrice ?>;

    function updatePrices() {
        const selectedShipping = document.querySelector('input[name="shipping"]:checked').value;
        let shippingFee = 0;

        switch(selectedShipping) {
            case 'express':
                shippingFee = 30000;
                break;
            default:
                shippingFee = 0;
        }

        const totalPrice = basePrice + shippingFee;
        
        shippingFeeElement.textContent = shippingFee === 0 ? 'Miễn phí' : shippingFee.toLocaleString() + '₫';
        totalPriceElement.textContent = totalPrice.toLocaleString() + '₫';
    }

    shippingOptions.forEach(option => {
        option.addEventListener('change', updatePrices);
    });

    // Initial calculation
    updatePrices();
});
</script>

<?php include_once ROOT_DIR . "./Views/clients/footer.php" ?>