-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 30, 2017 lúc 05:03 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doanha`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `maGV` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` tinyint(1) DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hocham` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trinhdo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mabomon` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `makhoa` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manganh` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithaotac` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `maGV`, `hoten`, `ngaysinh`, `gioitinh`, `diachi`, `dienthoai`, `email`, `hocham`, `trinhdo`, `chucvu`, `hinhanh`, `mabomon`, `makhoa`, `manganh`, `matkhau`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`) VALUES
(1, '02001', 'Võ Thị Thanh Mai', '1978-08-08', 1, 'Hưng Yên', '0986254415', 'vttmai1964@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo vụ khoa', 'mai.jpg', '022', '01', '0221', '02001', '02001', 1, '2017-05-25 13:31:46', '2017-05-25 13:30:31'),
(2, '02051', 'Nguyễn Văn Quyết', '1987-02-17', 1, 'Hưng Yên', '0912188636', 'quyetict@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', 'Phó bộ môn', 'quyet1.png', '021', '01', '0231', '4466933169ae6fcf', '02018', 1, '2017-05-25 15:15:16', '2017-05-25 15:15:16'),
(3, '02020', 'Nguyễn Minh Quý', '1970-02-01', 1, 'Hưng Yên', '0912068582', 'quyutehy@gmail.com', 'Phó giáo sư Tiến sĩ', ' Tiến sĩ', 'Trưởng khoa', 'minhquy1.png', '021', '01', '0211', 'e29010e6dd0c3191', '02018', 1, '2017-05-25 15:23:47', '2017-05-25 15:23:47'),
(4, '02069', 'Nguyễn Bá Tường', '1960-02-01', 1, 'Hà Nội', '0903268759', 'batuongnguyen@gmail.com', 'Phó giáo sư Tiến sĩ', ' Nghiên cứu sinh', ' Giáo Viên', 'tuong1.jpg', '021', '01', '0211', '7211cb9d9c470526', '02018', 1, '2017-05-25 17:05:03', '2017-05-25 17:05:03'),
(5, '02015', 'Nguyễn Hữu Đông', '1977-02-01', 1, 'Hưng Yên', '0983539745', 'dongcntt77@gmail.co', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'dong1.jpg', '021', '01', '0211', '9c9d0fa5f4c55c85', '02018', 1, '2017-05-25 17:08:42', '2017-05-25 17:08:42'),
(6, '02007', 'Nguyễn Văn Hậu', '1969-02-06', 1, 'Hưng Yên', '03213713315', 'nvhau@utehy.edu.vn', 'Phó giáo sư Tiến sĩ', ' Tiến sĩ', ' Giáo Viên', 'hau1.png', '021', '01', '0211', 'f738e2697a20aa60', '02018', 1, '2017-05-25 17:10:48', '2017-05-25 17:10:48'),
(7, '02016', 'Ngô Thanh Huyền', '1982-06-14', 1, 'Hưng Yên', '0982713518', 'nthuyen@utehy.edu.vn', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'huyen1.jpg', '021', '01', '0211', 'aa363b6a1da671e1', '02018', 1, '2017-05-25 17:13:00', '2017-05-25 17:13:00'),
(8, '02017', 'Trịnh Thị Nhị', '1970-01-01', 1, 'Hưng Yên', '0987595032', 'nhitt@utehy.edu.vn', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'nhi1.jpg', '021', '01', '0211', '951679cede664266', '02018', 1, '2017-05-25 17:31:34', '2017-05-25 17:31:34'),
(9, '02011', 'Chu Thị Minh Huệ', '1982-05-12', 1, 'Hưng Yên', '0982817392', 'HueCtm@gmail.com', 'Phó giáo sư Tiến sĩ', ' Nghiên cứu sinh', ' Giáo Viên', 'chuhue1.jpg', '021', '01', '0211', '49026e7eafa12c63', '02018', 1, '2017-05-25 17:34:43', '2017-05-25 17:34:43'),
(10, '02010', 'Đào Anh Hiển', '1975-02-11', 1, 'Hưng Yên', '0983264436', 'hienda@utehy.edu.vn', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'hien1.jpg', '021', '01', '0211', '0b87b866fb924f57', '02018', 1, '2017-05-25 17:38:14', '2017-05-25 17:38:14'),
(11, '02039', 'Lê Quang Lợi', '1976-06-22', 1, 'Hưng Yên', '0982332139', 'loilq@utehy.edu.vn', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'loi1.PNG', '021', '01', '0211', 'cac43dddcc236f22', '02018', 1, '2017-05-26 03:16:32', '2017-05-26 03:16:32'),
(12, '02027', 'Nguyễn Hoàng Điệp', '1982-02-16', 1, 'Hưng Yên', '0923848008', 'diep82003@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'diep1.PNG', '021', '01', '0211', 'd20b74d739eb5517', '02018', 1, '2017-05-26 03:21:20', '2017-05-26 03:21:20'),
(13, '02055', 'Đỗ Thị Thu Trang', '1985-02-01', 1, 'Hưng Yên', '01696911336', 'TrangLexus@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'trang1.jpg', '021', '01', '0211', 'fa153f8cb9e628ad', '02018', 1, '2017-05-26 03:23:07', '2017-05-26 03:23:07'),
(14, '02034', 'Hoàng Quốc Việt', '1983-06-13', 1, 'Hưng Yên', '0976124669', 'viethqtk1@gmail.com', 'Phó giáo sư Tiến sĩ', ' Nghiên cứu sinh', ' Giáo Viên', 'viet1.jpg', '021', '01', '0211', '295ac90a0803e54a', '02018', 1, '2017-05-26 03:25:03', '2017-05-26 03:25:03'),
(15, '02033', 'Lê Thị Thu Hương', '1983-03-02', 1, 'Hưng Yên', '0915324041', 'Lehuong7885@gmail.com', 'Phó giáo sư Tiến sĩ', ' Nghiên cứu sinh', ' Giáo Viên', 'huong1.jpg', '021', '01', '0211', 'b4fb5d662c2c9db8', '02018', 1, '2017-05-26 03:27:23', '2017-05-26 03:27:23'),
(16, '02037', 'Nguyễn Thị Hải Năng', '1980-03-02', 1, 'Hưng Yên', '0912384299', 'hainangtk1@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'nang1.jpg', '021', '01', '0211', '4117404f7038edb4', '02018', 1, '2017-05-26 03:30:51', '2017-05-26 03:30:51'),
(17, '02052', 'Nguyễn Minh Tiến', '1985-03-02', 1, 'Hưng Yên', '0983860318', 'minhtienhy@gmail.com', 'Phó giáo sư Tiến sĩ', ' Nghiên cứu sinh', ' Giáo Viên', 'tien1.jpg', '021', '01', '0211', 'bd27934e6ed4d559', '02018', 1, '2017-05-26 03:32:49', '2017-05-26 03:32:49'),
(18, '02058', 'Trần Đỗ Thu Hà', '1985-03-02', 1, 'Hải Dương', '0976289988', 'tdhapi@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'ha1.jpg', '021', '01', '0211', '5481e8ef6ed491e3', '02018', 1, '2017-05-26 03:34:42', '2017-05-26 03:34:42'),
(19, '02002', 'Phạm Ngọc Hưng', '1985-12-15', 1, 'Quảng Ninh', '0982713301', 'PhamNgocHung@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', 'Phó trưởng bộ môn', 'ngochung1.jpg', '022', '01', '0221', '280ae22932ab1c06', '02018', 1, '2017-05-26 03:36:54', '2017-05-26 03:36:54'),
(20, '02072', 'Trịnh Văn Loan', '1977-02-08', 1, 'Hà Nội', '0903277732', 'loantv@it-hut.edu.vn', 'Phó giáo sư Tiến sĩ', ' Nghiên cứu sinh', ' Giáo Viên', 'loan1.jpg', '022', '01', '0221', '632584e61aecfd34', '02018', 1, '2017-05-26 03:39:28', '2017-05-26 03:39:28'),
(21, '02026', 'Nguyễn Vinh Quy', '1978-06-13', 1, 'Hưng Yên', '091220676', 'vinhquynguyen@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'quy1.jpg', '022', '01', '0221', 'dc01b1fe3bd7bb6a', '02018', 1, '2017-05-26 03:41:16', '2017-05-26 03:41:16'),
(22, '02066', 'Hồ Khánh Lâm', '1960-06-08', 1, 'Hà Nội', '0913207555', 'lamhokhanh@gmail.com', 'Phó giáo sư Tiến sĩ', ' Tiến sĩ', ' Giáo Viên', 'lam1.jpg', '022', '01', '0221', '602c70bceb2f1b5b', '02018', 1, '2017-05-26 03:42:41', '2017-05-26 03:42:41'),
(23, '02003', 'Nguyễn Đình Chiến', '1973-01-29', 1, 'Hưng Yên', '086970376396', 'chienql@gmail.com', 'Phó giáo sư Tiến sĩ', ' Nghiên cứu sinh', ' Giáo Viên', 'chien1.jpg', '022', '01', '0221', '9f857b65ca6bd03d', '02018', 1, '2017-05-26 03:44:24', '2017-05-26 03:44:24'),
(24, '02006', 'Chu Bá Thành', '1985-02-12', 1, 'Bắc Giang', '0906099805', 'nhatthanhhy@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'thanh1.jpg', '022', '01', '0221', 'a54d669fae8f84aa', '02018', 1, '2017-05-26 03:46:31', '2017-05-26 03:46:31'),
(25, '02028', 'Trần Thị Phương', '1982-09-22', 1, 'Thanh Hóa', '0975822600', 'phuongutehy2405@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'phuong1.jpg', '022', '01', '0221', 'e29ff05964725d8c', '02018', 1, '2017-05-26 03:48:14', '2017-05-26 03:48:14'),
(26, '02049', 'Vũ Huy Thế', '1984-01-09', 1, 'Bắc Ninh', '0978823873', 'thevh.bn@gmail.com', 'Phó giáo sư Tiến sĩ', ' Nghiên cứu sinh', ' Giáo Viên', 'the1.jpg', '022', '01', '0221', 'da83d12dc21ae9e6', '02018', 1, '2017-05-26 03:50:10', '2017-05-26 03:50:10'),
(27, '02053', 'Lê Trung Hiếu', '1983-06-14', 1, 'Hưng Yên', '0987779776', 'hieult.ktmt@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'hieu1.jpg', '022', '01', '0221', '6d2083346957abf0', '02018', 1, '2017-05-26 03:51:45', '2017-05-26 03:51:45'),
(28, '02061', 'Vũ Thị Giang', '1983-02-08', 1, 'Hưng Yên', '0986765248', 'v.giang.utehy@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'giang1.jpg', '022', '01', '0221', '5424766f1fcd9f6e', '02018', 1, '2017-05-26 03:53:19', '2017-05-26 03:53:19'),
(29, '02023', 'Phạm Minh Chuẩn', '1981-02-17', 1, 'Hưng Yên', '03213713153', 'chuanpm@utehy.edu.vn', 'Phó giáo sư Tiến sĩ', ' Nghiên cứu sinh', ' Trưởng bộ môn', 'chuan1.png', '023', '01', '0231', '2fc3a74308dce96f', '02018', 1, '2017-05-26 03:54:42', '2017-05-26 03:54:42'),
(30, '02019', 'Nguyễn Đình Hân', '1982-02-01', 1, 'Hưng Yên', '0915046320', 'nguyendinhhan@gmail.com', 'Phó giáo sư Tiến sĩ', ' Tiến sĩ', ' Giáo Viên', 'han1.jpg', '023', '01', '0231', 'cf72a4f2454afc19', '02018', 1, '2017-05-26 03:56:17', '2017-05-26 03:56:17'),
(31, '02080', 'Bùi Thế Hồng', '1960-06-14', 1, 'Hà Nội', '0904238643', 'hong@ioit.ac.vn', 'Phó giáo sư Tiến sĩ', ' Nghiên cứu sinh', ' Giáo Viên', 'hong1.png', '023', '01', '0231', '18dfef448c70a4aa', '02018', 1, '2017-05-26 03:58:00', '2017-05-26 03:58:00'),
(32, '02036', 'Đặng Vân Anh', '1982-09-06', 1, 'Hưng Yên', '03213594083', 'vananh@utehy.edu.vn', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'vananh1.png', '023', '01', '0231', 'ddc27a328f1bed77', '02018', 1, '2017-05-26 04:05:01', '2017-05-26 04:05:01'),
(33, '02004', 'Nguyễn Duy Tân', '1985-06-16', 1, 'Hưng Yên', '0987322637', 'duytan@utehy.edu.vn', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'tan1.png', '023', '01', '0231', 'de3f70fa75b05117', '02018', 1, '2017-05-26 04:06:22', '2017-05-26 04:06:22'),
(34, '02012', 'Vũ Khánh Quý', '1985-06-05', 1, 'Hưng Yên', '0945528686', 'quyvk@utehy.edu.vn', 'Phó giáo sư Tiến sĩ', ' Nghiên cứu sinh', ' Giáo Viên', 'khanhquy1.jpg', '025', '01', '0231', 'd2466bdde3e756c4', '02018', 1, '2017-05-26 04:09:09', '2017-05-26 04:09:09'),
(35, '02038', 'Lê Văn Vịnh', '1987-12-13', 1, 'Thái Bình', '0988928728', 'vinhlv@utehy.edu.vn', 'Phó giáo sư Tiến sĩ', ' Nghiên cứu sinh', ' Giáo Viên', 'vinh1.png', '023', '01', '0231', 'ce11095afe081a26', '02018', 1, '2017-05-26 04:10:46', '2017-05-26 04:10:46'),
(36, '02030', 'Phạm Quốc Hùng', '1984-07-06', 1, 'Quảng Ninh', '03213713153', 'quochungvnu@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'hung1.png', '023', '01', '0231', '55f8750e9f7e11bc', '02018', 1, '2017-05-26 04:12:05', '2017-05-26 04:12:05'),
(37, '02031', 'Vũ Xuân Thắng', '1985-12-02', 1, 'Hưng Yên', '03213713153', 'xuanthangtk1@gmail.com', 'Phó giáo sư Tiến sĩ', ' Nghiên cứu sinh', 'Phó trưởng bộ môn', 'thang1.png', '023', '01', '0231', '2bbdcc654fa5af9b', '02018', 1, '2017-05-26 04:13:15', '2017-05-26 04:13:15'),
(38, '02054', 'Vi Hoài Nam', '1986-05-02', 1, 'Phú Thọ', '0944879789', 'vihoainam@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'nam1.png', '023', '01', '0231', '735c09b859540a33', '02018', 1, '2017-05-26 04:24:02', '2017-05-26 04:24:02'),
(39, '02040', 'Nguyễn Thị Thanh Huệ', '1985-03-15', 1, 'Hưng Yên', '03213713153', 'huentt@utehy.edu.vn', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'hue1.png', '023', '01', '0231', 'fd950c4a0577c3f9', '02018', 1, '2017-05-26 04:25:26', '2017-05-26 04:25:26'),
(40, '02070', 'Nguyễn Văn Hạnh', '1985-04-03', 1, 'Hưng Yên', '0987597532', 'hanhtk4@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'hanh1.png', '023', '01', '0231', 'f8b8716a674181ff', '02018', 1, '2017-05-26 04:26:36', '2017-05-26 04:26:36'),
(41, '02084', 'Vũ Đức Thi', '1965-02-01', 1, 'Hà Nội', '03213713153', 'vdthi@ioit.ac.vn', ' Giáo sư', ' Nghiên cứu sinh', ' Giáo Viên', 'thi1.jpg', '021', '01', '0211', '549c15761563967e', '02018', 1, '2017-05-26 06:29:42', '2017-05-26 06:29:42'),
(42, '02063', 'Nguyễn Quang Hoan', '1965-02-01', 1, 'Hà Nội', '0903438226', 'quanghoanptit@yahoo.com.vn', 'Phó giáo sư Tiến sĩ', ' Nghiên cứu sinh', ' Giáo Viên', 'hoan1.jpg', '021', '01', '0211', '7f36a5337639c6a5', '02018', 1, '2017-05-26 06:31:23', '2017-05-26 06:31:23'),
(43, '02043', 'Đào Thị Thu Diệp', '1987-02-01', 1, 'Hưng Yên', '0962028940', 'daothithudiep@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'daodiep1.jpg', '023', '01', '0231', '465a622cacc4273c', '02018', 1, '2017-05-26 06:43:29', '2017-05-26 06:43:29'),
(44, '02056', 'Đỗ Thị Thu', '1985-04-02', 1, 'Hưng Yên', '0962028940', 'dothithu@gmail.com', 'Phó giáo sư Tiến sĩ', ' Thạc sĩ', ' Giáo Viên', 'thu1.jpg', '025', '01', '0251', '7bd7c5452bb0b580', '02018', 1, '2017-05-26 06:44:35', '2017-05-26 06:44:35'),
(45, '02071', 'Nguyễn Gia Ba', '1986-06-05', 1, 'Hưng Yên', '0962028940', 'nguyengiaba@gmail.com', 'THS1', 'TSS', 'GVK', 'ba1.jpg', '071', '1', '0611', '942b7868131a5f80', '02001', 1, '2017-05-26 06:45:32', '2017-05-26 06:45:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bomon`
--

