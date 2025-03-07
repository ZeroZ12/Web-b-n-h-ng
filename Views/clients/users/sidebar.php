
<div class="w-1/4 bg-white p-4">
    <div class="flex items-center mb-6">
        <img alt="User avatar" class="rounded-full mr-4" src="https://placehold.co/50x50" />
        <div>
            <p class="font-bold">
                <?= $user['fullname'] ?>
            </p>
        </div>
    </div>
        <li class="mb-4">
            <a class="items-center text-gray-700" href="<?= ROOT_URL . '?ctl=detail-user' ?>">
                <i class="fas fa-user mr-2">
                </i>
                Thông tin tài khoản
            </a>
        </li>
        <li class="mb-4">
            <a class="items-center text-gray-700" href="<?= ROOT_URL . '?ctl=list-order' ?>">
                <i class="fas fa-box mr-2">
                </i>
                Quản lý đơn hàng
            </a>
        </li>
        <?php if (!empty($user) && isset($user['role']) && $user['role'] == 'admin') : ?>
        <li class="mb-4">
            <a class="items-center text-gray-700" href="<?= ADMIN_URL ?>">
                <i class="fas fa-eye mr-2">
                </i>
                Admin
            </a>
        </li>
        <?php endif; ?>
        <li>
            <a class="items-center text-gray-700" href="<?= ROOT_URL . '?ctl=logout' ?>">
                <i class="fas fa-sign-out-alt mr-2">
                </i>
                Đăng xuất
            </a>
        </li>
    </ul>
</div>

