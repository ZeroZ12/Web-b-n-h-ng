<form action="<?= ROOT_URL . '?ctl=update-cart' ?>" method="post"></form>
<div class="giohang bg-white p-6 rounded-lg shadow-lg w-full max-w-2xl">
    <a href="<?= ROOT_URL ?>" class="text-blue-600 text-sm mb-4 inline-block">&lt; Mua thêm sản phẩm khác</a>
    <div class="bg-red-50 p-4 rounded-lg mb-6">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="flex items-center justify-center w-8 h-8 bg-red-600 text-white rounded-full">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <span class="ml-2 text-red-600">Giỏ hàng</span>
            </div>
            <div class="flex items-center">
                <div class="flex items-center justify-center w-8 h-8 bg-gray-300 text-gray-600 rounded-full">
                    <i class="fas fa-info-circle"></i>
                </div>
                <span class="ml-2 text-gray-600">Thông tin đặt hàng</span>
            </div>
            <div class="flex items-center">
                <div class="flex items-center justify-center w-8 h-8 bg-gray-300 text-gray-600 rounded-full">
                    <i class="fas fa-credit-card"></i>
                </div>
                <span class="ml-2 text-gray-600">Thanh toán</span>
            </div>
            <div class="flex items-center">
                <div class="flex items-center justify-center w-8 h-8 bg-gray-300 text-gray-600 rounded-full">
                    <i class="fas fa-check-circle"></i>
                </div>
                <span class="ml-2 text-gray-600">Hoàn tất</span>
            </div>
        </div>
    </div>
    <div class="text-center">
        <div class="max-w-4xl mx-auto p-4 bg-white shadow-md mt-6">
            <div class="flex items-center text-sm text-blue-500 mb-4">
                <a class="hover:underline" href="<?= ROOT_URL ?>">
                    Mua thêm sản phẩm khác
                </a>
            </div>
            <?php foreach ($cartst as $id => $carts) : ?>
                <div class="border-b pb-4 mb-4">
                    <div class="flex items-center space-x-4">
                        <div class="w-1/4">
                            <img alt="<?= $carts['name'] ?>" height="100" src="<?= $carts['image'] ?>" width="100" />
                        </div>
                        <div class="w-3/4">
                            <h2 class="text-lg font-semibold">
                                <?= $carts['name'] ?>
                            </h2>
                            <p class="text-sm text-gray-500">
                                Quà tặng khuyến mãi
                            </p>
                            <p class="text-sm text-gray-500">
                                Tặng: Ram Laptop V-Color DDR4 8GB 3200Mhz TN48623S822 1Gx8 1Rx8 Sodimm Trị giá: 750.000đ
                            </p>
                            <div class="flex items-center mt-2">
                                <a href="<?= ROOT_URL . 'ctl=delete&id=' . $id ?>">
                                    <button class="text-red-500 hover:underline">
                                        Xóa
                                    </button>
                                </a>

                                <div class="ml-4 flex items-center border rounded">
                                    <td>
                                        <input type="number" name="quantity[<?= $id ?>" value="<?= $carts['quantity'] ?>" min="1">
                                    </td>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-red-500 text-lg font-semibold">
                                <?= number_format($carts['price'])  ?>đ
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="border-b pb-4 mb-4">
                    <div class="flex items-center justify-between">
                        <button class="text-blue-500 hover:underline flex items-center">
                            <i class="fas fa-ticket-alt mr-2">
                            </i>
                            Sử dụng mã giảm giá
                        </button>
                        <i class="fas fa-chevron-up text-blue-500">
                        </i>
                    </div>
                    <div class="mt-4">
                        <div class="flex items-center space-x-2">
                            <input class="flex-1 border rounded p-2" placeholder="Nhập mã giảm giá/Phiếu mua hàng" type="text" />
                            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                                Áp dụng
                            </button>
                        </div>
                        <div class="mt-4 space-y-4">
                            <div class="flex items-center justify-between border p-2 rounded">
                                <div class="flex items-center space-x-2">
                                    <img alt="Discount 100.000đ" class="w-12 h-12" height="50" src="https://storage.googleapis.com/a1aa/image/nJ5zoLu7nLxzR9CAYR1GAJC321DgEyd-fbVbFII2nqc.jpg" width="50" />
                                    <div>
                                        <p class="text-sm font-semibold">
                                            Giảm 100.000đ
                                        </p>
                                        <p class="text-xs text-gray-500">
                                            Đơn hàng từ 3000K
                                        </p>
                                        <p class="text-xs text-gray-500">
                                            Mã: DAILY100
                                        </p>
                                        <p class="text-xs text-gray-500">
                                            HSD: Thứ 3, 23:59 30 Thg 04, 2024
                                        </p>
                                    </div>
                                </div>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded">
                                    Áp dụng
                                </button>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
        <div class="flex justify-between items-center mb-4">
            <p class="text-lg font-semibold">
                Tổng tiền:
            </p>
            <p class="text-red-500 text-lg font-semibold">
                <?= number_format($carts['price'] * $carts['quantity'])  ?>đ
            </p>
        </div>
            <?php endforeach ?>
        <button class="w-full bg-red-500 text-white py-3 rounded text-lg font-semibold">
            ĐẶT HÀNG NGAY
        </button>
    </div>
            
    </div>
</div>