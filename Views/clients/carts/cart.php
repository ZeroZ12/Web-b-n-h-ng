<?php include_once ROOT_DIR . "./Views/clients/header.php" ?>
<form action="<?= ROOT_URL . '?ctl=update-cart' ?>" method="post">
    <div class="table-responsive"><br>
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">IMG</th>
                    <th scope="col">NAME</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cartst as $id => $carts) : ?>
                    <tr>
                        <td scope="col"><?= $id ?></td>

                        <td class="">
                            <img alt="<?= $carts['name'] ?>" height="100" src="<?= $carts['image'] ?>" width="100" />
                        </td>
                        <td>
                            <h2 class="text-lg font-semibold">
                                <?= $carts['name'] ?>
                            </h2>
                        </td>
                        
                        <td><?= number_format($carts['price']) ?> đ</td>
                        <td>
                            <input type="number" name="quantity[<?= $id ?>" value="<?= $carts['quantity'] ?>" min="1">
                        </td>
                        <td class="text-right">
                            <p class="text-red-500 text-lg font-semibold">
                                <?= number_format($carts['price'])  ?>đ
                            </p>
                        </td>
                        <td class="flex items-center space-x-4">
                            <a href="<?= ROOT_URL . '?ctl=delete-cart&id' . $id ?>">Xóa</a>
                        </td>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>
            <td class="flex justify-between items-center mb-4">
                <p class="text-lg font-semibold">
                    Tổng tiền:
                    <td colspan="2" class="text-red-500 text-lg font-semibold"><?= number_format($totalPrice) ?> VNĐ</td>
                </p>
            </td>
        </table>
    </div>
<div>
    <a href="<?= ROOT_URL ?>">Tiếp tục mua sắm</a>
</div>
<div>
    <br>
    <button type="submit">Cập nhật giỏ hàng</button>
    
    <a href="<?= ROOT_URL . '?ctl=view-check'?>" type="button">Thanh toán</a>
</div>
</form>

<?php include_once ROOT_DIR . "./Views/clients/footer.php" ?>