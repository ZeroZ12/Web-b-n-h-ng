
<?php include_once ROOT_DIR . "Views/clients/header.php" ?>
<!-- Main Content -->
<main class="container mx-auto mt-4">
    <div class="grid grid-cols-12 gap-4">
        <!-- Sidebar -->
        <?php include_once ROOT_DIR . "Views/clients/sidebar.php" ?>
    </div>
</main>

<div class="container mx-auto p-4">
    <!-- PC bán chạy Section -->

    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold"><?= $category_name[0]['cate_name'] ?> bán chạy</h2>
            <div class="flex items-center space-x-4">
                <span class="text-red-500">Trả góp 0%</span>
                <a class="text-blue-500" href="#">Xem tất cả</a>
            </div>
        </div>

        <!-- Swiper Container -->
        <div class="relative">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($products as $product) : ?>
                        <div class="swiper-slide bg-white p-4 rounded-lg shadow h-full">
                            <img alt="" class="w-full h-48 object-cover mb-4" src="<?= $product['image'] ?>" />
                            <h3 class="text-lg font-bold">
                                <a href="<?= ROOT_URL . '?ctl=detail&id=' . $product['id'] ?>" class="btn btn-outline-success">
                                    <h5 class="product-name"><?= $product['name'] ?></h5>
                                </a>
                            </h3>
                            <div class="flex justify-between items-center mt-4">
                                <span class="text-red-500">
                                    <span class="product-price"><?= number_format($product['price']) ?> đ</span>
                                </span>
                            </div>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-yellow-500">
                                    <i class="fas fa-star"></i> 5.0
                                </span>
                                <span class="text-gray-500">(1 đánh giá)</span>
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
</div>
<?php include_once ROOT_DIR . "Views/clients/footer.php";
