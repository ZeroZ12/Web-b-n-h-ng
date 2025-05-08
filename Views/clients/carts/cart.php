<?php include_once ROOT_DIR . "/Views/clients/header.php"; ?>

<form action="<?= ROOT_URL . '?ctl=update-cart' ?>" method="post" class="max-w-7xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Giỏ hàng của bạn</h1>
    <?php if(empty($cartst)): ?>
        <!-- Hiển thị khi giỏ hàng trống -->
        <div class="bg-white rounded-lg shadow-md p-8 text-center">
            <div class="mx-auto max-w-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <h2 class="text-xl font-medium mt-4 mb-2">Chưa có sản phẩm nào trong giỏ hàng</h2>
                <p class="text-gray-600 mb-6">Cùng mua sắm hàng ngàn sản phẩm tại HDTL nhé!</p>
                <a href="<?= ROOT_URL ?>" class="inline-block px-6 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition font-medium">
                    Mua hàng ngay
                </a>
            </div>
        </div>
    <?php else: ?>
    <div class="flex flex-col lg:flex-row gap-6">
        <!-- Cột trái - Danh sách sản phẩm -->
        <div class="bg-white rounded-lg shadow-md p-6 flex-1">
            <?php foreach ($cartst as $id => $carts) : ?>
            <div class="flex items-center justify-between border-b pb-4 mb-4">
                <div class="flex items-center space-x-4">
                    <input type="checkbox" name="selected[]" value="<?= $id ?>" class="h-5 w-5 text-red-600 rounded" checked>
                    <img src="<?= $carts['image'] ?>" alt="<?= $carts['name'] ?>" class="h-24 w-24 object-contain">
                    
                    <div>
                        <h3 class="font-semibold"><?= $carts['name'] ?></h3>
                        <?php if(isset($carts['description'])): ?>
                        <p class="text-sm text-gray-500"><?= $carts['description'] ?></p>
                        <?php endif; ?>
                        <?php if(isset($carts['color'])): ?>
                        <p class="text-sm">Màu: <span class="text-gray-700"><?= $carts['color'] ?></span></p>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="flex items-center space-x-8">
                    <div class="text-right">
                        <p class="text-lg font-bold text-red-600"><?= number_format($carts['price']) ?> đ</p>
                        <?php if(isset($carts['original_price'])): ?>
                        <p class="text-sm line-through text-gray-500"><?= number_format($carts['original_price']) ?> đ</p>
                        <?php endif; ?>
                    </div>
                    
                    <div class="flex items-center border rounded-lg">
                        <button type="button" class="px-3 py-1 text-gray-600 decrement-btn">-</button>
                        <input type="number" name="quantity[<?= $id ?>]" value="<?= $carts['quantity'] ?>" min="1" 
                               class="w-12 text-center border-x py-1 quantity-input">
                        <button type="button" class="px-3 py-1 text-gray-600 increment-btn">+</button>
                    </div>
                    
                    <div class="text-right w-24">
                        <p class="font-bold"><?= number_format($carts['price'] * $carts['quantity']) ?> đ</p>
                    </div>
                    
                    <a href="<?= ROOT_URL . '?ctl=delete-cart&id=' . $id ?>" class="text-gray-400 hover:text-red-500">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
            
            <!-- Bảo hành -->
            <div class="border-b pb-4 mb-4">
                <h4 class="font-medium mb-2">Chọn gói bảo hành</h4>
                <div class="space-y-2">
                    <label class="flex items-center space-x-3">
                        <input type="checkbox" name="warranty[lifetime]" class="h-5 w-5 text-red-600 rounded">
                        <span>Đặc quyền bảo hành trọn đời <span class="text-red-600">+1.800.000 đ</span></span>
                    </label>
                    <label class="flex items-center space-x-3">
                        <input type="checkbox" name="warranty[extra_year]" class="h-5 w-5 text-red-600 rounded">
                        <span>Đặc quyền Bảo hành thêm 1 năm MTXT (BT) <span class="text-red-600">+800.000 đ</span></span>
                    </label>
                </div>
            </div>
            
            <!-- Quà tặng -->
            <div class="border-b pb-4 mb-4">
                <h4 class="font-medium mb-2">Quà tặng</h4>
                <button type="button" class="text-blue-600 hover:underline">Xem quà (4)</button>
            </div>
            
            <!-- Ưu đãi -->
            <div class="mb-4">
                <h4 class="font-medium mb-2">Chọn hoặc nhập ưu đãi</h4>
                <label class="flex items-center space-x-3">
                    <input type="checkbox" name="promotion[point]" class="h-5 w-5 text-red-600 rounded">
                    <span>Đổi 0 điểm (-0đ)</span>
                </label>
            </div>
        </div>
        
        <!-- Cột phải - Thông tin đơn hàng -->
        <div class="lg:w-80 flex-shrink-0">
            <div class="bg-white rounded-lg shadow-md p-6 sticky top-6">
                <h3 class="font-bold text-lg mb-4">Thông tin đơn hàng</h3>
                
                <div class="space-y-3">
                    <div class="flex justify-between">
                        <span>Tổng tiền</span>
                        <span class="font-bold"><?= number_format($totalPrice) ?> đ</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Tổng khuyến mãi</span>
                        <span class="text-red-600"><?= number_format($totalDiscount ?? 0) ?> đ</span>
                    </div>
                    <div class="flex justify-between border-t pt-3 mt-3">
                        <span class="font-bold">Cần thanh toán</span>
                        <span class="text-xl font-bold text-red-600"><?= number_format($totalPrice - ($totalDiscount ?? 0)) ?> đ</span>
                    </div>
                    <div class="flex justify-between text-sm text-gray-500">
                        <span>Điểm thưởng</span>
                        <span><?= $rewardPoints ?? 0 ?></span>
                    </div>
                </div>
                
                <button type="submit" name="action" value="checkout" 
                        class="w-full mt-6 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition font-bold">
                    Xác nhận đơn hàng
                </button>
                
                <div class="mt-4 text-center">
                    <button type="button" class="text-blue-600 hover:underline text-sm">Xem chi tiết</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Nút hành động phía dưới -->
    <div class="flex justify-between items-center mt-6">
        <a href="<?= ROOT_URL ?>" class="px-6 py-3 border border-gray-300 rounded-lg hover:bg-gray-100 transition">
            <i class="fas fa-arrow-left mr-2"></i> Tiếp tục mua sắm
        </a>
        
        <button type="submit" name="action" value="update" class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
            Cập nhật giỏ hàng
        </button>
    </div>
    <?php endif; ?>
</form>

<script>
// Xử lý tăng/giảm số lượng
document.querySelectorAll('.increment-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const input = this.parentNode.querySelector('.quantity-input');
        input.value = parseInt(input.value) + 1;
    });
});

document.querySelectorAll('.decrement-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const input = this.parentNode.querySelector('.quantity-input');
        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
        }
    });
});
</script>

<?php include_once ROOT_DIR . "/Views/clients/footer.php"; ?>