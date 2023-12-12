-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2023 lúc 06:51 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
---- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2023 lúc 02:34 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_binhluan` int(11) NOT NULL,
  `noidung_bl` varchar(255) NOT NULL,
  `ngay_bl` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_binhluan`, `noidung_bl`, `ngay_bl`, `id_user`, `id_sanpham`) VALUES
(1, 'Đồ ăn rất ngon', '13/11/2023', 2, 2),
(13, 'over hợp', '2023-12-04 04:12:26', 3, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(1, 'Thực phẩm chay đông lạnh'),
(2, 'Thực phẩm chay ăn liền'),
(3, 'Thực phẩm chay khô');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `id_donhangct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `id_user`, `id_sanpham`, `ten_sp`, `img`, `gia_sp`, `soluong`, `thanhtien`, `id_donhangct`) VALUES
(42, 3, 11, 'Chà Bông Sợi Chay Loại 500g', '00-27.jpg', 200000, 2, 400000, 121),
(43, 3, 7, 'Rong Biển Lá Kim(16 gói)', '8809060470219-1.jpg', 85000, 1, 85000, 122),
(44, 3, 10, 'Cơm Lứt Cháy (500g)', '00-31.jpg', 35000, 4, 140000, 123),
(45, 3, 10, 'Cơm Lứt Cháy (500g)', '00-31.jpg', 35000, 1, 35000, 124),
(46, 3, 11, 'Chà Bông Sợi Chay Loại 500g', '00-27.jpg', 200000, 1, 200000, 124),
(47, 3, 10, 'Cơm Lứt Cháy (500g)', '00-31.jpg', 35000, 1, 35000, 125),
(48, 3, 7, 'Rong Biển Lá Kim(16 gói)', '8809060470219-1.jpg', 85000, 1, 85000, 126),
(49, 3, 11, 'Chà Bông Sợi Chay Loại 500g', '00-27.jpg', 200000, 2, 400000, 127),
(51, 3, 10, 'Cơm Lứt Cháy (500g)', '00-31.jpg', 35000, 2, 70000, 129),
(55, 5, 11, 'Chà Bông Sợi Chay Loại 500g', '00-27.jpg', 200000, 2, 400000, 133),
(56, 6, 7, 'Rong Biển Lá Kim(16 gói)', '8809060470219-1.jpg', 85000, 2, 170000, 134);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang_chitiet`
--

CREATE TABLE `donhang_chitiet` (
  `id_donhangct` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `phuongthuc_tt` int(11) NOT NULL,
  `madh` varchar(255) NOT NULL,
  `tong_donhang` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `diachi` varchar(150) NOT NULL,
  `ngay_dathang` datetime NOT NULL,
  `trangthai` int(11) NOT NULL COMMENT '0 đơn hàng mới 1 đang xử lý 2 đang giao 3 đã giao'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang_chitiet`
--

INSERT INTO `donhang_chitiet` (`id_donhangct`, `id_user`, `id_sanpham`, `phuongthuc_tt`, `madh`, `tong_donhang`, `hoten`, `email`, `tel`, `diachi`, `ngay_dathang`, `trangthai`) VALUES
(121, 3, 11, 1, 'TA27083', 400000, 'Đặng Xuân Mạnh', 'manhdxph35470@fpt.edu.vn', '855067815', 'Ngách 142, Ngõ 205, Xuân Đỉnh , Bắc Từ Liêm, Hà Nội', '2023-11-30 08:11:50', 0),
(122, 3, 7, 1, 'TA30775', 85000, 'Đặng Xuân Mạnh', 'manhdxph35470@fpt.edu.vn', '855067815', 'Ngách 142, Ngõ 205, Xuân Đỉnh , Bắc Từ Liêm, Hà Nội', '2023-11-30 08:11:54', 0),
(123, 3, 10, 1, 'TA85118', 140000, 'Đặng Xuân Mạnh', 'manhdxph35470@fpt.edu.vn', '855067815', 'Ngách 142, Ngõ 205, Xuân Đỉnh , Bắc Từ Liêm, Hà Nội', '2023-12-01 10:12:03', 3),
(124, 3, 11, 1, 'TA92436', 235000, 'Đặng Xuân Mạnh', 'manhdxph35470@fpt.edu.vn', '855067815', 'Ngách 142, Ngõ 205, Xuân Đỉnh , Bắc Từ Liêm, Hà Nội', '2023-12-02 03:12:03', 3),
(125, 3, 10, 1, 'TA73602', 35000, 'Đặng Xuân Mạnh', 'manhdxph35470@fpt.edu.vn', '855067815', 'Ngách 142, Ngõ 205, Xuân Đỉnh , Bắc Từ Liêm, Hà Nội', '2023-12-02 04:12:41', 3),
(126, 3, 7, 1, 'TA53999', 85000, 'Đặng Xuân Mạnh', 'manhdxph35470@fpt.edu.vn', '855067815', 'Ngách 142, Ngõ 205, Xuân Đỉnh , Bắc Từ Liêm, Hà Nội', '2023-12-02 04:12:39', 4),
(127, 3, 11, 1, 'TA22184', 400000, 'Đặng Xuân Mạnh', 'manhdxph35470@fpt.edu.vn', '855067815', 'Ngách 142, Ngõ 205, Xuân Đỉnh , Bắc Từ Liêm, Hà Nội', '2023-12-04 05:12:33', 0),
(129, 3, 10, 1, 'TA17383', 70000, 'Đặng Xuân Mạnh', 'manhdxph35470@fpt.edu.vn', '855067815', 'Ngách 142, Ngõ 205, Xuân Đỉnh , Bắc Từ Liêm, Hà Nội', '2023-12-04 05:12:08', 0),
(133, 5, 11, 1, 'TA64716', 400000, 'Đặng Xuân Mạnh', 'manh@gmail.com', '366666666', '0', '2023-12-12 08:12:43', 0),
(134, 6, 7, 1, 'TA87598', 170000, 'Thu Trang', 'manh@gmail.com', '855506789', 'hà nội', '2023-12-12 08:12:14', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `giacu` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `ngay_nhap` varchar(30) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `mo_ta` text NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `ten_sp`, `gia_sp`, `giacu`, `img`, `ngay_nhap`, `luotxem`, `mo_ta`, `id_danhmuc`) VALUES
(1, 'Xúc Xích Chay,200g', 59000, 89000, '00-35-300x300.jpg', '2023-10-11', 20, 'Thực phẩm đảm bảo chất lượng', 3),
(3, 'Chả Thịt Nướng Chay,500g', 110000, 0, 'CNMM500-0.jpg', '2023-10-13', 10, 'Thành phần: Đạm thực vật, gia vị chay, dầu ăn, muối, đường, tiêu, bột nêm…', 1),
(4, 'Viên Chanh Xù Chay,200g', 45000, 0, '8936072930261-0.jpg', '2023-11-10', 0, 'Thành phần: Đỗ tương, protein từ đậu nành, bột chiên giòn, bột chiên xù, lá chanh, hạt nêm chay, muối ăn,…', 3),
(5, 'Chả Giò Da Rế Chay,500g', 50000, 75000, '00-34.jpg', '2023-09-11', 30, '', 1),
(7, 'Rong Biển Lá Kim(16 gói)', 85000, 105000, '8809060470219-1.jpg', '2023-11-16', 0, 'Rong Biển Lá Dầu Ô Liu Ăn Liền, Cuộn Cơm (Lốc 16 gói)', 2),
(10, 'Cơm Lứt Cháy (500g)', 35000, 0, '00-31.jpg', '2023-11-19', 0, '', 2),
(11, 'Chà Bông Sợi Chay Loại 500g', 200000, 0, '00-27.jpg', '2023-11-19', 0, 'Chà Bông Sợi Chay Loại 500g\r\n\r\n[sản phẩm] được mô tả kỹ ở dưới. HTMANH luôn sẵn sàng tư vấn khi quý khách cần.', 2),
(12, 'Chà Là Quả Rời Loại (500g)', 45000, 0, '00-52-scaled.jpg', '2023-11-19', 0, 'Chà Là Quả Rời Loại Hộp (500g)\r\n\r\nMời quý khách tiếp tục theo dõi các hình ảnh đầy đủ của [sản phẩm]. Các thông tin sẽ được phân tích kỹ hơn. Cần thêm thông tin, quý khách vui lòng liên hệ nhân viên tư vấn.', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_user` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `hoten` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `diachi` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_user`, `user`, `pass`, `hoten`, `email`, `tel`, `role`, `diachi`) VALUES
(2, 'manhhung1234', 'manh1234', 'ĐặngXuânHùng', 'dangxuanmanh707@gmail.com', '0355126328', 0, 'Thôn 1 Do Đạo,Nhân Thịnh,Lý Nhân,Hà Nam'),
(3, 'admin', '123', 'ĐặngXuânMạnh', 'manhdxph35470@fpt.edu.vn', '855067815', 1, 'Ngách142,Ngõ205,PhườngXuânĐỉnh,BắcTừLiêm,HàNội');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_binhluan`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Chỉ mục cho bảng `donhang_chitiet`
--
ALTER TABLE `donhang_chitiet`
  ADD PRIMARY KEY (`id_donhangct`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `donhang_chitiet`
--
ALTER TABLE `donhang_chitiet`
  MODIFY `id_donhangct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_binhluan` int(11) NOT NULL,
  `noidung_bl` varchar(255) NOT NULL,
  `ngay_bl` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_binhluan`, `noidung_bl`, `ngay_bl`, `id_user`, `id_sanpham`) VALUES
(1, 'Đồ ăn rất ngon', '13/11/2023', 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(1, 'Thực phẩm chay đông lạnh'),
(2, 'Thực phẩm chay ăn liền'),
(3, 'Thực phẩm chay khô');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `id_donhangct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `id_user`, `id_sanpham`, `ten_sp`, `img`, `gia_sp`, `soluong`, `thanhtien`, `id_donhangct`) VALUES
(42, 3, 11, 'Chà Bông Sợi Chay Loại 500g', '00-27.jpg', 200000, 2, 400000, 121),
(43, 3, 7, 'Rong Biển Lá Kim(16 gói)', '8809060470219-1.jpg', 85000, 1, 85000, 122);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang_chitiet`
--

CREATE TABLE `donhang_chitiet` (
  `id_donhangct` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `phuongthuc_tt` int(11) NOT NULL,
  `madh` varchar(255) NOT NULL,
  `tong_donhang` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `diachi` varchar(150) NOT NULL,
  `ngay_dathang` datetime NOT NULL,
  `trangthai` int(11) NOT NULL COMMENT '0 đơn hàng mới 1 đang xử lý 2 đang giao 3 đã giao'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang_chitiet`
--

INSERT INTO `donhang_chitiet` (`id_donhangct`, `id_user`, `id_sanpham`, `phuongthuc_tt`, `madh`, `tong_donhang`, `hoten`, `email`, `tel`, `diachi`, `ngay_dathang`, `trangthai`) VALUES
(121, 3, 11, 1, 'TA27083', 400000, 'Đặng Xuân Mạnh', 'manhdxph35470@fpt.edu.vn', '855067815', 'Ngách 142, Ngõ 205, Xuân Đỉnh , Bắc Từ Liêm, Hà Nội', '2023-11-30 08:11:50', 0),
(122, 3, 7, 1, 'TA30775', 85000, 'Đặng Xuân Mạnh', 'manhdxph35470@fpt.edu.vn', '855067815', 'Ngách 142, Ngõ 205, Xuân Đỉnh , Bắc Từ Liêm, Hà Nội', '2023-11-30 08:11:54', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `giacu` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `ngay_nhap` varchar(30) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `mo_ta` text NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `ten_sp`, `gia_sp`, `giacu`, `img`, `ngay_nhap`, `luotxem`, `mo_ta`, `id_danhmuc`) VALUES
(1, 'Xúc Xích Chay,200g', 59000, 89000, '00-35-300x300.jpg', '2023-10-11', 20, 'Thực phẩm đảm bảo chất lượng', 3),
(3, 'Chả Thịt Nướng Chay,500g', 110000, 0, 'CNMM500-0.jpg', '2023-10-13', 10, 'Thành phần: Đạm thực vật, gia vị chay, dầu ăn, muối, đường, tiêu, bột nêm…', 1),
(4, 'Viên Chanh Xù Chay,200g', 45000, 0, '8936072930261-0.jpg', '2023-11-10', 0, 'Thành phần: Đỗ tương, protein từ đậu nành, bột chiên giòn, bột chiên xù, lá chanh, hạt nêm chay, muối ăn,…', 3),
(5, 'Chả Giò Da Rế Chay,500g', 50000, 75000, '00-34.jpg', '2023-09-11', 30, '', 1),
(7, 'Rong Biển Lá Kim(16 gói)', 85000, 105000, '8809060470219-1.jpg', '2023-11-16', 0, 'Rong Biển Lá Dầu Ô Liu Ăn Liền, Cuộn Cơm (Lốc 16 gói)', 2),
(10, 'Cơm Lứt Cháy (500g)', 35000, 0, '00-31.jpg', '2023-11-19', 0, '', 2),
(11, 'Chà Bông Sợi Chay Loại 500g', 200000, 0, '00-27.jpg', '2023-11-19', 0, 'Chà Bông Sợi Chay Loại 500g\r\n\r\n[sản phẩm] được mô tả kỹ ở dưới. HTMANH luôn sẵn sàng tư vấn khi quý khách cần.', 2),
(12, 'Chà Là Quả Rời Loại (500g)', 45000, 0, '00-52-scaled.jpg', '2023-11-19', 0, 'Chà Là Quả Rời Loại Hộp (500g)\r\n\r\nMời quý khách tiếp tục theo dõi các hình ảnh đầy đủ của [sản phẩm]. Các thông tin sẽ được phân tích kỹ hơn. Cần thêm thông tin, quý khách vui lòng liên hệ nhân viên tư vấn.', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_user` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `hoten` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `diachi` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_user`, `user`, `pass`, `hoten`, `email`, `tel`, `role`, `diachi`) VALUES
(2, 'manhhung1234', 'manh1234', 'Đặng Xuân Hùng', 'dangxuanmanh707@gmail.com', '0355126328', 0, 'Thôn 1 Do Đạo,Nhân Thịnh,Lý Nhân,Hà Nam'),
(3, 'manhdx123', 'manhdxph35470', 'Đặng Xuân Mạnh', 'manhdxph35470@fpt.edu.vn', '0855067815', 1, 'Ngách 142, Ngõ 205, Xuân Đỉnh , Bắc Từ Liêm, Hà Nội'),
(4, 'admin', '123', NULL, '123@gmail.com', '1232131231', 1, '0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_binhluan`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Chỉ mục cho bảng `donhang_chitiet`
--
ALTER TABLE `donhang_chitiet`
  ADD PRIMARY KEY (`id_donhangct`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `donhang_chitiet`
--
ALTER TABLE `donhang_chitiet`
  MODIFY `id_donhangct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
