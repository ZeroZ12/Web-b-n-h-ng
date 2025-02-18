<?php include_once ROOT_DIR . "Views/clients/header.php" ?>
<?php include_once ROOT_DIR . "Views/clients/sidebar.php" ?>
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
            <?php foreach ($products as $product) : ?>
                <div class="bg-white p-4 rounded-lg shadow">
                    <img alt="" class="w-full h-48 object-cover mb-4" src="<?= $product['image'] ?>" />
                    <h3 class="text-lg font-bold">
                        <!-- PC GVN Intel i5-12400F VGA RTX 4060 -->
                        <a href="<?= ROOT_URL . '?ctl=detail&id=' . $product['id'] ?>" class="btn btn-outline-success">
                            <h5 class="product-name"><?= $product['name'] ?></h5>
                        </a>
                    </h3>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-red-500 ">
                            <span class="product-price"><?= number_format($product['price']) ?> đ</span>
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
            <?php endforeach ?>
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
            <?php foreach ($laptops as $laptop) : ?>
                <div class="bg-white p-4 rounded-lg shadow">
                    <img alt="" class="w-full h-48 object-cover mb-4" src="<?= $laptop['image'] ?>" />
                    <h3 class="text-lg font-bold">
                        <!-- PC GVN Intel i5-12400F VGA RTX 4060 -->
                        <a href="<?= ROOT_URL . '?ctl=detail&id=' . $laptop['id'] ?>" class="btn btn-outline-success">
                            <h5 class="product-name"><?= $laptop['name'] ?></h5>
                        </a>
                    </h3>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-red-500 ">
                            <span class="product-price"><?= number_format($laptop['price']) ?> đ</span>
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
            <?php endforeach ?>
        </div>
    </div>
</div>
<?php include_once ROOT_DIR . "Views/clients/footer.php";
