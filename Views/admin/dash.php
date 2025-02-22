<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>

<div class="flex-1 p-6">
    <div class="flex justify-between items-center mb-6">
     <h1 class="text-2xl font-semibold">
      TỔNG QUAN BÁO CÁO
     </h1>
     <div class="flex items-center">
      <input class="border rounded p-2 mr-4" placeholder="Tìm kiếm..." type="text"/>
      <i class="fas fa-bell text-xl mr-4">
      </i>
      <i class="fas fa-user">
         Hello <?= $_SESSION['user']['fullname'] ?? '' ?>
          <?php if(isset($_SESSION['user'])) : ?>
            <li><a href="<?= ROOT_URL . '?ctl=logout' ?>">Đăng xuất</a></li>
            <?php endif ?>
        </i>
      <!-- <img alt="User profile picture" class="rounded-full" height="40" src="https://placehold.co/40x40" width="40"/> -->
     </div> 
    </div>
    <h1>Chào mừng đến trang ADMIN</h1>
    <!-- <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-6">
     <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">
       Tổng giá trị đơn hàng
      </h2>
      <p class="text-2xl font-bold text-blue-600">
       162,557,248,561 đ
      </p>
     </div>
     <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">
       Lợi nhuận gộp
      </h2>
      <p class="text-2xl font-bold text-blue-600">
       37,519,327,650 đ
      </p>
     </div>
     <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">
       Đơn hàng
      </h2>
      <p class="text-2xl font-bold text-blue-600">
       864
      </p>
     </div>
     <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">
       Giá trị tồn kho
      </h2>
      <p class="text-2xl font-bold text-blue-600">
       235,034,324,600 đ
      </p>
     </div>
    </div>
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 mb-6">
     <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">
       Doanh thu thuần
      </h2>
      <img alt="Graph showing net revenue" height="300" src="https://placehold.co/600x300" width="600"/>
     </div>
     <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">
       Lợi nhuận gộp
      </h2>
      <img alt="Graph showing gross profit" height="300" src="https://placehold.co/600x300" width="600"/>
     </div>
    </div>
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
     <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">
       Top sản phẩm bán chạy
      </h2>
      <ul class="list-disc pl-5">
       <li>
        AirPods (4th gen) 1,000,000 đ
       </li>
       <li>
        iPhone 13 20,000,000 đ
       </li>
       <li>
        Apple MagSafe Charger 1,200,000 đ
       </li>
       <li>
        USB-C to Lightning Cable 1m 500,000 đ
       </li>
       <li>
        iPhone 13 Pro Max Silicone Case 1,500,000 đ
       </li>
      </ul>
     </div>
     <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">
       Giá trị tồn kho theo tháng
      </h2>
      <img alt="Graph showing inventory value by month" height="300" src="https://placehold.co/600x300" width="600"/>
     </div>
    </div> -->
</div>

<?php include_once ROOT_DIR . "Views/admin/footer.php";