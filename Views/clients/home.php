<?php include_once ROOT_DIR . "Views/clients/header.php" ?>

<!-- Main Section -->
<section class="col-span-10">
    <div class="grid grid-cols-12 gap-4">
        <!-- Main Banner -->
        <div class="col-span-8">
            <img alt="Main Banner" class="w-full" src="https://file.hstatic.net/200000722513/file/thang_01_laptop_gaming_banner_web_slider_800x400.png" />
        </div>
        <!-- Right Banners -->
        <div class="col-span-4 space-y-4">
            <img alt="Right Banner 1" class="w-full" src="https://file.hstatic.net/200000722513/file/thang_01_layout_web_-02.png" />
            <img alt="Right Banner 2" class="w-full" src="https://file.hstatic.net/200000722513/file/thang_01_layout_web_-03.png" />
        </div>
    </div>
    <!-- Product Grid -->
    <div class="grid grid-cols-12 gap-4 mt-4">
        <?php foreach ($laptops as $laptop) : ?>
        <div class="col-span-4 bg-white p-4">
            <img alt="Product 1" class="w-full" src="<?= ROOT_URL . $laptop['image'] ?>" alt= "Product Imane" />
            <h3 class="text-lg font-bold mt-2">
                <?= $laptop['name'] ?>
            </h3>
            <p class="text-red-600 font-bold">
                Giá chỉ từ <?= number_format($laptop['price']) ?>₫
            </p>
        </div>
        <?php endforeach ?>
        <?php foreach ($laptops as $laptop) : ?>
        <div class="col-span-4 bg-white p-4">
            <img alt="Product 2" class="w-full" src="https://file.hstatic.net/200000722513/file/thang_01_layout_web_-08.png" />
            <h3 class="text-lg font-bold mt-2">
                <?= $laptop['name'] ?>
            </h3>
            <p class="text-red-600 font-bold">
                Giá chỉ từ <?= number_format($laptop['price']) ?>₫
            </p>
        </div>
        <?php endforeach ?>
        <?php foreach ($laptops as $laptop) : ?>

        <div class="col-span-4 bg-white p-4">
            <img alt="Product 3" class="w-full" src="https://file.hstatic.net/200000722513/file/thang_01_layout_web_-07.png" />
            <h3 class="text-lg font-bold mt-2">
                <?= $laptop['name'] ?>
            </h3>
            <p class="text-red-600 font-bold">
                Giá chỉ từ <?= number_format($laptop['price']) ?>₫
            </p>
        </div>
        <?php endforeach?>
    </div>
    </div>
</section>


</div>



</main>

<div class="container mx-auto p-4">
    <!-- PC bán chạy Section -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">
                PC bán chạy
            </h2>
            <div class="flex items-center space-x-4">
                <span class="text-red-500">
                    Trả góp 0%
                </span>
                <a class="text-blue-500" href="#">
                    Xem tất cả
                </a>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Product Card 1 -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="PC GVN Intel i5-12400F VGA RTX 4060" class="w-full h-48 object-cover mb-4" src="https://file.hstatic.net/200000722513/file/thang_01_layout_web_-06.png" />
                <h3 class="text-lg font-bold">
                    PC GVN Intel i5-12400F VGA RTX 4060
                </h3>
                <p class="text-gray-500">
                    i5 12400F | RTX 4060 | 16GB | 500GB
                </p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-red-500 font-bold">
                        17.890.000₫
                    </span>
                    <span class="text-gray-500 line-through">
                        17.890.000₫
                    </span>
                </div>
                <div class="flex justify-between items-center mt-2">
                    <span class="text-yellow-500">
                        <i class="fas fa-star">
                        </i>
                        5.0
                    </span>
                    <span class="text-gray-500">
                        (1 đánh giá)
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Laptop gaming bán chạy Section -->
    <div>
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">
                Laptop gaming bán chạy
            </h2>
            <div class="flex items-center space-x-4">
                <span class="text-red-500">
                    Miễn phí giao hàng
                </span>
                <a class="text-blue-500" href="#">
                    Xem tất cả
                </a>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Laptop Card 1 -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img alt="Laptop gaming MSI Katana 15 B13VEK 252VN" class="w-full h-48 object-cover mb-4" src="https://product.hstatic.net/200000722513/product/thumb_i7_msi_e8ebf152f4c448de8c39a8fc49aa31d7_medium.png" />
                <h3 class="text-lg font-bold">
                    Laptop gaming MSI Katana 15 B13VEK 252VN
                </h3>
                <p class="text-gray-500">
                    i7 13620H | RTX 4060 | 8GB | 512GB | 144Hz
                </p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-red-500 font-bold">
                        23.990.000₫
                    </span>
                    <span class="text-gray-500 line-through">
                        33.990.000₫
                    </span>
                </div>
                <div class="flex justify-between items-center mt-2">
                    <span class="text-yellow-500">
                        <i class="fas fa-star">
                        </i>
                        5.0
                    </span>
                    <span class="text-gray-500">
                        (1 đánh giá)
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once ROOT_DIR . "Views/clients/footer.php";
