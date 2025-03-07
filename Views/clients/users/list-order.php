
<?php include_once ROOT_DIR . "./Views/clients/header.php"; ?>

<div class="flex min-h-screen">
    <!-- Sidebar -->
    <?php include_once ROOT_DIR . "./Views/clients/users/sidebar.php"; ?>

    <!-- Main Content -->
    <div class="w-3/4 p-6">
    <!-- Main Content -->
        <div class="card">
            <h1 class="text-xl font-bold mb-4">
                Chi tiết đơn hàng
            </h1>
            <div class="card-body">
                <!-- Thông tin đơn hàng -->
                <div class="mb-4">
                    <h5>Mã đơn hàng: #<?= $order['id'] ?></h5>
                    <p><strong>Ngày đặt hàng:</strong> <?= date('d-m-Y H:i:s', strtotime($order['created_at'])) ?></p>
                    <p><strong>Trạng thái:</strong> <span class="badge bg-success"><?= getOrderStatus($order['status']) ?></span></p>
                </div>

                <!-- Thông tin khách hàng -->
                <div class="mb-4">
                    <h5>Thông tin khách hàng</h5>
                    <p><strong>Họ tên:</strong> <?= $order['fullname'] ?></p>
                    <p><strong>Email:</strong> <?= $order['email'] ?></p>
                    <p><strong>Điện thoại:</strong> <?= $order['phone'] ?></p>
                    <p><strong>Địa chỉ:</strong> <?= $order['address'] ?></p>
                </div>

                <!-- Danh sách sản phẩm -->
                <div class="mb-4">
                    <h5>Danh sách sản phẩm</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Hình ảnh</th>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($order_details as $stt => $detail) : ?>
                            <tr>
                                <td><?= $stt+1 ?></td>
                                <td><img src="<?= ROOT_URL . $detail['image'] ?>" width="200" alt=""></td>
                                <td><?= $detail['name'] ?></td>
                                <td><?= $detail['quantity'] ?></td>
                                <td><?= number_format($detail['price']) ?> VND</td>
                                <td><?= number_format($detail['price'] * $detail['quantity']) ?> VND</td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4" class="text-end">Tổng cộng:</th>
                                <th><?= number_format($order['total_price']) ?> VND</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <!-- Nút thao tác -->
                <div class="d-flex justify-content-between">
                    <a href="<?= ROOT_URL . '?ctl=list-order' ?>" class="btn btn-secondary">Quay lại danh sách đơn hàng</a>
                    <?php if($order['status'] == 1) : ?>
                        <form action="" method="post">
                            <button class="btn btn-danger">Hủy đơn hàng</button>
                        </form>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once ROOT_DIR . "./Views/clients/footer.php"; ?>
