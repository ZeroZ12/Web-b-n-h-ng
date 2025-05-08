<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>
    HDTL
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link rel="stylesheet" href="fond/css.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  
</head>

<body class="bg-gray-100">
  <!-- Header -->
  <header class="bg-red-600 text-white text-center py-2">
    <div class="container mx-auto flex justify-between items-center py-2 navbar">
      <a href="<?= ROOT_URL ?>">
        <img id="logo" alt="HDTL" class="" src="fond/user/image/logo.png" />
      </a>

      <div class="flex items-center space-x-4" id="header">

        <nav class="hidden md:flex space-x-4">

          <div class="flex items-center space-x-2">
            <i class="fas fa-truck">
            </i>
            <span>
              Dịch vụ kỹ thuật tại nhà
            </span>
          </div>
          <div class="flex items-center space-x-2">
            <i class="fas fa-exchange-alt">
            </i>
            <span>
              Thu cũ đổi mới
            </span>
          </div>
          <a href="<?= isset($_SESSION['user']) ? ROOT_URL . '?ctl=list-order' : ROOT_URL . '?ctl=login&redirect=list-order' ?>">
            <div class="flex items-center space-x-2">
              <i class="fas fa-camera"></i>
              <span>Tra cứu đơn hàng</span>
            </div>
          </a>

          <div class="flex items-center space-x-2">
            <i class="fas fa-shield-alt">
            </i>
            <span>
              Tra cứu bảo hành
            </span>
          </div>
        </nav>
      </div>
      <div class="flex items-center space-x-4">
        <form class="search-form">
          <input class="input" style="color: black; background-color: white;" class="px-4 py-2 rounded-md" placeholder="Bạn cần tìm gì?" type="search" aria-label="Search" id="keyword" />
          <button type="button" id="btnSearch" class="fas fa-search"></button>
        </form>
        <a href="<?= ROOT_URL . '?ctl=view-cart' ?>">
          <i class="fas fa-shopping-cart">
            <?= $_SESSION['totalQuantity'] ?? '0' ?>
          </i>
        </a>

        <i class="fas fa-user">
          <?= $_SESSION['user']['fullname'] ?? '' ?>
          <ul class="dropdown-menu absolute hidden bg-white shadow-lg p-2 rounded mt-2">
            <?php if (isset($_SESSION['user'])) : ?>
              <li>
                <a href="<?= ROOT_URL . '?ctl=logout' ?>" class="block px-4 py-2 text-red-500 hover:bg-gray-200">Đăng xuất</a>
              </li>
              <li>
                <a href="<?= ROOT_URL . '?ctl=detail-user' ?>" class="block px-4 py-2 text-red-500 hover:bg-gray-200">TK</a>
              </li>
            <?php else : ?>
              <li>
                <a href="<?= ROOT_URL . '?ctl=login' ?>" class="block px-4 py-2 text-red-500 hover:bg-gray-200">Đăng nhập</a>
              </li>
            <?php endif ?>
          </ul>
        </i>
      </div>
    </div>
  </header>