CREATE TABLE `bomon` (
  `id` int(11) NOT NULL,
  `mabomon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenbomon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `viettat` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `makhoa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithaotac` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bomon`
--

INSERT INTO `bomon` (`id`, `mabomon`, `tenbomon`, `viettat`, `makhoa`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`) VALUES
(1, '021', 'Công nghệ phần mềm', 'CNPM', '02', '02001', 1, '2015-12-28 10:00:00', '2016-08-20 10:00:00'),
(2, '022', 'Mạng máy tính và truyền thông', 'MMT&TT', '02', '02001', 1, '2015-12-28 10:00:00', '2016-08-20 10:00:00'),
(3, '023', 'Kỹ thuật máy tính', 'KTMT', '02', '02001', 1, '2015-12-28 10:00:00', '2016-08-20 10:00:00'),
(4, '079', '  BM Cơ bản', 'CB', '03', '02001', 0, '2016-06-03 10:00:00', '2016-08-20 10:00:00'),
(5, '041', 'BM Giáo dục thể chất', 'GDTC', '04', '02001', 0, '2016-06-03 10:00:00', '2016-08-20 10:00:00'),
(6, '051', ' BM Ngoại Ngữ', 'NN', '05', '02001', 0, '2016-06-03 10:00:00', '2016-08-20 10:00:00'),
(7, '074', '  BM Lý luận chính trị', 'LLCT', '03', '02001', 0, '2016-06-03 10:00:00', '2016-08-20 10:00:00'),
(8, '071', '  BM Hóa môi trường và Kinh tế', 'HMT', '07', '02001', 0, '2016-06-03 10:00:00', '2016-08-20 10:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietkehoachtheolop`
--

CREATE TABLE `chitietkehoachtheolop` (
  `id` int(11) NOT NULL,
  `makehoachtheolop` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mamonhoc` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `malop` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hocky` tinyint(5) DEFAULT NULL,
  `namhoc` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithaotac` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitietkehoachtheolop`
--

INSERT INTO `chitietkehoachtheolop` (`id`, `makehoachtheolop`, `mamonhoc`, `malop`, `hocky`, `namhoc`, `nguoithaotac`, `created_at`) VALUES
(4, '12345954', '031106', '101135', 1, '', '02001', '2017-04-20 10:18:09'),
(5, '12345954', '061103', '101135', 2, '', '02001', '2017-04-20 11:10:24'),
(6, '12345954', '022115', '101135', 1, '', '02001', '2017-04-20 11:10:44'),
(7, 'DTDH07', '061103', '101142', 1, '', '02001', '2017-04-20 11:18:51'),
(8, 'DTDH08', '071101', '101132', 1, '', '02001', '2017-04-20 11:19:10'),
(9, 'ÁDFRE3', '021123', '201141', 2, '', '02001', '2017-04-21 21:14:02'),
(10, 'ÁDFRE3', ' 051101', '201141', 2, '', '02001', '2017-04-21 21:55:24'),
(11, 'ÁDFRE3', '021126', '201141', 1, '', '02001', '2017-04-21 22:17:51'),
(12, 'ÁDFRE3', '021106', '201141', 1, '', '02001', '2017-04-21 22:18:05'),
(14, 'ÁDFRE3', '021108', '201141', 3, '2017-2018', '02001', '2017-04-21 22:24:50'),
(15, 'ÁDFRE3', '051102', '201141', 3, '2017-2018', '02001', '2017-05-11 12:39:17'),
(16, 'ÁDFRE3', ' 051101', '201141', 2, '2017-2018', '02001', '2017-05-11 12:39:24'),
(17, 'dfgdfgdfgdfg', '071101', '101134', 1, '2017-2018', '02001', '2017-05-11 12:48:18'),
(18, 'dfgdfgdfgdfg', '061104', '101134', 1, '2017-2018', '02001', '2017-05-11 12:48:26'),
(19, 'dfgdfgdfgdfg', ' 041106', '101134', 1, '2017-2018', '02001', '2017-05-11 12:48:33'),
(20, 'dfgdfgdfgdfg', '061102', '101134', 1, '2017-2018', '02001', '2017-05-11 12:48:50'),
(21, 'dfgdfgdfgdfg', '021107', '101134', 3, '2017-2018', '02001', '2017-05-28 09:51:00'),
(22, '46845', '021107', '101152', 1, '2017-2018', '02001', '2017-05-28 09:59:34'),
(23, '46845', '021125', '101152', 2, '2017-2018', '02001', '2017-05-28 09:59:44'),
(24, '46845', '061103', '101152', 1, '2017-2018', '02001', '2017-05-28 09:59:54'),
(25, '46845', '021113', '101152', 1, '2017-2018', '02001', '2017-05-28 10:03:35'),
(26, '46845', '061104', '101152', 2, '2017-2018', '02001', '2017-05-28 10:07:03'),
(27, '46845', '022119', '101152', 1, '2017-2018', '02001', '2017-05-28 10:09:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphancong`
--

CREATE TABLE `chitietphancong` (
  `id` int(11) NOT NULL,
  `maphancong` int(11) DEFAULT NULL,
  `mamon` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `malop` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hocky` tinyint(3) DEFAULT NULL,
  `namhoc` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `nguoithaotac` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietphancong`
--

INSERT INTO `chitietphancong` (`id`, `maphancong`, `mamon`, `malop`, `hocky`, `namhoc`, `created_at`, `nguoithaotac`) VALUES
(15, 13, '021106', '201141', 1, '2017-2018', '2017-05-11 15:43:48', '02001'),
(16, 13, '021126', '201141', 1, '2017-2018', '2017-05-11 15:43:59', '02001'),
(17, 13, '071101', '101132', 1, '2017-2018', '2017-05-11 15:44:13', '02001'),
(18, 14, '021123', '201141', 2, '2017-2018', '2017-05-11 15:44:36', '02001'),
(19, 14, ' 051101', '201141', 2, '2017-2018', '2017-05-11 15:44:48', '02001'),
(20, 14, '061103', '101135', 2, '2017-2018', '2017-05-11 15:45:19', '02001'),
(21, 15, '021106', '201141', 1, '2016-2017', '2017-05-11 16:00:24', '02001'),
(22, 15, '021126', '201141', 1, '2017-2018', '2017-05-11 16:00:38', '02001'),
(23, 15, '061103', '101142', 1, '2017-2018', '2017-05-11 16:48:27', '02001'),
(24, 17, '021123', '201141', 2, '2017-2018', '2017-05-11 16:48:57', '02001'),
(25, 16, '021106', '201141', 1, '2017-2018', '2017-05-11 16:49:32', '02001'),
(26, 16, '021126', '201141', 1, '2017-2018', '2017-05-11 16:49:38', '02001'),
(27, 17, '061103', '101135', 2, '2017-2018', '2017-05-27 19:38:15', '02001'),
(28, 18, '071101', '101132', 1, '2017-2018', '2017-05-27 20:16:14', '02001'),
(29, 18, '021106', '201141', 1, '2017-2018', '2017-05-27 20:16:19', '02001'),
(30, 18, '021126', '201141', 1, '2017-2018', '2017-05-27 20:16:26', '02001'),
(31, 18, '021107', '101152', 1, '2017-2018', '2017-05-28 10:09:02', '02001'),
(32, 18, '022119', '101152', 1, '2017-2018', '2017-05-28 10:10:02', '02001');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `id` int(11) NOT NULL,
  `machucvu` varchar(50) DEFAULT NULL,
  `tenchucvu` varchar(50) DEFAULT NULL,
  `nguoithaotac` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`id`, `machucvu`, `tenchucvu`, `nguoithaotac`, `created_at`, `updated_at`) VALUES
(1, 'GVQ', 'Giáo viên', '02001', '2017-03-13 01:33:26', '2017-03-13 01:33:26'),
(2, 'TK', ' Trưởng khoa', '02001', '2017-03-13 02:50:28', '2017-03-13 02:50:28'),
(3, 'PTK', ' Phó Trưởng khoa', '02001', '2017-03-13 02:50:48', '2017-03-13 02:50:48'),
(4, 'GVK', ' Giáo vụ Khoa', '02001', '2017-03-13 02:51:21', '2017-03-13 02:51:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyennganh`
--

CREATE TABLE `chuyennganh` (
  `id` int(11) NOT NULL,
  `machuyennganh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenchuyennganh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mabomon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithaotac` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyennganh`
--

INSERT INTO `chuyennganh` (`id`, `machuyennganh`, `tenchuyennganh`, `mabomon`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`) VALUES
(1, '546546', '  fghfghfgh', '071', '02001', 1, '2017-03-09 13:13:58', '2017-03-09 13:13:58'),
(2, '34534', ' dfgdfg', '071', '02001', 1, '2017-03-09 14:16:42', '2017-03-09 14:16:42'),
(3, '0211', 'Công nghệ phần mềm', '021', '02001', 0, '2016-06-06 10:00:00', '2016-08-20 10:00:00'),
(4, '0221', 'Mạng máy tính và truyền thông', '022', '02001', 0, '2016-06-06 10:00:00', '2016-08-20 10:00:00'),
(5, '0212', 'Kỹ thuật máy tính', '023', '02001', 0, '2016-06-06 10:00:00', '2016-08-20 10:00:00'),
(6, '0311', 'CN Cơ bản', '079', '02001', 0, '2016-06-24 10:00:00', '2016-08-20 10:00:00'),
(7, '0411', 'CN Giáo dục Thể chất', '079', '02001', 0, '2016-06-24 10:00:00', '2016-08-20 10:00:00'),
(8, '0511', 'CN Ngoại Ngữ', '051', '02001', 0, '2016-06-24 10:00:00', '2016-08-20 10:00:00'),
(9, '0611', 'CN Lý luận chính trị', '079', '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(10, '0711', 'CN Hóa môi trường và Kinh tế', '071', '02001', 0, '2016-06-24 10:00:00', '2016-08-20 10:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hedaotao`
--

CREATE TABLE `hedaotao` (
  `id` int(11) NOT NULL,
  `mahedaotao` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenhedaotao` varchar(255) DEFAULT NULL,
  `soky` tinyint(10) DEFAULT NULL,
  `hs2` tinyint(5) DEFAULT NULL,
  `nguoithaotac` varchar(6) DEFAULT NULL,
  `hienthi` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hedaotao`
--

INSERT INTO `hedaotao` (`id`, `mahedaotao`, `tenhedaotao`, `soky`, `hs2`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`) VALUES
(1, '1', 'Đại học chính quy', 8, 1, '02001', 1, '2015-12-25 10:00:00', '2015-12-28 10:00:00'),
(2, '2', 'Đai học liên thông', 4, 1, '02001', 0, '2016-05-31 10:00:00', '2016-08-20 10:00:00'),
(3, '5', 'Cao đẳng nghề', 4, 1, '02001', 1, '2015-12-28 10:00:00', '2015-12-28 10:00:00'),
(4, '6', 'Cao đẳng chính quy', 6, 1, '02001', 1, '2015-12-28 10:00:00', '2015-12-28 10:00:00'),
(5, '7', 'Thạc sĩ', 3, 1, '02001', 0, '2016-05-16 10:00:00', '2016-08-20 10:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocham`
--

CREATE TABLE `hocham` (
  `id` int(5) NOT NULL,
  `mahocham` varchar(50) DEFAULT NULL,
  `tenhocham` varchar(100) DEFAULT NULL,
  `nguoithaotac` varchar(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hocham`
--

INSERT INTO `hocham` (`id`, `mahocham`, `tenhocham`, `nguoithaotac`, `created_at`, `updated_at`) VALUES
(1, 'GS1', ' Giáo sư', '02001', '2017-03-12 23:59:10', '2017-03-12 23:59:10'),
(2, 'THS1', 'Thạc sĩ 1', '02001', '2017-03-13 00:03:59', '2017-03-13 00:03:59'),
(3, 'NCS', ' Nghiên cứu sinh', '02001', '2017-03-13 02:53:27', '2017-03-13 02:53:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kehoachchung`
--

CREATE TABLE `kehoachchung` (
  `id` int(11) NOT NULL,
  `makehoachchung` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahedaotao` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `khoa` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bomon` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `chuyennganh` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `namhoc` varchar(10) DEFAULT NULL,
  `nguoithaotac` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `kehoachchung`
--

INSERT INTO `kehoachchung` (`id`, `makehoachchung`, `mahedaotao`, `khoa`, `bomon`, `chuyennganh`, `namhoc`, `nguoithaotac`, `created_at`, `updated_at`) VALUES
(1, 'DTDK2', '2', '03', '079', '0411', '2017-2018', '02001', '2017-04-19 11:38:12', '2017-04-19 11:38:12'),
(2, 'DTDH451', '1', '03', '03', '0611', '2017-2018', '02001', '2017-04-20 10:47:38', '2017-04-20 10:47:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kehoachchuyennganh`
--

CREATE TABLE `kehoachchuyennganh` (
  `id` int(11) NOT NULL,
  `makehoachchung` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `machuyennganh` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mamonhoc` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hocky` tinyint(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `kehoachchuyennganh`
--

INSERT INTO `kehoachchuyennganh` (`id`, `makehoachchung`, `machuyennganh`, `mamonhoc`, `hocky`, `created_at`, `updated_at`) VALUES
(12, 'DTDH452', '0411', '  041105', 1, '2017-04-10 13:20:51', '2017-04-10 13:20:51'),
(19, 'DTDH452', '0411', ' 041102', 1, '2017-04-20 01:21:43', '2017-04-20 01:21:43'),
(23, 'DTDH451', '0611', ' 041102', 1, '2017-04-20 10:53:59', '2017-04-20 10:53:59'),
(24, 'DTDH451', '0611', '071101', 2, '2017-05-10 02:05:58', '2017-05-10 02:05:58'),
(25, 'DTDH451', '0611', '061102', 1, '2017-05-10 02:06:08', '2017-05-10 02:06:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kehoachtheolop`
--

CREATE TABLE `kehoachtheolop` (
  `id` int(11) NOT NULL,
  `makehoachtheolop` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `machuyennganh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `malop` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahedaotao` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `namhoc` varchar(20) DEFAULT NULL,
  `nguoithaotac` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `duyet` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `kehoachtheolop`
--

INSERT INTO `kehoachtheolop` (`id`, `makehoachtheolop`, `machuyennganh`, `malop`, `mahedaotao`, `namhoc`, `nguoithaotac`, `duyet`, `created_at`, `updated_at`) VALUES
(19, '12345954', '0311', '101135', '5', '2018-2019', '02001', 1, '2017-04-03 01:10:05', '2017-04-03 01:10:05'),
(20, 'KHTL2017', '0221', '101122', '6', '2017-2018', '02001', 1, '2017-04-12 12:55:01', '2017-04-12 12:55:01'),
(21, 'DTDH07', '0221', '101142', '1', '2017-2018', '02001', 1, '2017-04-12 13:40:14', '2017-04-12 13:40:14'),
(22, 'DTDH08', '0221', '101132', '6', '2017-2018', '02001', 1, '2017-04-13 11:19:23', '2017-04-13 11:19:23'),
(23, '5465', '0211', '101145', '1', '2017-2018', '02001', 0, '2017-04-21 18:14:42', '2017-04-21 18:14:42'),
(25, 'ÁDFRE3', '0211', '201141', '5', '2017-2018', '02001', 1, '2017-04-21 21:13:32', '2017-04-21 21:13:32'),
(26, 'dfgdfgdfgdfg', '0211', '101134', '6', '2017-2018', '02001', 1, '2017-05-11 12:47:59', '2017-05-11 12:47:59'),
(27, '46845', '0221', '101152', '6', '2017-2018', '02001', 1, '2017-05-28 09:59:21', '2017-05-28 09:59:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kekhaigiogiangbomon`
--

CREATE TABLE `kekhaigiogiangbomon` (
  `id` int(11) NOT NULL,
  `idgv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `siso` int(14) DEFAULT NULL,
  `mabomon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `makhoa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sogiotieuchuan` int(10) DEFAULT NULL,
  `sogiothuchien` int(10) DEFAULT NULL,
  `namhoc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kekhaigiogiangbomon`
--

INSERT INTO `kekhaigiogiangbomon` (`id`, `idgv`, `siso`, `mabomon`, `makhoa`, `sogiotieuchuan`, `sogiothuchien`, `namhoc`, `created_at`) VALUES
(1, '02001', 176, '022', '01', 550, 736, '2017-2018', '2017-05-28 09:41:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `id` int(11) NOT NULL,
  `makhoa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhoa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithaotac` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`id`, `makhoa`, `tenkhoa`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`) VALUES
(1, '1', ' a', '02001', 1, '2017-05-27 19:23:49', '2017-05-27 19:23:49'),
(2, '03', 'Khoa cơ bản', '02001', 0, '2016-06-03 10:00:00', '2016-08-20 10:00:00'),
(3, '04', 'Khoa Giáo dục thể chất', '02001', 0, '2016-06-03 10:00:00', '2016-08-20 10:00:00'),
(4, '05', 'Khoa Ngoại Ngữ', '02001', 0, '2016-06-03 10:00:00', '2016-08-20 10:00:00'),
(5, '06', '  Khoa Lý luận chính trị 1', '02001', 1, '2016-06-03 10:00:00', '2016-08-20 10:00:00'),
(6, '07', 'Khoa Hóa môi trường và Kinh tế', '02001', 0, '2016-06-03 10:00:00', '2016-08-20 10:00:00'),
(8, '10', '    Khoa Môi Trường', '02001', 1, '2017-03-09 05:57:26', '2017-03-09 05:57:26'),
(9, 'kt', ' kinh te', '02001', 1, '2017-03-12 09:21:35', '2017-03-12 09:21:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaimon`
--

CREATE TABLE `loaimon` (
  `id` int(5) NOT NULL,
  `maloaimon` varchar(100) DEFAULT NULL,
  `tenloaimon` varchar(255) DEFAULT NULL,
  `nguoithaotac` varchar(10) DEFAULT NULL,
  `quydoi` tinyint(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaimon`
--

INSERT INTO `loaimon` (`id`, `maloaimon`, `tenloaimon`, `nguoithaotac`, `quydoi`, `created_at`, `updated_at`) VALUES
(1, '1', 'Lý thuyết', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 10:00:00'),
(2, '2', 'Lý thuyết_thực hành', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 10:00:00'),
(3, '3', 'Đồ án môn học', '02001', 2, '0000-00-00 00:00:00', '2016-08-20 10:00:00'),
(4, '4', 'Đồ án tốt nghiệp', '02001', 12, '0000-00-00 00:00:00', '2016-08-20 10:00:00'),
(5, '5', 'Thực tập tốt nghiệp', '02001', 2, '0000-00-00 00:00:00', '2016-08-20 10:00:00'),
(6, '6', 'Thực tập xí nghiệp', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 10:00:00'),
(7, '8', 'Thực tập nhận thức công nghệ', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 10:00:00'),
(8, '9', 'Thực tập sư phạm', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 10:00:00'),
(9, '10', 'Quản lý phòng máy', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 10:00:00'),
(10, '11', 'Bồi dưỡng giảng viên mới', '02001', 20, '0000-00-00 00:00:00', '2016-08-20 10:00:00'),
(11, '12', 'Viết báo', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 10:00:00'),
(12, '13', 'Viết sách', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 10:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `id` int(11) NOT NULL,
  `malop` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahedaotao` varchar(40) DEFAULT NULL,
  `tenlop` varchar(255) DEFAULT NULL,
  `siso` int(100) DEFAULT NULL,
  `machuyennganh` varchar(10) DEFAULT NULL,
  `gvcn` varchar(100) DEFAULT NULL,
  `nguoithaotac` varchar(100) DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`id`, `malop`, `mahedaotao`, `tenlop`, `siso`, `machuyennganh`, `gvcn`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`) VALUES
(24, '101121', '1', 'TK10.1', 58, '0211', '02030', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(25, '101122', '1', 'TK10.2', 34, '0221', '02014', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(26, '101123', '1', 'TK10.3', 18, '0231', '02021', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(27, '101124', '1', 'TK10.4', 15, '0211', '02003', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(28, '101131', '1', 'TK11.1', 58, '0211', '02005', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(29, '101132', '1', 'TK11.2', 48, '0221', '02011', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(30, '101133', '1', 'TK11.3', 20, '0231', '02028', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(31, '101134', '1', 'TK11.4', 33, '0211', '02007', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(32, '101135', '1', 'TK11.5', 61, '0211', '02004', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(33, '101141', '1', 'TK12.1', 31, '0211', '02006', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(34, '101142', '1', 'TK12.2', 40, '0221', '02013', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(35, '101143', '1', 'TK12.3', 18, '0231', '02024', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(36, '101144', '1', 'TK12.4', 23, '0211', '02002', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(37, '101145', '1', 'TK12.5', 25, '0211', '02003', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(38, '101146', '1', 'TK12.6', 15, '0211', '02006', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(39, '101151', '1', 'TK13.1', 39, '0211', '02003', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(40, '101152', '1', 'TK13.2', 60, '0221', '02016', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(41, '101153', '1', 'TK13.3', 55, '0231', '02025', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(42, '101154', '1', 'TK13.4', 40, '0211', '02004', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(43, '201141', '2', 'LC42.1', 4, '0211', '02004', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(44, '201151', '2', 'LC43.1', 15, '0211', '02005', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(45, '601131', '6', 'TK42.1', 16, '0211', '02004', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00'),
(46, '601141', '6', 'TK43.1', 12, '0211', '02007', '02001', 0, '2016-08-07 10:00:00', '2016-08-07 10:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `id` int(11) NOT NULL,
  `mamonhoc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenmonhoc` varchar(255) DEFAULT NULL,
  `mahedaotao` varchar(100) DEFAULT NULL,
  `soTCLT` tinyint(5) DEFAULT NULL,
  `soTCTH` tinyint(5) DEFAULT NULL,
  `machuyennganh` varchar(100) DEFAULT NULL,
  `maloaimon` varchar(100) DEFAULT NULL,
  `TCM` varchar(50) DEFAULT NULL,
  `giaovien` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithaotac` varchar(10) DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`id`, `mamonhoc`, `tenmonhoc`, `mahedaotao`, `soTCLT`, `soTCTH`, `machuyennganh`, `maloaimon`, `TCM`, `giaovien`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`) VALUES
(1, '021101', 'Tin học đại cương', '1', 2, 1, '0211', '2', 'ĐC', '02001', '02001', 0, '2016-08-11 10:00:00', '2016-08-11 10:00:00'),
(2, '021102', 'Định hướng nghề nghiệp', '1', 2, 0, '0211', '1', 'CSN', '02001', '02001', 0, '2016-08-11 10:00:00', '2016-08-11 10:00:00'),
(3, '021103', 'Cơ sở kỹ thuật lập trình', '1', 3, 1, '0211', '2', 'CSN', '02001', '02001', 0, '2016-08-11 10:00:00', '2016-08-11 10:00:00'),
(4, '021104', 'Kiến trúc máy tính', '1', 3, 0, '0211', '1', 'CSN', '02001', '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(5, '021105', 'Cơ sở dữ liệu', '1', 3, 1, '0211', '2', 'CSN', '02001', '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(6, '021106', 'Lập trình hướng đối tượng', '1', 2, 1, '0211', '2', 'CSN', '02001', '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(7, '021107', 'Đồ án 1', '1', 0, 4, '0212', '3', 'TH', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(8, '021108', 'Cấu trúc dữ liệu và giải thuật', '1', 2, 1, '0211', '2', 'CSN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(9, '021109', 'Mạng máy tính', '1', 2, 1, '0211', '2', 'CSN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(10, '021110', 'Hệ quản trị cơ sở dữ liệu', '1', 2, 1, '0212', '2', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(11, '021111', 'Phân tích và thiết kế phần mềm', '1', 2, 1, '0211', '2', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(12, '021112', 'Toán rời rạc', '1', 4, 0, '0211', '1', 'CSN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(13, '021113', 'Công nghệ .NET', '1', 2, 1, '0211', '2', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(14, '021114', 'Đồ án 2', '1', 0, 4, '0211', '3', 'TH', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(15, '021115', 'Thiết kế và đánh giá thuật toán', '1', 2, 0, '0211', '1', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(16, '021116', 'Công nghệ web và ứng dụng', '1', 2, 1, '0211', '2', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(17, '021117', 'Phân tích hướng đối tượng', '1', 2, 1, '0212', '3', 'ĐC', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(18, '021118', 'Đồ án 3', '1', 0, 4, '0211', '3', 'TH', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(19, '021119', 'Lập trình mạng', '1', 2, 1, '0211', '2', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(20, '021120', 'Thực tập xí nghiệp', '1', 0, 6, '0211', '6', 'XN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(21, '021121', 'Đồ án 4', '1', 0, 4, '0211', '3', 'TH', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(22, '021122', 'Trí tuệ nhân tạo', '1', 2, 0, '0211', '1', 'CSN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(23, '021123', 'Kiểm thử phần mềm', '1', 2, 1, '0212', '2', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(24, '021124', 'Lập trình mobile', '1', 3, 1, '0211', '1', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(25, '021125', 'Đồ án 5', '1', 0, 4, '0211', '4', 'TH', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(26, '021126', 'Thực tập tốt nghiệp', '1', 0, 3, '0211', '5', 'TH', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(27, '021127', 'Đồ án TN', '1', 0, 5, '0211', '4', 'TN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(28, '022101', 'Tin học đại cương', '1', 2, 1, '0221', '2', 'ĐC', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(29, '022102', 'Định hướng nghề nghiệp', '1', 2, 0, '0221', '1', 'CSN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(30, '022103', 'Cơ sở kỹ thuật lập trình', '1', 3, 1, '0221', '2', 'CSN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(31, '022104', 'Kiến trúc máy tính', '1', 3, 0, '0221', '1', 'CSN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(32, '022105', 'Cấu trúc dữ liệu và giải thuật', '1', 2, 1, '0221', '2', 'CSN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(33, '022106', 'Cơ sở dữ liệu', '1', 3, 1, '0221', '2', 'CSN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(34, '022107', 'Lập trình hướng đối tượng', '1', 2, 1, '0221', '2', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(35, '022108', 'Đồ án 1', '1', 0, 4, '0221', '3', 'TH', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(36, '022109', 'Mạng máy tính', '1', 2, 1, '0221', '1', 'CSN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(37, '022110', 'Thiết kế và đánh giá thuật toán', '1', 2, 0, '0221', '1', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(38, '022111', 'Hệ quản trị cơ sở dữ liệu', '1', 2, 1, '0221', '2', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(39, '022112', 'Phân tích và thiết kế phần mềm', '1', 2, 1, '0221', '2', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(40, '022113', 'Đồ án 2', '1', 0, 4, '0221', '3', 'TH', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(41, '022114', 'Bảo mật máy tính và mạng', '1', 3, 0, '0221', '1', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(42, '022115', 'Thiết kế mạng doạnh nghiệp', '1', 2, 1, '0221', '2', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(43, '022116', 'Công nghệ web và ứng dụng', '1', 2, 1, '0221', '2', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(44, '022117', 'Đồ án 3', '1', 0, 4, '0221', '3', 'TH', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(45, '022118', 'Quản trị mạng máy tính', '1', 2, 1, '0221', '2', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(46, '022119', 'Đồ án 4', '1', 0, 4, '0221', '3', 'TH', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(47, '022120', 'Thực tập xí nghiệp', '1', 0, 6, '0221', '6', 'XN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(48, '022121', 'Thương mại điện tử', '1', 3, 1, '0221', '2', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(49, '022122', 'Lập trình mạng', '1', 2, 1, '0221', '2', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(50, '022123', 'Hệ điều hành mã nguồn mở', '1', 2, 1, '0221', '2', 'CN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(51, '022124', 'Đồ án 5', '1', 0, 4, '0221', '3', 'TH', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(52, '022125', 'Thực tập tốt nghiệp', '1', 0, 3, '0221', '5', 'TH', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(53, '022126', 'Đồ án TN', '1', 0, 5, '0221', '5', 'TN', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(54, '022127', 'Toán rời rạc', '1', 4, 0, '0221', '1', 'CSN', NULL, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(55, '023101', 'Tin học đại cương', '1', 2, 1, '0231', '2', 'ĐC', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(56, '023102', 'Định hướng nghề nghiệp', '1', 2, 0, '0231', '1', 'CSN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(57, '023103', 'Cơ sở kỹ thuật lập trình', '1', 3, 1, '0231', '2', 'CSN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(58, '023104', 'Kiến trúc máy tính', '1', 3, 0, '0231', '1', 'CSN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(59, '023105', 'Cấu trúc dữ liệu và giải thuật', '1', 2, 1, '0231', '2', 'CSN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(60, '023106', 'Cơ sở dữ liệu', '1', 3, 1, '0231', '2', 'CSN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(61, '023107', 'Lập trình hướng đối tượng', '1', 2, 1, '0231', '2', 'CN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(62, '023108', 'Đồ án 1', '1', 0, 4, '0231', '3', 'TH', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(63, '023109', 'Mạng máy tính', '1', 2, 1, '0231', '2', 'CSN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(64, '023110', 'Vi xử lý', '1', 2, 1, '0231', '2', 'CN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(65, '023111', 'Kỹ thuật điện tử số', '1', 3, 2, '0231', '2', 'CN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(66, '023112', 'Phân tích và thiết kế phần mềm', '1', 2, 1, '0231', '1', 'CN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(67, '023113', 'Đồ án 2', '1', 0, 4, '0231', '3', 'TH', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(68, '023114', 'Lập trình PLC', '1', 3, 1, '0231', '1', 'CN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(69, '023115', 'Hệ điều hành', '1', 2, 0, '0231', '2', 'CN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(70, '023116', 'Đồ án 3', '1', 0, 4, '0231', '3', 'TH', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(71, '023117', 'Lập trình điều khiển thiết bị', '1', 2, 1, '0231', '2', 'CN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(72, '023118', 'Kỹ thuật điều khiển tự động', '1', 2, 0, '0231', '1', 'CN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(73, '023119', 'Thực tập xí nghiệp', '1', 0, 6, '0231', '6', 'XN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(74, '023120', 'Đồ án 4', '1', 0, 4, '0231', '3', 'TH', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(75, '023121', 'Lập trình hệ thống', '1', 2, 1, '0231', '2', 'CN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(76, '023122', 'Lập trình vi điều khiển', '1', 4, 1, '0231', '2', 'CN', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(77, '023123', 'Đồ án 5', '1', 0, 4, '0231', '3', 'TH', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(78, '023124', 'Thực tập tốt nghiệp', '1', 0, 3, '0231', '5', 'TH', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(79, '023125', 'Đồ án TN', '1', 0, 5, '0231', '4', 'ĐC', NULL, '02001', 0, '2016-08-14 10:00:00', '2016-08-14 10:00:00'),
(80, '023126', 'Thiết kế và đánh giá thuật toán', '1', 2, 1, '0231', '1', 'CN', NULL, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(81, '023127', 'Toán rời rạc', '1', 4, 0, '0231', '1', 'ĐC', NULL, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(82, '031101', 'Toán cao cấp 1', '1', 2, 0, '0311', '1', 'ĐC', NULL, '02001', 0, '2016-08-11 10:00:00', '2016-08-11 10:00:00'),
(83, '031102', 'Toán cao cấp 2', '1', 2, 0, '0311', '1', 'ĐC', NULL, '02001', 0, '2016-08-11 10:00:00', '2016-08-11 10:00:00'),
(84, '031103', 'Toán cao cấp 3', '1', 2, 0, '0311', '1', 'ĐC', NULL, '02001', 0, '2016-08-11 10:00:00', '2016-08-11 10:00:00'),
(85, '031104', 'Vật lý đại cương 1', '1', 3, 1, '0311', '2', 'ĐC', NULL, '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(86, '031105', 'Xác suất thống kê', '1', 2, 0, '0311', '1', 'ĐC', NULL, '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(87, '031106', 'Hóa học đại cương', '1', 2, 0, '0311', '1', 'ĐC', NULL, '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(88, '031107', 'Vật lý đại cương 2', '1', 2, 0, '0311', '1', 'ĐC', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(89, '031108', 'Phương pháp tính', '1', 2, 0, '0311', '1', 'ĐC', NULL, '02001', 0, '2016-08-13 10:00:00', '2016-08-13 10:00:00'),
(90, ' 041101', 'Giáo dục thể chất 1', '1', 1, 0, '0411', '1', 'ĐC', '02022', '02001', 0, '2016-08-11 10:00:00', '2016-08-11 10:00:00'),
(91, ' 041102', 'Giáo dục thể chất 2', '1', 1, 0, '0411', '1', 'ĐC', '02025', '02001', 0, '2016-08-11 10:00:00', '2016-08-11 10:00:00'),
(92, '041103', 'Giáo dục Quốc phòng', '1', 2, 1, '0411', '1', 'ĐC', NULL, '02001', 0, '2016-08-11 10:00:00', '2016-08-11 10:00:00'),
(93, '041104', 'Giáo dục thể chất 3', '1', 1, 0, '0411', '1', 'ĐC', NULL, '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(94, '  041105', 'Giáo dục thể chất 4', '1', 1, 0, '0411', '1', 'CSN', '02017', '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(95, ' 041106', 'Giáo dục thể chất 5', '1', 1, 0, '0411', '1', NULL, '1221050026', '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(96, ' 051101', 'Tiếng Anh -TOEIC 1', '1', 2, 0, '0511', '1', 'ĐC', '02018', '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(97, '051102', 'Tiếng Anh -TOEIC 2', '1', 3, 0, '0511', '1', 'ĐC', NULL, '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(98, '051103', 'Tiếng Anh -TOEIC 3', '1', 2, 0, '0511', '1', 'ĐC', NULL, '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(99, '061101', 'Pháp luật đại cương', '1', 2, 0, '0611', '1', 'ĐC', NULL, '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(100, '061102', 'Những nguyên lý cơ bản của chủ nghĩa Mác-Lênin 1', '1', 2, 0, '0611', '1', 'ĐC', NULL, '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(101, '061103', 'Những nguyên lý cơ bản của chủ nghĩa Mác-Lênin 2', '1', 3, 0, '0611', '1', 'ĐC', NULL, '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(102, '061104', 'Tư tưởng Hồ Chí Minh', '1', 2, 0, '0611', '1', 'ĐC', NULL, '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(103, '061105', 'Đường Lối cách mạng của Đảng Cộng sản Việt Nam', '1', 3, 0, '0611', '1', 'ĐC', NULL, '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(104, '071101', 'Đại cương kinh tế và môi trường', '1', 2, 0, '0711', '1', 'ĐC', '02001', '02001', 0, '2016-08-12 10:00:00', '2016-08-12 10:00:00'),
(105, '    THHH3', ' Tin học ', '6', 5, 5, '0212', '2', 'CSN', '1221050026', '02001', 1, '2017-04-02 20:16:25', '2017-04-02 20:16:25'),
(106, '  dgsdgsdg', 'dfgdfgsdg', '6', 5, 5, '0611', '12', 'ĐC', '02022', '02001', 1, '2017-04-08 12:02:19', '2017-04-08 12:02:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phancong`
--

CREATE TABLE `phancong` (
  `id` int(11) NOT NULL,
  `maGV` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` float DEFAULT '0',
  `hocky` tinyint(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `namhoc` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithaotac` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phancong`
--

INSERT INTO `phancong` (`id`, `maGV`, `time`, `hocky`, `created_at`, `namhoc`, `nguoithaotac`) VALUES
(1, '02085', 0, 1, '2017-05-27 19:22:54', '2017-2018', '02001'),
(2, '02071', 0, 1, '2017-05-27 19:28:45', '2017-2018', '02001'),
(15, '02030', 255, 1, '2017-05-11 15:56:41', '2017-2018', '02001'),
(16, '02029', 210, 1, '2017-05-11 16:48:43', '2017-2018', '02001'),
(17, '02030', 120, 2, '2017-05-11 16:48:50', '2017-2018', '02001'),
(18, '02001', 600, 1, '2017-05-27 20:16:02', '2017-2018', '02001');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quydinh`
--

CREATE TABLE `quydinh` (
  `id` int(11) NOT NULL,
  `maquydinh` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maGV` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namhoc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kyhoc` int(5) DEFAULT NULL,
  `sogiochuan` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mucthanhtoan` int(11) DEFAULT NULL,
  `nguoithaotac` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quydinh`
--

INSERT INTO `quydinh` (`id`, `maquydinh`, `maGV`, `namhoc`, `kyhoc`, `sogiochuan`, `mucthanhtoan`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`) VALUES
(1, '1', '02002', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(2, '2', '02003', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(3, '3', '02004', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(4, '4', '02005', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(5, '5', '02006', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(6, '6', '02007', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(7, '7', '02008', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(8, '8', '02030', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(9, '9', '02009', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(10, '10', '02010', '2012-2013', 1, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(11, '11', '02011', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(12, '12', '02012', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(13, '13', '02013', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(14, '14', '02014', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(15, '15', '02015', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(16, '16', '02016', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(17, '17', '02017', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(18, '18', '02018', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(19, '19', '02019', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(20, '20', '02023', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(21, '21', '02001', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(22, '22', '02020', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(23, '23', '02021', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(24, '24', '02022', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(25, '25', '02024', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(26, '26', '02025', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(27, '27', '02026', '2012-2013', 1, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(28, '28', '02027', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(29, '29', '02028', '2012-2013', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(30, '30', '02002', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(31, '31', '02003', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(32, '32', '02004', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(33, '33', '02005', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(34, '34', '02006', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(35, '35', '02007', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(36, '36', '02008', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(37, '37', '02030', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(38, '38', '02009', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(39, '39', '02010', '2012-2013', 2, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(40, '40', '02011', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(41, '41', '02012', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(42, '42', '02013', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(43, '43', '02014', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(44, '44', '02015', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(45, '45', '02016', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(46, '46', '02017', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(47, '47', '02018', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(48, '48', '02019', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(49, '49', '02023', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(50, '50', '02001', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(51, '51', '02020', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(52, '52', '02021', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(53, '53', '02022', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(54, '54', '02024', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(55, '55', '02025', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(56, '56', '02026', '2012-2013', 2, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(57, '57', '02027', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(58, '58', '02028', '2012-2013', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(59, '59', '02002', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(60, '60', '02003', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(61, '61', '02004', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(62, '62', '02005', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(63, '63', '02006', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(64, '64', '02007', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(65, '65', '02008', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(66, '66', '02030', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(67, '67', '02009', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(68, '68', '02010', '2013-2014', 1, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(69, '69', '02011', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(70, '70', '02012', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(71, '71', '02013', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(72, '72', '02014', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(73, '73', '02015', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(74, '74', '02016', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(75, '75', '02017', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(76, '76', '02018', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(77, '77', '02019', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(78, '78', '02023', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(79, '79', '02001', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(80, '80', '02020', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(81, '81', '02021', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(82, '82', '02022', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(83, '83', '02024', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(84, '84', '02025', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(85, '85', '02026', '2013-2014', 1, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(86, '86', '02027', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(87, '87', '02028', '2013-2014', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(88, '88', '02002', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(89, '89', '02003', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(90, '90', '02004', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(91, '91', '02005', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(92, '92', '02006', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(93, '93', '02007', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(94, '94', '02008', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(95, '95', '02030', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(96, '96', '02009', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(97, '97', '02010', '2013-2014', 2, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(98, '98', '02011', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(99, '99', '02012', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(100, '100', '02013', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(101, '101', '02014', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(102, '102', '02015', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(103, '103', '02016', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(104, '104', '02017', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(105, '105', '02018', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(106, '106', '02019', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(107, '107', '02023', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(108, '108', '02001', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(109, '109', '02020', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(110, '110', '02021', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(111, '111', '02022', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(112, '112', '02024', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(113, '113', '02025', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(114, '114', '02026', '2013-2014', 2, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(115, '115', '02027', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(116, '116', '02028', '2013-2014', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(117, '117', '02002', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(118, '118', '02003', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(119, '119', '02004', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(120, '120', '02005', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(121, '121', '02006', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(122, '122', '02007', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(123, '123', '02008', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(124, '124', '02030', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(125, '125', '02009', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(126, '126', '02010', '2014-2015', 1, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(127, '127', '02011', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(128, '128', '02012', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(129, '129', '02013', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(130, '130', '02014', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(131, '131', '02015', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(132, '132', '02016', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(133, '133', '02017', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(134, '134', '02018', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(135, '135', '02019', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(136, '136', '02023', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(137, '137', '02001', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(138, '138', '02020', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(139, '139', '02021', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(140, '140', '02022', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(141, '141', '02024', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(142, '142', '02025', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(143, '143', '02026', '2014-2015', 1, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(144, '144', '02027', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(145, '145', '02028', '2014-2015', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(146, '146', '02002', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(147, '147', '02003', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(148, '148', '02004', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(149, '149', '02005', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(150, '150', '02006', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(151, '151', '02007', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(152, '152', '02008', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(153, '153', '02030', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(154, '154', '02009', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(155, '155', '02010', '2014-2015', 2, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(156, '156', '02011', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(157, '157', '02012', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(158, '158', '02013', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(159, '159', '02014', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(160, '160', '02015', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(161, '161', '02016', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(162, '162', '02017', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(163, '163', '02018', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(164, '164', '02019', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(165, '165', '02023', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(166, '166', '02001', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(167, '167', '02020', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(168, '168', '02021', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(169, '169', '02022', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(170, '170', '02024', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(171, '171', '02025', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(172, '172', '02026', '2014-2015', 2, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(173, '173', '02027', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(174, '174', '02028', '2014-2015', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(175, '175', '02002', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(176, '176', '02003', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(177, '177', '02004', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(178, '178', '02005', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(179, '179', '02006', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(180, '180', '02007', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(181, '181', '02008', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(182, '182', '02030', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(183, '183', '02009', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(184, '184', '02010', '2015-2016', 1, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(185, '185', '02011', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(186, '186', '02012', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(187, '187', '02013', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(188, '188', '02014', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(189, '189', '02015', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(190, '190', '02016', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(191, '191', '02017', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(192, '192', '02018', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(193, '193', '02019', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(194, '194', '02023', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(195, '195', '02001', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(196, '196', '02020', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(197, '197', '02021', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(198, '198', '02022', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(199, '199', '02024', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(200, '200', '02025', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(201, '201', '02026', '2015-2016', 1, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(202, '202', '02027', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(203, '203', '02028', '2015-2016', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(204, '204', '02002', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(205, '205', '02003', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(206, '206', '02004', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(207, '207', '02005', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(208, '208', '02006', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(209, '209', '02007', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(210, '210', '02008', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(211, '211', '02030', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(212, '212', '02009', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(213, '213', '02010', '2015-2016', 2, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(214, '214', '02011', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(215, '215', '02012', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(216, '216', '02013', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(217, '217', '02014', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(218, '218', '02015', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(219, '219', '02016', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(220, '220', '02017', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(221, '221', '02018', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(222, '222', '02019', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(223, '223', '02023', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(224, '224', '02001', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(225, '225', '02020', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(226, '226', '02021', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(227, '227', '02022', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(228, '228', '02024', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(229, '229', '02025', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(230, '230', '02026', '2015-2016', 2, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(231, '231', '02027', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(232, '232', '02028', '2015-2016', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(233, '233', '02002', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(234, '234', '02003', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(235, '235', '02004', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(236, '236', '02005', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(237, '237', '02006', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(238, '238', '02007', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(239, '239', '02008', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(240, '240', '02030', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(241, '241', '02009', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(242, '242', '02010', '2016-2017', 1, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(243, '243', '02011', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(244, '244', '02012', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(245, '245', '02013', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(246, '246', '02014', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(247, '247', '02015', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(248, '248', '02016', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(249, '249', '02017', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(250, '250', '02018', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(251, '251', '02019', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(252, '252', '02023', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(253, '253', '02001', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(254, '254', '02020', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(255, '255', '02021', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(256, '256', '02022', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(257, '257', '02024', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(258, '258', '02025', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(259, '259', '02026', '2016-2017', 1, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(260, '260', '02027', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(261, '261', '02028', '2016-2017', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(262, '262', '02002', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(263, '263', '02003', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(264, '264', '02004', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(265, '265', '02005', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(266, '266', '02006', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(267, '267', '02007', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(268, '268', '02008', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(269, '269', '02030', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(270, '270', '02009', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(271, '271', '02010', '2016-2017', 2, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(272, '272', '02011', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(273, '273', '02012', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(274, '274', '02013', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(275, '275', '02014', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(276, '276', '02015', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(277, '277', '02016', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(278, '278', '02017', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(279, '279', '02018', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(280, '280', '02019', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(281, '281', '02023', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(282, '282', '02001', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(283, '283', '02020', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(284, '284', '02021', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(285, '285', '02022', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(286, '286', '02024', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(287, '287', '02025', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(288, '288', '02026', '2016-2017', 2, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(289, '289', '02027', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(290, '290', '02028', '2016-2017', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(291, '291', '02002', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(292, '292', '02003', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(293, '293', '02004', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(294, '294', '02005', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(295, '295', '02006', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(296, '296', '02007', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(297, '297', '02008', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(298, '298', '02030', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(299, '299', '02009', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(300, '300', '02010', '2017-2018', 1, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(301, '301', '02011', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(302, '302', '02012', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(303, '303', '02013', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(304, '304', '02014', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(305, '305', '02015', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(306, '306', '02016', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(307, '307', '02017', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(308, '308', '02018', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(309, '309', '02019', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(310, '310', '02023', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(311, '311', '02001', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(312, '312', '02020', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(313, '313', '02021', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(314, '314', '02022', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(315, '315', '02024', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(316, '316', '02025', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(317, '317', '02026', '2017-2018', 1, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(318, '318', '02027', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(319, '319', '02028', '2017-2018', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(320, '320', '02002', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(321, '321', '02003', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(322, '322', '02004', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(323, '323', '02005', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(324, '324', '02006', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(325, '325', '02007', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(326, '326', '02008', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(327, '327', '02030', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(328, '328', '02009', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(329, '329', '02010', '2017-2018', 2, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(330, '330', '02011', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(331, '331', '02012', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(332, '332', '02013', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(333, '333', '02014', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(334, '334', '02015', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(335, '335', '02016', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(336, '336', '02017', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(337, '337', '02018', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(338, '338', '02019', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(339, '339', '02023', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(340, '340', '02001', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(341, '341', '02020', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(342, '342', '02021', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(343, '343', '02022', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(344, '344', '02024', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(345, '345', '02025', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(346, '346', '02026', '2017-2018', 2, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(347, '347', '02027', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(348, '348', '02028', '2017-2018', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(349, '349', '02002', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(350, '350', '02003', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(351, '351', '02004', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(352, '352', '02005', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(353, '353', '02006', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(354, '354', '02007', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(355, '355', '02008', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(356, '356', '02030', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(357, '357', '02009', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(358, '358', '02010', '2018-2019', 1, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(359, '359', '02011', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(360, '360', '02012', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(361, '361', '02013', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(362, '362', '02014', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(363, '363', '02015', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(364, '364', '02016', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(365, '365', '02017', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(366, '366', '02018', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(367, '367', '02019', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(368, '368', '02023', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(369, '369', '02001', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(370, '370', '02020', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(371, '371', '02021', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(372, '372', '02022', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(373, '373', '02024', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(374, '374', '02025', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(375, '375', '02026', '2018-2019', 1, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(376, '376', '02027', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(377, '377', '02028', '2018-2019', 1, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(378, '378', '02002', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(379, '379', '02003', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(380, '380', '02004', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(381, '381', '02005', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(382, '382', '02006', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(383, '383', '02007', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(384, '384', '02008', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(385, '385', '02030', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(386, '386', '02009', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(387, '387', '02010', '2018-2019', 2, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(388, '388', '02011', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(389, '389', '02012', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(390, '390', '02013', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(391, '391', '02014', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(392, '392', '02015', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(393, '393', '02016', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(394, '394', '02017', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(395, '395', '02018', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(396, '396', '02019', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(397, '397', '02023', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(398, '398', '02001', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(399, '399', '02020', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(400, '400', '02021', '2017-2018', 1, '275', 30000, '02001', 1, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(401, '401', '02022', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(402, '402', '02024', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(404, '404', '02026', '2018-2019', 2, '310', 45000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(405, '405', '02027', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00'),
(406, '406', '02028', '2018-2019', 2, '275', 30000, '02001', 0, '2016-08-17 10:00:00', '2016-08-17 10:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trinhdo`
--

CREATE TABLE `trinhdo` (
  `id` int(11) NOT NULL,
  `matrinhdo` varchar(50) DEFAULT NULL,
  `tentrinhdo` varchar(50) DEFAULT NULL,
  `nguoithaotac` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `trinhdo`
--

INSERT INTO `trinhdo` (`id`, `matrinhdo`, `tentrinhdo`, `nguoithaotac`, `created_at`, `updated_at`) VALUES
(1, 'DH1', ' Đại Học', '02001', '2017-03-13 00:33:38', '2017-03-13 00:33:38'),
(3, 'TS', ' Thạc sĩ', '02001', '2017-03-13 02:52:31', '2017-03-13 02:52:31'),
(4, 'TSS', ' Tiến Sĩ', '02001', '2017-03-13 02:52:50', '2017-03-13 02:52:50');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maGV` (`maGV`);

--
-- Chỉ mục cho bảng `bomon`
--
ALTER TABLE `bomon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mabomon` (`mabomon`);

--
-- Chỉ mục cho bảng `chitietkehoachtheolop`
--
ALTER TABLE `chitietkehoachtheolop`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietphancong`
--
ALTER TABLE `chitietphancong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chuyennganh`
--
ALTER TABLE `chuyennganh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `machuyennganh` (`machuyennganh`);

--
-- Chỉ mục cho bảng `hedaotao`
--
ALTER TABLE `hedaotao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hocham`
--
ALTER TABLE `hocham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kehoachchung`
--
ALTER TABLE `kehoachchung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kehoachchuyennganh`
--
ALTER TABLE `kehoachchuyennganh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kehoachtheolop`
--
ALTER TABLE `kehoachtheolop`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kekhaigiogiangbomon`
--
ALTER TABLE `kekhaigiogiangbomon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `makhoa` (`makhoa`),
  ADD KEY `makhoa_2` (`makhoa`);

--
-- Chỉ mục cho bảng `loaimon`
--
ALTER TABLE `loaimon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phancong`
--
ALTER TABLE `phancong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quydinh`
--
ALTER TABLE `quydinh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trinhdo`
--
ALTER TABLE `trinhdo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT cho bảng `bomon`
--
ALTER TABLE `bomon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `chitietkehoachtheolop`
--
ALTER TABLE `chitietkehoachtheolop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT cho bảng `chitietphancong`
--
ALTER TABLE `chitietphancong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `chuyennganh`
--
ALTER TABLE `chuyennganh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `hedaotao`
--
ALTER TABLE `hedaotao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `hocham`
--
ALTER TABLE `hocham`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `kehoachchung`
--
ALTER TABLE `kehoachchung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `kehoachchuyennganh`
--
ALTER TABLE `kehoachchuyennganh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT cho bảng `kehoachtheolop`
--
ALTER TABLE `kehoachtheolop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT cho bảng `kekhaigiogiangbomon`
--
ALTER TABLE `kekhaigiogiangbomon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `khoa`
--
ALTER TABLE `khoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `loaimon`
--
ALTER TABLE `loaimon`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT cho bảng `phancong`
--
ALTER TABLE `phancong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT cho bảng `quydinh`
--
ALTER TABLE `quydinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=407;
--
-- AUTO_INCREMENT cho bảng `trinhdo`
--
ALTER TABLE `trinhdo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
