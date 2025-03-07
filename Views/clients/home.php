<?php include_once ROOT_DIR . "Views/clients/header.php" ?>
<!-- Main Content -->
<main class="container mx-auto mt-4">
    <div class="grid grid-cols-12 gap-4">
        <!-- Sidebar -->
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
            <h2 class="text-xl font-bold">PC bán chạy</h2>
            <div class="flex items-center space-x-4">
                <span class="text-red-500">Trả góp 0%</span>
                <a class="text-blue-500" href="#">Xem tất cả</a>
            </div>
        </div>

        <!-- Swiper Container -->
        <div class="relative">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($PCs as $product) : ?>
                        <div class="swiper-slide bg-white p-4 rounded-lg shadow h-full">
                            <?php if ($product['is_sale'] == '1') : ?>
                                <span class="text-red-500 text-xl font-bold mb-2">Sale</span>
                            <?php else : ?>
                                <span class="badge bg-info">No Sale</span>
                            <?php endif ?>
                            <img alt="" class="w-full h-48 object-cover mb-4" src="<?= $product['image'] ?>" />
                            <h3 class="text-lg font-bold">
                                <a href="<?= ROOT_URL . '?ctl=detail&id=' . $product['id'] ?>" class="btn btn-outline-success">
                                    <h5 class="product-name"><?= $product['name'] ?></h5>
                                </a>
                            </h3>
                            <div class="flex justify-between items-center mt-4">
                                <?php if (!empty($product['price_sale']) && $product['price_sale'] > 0) : ?>
                                    <span class="text-gray-500 line-through mb-2">
                                        <span class="product-price"><?= number_format($product['price']) ?> đ</span>
                                    </span>
                                    <span class="text-red-500 text-xl font-bold mb-2">
                                        <span class="product-price-sale"><?= number_format($product['price_sale']) ?> đ</span>
                                    </span>
                                <?php else : ?>
                                    <span class="text-gray-500 text-xl font-bold mb-2">
                                        <span class="product-price"><?= number_format($product['price']) ?> đ</span>
                                    </span>
                                <?php endif ?>
                            </div>
                    
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-yellow-500">
                                    <i class="fas fa-star"></i> 5.0
                                </span>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>

            <!-- Nút điều hướng -->
            <div class="absolute top-1/2 -left-6 transform -translate-y-1/2">
                <button class="swiper-button-prev text-3xl text-gray-600"></button>
            </div>
            <div class="absolute top-1/2 -right-6 transform -translate-y-1/2">
                <button class="swiper-button-next text-3xl text-gray-600"></button>
            </div>
        </div>
    </div>
    <!-- Linh kiện PC bán chạy -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Linh kiện PC bán chạy</h2>
            <div class="flex items-center space-x-4">
                <span class="text-red-500">Miễn phí giao hàng</span>
                <a class="text-blue-500" href="#">Xem tất cả</a>
            </div>
        </div>

        <div class="relative">
            <div class="swiper pcComponentsSwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($pcComponents as $product) : ?>
                        <div class="swiper-slide bg-white p-4 rounded-lg shadow h-full">
                            <?php if ($product['is_sale'] == '1') : ?>
                                <span class="text-red-500 text-xl font-bold mb-2">Sale</span>
                            <?php else : ?>
                                <span class="badge bg-info">No Sale</span>
                            <?php endif ?>
                            <img class="w-full h-48 object-cover mb-4" src="<?= $product['image'] ?>" alt="" />
                            <h3 class="text-lg font-bold">
                                <a href="<?= ROOT_URL . '?ctl=detail&id=' . $product['id'] ?>" class="btn btn-outline-success">
                                    <h5 class="product-name"><?= $product['name'] ?></h5>
                                </a>
                            </h3>
                            <div class="flex justify-between items-center mt-4">
                                <?php if (!empty($product['price_sale']) && $product['price_sale'] > 0) : ?>
                                    <span class="text-gray-500 line-through mb-2">
                                        <span class="product-price"><?= number_format($product['price']) ?> đ</span>
                                    </span>
                                    <span class="text-red-500 text-xl font-bold mb-2">
                                        <span class="product-price-sale"><?= number_format($product['price_sale']) ?> đ</span>
                                    </span>
                                <?php else : ?>
                                    <span class="text-gray-500 text-xl font-bold mb-2">
                                        <span class="product-price"><?= number_format($product['price']) ?> đ</span>
                                    </span>
                                <?php endif ?>
                            </div>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-yellow-500"><i class="fas fa-star"></i> 5.0</span>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>

            <!-- Nút điều hướng -->
            <button class="swiper-button-prev pc-prev text-3xl text-gray-600"></button>
            <button class="swiper-button-next pc-next text-3xl text-gray-600"></button>
        </div>
    </div>

    <!-- Laptop gaming bán chạy -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Laptop gaming bán chạy</h2>
            <div class="flex items-center space-x-4">
                <span class="text-red-500">Miễn phí giao hàng</span>
                <a class="text-blue-500" href="#">Xem tất cả</a>
            </div>
        </div>

        <div class="relative">
            <div class="swiper laptopSwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($laptops as $laptop) : ?>
                        <div class="swiper-slide bg-white p-4 rounded-lg shadow h-full">
                            <?php if ($laptop['is_sale'] == '1') : ?>
                                <span class="text-red-500 text-xl font-bold mb-2">Sale</span>
                            <?php else : ?>
                                <span class="badge bg-info">No Sale</span>
                            <?php endif ?>
                            <img class="w-full h-48 object-cover mb-4" src="<?= $laptop['image'] ?>" alt="" />
                            <h3 class="text-lg font-bold">
                                <a href="<?= ROOT_URL . '?ctl=detail&id=' . $laptop['id'] ?>" class="btn btn-outline-success">
                                    <h5 class="product-name"><?= $laptop['name'] ?></h5>
                                </a>
                            </h3>
                            <div class="flex justify-between items-center mt-4">
                                <?php if (!empty($laptop['price_sale']) && $laptop['price_sale'] > 0) : ?>
                                    <span class="text-gray-500 line-through mb-2">
                                        <span class="laptop-price"><?= number_format($laptop['price']) ?> đ</span>
                                    </span>
                                    <span class="text-red-500 text-xl font-bold mb-2">
                                        <span class="laptop-price-sale"><?= number_format($laptop['price_sale']) ?> đ</span>
                                    </span>
                                <?php else : ?>
                                    <span class="text-gray-500 text-xl font-bold mb-2">
                                        <span class="laptop-price"><?= number_format($laptop['price']) ?> đ</span>
                                    </span>
                                <?php endif ?>
                            </div>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-yellow-500"><i class="fas fa-star"></i> 5.0</span>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>

            <!-- Nút điều hướng -->
            <button class="swiper-button-prev laptop-prev text-3xl text-gray-600"></button>
            <button class="swiper-button-next laptop-next text-3xl text-gray-600"></button>
        </div>
    </div>
</div>
<?php include_once ROOT_DIR . "Views/clients/footer.php";
