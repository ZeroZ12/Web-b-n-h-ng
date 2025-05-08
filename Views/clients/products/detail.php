<?php include_once ROOT_DIR . "./Views/clients/header.php" ?>


<body class="items-center justify-center min-h-screen bg-gray-100">
    <!-- Header -->

    <div class="container mx-auto p-4">
        <nav class="text-sm text-gray-500 mb-4">
            <a class="hover:underline" href="<?= ROOT_URL ?>">
                Trang chủ
            </a>
            /
            <a class="hover:underline" href="#">
                PC GVN
            </a>
            /
            <span>
                <?= $product['name'] ?>
            </span>
        </nav>
        <div class="flex flex-col lg:flex-row bg-white p-4 rounded shadow">
            <div class="lg:w-1/3">
                <img id="mainImage" class="w-64 h-64 border mb-4" src="<?= $product['image'] ?>" alt="Main Image" />


                <!-- Ảnh thumbnail -->
                <div class="flex space-x-2">
                    <img alt="Thumbnail 1" class="w-12 h-12 border cursor-pointer" height="50"
                        src="<?= $product['image'] ?>"
                        width="50" onclick="changeImage(this)" />
                    <img alt="Thumbnail 2" class="w-12 h-12 border cursor-pointer" height="50"
                        src="https://th.bing.com/th?id=ORMS.24a90138035687d7ac6a263b45d38864&pid=Wdp&w=268&h=140&qlt=90&c=1&rs=1&dpr=1.25&p=0"
                        width="50" onclick="changeImage(this)" />
                    <img alt="Thumbnail 3" class="w-12 h-12 border cursor-pointer" height="50"
                        src="https://www.bing.com/th?id=OADD2.10239412782965_1MQ53S01VGDIERA6I&pid=21.2&c=16&roil=0&roit=0.239&roir=1&roib=0.7624&w=268&h=140&dynsize=1&qlt=90"
                        width="50" onclick="changeImage(this)" />
                </div>
            </div>
            <script>
                function changeImage(element) {
                    document.getElementById("mainImage").src = element.src;
                }
            </script>
            <div class="lg:w-2/3 lg:pl-8">
                <h1 class="text-xl font-bold mb-2">
                    <?= $product['name'] ?>
                </h1>
                <div class="flex items-center mb-2">
                    <span class="text-yellow-500 text-lg">
                        <i class="fas fa-star">
                        </i>
                    </span>
                    <span class="text-yellow-500 text-lg">
                        <i class="fas fa-star">
                        </i>
                    </span>
                    <span class="text-yellow-500 text-lg">
                        <i class="fas fa-star">
                        </i>
                    </span>
                    <span class="text-yellow-500 text-lg">
                        <i class="fas fa-star">
                        </i>
                    </span>
                    <span class="text-yellow-500 text-lg">
                        <i class="fas fa-star-half-alt">
                        </i>
                    </span>
                    <span class="text-sm text-gray-500 ml-2">
                        0.0
                    </span>
                    <a class="text-sm text-blue-500 ml-2 hover:underline" href="#">
                        Xem đánh giá
                    </a>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <?php if (!empty($product['price_sale']) && $product['price_sale'] > 0) : ?>
                        <span class="text-gray-500 line-through mb-2">
                            <span class="product-price"><?= number_format($product['price']) ?> đ</span>
                        </span>
                        <span class="text-red-600 text-3xl font-bold mb-2">
                            <span class="product-price-sale"><?= number_format($product['price_sale']) ?> đ</span>
                        </span>
                    <?php else : ?>
                        <span class="text-red-600 text-3xl font-bold mb-2">
                            <span class="product-price"><?= number_format($product['price']) ?> đ</span>
                        </span>
                    <?php endif ?>
                </div>
                <div class="bg-red-100 p-4 rounded mb-4">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-gift text-red-600 mr-2">
                        </i>
                        <span class="text-red-600 font-bold">
                            Tình Trạng
                        </span>
                    </div>
                    <div class="text-sm text-gray-700">
                        <?php if ($product['quantity'] > 0) : ?>
                            <span>Còn <?= $product['quantity'] ?> Sản Phẩm</span>
                        <?php else : ?>
                            <span>Hết Hàng</span>
                        <?php endif ?>
                    </div>
                </div>
                <a href="<?= ROOT_URL . '?ctl=add-cart&id=' . $product['id'] ?>">
                    <button class="bg-red-600 text-white text-lg font-bold py-2 px-4 rounded w-full mb-4">
                        THÊM VÀO GIỎ HÀNG
                    </button>
                </a>
                <div class="text-center text-sm text-gray-500 mb-4">
                    Giao hàng tận nơi hoặc nhận tại cửa hàng
                </div>
                <div class="text-red-600 font-bold mb-2">
                    ƯU ĐÃI KHI MUA KÈM PC
                </div>
                <div class="text-sm text-gray-700 mb-4">
                    Đã lên đến 54% khi mua kèm PC xem ngay tại đây
                </div>
                <div class="text-sm text-gray-700 mb-4">
                    Hỗ trợ trả góp MPOS (Thẻ tín dụng), HDSAISON.
                </div>
                <div class="text-xs text-gray-500 mb-4">
                    (Hỗ trợ PC chỉ mang tính chất minh họa)
                </div>
                <div class="text-red-600 font-bold mb-2">
                    Khuyến mãi cực khủng
                </div>
                <div class="text-sm text-gray-700 mb-4">
                    Mua kèm màn hình giảm giá lên đến 500K
                </div>
                <div class="bg-gray-100 p-4 rounded">
                    <div class="text-gray-700 font-bold mb-2">
                        Khuyến mãi
                    </div>
                    <ul class="list-disc list-inside text-sm text-gray-700">
                        <li>
                            Giảm ngay 200.000đ khi mua kèm ổ cứng SSD
                        </li>
                        <li>
                            Giảm ngay 100.000đ khi mua kèm chuột gaming
                        </li>
                        <li>
                            Giảm ngay 300.000đ khi mua Microsoft Office kèm PC
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto p-4">
            <h1 class="text-lg font-bold mb-4">Giới thiệu về <?= $product['name'] ?></h1>
            <div style="text-align: justify; line-height: 1.6;">
                <?= $product['description'] ?>
            </div>
            <h1 class="text-lg font-bold mb-4">Đánh giá & Nhận xét <?= $product['name'] ?></h1>
            <div class="flex items-center mb-4">
                <span class="text-red-500 text-4xl font-bold">0/5</span>
                <div class="ml-4">
                    <div class="flex items-center">
                        <i class="far fa-star text-gray-400 text-2xl"></i>
                        <i class="far fa-star text-gray-400 text-2xl"></i>
                        <i class="far fa-star text-gray-400 text-2xl"></i>
                        <i class="far fa-star text-gray-400 text-2xl"></i>
                        <i class="far fa-star text-gray-400 text-2xl"></i>
                    </div>
                    <span class="text-gray-500">0 đánh giá & nhận xét</span>
                </div>
            </div>
            <hr>
            <div class="space-y-2">
                <div class="col-md-6">
                    <div id="reviews">
                        <?php foreach ($comments as $comment): ?>
                            <ul class="reviews">
                                <li>
                                    <div class="review-heading">
                                        <h5 class="name"><?= $comment['fullname'] ?></h5>
                                        <p class="date"><?= date('d-m-Y H:i:s', strtotime($comment['created_at'])) ?></p>
                                    </div>
                                    <div class="review-body">
                                        <p><?= $comment['content'] ?></p>
                                    </div>
                                </li>
                            </ul>
                        <?php endforeach ?>
                    </div>
                    <?php if (isset($_SESSION['user'])): ?>
                        <form action="" method="post">
                            <textarea name="content" rows="3" cols="60" require id="content" placeholder="Đóng góp bình luận của bạn nhé"></textarea>
                            <br>
                            <div class="mt-6">
                                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Gửi</button>
                            </div>
                        </form>
                    <?php else: ?>
                        <div>Bạn cần <b><a href="<?= ROOT_URL . '?ctl=login' ?>">Đăng nhập</a></b> để bình luận</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="swiper laptopSwiper">
                <h2 class="mt-5">Các sản phẩm liên quan</h2>
                <div class="swiper-wrapper">
                    <?php foreach ($productReleads as $pro) : ?>
                        <div class="swiper-slide bg-white p-4 rounded-lg shadow h-full">
                            <img class="w-full h-48 object-cover mb-4" src="<?= $pro['image'] ?>" alt="" />
                            <h3 class="text-lg font-bold">
                                <a href="<?= ROOT_URL . '?ctl=detail&id=' . $pro['id'] ?>" class="btn btn-outline-success">
                                    <h5 class="product-name"><?= $pro['name'] ?></h5>
                                </a>
                            </h3>
                            <div class="flex justify-between items-center mt-4">
                                <span class="text-red-500 text-xl font-bold mb-2"><span class="product-price"><?= number_format($pro['price']) ?> đ</span></span>
                            </div>
<!-- <<<<<<< HEAD
======= 
                            <div class="text-red-500 text-xl font-bold mb-2">
                                <span class="text-yellow-500"><i class="fas fa-star"></i> 5.0</span>
                                <span class="text-gray-500">(1 đánh giá)</span>
                            </div>
>>>>>>> 8d94403b2dbbaaf0108b27d8df25e2de1ddb783d -->
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <?php include_once ROOT_DIR . "./Views/clients/footer.php" ?>