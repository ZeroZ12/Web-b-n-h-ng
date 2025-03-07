-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2025 at 02:51 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d-n-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `cate_name` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `soft_delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `type`, `soft_delete`) VALUES
(1, 'Laptop Gaming G', 1, 0),
(2, 'PCs', 0, 0),
(3, 'Laptop Văn Phòng ', 1, 0),
(4, 'Laptop Văn ', 1, 1),
(5, 'Main', 0, 1),
(6, 'gdfgdfgdf', 0, 1),
(7, 'Ram', 0, 1),
(8, 'CPU', 0, 1),
(10, 'Ổ cứng', 0, 1),
(11, 'Màn hình', 0, 1),
(12, 'Bàn phím', 0, 1),
(13, 'Linh kiện PC', 0, 0),
(14, 'Ram', 0, 0),
(15, 'Main', 0, 0),
(16, 'Ổ cứng', 0, 0),
(17, 'Màn hình', 0, 1),
(18, 'Card ', 0, 0),
(19, 'CPU', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `content` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `content`, `created_at`, `active`) VALUES
(1, 3, 7, 'Sản phẩm hay', '2025-02-28 09:31:10', 1),
(2, 3, 7, 'Sản phẩm hay', '2025-02-28 09:32:11', 1),
(3, 3, 8, 'Sản phẩm rất tốt', '2025-03-01 01:33:15', 1),
(4, 3, 11, 'Máy chạy êm', '2025-03-01 02:29:02', 1),
(5, 3, 6, 'Máy bên mình có chạy được mạnh ko bạn ???', '2025-03-01 02:30:10', 1),
(6, 3, 18, 'Bọ main này hỗ trợ những gì\r\n', '2025-03-01 02:31:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `status` varchar(100) NOT NULL,
  `payment_method` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `total_price` decimal(15,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `payment_method`, `total_price`, `created_at`) VALUES
(21, 7, '2', 'COD', '420170000.00', '2025-03-01 15:29:56'),
(22, 7, '3', 'COD', '53970000.00', '2025-03-01 15:36:06'),
(23, 7, '1', 'COD', '11990000.00', '2025-03-02 04:49:30'),
(24, 7, '4', 'COD', '68316000.00', '2025-03-03 08:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `price` bigint NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `price`, `quantity`) VALUES
(1, 2, 7, 18190000, 1),
(2, 3, 7, 18190000, 1),
(3, 4, 7, 18190000, 1),
(4, 5, 7, 18190000, 1),
(5, 6, 7, 18190000, 1),
(6, 7, 7, 18190000, 1),
(7, 7, 8, 9990000, 1),
(8, 8, 7, 18190000, 1),
(9, 8, 8, 9990000, 1),
(10, 9, 7, 18190000, 1),
(11, 9, 8, 9990000, 1),
(12, 10, 8, 9990000, 4),
(13, 11, 8, 9990000, 4),
(14, 12, 8, 9990000, 4),
(15, 12, 11, 19990000, 1),
(16, 13, 7, 18190000, 1),
(17, 14, 8, 9990000, 1),
(18, 15, 6, 205090000, 2),
(19, 15, 8, 9990000, 1),
(20, 16, 8, 9990000, 1),
(21, 16, 11, 19990000, 3),
(22, 17, 7, 18190000, 2),
(23, 17, 11, 19990000, 1),
(24, 18, 8, 9990000, 1),
(25, 19, 7, 18190000, 1),
(26, 19, 11, 19990000, 2),
(27, 20, 11, 19990000, 1),
(28, 21, 6, 205090000, 2),
(29, 21, 8, 9990000, 1),
(30, 22, 11, 19990000, 1),
(31, 22, 18, 12290000, 1),
(32, 22, 23, 6690000, 1),
(33, 22, 5, 15000000, 1),
(34, 23, 1, 2000000, 1),
(35, 23, 8, 9990000, 1),
(36, 24, 22, 17079000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` bigint NOT NULL,
  `quantity` int NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `category_id` int NOT NULL,
  `content` text,
  `price_sale` double(10,2) DEFAULT NULL,
  `is_sale` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `quantity`, `description`, `status`, `category_id`, `content`, `price_sale`, `is_sale`) VALUES
