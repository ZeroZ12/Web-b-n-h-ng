<?php include_once ROOT_DIR . "./Views/clients/header.php" ?>

<div class="container mx-auto p-4">
    <h1 class="text-center text-2xl font-bold mb-2">
        TÌM KIẾM <?= $keyword ?>
    </h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <?php if ($products) : ?>
            <?php foreach ($products as $product) : ?>
                <!-- Product 1 -->
                <div class="bg-white p-4 rounded shadow">
                    <div class="flex justify-between items-center mb-2">
                    </div>
                    <img alt="PC Image 1" class="w-full mb-2" height="200" src="<?= $product['image'] ?>" width="200" />
                    <span class="bg-red-500 text-white px-2 py-1 text-xs rounded">
                        Bán chạy
                    </span>
                    <h2 class="text-lg font-bold mb-2">
                    <a href="<?= ROOT_URL . '?ctl=detail&id=' . $product['id'] ?>" class="btn btn-outline-success">
                            <h5 class="product-name"><?= $product['name'] ?></h5>
                        </a>
                    </h2>
                    <div class="flex justify-between items-center mt-4">
                        <?php if (!empty($product['price_sale']) && $product['price_sale'] > 0) : ?>
                            <span class="text-gray-500 line-through mb-2">
                                <span class="product-price"><?= number_format($product['price']) ?> đ</span>
                            </span>
                            <span class="text-red-500 text-xl font-bold mb-2">
                                <span class="product-price-sale"><?= number_format($product['price_sale']) ?> đ</span>
                            </span>
                        <?php else : ?>
                            <span class="text-red-500 text-xl font-bold mb-2">
                                <span class="product-price"><?= number_format($product['price']) ?> đ</span>
                            </span>
                        <?php endif ?>
                    </div>
                    <p class="text-gray-500 text-sm">
                        0.0/5 (0 đánh giá)
                    </p>
                </div>
            <?php endforeach ?>
        <?php else : ?>
            <div>Không tìm thấy sản phẩm <b><?= $keyword ?></b> </div>
        <?php endif ?>
    </div>

</div>

<?php include_once ROOT_DIR . "./Views/clients/footer.php" ?>