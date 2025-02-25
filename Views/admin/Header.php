
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-red-600 text-white w-64 p-4">
            <div class="flex items-center mb-6">
                <div class="bg-white rounded-full p-2">
                    <img alt="Logo" class="w-8 h-8" height="40" src="https://d3la0uqcqx40x5.cloudfront.net/wp-content/uploads/2022/03/Gundam-game-quiz-page-will-recommend-titles-like-Extreme-Vs-Maxiboost-ON.jpg" width="40" />
                </div>
                <span class="ml-2 text-xl font-bold">
                    TRANG QUẢN TRỊ
                </span>
            </div>
            <nav>
                <ul>
                    <li class="mb-2">
                        <a class="flex items-center p-2 hover:bg-blue-700 rounded nav-link active" href="<?= ADMIN_URL ?>" aria-current="page">
                            <i class="fas fa-home mr-2">
                                Tổng quan
                            </i>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="#">
                            <i class="fas fa-chart-bar mr-2">
                                Thống Kê
                            </i>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="<?= ADMIN_URL . '?ctl=listorder' ?>">
                            <i class="fas fa-shopping-cart mr-2">
                                Đơn Hàng
                            </i>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="<?= ADMIN_URL . '?ctl=listuser' ?>">
                            <i class="fas fa-users mr-2">
                                Thành Viên
                            </i>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="#">
                            <i class="fas fa-box mr-2">
                                SẢN PHẨM
                            </i>
                        </a>
                        <ul class="ml-4 mt-2">
                            <!-- <li class="mb-2">
                                <a class="flex items-center p-2 hover:bg-blue-700 rounded bg-blue-700" href="#">
                                    <i class="fas fa-list mr-2">
                                        Danh Sách Thuộc Tính
                                    </i>
                                </a>
                            </li> -->
                            <!-- <li class="mb-2">
                                <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="#">
                                    <i class="fas fa-tags mr-2">
                                        Danh Sách Thương Hiệu
                                    </i>
                                </a>
                            </li> -->
                            <li class="mb-2">
                                <a class="flex items-center p-2 hover:bg-blue-700 rounded nav-link" href="<?= ADMIN_URL . '?ctl=listsp' ?>">
                                    <i class="fas fa-box-open mr-2">
                                        Danh Sách Sản Phẩm
                                    </i>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="flex items-center p-2 hover:bg-blue-700 rounded nav-link" href="<?= ADMIN_URL . '?ctl=listdm' ?>">
                                    <i class="fas fa-layer-group mr-2">
                                        Danh Sách Danh Mục
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mb-2">
                        <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="#">
                            <i class="fas fa-newspaper mr-2">
                                Bài Viết
                            </i>

                        </a>
                    </li>
                </ul>
            </nav>
        </div>