<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>
    HDTL
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <style>
    #logo {
      width: 120px;
      height: 100px;
      margin-left: 100px;
    }

    .navbar {
      height: 75px;
    }
  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
  <!-- Header -->
  <header class="bg-red-600 text-white text-center py-2">
    <div class="container mx-auto flex justify-between items-center py-2 navbar">
      <a href="<?= ROOT_URL ?>" >
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
          <div class="flex items-center space-x-2">
            <i class="fas fa-camera">
            </i>
            <span>
              Tra cứu đơn hàng
            </span>
          </div>
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
        <input class="px-4 py-2 rounded-md" placeholder="Bạn cần tìm gì?" type="text" />
        <i class="fas fa-search">
        </i>
        <i class="fas fa-shopping-cart">
        </i>
        <i class="fas fa-user">
          
        </i>
      </div>
    </div>
  </header>
  <!-- Main Content -->
  <main class="container mx-auto mt-4">
    <div class="grid grid-cols-12 gap-4">
      <!-- Sidebar -->
      