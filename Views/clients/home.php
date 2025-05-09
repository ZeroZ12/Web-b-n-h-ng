<?php include_once ROOT_DIR . "Views/clients/header.php" ?>
<!-- Main Content -->
<main class="container mx-auto mt-4 px-4">
    <div class="grid grid-cols-12 gap-6">
        <!-- Sidebar - Chiếm 2 cột -->
        <aside class="col-span-2 bg-white rounded-lg shadow p-4 sticky top-4 h-fit">
            <?php include_once ROOT_DIR . "Views/clients/sidebar.php" ?>
        </aside>

        <!-- Main Content - Chiếm 10 cột -->
        <section class="col-span-10">
            <!-- Banner Section -->
            <div class="grid grid-cols-12 gap-4 mb-8">
                <div class="col-span-8">
                    <img alt="Main Banner" class="w-full rounded-lg" src="https://file.hstatic.net/200000722513/file/thang_01_laptop_gaming_banner_web_slider_800x400.png" />
                </div>
                <div class="col-span-4 space-y-4">
                    <img alt="Right Banner 1" class="w-full rounded-lg" src="https://file.hstatic.net/200000722513/file/thang_01_layout_web_-02.png" />
                    <img alt="Right Banner 2" class="w-full rounded-lg" src="https://file.hstatic.net/200000722513/file/thang_01_layout_web_-03.png" />
                </div>
            </div>

            <!-- Product Sections -->
            <?php
            $sections = [
                [
                    'title' => 'PC bán chạy',
                    'tag' => 'Trả góp 0%',
                    'products' => $PCs,
                    'swiperClass' => 'mySwiper'
                ],
                [
                    'title' => 'Linh kiện PC bán chạy',
                    'tag' => 'Miễn phí giao hàng',
                    'products' => $pcComponents,
                    'swiperClass' => 'pcComponentsSwiper'
                ],
                [
                    'title' => 'Laptop bán chạy',
                    'tag' => 'Miễn phí giao hàng',
                    'products' => $laptops,
                    'swiperClass' => 'laptopSwiper'
                ]
            ];

            foreach ($sections as $section) : ?>
                <div class="mb-12">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold"><?= $section['title'] ?></h2>
                        <div class="flex items-center space-x-4">
                            <span class="text-red-500 font-medium"><?= $section['tag'] ?></span>
                            <a class="text-blue-500 hover:underline font-medium" href="#">Xem tất cả</a>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="swiper <?= $section['swiperClass'] ?> ">
                            <div class="swiper-wrapper">
                                <?php foreach ($section['products'] as $product) : ?>
                                    <div class="swiper-slide bg-white p-4 rounded-lg shadow h-full flex flex-col">
                                        <?php if ($product['is_sale'] == '1') : ?>
                                            <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">SALE</span>
                                        <?php endif ?>
                                        <img alt="<?= $product['name'] ?>" class="w-full h-48 object-contain mb-4" src="<?= $product['image'] ?>" />
                                        <h3 class="text-lg font-bold flex-grow">
                                            <a href="<?= ROOT_URL . '?ctl=detail&id=' . $product['id'] ?>" class="hover:text-red-600 transition">
                                                <?= $product['name'] ?>
                                            </a>
                                        </h3>
                                        <div class="mt-2"> 
                                            <?php if (!empty($product['price_sale']) && $product['price_sale'] > 0) : ?>
                                                <div class="flex items-center space-x-2"> <span class="text-gray-500 line-through">
                                                        <?= number_format($product['price']) ?> đ
                                                    </span>
                                                    <span class="text-red-500 text-xl font-bold">
                                                        <?= number_format($product['price_sale']) ?> đ
                                                    </span>
                                                </div>
                                            <?php else : ?>
                                                <span class="text-red-500 text-xl font-bold">
                                                    <?= number_format($product['price']) ?> đ
                                                </span>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>

                        <!-- Navigation buttons -->
                        <div class="absolute top-1/2 -left-6 transform -translate-y-1/2">
                            <button class="swiper-button-prev bg-white p-2 rounded-full shadow-md hover:bg-gray-100 transition">
                            </button>
                        </div>
                        <div class="absolute top-1/2 -right-6 transform -translate-y-1/2">
                            <button class="swiper-button-next bg-white p-2 rounded-full shadow-md hover:bg-gray-100 transition">
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </section>
    </div>
</main>

<?php include_once ROOT_DIR . "Views/clients/footer.php"; ?>