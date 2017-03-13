-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2017 at 03:25 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doanha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `maGV` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
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
  `matkhau` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithaotac` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `maGV`, `hoten`, `ngaysinh`, `gioitinh`, `diachi`, `dienthoai`, `email`, `hocham`, `trinhdo`, `chucvu`, `hinhanh`, `mabomon`, `makhoa`, `manganh`, `matkhau`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`) VALUES
(1, '02001', 'Võ Thị Thanh Mai', '1873-08-08', 0, 'Hưng Yên', '0987767777', 'vothanhmai@gmail.com', '', 'Thạc sĩ', 'Giáo vụ khoa', '20160808042858mai1.jpg', '023', NULL, '0231', '02001', '02001', 1, '2016-08-07 17:00:00', '2016-08-22 17:00:00'),
(2, '02002', 'Nguyễn Văn Hậu', '1979-02-06', 0, 'Hưng Yên', '098764455', 'HauNV@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808043410nvhau66.png', '021', NULL, '0211', '02002', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(3, '02003', 'Lê Quang Lợi', '1976-06-22', 0, 'Hưng Yên', '0982332139', 't@utehy.edu.vn', '', 'Thạc sĩ', 'Giảng viên', '20160817045008lqloi.PNG', '021', NULL, '0211', '02003', '02001', 1, '2016-08-07 17:00:00', '2016-08-16 17:00:00'),
(4, '02004', 'Nguyễn Văn Quyết', '1987-02-17', 0, 'Hưng Yên', '0986874345', 'quyetnv@gmail.com', '', 'Thạc sĩ', 'Phó trưởng bộ môn', '20160808044106quyetnv87.png', '021', NULL, '0211', '02004', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(5, '02005', 'Chu Thị Minh Huệ', '1982-05-12', 0, 'Hưng Yên', '0978567457', 'Huectm@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808044242Chu Thi Minh Hue.jpg', '021', NULL, '0211', '02005', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(6, '02006', 'Hoàng Quốc Việt', '1983-06-13', 0, 'Hưng Yên', '0945677367', 'Viethq@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808044443th viet.jpg', '021', NULL, '0211', '02006', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(7, '02007', 'Ngô Thanh Huyền', '1982-06-14', 0, 'Hưng Yên', '0986234678', 'HuyenNT@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808044734Ngo Thanh Huyen.jpg', '021', NULL, '0211', '02007', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(8, '02008', 'Nguyễn Hoàng Điệp', '1982-02-16', 0, 'Hưng Yên', '0987123876', 'DiepNH@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808045822diep.PNG', '021', NULL, '0211', '02008', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(9, '02009', 'Phạm Minh Chuẩn', '1981-02-17', 0, 'Thái Bình', '0983081120', 'chuanpm@gmail.com', '', 'Thạc sĩ', 'Phó trưởng bộ môn', '20160808050208chuan15762.png', '022', NULL, '0221', '02009', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(10, '02010', 'Bùi Thế Hồng', '1960-06-14', 0, 'Hà Nội', ' 0904238643', 'hongbuithe@gmail.com', 'Phó giáo sư', '', 'Giảng viên', '20160808050421hong1.png', '022', NULL, '0221', '02010', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(11, '02011', 'Nguyễn Duy Tân', '1977-02-08', 0, 'Hưng Yên', '0987322637', 'tanndhyvn@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808050732tan.png', '022', NULL, '0221', '02011', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(12, '02012', 'Lê Văn Vịnh', '1976-06-15', 0, 'Hưng Yên', '0988928728', '9119hy@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808050848vinh.png', '022', NULL, '0221', '02012', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(13, '02013', ' Vũ Xuân Thắng', '1982-12-05', 0, 'Hưng Yên', '0988169829', 'xuanthangutehy@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808051132thang.png', '022', NULL, '0221', '02013', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(14, '02014', 'Nguyễn Thị Thanh Huệ', '1984-09-15', 0, 'Hưng Yên', '0979851509', 'huentt1509@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808051345hue.png', '022', NULL, '0221', '02014', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(15, '02015', 'Đặng Vân Anh', '1982-09-06', 0, 'Hưng Yên', '0983702911', 'vananh271285@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808051619vaannh5032.png', '022', NULL, '0221', '02015', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(16, '02016', 'Vũ Khánh Quý', '1985-06-20', 0, 'Hưng Yên', '0945528686', 'quyvk0705@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808051853quy.jpg', '022', NULL, '0221', '02016', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(17, '02017', 'Phạm Quốc Hùng', '1980-03-05', 0, 'Hưng Yên', '0983360925', 'quochungvnu@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808052022hung.png', '022', NULL, NULL, '02017', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(18, '02018', ' Vi Hoài Nam', '1979-06-12', 0, 'Hưng Yên', '01259003595', 'vihoainam@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808052142nam.png', '022', NULL, NULL, '02018', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(19, '02019', 'Nguyễn Văn Hạnh', '1979-02-06', 0, 'Hưng Yên', '0987597532', ' hanhtk4@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808052319hanh.png', '022', NULL, NULL, '02019', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(20, '02020', 'Phạm Ngọc Hưng', '1966-10-11', 0, 'Hưng Yên', '0982713301', 'PhamNgocHung@gmail.com', '', 'Thạc sĩ', 'Phó trưởng khoa', '20160808052805hung17350.jpg', '023', NULL, NULL, '02020', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(21, '02021', 'Nguyễn Vinh Quy', '1978-06-13', 0, 'Hưng Yên', ' 0912206765', 'vinhquynguyen@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808053225quy14914.jpg', '023', NULL, NULL, '02021', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(22, '02022', 'Nguyễn Đình Chiến', '1973-01-29', 0, 'Hưng Yên', '08697037639', 'chienql@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808053312chien1.jpg', '023', NULL, NULL, '02022', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(23, '02023', 'Chu Bá Thành', '1985-02-12', 0, 'Hưng Yên', ' 0906099805', 'nhatthanhhy@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808053404thanh1.jpg', '022', NULL, NULL, '02023', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(24, '02024', 'Vũ Huy Thế', '1984-01-09', 0, 'Hưng Yên', '0978823873', 'thevh.bn@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808053531the1.jpg', '023', NULL, NULL, '02024', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(25, '02025', 'Vũ Thị Giang', '1983-02-08', 0, 'Hưng Yên', '0986765248', ' v.giang.utehy@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808053638giang1.jpg', '023', NULL, NULL, '02025', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(26, '02026', ' Hồ Khánh Lâm', '1960-06-08', 0, 'Hà Nội', '0913207555', 'lamhokhanh@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808053734lam1.jpg', '023', NULL, NULL, '02026', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(27, '02027', 'Trần Thị Phương', '1982-09-22', 0, 'Hưng Yên', '0975822600', 'phuongutehy2405@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808053851phuong1.jpg', '023', NULL, NULL, '02027', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(28, '02028', ' Lê Trung Hiếu', '1983-06-14', 0, 'Hưng Yên', '0987779776', 'hieult.ktmt@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808053946hieu1.jpg', '023', NULL, NULL, '02028', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(29, '02029', ' Trịnh Văn Loan', '1977-02-08', 0, 'Hà Nội', '0903277732', 'loantv@gmail.com', 'Phó giáo sư', '', 'Giảng viên', '20160808054219loan1.jpg', '023', NULL, NULL, '02029', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(30, '02030', ' Đào Anh Hiển', '1975-02-11', 0, 'Hưng Yên', ' 0983264436', 'hienda@gmail.com', '', 'Thạc sĩ', 'Giảng viên', '20160808054633Dao Anh Hien.jpg', '021', NULL, NULL, '02030', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(31, 'ưeresresf', 'nguyen van duoc', '2017-03-14', 1, 'Thôn Xã Tây Đô Huyện Hưng Hà Tỉnh Thái Bình', '01659020898', 'duocnguyenit1994@gmail.com', 'GS1', 'TSS', 'TK', '12351306_597928967023215_1423251314_n3.jpg', '071', 'kt', '0711', '01659020898', '02001', 1, '2017-03-13 14:00:34', '2017-03-13 14:00:34'),
(32, '122105', 'admin', '2017-03-08', 1, 'Thôn Xã Tây Đô Huyện Hưng Hà Tỉnh Thái Bình', '01659020898', 'duocnguyenit1994@gmail.com', ' Giáo sư', ' Thạc sĩ', ' Giáo vụ Khoa', '11081292_767774276675783_1871799596268246969_n.jpg', '023', '06', '0411', '12345678', '02001', 1, '2017-03-13 14:10:18', '2017-03-13 14:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `bomon`
--

CREATE TABLE `bomon` (
  `id` int(11) NOT NULL,
  `mabomon` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenbomon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `viettat` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `makhoa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithaotac` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bomon`
--

INSERT INTO `bomon` (`id`, `mabomon`, `tenbomon`, `viettat`, `makhoa`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`) VALUES
(1, '021', 'Công nghệ phần mềm', 'CNPM', '02', '02001', 1, '2015-12-28 17:00:00', '2016-08-20 17:00:00'),
(2, '022', 'Mạng máy tính và truyền thông', 'MMT&TT', '02', '02001', 1, '2015-12-28 17:00:00', '2016-08-20 17:00:00'),
(3, '023', 'Kỹ thuật máy tính', 'KTMT', '02', '02001', 1, '2015-12-28 17:00:00', '2016-08-20 17:00:00'),
(4, '079', '  BM Cơ bản', 'CB', '03', '02001', 0, '2016-06-03 17:00:00', '2016-08-20 17:00:00'),
(5, '041', 'BM Giáo dục thể chất', 'GDTC', '04', '02001', 0, '2016-06-03 17:00:00', '2016-08-20 17:00:00'),
(6, '051', ' BM Ngoại Ngữ', 'NN', '05', '02001', 0, '2016-06-03 17:00:00', '2016-08-20 17:00:00'),
(7, '074', '  BM Lý luận chính trị', 'LLCT', '06', '02001', 0, '2016-06-03 17:00:00', '2016-08-20 17:00:00'),
(8, '071', '  BM Hóa môi trường và Kinh tế', 'HMT', '07', '02001', 0, '2016-06-03 17:00:00', '2016-08-20 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `id` int(11) NOT NULL,
  `machucvu` varchar(5) DEFAULT NULL,
  `tenchucvu` varchar(50) DEFAULT NULL,
  `nguoithaotac` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`id`, `machucvu`, `tenchucvu`, `nguoithaotac`, `created_at`, `updated_at`) VALUES
(1, 'GVQ', 'Giáo viên', '02001', '2017-03-13 08:33:26', '2017-03-13 08:33:26'),
(2, 'TK', ' Trưởng khoa', '02001', '2017-03-13 09:50:28', '2017-03-13 09:50:28'),
(3, 'PTK', ' Phó Trưởng khoa', '02001', '2017-03-13 09:50:48', '2017-03-13 09:50:48'),
(4, 'GVK', ' Giáo vụ Khoa', '02001', '2017-03-13 09:51:21', '2017-03-13 09:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `chuyennganh`
--

CREATE TABLE `chuyennganh` (
  `id` int(11) NOT NULL,
  `machuyennganh` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenchuyennganh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mabomon` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithaotac` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuyennganh`
--

INSERT INTO `chuyennganh` (`id`, `machuyennganh`, `tenchuyennganh`, `mabomon`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`) VALUES
(1, '546546', '  fghfghfgh', '071', '02001', 1, '2017-03-09 20:13:58', '2017-03-09 20:13:58'),
(2, '34534', ' dfgdfg', '071', '02001', 1, '2017-03-09 21:16:42', '2017-03-09 21:16:42'),
(3, '0211', 'Công nghệ phần mềm', '021', '02001', 0, '2016-06-06 17:00:00', '2016-08-20 17:00:00'),
(4, '0221', 'Mạng máy tính và truyền thông', '022', '02001', 0, '2016-06-06 17:00:00', '2016-08-20 17:00:00'),
(5, '0231', 'Kỹ thuật máy tính', '023', '02001', 0, '2016-06-06 17:00:00', '2016-08-20 17:00:00'),
(6, '0311', 'CN Cơ bản', '031', '02001', 0, '2016-06-24 17:00:00', '2016-08-20 17:00:00'),
(7, '0411', 'CN Giáo dục Thể chất', '041', '02001', 0, '2016-06-24 17:00:00', '2016-08-20 17:00:00'),
(8, '0511', 'CN Ngoại Ngữ', '051', '02001', 0, '2016-06-24 17:00:00', '2016-08-20 17:00:00'),
(9, '0611', 'CN Lý luận chính trị', '061', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00'),
(10, '0711', 'CN Hóa môi trường và Kinh tế', '071', '02001', 0, '2016-06-24 17:00:00', '2016-08-20 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hedaotao`
--

CREATE TABLE `hedaotao` (
  `id` int(11) NOT NULL,
  `mahedaotao` varchar(10) DEFAULT NULL,
  `tenhedaotao` varchar(255) DEFAULT NULL,
  `soky` tinyint(10) DEFAULT NULL,
  `hs2` tinyint(5) DEFAULT NULL,
  `nguoithaotac` varchar(6) DEFAULT NULL,
  `hienthi` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hedaotao`
--

INSERT INTO `hedaotao` (`id`, `mahedaotao`, `tenhedaotao`, `soky`, `hs2`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`) VALUES
(1, '1', 'Đại học chính quy', 8, 1, '02001', 1, '2015-12-25 17:00:00', '2015-12-28 17:00:00'),
(2, '2', 'Đai học liên thông', 4, 1, '02001', 0, '2016-05-31 17:00:00', '2016-08-20 17:00:00'),
(3, '5', 'Cao đẳng nghề', 4, 1, '02001', 1, '2015-12-28 17:00:00', '2015-12-28 17:00:00'),
(4, '6', 'Cao đẳng chính quy', 6, 1, '02001', 1, '2015-12-28 17:00:00', '2015-12-28 17:00:00'),
(5, '7', 'Thạc sĩ', 3, 1, '02001', 0, '2016-05-16 17:00:00', '2016-08-20 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hocham`
--

CREATE TABLE `hocham` (
  `id` int(5) NOT NULL,
  `mahocham` varchar(5) DEFAULT NULL,
  `tenhocham` varchar(100) DEFAULT NULL,
  `nguoithaotac` varchar(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hocham`
--

INSERT INTO `hocham` (`id`, `mahocham`, `tenhocham`, `nguoithaotac`, `created_at`, `updated_at`) VALUES
(1, 'GS1', ' Giáo sư', '02001', '2017-03-13 06:59:10', '2017-03-13 06:59:10'),
(2, 'THS1', 'Thạc sĩ 1', '02001', '2017-03-13 07:03:59', '2017-03-13 07:03:59'),
(3, 'NCS', ' Nghiên cứu sinh', '02001', '2017-03-13 09:53:27', '2017-03-13 09:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `id` int(11) NOT NULL,
  `makhoa` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhoa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoithaotac` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`id`, `makhoa`, `tenkhoa`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`) VALUES
(2, '03', 'Khoa cơ bản', '02001', 0, '2016-06-03 17:00:00', '2016-08-20 17:00:00'),
(3, '04', 'Khoa Giáo dục thể chất', '02001', 0, '2016-06-03 17:00:00', '2016-08-20 17:00:00'),
(4, '05', 'Khoa Ngoại Ngữ', '02001', 0, '2016-06-03 17:00:00', '2016-08-20 17:00:00'),
(5, '06', '  Khoa Lý luận chính trị 1', '02001', 1, '2016-06-03 17:00:00', '2016-08-20 17:00:00'),
(6, '07', 'Khoa Hóa môi trường và Kinh tế', '02001', 0, '2016-06-03 17:00:00', '2016-08-20 17:00:00'),
(8, '10', '    Khoa Môi Trường', '02001', 1, '2017-03-09 12:57:26', '2017-03-09 12:57:26'),
(9, 'kt', ' kinh te', '02001', 1, '2017-03-12 16:21:35', '2017-03-12 16:21:35');

-- --------------------------------------------------------

--
-- Table structure for table `loaimon`
--

CREATE TABLE `loaimon` (
  `id` int(5) NOT NULL,
  `maloaimon` varchar(10) DEFAULT NULL,
  `tenloaimon` varchar(255) DEFAULT NULL,
  `nguoithaotac` varchar(10) DEFAULT NULL,
  `quydoi` tinyint(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaimon`
--

INSERT INTO `loaimon` (`id`, `maloaimon`, `tenloaimon`, `nguoithaotac`, `quydoi`, `created_at`, `updated_at`) VALUES
(1, '1', 'Lý thuyết', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 17:00:00'),
(2, '2', 'Lý thuyết_thực hành', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 17:00:00'),
(3, '3', 'Đồ án môn học', '02001', 2, '0000-00-00 00:00:00', '2016-08-20 17:00:00'),
(4, '4', 'Đồ án tốt nghiệp', '02001', 12, '0000-00-00 00:00:00', '2016-08-20 17:00:00'),
(5, '5', 'Thực tập tốt nghiệp', '02001', 2, '0000-00-00 00:00:00', '2016-08-20 17:00:00'),
(6, '6', 'Thực tập xí nghiệp', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 17:00:00'),
(7, '8', 'Thực tập nhận thức công nghệ', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 17:00:00'),
(8, '9', 'Thực tập sư phạm', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 17:00:00'),
(9, '10', 'Quản lý phòng máy', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 17:00:00'),
(10, '11', 'Bồi dưỡng giảng viên mới', '02001', 20, '0000-00-00 00:00:00', '2016-08-20 17:00:00'),
(11, '12', 'Viết báo', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 17:00:00'),
(12, '13', 'Viết sách', '02001', 0, '0000-00-00 00:00:00', '2016-08-20 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `id` int(11) NOT NULL,
  `malop` varchar(10) DEFAULT NULL,
  `mahedaotao` varchar(4) DEFAULT NULL,
  `tenlop` varchar(255) DEFAULT NULL,
  `siso` int(10) DEFAULT NULL,
  `machuyennganh` varchar(10) DEFAULT NULL,
  `gvcn` varchar(10) DEFAULT NULL,
  `nguoithaotac` varchar(10) DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`id`, `malop`, `mahedaotao`, `tenlop`, `siso`, `machuyennganh`, `gvcn`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`) VALUES
(1, '101121', '1', 'TK10.1', 58, '0211', '02030', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(2, '101122', '1', 'TK10.2', 34, '0221', '02014', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(3, '101123', '1', 'TK10.3', 18, '0231', '02021', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(4, '101124', '1', 'TK10.4', 15, '0211', '02003', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(5, '101131', '1', 'TK11.1', 58, '0211', '02005', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(6, '101132', '1', 'TK11.2', 48, '0221', '02011', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(7, '101133', '1', 'TK11.3', 20, '0231', '02028', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(8, '101134', '1', 'TK11.4', 33, '0211', '02007', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(9, '101135', '1', 'TK11.5', 61, '0211', '02004', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(10, '101141', '1', 'TK12.1', 31, '0211', '02006', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(11, '101142', '1', 'TK12.2', 40, '0221', '02013', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(12, '101143', '1', 'TK12.3', 18, '0231', '02024', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(13, '101144', '1', 'TK12.4', 23, '0211', '02002', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(15, '101146', '1', 'TK12.6', 15, '0211', '02006', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(16, '101151', '1', 'TK13.1', 39, '0211', '02003', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(17, '101152', '1', 'TK13.2', 60, '0221', '02016', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(18, '101153', '1', 'TK13.3', 55, '0231', '02025', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(19, '101154', '1', 'TK13.4', 40, '0211', '02004', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(20, '201141', '2', 'LC42.1', 4, '0211', '02004', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(21, '201151', '2', 'LC43.1', 15, '0211', '02005', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(22, ' 601131', '004', ' TK42.1', 16, '0211', '02004', '02001', 1, '2016-08-07 17:00:00', '2016-08-07 17:00:00'),
(23, '601141', '6', 'TK43.1', 12, '0211', '02007', '02001', 0, '2016-08-07 17:00:00', '2016-08-07 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `id` int(11) NOT NULL,
  `mamonhoc` varchar(10) DEFAULT NULL,
  `tenmonhoc` varchar(255) DEFAULT NULL,
  `mahedaotao` varchar(10) DEFAULT NULL,
  `mabomon` varchar(5) DEFAULT NULL,
  `soTCLT` tinyint(5) DEFAULT NULL,
  `soTCTH` tinyint(5) DEFAULT NULL,
  `machuyennganh` varchar(10) DEFAULT NULL,
  `maloaimon` varchar(10) DEFAULT NULL,
  `TCM` varchar(5) DEFAULT NULL,
  `nguoithaotac` varchar(10) DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`id`, `mamonhoc`, `tenmonhoc`, `mahedaotao`, `mabomon`, `soTCLT`, `soTCTH`, `machuyennganh`, `maloaimon`, `TCM`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`) VALUES
(1, '021101', 'Tin học đại cương', '1', NULL, 2, 1, '0211', '2', 'ĐC', '02001', 0, '2016-08-11 17:00:00', '2016-08-11 17:00:00'),
(2, '021102', 'Định hướng nghề nghiệp', '1', NULL, 2, 0, '0211', '1', 'CSN', '02001', 0, '2016-08-11 17:00:00', '2016-08-11 17:00:00'),
(3, '021103', 'Cơ sở kỹ thuật lập trình', '1', NULL, 3, 1, '0211', '2', 'CSN', '02001', 0, '2016-08-11 17:00:00', '2016-08-11 17:00:00'),
(4, '021104', 'Kiến trúc máy tính', '1', NULL, 3, 0, '0211', '1', 'CSN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(5, '021105', 'Cơ sở dữ liệu', '1', NULL, 3, 1, '0211', '2', 'CSN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(6, '021106', 'Lập trình hướng đối tượng', '1', NULL, 2, 1, '0211', '2', 'CSN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(7, '021107', 'Đồ án 1', '1', NULL, 0, 4, '0211', '3', 'TH', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(8, '021108', 'Cấu trúc dữ liệu và giải thuật', '1', NULL, 2, 1, '0211', '2', 'CSN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(9, '021109', 'Mạng máy tính', '1', NULL, 2, 1, '0211', '2', 'CSN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(10, '021110', 'Hệ quản trị cơ sở dữ liệu', '1', NULL, 2, 1, '0211', '2', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(11, '021111', 'Phân tích và thiết kế phần mềm', '1', NULL, 2, 1, '0211', '2', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(12, '021112', 'Toán rời rạc', '1', NULL, 4, 0, '0211', '1', 'CSN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(13, '021113', 'Công nghệ .NET', '1', NULL, 2, 1, '0211', '2', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(14, '021114', 'Đồ án 2', '1', NULL, 0, 4, '0211', '3', 'TH', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(15, '021115', 'Thiết kế và đánh giá thuật toán', '1', NULL, 2, 0, '0211', '1', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(16, '021116', 'Công nghệ web và ứng dụng', '1', NULL, 2, 1, '0211', '2', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(17, '021117', 'Phân tích hướng đối tượng', '1', NULL, 2, 1, '0211', '3', 'ĐC', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(18, '021118', 'Đồ án 3', '1', NULL, 0, 4, '0211', '3', 'TH', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(19, '021119', 'Lập trình mạng', '1', NULL, 2, 1, '0211', '2', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(20, '021120', 'Thực tập xí nghiệp', '1', NULL, 0, 6, '0211', '6', 'XN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(21, '021121', 'Đồ án 4', '1', NULL, 0, 4, '0211', '3', 'TH', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(22, '021122', 'Trí tuệ nhân tạo', '1', NULL, 2, 0, '0211', '1', 'CSN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(23, '021123', 'Kiểm thử phần mềm', '1', NULL, 2, 1, '0211', '2', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(24, '021124', 'Lập trình mobile', '1', NULL, 3, 1, '0211', '1', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(25, '021125', 'Đồ án 5', '1', NULL, 0, 4, '0211', '3', 'TH', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(26, '021126', 'Thực tập tốt nghiệp', '1', NULL, 0, 3, '0211', '5', 'TH', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(27, '021127', 'Đồ án TN', '1', NULL, 0, 5, '0211', '4', 'TN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(28, '022101', 'Tin học đại cương', '1', NULL, 2, 1, '0221', '2', 'ĐC', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(29, '022102', 'Định hướng nghề nghiệp', '1', NULL, 2, 0, '0221', '1', 'CSN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(30, '022103', 'Cơ sở kỹ thuật lập trình', '1', NULL, 3, 1, '0221', '2', 'CSN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(31, '022104', 'Kiến trúc máy tính', '1', NULL, 3, 0, '0221', '1', 'CSN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(32, '022105', 'Cấu trúc dữ liệu và giải thuật', '1', NULL, 2, 1, '0221', '2', 'CSN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(33, '022106', 'Cơ sở dữ liệu', '1', NULL, 3, 1, '0221', '2', 'CSN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(34, '022107', 'Lập trình hướng đối tượng', '1', NULL, 2, 1, '0221', '2', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(35, '022108', 'Đồ án 1', '1', NULL, 0, 4, '0221', '3', 'TH', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(36, '022109', 'Mạng máy tính', '1', NULL, 2, 1, '0221', '1', 'CSN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(37, '022110', 'Thiết kế và đánh giá thuật toán', '1', NULL, 2, 0, '0221', '1', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(38, '022111', 'Hệ quản trị cơ sở dữ liệu', '1', NULL, 2, 1, '0221', '2', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(39, '022112', 'Phân tích và thiết kế phần mềm', '1', NULL, 2, 1, '0221', '2', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(40, '022113', 'Đồ án 2', '1', NULL, 0, 4, '0221', '3', 'TH', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(41, '022114', 'Bảo mật máy tính và mạng', '1', NULL, 3, 0, '0221', '1', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(42, '022115', 'Thiết kế mạng doạnh nghiệp', '1', NULL, 2, 1, '0221', '2', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(43, '022116', 'Công nghệ web và ứng dụng', '1', NULL, 2, 1, '0221', '2', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(44, '022117', 'Đồ án 3', '1', NULL, 0, 4, '0221', '3', 'TH', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(45, '022118', 'Quản trị mạng máy tính', '1', NULL, 2, 1, '0221', '2', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(46, '022119', 'Đồ án 4', '1', NULL, 0, 4, '0221', '3', 'TH', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(47, '022120', 'Thực tập xí nghiệp', '1', NULL, 0, 6, '0221', '6', 'XN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(48, '022121', 'Thương mại điện tử', '1', NULL, 3, 1, '0221', '2', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(49, '022122', 'Lập trình mạng', '1', NULL, 2, 1, '0221', '2', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(50, '022123', 'Hệ điều hành mã nguồn mở', '1', NULL, 2, 1, '0221', '2', 'CN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(51, '022124', 'Đồ án 5', '1', NULL, 0, 4, '0221', '3', 'TH', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(52, '022125', 'Thực tập tốt nghiệp', '1', NULL, 0, 3, '0221', '5', 'TH', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(53, '022126', 'Đồ án TN', '1', NULL, 0, 5, '0221', '5', 'TN', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(54, '022127', 'Toán rời rạc', '1', NULL, 4, 0, '0221', '1', 'CSN', '02001', 0, '2016-08-17 17:00:00', '2016-08-17 17:00:00'),
(55, '023101', 'Tin học đại cương', '1', NULL, 2, 1, '0231', '2', 'ĐC', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(56, '023102', 'Định hướng nghề nghiệp', '1', NULL, 2, 0, '0231', '1', 'CSN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(57, '023103', 'Cơ sở kỹ thuật lập trình', '1', NULL, 3, 1, '0231', '2', 'CSN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(58, '023104', 'Kiến trúc máy tính', '1', NULL, 3, 0, '0231', '1', 'CSN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(59, '023105', 'Cấu trúc dữ liệu và giải thuật', '1', NULL, 2, 1, '0231', '2', 'CSN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(60, '023106', 'Cơ sở dữ liệu', '1', NULL, 3, 1, '0231', '2', 'CSN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(61, '023107', 'Lập trình hướng đối tượng', '1', NULL, 2, 1, '0231', '2', 'CN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(62, '023108', 'Đồ án 1', '1', NULL, 0, 4, '0231', '3', 'TH', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(63, '023109', 'Mạng máy tính', '1', NULL, 2, 1, '0231', '2', 'CSN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(64, '023110', 'Vi xử lý', '1', NULL, 2, 1, '0231', '2', 'CN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(65, '023111', 'Kỹ thuật điện tử số', '1', NULL, 3, 2, '0231', '2', 'CN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(66, '023112', 'Phân tích và thiết kế phần mềm', '1', NULL, 2, 1, '0231', '1', 'CN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(67, '023113', 'Đồ án 2', '1', NULL, 0, 4, '0231', '3', 'TH', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(68, '023114', 'Lập trình PLC', '1', NULL, 3, 1, '0231', '1', 'CN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(69, '023115', 'Hệ điều hành', '1', NULL, 2, 0, '0231', '2', 'CN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(70, '023116', 'Đồ án 3', '1', NULL, 0, 4, '0231', '3', 'TH', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(71, '023117', 'Lập trình điều khiển thiết bị', '1', NULL, 2, 1, '0231', '2', 'CN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(72, '023118', 'Kỹ thuật điều khiển tự động', '1', NULL, 2, 0, '0231', '1', 'CN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(73, '023119', 'Thực tập xí nghiệp', '1', NULL, 0, 6, '0231', '6', 'XN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(74, '023120', 'Đồ án 4', '1', NULL, 0, 4, '0231', '3', 'TH', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(75, '023121', 'Lập trình hệ thống', '1', NULL, 2, 1, '0231', '2', 'CN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(76, '023122', 'Lập trình vi điều khiển', '1', NULL, 4, 1, '0231', '2', 'CN', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(77, '023123', 'Đồ án 5', '1', NULL, 0, 4, '0231', '3', 'TH', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(78, '023124', 'Thực tập tốt nghiệp', '1', NULL, 0, 3, '0231', '5', 'TH', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(79, '023125', 'Đồ án TN', '1', NULL, 0, 5, '0231', '4', 'ĐC', '02001', 0, '2016-08-14 17:00:00', '2016-08-14 17:00:00'),
(80, '023126', 'Thiết kế và đánh giá thuật toán', '1', NULL, 2, 1, '0231', '1', 'CN', '02001', 0, '2016-08-17 17:00:00', '2016-08-17 17:00:00'),
(81, '023127', 'Toán rời rạc', '1', NULL, 4, 0, '0231', '1', 'ĐC', '02001', 0, '2016-08-17 17:00:00', '2016-08-17 17:00:00'),
(82, '031101', 'Toán cao cấp 1', '1', NULL, 2, 0, '0311', '1', 'ĐC', '02001', 0, '2016-08-11 17:00:00', '2016-08-11 17:00:00'),
(83, '031102', 'Toán cao cấp 2', '1', NULL, 2, 0, '0311', '1', 'ĐC', '02001', 0, '2016-08-11 17:00:00', '2016-08-11 17:00:00'),
(84, '031103', 'Toán cao cấp 3', '1', NULL, 2, 0, '0311', '1', 'ĐC', '02001', 0, '2016-08-11 17:00:00', '2016-08-11 17:00:00'),
(85, '031104', 'Vật lý đại cương 1', '1', NULL, 3, 1, '0311', '2', 'ĐC', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00'),
(86, '031105', 'Xác suất thống kê', '1', NULL, 2, 0, '0311', '1', 'ĐC', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00'),
(87, '031106', 'Hóa học đại cương', '1', NULL, 2, 0, '0311', '1', 'ĐC', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00'),
(88, '031107', 'Vật lý đại cương 2', '1', NULL, 2, 0, '0311', '1', 'ĐC', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(89, '031108', 'Phương pháp tính', '1', NULL, 2, 0, '0311', '1', 'ĐC', '02001', 0, '2016-08-13 17:00:00', '2016-08-13 17:00:00'),
(90, '041101', 'Giáo dục thể chất 1', '1', NULL, 1, 0, '0411', '1', 'ĐC', '02001', 0, '2016-08-11 17:00:00', '2016-08-11 17:00:00'),
(91, '041102', 'Giáo dục thể chất 2', '1', NULL, 1, 0, '0411', '1', 'ĐC', '02001', 0, '2016-08-11 17:00:00', '2016-08-11 17:00:00'),
(92, '041103', 'Giáo dục Quốc phòng', '1', NULL, 2, 1, '0411', '1', 'ĐC', '02001', 0, '2016-08-11 17:00:00', '2016-08-11 17:00:00'),
(93, '041104', 'Giáo dục thể chất 3', '1', NULL, 1, 0, '0411', '1', 'ĐC', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00'),
(94, '041105', 'Giáo dục thể chất 4', '1', NULL, 1, 0, '0411', '1', 'ĐC', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00'),
(95, '041106', 'Giáo dục thể chất 5', '1', NULL, 1, 0, '0411', '1', 'ĐC', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00'),
(96, '051101', 'Tiếng Anh -TOEIC 1', '1', NULL, 2, 0, '0511', '1', 'ĐC', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00'),
(97, '051102', 'Tiếng Anh -TOEIC 2', '1', NULL, 3, 0, '0511', '1', 'ĐC', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00'),
(98, '051103', 'Tiếng Anh -TOEIC 3', '1', NULL, 2, 0, '0511', '1', 'ĐC', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00'),
(99, '061101', 'Pháp luật đại cương', '1', NULL, 2, 0, '0611', '1', 'ĐC', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00'),
(100, '061102', 'Những nguyên lý cơ bản của chủ nghĩa Mác-Lênin 1', '1', NULL, 2, 0, '0611', '1', 'ĐC', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00'),
(101, '061103', 'Những nguyên lý cơ bản của chủ nghĩa Mác-Lênin 2', '1', NULL, 3, 0, '0611', '1', 'ĐC', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00'),
(102, '061104', 'Tư tưởng Hồ Chí Minh', '1', NULL, 2, 0, '0611', '1', 'ĐC', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00'),
(103, '061105', 'Đường Lối cách mạng của Đảng Cộng sản Việt Nam', '1', NULL, 3, 0, '0611', '1', 'ĐC', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00'),
(104, '071101', 'Đại cương kinh tế và môi trường', '1', NULL, 2, 0, '0711', '1', 'ĐC', '02001', 0, '2016-08-12 17:00:00', '2016-08-12 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `trinhdo`
--

CREATE TABLE `trinhdo` (
  `id` int(11) NOT NULL,
  `matrinhdo` varchar(5) DEFAULT NULL,
  `tentrinhdo` varchar(50) DEFAULT NULL,
  `nguoithaotac` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trinhdo`
--

INSERT INTO `trinhdo` (`id`, `matrinhdo`, `tentrinhdo`, `nguoithaotac`, `created_at`, `updated_at`) VALUES
(1, 'DH1', ' Đại Học', '02001', '2017-03-13 07:33:38', '2017-03-13 07:33:38'),
(3, 'TS', ' Thạc sĩ', '02001', '2017-03-13 09:52:31', '2017-03-13 09:52:31'),
(4, 'TSS', ' Tiến Sĩ', '02001', '2017-03-13 09:52:50', '2017-03-13 09:52:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maGV` (`maGV`);

--
-- Indexes for table `bomon`
--
ALTER TABLE `bomon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mabomon` (`mabomon`);

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chuyennganh`
--
ALTER TABLE `chuyennganh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `machuyennganh` (`machuyennganh`);

--
-- Indexes for table `hedaotao`
--
ALTER TABLE `hedaotao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hocham`
--
ALTER TABLE `hocham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `makhoa` (`makhoa`);

--
-- Indexes for table `loaimon`
--
ALTER TABLE `loaimon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `malop` (`malop`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trinhdo`
--
ALTER TABLE `trinhdo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `bomon`
--
ALTER TABLE `bomon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `chuyennganh`
--
ALTER TABLE `chuyennganh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hedaotao`
--
ALTER TABLE `hedaotao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hocham`
--
ALTER TABLE `hocham`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `khoa`
--
ALTER TABLE `khoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `loaimon`
--
ALTER TABLE `loaimon`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `lop`
--
ALTER TABLE `lop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `trinhdo`
--
ALTER TABLE `trinhdo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
