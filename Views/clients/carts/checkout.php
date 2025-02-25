<?php include_once ROOT_DIR . "./Views/clients/header.php" ?>

<div class="max-w-lg mx-auto bg-white p-6 mt-10 rounded-lg shadow-lg">
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-red-500 text-white flex items-center justify-center rounded-full">1</div>
            <span>Giỏ hàng</span>
        </div>
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-red-500 text-white flex items-center justify-center rounded-full">2</div>
            <span>Thông tin đặt hàng</span>
        </div>
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-gray-300 text-gray-500 flex items-center justify-center rounded-full">3</div>
            <span>Thanh toán</span>
        </div>
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-gray-300 text-gray-500 flex items-center justify-center rounded-full">4</div>
            <span>Hoàn tất</span>
        </div>
    </div>
        <div class="mb-6">
            <h2 class="text-lg font-semibold mb-2">Thông tin khách mua hàng</h2>
            <div class="flex items-center mb-4">
                <label class="mr-4">
                    <input type="radio" name="gender" class="mr-1"> Anh
                </label>
                <label>
                    <input type="radio" name="gender" class="mr-1"> Chị
                </label>
            </div>
            <div class="flex space-x-4 mb-4">

                <input type="text" value="<?= $user['fullname'] ?>" placeholder="Nhập họ tên" class="w-1/2 p-2 border border-gray-300 rounded">
                <input type="text" value="<?= $user['phone'] ?>" placeholder="Nhập số điện thoại" class="w-1/2 p-2 border border-gray-300 rounded">
            </div>
        </div>
        <div class="mb-6">
            <h2 class="text-lg font-semibold mb-2">Chọn cách nhận hàng</h2>
            <div class="mb-4">
                <label class="flex items-center">
                    <input type="radio" name="delivery" class="mr-2"> Giao hàng tận nơi
                </label>
            </div>
            <div class="space-y-4 mb-4">
                <div class="flex space-x-4">
                    <input type="text" value="<?= $user['address'] ?>" placeholder="Số nhà, tên đường" class="w-full p-2 border border-gray-300 rounded">
                </div>
            </div>
            <div class="mb-4">
                <input type="text" placeholder="Lưu ý giao hàng (Không bắt buộc)" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label class="flex items-center">
                    <input type="checkbox" class="mr-2"> Xuất hóa đơn cho đơn hàng
                </label>
            </div>
        </div>
        <div class="mb-6">
            <h2 class="text-lg font-semibold mb-2">Dịch vụ giao hàng</h2>
            <div class="mb-4">
                <label class="flex items-center">
                    <input type="radio" name="shipping" class="mr-2"> Miễn phí vận chuyển (Giao hàng tiêu chuẩn)
                </label>
            </div>
        </div>
        <div class="mb-6">
            <!-- <div class="flex justify-between items-center mb-4">
                <span>Giảm giá:</span>
                <div class="flex items-center space-x-2">
                    <input type="text" placeholder="Mã giảm giá" class="p-2 border border-gray-300 rounded">
                    <span class="text-red-500">-100.000₫</span>
                </div>
            </div> -->
            <div class="flex justify-between items-center mb-4">
                <span>Phí vận chuyển:</span>
                <span>Miễn phí</span>
            </div>
            <div class="flex justify-between items-center text-lg font-semibold">
                <span>Tổng tiền:</span>
                <span class="text-red-500"><?= number_format($sumPrice) ?>₫</span>
            </div>
        </div>
        <a href="<?= ROOT_URL . '?ctl=check' ?>" class="w-full p-2 border border-gray-300 rounded bg-red-200">ĐẶT HÀNG NGAY
        </a>
        <p class="text-center text-sm text-gray-500 mt-4">Bạn có thể chọn hình thức thanh toán sau khi đặt hàng</p>
</div>

<?php include_once ROOT_DIR . "./Views/clients/footer.php" ?>