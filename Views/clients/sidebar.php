<aside class="col-span-2 bg-white p-4">
  <ul class="space-y-2">
    <!-- Danh sách categories -->
    <?php foreach ($categories as $cate) : ?>
    <li class="px-2">
      <a href="<?= ROOT_URL . '?ctl=category&id=' . $cate['id'] ?>" class="flex items-center space-x-2 p-2 rounded hover:bg-gray-100 transition <?= ($currentCategory == $cate['id']) ? 'bg-blue-50 text-blue-600' : '' ?>">
        <?= $cate['cate_name'] ?>
      </a>
    </li>
    <?php endforeach ?>
    
    <!-- Mục Dịch vụ -->
    <li class="px-2">
      <a href="#" class="flex items-center space-x-2">
        <i class="fas fa-tools"></i>
        <span>Dịch vụ và thông tin khác</span>
      </a>
    </li>
  </ul>
</aside>
