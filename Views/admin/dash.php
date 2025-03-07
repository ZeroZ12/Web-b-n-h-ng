<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>

<div class="flex-1 p-6">
    <div class="flex justify-between items-center mb-6">
     <h1 class="text-2xl font-semibold">
      WELLCOME ADMIN
     </h1>
     <div class="flex items-center">
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
</div>

<?php include_once ROOT_DIR . "Views/admin/footer.php";