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
     <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-6"> 
     <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">
       Tổng giá trị đơn hàng
      </h2>
      <p class="text-2xl font-bold text-blue-600">
       <?= number_format($totalRevenue) ?> đ
      </p>
     </div>
     <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">
       Lợi nhuận gộp
      </h2>
      <p class="text-2xl font-bold text-blue-600">
      <?= number_format($grossProfit) ?> đ
      </p>
     </div>
     <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">
       Đơn hàng
      </h2>
      <p class="text-2xl font-bold text-blue-600">
      <?= number_format($totalOrder) ?>
      </p>
     </div>
     <!-- <canvas id="revenue" class="mt-6"></canvas> -->
    </div>
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 mb-6">
     <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">
       Tổng Doanh Thu
      </h2>
      <canvas id="revenue" class="mt-6"></canvas>     
     </div>
     <!-- <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">
       Lợi nhuận gộp
      </h2>
      <img alt="Graph showing gross profit" height="300" src="https://placehold.co/600x300" width="600"/>
     </div> -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const cta = document.getElementById('revenue').getContext('2d');
  new Chart(cta, {
    type: 'bar',
    data: {
      labels: ['Tổng doanh thu', 'Lợi nhuận gộp', 'Tổng đơn hàng'],
      datasets: [{
        label: 'Thống kê doanh thu',
        data: [<?php echo $totalRevenue; ?>, <?php echo $grossProfit; ?>, <?php echo $totalOrder; ?>],
        backgroundColor: ['blue', 'green', 'red'],
      }]
    }
  });
</script>

<?php include_once ROOT_DIR . "Views/admin/footer.php";