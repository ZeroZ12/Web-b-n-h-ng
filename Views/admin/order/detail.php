<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>

div class="w-4/5 p-6">
<div class="flex justify-between items-center mb-6">
    <input class="border rounded p-2 w-1/3" placeholder="Tìm kiếm đơn hàng" type="text" />
    <div class="flex items-center space-x-4">
        <i class="fas fa-bell text-xl">
        </i>
        <div class="flex items-center space-x-2">
            <img alt="User avatar" class="rounded-full" height="30" src="https://storage.googleapis.com/a1aa/image/iZ82j5ksgkPLWZqb3uZleGg-xZ_d-v3AZMZwJIDqO4M.jpg" width="30" />
            <span>
                Username
            </span>
        </div>
    </div>
</div>
<h2 class="text-2xl font-bold mb-4">
    CHI TIẾT ĐƠN HÀNG
</h2>
<div class="bg-white p-6 rounded shadow">
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-xl font-semibold">
            Đơn hàng #ODR2021123456789
        </h3>
        <button class="bg-blue-500 text-white px-4 py-2 rounded">
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
            <tr class="border-b">
                <td class="p-2 flex items-center">
                    <img alt="Product image" class="w-12 h-12 mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/zGzd1cXQWjzhnZvsM1yrddipr7cWMG4nM5TzOZDLVGg.jpg" width="50" />
                    <div>
                        <p>
                            Ốp lưng MagSafe iPhone 13 Pro Max - Màu Trong Apple
                        </p>
                        <p class="text-sm text-gray-500">
                            Phụ kiện
                        </p>
                    </div>
                </td>
                <td class="p-2 text-right">
                    1,000,000 đ
                </td>
                <td class="p-2 text-right">
                    1
                </td>
                <td class="p-2 text-right">
                    1,000,000 đ
                </td>
            </tr>
            <tr class="border-b">
                <td class="p-2 flex items-center">
                    <img alt="Product image" class="w-12 h-12 mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/zGzd1cXQWjzhnZvsM1yrddipr7cWMG4nM5TzOZDLVGg.jpg" width="50" />
                    <div>
                        <p>
                            Ốp lưng MagSafe iPhone 13 Pro Max - Màu Tím Apple
                        </p>
                        <p class="text-sm text-gray-500">
                            Phụ kiện
                        </p>
                    </div>
                </td>
                <td class="p-2 text-right">
                    1,000,000 đ
                </td>
                <td class="p-2 text-right">
                    1
                </td>
                <td class="p-2 text-right">
                    1,000,000 đ
                </td>
            </tr>
            <tr class="border-b">
                <td class="p-2 flex items-center">
                    <img alt="Product image" class="w-12 h-12 mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/zGzd1cXQWjzhnZvsM1yrddipr7cWMG4nM5TzOZDLVGg.jpg" width="50" />
                    <div>
                        <p>
                            Ốp lưng MagSafe iPhone 13 Pro Max - Màu Đỏ Apple
                        </p>
                        <p class="text-sm text-gray-500">
                            Phụ kiện
                        </p>
                    </div>
                </td>
                <td class="p-2 text-right">
                    1,000,000 đ
                </td>
                <td class="p-2 text-right">
                    1
                </td>
                <td class="p-2 text-right">
                    1,000,000 đ
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
                3,000,000 đ
            </p>
            <p>
                50,000 đ
            </p>
            <p>
                Thanh toán khi nhận hàng
            </p>
            <p class="font-bold">
                3,050,000 đ
            </p>
        </div>
    </div>
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center">
            <img alt="Delivery icon" class="w-12 h-12 mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/Ad7OhvxKzXF4GoY9cslGueZB1zHdmjFtkdqPpblLjqQ.jpg" width="50" />
            <div>
                <p class="text-gray-500">
                    Đang giao
                </p>
                <p class="text-gray-500">
                    Chưa thanh toán
                </p>
            </div>
        </div>
        <div class="flex space-x-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                Xác nhận thanh toán
            </button>
            <button class="bg-gray-500 text-white px-4 py-2 rounded">
                Xác nhận hoàn thành
            </button>
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
                    Nguyễn Văn A
                </p>
                <p class="text-gray-500">
                    nguyenvana@gmail.com
                </p>
            </div>
        </div>
        <div>
            <p class="text-gray-500">
                Địa chỉ giao hàng:
            </p>
            <p>
                123 Đường ABC, Phường XYZ, Quận 1, TP. Hồ Chí Minh
            </p>
        </div>
    </div>
</div>
</div>

<?php include_once ROOT_DIR . "Views/admin/Footer.php" ?>