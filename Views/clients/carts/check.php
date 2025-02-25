<?php include_once ROOT_DIR . "./Views/clients/header.php" ?>

<div class="container mx-auto p-4">
    <div class="flex flex-col lg:flex-row gap-4">
     <!-- Left Section -->
     <div class="w-full lg:w-2/3 bg-white p-6 rounded shadow">
      <nav class="text-sm mb-4">
       <a class="text-blue-500" href="#">
        Giỏ hàng
       </a>
       &gt;
       <a class="text-blue-500" href="#">
        Thông tin giao hàng
       </a>
       &gt;
       <span>
        Phương thức thanh toán
       </span>
      </nav>
      <div class="mb-6">
       <h2 class="text-lg font-semibold mb-2">
        Phương thức vận chuyển
       </h2>
       <div class="border p-4 rounded">
        <label class="flex items-center">
         <input checked="" class="mr-2" name="shipping" type="radio"/>
         Giao hàng tận nơi
        </label>
        <div class="text-right">
         0₫
        </div>
       </div>
      </div>
      <div>
       <h2 class="text-lg font-semibold mb-2">
        Phương thức thanh toán
       </h2>
       <div class="border p-4 rounded">
        <label class="flex items-center mb-2">
         <input checked="" class="mr-2" name="payment" type="radio"/>
         Thanh toán khi giao hàng (COD)
        </label>
        <p class="text-sm text-gray-600 mb-4">
         Là phương thức khách hàng trả tiền mặt khi nhận hàng. Áp dụng với tất cả các đơn hàng trên toàn quốc.
        </p>
        <label class="flex items-center mb-2" href="">
         <input class="mr-2" name="payment" type="radio"/>
         Thanh toán online qua tk ngân hàng
        </label>
       </div>
      </div>
      <div class="flex justify-between mt-6">
       <a class="text-blue-500" href="<?= ROOT_URL . '?ctl=view-check' ?>">
        Quay lại thông tin giao hàng
       </a>
       <a class="bg-blue-500 text-white px-4 py-2 rounded" href="<?= ROOT_URL . '?ctl=success' ?>">
        Hoàn tất đơn hàng
       </a>
      </div>
     </div>
     <!-- Right Section -->
     <div class="w-full lg:w-1/3 bg-white p-6 rounded shadow">
      <div class="flex items-center mb-4">
      <?php foreach ($cartst as $id => $carts) : ?>
        <img alt="<?= $carts['name'] ?>" class="w-12 h-12 rounded mr-4" height="50" src="<?= $carts['image'] ?>" width="50"/>
       <div>
        <p>
        <?= $carts['name'] ?>
        </p>
        <?php endforeach; ?>
        <p class="text-gray-600">
        <?= number_format($sumPrice) ?>₫
        </p>   
       </div>
      </div>
      <!-- <div class="mb-4">
       <input class="border p-2 w-full rounded mb-2" placeholder="Mã giảm giá" type="text"/>
       <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded w-full">
        Sử dụng
       </button>
      </div> -->
      <div class="border-t pt-4">
       <div class="flex justify-between mb-2">
        <span>
         Tạm tính
        </span>
        <span>
        <?= number_format($sumPrice) ?>₫
        </span>
       </div>
       <div class="flex justify-between mb-2">
        <span>
         Phí vận chuyển
        </span>
        <span>
         Miễn phí
        </span>
       </div>
       <div class="flex justify-between font-bold text-lg">
        <span>
         Tổng cộng
        </span>
        <span>
        <?= number_format($sumPrice) ?>₫
        </span>
       </div>
      </div>
     </div>
    </div>
   </div>

<?php include_once ROOT_DIR . "./Views/clients/footer.php" ?>