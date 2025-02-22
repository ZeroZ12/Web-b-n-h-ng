<?php include_once ROOT_DIR . "./Views/clients/header.php" ?>

<div class="container mt-5">
    <h2><b>Tìm kiếm: <?= $keyword ?></b></h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Product Card 1 -->
            <?php if($products) : ?>
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
            <?php else : ?>
            <div>Không tìm thấy sản phẩm <b><?=$keyword?></b> </div>
        <?php endif ?>
    </div>
</div>

<?php include_once ROOT_DIR . "./Views/clients/footer.php" ?>