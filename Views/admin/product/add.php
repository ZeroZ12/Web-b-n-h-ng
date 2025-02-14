<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>

<div class="flex-1 p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
     <input class="w-1/2 p-2 border rounded" placeholder="Tìm kiếm tại đây" type="text"/>
     <div class="flex items-center space-x-4">
      <i class="fas fa-bell text-xl">
      </i>
      <div class="flex items-center space-x-2">
       <img alt="User avatar" class="rounded-full" height="40" src="https://storage.googleapis.com/a1aa/image/8qiBRXxmuCF2eQ1Rj2ZY0Io6o8BpZHPfqGdCfTFiQIU.jpg" width="40"/>
       <span>
        Username
       </span>
      </div>
     </div>
    </div>
    <!-- Form -->
    <div class="bg-white p-6 rounded shadow">
     <h2 class="text-xl font-bold mb-4">
      THÊM MỚI SẢN PHẨM
     </h2>
     <div class="grid grid-cols-3 gap-6">
      <!-- Left Column -->
      <div class="col-span-2">
       <!-- Thông Tin Sản Phẩm -->
       <div class="mb-6">
        <h3 class="font-bold mb-2">
         Thông Tin Sản Phẩm
        </h3>
        <textarea class="w-full p-2 border rounded" rows="5"></textarea>
       </div>
       <!-- Thư Viện Sản Phẩm -->
       <div class="mb-6">
        <h3 class="font-bold mb-2">
         Thư Viện Sản Phẩm
        </h3>
        <button class="p-2 border rounded">
         Tải tập
        </button>
       </div>
       <!-- Dữ Liệu Sản Phẩm -->
       <div class="mb-6">
        <h3 class="font-bold mb-2">
         Dữ Liệu Sản Phẩm
        </h3>
        <div class="grid grid-cols-2 gap-4">
         <div>
          <label class="block mb-1">
           Loại sản phẩm
          </label>
          <input class="w-full p-2 border rounded" type="text"/>
         </div>
         <div>
          <label class="block mb-1">
           SKU
          </label>
          <input class="w-full p-2 border rounded" type="text"/>
         </div>
        </div>
        <div class="mt-4">
         <label class="block mb-1">
          Sản phẩm có thể bán
         </label>
         <div class="flex space-x-4">
          <label>
           <input class="mr-2" name="sellable" type="radio"/>
           Chung
          </label>
          <label>
           <input class="mr-2" name="sellable" type="radio"/>
           Các sản phẩm được kê khai
          </label>
          <label>
           <input class="mr-2" name="sellable" type="radio"/>
           Các thuộc tính
          </label>
          <label>
           <input class="mr-2" name="sellable" type="radio"/>
           Các biến thể
          </label>
         </div>
        </div>
        <div class="grid grid-cols-3 gap-4 mt-4">
         <div>
          <label class="block mb-1">
           Giá bán lẻ
          </label>
          <input class="w-full p-2 border rounded" type="text"/>
         </div>
         <div>
          <label class="block mb-1">
           Giá bán buôn
          </label>
          <input class="w-full p-2 border rounded" type="text"/>
         </div>
         <div>
          <label class="block mb-1">
           Giá bán sỉ
          </label>
          <input class="w-full p-2 border rounded" type="text"/>
         </div>
        </div>
       </div>
       <!-- Mô Tả Ngắn -->
       <div class="mb-6">
        <h3 class="font-bold mb-2">
         Mô Tả Ngắn
        </h3>
        <textarea class="w-full p-2 border rounded" rows="3"></textarea>
       </div>
       <!-- Từ Khóa SEO -->
       <div>
        <h3 class="font-bold mb-2">
         Từ Khóa SEO
        </h3>
        <div class="grid grid-cols-2 gap-4">
         <div>
          <label class="block mb-1">
           Tiêu đề trang
          </label>
          <input class="w-full p-2 border rounded" type="text"/>
         </div>
         <div>
          <label class="block mb-1">
           Từ khóa
          </label>
          <input class="w-full p-2 border rounded" type="text"/>
         </div>
        </div>
        <div class="mt-4">
         <label class="block mb-1">
          Đường dẫn
         </label>
         <input class="w-full p-2 border rounded" type="text"/>
        </div>
       </div>
      </div>
      <!-- Right Column -->
      <div>
       <!-- Ảnh Sản Phẩm -->
       <div class="mb-6">
        <h3 class="font-bold mb-2">
         Ảnh Sản Phẩm
        </h3>
        <div class="border-dashed border-2 border-gray-300 p-4 text-center">
         <i class="fas fa-plus text-2xl">
         </i>
         <p>
          Tải tập
         </p>
        </div>
       </div>
       <!-- Thương Hiệu -->
       <div class="mb-6">
        <h3 class="font-bold mb-2">
         Thương Hiệu
        </h3>
        <select class="w-full p-2 border rounded">
         <option>
          Chọn thương hiệu sản phẩm
         </option>
        </select>
       </div>
       <!-- Nhóm Sản Phẩm -->
       <div>
        <h3 class="font-bold mb-2">
         Nhóm Sản Phẩm
        </h3>
        <select class="w-full p-2 border rounded">
         <option>
          Chọn nhóm sản phẩm
         </option>
        </select>
       </div>
      </div>
     </div>
     <div class="flex justify-end mt-6">
      <button class="bg-blue-500 text-white px-4 py-2 rounded">
       Lưu thông tin
      </button>
     </div>
    </div>
   </div>

<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>
