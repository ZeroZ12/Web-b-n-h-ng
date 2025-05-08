<?php include_once ROOT_DIR . "Views/clients/header.php" ?>
<!-- Main Content -->
<main class="container mx-auto mt-4 p-4">
    <div class="grid grid-cols-12 gap-6">
        <!-- Sidebar - Chiếm 3 cột -->
        <aside class="col-span-3 bg-white rounded-lg shadow p-4">
            <?php include_once ROOT_DIR . "Views/clients/sidebar.php" ?>
        </aside>
        
        <!-- Nội dung chính - Chiếm 9 cột -->
        <section class="col-span-9">
            <!-- PC bán chạy Section -->
            <div class="mb-8">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold"><?= $category_name[0]['cate_name'] ?> bán chạy</h2>
                    <div class="flex items-center space-x-4">
                        <span class="text-red-500">Trả góp 0%</span>
                        <a class="text-blue-500 hover:underline" href="#">Xem tất cả</a>
                    </div>
                </div>

                <!-- Swiper Container -->
                <div class="relative">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($products as $product) : ?>
                                <div class="swiper-slide bg-white p-4 rounded-lg shadow h-full flex flex-col">
                                    <img alt="<?= $product['name'] ?>" class="w-full h-48 object-contain mb-4" src="<?= $product['image'] ?>" />
                                    <h3 class="text-lg font-bold flex-grow">
                                        <a href="<?= ROOT_URL . '?ctl=detail&id=' . $product['id'] ?>" class="hover:text-red-600 transition">
                                            <?= $product['name'] ?>
                                        </a>
                                    </h3>
                                    <div class="mt-auto">
                                        <div class="flex justify-between items-center mt-4">
                                            <?php if (!empty($product['price_sale']) && $product['price_sale'] > 0) : ?>
                                                <span class="text-gray-500 line-through">
                                                    <?= number_format($product['price']) ?> đ
                                                </span>
                                                <span class="text-red-500 text-xl font-bold">
                                                    <?= number_format($product['price_sale']) ?> đ
                                                </span>
                                            <?php else : ?>
                                                <span class="text-red-500 text-xl font-bold">
                                                    <?= number_format($product['price']) ?> đ
                                                </span>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>

                    <!-- Nút điều hướng -->
                    <div class="absolute top-1/2 -left-6 transform -translate-y-1/2">
                        <button class="swiper-button-prev bg-white p-2 rounded-full shadow-md hover:bg-gray-100 transition">
                            <i class="fas fa-chevron-left text-gray-600 text-xl"></i>
                        </button>
                    </div>
                    <div class="absolute top-1/2 -right-6 transform -translate-y-1/2">
                        <button class="swiper-button-next bg-white p-2 rounded-full shadow-md hover:bg-gray-100 transition">
                            <i class="fas fa-chevron-right text-gray-600 text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php include_once ROOT_DIR . "Views/clients/footer.php"; ?>