(1, 'Laptop ASUS ROG Strix G16', 'images/50932_laptop_asus_rog_strix_g16_g614jvr_n4231w___1_.jpg', 2000000, 24, 'Laptop Asus ROG Strix G16 G614JU-N3135W - Màn hình sắc nét ấn tượng \r\nLaptop Asus ROG Strix G16 mang đến một thiết kế cực kỳ ấn tượng, đậm chất Gaming cho các game thủ chính hiệu. Với hiệu năng cực đỉnh cùng cấu hình máy mạnh mẽ, giúp bạn có thể trải nghiệm chơi game ấn tượng. Màn hình laptop Asus Gaming này sắc nét cho từng chi tiết được hiển thị một cách chân thật và sống động.\r\n\r\nHiệu năng ROG Strix G16 mạnh mẽ\r\nLaptop Asus ROG Strix G16 G614JU-N3135W trang bị cho mình một bộ vi xử lý Intel Core i5 thế hệ 13 mới nhất cho phép máy vận hành mượt mà mọi tác vụ. Tốc độ xử lý lên đến 4.6GHz giúp tăng hiệu suất, giảm thời gian xử lý và cho bạn trải nghiệm tuyệt vời ở các tựa game nặng hay trình thiết kế đồ họa nhiều chi tiết.\r\n\r\nHiệu năng Asus ROG Strix G16 G614JU-N3135W\r\n\r\nỔ cứng laptop Rog đến SSD 512GB cung cấp truy xuất dữ liệu với tốc độ nhanh, hỗ trợ rút ngắn thời gian khởi động máy hay truy cập các ứng dụng một cách tối ưu. Bộ nhớ RAM 16GB DDR5 được tích hợp trên laptop Asus ROG Strix G16 G614JU-N3135W cho phép lưu trữ các dữ liệu thoải mái và đủ đầy phục vụ cho mọi hoạt động của bạn.\r\n\r\nLaptop Asus ROG Strix G16 G614JU-N3135W - Màn hình sắc nét ấn tượng \r\n\r\nDòng laptop Asus ROG Strix sở hữu những công nghệ tiên tiến như công nghệ Tri-Fan, công nghệ tối ưu hóa sức mạnh và hiệu suất NVIDIA Geforce RTX, công nghệ khử tiếng ồn AI hai chiều, … Cho phép người dùng trải nghiệm được sức mạnh của laptop Asus ROG Strix G16 G614JU-N3135W.\r\n\r\nHiệu năng Asus ROG Strix G16 G614JU-N3135W\r\n\r\nNgoài ra, người dùng còn có thể thỏa sức đam mê sáng tạo chỉnh sửa hình ảnh, video hay thiết kế đồ họa trên các ứng dụng như Photoshop, Illustrator,… nhờ card đồ họa NVIDIA GeForce RTX 4050 6GB GDDR6. Đây cũng là bộ phận giúp cho những huyển động trên game trở nên mượt mà, uyển chuyển hơn, tạo nên không gian ảo đầy kịch tính. Bên cạnh đó, còn giúp các hoạt động chuyển động trên game trở nên mượt mà, uyển chuyển hơn cho bạn cảm giác đắm chìm vào không gian ảo đầy kịch tính.\r\n\r\nKhông gian hiển thị nội dung sắc nét, mượt mà\r\nSở hữu màn hình có kích thước 16 inch, độ phân giải Full HD+ (1920 x 1200) laptop Asus ROG Strix G16 G614JU-N3135W mang lại hình ảnh sắc nét, chi tiết, cho trải nghiệm chơi game tuyệt vời. Kết hợp tấm nền IPS hiển thị màu sắc chính xác, cho không gian rộng rãi, bao quát toàn bộ các bối cảnh và nhân vật trong game một cách hoàn hảo.\r\n\r\nMàn hình Asus ROG Strix G16 G614JU-N3135W\r\n\r\nNgoài ra, màn hình còn được trang bị công nghệ G-Sync kết hợp cùng tần số quét lên đến 165Hz cho phản hồi tốc độ nhanh và giúp độ chuyển động trở nên mượt hơn. Nhờ đó mà những trải nghiệm cuộc chiến chơi game đỉnh hơn bao giờ hết, hạn chế đến mức tối đa hiện tượng bị giật lag trong khi chơi.\r\n\r\nBên cạnh chiếc Asus ROG Strix G16 có cấu hình mạnh, bạn có thể khám phá thêm chiếc ASUS ROG Zephyrus G16 được tích hợp bộ vi xử lý vượt trội góp phần đáp ứng tốt các tính năng mạnh một cách mượt mà cho người dùng.\r\n\r\nThiết kế ROG Strix G16 ấn tượng cùng màn hình sắc nét\r\nLaptop Asus ROG Strix G16 G614JU-N3135W sở hữu đến ba quạt giúp cho GPU cũng như VRAM được mát mẻ. Màn hình hiển thị 16 inch Full HD+ vô cùng rộng, giúp cho người dùng có thể sử dụng đa tác vụ, chơi game hay xem phim giải trí được tốt nhất.\r\n\r\nLaptop Asus ROG Strix G16 G614JU-N3135W - Màn hình sắc nét ấn tượng \r\n\r\nLaptop Asus ROG Strix G16 G614JU-N3135W có trọng lượng 2.5kg, so với các dòng laptop gaming khác thì chiếc laptop này sở hữu ngoại hình cũng không quá nặng nề. Bạn vẫn có thể hoàn toàn mang theo bên mình mọi lúc mọi nơi, làm việc và giải trí ở bất kỳ không gian nào.\r\n\r\nThiết kế Asus ROG Strix G16 G614JU-N3135W', 1, 1, NULL, 15000000.00, 1),
(2, 'Laptop GVN Intel i5-12400F', 'images/loq_15irx9_ct1_03_fcc39edb45dd4943bc84ba045194ddbb_grande.webp', 23000000, 9, 'Thông số kỹ thuật Hệ điều hành - Operation System  Windows 11 Home SL bản quyền  Bộ xử lý - CPU  Intel® Core™ Ultra 9 185H (2.50GHz up to 5.10GHz, 24MB Cache)  Bo mạch chủ - Mainboard  --  Màn hình - Monitor  14.5 inch WQXGA (2560 x 1600) 165Hz, 350 nits, 100% sRGB, Acer ComfyView™ LED-backlit TFT LCD Nvidia Advanced Optimus/G-SYNC  Bộ nhớ trong - Ram  32GB LPDDR5X 6400MHz  Ổ cứng - SSD  1TB PCIe NVMe SED SSD  Card đồ hoạ - Video  NVIDIA® GeForce RTX™ 4070 8GB GDDR6  Card Âm thanh - Audio  --  Đọc thẻ - Card reader  1 x MicroSD Card Reader  Webcam  UFC with • Narrow USB FHD camera with blue glass • Compatible with Windows • 1920 x 1080 resolution • 1080p HD video at 60 fps with Temporal Noise Reduction • Dual Mic (33 mm + 33 mm) • 86 x 3.2 x 2.55 mm  Finger Print   --  Giao tiếp mạng - Communications  WLAN  • Killer Wireless Wi-Fi 6E 1675i • 802.11 a/b/g/n/ac/ax wireless LAN • Band: 2.4 GHz, 5 GHz and 6 GHz • 2x2 MU-MIMO technology • Support CNVi interface  Cổng giao tiếp - Port  2 x USB-C (1 USB-C Thunderbolt™ 4; 1 USB-C 3.2 gen 2)  2 x USB-A 3.2 Gen 2 (Power off charging)  1 x HDMI 2.1  1 x Jack 3.5mm  1 x K-lock  1 x DC-in   Bluetooth  Bluetooth 5.3  Pin  4Cell 76Whr  Trọng lượng  1.90 kg  Xuất xứ   Trung Quốc ', 1, 3, NULL, NULL, 0),
(5, 'Laptop Gaming', 'images/ing-gigabyte-aorus-17-bkf-73vn254sh-1_711cbac94722465c9b04d58307370433_f2a71035899b491984de04e63db582ee_grande.webp', 15000000, 7, 'Hay', 1, 1, NULL, NULL, 0),
(6, 'PC GVN x ASUS Blackwell (Intel Core Ultra 9 285K/ VGA RTX 5090) (Powered by ASUS)', 'images/pc_asus_btf_4090__black__-_2_7b9899cf1ee24d3380668d103c9e29da_grande.webp', 205090000, 3, 'Thông số kỹ thuật:  Bo mạch chủ	ASUS ROG MAXIMUS Z890 EXTREME (DDR5)	36 Tháng CPU 	Intel Core Ultra 9 285K / Turbo up to 5.7GHz / 24 Nhân 24 Luồng / 36MB / LGA 1851	36 Tháng RAM 	Corsair Dominator Titanium Black 96GB (2x48GB) RGB 6600 DDR5	36 Tháng VGA 	ASUS ROG Astral GeForce RTX 5090 32GB GDDR7 OC Edition	36 Tháng SSD	Samsung 990 PRO 4TB M.2 PCIe Gen4 NVMe	60 Tháng HDD	Tùy chọn nâng cấp	24 Tháng PSU 	ASUS ROG Thor 1600T GAMING- 80 Plus Titanium - Full Modular (1600W)	120 Tháng CASE	ASUS ROG Hyperion GR701	12 Tháng TẢN NHIỆT	ASUS ROG Ryujin III 360 ARGB Extreme	72 Tháng QUẠT	Tùy chọn nâng cấp', 1, 2, NULL, NULL, 0),
(7, 'PC GVN Intel i5-12400F/ VGA RTX 4060', 'images/pc_gvn_viper_i3060_gen_13_-_3_a7538c02de68412d8a7a4c8626c1b51b_grande.webp', 18190000, 5, 'Thông số kỹ thuật: Mainboard	ASUS PRIME B760M-A WIFI D4 CSM	36 Tháng CPU	Intel Core i5 12400F / 2.5GHz Turbo 4.4GHz / 6 Nhân 12 Luồng / 18MB / LGA 1700	36 Tháng RAM	Có thể tùy chọn Nâng cấp	36 Tháng VGA 	ASUS Dual GeForce RTX 4060 V2 OC Edition 8GB GDDR6	36 Tháng HDD	Có thể tùy chọn Nâng cấp	24 Tháng SSD	WD Black SN770 500G M.2 NVMe PCIe Gen4	60 Tháng PSU	FSP HV PRO 550W - 80 Plus Bronze (550W)	36 Tháng Case	Xigmatek QUANTUM ARCTIC 3F	12 Tháng Tản nhiệt	Cooler Master Hyper 212 Spectrum V3 ARGB	24 Tháng Chi tiết về PC GVN Intel i5-12400F/ VGA RTX 4060 CPU Intel Core i5-12400F CPU Intel Core i5-12400F, nhân tố khuất đảo thị trường PC Gaming khi sở hữu mức giá rẻ cùng hiệu năng xuất sắc. Với 6 nhân 12 luồng, xung nhịp 2.5GHz và turbo boost lên 4.4 GHz, quả là sự lựa chọn tuyệt vời từ khả năng chơi game cho tới stream game của thế hệ vi xử lý Intel Gen 12, chính là sự nâng cấp vượt bậc so với người tiền nhiệm i5-11400F.    Mainboard ASUS PRIME B760M-A WIFI D4 CSM ASUS PRIME B760M-A WIFI D4 CSM là một trong những dòng mainboard được chắt lọc các yếu tố thiết yếu của nền tảng Intel mới nhất và kết hợp chúng để tạo thành một sản phẩm hoàn hảo trong phân khúc tầm trung. Được hoàn thiện với những thành phần tốt nhất, chiếc bo mạch chủ cung cấp đầy đủ những kết nối cơ bản. Cùng với đó là những công nghệ tiên tiến từ tản nhiệt đến khả năng khai thác hiệu năng. Sở hữu chipset B760, ASUS PRIME B760M-A WIFI D4 CSM sẽ mang đến cho bạn những khả năng tương thích đến tuyệt vời trên những linh kiện máy tính tiên tiến.    Và cốt lõi bên trong của chiếc mainboard chế tạo từ bọc thép sẽ làm giảm thiểu hiện tượng gãy hay cong khe PCI-E khi bạn chọn lắp những VGA lớn, giúp chịu tải trọng tốt hơn cho mainboard. Qua đó giúp tăng cường độ bền của sản phẩm và cung cấp khả năng nâng cấp trong tương lai cho người dùng.  VGA ASUS Dual GeForce RTX 4060 V2 OC Edition 8GB GDDR6 ASUS Dual GeForce RTX 4060 V2 OC Edition 8GB GDDR6 có được vẻ ngoài gaming trước đó. Khoác lên màu đen mạnh mẽ cùng các góc cạnh được hoàn thiện một cách bắt mắt, cái tên từ ASUS sẽ làm nổi bật chiếc case nói riêng và góc gaming nói chung.     GPU RTX 4060 bên trong ASUS Dual GeForce RTX 4060 V2 OC Edition 8GB GDDR6 sẽ khẳng định sức mạnh xử lý đồ họa với GPU được tạo bởi kiến trúc Ada mới nhất cùng những công nghệ xử lý hình ảnh tiên tiến. Kết hợp cùng những đồng bộ hóa tuyệt vời, ASUS Dual GeForce RTX 4060 V2 OC Edition 8GB GDDR6 sẽ đủ sức “cân” những chiếc màn hình gaming với tần số quét lên đến 144Hz.  RAM Kingston Fury Beast 8GB 3600 DDR4 RGB SE RAM Kingston Fury Beast 8GB 3600 DDR4 RGB SE khoác lên mình giáp tản nhiệt nổi bật với màu bạc sang trọng cùng dải đèn LED RGB đầy đủ màu sắc rực rỡ chiếu sáng kết hợp với hiệu ứng rainbow khi build PC. Các vùng đèn sáng trên RAM có thể phát sáng với góc siêu rộng lên đến 120 độ tạo nên trải nghiệm thị giác tuyệt vời, tô điểm thêm cho bữa tiệc ánh sáng cho PC GVN Intel i5-12400F/ VGA RTX 4060.    Được trang bị bảng mạch JEDEC RC 2.0, Kingston Fury Beast 8GB 3600 DDR4 RGB SE đem lại tốc độ đọc, truyền tải nhanh hơn với những bảng mạch thông thường trên những chiếc RAM DDR4 khác. Nhờ vào điều này, việc ép xung trên Kingston Fury Beast 8GB 3600 DDR4 RGB SE sẽ ổn định hơn và yên tâm hơn.  SSD WD Black SN770 500G M.2 NVMe PCIe Gen4 Nhằm tối ưu khả năng lưu và làm việc trên máy tính để bàn PC GVN Intel i5-12400F/ VGA RTX 4060, GEARVN đã trang bị thêm cho bộ PC này bộ nhớ SSD M.2 tốc độ cao với dung lượng 500G M.2 NVMe PCIe Gen4 mang đến tốc độ khởi động máy và ứng dụng chỉ trong vài giây cho trải nghiệm thú vị hơn rất nhiều. Trang bị tốc độ đọc/ghi lên đến 3300/1200 MB/s, WD mang lại khả năng truyền tải dữ liệu nhanh chóng giúp đẩy nhanh hiệu quả công việc. Cùng với đó, SSD WD giúp cho hệ thống khởi động Windows nhanh với chuẩn SSD tiên tiến này.       Nguồn FSP HV PRO 550W - 80 Plus Bronze (550W)  Chứng nhận 80 Plus Bronze đảm bảo hiệu suất hoạt động tốt hơn, ít lãng phí điện năng, tối ưu nhiệt và tiếng ồn của quạt, là tất cả những gì FSP HV PRO 550W - 80 Plus Bronze (550W) sẽ mang lại cho bạn. Đóng vai trò là nguồn năng lượng cho PC GVN Intel i5-12400F/ VGA RTX 4060, Nguồn FSP HV PRO 550W - 80 Plus Bronze (550W) cung cấp giải pháp tốt nhất cho việc xây dựng hệ thống PC. Cáp bện lưới làm giảm sự lộn xộn và cải thiện luồng không khí trong case. Tất cả các tụ điện là tụ điện chất lượng cao, để tạo ra hiệu suất hiệu quả và đảm bảo độ tin cậy lâu hơn. Đường Single rail + 12V cung cấp năng lượng tốt nhất, ổn định và tương thích cho phần cứng.     Quạt vòng bi thủy lực 120mm tối ưu hóa việc giảm tiếng ồn và hiệu suất nhiệt. Tốc độ quạt được điều chỉnh tự động theo hoạt động của nguồn. Quạt thủy lực bên trong cung cấp cho Nguồn FSP HV PRO 550W - 80 Plus Bronze (550W) tuổi thọ dài và ổn định hơn.  Case Xigmatek QUANTUM ARCTIC 3F Case Xigmatek QUANTUM ARCTIC 3F là chiếc case được lựa chọn dành cho GVN Intel i5-12400F/ VGA RTX 4060. Sở hữu kích thước đủ lớn dành cho 6 chiếc fan hay tản nhiệt AIO lên đến 360mm, Case Xigmatek QUANTUM ARCTIC 3F cho bạn thoải mái trang bị hệ thống tản nhiệt dành cho dàn PC của mình.   Không dừng lại ở đó, để tăng thêm khả năng tiện dụng hãng còn tích hợp cổng kết nối trên nóc case thuận tiện cho các nhu cầu kết nối với chuột máy tính, bàn phím và vô số phụ kiện khác hỗ trợ tối đa cho nhu cầu chơi game giải trí và làm việc.', 1, 2, NULL, NULL, 0),
(8, 'PC GVN Intel i3-12100F/ VGA RX 6500XT (Powered by ASUS)', 'images/pc_gvn_rx6600_-_3_762ba90a94904a50809a93355cd819a7_grande.webp', 9990000, 9, 'CẤU HÌNH CHI TIẾT SẢN PHẨM PC GVN Intel i3-12100F/ VGA RX 6500XT  Mainboard	ASUS PRIME H610M-K DDR4	36 Tháng CPU	 Intel Core i3 12100F / 3.3GHz Turbo 4.3GHz / 4 Nhân 8 Luồng / 12MB / LGA 1700 (TRAY)	36 Tháng RAM	Có thể tùy chọn Nâng cấp	36 Tháng VGA - Card đồ họa	ASUS Dual Radeon RX 6500 XT V2 OC Edition 4GB GDDR6	36 Tháng HDD	Có thể tùy chọn Nâng cấp	24 Tháng SSD	PNY CS900 250GB Sata3	36 Tháng PSU	Deepcool PF450D - 80 Plus (450W)	36 Tháng Case 	Xigmatek QUANTUM 3GF	12 Tháng Cooling	Cooler Master Hyper 212 Spectrum V3 ARGB	24 Tháng Chi tiết về PC GVN Intel i3-12100F/ VGA RX 6500XT CPU Intel i3-12100F Được trang bị vi xử lý Intel Core i3 -12100F, chiếc PC i3 này đảm bảo hiệu năng xử lý ổn định cho các tác vụ hàng ngày. Với kiến trúc 4 nhân 8 luồng, con chip này dễ dàng xử lý đa nhiệm, cho phép bạn làm việc, lướt web và giải trí cùng lúc mà không gặp phải tình trạng giật lag. Công nghệ sản xuất tiên tiến giúp tối ưu hóa hiệu suất năng lượng, giảm thiểu tiêu thụ điện năng.  PC GVN Intel i3-12100F/ VGA RX 6500XT  Đồ họa sắc nét với GPU AMD Radeon RX 6500XT  Card đồ họa AMD Radeon RX 6500XT là một lựa chọn hợp lý cho những ai muốn trải nghiệm đồ họa mượt mà ở mức cài đặt trung bình. Với kiến trúc RDNA 2 tiên tiến, card đồ họa này mang đến hiệu suất chơi game ấn tượng, đặc biệt là với các tựa game eSports phổ biến. Bộ nhớ GDDR6 dung lượng lớn đảm bảo việc xử lý hình ảnh diễn ra nhanh chóng và mượt mà.  PC GVN Intel i3-12100F/ VGA RX 6500XT  Bộ nhớ RAM của PC GVN Intel i3-12100F đáp ứng nhu cầu đa nhiệm  Được trang bị 8GB RAM DDR4, chiếc PC này đủ sức để bạn mở nhiều tab trình duyệt, ứng dụng cùng lúc mà không gặp phải tình trạng giật lag. Bạn có thể thoải mái làm việc với các phần mềm văn phòng, chỉnh sửa ảnh cơ bản hoặc thậm chí là stream một số tựa game nhẹ.  Ổ cứng SSD NVMe - Tốc độ và không gian lưu trữ Việc trang bị ổ cứng SSD NVMe giúp cho chiếc PC khởi động nhanh chóng, load ứng dụng và game mượt mà hơn so với ổ cứng HDD truyền thống. Dung lượng ổ cứng SSD thường khá lớn, đủ để bạn lưu trữ hệ điều hành, game, ứng dụng và các tập tin cá nhân.  PC GVN Intel i3-12100F/ VGA RX 6500XT  Mainboard ASUS PRIME H610M-CS D4   Bảng mạch chủ ASUS PRIME H610M-CS D4 là một lựa chọn đáng tin cậy, cung cấp nền tảng vững chắc cho hệ thống. Với thiết kế tối ưu, bảng mạch chủ này đảm bảo sự ổn định và tương thích tốt với các linh kiện khác.  PC GVN Intel i3-12100F/ VGA RX 6500XTNguồn cung cấp năng lượng ổn định Nguồn cung cấp năng lượng đóng vai trò quan trọng trong việc đảm bảo hoạt động ổn định của hệ thống. Chiếc PC này được trang bị nguồn đủ công suất để cung cấp năng lượng cho tất cả các linh kiện, giúp hệ thống hoạt động bền bỉ trong thời gian dài.  Nâng cấp RAM và SSD dễ dàng Việc nâng cấp RAM và ổ cứng SSD cho chiếc PC này khá đơn giản và mang lại hiệu quả rõ rệt. Hầu hết các mainboard đi kèm với CPU Intel i3-12100F đều hỗ trợ RAM DDR4 với tốc độ cao. Bạn có thể dễ dàng thay thế thanh RAM hiện tại hoặc thêm vào một thanh RAM mới để tăng tổng dung lượng.   PC GVN Intel i3-12100F/ VGA RX 6500XT  Ngoài ra, bạn cũng có thể sử dụng thêm một khe SATA để lắp đặt ổ cứng SSD SATA (nếu mainboard hỗ trợ). Việc nâng cấp ổ cứng SSD sẽ giúp máy tính của bạn hoạt động nhanh chóng và mượt mà hơn, đặc biệt là khi khởi động hệ điều hành, mở ứng dụng và chơi game.', 1, 2, NULL, NULL, 0),
(11, 'PCAP MSI GAMING RED DRAGON 2', 'images/46264_75.jpg', 19990000, 6, 'MB : MSI B760M GAMING PLUS WIFI DDR5 CPU : i5 14400F RAM : 16GB (1x16GB) DDR5 VGA : MSI RTX 4060 VENTUS 2X BLACK 8GB OC SSD : 500GB NVME Nguồn : MSI MAG A650BN 650W Case : MSI MAG FORGE 320R AIRFLOW Tản : (option ) TẢN NHIỆT NƯỚC MSI MAG CORELIQUID M240 / M360 chưa kèm ( mua cùng bộ máy ƯU ĐÃI 100.000vnd )', 1, 2, NULL, NULL, 0),
(12, 'VGA Asus ProArt GeForce RTX 4060 Ti OC 16GB GDDR6 (PROART-RTX4060TI-O16G)', 'images/45946_vga_asus_proart_geforce_rtx_4060_ti_oc_16gb_gddr6__5_.jpg', 15499000, 10, 'AI TOPS 353 Dung lượng bộ nhớ: 16GB GDDR6 OC mode : 2685 MHz Default mode : 2655 MHz (Boost) Băng thông: 128-bit Kết nối: 1x HDMI 2.1a, 3x DisplayPort 1.4a Nguồn yêu cầu: 650W', 1, 9, NULL, NULL, 0),
(13, 'Card VGA Asus ProArt GeForce RTX 4060 Ti OC 16GB GDDR6 (PROART-RTX4060TI-O16G)', 'images/45946_vga_asus_proart_geforce_rtx_4060_ti_oc_16gb_gddr6__5_.jpg', 12560000, 4, 'Carb mạnh', 1, 18, NULL, NULL, 0),
(14, 'PC GVN Homework i3 12100', 'images/gvn_homework_i3_gen_12_a76b653a11ba441cb36ee15997e08e9f_4521d8ae44f54b558e59d0c51ebd1ec9_grande.webp', 6990000, 3, 'Bo mạch chủ ASUS PRIME H610M-A WIFI D4 Để tối ưu hóa sức mạnh của GVN Homework I3 Gen 12, ta sẽ bắt đầu với phần bo mạch chủ. Được đặt niềm tin cho khả năng khai thác hiệu năng, ASUS PRIME H610M-A WIFI D4 chính là sự lựa chọn tuyệt vời cho bộ PC của chúng ta. Mang đến thiết kế được cải tiến của dòng mainboard giá rẻ, ASUS PRIME H610M-A WIFI D4 cho chúng ta cái nhìn thân thiện cùng dàn VRM nổi bật. Trang bị chipset H610 mới nhất, ASUS PRIME H610M-A WIFI D4 cho khả năng tận dụng sức mạnh từ những CPU Intel Gen 12 mạnh mẽ.', 1, 2, NULL, NULL, 0),
(15, 'Card màn hình ASUS PRIME GeForce RTX 4070 SUPER 12GB GDDR6X (PRIME-RTX4070S-12G)', 'images/prime-rtx4070s-12g-01_21759d36d2a842ed888b42703e81fc1d_grande.webp', 20790000, 5, 'Hãng sản xuất: ASUS  Mã sản phẩm: PRIME-RTX4070S-12G', 1, 18, NULL, NULL, 0),
(16, 'RAM Corsair Dominator Platinum 64GB (2x32GB) RGB 6000 DDR5 (CMT64GX5M2B6000C40)', 'images/97c65d9af824574927bbb445be30d04_large_ec4257d287054b5f9c937231a5b6d4ce_c7eaa61c0c304d6db887c327cfe49a8d_grande.webp', 7590000, 10, 'Nhà sản xuất: Corsair Mã sản phẩm: CMT64GX5M2B6000C40 Tình trạng: Mới  Bảo hành: 36 tháng Màu sắc: Đen', 1, 14, NULL, NULL, 0),
(18, 'Main AORUS X87', 'images/x870e_aorus_pro_ice-01_68e6e05781dd48d4a03485dd1930d7ad_grande.webp', 12290000, 10, 'Nhà sản xuất : GIGABYTE \r\nNhà sản xuất: Corsair Mã sản phẩm: CMT64GX5M2B6000C40 Tình trạng: Mới  Bảo hành: 36 tháng Màu sắc: Đen', 1, 15, NULL, NULL, 0),
(19, 'Vỏ máy tính ASUS ROG Hyperion GR701 BTF Edition', 'images/h732__1__eff4f6486ed443dfa3b2467cee17279c_grande.webp', 11990000, 8, 'Nhà sản xuất : ASUS', 1, 13, NULL, NULL, 0),
(20, 'Laptop Acer Swift X SFX16 51G 516Q', 'images/ava_022086f749f941aca8157961817bd3ec_grande.webp', 14490000, 2, 'Bên cạnh Acer Aspire 5 dòng laptop văn phòng mỏng nhẹ dành cho các bạn học sinh - sinh viên thì Acer còn mang đến thị trường ở phân khúc cao cấp hơn với mẫu laptop Acer  Swift X dòng laptop mỏng nhẹ là Acer Swift X SFX16 51G 516Q là một chiếc laptop hướng đến người dùng cần hiệu năng mạnh mẽ cho công việc sáng tạo nội dung và chơi game ở mức độ vừa phải.', 1, 3, NULL, NULL, 0),
(21, 'Laptop ASUS Vivobook S 14 S5406SA PP059WS', 'images/_vivobook_s_14_oled_s5406sa-pp059ws-2_88171c4e68824e19a135f4433260280a_6078a21aa06c4cea93e050e73521d407_grande.webp', 34490000, 4, 'Trong thế giới công nghệ ngày càng phát triển, việc sở hữu một chiếc laptop không chỉ mạnh mẽ về hiệu năng mà còn phải thể hiện được phong cách cá nhân là điều vô cùng quan trọng. Laptop ASUS Vivobook S 14 S5406SA PP059WS chính là sự kết hợp hoàn hảo giữa hai yếu tố đó, mang đến trải nghiệm tuyệt vời cho người dùng. Hiện sản phẩm đang được phân phối chính hãng tại GEARVN với mức giá cạnh tranh và nhiều ưu đãi hấp dẫn. ', 1, 3, NULL, NULL, 0),
(22, 'BỘ PC GAMING I5 12400F / RAM 16G / VGA GIGA RTX 3060 12G', 'images/250-26624-khung-pc-1.jpg', 17079000, 4, 'Chỉ với 16 triệu đồng, bạn đã có cơ hội sở hữu một bộ PC Gaming tại Nguyễn Công PC. Đáng kinh ngạc, rằng với mức giá này, bạn đã có thể được cung cấp một CPU Intel Core i5-12400F,16GB RAM (có khả năng mở rộng) và một card đồ họa RTX 3060. Bộ PC này đủ sức mạnh để bạn thực hiện các công việc văn phòng cũng như thưởng thức nhiều tựa game, từ những game eSports dễ chơi cho đến các game AAA đình đám với cài đặt đồ hoạ được tối ưu.', 1, 2, NULL, 15990000.00, 1),
(23, 'Mainboard ASRock Z790 PG Lightning Wifi D5', 'images/250-25551-mb0000557.jpg', 6690000, 20, 'Chipset: Z790\r\nPhase : 16+1+1 Power Phase\r\nBộ nhớ RAM: 4 x DDR5 DIMM Slots; up to 7600+(OC)\r\nBIOS: 128Mb AMI UEFI\r\nWifi: 2.5G LAN, 802.11ax Wi-Fi 6E Module\r\nKích thước: ATX - 12.0-in x 9.6-in, 30.5 cm x 24.4 cm', 1, 15, NULL, 5790000.00, 1),
(24, 'Card Màn Hình GIGABYTE RTX 4070 SUPER EAGLE OC 12G', 'images/250-26254-geforce-rtx----4070-super-eagle-oc-12g-01.png', 22290000, 5, 'Loại sản phẩm: VGA - Card màn hình\r\nModel: GV-N407SEAGLE OC-12GD\r\nNhân đồ họa: GeForce RTX™ 4070 SUPER\r\nGiao thức kết nối: PCI-E 4.0\r\nXung nhịp: 2535 MHz ; Boost: 2475 MHz\r\nNhân CUDA: 7168 Units\r\nTốc độ bộ nhớ: 21 Gbps\r\nBộ nhớ: 12GB GDDR6X\r\nBus bộ nhớ: 192-bit', 1, 18, NULL, 18500000.00, 1),
(25, 'CPU Intel Core i9 13900K (5.80GHz, 24 Nhân 32 Luồng, 36M Cache, Raptor Lake)', 'images/250-23428-i9-13900k.jpg', 16490000, 3, 'Nâng cao năng suất làm việc, chơi Game và tạo nội dung, xử lý các tác vụ công việc nặng với Chip xử lý Intel Core i9 13900K 3GHz 24 Core, với socket LGA 1700. Bộ vi xử lý thế hệ thứ 13 này xây dựng trên kiến trúc Hybrid Core và quy trình Intel 7 bằng cách đặt 24 nhân, nhiều hơn 8 nhân so với thế hệ trước, vào một bộ vi xử lý duy nhất vẫn hỗ trợ socket LGA 1700. Thiết kế để cung cấp hiệu suất tuyệt vời, với Core i9 13900K có 16 nhân Efficient-cores điện áp thấp để xử lý các nhiệm vụ nền cho việc đa nhiệm trong khi 8 nhân Performance-cores 3GHz cung cấp tốc độ cho các ứng dụng và trò chơi đòi hỏi cấu hình cao.', 1, 19, NULL, 8690000.00, 1),
(26, 'RAM ADATA XPG Lancer Kit 32GB (2x16GB) DDR5 RGB 6000MHz', 'images/250-26867-ram-adata-xpg-lancer-32gb-2x16gb-ddr5-6000mhz-1.jpg', 4990000, 6, 'Dung lượng: 2 x 16GB\r\nThế hệ: DDR5\r\nBus: 6000MHz\r\nCas: 40', 1, 14, NULL, 3250000.00, 1),
(27, 'VỎ CASE ANTEC C3 (ATX/MÀU ĐEN)', 'images/250-26839-vo-case-antec-c3-basic-atx-mau-den-1.jpg', 1350000, 5, 'Loại Case : Mid-Tower\r\nMàu sắc : Đen\r\nVật liệu: Thép + Nhựa + Kính\r\nHỗ trợ bo mạch chủ: ATX, Micro-ATX, ITX\r\nMặt bên kính cường lực 4mm', 1, 13, NULL, 950000.00, 1),
(28, 'Nguồn Cooler Master MWE 750 BRONZE V3 230V', 'images/250-27297-nguon-cooler-master-mwe-750-bronze-v3-230v-1.jpg', 1590000, 6, 'Công suất: 750w\r\nChứng nhận: Bronze 80 PLUS\r\nChuẩn nguồn: ATX\r\nKích thước: 140 x 150 x 86 mm\r\nFan 12cm, 1 x ATX 24 Pin, 2 x EPS 8/(4+4) Pin, 6 x SATA, 3 x Peripheral 4 Pin, 4 x PCI-e (6+2) Pin\r\nErP 2014 Lot 3', 1, 13, NULL, NULL, 0),
(29, 'Ổ cứng HDD Seagate Exos Enterprise HDD 20TB 3.5 SATA / ST20000NM007D', 'images/250-22954-----c---ng-hdd-seagate-exos-enterprise-5.jpg', 22250000, 3, 'Dung lượng lưu trữ: 20TB\r\nKích thước: 3.5 inch\r\nTốc độ chuẩn kết nối: 6 Gb/s', 1, 16, NULL, 19950000.00, 1),
(30, 'Ổ cứng SSD Kingston KC3000 512GB NVMe M.2 2280 PCIe Gen 4x4 (Đọc 7000MB/s, Ghi 3900MB/s)-(SKC3000S/512G)', 'images/250-22473-sp181247.jpg', 2000000, 10, 'Ổ cứng tốc độ cao chuẩn NVME PCIe Gen 4\r\nTốc độ đọc: 7000Mb/s\r\nTốc độ ghi: 3900Mb/s\r\nDung lượng: 512GB', 1, 16, NULL, 1650000.00, 1),
(31, 'Màn Hình Đồ Họa ASUS ProArt PA248QV (24.1 inch - WUXGA - IPS - 75Hz - 5ms - VRR - Speaker - CalmanVERIFIED)', 'images/33439_asus_proart_pa248qv_upweb_1.jpg', 6899000, 4, 'Lựa chọn một chiếc màn hình đồ họa rất khó, do các bạn cần phải tìm đến hàng loạt nhu cầu như là: Đồ họa với phần mềm gì? Dùng cho cả học tập và làm việc? Màn hình cong dài hay màn hình phẳng rộng? Hay lựa chọn bổ sung quan trọng về mặt thông số kỹ thuật cũng như một số tiêu chuẩn về tông màu hiển thị hay chứng nhận màu sắc…\r\n\r\nNhưng lựa chọn một chiếc màn hình đồ họa chân thực kèm theo kiểu dáng chuyên dụng đúng nghĩa và độ chính xác màu Delta E<1 còn khó hơn rất nhiều, bởi các bạn sẽ phải nghiên cứu thêm cả chỉ số màu sắc các dải, độ sáng, tỉ lệ, tương phản, góc nhìn kết hợp tính năng bổ trợ phần mềm thiết kế, in ấn màu mực, thước đo căn chỉnh… WOW!', 1, 13, NULL, 4889000.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `password`, `email`, `phone`, `address`, `role`, `created_at`, `updated_at`, `active`) VALUES
(6, 'qưer', '$2y$10$hCT8Pnj0GytR35pkTQL8muR2FMVrH7Px9w95OMefEQPUquv3aYJmK', 'longcfssd1234@gmail.com', '0379454676', 'Hà Nội', 'user', '2025-02-21 09:41:13', '2025-02-21 09:41:13', 1),
(7, 'Long', '$2y$10$GbAnC..2.IOFIW0o4mMDSeNX7rrk4GgI7cuRDo.DthaPP3kfubszy', 'longthph53584@gmail.com', '0379354506', 'Hà Nội Nam Từ Liêm', 'admin', '2025-03-01 14:28:00', '2025-03-01 14:28:00', 1),
(8, 'Hải Long', '$2y$10$3MT0IQzR9KJorDMB7bdHgO0zKCTgW1ZzX1VjYrijvx40teQaS633q', 'longcfmlq1234@gmail.com', '0379354506', 'FPT Polytechnic', 'user', '2025-03-04 00:40:44', '2025-03-04 00:40:44', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
