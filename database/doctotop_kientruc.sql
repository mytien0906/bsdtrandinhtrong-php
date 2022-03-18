-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th9 26, 2018 lúc 01:35 PM
-- Phiên bản máy phục vụ: 10.0.36-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doctotop_kientruc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `tm` int(11) NOT NULL,
  `ip` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0.0.0.0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `counter`
--

INSERT INTO `counter` (`id`, `tm`, `ip`) VALUES
(1, 1537516184, '::1'),
(2, 1537517558, '::1'),
(3, 1537518549, '::1'),
(4, 1537519765, '::1'),
(5, 1537839746, '::1'),
(6, 1537844408, '::1'),
(7, 1537852181, '::1'),
(8, 1537853198, '::1'),
(9, 1537854260, '::1'),
(10, 1537855393, '::1'),
(11, 1537856608, '::1'),
(12, 1537857600, '::1'),
(13, 1537858717, '::1'),
(14, 1537859053, '113.161.89.144'),
(15, 1537877601, '27.75.44.132'),
(16, 1537879590, '::1'),
(17, 1537880823, '::1'),
(18, 1537882917, '::1'),
(19, 1537883837, '::1'),
(20, 1537884801, '::1'),
(21, 1537885761, '::1'),
(22, 1537886683, '::1'),
(23, 1537887596, '::1'),
(24, 1537888496, '::1'),
(25, 1537889457, '27.75.44.132'),
(26, 1537899407, '123.21.161.145'),
(27, 1537928861, '58.187.175.5'),
(28, 1537929813, '58.187.175.5'),
(29, 1537931304, '58.187.175.5'),
(30, 1537932434, '58.187.175.5'),
(31, 1537934379, '58.187.175.5'),
(32, 1537935302, '58.187.175.5'),
(33, 1537936334, '58.187.175.5'),
(34, 1537937982, '58.187.175.5'),
(35, 1537938214, '27.64.44.243'),
(36, 1537938988, '113.161.89.144'),
(37, 1537939407, '58.187.175.5'),
(38, 1537940309, '58.187.175.5'),
(39, 1537941623, '27.68.133.131'),
(40, 1537942946, '113.161.89.144');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_album`
--

CREATE TABLE `table_album` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_list` int(11) NOT NULL,
  `noibat` int(11) NOT NULL,
  `top_nb` tinyint(2) NOT NULL,
  `type` varchar(100) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_album`
--

INSERT INTO `table_album` (`id`, `id_list`, `noibat`, `top_nb`, `type`, `photo`, `thumb`, `ten_vi`, `tenkhongdau`, `title`, `keywords`, `description`, `mota_vi`, `noidung_vi`, `ten_en`, `mota_en`, `noidung_en`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `luotxem`) VALUES
(10, 0, 1, 0, 'album', 'aps19-7384.jpg', 'aps19-7384_570x420.jpg', 'Album Cưới tại Studio', 'album-cuoi-tai-studio', '', '', '', '<p><span style=\"font-family:tahoma,geneva,sans-serif;\"><span style=\"font-size:16px;\">Nếu bạn là người yêu thích chụp ảnh phong cách nhẹ nhàng, sang trọng kiểu Hàn Quốc thì ảnh viện áo cưới TM sẽ giúp bạn biến ước mơ đó thành hiện thực với chi phí hợp lý. Chúng tôi có hàng trăm mẫu trang phục cưới ngoại nhập để bạn lựa chọn phù hợp với vóc dáng của mình. Với những cách trang điểm làm tóc đơn giản, nhẹ nhàng sang trọng kết hợp đạo cụ cùng với đội ngũ nhiếp ảnh gia có tay nghề giỏi sẽ giúp bạn thực hiện cuốn abum đẹp, cá tính, thể hiện được những gu thẩm mỹ, những câu chuyện tình yêu mà bạn muốn lưu lại thể hiện trong cuốn abum đó…” </span></span></p>\r\n', '', '', '', '', 1, 1, 1535798758, 1535799065, 0),
(11, 0, 1, 0, 'album', 'chuphinhcuoidep114-3174.jpg', 'chuphinhcuoidep114-3174_570x420.jpg', 'Album ảnh cưới Nha Trang', 'album-anh-cuoi-nha-trang', '', '', '', '<p><span style=\"font-family:tahoma,geneva,sans-serif;\"><span style=\"font-size:16px;\">Thành phố biển Nha Trang xinh đẹp với rất nhiều “stuido ngoài trời” mất phí và cũng không ít điểm miễn phí hoàn toàn. Dưới đây là các địa điểm chụp ảnh cưới tuyệt đẹp mà không hề mất phí, sẽ giúp tiết kiệm được một khoản không nhỏ cho các bạn đó, tha hồ tạo dáng đi nhé. Dưới đây là trọn bộ album hình cưới Nha Trang do êkip nhiếp ảnh tại Ảnh Viện áo cưới TM thực hiện.</span></span></p>\r\n', '', '', '', '', 1, 1, 1535798875, 1535799120, 0),
(12, 0, 1, 0, 'album', '2061589919821543820305408382129944284874903o-7523.jpg', '2061589919821543820305408382129944284874903o-7523_570x420.jpg', 'Album cưới Hồ Cốc Vũng Tàu', 'album-cuoi-ho-coc-vung-tau', '', '', '', '<p><span style=\"font-size:18px;\"><span style=\"font-family:tahoma,geneva,sans-serif;\"><span style=\"font-size:16px;\">Hồ Cốc – Vũng Tàu Là một trong những địa danh được thiên nhiên ưu ái ban tặng những khung cảnh mang vẻ đẹp vừa hoang sơ vừa mộc mạc, Biển Hồ Cốc với hình vòng cung uốn lượn nằm bên cạnh những tán lá xanh của rừng nguyên sinh từ lâu đã trở thành những địa điểm được đông đảo các cặp đôi cô dâu chú rể ưa thích .Nước biển trong xanh, tung bọt trắng xóa khi từng con sóng đua nhau xô vài những bãi đá nằm chắn ngang, khoảnh khắc này trong biển Hồ Cốc như thiên đường mờ ảo dưới từng làn khói mỏng.</span></span></span></p>\r\n', '', '', '', '', 1, 1, 1535798973, 1535799199, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_album_list`
--

CREATE TABLE `table_album_list` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `quangcao` varchar(255) NOT NULL,
  `quangcao_thumb` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_album_list`
--

INSERT INTO `table_album_list` (`id`, `type`, `ten_vi`, `ten_en`, `name_vi`, `name_en`, `tenkhongdau`, `quangcao`, `quangcao_thumb`, `links`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(2, 'album', 'echo cccc', 'echo xxxx', '', '', 'echo-cccc', '', '', '', '', '', '', '', '', 1, 1, 1525245156, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_album_photo`
--

CREATE TABLE `table_album_photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_album` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(1024) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_album_photo`
--

INSERT INTO `table_album_photo` (`id`, `id_album`, `type`, `photo`, `thumb`, `ten`, `mota`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(32, 4, 'album', '1473845084147366642722385-2622.jpg', '1473845084147366642722385-2622_370x234.jpg', '', '', 0, 1, 0, 0),
(31, 4, 'album', '1434472511601333407278097994605902499388654n-7006.jpg', '1434472511601333407278097994605902499388654n-7006_370x234.jpg', '', '', 0, 1, 0, 0),
(28, 4, 'album', '2127415-3477.jpg', '2127415-3477_370x234.jpg', '', '', 0, 1, 0, 0),
(29, 4, 'album', '172225exciter13-2434.jpg', '172225exciter13-2434_370x234.jpg', '', '', 0, 1, 0, 0),
(30, 4, 'album', '3821278xe-9657.jpg', '3821278xe-9657_370x234.jpg', '', '', 0, 1, 0, 0),
(17, 1, 'album', 'a-1972.jpg', 'a-1972_370x234.jpg', '', '', 1, 1, 0, 0),
(18, 1, 'album', 'b-7233.jpg', 'b-7233_370x234.jpg', '', '', 2, 1, 0, 0),
(19, 1, 'album', 'c-1122.jpg', 'c-1122_370x234.jpg', '', '', 2, 1, 0, 0),
(20, 2, 'album', 'imagetechz1470879646-2785.jpg', 'imagetechz1470879646-2785_370x234.jpg', '', '', 1, 1, 0, 0),
(21, 2, 'album', 'suutamnhungchiecexciter150doitdunghang27142535250154f527358685e-4110.jpg', 'suutamnhungchiecexciter150doitdunghang27142535250154f527358685e-4110_370x234.jpg', '', '', 2, 1, 0, 0),
(22, 2, 'album', 'temexciter150dennhamchixanh-5984.jpg', 'temexciter150dennhamchixanh-5984_370x234.jpg', '', '', 3, 1, 0, 0),
(23, 2, 'album', 'temxeexciter150camapxanhtim-999.jpg', 'temxeexciter150camapxanhtim-999_370x234.jpg', '', '', 4, 1, 0, 0),
(80, 5, 'album', '28-7810.jpg', '28-7810_1100x800.jpg', '', '', 0, 1, 0, 0),
(79, 5, 'album', '27-3005.jpg', '27-3005_1100x800.jpg', '', '', 0, 1, 0, 0),
(76, 5, 'album', '24-738.jpg', '24-738_1100x800.jpg', '', '', 0, 1, 0, 0),
(77, 5, 'album', '25-3464.jpg', '25-3464_1100x800.jpg', '', '', 0, 1, 0, 0),
(78, 5, 'album', '26-5096.jpg', '26-5096_1100x800.jpg', '', '', 0, 1, 0, 0),
(72, 6, 'album', '8-2723.jpg', '8-2723_1100x800.jpg', '', '', 0, 1, 0, 0),
(73, 6, 'album', '9-330.jpg', '9-330_1100x800.jpg', '', '', 0, 1, 0, 0),
(74, 6, 'album', '10-7135.jpg', '10-7135_1100x800.jpg', '', '', 0, 1, 0, 0),
(75, 6, 'album', '11-8217.jpg', '11-8217_1100x800.jpg', '', '', 0, 1, 0, 0),
(64, 7, 'album', '1-9704.jpg', '1-9704_1100x800.jpg', '', '', 1, 1, 0, 0),
(65, 7, 'album', '2-6693.jpg', '2-6693_1100x800.jpg', '', '', 2, 1, 0, 0),
(66, 7, 'album', '3-2433.jpg', '3-2433_1100x800.jpg', '', '', 3, 1, 0, 0),
(67, 7, 'album', '4-7405.jpg', '4-7405_1100x800.jpg', '', '', 4, 1, 0, 0),
(81, 8, 'album', '1-8147.jpg', '1-8147_1100x800.jpg', '', '', 0, 1, 0, 0),
(82, 8, 'album', '2-2164.jpg', '2-2164_1100x800.jpg', '', '', 0, 1, 0, 0),
(83, 8, 'album', '3-7252.jpg', '3-7252_1100x800.jpg', '', '', 0, 1, 0, 0),
(84, 8, 'album', '4-997.jpg', '4-997_1100x800.jpg', '', '', 0, 1, 0, 0),
(85, 8, 'album', '5-5297.jpg', '5-5297_1100x800.jpg', '', '', 0, 1, 0, 0),
(86, 8, 'album', '6-6831.jpg', '6-6831_1100x800.jpg', '', '', 0, 1, 0, 0),
(87, 9, 'album', '19-5889.png', '19-5889_1100x800.png', '', '', 0, 1, 0, 0),
(88, 9, 'album', '20-7111.jpg', '20-7111_1100x800.jpg', '', '', 0, 1, 0, 0),
(89, 9, 'album', '21-317.jpg', '21-317_1100x800.jpg', '', '', 0, 1, 0, 0),
(90, 9, 'album', '22-2059.jpg', '22-2059_1100x800.jpg', '', '', 0, 1, 0, 0),
(91, 9, 'album', '23-5687.jpg', '23-5687_1100x800.jpg', '', '', 0, 1, 0, 0),
(92, 9, 'album', '24-3285.jpg', '24-3285_1100x800.jpg', '', '', 0, 1, 0, 0),
(93, 9, 'album', '25-8536.jpg', '25-8536_1100x800.jpg', '', '', 0, 1, 0, 0),
(94, 9, 'album', '26-1853.jpg', '26-1853_1100x800.jpg', '', '', 0, 1, 0, 0),
(98, 10, 'album', '05480-8248.jpg', '05480-8248_570x420.jpg', '', '', 0, 1, 0, 0),
(96, 11, 'album', '01444-5973.jpg', '01444-5973_570x420.jpg', '', '', 1, 1, 0, 0),
(97, 12, 'album', '1-9337.jpg', '1-9337_570x420.jpg', '', '', 1, 1, 0, 0),
(99, 10, 'album', '04628-9975.jpg', '04628-9975_570x420.jpg', '', '', 0, 1, 0, 0),
(100, 10, 'album', '0261-4585.jpg', '0261-4585_570x420.jpg', '', '', 0, 1, 0, 0),
(101, 11, 'album', 'chuphinhcuoidep114-7061.jpg', 'chuphinhcuoidep114-7061_570x420.jpg', '', '', 0, 1, 0, 0),
(102, 11, 'album', '1399-7486.jpg', '1399-7486_570x420.jpg', '', '', 0, 1, 0, 0),
(103, 11, 'album', '929-5975.jpg', '929-5975_570x420.jpg', '', '', 0, 1, 0, 0),
(104, 12, 'album', 'slide-3-9862.png', 'slide-3-9862_570x420.png', '', '', 0, 1, 0, 0),
(105, 12, 'album', '2015734618813059321900287968132081635925971o-1858.jpg', '2015734618813059321900287968132081635925971o-1858_570x420.jpg', '', '', 0, 1, 0, 0),
(106, 12, 'album', '2061589919821543820305408382129944284874903o-1206.jpg', '2061589919821543820305408382129944284874903o-1206_570x420.jpg', '', '', 0, 1, 0, 0),
(107, 12, 'album', 'chuphinhcuoidep114-9124.jpg', 'chuphinhcuoidep114-9124_570x420.jpg', '', '', 0, 1, 0, 0),
(108, 12, 'album', 'nhungluuydeconhungbucanhcuoideptuyetvoi-9825.jpg', 'nhungluuydeconhungbucanhcuoideptuyetvoi-9825_570x420.jpg', '', '', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_baiviet`
--

CREATE TABLE `table_baiviet` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `noibat` int(11) NOT NULL,
  `moinhat` tinyint(2) NOT NULL,
  `top_nb` tinyint(2) NOT NULL,
  `type` varchar(100) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten_vi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `top_menu` tinyint(2) NOT NULL,
  `bottom_menu` tinyint(2) NOT NULL,
  `thongtin_vi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thongtin_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text_search` varchar(255) NOT NULL,
  `tags` text NOT NULL,
  `tagskhongdau` text NOT NULL,
  `adminup` int(11) NOT NULL DEFAULT '3',
  `sokyhieu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaybanhanh` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_loai` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_baiviet`
--

INSERT INTO `table_baiviet` (`id`, `id_list`, `id_cat`, `id_item`, `id_sub`, `noibat`, `moinhat`, `top_nb`, `type`, `photo`, `thumb`, `ten_vi`, `tenkhongdau`, `title`, `keywords`, `description`, `mota_vi`, `noidung_vi`, `ten_en`, `mota_en`, `noidung_en`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `luotxem`, `top_menu`, `bottom_menu`, `thongtin_vi`, `thongtin_en`, `text_search`, `tags`, `tagskhongdau`, `adminup`, `sokyhieu`, `ngaybanhanh`, `id_loai`) VALUES
(153, 52, 0, 0, 0, 1, 0, 0, 'thiet-ke', 'thicongnoithatchungcudepoparkhillp08-1812.JPG', 'thicongnoithatchungcudepoparkhillp08-1812_412x525.jpg', 'Nội thất Chung cư Đẹp ở Park Hill P08', 'noi-that-chung-cu-dep-o-park-hill-p08', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '<p><label style=\"outline: 0px; margin: 0px 0px 10px; padding: 4px 0px; border: 0px; font-size: 12px; vertical-align: baseline; display: block; float: left; font-weight: bold; white-space: nowrap; width: 913px;\">Nội dung [Tiếng Việt]</label></p>\r\n', '', '', '', 1, 1, 1535798118, 1537937905, 5, 0, 0, '', '', 'noi that chung cu dep o park hill p08', '', '', 8, '', '', 0),
(154, 51, 0, 0, 0, 1, 0, 0, 'thiet-ke', '15-518.jpg', '15-518.jpg', 'Hướng dẫn đăng ký ngành nghề kinh doanh', 'huong-dan-dang-ky-nganh-nghe-kinh-doanh', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1535798178, 1537883359, 1, 0, 0, '', '', 'huong dan dang ky nganh nghe kinh doanh', '', '', 3, '', '', 0),
(155, 51, 0, 0, 0, 1, 0, 0, 'thiet-ke', '15-518.jpg', '15-518.jpg', 'Hướng dẫn đăng ký mạng', 'huong-dan-dang-ky-mang', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1535798264, 1537883352, 1, 0, 0, '', '', 'huong dan dang ky mang', '', '', 3, '', '', 0),
(156, 51, 0, 0, 0, 1, 0, 0, 'thiet-ke', '15-518.jpg', '15-518.jpg', 'Hướng dẫn đăng ký doanh nghiệp', 'huong-dan-dang-ky-doanh-nghiep', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1535798287, 1537883346, 8, 0, 0, '', '', 'huong dan dang ky doanh nghiep', '', '', 3, '', '', 0),
(157, 50, 0, 0, 0, 1, 0, 0, 'thiet-ke', '15-518.jpg', '15-518.jpg', 'Hướng dẫn sử dụng công qua cổng mạng điện tử', 'huong-dan-su-dung-cong-qua-cong-mang-dien-tu', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1535798302, 1537883339, 34, 0, 0, '', '', 'huong dan su dung cong qua cong mang dien tu', '', '', 3, '', '', 0),
(158, 0, 0, 0, 0, 1, 0, 0, 'tin-tuc', 'kientrucdoisong-5118.jpg', 'kientrucdoisong-5118_300x300.jpg', 'Tạp chí kiến trúc và đời sống', 'tap-chi-kien-truc-va-doi-song', '', '', '', 'It sometimes happens if fails to load print preview, maybe when the content to print is quite big (i noticed it only with Chrome while same page prints perfeclty in Firefox, however i dont exclude it might happen in Firefox or other browsers too). The best way i found is to run the print (and close) only after windows is loaded', '<p><img alt=\"\" height=\"750\" src=\"http://www.chuphinhcuoibinhduong.net/upload/images/Ao-cuoi-ADD31.jpg\" width=\"750\" /></p>\r\n', '', '', '', 1, 1, 1535798342, 1537935410, 11, 0, 0, '', '', 'tap chi kien truc va doi song', '', '', 8, '', '', 0),
(151, 57, 0, 0, 0, 1, 0, 0, 'thi-cong', '2-829.jpg', '2-829.jpg', 'Báo cáo điện tử', 'bao-cao-dien-tu', 'title Áo cưới AA-0813', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '<p>Nội Dung</p>\r\n', '', '', '', 1, 1, 1535797978, 1537883533, 3, 0, 0, '', '', 'bao cao dien tu', '', '', 3, '', '', 0),
(152, 0, 0, 0, 0, 1, 0, 0, 'thi-cong', '2-829.jpg', '2-829.jpg', 'Đăng ký qua mạng', 'dang-ky-qua-mang', 'Chuyên Áo Cưới AC-0643', 'Áo Cưới AC-0643', 'Cung cấp áo cưới chữ A Áo Cưới AC-0643', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy &amp; cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '<p><span background-color:=\"\" font-size:=\"\" font-weight:=\"\" helvetica=\"\" style=\"color: rgb(0, 0, 0); font-family: \" white-space:=\"\">Nội dung [Tiếng Việt]</span></p>\r\n', '', '', '', 1, 1, 1535798070, 1537343626, 2, 0, 0, '', '', 'dang ky qua mang', '', '', 3, '', '', 0),
(147, 58, 0, 0, 0, 1, 0, 0, 'thi-cong', '1-6386.jpg', '1-6386_412x525.jpg', 'Công trình nhà Chị Lan - Hóc Môn', 'ho-tro-du-thao-ho-so', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '<p><span style=\"font-family:tahoma,geneva,sans-serif;\"><span style=\"font-size:16px;\">ƯU ĐÃI VÀNG T8/2018 - DÀNH TẶNG 99 CẶP ĐÔI ĐĂNG KÝ CHỤP HÌNH CƯỚI TRƯỚC 30.8.2018 TẠI Studio TM <br />\r\nCHỤP ẢNH CƯỚI NGOẠI CẢNH, PHIM TRƯỜNG ĐỒNG GIÁ CHỈ 5.900.000Đ <br />\r\nTRỌN GÓI CAM KẾT KHÔNG PHÁT SINH.<br />\r\n <br />\r\nSài Gòn đang  vào mùa mưa nhưng Studio TM vẫn rất nóng ,  hơn 15 năm qua Studio TM đã lưu giữ những khoảnh khắc đẹp nhất của các cặp đôi, đánh dấu bước ngoặt quan trọng của cuộc đời. Đến với Studio TM các bạn sẽ hoàn toàn hài lòng với những bộ ảnh cưới độc đáo, ấn tượng và nghệ thuật. TRỌN BỘ ALBUM NGOẠI CẢNH  SANG CHẢNH , ĐẲNG CẤP TẠI Studio TM CHỈ VỚI 5.900.000 VNĐ.  Studio TM cam kết “ Nếu Studio TM là số Hai thì không studio nào số Một trong lĩnh vực chụp hình cưới tại TP HCM”. Đừng ngại ngần hãy lựa chọn Studio TM. Hãy để Studio TM mang  đến cho bạn những giây phút ngọt ngào, lãng mạn, ghi dấu những kỷ niệm sâu sắc của tình yêu lứa đôi.<br />\r\n ​</span></span></p>\r\n\r\n<p><span style=\"font-family:tahoma,geneva,sans-serif;\"><span style=\"font-size:16px;\"><img alt=\"chuoj hình phim trường\" height=\"485\" src=\"http://www.chuphinhcuoibinhduong.net/upload/images/anh-cuoi-mailisa-218.jpg\" width=\"785\" /></span></span></p>\r\n\r\n<p><span style=\"font-size: 16px; font-family: tahoma, geneva, sans-serif;\">                    Chụp hình cưới phim trường ngoại cảnh tại phim trường LA’MOUR & Phú Mỹ Hưng thực hiện bởi ekip áo cưới </span><span style=\"font-size: 16px; font-family: tahoma, geneva, sans-serif;\">Studio TM</span></p>\r\n\r\n<p><span style=\"font-family:tahoma,geneva,sans-serif;\"><span style=\"font-size:16px;\">                Studio TM 05 KHÁC BIỆT LÀM NÊN THƯƠNG HIỆU</span></span></p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p><br />\r\n<span style=\"font-family:tahoma,geneva,sans-serif;\"><span style=\"font-size:16px;\">                       Chụp hình ngoại cảnh phim trường Mộc Thanh & LA’MOUR thực hiện bởi ekip Studio TM.</span></span></p>\r\n\r\n<p><span style=\"font-family:tahoma,geneva,sans-serif;\"><span style=\"font-size:16px;\">QUÁ TRÌNH CHỤP HÌNH CƯỚI TẠI Studio TM<br />\r\nCHUẨN BỊ TẠI ẢNH VIỆN Studio TM<br />\r\n►  Chụp ảnh cưới tại 1 lịch trình trong 6 lịch trình  tại Studio TM hoặc tự chọn lịch trình yêu thích.<br />\r\n►  Trang điểm và thay đổi kiểu tóc theo từng trang phục, bối cảnh chụp.<br />\r\n►   05 – 07 bộ trang phục tùy chọn dành cho cô dâu. Cô dâu sẽ được chuyên viên tư vấn về trang phục phù hợp vóc dáng (ÁO SOIRE, ÁO DÀI, ÁO CẶP, ÁO BỘ, ÁO THỜI TRANG).<br />\r\n►   03 – 05 bộ trang phục tùy chọn dành chú rể. Trang phục chú rể  được thay đổi theo trang phục cô dâu và bối cảnh (VESTON, ÁO GILE, ÁO CẶP, ÁO THỜI TRANG).<br />\r\n►  Cô dâu, chú rể có thể đem theo trang phục thời trang<br />\r\n►   Phụ kiện đi kèm ( trang sức, găng tay, nón…<br />\r\n►  Hoa tươi cầm tay, cài áo. Hoa lụa,  gấu bông, phụ kiện phối hợp theo trang phục<br />\r\n► Đạo cụ chụp hình hiện đại phù hợp với nhiều bối cảnh </span></span></p>\r\n\r\n<p> </p>\r\n\r\n<p><span style=\"font-family:tahoma,geneva,sans-serif;\"><span style=\"font-size:16px;\"> </span></span><br />\r\n </p>\r\n\r\n<p><br />\r\n<span style=\"font-family:tahoma,geneva,sans-serif;\"><span style=\"font-size:16px;\"> <br />\r\n                      Chụp hình cưới ngoại cảnh phim trường LA’MOUR thực hiện bởi ekip Studio TM.             <br />\r\n   CÔ DÂU, CHÚ RỂ ĐƯỢC LỰA CHỌN  1 TRONG 6 LỊCH TRÌNH ĐẸP NHẤT VÀ ĐƯỢC YÊU THÍCH NHẤT HIỆN NAY<br />\r\n►Lựa chọn 1:  Phim trường LA’MOUR + STUDIO + Đồng cỏ lau quận 2.<br />\r\n►Lựa chọn 2:  Phim trường MỘC THANH + STUDIO + Nhà thờ Đức Bà + Bưu Điện Thành Phố.<br />\r\n►Lựa chọn 3: Phim trường WHITE HOUSE + STUDIO + Công viên Gia Định.<br />\r\n►Lựa chọn 4: Phim trường GREEN HOUSE + STUDIO<br />\r\n►Lựa chọn 5: Studio + Nhà thờ Đức Bà + Phú Mỹ Hưng + Bưu Điện Thành Phố. <br />\r\n►Lựa chọn 6: Studio + Phim trường ALIBABA </span></span></p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p><br />\r\n </p>\r\n\r\n<p><span style=\"font-family:tahoma,geneva,sans-serif;\"><span style=\"font-size:16px;\">                   Váy cưới nhập khẩu sang trọng chỉ có tại Studio TM               <br />\r\nPHỤC VỤ CHUYÊN NGHIỆP TẬN TÂM.<br />\r\n►Xe ô tô đời mới từ 7 – 16 chỗ, máy lạnh đưa đón<br />\r\n►Miễn phí vé phim trường  toàn ekip , cô dâu, chú rể<br />\r\n►Ekip từ 5-10 người phục vụ một cặp đôi duy nhất ( không ghép đôi)<br />\r\n►Cam kết không phát sinh chi phí<br />\r\n►Thời gian chụp không giới hạn<br />\r\n►Không giới hạn file ảnh tùy theo nhu cầu của cô dâu chú rể.<br />\r\n►Quý khách nhận hình cưới, abum… sau 05 - 20 ngày. Tùy theo nhu cầu khách hàng. <br />\r\n► Đặc biệt Studio TM có CHỤP DƯỚI NƯỚC VÀ CHỤP CẢNH BAN ĐÊM</span></span></p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p><span style=\"font-family:tahoma,geneva,sans-serif;\"><span style=\"font-size:16px;\"> <br />\r\n                    Chụp hình cưới dã ngoại, phim trường thực hiện bởi ekip Studio TM                                    <br />\r\nTHÀNH QUẢ ĐẠT ĐƯỢC.<br />\r\n►01 Album HÀN QUỐC cao cấp 20x30(cm) khổ ngang hoặc 25x25(cm) (30 trang - chọn 60 hình đẹp nhất để thiết kế)<br />\r\n►01 hình lớn đón khách khổ 60 x 90(cm) chất liệu mới.<br />\r\n►01 Album mini 10 x15 (cm)<br />\r\n►01 CD file Album dàn dựng và thiết kế độc đáo<br />\r\n►01 đĩa DVD slide hình album có lồng nhạc chiếu màn hình lớn Nhà hàng.<br />\r\n► Toàn bộ File gốc ảnh chụp không nén trên 300 ảnh chụp tự nhiên ấn tượng.<br />\r\n►01 Giỏ xách da cao cấp đựng Album + 01 Hộp đựng hình lớn.</span></span></p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p><span style=\"font-family:tahoma,geneva,sans-serif;\"><span style=\"font-size:16px;\">                           Chụp hình cưới phim trường giá rẻ tại Studio TM<br />\r\nƯU ĐÃI TẶNG KÈM GÓI CHỤP ẢNH CƯỚI NGOẠI CẢNH 5.900.000 VNĐ.<br />\r\n►Tặng 60 % phí dịch vụ tăng size album khi có nhu cầu làm album lớn ( tăng 1 size giá gốc : 1.500.000 chỉ còn 600.000)<br />\r\n►Tặng 50% phí dịch vụ tăng size hình lớn đón khách từ 60 x 90(cm) lên 70 x 110(cm) ( tăng 1size gốc gốc: 400.000 chỉ còn 200.000)<br />\r\n►Tặng 50 % phí dịch vụ làm mới hình lớn đón khách 70 x 110(cm) ( làm mới 1 size gốc: 1.600.000 chỉ còn 800.000)<br />\r\n​<br />\r\nCHỤP ẢNH CƯỚI NGOẠI CẢNH, PHIM TRƯỜNG ĐỒNG GIÁ<br />\r\nCHỈ 5.900.000 VNĐ TRỌN GÓI DUY NHẤT TẠI  Studio TM.<br />\r\n <br />\r\nƯu đãi đặc biệt dành cho 99 khách hàng  đăng ký dịch vụ chụp hình cưới qua số Hotline: 0937 229 239 hoặc đăng ký ngay tại đây.</span></span></p>\r\n', '', '', '', 1, 1, 1535796803, 1537939126, 10, 0, 0, '', '', 'cong trinh nha chi lan hoc mon', '', '', 8, '', '', 0);
INSERT INTO `table_baiviet` (`id`, `id_list`, `id_cat`, `id_item`, `id_sub`, `noibat`, `moinhat`, `top_nb`, `type`, `photo`, `thumb`, `ten_vi`, `tenkhongdau`, `title`, `keywords`, `description`, `mota_vi`, `noidung_vi`, `ten_en`, `mota_en`, `noidung_en`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `luotxem`, `top_menu`, `bottom_menu`, `thongtin_vi`, `thongtin_en`, `text_search`, `tags`, `tagskhongdau`, `adminup`, `sokyhieu`, `ngaybanhanh`, `id_loai`) VALUES
(159, 57, 0, 0, 0, 1, 0, 0, 'thi-cong', '2-829.jpg', '2-829.jpg', 'Dịch vụ thông tin', 'dich-vu-thong-tin', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 12pt;\">Đến <span style=\"box-sizing: border-box;\">TM STUDIO</span> ngay hôm nay, tiết kiệm 40% chi phí <span style=\"box-sizing: border-box;\">chụp hình cưới</span> với Ưu đãi “Thời điểm vàng, cưới nhàn tênh”, <span style=\"box-sizing: border-box;\">Trọn gói Album hình cưới giá chỉ từ 5.990.000VNĐ</span>. </span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"><span style=\"box-sizing: border-box;\">TM STUDIO</span> lo toàn bộ phí phim trường/phí ngoại cảnh, phí di chuyển, phí gia công thành phẩm <span style=\"box-sizing: border-box;\">album hình cưới</span>, hình lớn .... Quên đi n “cộng” chi phí ekip và n “cộng” chi phí phát sinh, vì bạn đang chuẩn bị sở hữu một gói ưu đãi <span style=\"box-sizing: border-box;\">TRỌN GÓI</span> duy nhất chỉ có tại <span style=\"box-sizing: border-box;\">TM STUDIO</span>. Dự trù mọi phát sinh, dự trù mọi chi phí trước khi bạn chọn, chính là cách chúng tôi giúp bạn an tâm “làm đẹp” trước ngày cưới.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 12pt;\">Để đảm bảo sản phẩm là <span style=\"box-sizing: border-box;\">album ảnh cưới</span> đến tay bạn là những hình ảnh chất lượng đúng như bạn kỳ vọng, cam kết 100% hình ảnh tham khảo ngay dưới đây và tại Website, Tất cả là sản phẩm của <span style=\"box-sizing: border-box;\">TM STUDIO</span> và đến từ hàng ngàn khách hàng đã tin chọn chúng tôi.</span> </p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif;\"><img alt=\"\" height=\"563\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/2018/T9/1200x900a.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"> </p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"><em style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span andale=\"\" style=\"box-sizing: border-box; color: rgb(255, 102, 0); font-size: 24pt; font-family: \">THỜI ĐIỂM VÀNG, CƯỚI \"NHÀN TÊNH\"</span></span></em></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"><span style=\"box-sizing: border-box;\">Trọn gói Album cưới</span></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"><span style=\"box-sizing: border-box; color: rgb(153, 51, 0);\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 18pt;\"><span style=\"box-sizing: border-box; font-size: 14pt; font-family: terminal, monaco; color: rgb(0, 204, 255);\"><em style=\"box-sizing: border-box;\">Chỉ từ</em></span> </span><span style=\"box-sizing: border-box; background-color: rgb(0, 204, 255); font-size: 36pt; color: rgb(255, 255, 255);\"> 5.990.000 </span><span style=\"box-sizing: border-box; font-size: 14pt; font-family: terminal, monaco;\"><em style=\"box-sizing: border-box;\"> <span style=\"box-sizing: border-box; color: rgb(0, 204, 255);\">VNĐ</span></em></span></span></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"><span style=\"box-sizing: border-box; font-size: 12pt; color: rgb(255, 102, 0);\"><span style=\"box-sizing: border-box;\"> SÀI GÒN - ĐÀ NẴNG - VŨNG TÀU - BIÊN HÒA - CẦN THƠ </span></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"><span class=\"example1\" style=\"box-sizing: border-box; font-size: 18pt; color: rgb(255, 102, 0);\"><span style=\"box-sizing: border-box; font-size: 14pt; font-family: terminal, monaco;\"><em style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span></span></em></span></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"> </p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 12pt;\">Khách hàng nhận được 01<span style=\"box-sizing: border-box;\"> Album hình cưới</span> chất liệu Laminate/ Photobook Waterproof mở phẳng - công nghệ PTB hàng đầu có khả năng chống nước 31 trang luôn bìa,<span style=\"box-sizing: border-box;\"> Album ảnh cưới</span> được thiết kế độc quyền <span style=\"box-sizing: border-box;\">TM STUDIO</span> theo ý tưởng và duyệt theo yêu cầu của Cô dâu - Chú rể. Trên 300 file hình ảnh chụp tự nhiên, ấn tượng.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-family: arial, helvetica, sans-serif;\"> </span></p>\r\n\r\n<h2 ..=\"\" background-attachment:=\"\" background-clip:=\"\" background-image:=\"\" background-origin:=\"\" background-position:=\"\" background-repeat:=\"\" background-size:=\"\" center=\"\" font-size:=\"\" images=\"\" line-height:=\"\" margin-bottom:=\"\" margin-top:=\"\" overflow:=\"\" padding-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \"><span style=\"box-sizing: border-box; color: rgb(68, 68, 68); display: block; padding-bottom: 10px; font-size: 18pt; float: left; border-bottom: 2px solid rgb(68, 68, 68);\">QUÀ TẶNG TỪ GÓI KHUYẾN MÃI TRỌN GÓI ALBUM CƯỚI:</span></h2>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span> 01 Hình lớn 60 x 90 công nghệ mới.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span class=\"example1\" style=\"box-sizing: border-box; font-size: 12pt; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif;\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span> 01 CD toàn bộ file gốc không nén không chỉnh sửa.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span class=\"example1\" style=\"box-sizing: border-box; font-size: 12pt; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif;\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span> 01 DVD toàn bộ file thiết kế hoàn thiện.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span class=\"example1\" style=\"box-sizing: border-box; font-size: 12pt; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif;\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span> 01 DVD slideshow chiếu ngày cưới toàn bộ hình album lồng nhạc.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span class=\"example1\" style=\"box-sizing: border-box; font-size: 12pt; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif;\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span> 01 Giỏ xách da cao cấp đựng Album.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span class=\"example1\" style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-size: 12pt; font-family: arial, helvetica, sans-serif;\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span> 01 Hộp đựng hình lớn.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span class=\"example1\" style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-size: 12pt; font-family: arial, helvetica, sans-serif;\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span> 01 Bộ ebook bí quyết chuẩn bị kết hôn và xây dựng gia đình hạnh phúc.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"><em style=\"box-sizing: border-box;\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span></em><span class=\"example1\" style=\"box-sizing: border-box;\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"> </span>01 Phiếu mua nhẫn cưới tại Công ty Vàng bạc cưới Cửu Long trị giá 3.500.000 VNĐ.</span></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span class=\"example1\" style=\"box-sizing: border-box; font-size: 12pt;\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span> 01 Phiếu quà tặng chăm sóc sắc đẹp tại hệ thống thẩm mỹ viện Ngọc Dung trị giá 500.000 VNĐ.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\"> </span></p>\r\n\r\n<h2 ..=\"\" background-attachment:=\"\" background-clip:=\"\" background-image:=\"\" background-origin:=\"\" background-position:=\"\" background-repeat:=\"\" background-size:=\"\" center=\"\" font-size:=\"\" images=\"\" line-height:=\"\" margin-bottom:=\"\" margin-top:=\"\" overflow:=\"\" padding-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0); display: block; padding-bottom: 10px; font-size: 14pt; float: left; border-bottom: 2px solid rgb(68, 68, 68); font-family: arial, helvetica, sans-serif;\"><span style=\"box-sizing: border-box;\">CÁC ƯU ĐÃI KÈM THEO KHI ĐĂNG KÝ GÓI KHUYẾN MÃI ALBUM CƯỚI:</span></span></h2>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /> </span>Tặng trang điểm thử miễn phí.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /> </span>Tặng 50% khi tăng size album (chỉ còn 750.000VND).</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span> Tặng 50% khi thuê thêm trang phục ngày cưới (chỉ còn 3.900.000/4 áo).</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span> Tặng 50% gói thuê trang phục bưng quả ngày cưới (chỉ còn 500.000/6 bộ).</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span> Tặng 50% phí thiết kế và in back drop sân khấu (chỉ còn 500.000VND).</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\"><span class=\"_5mfr _47e3\" style=\"box-sizing: border-box;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span> Tặng 50% khung ảnh meca đúc nhập khẩu (chỉ còn 750.000VND).</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif;\"> <img alt=\"Giới thiệu gói chụp album trọn gói\" height=\"258\" src=\"http://alenvina.com/rfilemanager/source/image/camketdau.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%; display: block; margin-left: auto; margin-right: auto;\" width=\"750\" /></span></p>\r\n\r\n<h2 ..=\"\" background-attachment:=\"\" background-clip:=\"\" background-image:=\"\" background-origin:=\"\" background-position:=\"\" background-repeat:=\"\" background-size:=\"\" center=\"\" font-size:=\"\" images=\"\" line-height:=\"\" margin-bottom:=\"\" margin-top:=\"\" overflow:=\"\" padding-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \"><span style=\"box-sizing: border-box; color: rgb(255, 77, 0); display: block; padding-bottom: 10px; font-size: 18pt; float: left; border-bottom: 2px solid rgb(68, 68, 68);\">TRỌN GÓI ALBUM HÌNH CƯỚI NGÀY CHỤP ĐÃ BAO GỒM.</span></h2>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif;\">+ Trang phục tùy chọn theo sở thích cô dâu (soiree, áo dài, đồ thời trang).</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif;\">+ Trang phục tùy chọn theo sở thích chú rể (veston, áo dài, đồ thời trang).</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif;\">+ Phụ kiện kèm theo (Trang sức, gang tay, lúp,…).</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif;\">+ 02 hoa lụa cầm tay cao cấp.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"><span style=\"box-sizing: border-box; font-family: arial, helvetica, sans-serif;\">+ </span>Trang điểm và thay đổi kiểu tóc theo từng trang phục và bối cảnh.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif;\"> </span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; color: rgb(255, 77, 0);\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif;\"><em style=\"box-sizing: border-box;\">Ghi Chú:</em></span></span></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif;\"><em style=\"box-sizing: border-box;\">+ Thời gian dự kiến bạn cần sắp xếp cho 1 show làm việc cùng ekip là từ 5 đến 7 tiếng.</em></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif;\"><em style=\"box-sizing: border-box;\">+ Chi phí chưa bao gồm chi phí ăn uống, vé máy bay, vé xe, đi lại từ nhà bạn đến cửa hàng TM STUDIO tại địa phương có ngoại cảnh.</em></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif;\"><em style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"> </span></em></span>  </p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"><em style=\"box-sizing: border-box;\"><img alt=\"\" height=\"506\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/THANG%206%202018/ao%20trang.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></em></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"><img alt=\"\" height=\"506\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/THANG%206%202018/Ao%20mau.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%; display: block; margin-left: auto; margin-right: auto;\" width=\"750\" /></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"> </p>\r\n\r\n<h2 ..=\"\" background-attachment:=\"\" background-clip:=\"\" background-image:=\"\" background-origin:=\"\" background-position:=\"\" background-repeat:=\"\" background-size:=\"\" center=\"\" font-size:=\"\" images=\"\" line-height:=\"\" margin-bottom:=\"\" margin-top:=\"\" overflow:=\"\" padding-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0); display: block; padding-bottom: 10px; font-size: 18pt; float: left; border-bottom: 2px solid rgb(68, 68, 68); font-family: arial, helvetica, sans-serif;\"><span style=\"box-sizing: border-box;\">Thoải mái lựa chọn 1 trong các lịch trình chụp hình cưới phim trường:</span></span></h2>\r\n\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; list-style: circle; padding-left: 0px; font-family: Roboto, sans-serif; font-size: 14px;\">\r\n	<li style=\"box-sizing: border-box; list-style: square; margin-left: 20px; color: rgb(102, 102, 102);\"><span style=\"box-sizing: border-box; font-size: 12pt; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif;\">Lịch trình 1: Phim trường <span style=\"box-sizing: border-box;\">Lamour</span> - Phim trường đa bối cảnh, đa phong cách tại khu vực Sài Gòn. </span></li>\r\n	<li style=\"box-sizing: border-box; list-style: square; margin-left: 20px; color: rgb(102, 102, 102);\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif;\">Lịch trình 2: Phim trường <span style=\"box-sizing: border-box;\">Alibaba</span> - Phim trường sinh thái mới nhất tại Sài Gòn (Bình Thạnh).</span></span></li>\r\n	<li style=\"box-sizing: border-box; list-style: square; margin-left: 20px; color: rgb(102, 102, 102);\"><span style=\"box-sizing: border-box; font-size: 12pt; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif;\">Lịch trình 3: Phim trường <span style=\"box-sizing: border-box;\">Phoenix</span> Vĩnh Long - Phim trường chuyên nghiệp & đa phong cách nhất khu vực Tây Nam Bộ. </span></li>\r\n</ul>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\"> </span></p>\r\n\r\n<h2 ..=\"\" background-attachment:=\"\" background-clip:=\"\" background-image:=\"\" background-origin:=\"\" background-position:=\"\" background-repeat:=\"\" background-size:=\"\" center=\"\" font-size:=\"\" images=\"\" line-height:=\"\" margin-bottom:=\"\" margin-top:=\"\" overflow:=\"\" padding-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0); display: block; padding-bottom: 10px; font-size: 18pt; float: left; border-bottom: 2px solid rgb(68, 68, 68); font-family: arial, helvetica, sans-serif;\"><span style=\"box-sizing: border-box;\">Hoặc lựa chọn 1 trong 11 lịch trình chụp hình cưới ngoại cảnh:</span></span></h2>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px;\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0);\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif;\">Có phụ phí 500.000VNĐ</span></span></span></p>\r\n\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; list-style: none; padding-left: 0px; font-family: Roboto, sans-serif; font-size: 14px;\">\r\n	<li style=\"box-sizing: border-box; list-style: square; margin-left: 20px; color: rgb(102, 102, 102);\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\"><span style=\"box-sizing: border-box; font-size: 12pt;\">Lịch trình 4: Ngoại cảnh <span style=\"box-sizing: border-box;\">Vũng Tàu</span> ( Biển Nghinh Phong - Mũi Nghinh Phong - Imp</span>erial VT -  Paradise). </span></li>\r\n	<li style=\"box-sizing: border-box; list-style: square; margin-left: 20px; color: rgb(102, 102, 102);\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\">Lịch trình 5: Ngoại cảnh + phim trường <span style=\"box-sizing: border-box;\">Vũng Tàu Marina</span> (Imperial VT - Mũi Nghinh Phong - Du thuyền Marina <Đông Xuyên>). </span></li>\r\n	<li style=\"box-sizing: border-box; list-style: square; margin-left: 20px; color: rgb(102, 102, 102);\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\">Lịch trình 6: Ngoại cảnh <span style=\"box-sizing: border-box;\">Sài Gòn</span> ngày và đêm: Đường sách Nguyễn Văn Bình + Phố đi bộ Nguyễn Huệ + Cầu cảng quận 2. </span></li>\r\n	<li style=\"box-sizing: border-box; list-style: square; margin-left: 20px; color: rgb(102, 102, 102);\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\">Lịch trình 7: Ngoại cảnh <span style=\"box-sizing: border-box;\">Biên Hòa</span>: Cầu Ghềnh - Bờ Kè Biên Hòa - Cù Lao (Vườn Cổ tích, Hồ Sen, Lâu Đài Đá). </span></li>\r\n	<li style=\"box-sizing: border-box; list-style: square; margin-left: 20px; color: rgb(102, 102, 102);\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\">Lịch trình 8: Ngoại cảnh <span style=\"box-sizing: border-box;\">Biên Hòa</span>: Cù Lao Biên Hòa (Vườn Cổ tích, Hồ Sen) - Lò Gốm - Nhà Ga Hố Nai. <span style=\"box-sizing: border-box; color: rgb(255, 153, 0);\">Xem thêm</span></span></li>\r\n	<li style=\"box-sizing: border-box; list-style: square; margin-left: 20px; color: rgb(102, 102, 102);\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\">Lịch trình 9: Ngoại cảnh <span style=\"box-sizing: border-box;\">Biên Hòa</span>: Cầu Ghềnh - Bờ Kè Biên Hòa - Công Viên Amata - Nhà Thờ Đá. <span style=\"box-sizing: border-box; color: rgb(255, 153, 0);\">Xem thêm</span></span></li>\r\n	<li style=\"box-sizing: border-box; list-style: square; margin-left: 20px; color: rgb(102, 102, 102);\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\">Lịch trình 10: Ngoại cảnh <span style=\"box-sizing: border-box;\">Cần Thơ</span>: Cầu đi bộ - Vincom Cần Thơ  - KS Victory - Khu Công Trình 8. <span style=\"box-sizing: border-box; color: rgb(255, 153, 0);\">Xem thêm </span></span></li>\r\n	<li style=\"box-sizing: border-box; list-style: square; margin-left: 20px; color: rgb(102, 102, 102);\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\">Lịch trình 11: Ngoại cảnh <span style=\"box-sizing: border-box;\">Cần Thơ</span>: Vincom Cần Thơ - Khu Công Trình 8 - Nông Trại (theo mùa) - Bờ sông hòn đá. <span style=\"box-sizing: border-box; color: rgb(255, 153, 0);\">Xem thêm</span></span></li>\r\n	<li style=\"box-sizing: border-box; list-style: square; margin-left: 20px; color: rgb(102, 102, 102);\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\">Lịch trình 12: Ngoại cảnh <span style=\"box-sizing: border-box;\">Đà Nẵng</span>: 4 điểm tùy chọn trong nội thành thành phố Đà Nẵng (Quảng trường bồ câu - Hoa giấy/tường rêu - Bãi cháy - Hồ xanh - Bãi đa Obama - bán đảo Sơn Trà - Hải Đăng - Bãi Bụt - Cầu tình yêu). <span style=\"box-sizing: border-box; color: rgb(255, 153, 0);\">Xem thêm</span></span></li>\r\n	<li style=\"box-sizing: border-box; list-style: square; margin-left: 20px; color: rgb(102, 102, 102);\"><span style=\"box-sizing: border-box; font-size: 12pt; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0);\">Lịch trình 13: Ngoại cảnh <span style=\"box-sizing: border-box;\">Đà Nẵng</span>: Cầu Trần Thị Lý - cầu Nguyễn Văn Trỗi - Cafe Memory - Trung Tâm Hành Chính - Nhà Gỗ - Biển - Cầu Rồng - Cổng Công Viên Châu Á. <span style=\"box-sizing: border-box; color: rgb(255, 153, 0);\">Xem thêm</span></span></li>\r\n	<li style=\"box-sizing: border-box; list-style: square; margin-left: 20px; color: rgb(102, 102, 102);\"><span style=\"box-sizing: border-box; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 0); font-size: 12pt;\"> Lịch trình 14: Ngoại cảnh <span style=\"box-sizing: border-box;\">Đà Nẵng</span>:<span style=\"box-sizing: border-box;\"> </span>Hồ đá xanh, Bãi đá đen, Cầu Nguyễn Văn Trỗi, Biển Mỹ Khê. <span style=\"box-sizing: border-box; color: rgb(255, 102, 0);\"><a class=\"html5lightbox\" href=\"http://alenvina.com/album-hinh-cuoi-noi-thanh-da-nang-3-P820.html?popup=1\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(255, 102, 0); text-decoration-line: none; transition: all 0.2s ease-in 0s;\" title=\"popup\">Xem </a>t<a class=\"html5lightbox\" href=\"http://alenvina.com/album-hinh-cuoi-noi-thanh-da-nang-3-P820.html?popup=1\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(255, 102, 0); text-decoration-line: none; transition: all 0.2s ease-in 0s;\" title=\"popup\">hêm</a></span></span></li>\r\n</ul>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"> </p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"><img alt=\"\" height=\"50\" src=\"http://alenvina.com/rfilemanager/source/image/1.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"150\" /> <img alt=\"\" height=\"50\" src=\"http://alenvina.com/rfilemanager/source/image/2.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"150\" /></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(204, 35, 40);\"><span style=\"box-sizing: border-box;\"><span class=\"example1\" style=\"box-sizing: border-box;\">╔═══════════════════════════════════════════╗</span></span></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(204, 35, 40);\"><span style=\"box-sizing: border-box;\"><span class=\"example1\" style=\"box-sizing: border-box;\">  TRỌN GÓI ALBUM CHỈ TỪ 5.990.000 VNĐ</span></span></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 18pt; color: rgb(204, 35, 40);\"><span style=\"box-sizing: border-box;\"><span class=\"example1\" style=\"box-sizing: border-box;\">╚═══════════════════════════════════════════╝</span></span></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"> </p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"><span style=\"box-sizing: border-box; font-size: 14pt;\"><span style=\"box-sizing: border-box;\">TM STUDIO KHÔNG PHÁT SINH THÊM CHI PHÍ CHO GÓI CHỤP HÌNH CƯỚI TRỌN GÓI</span></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px; text-align: center;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /> Không phát sinh phí đi lại trong quá trình chụp <img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px; text-align: center;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /> Không phụ thu phí điểm chụp/vé cổng phim trường <img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px; text-align: center;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"> <img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" />Không lo phí di chuyển, ăn uống của ekip <img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px; text-align: center;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /> Không thêm phí trang phục tuỳ chọn <img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; padding-left: 30px; text-align: center;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"><img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /> Không bù phí đổi chất liệu hay gia công sản phẩm <img alt=\"\" class=\"img\" height=\"16\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff4/1/16/2728.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"16\" /></span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"> </p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"> </p>\r\n\r\n<h3 ..=\"\" background-attachment:=\"\" background-clip:=\"\" background-image:=\"\" background-origin:=\"\" background-position:=\"\" background-repeat:=\"\" background-size:=\"\" center=\"\" font-size:=\"\" images=\"\" line-height:=\"\" margin-bottom:=\"\" margin-top:=\"\" overflow:=\"\" padding-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \" text-align:=\"\"><span style=\"box-sizing: border-box; color: rgb(68, 68, 68); display: block; padding-bottom: 10px; font-size: 18pt; float: left; border-bottom: 2px solid rgb(68, 68, 68);\">Hình album anh cưới phim trường L\'amour</span></h3>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới phim trường L\'amour\" height=\"500\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/hinh-album-hinh-cuoi-lamour-1.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới phim trường L\'amour\" height=\"500\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/hinh-album-hinh-cuoi-lamour-3.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới phim trường L\'amour\" height=\"498\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/hinh-album-hinh-cuoi-lamour-4.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới phim trường L\'amour\" height=\"478\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/hinh-album-hinh-cuoi-lamour-5.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới phim trường L\'amour\" height=\"509\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/hinh-album-hinh-cuoi-lamour-6.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới phim trường L\'amour\" height=\"500\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/hinh-album-hinh-cuoi-lamour-2.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"> </p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"><span style=\"box-sizing: border-box;\">Chụp ảnh cưới ở phim trường</span> một địa chỉ nhưng lại chụp được nhiều phong cách khác nhau, cả ngoài trời và trong <span style=\"box-sizing: border-box;\">studio</span>. Ngoài ra, cô dâu chú rể sẽ được chụp trong một không gian thoáng mát. Đối với các cặp đôi không thể sắp xếp công việc để dành nhiều thời gian cho việc thực hiện bộ <span style=\"box-sizing: border-box;\">album ảnh cưới</span> thì <span style=\"box-sizing: border-box;\">phim trường</span> chính là phương án tốt nhất. Bạn sẽ không phải di chuyển nhiều địa điểm như chụp<span style=\"box-sizing: border-box;\"> ảnh album ngoại cảnh</span> mà vẫn đẹp lung linh.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 12pt;\">Tại <span style=\"box-sizing: border-box;\">phim trường</span>, có rất nhiều bối cảnh và các bối cảnh này thường được sắp xếp ngay cạnh nhau do đó các cặp đôi không phải di chuyển nhiều, không tốn nhiều công sức hay thời gian cho buổi chụp. Mặt khác các <span style=\"box-sizing: border-box;\">phim trường</span> cũng khá gần trung tâm nên việc di chuyển đến địa điểm chụp rất dễ dàng.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 12pt;\">Nếu bạn yêu thích phong cách châu Âu hay phong cách Hàn Quốc..., hãy để <span style=\"box-sizing: border-box;\">TM STUDIO</span> tư vấn cho bạn về các <span style=\"box-sizing: border-box;\">phim trường</span> nhé, đảm bảo bạn sẽ hài lòng và vô cùng thích thú với những địa điểm này đấy.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 12pt;\">Các <span style=\"box-sizing: border-box;\">phim trường</span> như là không gian thu nhỏ của các miền đất châu Âu xa xôi hay những cảnh sắc của xứ sở hoa Anh Đào. Do đó, bộ <span style=\"box-sizing: border-box;\">album hình cưới</span> của bạn sẽ có cảm giác như được ghi hình tại các miền đất xa xôi với những bối cảnh vừa hiện đại, sang trọng, vừa lãng mạn, tinh tế. Chẳng hạn như bạn sẽ không phải lặn lội xa xôi đến các bãi biển <span style=\"box-sizing: border-box;\">Nha Trang</span> hay <span style=\"box-sizing: border-box;\">Đà Nẵng</span>, vì một số <span style=\"box-sizing: border-box;\">phim trường</span> đã đầu tư xây dựng các hồ nhân tạo lớn, nên bạn sẽ được thỏa sức sáng tạo <span style=\"box-sizing: border-box;\">chụp ảnh cưới</span> với cảnh thuyền nước, núi non.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 12pt;\">Không những vậy, bối cảnh các<span style=\"box-sizing: border-box;\"> phim trường</span> rất đa dạng. Bên những bối cảnh cổ điển, lãng mạn là những bối cảnh mang phong cách hiện đại, trẻ trung. Do đó <span style=\"box-sizing: border-box;\">album hình cưới</span> của bạn sẽ đa dạng phong cách dù chỉ chụp tại một địa điểm. Đó là những ưu điểm mà chụp ảnh <span style=\"box-sizing: border-box;\">ngoại cảnh</span> không thể mang đến cho bạn.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"> </p>\r\n\r\n<h3 ..=\"\" background-attachment:=\"\" background-clip:=\"\" background-image:=\"\" background-origin:=\"\" background-position:=\"\" background-repeat:=\"\" background-size:=\"\" center=\"\" font-size:=\"\" images=\"\" line-height:=\"\" margin-bottom:=\"\" margin-top:=\"\" overflow:=\"\" padding-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \" text-align:=\"\"><span style=\"box-sizing: border-box; color: rgb(68, 68, 68); display: block; padding-bottom: 10px; font-size: 18pt; float: left; border-bottom: 2px solid rgb(68, 68, 68);\">Hình album anh cưới phim trường Alibaba</span></h3>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới phim trường Alibaba\" height=\"500\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/hinh-album-hinh-cuoi-alibaba-3.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới phim trường Alibaba\" height=\"500\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/hinh-album-hinh-cuoi-alibaba-1.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới phim trường Alibaba\" height=\"1124\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/hinh-album-hinh-cuoi-alibaba-2.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"> </p>\r\n\r\n<h3 ..=\"\" background-attachment:=\"\" background-clip:=\"\" background-image:=\"\" background-origin:=\"\" background-position:=\"\" background-repeat:=\"\" background-size:=\"\" center=\"\" font-size:=\"\" images=\"\" line-height:=\"\" margin-bottom:=\"\" margin-top:=\"\" overflow:=\"\" padding-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \" text-align:=\"\"><span style=\"box-sizing: border-box; color: rgb(68, 68, 68); display: block; padding-bottom: 10px; font-size: 18pt; float: left; border-bottom: 2px solid rgb(68, 68, 68);\">Hình album anh cưới phim trường Phoenix</span></h3>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới phim trường Phoenix\" height=\"477\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/hinh-album-hinh-cuoi-phoenix-1.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới phim trường Phoenix\" height=\"517\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/hinh-album-hinh-cuoi-phoenix-2.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\">  </p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"><span style=\"box-sizing: border-box;\">Chụp album cưới ngoại cảnh</span> hình ảnh chụp toàn cảnh đặc biệt thích hợp với những không gian thoáng đãng, rộng rãi. nhiếp ảnh gia sẽ giúp bạn “hô biến” địa điểm chụp thành một background hoàn mỹ và lãng mạn cho <span style=\"box-sizing: border-box;\">album cưới</span>. Hình ảnh hai con người nhỏ bé giữa bức tranh phong cảnh rộng lớn lại có sức biểu cảm tuyệt vời. Với góc chụp này, thông qua tư thế, dáng đứng của cặp đôi, người xem vẫn cảm nhận được câu chuyện tình yêu mà họ muốn truyền tải.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 12pt;\">Không gian <span style=\"box-sizing: border-box;\">ngoại cảnh</span> thoáng đãng sẽ giúp tinh thần của cặp đôi tốt hơn khi <span style=\"box-sizing: border-box;\">chụp ảnh cưới</span>, Cặp đôi có thể thoải mái tung tăng để có những shoot hình đẹp. nhiều cảnh vật giúp Cô dâu - Chú rể và ekip chụp hình ghi lại được nhiều bức ảnh phong phú hơn về cảnh vật. Yếu tố hàng đầu tác động trực tiếp đến chất lượng hình ảnh chính là ánh sáng. Chính vì vậy, điều này chỉ khi có được ánh sáng tự nhiên khi chụp ảnh ngoài trời mới có được. Với không gian rộng rãi, thoáng mát, nhiều cảnh vật giúp Cô dâu - Chú rể và ekip chụp hình ghi lại được nhiều bức ảnh với phong phú hơn. Lúc này, Cô dâu - Chú rể thoải mái trong khung cảnh thiên nhiên, làm cho bộ ảnh trở nên tự nhiên nhất.</span></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif;\"> </p>\r\n\r\n<h3 ..=\"\" background-attachment:=\"\" background-clip:=\"\" background-image:=\"\" background-origin:=\"\" background-position:=\"\" background-repeat:=\"\" background-size:=\"\" center=\"\" font-size:=\"\" images=\"\" line-height:=\"\" margin-bottom:=\"\" margin-top:=\"\" overflow:=\"\" padding-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \" text-align:=\"\"><span style=\"box-sizing: border-box; color: rgb(68, 68, 68); display: block; padding-bottom: 10px; font-size: 18pt; float: left; border-bottom: 2px solid rgb(68, 68, 68);\">Hình album ảnh cưới ngoại cảnh Vũng Tàu</span></h3>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới ngoại cảnh Vũng Tàu\" height=\"500\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/album-hinh-cuoi-ngoai-canh-vung-tau-1.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới ngoại cảnh Vũng Tàu\" height=\"500\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/album-hinh-cuoi-ngoai-canh-vung-tau-2.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới ngoại cảnh Vũng Tàu\" height=\"500\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/album-hinh-cuoi-ngoai-canh-vung-tau-3.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới ngoại cảnh Vũng Tàu\" height=\"500\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/album-hinh-cuoi-ngoai-canh-vung-tau-4.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới ngoại cảnh Vũng Tàu\" height=\"500\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/album-hinh-cuoi-ngoai-canh-vung-tau-5.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới ngoại cảnh Vũng Tàu\" height=\"500\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/album-hinh-cuoi-ngoai-canh-vung-tau-6.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"> </p>\r\n\r\n<h3 ..=\"\" background-attachment:=\"\" background-clip:=\"\" background-image:=\"\" background-origin:=\"\" background-position:=\"\" background-repeat:=\"\" background-size:=\"\" center=\"\" font-size:=\"\" images=\"\" line-height:=\"\" margin-bottom:=\"\" margin-top:=\"\" overflow:=\"\" padding-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \" text-align:=\"\"><span style=\"box-sizing: border-box; color: rgb(68, 68, 68); display: block; padding-bottom: 10px; font-size: 18pt; float: left; border-bottom: 2px solid rgb(68, 68, 68);\">Hình album ảnh cưới ngoại cảnh Sài Gòn</span></h3>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới ngoại cảnh Sài Gòn\" height=\"375\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/album-hinh-cuoi-ngoai-canh-sai-gon-1.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới ngoại cảnh Sài Gòn\" height=\"431\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/album-hinh-cuoi-ngoai-canh-sai-gon-5.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới ngoại cảnh Sài Gòn\" height=\"443\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/album-hinh-cuoi-ngoai-canh-sai-gon-4.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới ngoại cảnh Sài Gòn\" height=\"539\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/album-hinh-cuoi-ngoai-canh-sai-gon-6.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới ngoại cảnh Sài Gòn\" height=\"1270\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/album-hinh-cuoi-ngoai-canh-sai-gon-7.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới ngoại cảnh Sài Gòn\" height=\"495\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/album-hinh-cuoi-ngoai-canh-sai-gon-9.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới ngoại cảnh Sài Gòn\" height=\"463\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/album-hinh-cuoi-ngoai-canh-sai-gon-2.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới ngoại cảnh Sài Gòn\" height=\"507\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/album-hinh-cuoi-ngoai-canh-sai-gon-8.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 15px; font-family: Roboto, sans-serif; text-align: center;\"> </p>\r\n\r\n<h3 ..=\"\" background-attachment:=\"\" background-clip:=\"\" background-image:=\"\" background-origin:=\"\" background-position:=\"\" background-repeat:=\"\" background-size:=\"\" center=\"\" font-size:=\"\" images=\"\" line-height:=\"\" margin-bottom:=\"\" margin-top:=\"\" overflow:=\"\" padding-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \" text-align:=\"\"><span style=\"box-sizing: border-box; color: rgb(68, 68, 68); display: block; padding-bottom: 10px; font-size: 18pt; float: left; border-bottom: 2px solid rgb(68, 68, 68);\">Hình album ảnh cưới ngoại cảnh Biên Hòa</span></h3>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"><img alt=\"Hình album anh cưới ngoại cảnh Biên Hòa\" height=\"493\" src=\"http://alenvina.com/rfilemanager/source/tintuc/CTKHUYENMAI/album-cuoi-5tr/album-hinh-cuoi-ngoai-canh-bien-hoa-7.jpg\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle; width: auto; margin-bottom: 15px; height: auto; max-width: 100%;\" width=\"750\" /></p>\r\n\r\n<p style=\"box-sizing:border-box; margin:0px 0px 10px; font-size:15px; font-family:Roboto, sans-serif; text-align:center\"> </p>\r\n', '', '', '', 1, 1, 1535799796, 1537883523, 10, 0, 0, '', '', 'dich vu thong tin', '', '', 3, '', '', 0);
INSERT INTO `table_baiviet` (`id`, `id_list`, `id_cat`, `id_item`, `id_sub`, `noibat`, `moinhat`, `top_nb`, `type`, `photo`, `thumb`, `ten_vi`, `tenkhongdau`, `title`, `keywords`, `description`, `mota_vi`, `noidung_vi`, `ten_en`, `mota_en`, `noidung_en`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `luotxem`, `top_menu`, `bottom_menu`, `thongtin_vi`, `thongtin_en`, `text_search`, `tags`, `tagskhongdau`, `adminup`, `sokyhieu`, `ngaybanhanh`, `id_loai`) VALUES
(167, 49, 0, 0, 0, 1, 0, 0, 'thiet-ke', '4-3575.jpg', '4-3575_412x525.jpg', 'Ấn tượng với thiết kế nhà phố hiện đại', 'an-tuong-voi-thiet-ke-nha-pho-hien-dai', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Anh & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC VIP', '', '', '', '', 1, 1, 1536326799, 1537937126, 3, 0, 0, '', '', 'an tuong voi thiet ke nha pho hien dai', '', '', 8, '', '', 0),
(165, 49, 0, 0, 0, 1, 0, 0, 'thiet-ke', '20180801nhungmaunha2tangmaithai500trieudepchogiadinhdongnguoiothoaimai1-745.jpg', '20180801nhungmaunha2tangmaithai500trieudepchogiadinhdongnguoiothoaimai1-745_412x525.jpg', 'Thiết kế biệt thự 2 tầng mái thái', 'thiet-ke-biet-thu-2-tang-mai-thai', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1536326786, 1537937710, 0, 0, 0, '', '', 'thiet ke biet thu 2 tang mai thai', '', '', 8, '', '', 0),
(166, 49, 0, 0, 0, 1, 0, 0, 'thiet-ke', 'thietkenhaphodepdocdao-2813.jpg', 'thietkenhaphodepdocdao-2813_412x525.jpg', 'Thiết Kế Biệt Thự Độc Đáo', 'thiet-ke-biet-thu-doc-dao', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Anh & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC VIP', '', '', '', '', 1, 1, 1536326792, 1537937649, 1, 0, 0, '', '', 'thiet ke biet thu doc dao', '', '', 8, '', '', 0),
(163, 53, 0, 0, 0, 1, 0, 0, 'thiet-ke', 'nhungmaunhatretnhogondepmatbbbaaacgwoxx-7819.jpg', 'nhungmaunhatretnhogondepmatbbbaaacgwoxx-7819_412x525.jpg', 'Những mẫu nhà trệt nhỏ đẹp mắt', 'nhung-mau-nha-tret-nho-dep-mat', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1536326767, 1537938264, 13, 0, 0, '', '', 'nhung mau nha tret nho dep mat', '', '', 8, '', '', 0),
(164, 52, 0, 0, 0, 1, 0, 0, 'thiet-ke', 'mediumnwd1452601037-3163.jpg', 'mediumnwd1452601037-3163_412x525.jpg', 'Thiết kế nội thất Chung cư', 'thiet-ke-noi-that-chung-cu', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1536326774, 1537937805, 0, 0, 0, '', '', 'thiet ke noi that chung cu', '', '', 8, '', '', 0),
(185, 52, 0, 0, 0, 1, 0, 0, 'thiet-ke', 'thicongnoithatchungcudepoparkhillp08-7202.JPG', 'thicongnoithatchungcudepoparkhillp08-7202_412x525.jpg', 'Thiết kế nội thất căn hộ M-One 63m2', 'thiet-ke-noi-that-can-ho-mone-63m2', '', '', '', '', '', '', '', '', 1, 1, 1537937976, 0, 0, 0, 0, '', '', 'thiet ke noi that can ho mone 63m2', '', '', 8, '', '', 0),
(186, 53, 0, 0, 0, 1, 0, 0, 'thiet-ke', 'maunhadep2tangmattien6mthoangmat-1215.jpg', 'maunhadep2tangmattien6mthoangmat-1215_412x525.jpg', 'Mẫu nhà đẹp 2 tầng mặt tiền 6m2', 'mau-nha-dep-2-tang-mat-tien-6m2', '', '', '', 'Mẫu nhà đẹp 2 tầng mặt tiền 6m', '', '', '', '', 1, 1, 1537938329, 0, 0, 0, 0, '', '', 'mau nha dep 2 tang mat tien 6m2', '', '', 8, '', '', 0),
(187, 53, 0, 0, 0, 1, 0, 0, 'thiet-ke', 'maunhacap4maithai300trieu-3116.jpg', 'maunhacap4maithai300trieu-3116_412x525.jpg', 'Mẫu nhà đẹp 300 triệu', 'mau-nha-dep-300-trieu', '', '', '', '', '', '', '', '', 1, 1, 1537938408, 0, 0, 0, 0, '', '', 'mau nha dep 300 trieu', '', '', 8, '', '', 0),
(143, 0, 0, 0, 0, 1, 0, 0, 'tin-tuc', '39-3011.jpg', '39-3011_300x300.jpg', 'Nữ diễn giả Việt trở thành triệu phú USD tuổi 25 vì bị … đuổi việc', 'nu-dien-gia-viet-tro-thanh-trieu-phu-usd-tuoi-25-vi-bi-duoi-viec', '', '', '', 'It sometimes happens if fails to load print preview, maybe when the content to print is quite big (i noticed it only with Chrome while same page prints perfeclty in Firefox, however i dont exclude it might happen in Firefox or other browsers too). The best way i found is to run the print (and close) only after windows is loaded', '', '', '', '', 1, 1, 1535472881, 0, 1, 0, 0, '', '', 'nu dien gia viet tro thanh trieu phu usd tuoi 25 vi bi duoi viec', '', '', 3, '', '', 0),
(145, 0, 0, 0, 0, 1, 0, 0, 'tin-tuc', '28-8096.jpg', '28-8096_300x300.jpg', 'Quà tặng mùa hè cho ứng viên tìm việc, CV Hay – Có ngay cơ hội', 'qua-tang-mua-he-cho-ung-vien-tim-viec-cv-hay-co-ngay-co-hoi', '', '', '', 'It sometimes happens if fails to load print preview, maybe when the content to print is quite big (i noticed it only with Chrome while same page prints perfeclty in Firefox, however i dont exclude it might happen in Firefox or other browsers too). The best way i found is to run the print (and close) only after windows is loaded', '', '', '', '', 1, 1, 1535472913, 0, 0, 0, 0, '', '', 'qua tang mua he cho ung vien tim viec cv hay co ngay co hoi', '', '', 3, '', '', 0),
(160, 0, 0, 0, 0, 1, 0, 0, 'tin-tuc', 'noithat-2363.jpg', 'noithat-2363_300x300.jpg', 'Nội thất giá trị cốt lõi', 'noi-that-gia-tri-cot-loi', '', '', '', 'It sometimes happens if fails to load print preview, maybe when the content to print is quite big (i noticed it only with Chrome while same page prints perfeclty in Firefox, however i dont exclude it might happen in Firefox or other browsers too). The best way i found is to run the print (and close) only after windows is loaded', '<p>Nội dung tuyển dụng</p>\r\n', '', '', '', 1, 1, 1535800082, 1537935299, 2, 0, 0, '', '', 'noi that gia tri cot loi', '', '', 8, '', '', 0),
(161, 0, 0, 0, 0, 1, 0, 0, 'tin-tuc', 'bia192018500x500c-3035.jpg', 'bia192018500x500c-3035_300x300.jpg', 'Cẩm nang kiến trúc', 'cam-nang-kien-truc', '', '', '', 'It sometimes happens if fails to load print preview, maybe when the content to print is quite big (i noticed it only with Chrome while same page prints perfeclty in Firefox, however i dont exclude it might happen in Firefox or other browsers too). The best way i found is to run the print (and close) only after windows is loaded', '<p>Nội dung tuyển dụng</p>\r\n', '', '', '', 1, 1, 1535800159, 1537935221, 13, 0, 0, '', '', 'cam nang kien truc', '', '', 8, '', '', 0),
(162, 0, 0, 0, 0, 1, 0, 0, 'tin-tuc', 'bannerthietkemienphi1128-4920.jpg', 'bannerthietkemienphi1128-4920_300x300.jpg', 'Tư vấn thiết kế miễn phí', 'tu-van-thiet-ke-mien-phi', '', '', '', 'It sometimes happens if fails to load print preview, maybe when the content to print is quite big (i noticed it only with Chrome while same page prints perfeclty in Firefox, however i dont exclude it might happen in Firefox or other browsers too). The best way i found is to run the print (and close) only after windows is loaded', '<p>nội dung</p>\r\n', '', '', '', 1, 1, 1535800363, 1537935119, 7, 0, 0, '', '', 'tu van thiet ke mien phi', '', '', 8, '', '', 0),
(170, 0, 0, 0, 0, 0, 0, 0, 'gioi-thieu', 'nhungluuydeconhungbucanhcuoideptuyetvoi1083-4793.jpg', 'nhungluuydeconhungbucanhcuoideptuyetvoi1083-4793_412x525.jpg', 'Hồ sơ năng lực', 'ho-so-nang-luc', '', '', '', 'It sometimes happens if fails to load print preview, maybe when the content to print is quite big (i noticed it only with Chrome while same page prints perfeclty in Firefox, however i dont exclude it might happen in Firefox or other browsers too). The best way i found is to run the print (and close) only after windows is loaded', '', '', '', '', 1, 1, 1537498530, 1537857920, 1, 0, 0, '', '', 'ho so nang luc', '', '', 3, '', '', 0),
(171, 0, 0, 0, 0, 0, 0, 0, 'gioi-thieu', 'nhungluuydeconhungbucanhcuoideptuyetvoi1083-2753.jpg', 'nhungluuydeconhungbucanhcuoideptuyetvoi1083-2753_412x525.jpg', 'Hệ thống nhân sự', 'he-thong-nhan-su', '', '', '', 'It sometimes happens if fails to load print preview, maybe when the content to print is quite big (i noticed it only with Chrome while same page prints perfeclty in Firefox, however i dont exclude it might happen in Firefox or other browsers too). The best way i found is to run the print (and close) only after windows is loaded', '', '', '', '', 1, 1, 1537498542, 1537857905, 2, 0, 0, '', '', 'he thong nhan su', '', '', 3, '', '', 0),
(172, 0, 0, 0, 0, 0, 0, 0, 'gioi-thieu', 'nhungluuydeconhungbucanhcuoideptuyetvoi1083-6897.jpg', 'nhungluuydeconhungbucanhcuoideptuyetvoi1083-6897_412x525.jpg', 'Lịch sử thành lập', 'lich-su-thanh-lap', '', '', '', 'It sometimes happens if fails to load print preview, maybe when the content to print is quite big (i noticed it only with Chrome while same page prints perfeclty in Firefox, however i dont exclude it might happen in Firefox or other browsers too). The best way i found is to run the print (and close) only after windows is loaded', '', '', '', '', 1, 1, 1537498556, 1537857882, 1, 0, 0, '', '', 'lich su thanh lap', '', '', 3, '', '', 0),
(173, 0, 0, 0, 0, 0, 0, 0, 'gioi-thieu', 'nhungluuydeconhungbucanhcuoideptuyetvoi1083-4324.jpg', 'nhungluuydeconhungbucanhcuoideptuyetvoi1083-4324_412x525.jpg', 'Tầm nhìn - sứ mệnh', 'tam-nhin-su-menh', '', '', '', 'It sometimes happens if fails to load print preview, maybe when the content to print is quite big (i noticed it only with Chrome while same page prints perfeclty in Firefox, however i dont exclude it might happen in Firefox or other browsers too). The best way i found is to run the print (and close) only after windows is loaded', '', '', '', '', 1, 1, 1537498559, 1537857869, 3, 0, 0, '', '', 'tam nhin su menh', '', '', 3, '', '', 0),
(174, 56, 0, 0, 0, 1, 0, 0, 'thi-cong', 'suachuanhacanhoquan2-5927.JPG', 'suachuanhacanhoquan2-5927_412x525.jpg', 'Sửa chữa công ty anh Thắng - Q. Bình Thạnh', 'sua-chua-cong-ty-anh-thang-q-binh-thanh', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1537500859, 1537939405, 0, 0, 0, '', '', 'sua chua cong ty anh thang q binh thanh', '', '', 8, '', '', 0),
(175, 56, 0, 0, 0, 1, 0, 0, 'thi-cong', 'suachuacaitaonhataiquanthanhxuan-7940.jpg', 'suachuacaitaonhataiquanthanhxuan-7940_412x525.jpg', 'Sửa chữa nhà anh Linh - Q. Tân Phú', 'sua-chua-nha-anh-linh-q-tan-phu', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1537500888, 1537939327, 0, 0, 0, '', '', 'sua chua nha anh linh q tan phu', '', '', 8, '', '', 0),
(176, 56, 0, 0, 0, 1, 0, 0, 'thi-cong', 'suachuacaitaonhataiquanlongbien-6916.jpg', 'suachuacaitaonhataiquanlongbien-6916_412x525.jpg', 'Sửa chữa cải tạo nhà khu vực Hồ Chí Minh', 'luat-doanh-nghiep-682014qh13-hieu-luc-tu-0172015', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1537500915, 1537939267, 0, 0, 0, '', '', 'sua chua cai tao nha khu vuc ho chi minh', '', '', 8, '', '', 0),
(177, 55, 0, 0, 0, 1, 0, 0, 'thi-cong', '2-829.jpg', '2-829.jpg', 'Luật sửa đổi, bổ sung một số điều của Luật quản lý thuế', 'luat-sua-doi-bo-sung-mot-so-dieu-cua-luat-quan-ly-thue', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1537501052, 1537883498, 1, 0, 0, '', '', 'luat sua doi bo sung mot so dieu cua luat quan ly thue', '', '', 3, '', '', 0),
(178, 55, 0, 0, 0, 1, 0, 0, 'thi-cong', '2-829.jpg', '2-829.jpg', 'Nghị định số 108/2018/NĐ-CP sửa đổi,', 'nghi-dinh-so-1082018ndcp-sua-doi', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1537501106, 1537883485, 0, 0, 0, '', '', 'nghi dinh so 1082018ndcp sua doi', '', '', 3, '', '', 0),
(179, 55, 0, 0, 0, 1, 0, 0, 'thi-cong', '2-829.jpg', '2-829.jpg', 'Nghị định số 120/2016/NĐ-CP hướng dẫn Luật Phí và lệ phi', 'nghi-dinh-so-1202016ndcp-huong-dan-luat-phi-va-le-phi', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1537501157, 1537883472, 0, 0, 0, '', '', 'nghi dinh so 1202016ndcp huong dan luat phi va le phi', '', '', 3, '', '', 0),
(180, 54, 0, 0, 0, 1, 0, 0, 'thi-cong', '2-829.jpg', '2-829.jpg', 'Thông tư số 130/2017/TT-BTC sửa đổi, bổ sung', 'thong-tu-so-1302017ttbtc-sua-doi-bo-sung', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1537501185, 1537883460, 1, 0, 0, '', '', 'thong tu so 1302017ttbtc sua doi bo sung', '', '', 3, '', '', 0),
(181, 54, 0, 0, 0, 1, 0, 0, 'thi-cong', '2-829.jpg', '2-829.jpg', 'Thông tư số 215/2016/TT-BTC ngày 10/11/2016x', 'thong-tu-so-2152016ttbtc-ngay-10112016x', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1537501207, 1537883450, 0, 0, 0, '', '', 'thong tu so 2152016ttbtc ngay 10112016x', '', '', 3, '', '', 0),
(182, 58, 0, 0, 0, 1, 0, 0, 'thi-cong', 'img20170911171720775767b5-9381.jpg', 'img20170911171720775767b5-9381_412x525.jpg', 'Công trình biệt thự nhà anh Thái - Q. Tân Bình', 'cong-trinh-biet-thu-nha-anh-thai-q-tan-binh', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1537501232, 1537938857, 0, 0, 0, '', '', 'cong trinh biet thu nha anh thai q tan binh', '', '', 8, '', '', 0),
(183, 54, 0, 0, 0, 1, 0, 0, 'thi-cong', '2-829.jpg', '2-829.jpg', 'Quyết định ban hành Hệ thống ngành kinh tế Việt Nam', 'quyet-dinh-ban-hanh-he-thong-nganh-kinh-te-viet-nam', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1537501256, 1537883430, 0, 0, 0, '', '', 'quyet dinh ban hanh he thong nganh kinh te viet nam', '', '', 3, '', '', 0),
(184, 58, 0, 0, 0, 1, 0, 0, 'thi-cong', 'quytrinhxaynha-5604.jpg', 'quytrinhxaynha-5604_412x525.jpg', 'Công trình nhà anh Đắc Sĩ - Quận 12', 'cong-trinh-nha-anh-dac-si-quan-12', '', '', '', 'Chủ đầu tư: (Ông) Phan Tứ\r\nĐịa chỉ: Q.Tân Phú, TP.HCM.\r\nThiết kế: KTS Phan Bảo Huy & cộng sự.\r\nCông Ty TNHH Tư Vấn, Thiết Kế - Xây Dựng KIẾN TRÚC MỚI', '', '', '', '', 1, 1, 1537501298, 1537938710, 8, 0, 0, '', '', 'cong trinh nha anh dac si quan 12', '', '', 8, '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_baiviet_cat`
--

CREATE TABLE `table_baiviet_cat` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_baiviet_cat`
--

INSERT INTO `table_baiviet_cat` (`id`, `id_list`, `type`, `ten_vi`, `ten_en`, `mota_vi`, `mota_en`, `tenkhongdau`, `mota`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, 12, 'dich-vu', 'Chính sách giao hàng', '', '', '', 'chinh-sach-giao-hang', '', '', '', '', '', '', 1, 1, 1516949048, 0),
(3, 15, 'tin-tuc', 'Pháp luật cấp 2', 'Pháp luật cấp 2', '<p>Pháp luật cấp 2</p>\r\n', '<p>Pháp luật cấp 2</p>\r\n', 'phap-luat-cap-2', '', 'Pháp luật cấp 2', 'Pháp luật cấp 2', 'Pháp luật cấp 2', '4514shophoatuoi-8396.jpg', '4514shophoatuoi-8396_250x200.jpg', 1, 1, 1525244447, 0),
(4, 18, 'du-an', 'Nhà phố 52m2 - 80m2', '', '', '', 'nha-pho-52m2-80m2', '', '', '', '', '', '', 1, 1, 1531712663, 0),
(5, 19, 'du-an', 'Căn hộ 60m2 - 100m2', '', '', '', 'can-ho-60m2-100m2', '', '', '', '', '', '', 1, 1, 1531712693, 0),
(6, 19, 'du-an', 'Căn hộ 115m2 - 150m2', '', '', '', 'can-ho-115m2-150m2', '', '', '', '', '', '', 1, 1, 1531712714, 0),
(7, 19, 'du-an', 'Căn hộ 2 phòng ngủ', '', '', '', 'can-ho-2-phong-ngu', '', '', '', '', '', '', 1, 1, 1531712755, 0),
(8, 19, 'du-an', 'Căn hộ 65m2 - 70m2', '', '', '', 'can-ho-65m2-70m2', '', '', '', '', '', '', 1, 1, 1531712788, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_baiviet_item`
--

CREATE TABLE `table_baiviet_item` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `ten_cn` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_baiviet_item`
--

INSERT INTO `table_baiviet_item` (`id`, `id_list`, `id_cat`, `type`, `ten_vi`, `ten_en`, `mota_vi`, `mota_en`, `tenkhongdau`, `mota`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `ten_cn`) VALUES
(1, 12, 1, 'dich-vu', 'Xxxxx', '', '', '', 'xxxxx', '', '', '', '', 'mt1305homeheaderbg-6049.jpg', 'mt1305homeheaderbg-6049_250x200.jpg', 1, 1, 1516949058, 0, ''),
(2, 15, 3, 'tin-tuc', 'Pháp luật cấp 3', 'Pháp luật cấp 3', '<p>Pháp luật cấp 3</p>\r\n', '<p>Pháp luật cấp 3</p>\r\n', 'phap-luat-cap-3', '', 'Pháp luật cấp 3', 'Pháp luật cấp 3', 'Pháp luật cấp 3', '4514shophoatuoi-5701.jpg', '4514shophoatuoi-5701_250x200.jpg', 1, 1, 1525244516, 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_baiviet_list`
--

CREATE TABLE `table_baiviet_list` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `quangcao` varchar(255) NOT NULL,
  `quangcao_thumb` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `noibat` tinyint(2) NOT NULL,
  `ten_cn` varchar(255) NOT NULL,
  `mota_cn` text NOT NULL,
  `name_cn` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_baiviet_list`
--

INSERT INTO `table_baiviet_list` (`id`, `type`, `ten_vi`, `ten_en`, `name_vi`, `name_en`, `mota_vi`, `mota_en`, `tenkhongdau`, `quangcao`, `quangcao_thumb`, `links`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `noibat`, `ten_cn`, `mota_cn`, `name_cn`) VALUES
(48, 'van-ban-phap-luat', 'Văn bản về đăng ký kinh doanh', '', '', '', '', '', 'van-ban-ve-dang-ky-kinh-doanh', '', '', '', '', '', '', '', '', 1, 1, 1537500834, 0, 0, '', '', ''),
(47, 'loai-van-ban', 'Quyết định', '', '', '', '', '', 'quyet-dinh', '', '', '', '', '', '', '', '', 1, 1, 1537500647, 0, 0, '', '', ''),
(46, 'loai-van-ban', 'Thông tư', '', '', '', '', '', 'thong-tu', '', '', '', '', '', '', '', '', 1, 1, 1537500632, 0, 0, '', '', ''),
(45, 'loai-van-ban', 'Nghị định', '', '', '', '', '', 'nghi-dinh', '', '', '', '', '', '', '', '', 1, 1, 1537500607, 0, 0, '', '', ''),
(44, 'loai-van-ban', 'Luật', '', '', '', '', '', 'luat', '', '', '', '', '', '', '', '', 1, 1, 1537500587, 0, 0, '', '', ''),
(42, 'tin-tuc', 'Tin thương mại', '', '', '', '', '', 'tin-thuong-mai', '', '', '', '', '', '', '', '', 1, 1, 1537497948, 0, 0, '', '', ''),
(43, 'tin-tuc', 'Tin chuyên ngành', '', '', '', '', '', 'tin-chuyen-nganh', '', '', '', '', '', '', '', '', 1, 1, 1537497970, 0, 0, '', '', ''),
(41, 'tin-tuc', 'Tin pháp luật', '', '', '', '', '', 'tin-phap-luat', '', '', '', '', '', '', '', '', 1, 1, 1537497934, 0, 0, '', '', ''),
(49, 'thiet-ke', 'Thiết kế nhà phố - biệt thự', '', '', '', '', '', 'thiet-ke-nha-pho-biet-thu', '', '', '', 'Thiết kế nhà phố - biệt thự', 'Thiết kế nhà phố - biệt thự', 'Thiết kế nhà phố - biệt thự', '', '', 1, 1, 1537856714, 0, 1, '', '', ''),
(52, 'thiet-ke', 'Thiết kế nội thất căn hộ', '', '', '', '', '', 'thiet-ke-noi-that-can-ho', '', '', '', 'Thiết kế nội thất căn hộ', 'Thiết kế nội thất căn hộ', 'Thiết kế nội thất căn hộ', '', '', 2, 1, 1537856786, 1537936121, 1, '', '', ''),
(53, 'thiet-ke', 'Mẫu nhà đẹp', '', '', '', '', '', 'mau-nha-dep', '', '', '', 'Mẫu nhà biệt thự - căn hộ', 'Mẫu nhà biệt thự - căn hộ', 'Mẫu nhà biệt thự - căn hộ', '', '', 3, 1, 1537856807, 1537936163, 1, '', '', ''),
(54, 'thi-cong', 'Thi công xây dựng mới', '', '', '', '', '', 'thi-cong-xay-dung-moi', '', '', '', 'Thi công xây dựng mới', 'Thi công xây dựng mới', 'Thi công xây dựng mới', '', '', 1, 0, 1537856826, 0, 1, '', '', ''),
(55, 'thi-cong', 'Thi công nội thất', '', '', '', '', '', 'thi-cong-noi-that', '', '', '', 'Thi công nội thất', 'Thi công nội thất', 'Thi công nội thất', '', '', 1, 0, 1537856838, 1537856855, 1, '', '', ''),
(56, 'thi-cong', 'Sửa chữa - Cải tạo', '', '', '', '', '', 'sua-chua-cai-tao', '', '', '', 'Sửa chữa - Cải tạo', 'Sửa chữa - Cải tạo', 'Sửa chữa - Cải tạo', '', '', 1, 1, 1537856869, 0, 1, '', '', ''),
(58, 'thi-cong', 'Công trình hoàn thiện', '', '', '', '', '', 'cong-trinh-hoan-thien', '', '', '', 'Công trình hoàn thiện', 'Công trình hoàn thiện', 'Công trình hoàn thiện', '', '', 1, 1, 1537856903, 0, 1, '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_baiviet_photo`
--

CREATE TABLE `table_baiviet_photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_baiviet` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(1024) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_baiviet_photo`
--

INSERT INTO `table_baiviet_photo` (`id`, `id_baiviet`, `type`, `photo`, `thumb`, `ten`, `mota`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(56, 566, 'product', '1-8195.jpg', '1-8195_600x600.jpg', '', '', 1, 1, 0, 0),
(57, 566, 'product', '2-7972.jpg', '2-7972_600x600.jpg', '', '', 2, 1, 0, 0),
(58, 566, 'product', '3-9124.jpg', '3-9124_600x600.jpg', '', '', 3, 1, 0, 0),
(59, 566, 'product', '4-864.jpg', '4-864_600x600.jpg', '', '', 4, 1, 0, 0),
(60, 566, 'product', '8-3921.jpg', '8-3921_600x600.jpg', '', '', 5, 1, 0, 0),
(61, 566, 'product', '9-7234.jpg', '9-7234_600x600.jpg', '', '', 7, 1, 0, 0),
(62, 566, 'product', '10-1757.jpg', '10-1757_600x600.jpg', '', '', 8, 1, 0, 0),
(63, 566, 'product', '11-7687.jpg', '11-7687_600x600.jpg', '', '', 10, 1, 0, 0),
(64, 566, 'product', '15-6495.jpg', '15-6495_600x600.jpg', '', '', 10, 1, 0, 0),
(65, 566, 'product', '16-3745.jpg', '16-3745_600x600.jpg', '', '', 11, 1, 0, 0),
(66, 566, 'product', '17-4204.jpg', '17-4204_600x600.jpg', '', '', 12, 1, 0, 0),
(67, 566, 'product', '18-5359.png', '18-5359_600x600.png', '', '', 31, 1, 0, 0),
(68, 576, 'constructions', 'abandonedbrokencabin4284271-9385.jpg', 'abandonedbrokencabin4284271-9385_600x600.jpg', '', '', 1, 1, 0, 0),
(69, 576, 'constructions', 'architecturaldesignarchitecturebeach4532011-3966.jpg', 'architecturaldesignarchitecturebeach4532011-3966_600x600.jpg', '', '', 2, 1, 0, 0),
(70, 576, 'constructions', 'architecturebackyardboating534171-6287.jpg', 'architecturebackyardboating534171-6287_600x600.jpg', '', '', 3, 1, 0, 0),
(71, 576, 'constructions', 'architecturefacadehome259646-1251.jpg', 'architecturefacadehome259646-1251_600x600.jpg', '', '', 4, 1, 0, 0),
(72, 576, 'constructions', 'pexelsphoto731082-9096.jpeg', 'pexelsphoto731082-9096_600x600.jpeg', '', '', 5, 1, 0, 0),
(75, 159, 'bao-gia', 'trangdiemdeptaimailisa-2167.jpg', 'trangdiemdeptaimailisa-2167_300x300.jpg', '', '', 0, 1, 0, 0),
(76, 159, 'bao-gia', 'trangdiemcodaumailisa-8853.jpg', 'trangdiemcodaumailisa-8853_300x300.jpg', '', '', 0, 1, 0, 0),
(77, 159, 'bao-gia', 'trangdiemcodau-8131.jpg', 'trangdiemcodau-8131_300x300.jpg', '', '', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_com`
--

CREATE TABLE `table_com` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ten_com` varchar(100) CHARACTER SET utf8 NOT NULL,
  `act_com` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `danhmuc` int(10) NOT NULL,
  `type` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `act` varchar(225) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `stt` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_company`
--

CREATE TABLE `table_company` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cat` varchar(2) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `ten_en` varchar(225) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ngaysua` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ten_cn` varchar(255) NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_company`
--

INSERT INTO `table_company` (`id`, `id_cat`, `type`, `ten_vi`, `tenkhongdau`, `mota_vi`, `noidung_vi`, `ten_en`, `mota_en`, `noidung_en`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `ten_cn`, `mota_cn`, `noidung_cn`) VALUES
(4, '', 'lienhe', '', '', '', '<p><span style=\"font-size: 16px;\"><strong>CÔNG TY TNHH TƯ VẤN THIẾT KẾ - XÂY DỰNG KIẾN TRÚC VIP</strong></span></p>\r\n\r\n<p><strong>ĐỊA CHỈ</strong>: P1901 - Lầu 19 tòa nhà Saigon Trade Center - 37 Tôn Đức Thắng, Q.1, TP.HCM.</p>\r\n\r\n<p><strong>TEL</strong>: 028 222 55555 - FAX: 028 222 55566</p>\r\n\r\n<p><strong>HOTLINE</strong>: 0903 808 100</p>\r\n\r\n<p><strong>EMAIL</strong>: info@kientrucvip.vn</p>\r\n\r\n<p><strong>WEBSITE</strong>: www.kientrucvip.vn</p>\r\n', '', '', '<p>Contact</p>\r\n', '', '', '', '', '', 0, 0, 1444374706, 1537931904, '', '', ''),
(5, '', 'footer', '', '', '', '<p><span style=\"font-size:16px;\"><strong>CÔNG TY TNHH TƯ VẤN THIẾT KẾ - XÂY DỰNG KIẾN TRÚC VIP</strong></span></p>\r\n\r\n<p><strong>ĐỊA CHỈ</strong>: P1901 - Lầu 19 tòa nhà Saigon Trade Center - 37 Tôn Đức Thắng, Q.1, TP.HCM.</p>\r\n\r\n<p><strong>TEL</strong>: 028 222 55555 - FAX: 028 222 55566</p>\r\n\r\n<p><strong>HOTLINE</strong>: 0903 808 100 (KTS. Ngọc)</p>\r\n\r\n<p><strong>EMAIL</strong>: info@kientrucvip.vn</p>\r\n\r\n<p><strong>WEBSITE</strong>: www.kientrucvip.vn</p>\r\n\r\n<p>thiết kế nội thất | thiết kế căn hộ | thiết kế nhà đẹp | thi công nội thất | thi công nhà</p>\r\n', '', '', '<p style=\"margin: 10px 0px 0px; padding: 0px; width: 645px; float: left; color: rgb(0, 0, 0); font-family: Arial;\"><span style=\"margin: 0px; padding: 0px; font-size: 16px;\">Address: 931/28 Road 2, KP8, Tri Dong A Ward, Binh Tan District, Ho Chi Minh City</span></p>\r\n\r\n<p style=\"margin: 10px 0px 0px; padding: 0px; width: 645px; float: left; color: rgb(0, 0, 0); font-family: Arial;\"><span style=\"margin: 0px; padding: 0px; font-size: 16px;\">Hotline: 0917277643 - 0985740673</span></p>\r\n\r\n<p style=\"margin: 10px 0px 0px; padding: 0px; width: 645px; float: left; color: rgb(0, 0, 0); font-family: Arial;\"><span style=\"margin: 0px; padding: 0px; font-size: 16px;\">Website: thanhdatcashewmachine.com</span></p>\r\n\r\n<p style=\"margin: 10px 0px 0px; padding: 0px; width: 645px; float: left; color: rgb(0, 0, 0); font-family: Arial;\"><span style=\"margin: 0px; padding: 0px; font-size: 16px;\">Email: nhu.mhy@gmail.com</span></p>\r\n', '', '', '', '', '', 0, 0, 1444374721, 1537940778, '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_contact`
--

CREATE TABLE `table_contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `ten` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `dienthoai` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `ghichu` text NOT NULL,
  `view` int(10) NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_contact`
--

INSERT INTO `table_contact` (`id`, `stt`, `ten`, `diachi`, `dienthoai`, `email`, `tieude`, `noidung`, `ghichu`, `view`, `hienthi`, `ngaytao`) VALUES
(6, 0, '', '123123', '0933656651', '123123@gmail.com', '123123123', '123123123', '', 0, 1, 1525923520);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_counter`
--

CREATE TABLE `table_counter` (
  `id` int(11) NOT NULL,
  `tm` int(11) NOT NULL,
  `ip` varchar(16) NOT NULL DEFAULT '0.0.0.0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_gia`
--

CREATE TABLE `table_gia` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_vi` varchar(225) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `giatu` int(20) NOT NULL,
  `giaden` double NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ngaysua` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_hoidap`
--

CREATE TABLE `table_hoidap` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(225) NOT NULL,
  `mota` text NOT NULL,
  `noidung` longtext NOT NULL,
  `noidung_traloi` longtext NOT NULL,
  `email` varchar(225) NOT NULL,
  `dienthoai` varchar(225) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ngaysua` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `luotxem` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_hoidap`
--

INSERT INTO `table_hoidap` (`id`, `ten`, `mota`, `noidung`, `noidung_traloi`, `email`, `dienthoai`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `luotxem`) VALUES
(1, 'Nguyễn Thành Thắng', '', 'Hôm nay có được website nào chưa', '<p>Hôm nay có được website nào chưa</p>\r\n', 'thanhthangnina@gmail.com', '0903911070', 1, 1, 1525248016, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_info`
--

CREATE TABLE `table_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cat` varchar(2) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `ten_en` varchar(225) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ngaysua` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ten_cn` varchar(255) NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_info`
--

INSERT INTO `table_info` (`id`, `id_cat`, `type`, `ten_vi`, `tenkhongdau`, `mota_vi`, `noidung_vi`, `ten_en`, `mota_en`, `noidung_en`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `ten_cn`, `mota_cn`, `noidung_cn`) VALUES
(4, '', 'lienhe', '', '', '', '<p>lien he</p>\r\n', '', '', '<p>lien he</p>\r\n', '', '', '', '', '', 0, 0, 1444374572, 1444374636, '', '', ''),
(8, '', 'gioi-thieu', 'Về chúng tôi', 've-chung-toi', '', '<div class=\"show-pro\">\r\n<p style=\"margin: 0px 0px 12px; padding: 0px; color: rgb(105, 105, 105); font-family: MyriadPro, Helvetica, sans-serif; font-size: 18px; outline: none !important;\"><span style=\"outline: none !important; font-weight: 600;\">TẦM NHÌN</span></p>\r\n\r\n<p style=\"margin: 0px 0px 12px; padding: 0px; color: rgb(105, 105, 105); font-family: MyriadPro, Helvetica, sans-serif; font-size: 18px; outline: none !important;\">Trở thành thương hiệu kiến trúc mang đến phong cách mới cho căn nhà Việt</p>\r\n\r\n<p style=\"margin: 0px 0px 12px; padding: 0px; color: rgb(105, 105, 105); font-family: MyriadPro, Helvetica, sans-serif; font-size: 18px; outline: none !important;\"><span style=\"outline: none !important; font-weight: 600;\">SỨ MỆNH</span></p>\r\n\r\n<p style=\"margin: 0px; padding: 0px; color: rgb(105, 105, 105); font-family: MyriadPro, Helvetica, sans-serif; font-size: 18px; outline: none !important;\">Chúng tôi mang đến cho khách hàng sự tinh tế trong từng thiết kế, hoàn mỹ trong xây dựng theo xu hướng kiến trúc đương đại.</p>\r\n</div>\r\n', 'Welcome to THANH LONG RUBBER INDUSTRies', '<p>CHÀO MỪNG QUÝ KHÁCH ĐẾN VỚI GIỜ VÀNG</p>\r\n\r\n<p>Lời đầu tiên chúng tôi kinh chúc quý khách thành công trong kinh doanh và hạnh phúc trong cuộc sống. Mỹ Quyên là một công ty chuyên thiết kế thi công xây dựng và sửa chữa các công trình, nhà ở mang tính chuyên nghiệp.</p>\r\n\r\n<hr />\r\n<p>Để đáp ứng kịp thời sự phát triển của đất nước, Ban lãnh đạo Công ty Mỹ Quyên đã không ngừng nổ lực đưa ra những chính sách mới nhằm mở rộng lĩnh vực hoạt động và kinh doanh của Công ty. Với phương châm “ chất lượng tốt, đẳng cấp cao, dịch vụ hoàn hảo, giá cả hợp lý”. Với hệ thống trang thiết bị được đầu tư hiện đại cùng với đội ngũ nhân viên, kỹ thuật viên chuyên nghiệp, lành nghề Công ty chúng tôi không những đem đến cho quý khách hàng những công trình chất lượng cao mà còn là bạn đồng hành của quý vị trên suốt chặng đường phát triển. Mỹ Quyên không ngừng hoàn thiện, nâng cao trình độ và năng lực để đáp ứng tốt nhất cho tất cả các nhu cầu của khách hàng để đáp lại niềm tin khi mà quý khách đã tín nhiệm và lựa chọn các dịch vụ của chúng tôi. </p>\r\n\r\n<p style=\"line-height: 20.8px;\"> </p>\r\n\r\n<p style=\"line-height: 20.8px;\"> </p>\r\n\r\n<p style=\"line-height: 20.8px;\"> </p>\r\n', '<p>THANH LONG RUBBER INDUSTRIES is in the rubber business since 1990. We have been trading natural rubber through out Vietnam to China. Our first natural rubber processing factory was established in 1999 with capacity of 20,000 tons/year, business trading volume of 24,000 tons/year.</p>\r\n', 'Giới thiệu', 'Giới thiệu', 'Tọa lạc tại 133 Truông Tre - KP.Bình Minh 2 - Dĩ An - Bình Dương Áo Cưới TM tự hào', 'anhcuoi-1537.png', 'anhcuoi-1537_600x600.png', 0, 0, 1447211577, 1537931939, 'a', '', ''),
(9, '', 'phu-tung', 'PHỤ TÙNG YANMAR CHÍNH HÃNG', 'phu-tung-yanmar-chinh-hang', '<p>Chúng tôi là nhà cung cấp thiết bị, phụ tùng chính hãng của YANMAR, CUMMINS, DOOSANS, MITSUBISHI,..., Với mạng lưới chi nhánh phân phối rộng khắp trên cả nước chúng tôi luôn sãn sàng phục vụ quý khách hàng mọi lúc, mọi nơi. Các dòng sản phẩm chúng tôi cung cấp ra thị trường hiện tại phục vụ cho nhu cầu thay thế sửa chữa, máy móc tàu thủy, máy xây dựng, máy nông nghiệp, máy phát điện, và các máy móc công nghiệp khác. Bằng việc hợp tác với các nhà cung cấp hàng đầu thế giới cùng đội ngũ nhân viên chuyên nghiệp , nhiệt tình chúng tôi hy vọng sẽ mang những sản phẩm tốt nhất, uy tín chất lượng cao tới tay người tiêu dùng.</p>\r\n', '', '', '', '', '', '', '', '172225exciter13-3714.jpg', '172225exciter13-3714_295x195.jpg', 1, 0, 1509356402, 0, '', '', ''),
(10, '', 'cach-thuc-thanh-toan', 'Cách thức thanh toán', 'cach-thuc-thanh-toan', '', '<p>- Thanh toán trực tiếp:<br />\r\nKhi nhận hàng, Quý khách vui lòng thanh toán trực tiếp cho người giao hàng của Men Fashion<br />\r\n- Chuyển khoản:<br />\r\nMen Fashion<br />\r\nSTK: 100200300400<br />\r\nChi nhánh ngân hàng nhà nước việt nam</p>\r\n', '', '', '', '', '', '', '', '', 0, 0, 1536328048, 1536328541, '', '', ''),
(11, '', 'cach-thuc-giao-hang', 'Cách thức giao hàng', 'cach-thuc-giao-hang', '', '<p>- Giao hàng dịch vụ tận nơi<br />\r\nMiễn phí ship cho những đơn hàng trên 500.000 vnđ<br />\r\nKhu vực Tp. HCM giao trong ngày<br />\r\nNgoài khu vực giao hàng từ 2 ~ 7 ngày<br />\r\n- Nhận hàng tại cửa hàng<br />\r\nQuý khách đặt hàng vui lòng đến cửa hàng nhận hàng các ngày trong tuần từ  T2 - CN thời gian từ 8:00 đến 22:00</p>\r\n', '', '', '', '', '', '', '', '', 1, 0, 1536328067, 0, '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_newsletter`
--

CREATE TABLE `table_newsletter` (
  `id` int(10) UNSIGNED NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `ten` varchar(225) NOT NULL,
  `gioitinh` varchar(255) NOT NULL,
  `sanpham` varchar(50) NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `noidung` longtext NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ngaysua` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `email` varchar(225) NOT NULL,
  `dienthoai` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_newsletter`
--

INSERT INTO `table_newsletter` (`id`, `stt`, `ten`, `gioitinh`, `sanpham`, `tieude`, `noidung`, `hienthi`, `ngaytao`, `ngaysua`, `email`, `dienthoai`) VALUES
(148, 1, '', 'Nam', '', '', '', 1, 1445655763, 0, 'nguyenhieunina@gmail.com', ''),
(149, 1, '', 'Nam', '', '', '', 1, 1445655797, 0, 'nhieunina@gmail.co', ''),
(150, 1, '', '', '', '', '', 1, 0, 0, 'a@gmail.com', ''),
(151, 1, '', '', '', '', '', 1, 0, 0, 'thanhtbgna1@gmail.com', ''),
(152, 1, '', '', '', '', '', 1, 0, 0, 'ad@gmail.com', ''),
(153, 1, '', '', '', '', '', 1, 0, 0, 'thanhthangxxxxx@gmail.com', ''),
(154, 1, '', '', '', '', '', 1, 0, 0, 'xxxx@gmail.com', ''),
(155, 1, '', '', '', '', '', 1, 0, 0, 'xxxxx@gmail.com', ''),
(156, 1, '', '', '', '', '', 1, 0, 0, 'xxxxxxxxxx@gmail.com', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_online`
--

CREATE TABLE `table_online` (
  `id` int(10) UNSIGNED NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `time` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_online`
--

INSERT INTO `table_online` (`id`, `session_id`, `time`) VALUES
(68732, '1ogjl48toohlvghgpqdipmed70', 1537884991);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_order`
--

CREATE TABLE `table_order` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `madonhang` varchar(20) NOT NULL,
  `profile` text NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `dist` varchar(255) NOT NULL,
  `hoten_nguoinhan` varchar(255) NOT NULL,
  `diachi_nguoinhan` varchar(255) NOT NULL,
  `email_nguoinhan` varchar(255) NOT NULL,
  `dienthoai_nguoinhan` varchar(255) NOT NULL,
  `city_nguoinhan` varchar(255) NOT NULL,
  `dist_nguoinhan` varchar(255) NOT NULL,
  `tonggia` int(11) NOT NULL,
  `view` int(10) NOT NULL,
  `httt` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ghichu` text NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_order`
--

INSERT INTO `table_order` (`id`, `id_user`, `madonhang`, `profile`, `hoten`, `diachi`, `email`, `dienthoai`, `city`, `dist`, `hoten_nguoinhan`, `diachi_nguoinhan`, `email_nguoinhan`, `dienthoai_nguoinhan`, `city_nguoinhan`, `dist_nguoinhan`, `tonggia`, `view`, `httt`, `noidung`, `ghichu`, `ngaytao`, `trangthai`) VALUES
(4, 0, '5IJFCQ', '{\"nguoidat\":{\"hoten\":\"Nguyu1ec5n Vu0103n Tu00e8o\",\"dienthoai\":\"0933526651\",\"diachi\":\"Tu1ea7ng 4, Tu00f2a thu00e1p Ngu00f4i Sao - Star Tower, u0111u01b0u1eddng Du01b0u01a1ng u0110u00ecnh Nghu1ec7 -Phu01b0u1eddng Yu00ean Hu00f2a - Quu1eadn Cu1ea7u Giu1ea5y - Hu00e0 Nu1ed9i\",\"email\":\"thanhthangnina@gmail.com\",\"city\":1,\"dist\":4},\"nguoinhan\":{\"hoten\":\"Nguyu1ec5n Vu0103n Tu00e8o\",\"dienthoai\":\"0933526651\",\"diachi\":\"Tu1ea7ng 4, Tu00f2a thu00e1p Ngu00f4i Sao - Star Tower, u0111u01b0u1eddng Du01b0u01a1ng u0110u00ecnh Nghu1ec7 -Phu01b0u1eddng Yu00ean Hu00f2a - Quu1eadn Cu1ea7u Giu1ea5y - Hu00e0 Nu1ed9i\",\"email\":\"thanhthangnina@gmail.com\",\"city\":1,\"dist\":4}}', 'Nguyễn Văn Tèo', 'Tầng 4, Tòa tháp Ngôi Sao - Star Tower, đường Dương Đình Nghệ -Phường Yên Hòa - Quận Cầu Giấy - Hà Nội', 'thanhthangnina@gmail.com', '0933526651', '1', '4', 'Nguyễn Văn Tèo', 'Tầng 4, Tòa tháp Ngôi Sao - Star Tower, đường Dương Đình Nghệ -Phường Yên Hòa - Quận Cầu Giấy - Hà Nội', 'thanhthangnina@gmail.com', '0933526651', '1', '4', 900000, 1, 0, 'Tầng 4, Tòa tháp Ngôi Sao - Star Tower,\r\nđường Dương Đình Nghệ -Phường Yên Hòa - Quận Cầu Giấy - Hà Nội', '', 1525846511, 1),
(5, 10, 'MMQRKM', '{\"nguoidat\":{\"hoten\":\"Nguyu1ec5n Thu00e0nh Thu1eafng\",\"dienthoai\":\"0933526651\",\"diachi\":\"106 Bu00e0u Cu00e1t 1. Phu01b0u1eddng 14, Quu1eadn Tu00e2n Bu00ecnh\",\"email\":\"thanhthangnina@gmail.com\",\"city\":1,\"dist\":1},\"nguoinhan\":{\"hoten\":\"Nguyu1ec5n Thu00e0nh Thu1eafng\",\"dienthoai\":\"0933526651\",\"diachi\":\"106 Bu00e0u Cu00e1t 1. Phu01b0u1eddng 14, Quu1eadn Tu00e2n Bu00ecnh\",\"email\":\"thanhthangnina@gmail.com\",\"city\":1,\"dist\":1}}', 'Nguyễn Thành Thắng', '106 Bàu Cát 1. Phường 14, Quận Tân Bình', 'thanhthangnina@gmail.com', '0933526651', '1', '1', 'Nguyễn Thành Thắng', '106 Bàu Cát 1. Phường 14, Quận Tân Bình', 'thanhthangnina@gmail.com', '0933526651', '1', '1', 1000000, 1, 0, 'Gửi nhanh', '', 1536373986, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_order_detail`
--

CREATE TABLE `table_order_detail` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_order` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_order_detail`
--

INSERT INTO `table_order_detail` (`id`, `id_product`, `id_order`, `ten`, `gia`, `soluong`) VALUES
(1, 264, '4LW6W', 'Vận tải nội địa', 1900000, 1),
(2, 264, 'SXZMWJ', 'Vận tải nội địa', 1900000, 78),
(3, 508, '8FQGWI', 'Đá phong thủy hang sang 4', 300000, 5),
(4, 508, 'W0V5GY', 'Đá phong thủy hang sang 4', 300000, 5),
(5, 513, 'WLYXFN', 'Đá phong thủy hang sang 9', 300000, 3),
(6, 513, '5IJFCQ', 'Đá phong thủy hang sang 9', 300000, 3),
(7, 605, 'MMQRKM', 'Áo khoác MCT-002', 500000, 1),
(8, 606, 'MMQRKM', 'Áo khoác MCT-003', 500000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_phanquyen`
--

CREATE TABLE `table_phanquyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_list` varchar(255) NOT NULL,
  `id_cat` varchar(255) NOT NULL,
  `id_item` varchar(255) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `ten` varchar(200) NOT NULL,
  `com` text NOT NULL,
  `table_vitri` varchar(225) NOT NULL,
  `xem` varchar(225) NOT NULL,
  `them` varchar(225) NOT NULL,
  `sua` varchar(225) NOT NULL,
  `xoa` varchar(225) NOT NULL,
  `soluong` varchar(200) NOT NULL,
  `mausac` varchar(50) NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL DEFAULT '0',
  `ngaysua` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_phanquyen`
--

INSERT INTO `table_phanquyen` (`id`, `id_list`, `id_cat`, `id_item`, `stt`, `ten`, `com`, `table_vitri`, `xem`, `them`, `sua`, `xoa`, `soluong`, `mausac`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(21, '[\"5\"]', '[\"6\",\"5\"]', '[\"5\"]', 1, 'Quản lý bigmart 1', 'null', 'null', '[\"1|1\",\"8|1\"]', '[\"1|1\",\"8|1\"]', '[\"1|1\",\"8|1\"]', '[\"8|1\"]', '', '#37cd30', 1, 1436943747, 1446189435);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_photo`
--

CREATE TABLE `table_photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_vitri` int(11) NOT NULL,
  `photo_vi` varchar(225) NOT NULL,
  `photo_en` varchar(225) NOT NULL,
  `thumb_vi` varchar(255) NOT NULL,
  `thumb_en` varchar(255) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `mota_vi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `com` varchar(30) NOT NULL,
  `top_left` tinyint(2) NOT NULL,
  `top_right` tinyint(2) NOT NULL,
  `bottom_left` tinyint(2) NOT NULL,
  `bottom_right` tinyint(2) NOT NULL,
  `photo_logo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_photo`
--

INSERT INTO `table_photo` (`id`, `id_vitri`, `photo_vi`, `photo_en`, `thumb_vi`, `thumb_en`, `ten_vi`, `ten_en`, `link`, `mota_vi`, `mota_en`, `stt`, `hienthi`, `com`, `top_left`, `top_right`, `bottom_left`, `bottom_right`, `photo_logo`) VALUES
(1, 0, 'logoname-5392.png', 'banner-7599.png', 'logoname-5392_600x600.png', '', '', '', '', '', '', 1, 1, 'banner_top', 0, 0, 0, 0, ''),
(2, 0, 'realestatecompanylogodesign-3223.jpg', 'logoktkgsmall-5617.png', 'realestatecompanylogodesign-3223_190x165.jpg', 'logoktkgsmall-5617_600x600.png', '', '', '', '', '', 1, 1, 'logo', 0, 0, 0, 0, ''),
(100, 0, '809312990223098.png', '', '809312990223098_615x248.png', '', 'Quảng cáo 1', '', 'http://kientrucmoi.vn/', '', '', 2, 1, 'quangcao', 0, 0, 0, 0, ''),
(101, 0, '703978312184701.jpg', '', '703978312184701_615x248.jpg', '', 'Quảng cáo 2', '', 'http://kientrucmoi.vn/', '', '', 3, 1, 'quangcao', 0, 0, 0, 0, ''),
(6, 0, '554215029270186.jpg', '', '554215029270186_610x310.jpg', '', 'Google plus', '', 'http://nhadat24h.net/DKTV-thanhtoanwos-2821-15', '', '', 1, 1, 'mangxahoi', 0, 0, 0, 0, ''),
(7, 0, '081359867751044.jpg', '', '081359867751044_610x310.jpg', '', 'Twitter', '', 'http://nhadat24h.net/DKTV-thanhtoanwos-2821-15', '', '', 1, 1, 'mangxahoi', 0, 0, 0, 0, ''),
(8, 0, '232332768392876.jpg', '', '232332768392876_610x310.jpg', '', 'Youtube', '', 'http://nhadat24h.net/DKTV-thanhtoanwos-2821-15', '', '', 1, 1, 'mangxahoi', 0, 0, 0, 0, ''),
(30, 0, 'banner-5093.png', 'banner-9475.png', '', '', '', '', '', '', '', 1, 1, 'banner_mobile', 0, 0, 0, 0, ''),
(31, 0, 'hotlinevi-1731.png', 'hotlineen-3023.png', '', '', '', '', '', '', '', 1, 1, 'hotline_top', 0, 0, 0, 0, ''),
(32, 0, '269740421998708.jpg', '', '269740421998708_600x600.jpg', '', 'Thiết kế nhà phố', '', 'http://nhadat24h.net/DKTV-thanhtoanwos-2821-15', '', '', 1, 1, 'doitac', 0, 0, 0, 0, ''),
(33, 0, '712441003638719.jpg', '', '712441003638719_610x310.jpg', '', 'Facebook', '', 'http://nhadat24h.net/DKTV-thanhtoanwos-2821-15', '', '', 1, 1, 'mangxahoi', 0, 0, 0, 0, ''),
(34, 0, '338383300992550.jpg', '', '338383300992550_600x600.jpg', '', 's', '', '', '', '', 1, 1, 'doitac', 0, 0, 0, 0, ''),
(35, 0, '211527466086703.jpg', '', '211527466086703_600x600.jpg', '', 's', '', '', '', '', 1, 1, 'doitac', 0, 0, 0, 0, ''),
(36, 0, '142914483592136.jpg', '', '142914483592136_600x600.jpg', '', 's', '', '', '', '', 1, 1, 'doitac', 0, 0, 0, 0, ''),
(37, 0, '091105023460944.jpg', '', '091105023460944_600x600.jpg', '', 's', '', '', '', '', 1, 1, 'doitac', 0, 0, 0, 0, ''),
(38, 0, '531745306615677.jpg', '', '531745306615677_600x600.jpg', '', 's', '', '', '', '', 1, 1, 'doitac', 0, 0, 0, 0, ''),
(39, 0, '462426125289393.jpg', '', '462426125289393_600x600.jpg', '', 's', '', '', '', '', 1, 1, 'doitac', 0, 0, 0, 0, ''),
(40, 0, '628615049201067.jpg', '', '628615049201067_600x600.jpg', '', 's', '', '', '', '', 1, 1, 'doitac', 0, 0, 0, 0, ''),
(102, 0, '931213985133959.png', '', '931213985133959_615x248.png', '', 'Quảng cáo 3', '', 'http://kientrucmoi.com/', '', '', 1, 1, 'quangcao', 0, 0, 0, 0, ''),
(42, 0, 'quangcao-4209.jpg', 'quangcao-7263.jpg', '', '', '', '', 'http://www.24h.com.vn/', '', '', 1, 1, 'quangcao_link', 0, 0, 0, 0, ''),
(66, 0, 'sonnuoc-8713.jpg', '', 'sonnuoc-8713_600x600.jpg', '', '', '', '', '', '', 1, 1, 'hinhdaidien', 0, 0, 0, 0, ''),
(51, 0, 'logo2-7166.png', '', '', '', '', '', '', '', '', 1, 1, 'logo_bottom', 0, 0, 0, 0, ''),
(54, 0, '249316385153865.png', '', '249316385153865_370x234.png', '', 'Pintest', '', '', '', '', 1, 1, 'mangxahoi_top', 0, 0, 0, 0, ''),
(55, 0, '378641505737609.png', '', '378641505737609_370x234.png', '', 'Inline', '', '', '', '', 1, 1, 'mangxahoi_top', 0, 0, 0, 0, ''),
(56, 0, '493743347251105.png', '', '493743347251105_370x234.png', '', 'Google plus', '', '', '', '', 1, 1, 'mangxahoi_top', 0, 0, 0, 0, ''),
(57, 0, '281905014513797.png', '', '281905014513797_370x234.png', '', 'Facebook', '', 'http://3daudio.vn/lien-he.html', '', '', 1, 1, 'mangxahoi_top', 0, 0, 0, 0, ''),
(59, 0, '002826491293968.png', '', '002826491293968_370x234.png', '', 'g', '', '', '', '', 1, 1, 'mangxahoi_left', 0, 0, 0, 0, ''),
(60, 0, '686993398210338.png', '', '686993398210338_370x234.png', '', 's', '', '', '', '', 1, 1, 'mangxahoi_left', 0, 0, 0, 0, ''),
(61, 0, '053040752984242.png', '', '053040752984242_370x234.png', '', 't', '', '', '', '', 1, 1, 'mangxahoi_left', 0, 0, 0, 0, ''),
(62, 0, '614532211946432.png', '', '614532211946432_370x234.png', '', 'y', '', '', '', '', 1, 1, 'mangxahoi_left', 0, 0, 0, 0, ''),
(67, 0, '8861889153534850.png', '', '886188915353485_370x234.png', '', 'Chuyên nghiệp', '', '', '', '', 1, 1, 'hinhanh', 0, 0, 0, 0, ''),
(68, 0, '7310541188751310.png', '', '731054118875131_370x234.png', '', 'Uy tín', '', '', '', '', 1, 1, 'hinhanh', 0, 0, 0, 0, ''),
(69, 0, '2997819593152500.png', '', '299781959315250_370x234.png', '', 'Chất lượng', '', '', '', '', 1, 1, 'hinhanh', 0, 0, 0, 0, ''),
(70, 0, 'logo1-5483.png', '', '', '', '', '', '', '', '', 1, 1, 'image_top', 0, 0, 0, 0, ''),
(71, 0, 'bgdv-7645.png', '', '', '', '', '', '', '', '', 1, 1, 'background_dv', 0, 0, 0, 0, ''),
(72, 0, 'bgtintuc-1899.png', '', '', '', '', '', '', '', '', 1, 1, 'background_tt', 0, 0, 0, 0, ''),
(73, 0, 'bgft-1948.png', '', '', '', '', '', '', '', '', 1, 1, 'background_ft', 0, 0, 0, 0, ''),
(92, 0, '689274410117716.png', '', '689274410117716_1920x758.png', '', '1', '', '', '', '', 1, 1, 'slider', 0, 0, 0, 0, ''),
(93, 0, '079806518275612.jpg', '', '079806518275612_1920x758.jpg', '', '2', '', '', '', '', 1, 0, 'slider', 0, 0, 0, 0, ''),
(94, 0, '618322763511749.jpg', '', '618322763511749_1920x758.jpg', '', '3', '', '', '', '', 1, 1, 'slider', 0, 0, 0, 0, ''),
(103, 0, '383411263665071.jpg', '', '383411263665071_1920x758.jpg', '', '4', '', '', '', '', 1, 1, 'slider', 0, 0, 0, 0, ''),
(75, 0, '4514shophoatuoi-3480.jpg', 'homeservice3img-9778.png', '', '', '', '', 'https://www.lazada.vn/products/xiaomi-redmi-5a-16gb-ram-2gb-xam-hang-phan-phoi-chinh-thuc-i155452797-s165057976.html?spm=a2o4n.searchlistcategory.list.1.21562590ierNgw&search=1', '', '', 1, 1, 'top', 0, 0, 0, 0, ''),
(78, 0, 'logofooter-320.png', '', 'logofooter-320_600x600.png', '', '', '', '', '', '', 1, 1, 'logo_footer', 0, 0, 0, 0, ''),
(80, 0, '149405857620954.png', '', '149405857620954_26x26.png', '', 'Facebook', '', '', '', '', 1, 1, 'mxh-support', 0, 0, 0, 0, ''),
(81, 0, '473266812819281.png', '', '473266812819281_26x26.png', '', 'Google plus', '', '', '', '', 1, 1, 'mxh-support', 0, 0, 0, 0, ''),
(82, 0, '898983333044988.png', '', '898983333044988_26x26.png', '', 'Twitter', '', '', '', '', 1, 1, 'mxh-support', 0, 0, 0, 0, ''),
(83, 0, '013528510277330.png', '', '013528510277330_26x26.png', '', 'linedin', '', '', '', '', 1, 1, 'mxh-support', 0, 0, 0, 0, ''),
(84, 0, 'banner-5299.png', '', 'banner-5299_1366x170.png', '', '', '', '', '', '', 1, 1, 'top_page', 0, 0, 0, 0, ''),
(85, 0, '456856851607229.png', '', '456856851607229_275x385.png', '', 'Quảng cáo 1', '', 'https://www.24h.com.vn/bong-da/u23-viet-nam-va-3-anh-hao-vao-ban-ket-asiad-khung-nhu-the-nao-c48a986080.html', '', '', 1, 1, 'quangcaoleft', 0, 0, 0, 0, ''),
(86, 0, '712730530107663.png', '', '712730530107663_275x385.png', '', 'Quảng cáo 2', '', 'https://www.24h.com.vn/bong-da/u23-viet-nam-va-3-anh-hao-vao-ban-ket-asiad-khung-nhu-the-nao-c48a986080.html', '', '', 1, 0, 'quangcaoleft', 0, 0, 0, 0, ''),
(87, 0, '749662940419295.png', '', '749662940419295_275x385.png', '', 'Quàng cáo 3', '', 'https://www.24h.com.vn/bong-da/sao-u23-viet-nam-bat-ngo-bi-kiem-tra-doping-sau-tran-thang-syria-c48a986116.html', '', '', 1, 1, 'quangcaoleft', 0, 0, 0, 0, ''),
(88, 0, 'qc-1494.jpg', '', 'qc-1494_928x130.jpg', '', '', '', 'https://www.24h.com.vn/tin-tuc-trong-ngay/u23-vn-vao-ban-ket-nhung-chia-se-cua-quang-hai-van-toan-tien-dung-tren-facebook-khien-fan-am-long-c46a986149.html', '', '', 1, 1, 'quangcao_duoi', 0, 0, 0, 0, ''),
(89, 0, '641090299859424.jpg', '', '641090299859424_275x385.jpg', '', 'Quảng cáo 4', '', 'https://www.24h.com.vn/tin-tuc-trong-ngay/me-trung-ve-bui-tien-dung-toi-suyt-ngat-di-vi-sung-suong-c46a986113.html', '', '', 1, 1, 'quangcaoleft', 0, 0, 0, 0, ''),
(90, 0, '371063769694831.png', '', '371063769694831_615x148.png', '', 'Quảng cáo left', '', 'https://www.24h.com.vn/tin-tuc-trong-ngay/u23-viet-nam-vao-ban-ket-tang-bao-nhieu-chuyen-bay-den-indonesia-c46a986084.html', '', '', 1, 1, 'quangcaovideo', 0, 0, 0, 0, ''),
(91, 0, '635142031504773.png', '', '635142031504773_615x148.png', '', 'Quảng cáo right', '', 'https://www.24h.com.vn/tin-tuc-trong-ngay/u23-viet-nam-vao-ban-ket-tang-bao-nhieu-chuyen-bay-den-indonesia-c46a986084.html', '', '', 1, 1, 'quangcaovideo', 0, 0, 0, 0, ''),
(97, 0, '20150827110756dathongbao-6083.png', '', '20150827110756dathongbao-6083_600x600.png', '', '', '', 'http://www.moit.gov.vn/', '', '', 1, 1, 'bocongthuong', 0, 0, 0, 0, ''),
(98, 0, 'banner-508.jpg', '', 'banner-508_600x250.jpg', '', '', '', 'https://dangkykinhdoanh.gov.vn/vn/Pages/Trangchu.aspx', '', '', 1, 1, 'quangcao_left', 0, 0, 0, 0, ''),
(99, 0, 'banner-2999.jpg', '', 'banner-2999_600x250.jpg', '', '', '', 'https://dangkykinhdoanh.gov.vn/vn/Pages/Trangchu.aspx', '', '', 1, 1, 'quangcao_right', 0, 0, 0, 0, ''),
(104, 0, '831528111840760610x310-6413.jpg', '', '831528111840760610x310-6413_600x450.jpg', '', '', '', 'https://laravel.com/docs/5.6/deployment', '', '', 1, 1, 'popup', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_place_city`
--

CREATE TABLE `table_place_city` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_place_city`
--

INSERT INTO `table_place_city` (`id`, `ten`, `tenkhongdau`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, 'Hồ Chí Minh', 'ho-chi-minh', 1, 1, 1446429727, 1459671705),
(2, 'Hà Nội', 'ha-noi', 1, 1, 1446429727, 0),
(3, 'Bình Dương', 'binh-duong', 1, 1, 1446429727, 0),
(4, 'Đà Nẵng', 'da-nang', 1, 1, 1446429727, 0),
(5, 'Hải Phòng', 'hai-phong', 1, 1, 1446429727, 0),
(6, 'Long An', 'long-an', 1, 1, 1446429727, 0),
(7, 'Bà Rịa Vũng Tàu', 'ba-ria-vung-tau', 1, 1, 1446429727, 0),
(8, 'An Giang', 'an-giang', 1, 1, 1446429727, 0),
(9, 'Bắc Giang', 'bac-giang', 1, 1, 1446429727, 0),
(10, 'Bắc Kạn', 'bac-kan', 1, 1, 1446429727, 0),
(11, 'Bạc Liêu', 'bac-lieu', 1, 1, 1446429727, 1459671825),
(12, 'Bắc Ninh', 'bac-ninh', 1, 1, 1446429727, 0),
(13, 'Bến Tre', 'ben-tre', 1, 1, 1446429727, 0),
(14, 'Bình Định', 'binh-dinh', 1, 1, 1446429727, 0),
(15, 'Bình Phước', 'binh-phuoc', 1, 1, 1446429727, 0),
(16, 'Bình Thuận  ', 'binh-thuan', 1, 1, 1446429727, 0),
(17, 'Cà Mau', 'ca-mau', 1, 1, 1446429727, 0),
(18, 'Cần Thơ', 'can-tho', 1, 1, 1446429727, 0),
(19, 'Cao Bằng', 'cao-bang', 1, 1, 1446429727, 0),
(20, 'Đắk Lắk', 'dak-lak', 1, 1, 1446429727, 0),
(21, 'Đắk Nông', 'dak-nong', 1, 1, 1446429727, 0),
(22, 'Điện Biên', 'dien-bien', 1, 1, 1446429727, 0),
(23, 'Đồng Nai', 'dong-nai', 1, 1, 1446429727, 0),
(24, 'Đồng Tháp', 'dong-thap', 1, 1, 1446429727, 0),
(25, 'Gia Lai', 'gia-lai', 1, 1, 1446429727, 0),
(26, 'Hà Giang', 'ha-giang', 1, 1, 1446429727, 0),
(27, 'Hà Nam', 'ha-nam', 1, 1, 1446429727, 0),
(28, 'Hà Tĩnh', 'ha-tinh', 1, 1, 1446429727, 0),
(29, 'Hải Dương', 'hai-duong', 1, 1, 1446429727, 0),
(30, 'Hậu Giang', 'hau-giang', 1, 1, 1446429727, 0),
(31, 'Hòa Bình', 'hoa-binh', 1, 1, 1446429727, 0),
(32, 'Hưng Yên', 'hung-yen', 1, 1, 1446429727, 0),
(33, 'Khánh Hòa', 'khanh-hoa', 1, 1, 1446429727, 0),
(34, 'Kiên Giang', 'kien-giang', 1, 1, 1446429727, 0),
(35, 'Kon Tum', 'kon-tum', 1, 1, 1446429727, 0),
(36, 'Lai Châu', 'lai-chau', 1, 1, 1446429727, 0),
(37, 'Lâm Đồng', 'lam-dong', 1, 1, 1446429727, 0),
(38, 'Lạng Sơn', 'lang-son', 1, 1, 1446429727, 0),
(39, 'Lào Cai', 'lao-cai', 1, 1, 1446429727, 0),
(40, 'Nam Định', 'nam-dinh', 1, 1, 1446429727, 0),
(41, 'Nghệ An', 'nghe-an', 1, 1, 1446429727, 0),
(42, 'Ninh Bình', 'ninh-binh', 1, 1, 1446429727, 0),
(43, 'Ninh Thuận', 'ninh-thuan', 1, 1, 1446429727, 0),
(44, 'Phú Thọ', 'phu-tho', 1, 1, 1446429727, 0),
(45, 'Phú Yên', 'phu-yen', 1, 1, 1446429727, 0),
(46, 'Quảng Bình', 'quang-binh', 1, 1, 1446429727, 0),
(47, 'Quảng Nam', 'quang-nam', 1, 1, 1446429727, 0),
(48, 'Quảng Ngãi', 'quang-ngai', 1, 1, 1446429727, 0),
(49, 'Quảng Ninh', 'quang-ninh', 1, 1, 1446429727, 0),
(50, 'Quảng Trị', 'quang-tri', 1, 1, 1446429727, 0),
(51, 'Sóc Trăng', 'soc-trang', 1, 1, 1446429727, 0),
(52, 'Sơn La', 'son-la', 1, 1, 1446429727, 0),
(53, 'Tây Ninh', 'tay-ninh', 1, 1, 1446429727, 0),
(54, 'Thái Bình', 'thai-binh', 1, 1, 1446429727, 0),
(55, 'Thái Nguyên', 'thai-nguyen', 1, 1, 1446429727, 0),
(56, 'Thanh Hóa', 'thanh-hoa', 1, 1, 1446429727, 0),
(57, 'Thừa Thiên Huế', 'thua-thien-hue', 1, 1, 1446429727, 0),
(58, 'Tiền Giang', 'tien-giang', 1, 1, 1446429727, 0),
(59, 'Trà Vinh', 'tra-vinh', 1, 1, 1446429727, 0),
(60, 'Tuyên Quang', 'tuyen-quang', 1, 1, 1446429727, 0),
(61, 'Vĩnh Long', 'vinh-long', 1, 1, 1446429727, 0),
(62, 'Vĩnh Phúc', 'vinh-phuc', 1, 1, 1446429727, 0),
(63, 'Yên Bái', 'yen-bai', 1, 1, 1446429727, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_place_dist`
--

CREATE TABLE `table_place_dist` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_place_dist`
--

INSERT INTO `table_place_dist` (`id`, `id_city`, `ten`, `tenkhongdau`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `gia`) VALUES
(1, 1, 'Bình Chánh', 'binh-chanh', 1, 1, 1446429779, 1486002134, 0),
(2, 1, 'Bình Tân', 'binh-tan', 1, 1, 1446429779, 0, 0),
(3, 1, 'Bình Thạnh', 'binh-thanh', 1, 1, 1446429779, 0, 0),
(4, 1, 'Cần Giờ', 'can-gio', 1, 1, 1446429779, 0, 0),
(5, 1, 'Củ Chi', 'cu-chi', 1, 1, 1446429779, 0, 0),
(6, 1, 'Gò Vấp', 'go-vap', 1, 1, 1446429779, 0, 0),
(7, 1, 'Hóc Môn', 'hoc-mon', 1, 1, 1446429779, 0, 0),
(8, 1, 'Nhà Bè', 'nha-be', 1, 1, 1446429779, 0, 0),
(9, 1, 'Phú Nhuận', 'phu-nhuan', 1, 1, 1446429779, 0, 0),
(10, 1, 'Quận 1', 'quan-1', 1, 1, 1446429779, 0, 0),
(11, 1, 'Quận 10', 'quan-10', 1, 1, 1446429779, 0, 0),
(12, 1, 'Quận 11', 'quan-11', 1, 1, 1446429779, 0, 0),
(13, 1, 'Quận 12', 'quan-12', 1, 1, 1446429779, 0, 0),
(14, 1, 'Quận 2', 'quan-2', 1, 1, 1446429779, 0, 0),
(15, 1, 'Quận 3', 'quan-3', 1, 1, 1446429779, 0, 0),
(16, 1, 'Quận 4', 'quan-4', 1, 1, 1446429779, 0, 0),
(17, 1, 'Quận 5', 'quan-5', 1, 1, 1446429779, 0, 0),
(18, 1, 'Quận 6', 'quan-6', 1, 1, 1446429779, 0, 0),
(19, 1, 'Quận 7', 'quan-7', 1, 1, 1446429779, 0, 0),
(20, 1, 'Quận 8', 'quan-8', 1, 1, 1446429779, 0, 0),
(21, 1, 'Quận 9', 'quan-9', 1, 1, 1446429779, 0, 0),
(22, 1, 'Thủ Đức', 'thu-duc', 1, 1, 1446429779, 0, 0),
(23, 1, 'Tân Bình', 'tan-binh', 1, 1, 1446429779, 0, 0),
(24, 1, 'Tân Phú', 'tan-phu', 1, 1, 1446429779, 0, 0),
(25, 2, 'Ba Đình', 'ba-dinh', 1, 1, 1446429779, 0, 0),
(26, 2, 'Ba Vì', 'ba-vi', 1, 1, 1446429779, 0, 0),
(27, 2, 'Bắc Từ Liêm', 'bac-tu-liem', 1, 1, 1446429779, 0, 0),
(28, 2, 'Cầu Giấy', 'cau-giay', 1, 1, 1446429779, 0, 0),
(29, 2, 'Chương Mỹ', 'chuong-my', 1, 1, 1446429779, 0, 0),
(30, 2, 'Đan Phượng', 'dan-phuong', 1, 1, 1446429779, 0, 0),
(31, 2, 'Đông Anh', 'dong-anh', 1, 1, 1446429779, 0, 0),
(32, 2, 'Đống Đa', 'dong-da', 1, 1, 1446429779, 0, 0),
(33, 2, 'Gia Lâm', 'gia-lam', 1, 1, 1446429779, 0, 0),
(34, 2, 'Hà Đông', 'ha-dong', 1, 1, 1446429779, 0, 0),
(35, 2, 'Hai Bà Trưng', 'hai-ba-trung', 1, 1, 1446429779, 0, 0),
(36, 2, 'Hoài Đức', 'hoai-duc', 1, 1, 1446429779, 0, 0),
(37, 2, 'Hoàn Kiếm', 'hoan-kiem', 1, 1, 1446429779, 0, 0),
(38, 2, 'Hoàng Mai', 'hoang-mai', 1, 1, 1446429779, 0, 0),
(39, 2, 'Long Biên', 'long-bien', 1, 1, 1446429779, 0, 0),
(40, 2, 'Mê Linh', 'me-linh', 1, 1, 1446429779, 0, 0),
(41, 2, 'Mỹ Đức', 'my-duc', 1, 1, 1446429779, 0, 0),
(42, 2, 'Nam Từ Liêm', 'nam-tu-liem', 1, 1, 1446429779, 0, 0),
(43, 2, 'Phú Xuyên', 'phu-xuyen', 1, 1, 1446429779, 0, 0),
(44, 2, 'Phúc Thọ', 'phuc-tho', 1, 1, 1446429779, 0, 0),
(45, 2, 'Quốc Oai', 'quoc-oai', 1, 1, 1446429779, 0, 0),
(46, 2, 'Sóc Sơn', 'soc-son', 1, 1, 1446429779, 0, 0),
(47, 2, 'Sơn Tây', 'son-tay', 1, 1, 1446429779, 0, 0),
(48, 2, 'Tây Hồ', 'tay-ho', 1, 1, 1446429779, 0, 0),
(49, 2, 'Thạch Thất', 'thach-that', 1, 1, 1446429779, 0, 0),
(50, 2, 'Thanh Oai', 'thanh-oai', 1, 1, 1446429779, 0, 0),
(51, 2, 'Thanh Trì', 'thanh-tri', 1, 1, 1446429779, 0, 0),
(52, 2, 'Thanh Xuân', 'thanh-xuan', 1, 1, 1446429779, 0, 0),
(53, 2, 'Thường Tín', 'thuong-tin', 1, 1, 1446429779, 0, 0),
(54, 2, 'Ứng Hòa', 'ung-hoa', 1, 1, 1446429779, 0, 0),
(55, 3, 'Bàu Bàng', 'bau-bang', 1, 1, 1446429779, 0, 0),
(56, 3, 'Bến Cát', 'ben-cat', 1, 1, 1446429779, 0, 0),
(57, 3, 'Dầu Tiếng', 'dau-tieng', 1, 1, 1446429779, 0, 0),
(58, 3, 'Tân Uyên', 'tan-uyen', 1, 1, 1446429779, 0, 0),
(59, 3, 'Dĩ An', 'di-an', 1, 1, 1446429779, 0, 0),
(60, 3, 'Phú Giáo', 'phu-giao', 1, 1, 1446429779, 0, 0),
(61, 3, 'Thủ Dầu Một', 'thu-dau-mot', 1, 1, 1446429779, 0, 0),
(62, 3, 'Thuận An', 'thuan-an', 1, 1, 1446429779, 0, 0),
(63, 4, 'Cẩm Lệ', 'cam-le', 1, 1, 1446429779, 0, 0),
(64, 4, 'Hải Châu', 'hai-chau', 1, 1, 1446429779, 0, 0),
(65, 4, 'Hòa Vang', 'hoa-vang', 1, 1, 1446429779, 0, 0),
(66, 4, 'Hoàng Sa', 'hoang-sa', 1, 1, 1446429779, 0, 0),
(67, 4, 'Liên Chiểu', 'lien-chieu', 1, 1, 1446429779, 0, 0),
(68, 4, 'Ngũ Hành Sơn', 'ngu-hanh-son', 1, 1, 1446429779, 0, 0),
(69, 4, 'Sơn Trà', 'son-tra', 1, 1, 1446429779, 0, 0),
(70, 4, 'Thanh Khê', 'thanh-khe', 1, 1, 1446429779, 0, 0),
(71, 5, 'An Dương', 'an-duong', 1, 1, 1446429779, 0, 0),
(72, 5, 'An Lão', 'an-lao', 1, 1, 1446429779, 0, 0),
(73, 5, 'Bạch Long Vĩ', 'bach-long-vi', 1, 1, 1446429779, 0, 0),
(74, 5, 'Cát Hải', 'cat-hai', 1, 1, 1446429779, 0, 0),
(75, 5, 'Đồ Sơn', 'do-son', 1, 1, 1446429779, 0, 0),
(76, 5, 'Dương Kinh', 'duong-kinh', 1, 1, 1446429779, 0, 0),
(77, 5, 'Hải An', 'hai-an', 1, 1, 1446429779, 0, 0),
(78, 5, 'Hồng Bàng', 'hong-bang', 1, 1, 1446429779, 0, 0),
(79, 5, 'Kiến An', 'kien-an', 1, 1, 1446429779, 0, 0),
(80, 5, 'Kiến Thụy', 'kien-thuy', 1, 1, 1446429779, 0, 0),
(81, 5, 'Lê Chân', 'le-chan', 1, 1, 1446429779, 0, 0),
(82, 5, 'Ngô Quyền', 'ngo-quyen', 1, 1, 1446429779, 0, 0),
(83, 5, 'Thủy Nguyên', 'thuy-nguyen', 1, 1, 1446429779, 0, 0),
(84, 5, 'Tiên Lãng', 'tien-lang', 1, 1, 1446429779, 0, 0),
(85, 5, 'Vĩnh Bảo', 'vinh-bao', 1, 1, 1446429779, 0, 0),
(86, 6, 'Bến Lức', 'ben-luc', 1, 1, 1446429779, 0, 0),
(87, 6, 'Cần Đước', 'can-duoc', 1, 1, 1446429779, 0, 0),
(88, 6, 'Cần Giuộc', 'can-giuoc', 1, 1, 1446429779, 0, 0),
(89, 6, 'Châu Thành', 'chau-thanh', 1, 1, 1446429779, 0, 0),
(90, 6, 'Đức Hòa', 'duc-hoa', 1, 1, 1446429779, 0, 0),
(91, 6, 'Đức Huệ', 'duc-hue', 1, 1, 1446429779, 0, 0),
(92, 6, 'Kiến Tường', 'kien-tuong', 1, 1, 1446429779, 0, 0),
(93, 6, 'Mộc Hóa', 'moc-hoa', 1, 1, 1446429779, 0, 0),
(94, 6, 'Tân An', 'tan-an', 1, 1, 1446429779, 0, 0),
(95, 6, 'Tân Hưng', 'tan-hung', 1, 1, 1446429779, 0, 0),
(96, 6, 'Tân Thạnh', 'tan-thanh', 1, 1, 1446429779, 0, 0),
(97, 6, 'Tân Trụ', 'tan-tru', 1, 1, 1446429779, 0, 0),
(98, 6, 'Thạnh Hóa', 'thanh-hoa', 1, 1, 1446429779, 0, 0),
(99, 6, 'Thủ Thừa', 'thu-thua', 1, 1, 1446429779, 0, 0),
(100, 6, 'Vĩnh Hưng', 'vinh-hung', 1, 1, 1446429779, 0, 0),
(101, 7, 'Bà Rịa', 'ba-ria', 1, 1, 1446429779, 0, 0),
(102, 7, 'Châu Đức', 'chau-duc', 1, 1, 1446429779, 0, 0),
(103, 7, 'Côn Đảo', 'con-dao', 1, 1, 1446429779, 0, 0),
(104, 7, 'Đất Đỏ', 'dat-do', 1, 1, 1446429779, 0, 0),
(105, 7, 'Long Điền', 'long-dien', 1, 1, 1446429779, 0, 0),
(106, 7, 'Tân Thành', 'tan-thanh', 1, 1, 1446429779, 0, 0),
(107, 7, 'Vũng Tàu', 'vung-tau', 1, 1, 1446429779, 0, 0),
(108, 7, 'Xuyên Mộc', 'xuyen-moc', 1, 1, 1446429779, 0, 0),
(109, 8, 'An Phú', 'an-phu', 1, 1, 1446429779, 0, 0),
(110, 8, 'Châu Đốc', 'chau-doc', 1, 1, 1446429779, 0, 0),
(111, 8, 'Châu Phú', 'chau-phu', 1, 1, 1446429779, 0, 0),
(112, 8, 'Châu Thành', 'chau-thanh', 1, 1, 1446429779, 0, 0),
(113, 8, 'Chợ Mới', 'cho-moi', 1, 1, 1446429779, 0, 0),
(114, 8, 'Long Xuyên', 'long-xuyen', 1, 1, 1446429779, 0, 0),
(115, 8, 'Phú Tân', 'phu-tan', 1, 1, 1446429779, 0, 0),
(116, 8, 'Tân Châu', 'tan-chau', 1, 1, 1446429779, 0, 0),
(117, 8, 'Thoại Sơn', 'thoai-son', 1, 1, 1446429779, 0, 0),
(118, 8, 'Tịnh Biên', 'tinh-bien', 1, 1, 1446429779, 0, 0),
(119, 8, 'Tri Tôn', 'tri-ton', 1, 1, 1446429779, 0, 0),
(120, 9, 'Bắc Giang', 'bac-giang', 1, 1, 1446429779, 0, 0),
(121, 9, 'Hiệp Hòa', 'hiep-hoa', 1, 1, 1446429779, 0, 0),
(122, 9, 'Lạng Giang', 'lang-giang', 1, 1, 1446429779, 0, 0),
(123, 9, 'Lục Nam', 'luc-nam', 1, 1, 1446429779, 0, 0),
(124, 9, 'Lục Ngạn', 'luc-ngan', 1, 1, 1446429779, 0, 0),
(125, 9, 'Sơn Động', 'son-dong', 1, 1, 1446429779, 0, 0),
(126, 9, 'Tân Yên', 'tan-yen', 1, 1, 1446429779, 0, 0),
(127, 9, 'Việt Yên', 'viet-yen', 1, 1, 1446429779, 0, 0),
(128, 9, 'Yên Dũng', 'yen-dung', 1, 1, 1446429779, 0, 0),
(129, 9, 'Yên Thế', 'yen-the', 1, 1, 1446429779, 0, 0),
(130, 10, 'Ba Bể', 'ba-be', 1, 1, 1446429779, 0, 0),
(131, 10, 'Bắc Kạn', 'bac-kan', 1, 1, 1446429779, 0, 0),
(132, 10, 'Bạch Thông', 'bach-thong', 1, 1, 1446429779, 0, 0),
(133, 10, 'Chợ Đồn', 'cho-don', 1, 1, 1446429779, 0, 0),
(134, 10, 'Chợ Mới', 'cho-moi', 1, 1, 1446429779, 0, 0),
(135, 10, 'Na Rì', 'na-ri', 1, 1, 1446429779, 0, 0),
(136, 10, 'Ngân Sơn', 'ngan-son', 1, 1, 1446429779, 0, 0),
(137, 10, 'Pác Nặm', 'pac-nam', 1, 1, 1446429779, 0, 0),
(138, 11, 'Bạc Liêu', 'bac-lieu', 1, 1, 1446429779, 0, 0),
(139, 11, 'Đông Hải', 'dong-hai', 1, 1, 1446429779, 0, 0),
(140, 11, 'Giá Rai', 'gia-rai', 1, 1, 1446429779, 0, 0),
(141, 11, 'Hòa Bình', 'hoa-binh', 1, 1, 1446429779, 0, 0),
(142, 11, 'Hồng Dân', 'hong-dan', 1, 1, 1446429779, 0, 0),
(143, 11, 'Phước Long', 'phuoc-long', 1, 1, 1446429779, 0, 0),
(144, 11, 'Vĩnh Lợi', 'vinh-loi', 1, 1, 1446429779, 0, 0),
(145, 12, 'Bắc Ninh', 'bac-ninh', 1, 1, 1446429779, 0, 0),
(146, 12, 'Gia Bình', 'gia-binh', 1, 1, 1446429779, 0, 0),
(147, 12, 'Quế Võ', 'que-vo', 1, 1, 1446429779, 0, 0),
(148, 12, 'Thuận Thành', 'thuan-thanh', 1, 1, 1446429779, 0, 0),
(149, 12, 'Lương Tài', 'luong-tai', 1, 1, 1446429779, 0, 0),
(150, 12, 'Tiên Du', 'tien-du', 1, 1, 1446429779, 0, 0),
(151, 12, 'Từ Sơn', 'tu-son', 1, 1, 1446429779, 0, 0),
(152, 12, 'Yên Phong', 'yen-phong', 1, 1, 1446429779, 0, 0),
(153, 13, 'Ba Tri', 'ba-tri', 1, 1, 1446429779, 0, 0),
(154, 13, 'Bến Tre', 'ben-tre', 1, 1, 1446429779, 0, 0),
(155, 13, 'Bình Đại', 'binh-dai', 1, 1, 1446429779, 0, 0),
(156, 13, 'Châu Thành', 'chau-thanh', 1, 1, 1446429779, 0, 0),
(157, 13, 'Chợ Lách', 'cho-lach', 1, 1, 1446429779, 0, 0),
(158, 13, 'Giồng Trôm', 'giong-trom', 1, 1, 1446429779, 0, 0),
(159, 13, 'Mỏ Cày Bắc', 'mo-cay-bac', 1, 1, 1446429779, 0, 0),
(160, 13, 'Mỏ Cày Nam', 'mo-cay-nam', 1, 1, 1446429779, 0, 0),
(161, 13, 'Thạnh Phú', 'thanh-phu', 1, 1, 1446429779, 0, 0),
(162, 14, 'An Lão', 'an-lao', 1, 1, 1446429779, 0, 0),
(163, 14, 'An Nhơn', 'an-nhon', 1, 1, 1446429779, 0, 0),
(164, 14, 'Hoài Ân', 'hoai-an', 1, 1, 1446429779, 0, 0),
(165, 14, 'Phù Mỹ', 'phu-my', 1, 1, 1446429779, 0, 0),
(166, 14, 'Phù Cát', 'phu-cat', 1, 1, 1446429779, 0, 0),
(167, 14, 'Hoài Nhơn', 'hoai-nhon', 1, 1, 1446429779, 0, 0),
(168, 14, 'Quy Nhơn', 'quy-nhon', 1, 1, 1446429779, 0, 0),
(169, 14, 'Tây Sơn', 'tay-son', 1, 1, 1446429779, 0, 0),
(170, 14, 'Tuy Phước', 'tuy-phuoc', 1, 1, 1446429779, 0, 0),
(171, 14, 'Vân Canh', 'van-canh', 1, 1, 1446429779, 0, 0),
(172, 14, 'Vĩnh Thạnh', 'vinh-thanh', 1, 1, 1446429779, 0, 0),
(173, 15, 'Bình Long', 'binh-long', 1, 1, 1446429779, 0, 0),
(174, 15, 'Bù Đăng', 'bu-dang', 1, 1, 1446429779, 0, 0),
(175, 15, 'Bù Đốp', 'bu-dop', 1, 1, 1446429779, 0, 0),
(176, 15, 'Bù Gia Mập', 'bu-gia-map', 1, 1, 1446429779, 0, 0),
(177, 15, 'Chơn Thành', 'chon-thanh', 1, 1, 1446429779, 0, 0),
(178, 15, 'Đồng Phú', 'dong-phu', 1, 1, 1446429779, 0, 0),
(179, 15, 'Đồng Xoài', 'dong-xoai', 1, 1, 1446429779, 0, 0),
(180, 15, 'Hớn Quản', 'hon-quan', 1, 1, 1446429779, 0, 0),
(181, 15, 'Lộc Ninh', 'loc-ninh', 1, 1, 1446429779, 0, 0),
(182, 15, 'Phú Riềng', 'phu-rieng', 1, 1, 1446429779, 0, 0),
(183, 15, 'Phước Long', 'phuoc-long', 1, 1, 1446429779, 0, 0),
(184, 16, 'Bắc Bình', 'bac-binh', 1, 1, 1446429779, 0, 0),
(185, 16, 'Đảo Phú Quý', 'dao-phu-quy', 1, 1, 1446429779, 0, 0),
(186, 16, 'Đức Linh', 'duc-linh', 1, 1, 1446429779, 0, 0),
(187, 16, 'Hàm Thuận Bắc', 'ham-thuan-bac', 1, 1, 1446429779, 0, 0),
(188, 16, 'Hàm Thuận Nam', 'ham-thuan-nam', 1, 1, 1446429779, 0, 0),
(189, 16, 'Hàm Tân', 'ham-tan', 1, 1, 1446429779, 0, 0),
(190, 16, 'La Gi', 'la-gi', 1, 1, 1446429779, 0, 0),
(191, 16, 'Phan Thiết', 'phan-thiet', 1, 1, 1446429779, 0, 0),
(192, 16, 'Tánh Linh', 'tanh-linh', 1, 1, 1446429779, 0, 0),
(193, 16, 'Tuy Phong', 'tuy-phong', 1, 1, 1446429779, 0, 0),
(194, 17, 'Cà Mau', 'ca-mau', 1, 1, 1446429779, 0, 0),
(195, 17, 'Cái Nước', 'cai-nuoc', 1, 1, 1446429779, 0, 0),
(196, 17, 'Đầm Dơi', 'dam-doi', 1, 1, 1446429779, 0, 0),
(197, 17, 'Năm Căn', 'nam-can', 1, 1, 1446429779, 0, 0),
(198, 17, 'Ngọc Hiển', 'ngoc-hien', 1, 1, 1446429779, 0, 0),
(199, 17, 'Phú Tân', 'phu-tan', 1, 1, 1446429779, 0, 0),
(200, 17, 'Thới Bình', 'thoi-binh', 1, 1, 1446429779, 0, 0),
(201, 17, 'Trần Văn Thời', 'tran-van-thoi', 1, 1, 1446429779, 0, 0),
(202, 17, 'U Minh', 'u-minh', 1, 1, 1446429779, 0, 0),
(203, 18, ' Thới Lai', 'thoi-lai', 1, 1, 1446429779, 0, 0),
(204, 18, 'Bình Thủy', 'binh-thuy', 1, 1, 1446429779, 0, 0),
(205, 18, 'Cái Răng', 'cai-rang', 1, 1, 1446429779, 0, 0),
(206, 18, 'Ô Môn', 'o-mon', 1, 1, 1446429779, 0, 0),
(207, 18, 'Cờ Đỏ', 'co-do', 1, 1, 1446429779, 0, 0),
(208, 18, 'Phong Điền', 'phong-dien', 1, 1, 1446429779, 0, 0),
(209, 18, 'Ninh Kiều', 'ninh-kieu', 1, 1, 1446429779, 0, 0),
(210, 18, 'Thốt Nốt', 'thot-not', 1, 1, 1446429779, 0, 0),
(211, 18, 'Vĩnh Thạnh', 'vinh-thanh', 1, 1, 1446429779, 0, 0),
(212, 19, 'Bảo Lạc', 'bao-lac', 1, 1, 1446429779, 0, 0),
(213, 19, 'Bảo Lâm', 'bao-lam', 1, 1, 1446429779, 0, 0),
(214, 19, 'Cao Bằng', 'cao-bang', 1, 1, 1446429779, 0, 0),
(215, 19, 'Hạ Lang', 'ha-lang', 1, 1, 1446429779, 0, 0),
(216, 19, 'Hà Quảng', 'ha-quang', 1, 1, 1446429779, 0, 0),
(217, 19, 'Hòa An', 'hoa-an', 1, 1, 1446429779, 0, 0),
(218, 19, 'Nguyên Bình', 'nguyen-binh', 1, 1, 1446429779, 0, 0),
(219, 19, 'Phục Hòa', 'phuc-hoa', 1, 1, 1446429779, 0, 0),
(220, 19, 'Quảng Uyên', 'quang-uyen', 1, 1, 1446429779, 0, 0),
(221, 19, 'Thạch An', 'thach-an', 1, 1, 1446429779, 0, 0),
(222, 19, 'Thông Nông', 'thong-nong', 1, 1, 1446429779, 0, 0),
(223, 19, 'Trà Lĩnh', 'tra-linh', 1, 1, 1446429779, 0, 0),
(224, 19, 'Trùng Khánh', 'trung-khanh', 1, 1, 1446429779, 0, 0),
(225, 20, 'Buôn Đôn', 'buon-don', 1, 1, 1446429779, 0, 0),
(226, 20, 'Buôn Hồ', 'buon-ho', 1, 1, 1446429779, 0, 0),
(227, 20, 'Buôn Ma Thuột', 'buon-ma-thuot', 1, 1, 1446429779, 0, 0),
(228, 20, 'Cư Kuin', 'cu-kuin', 1, 1, 1446429779, 0, 0),
(229, 20, 'Ea Kar', 'ea-kar', 1, 1, 1446429779, 0, 0),
(230, 20, 'Ea Súp', 'ea-sup', 1, 1, 1446429779, 0, 0),
(231, 20, 'Krông Ana', 'krong-ana', 1, 1, 1446429779, 0, 0),
(232, 20, 'Krông Bông', 'krong-bong', 1, 1, 1446429779, 0, 0),
(233, 20, 'Krông Buk', 'krong-buk', 1, 1, 1446429779, 0, 0),
(234, 20, 'Krông Năng', 'krong-nang', 1, 1, 1446429779, 0, 0),
(235, 20, 'Krông Pắc', 'krong-pac', 1, 1, 1446429779, 0, 0),
(236, 20, 'Lăk', 'lak', 1, 1, 1446429779, 0, 0),
(237, 21, 'Cư Jút', 'cu-jut', 1, 1, 1446429779, 0, 0),
(238, 21, 'Dăk GLong', 'dak-glong', 1, 1, 1446429779, 0, 0),
(239, 21, 'Dăk Mil', 'dak-mil', 1, 1, 1446429779, 0, 0),
(240, 21, 'Dăk Song', 'dak-song', 1, 1, 1446429779, 0, 0),
(241, 21, 'Gia Nghĩa', 'gia-nghia', 1, 1, 1446429779, 0, 0),
(242, 21, 'Krông Nô', 'krong-no', 1, 1, 1446429779, 0, 0),
(243, 21, 'Tuy Đức', 'tuy-duc', 1, 1, 1446429779, 0, 0),
(244, 22, 'Điện Biên', 'dien-bien', 1, 1, 1446429779, 0, 0),
(245, 22, 'Điện Biên Đông', 'dien-bien-dong', 1, 1, 1446429779, 0, 0),
(246, 22, 'Mường Ảng', 'muong-ang', 1, 1, 1446429779, 0, 0),
(247, 22, 'Mường Chà', 'muong-cha', 1, 1, 1446429779, 0, 0),
(248, 22, 'Mường Lay', 'muong-lay', 1, 1, 1446429779, 0, 0),
(249, 22, 'Điện Biên Phủ', 'dien-bien-phu', 1, 1, 1446429779, 0, 0),
(250, 22, 'Mường Nhé', 'muong-nhe', 1, 1, 1446429779, 0, 0),
(251, 22, 'Nậm Pồ', 'nam-po', 1, 1, 1446429779, 0, 0),
(252, 22, 'Tủa Chùa', 'tua-chua', 1, 1, 1446429779, 0, 0),
(253, 22, 'Tuần Giáo', 'tuan-giao', 1, 1, 1446429779, 0, 0),
(254, 23, 'Biên Hòa', 'bien-hoa', 1, 1, 1446429779, 0, 0),
(255, 23, 'Cẩm Mỹ', 'cam-my', 1, 1, 1446429779, 0, 0),
(256, 23, 'Định Quán', 'dinh-quan', 1, 1, 1446429779, 0, 0),
(257, 23, 'Long Thành', 'long-thanh', 1, 1, 1446429779, 0, 0),
(258, 23, 'Nhơn Trạch', 'nhon-trach', 1, 1, 1446429779, 0, 0),
(259, 23, 'Long Khánh', 'long-khanh', 1, 1, 1446429779, 0, 0),
(260, 23, 'Tân Phú', 'tan-phu', 1, 1, 1446429779, 0, 0),
(261, 23, 'Thống Nhất', 'thong-nhat', 1, 1, 1446429779, 0, 0),
(262, 23, 'Trảng Bom', 'trang-bom', 1, 1, 1446429779, 0, 0),
(263, 23, 'Vĩnh Cửu', 'vinh-cuu', 1, 1, 1446429779, 0, 0),
(264, 23, 'Xuân Lộc', 'xuan-loc', 1, 1, 1446429779, 0, 0),
(265, 24, 'Châu Thành', 'chau-thanh', 1, 1, 1446429779, 0, 0),
(266, 24, 'Huyện Cao Lãnh', 'huyen-cao-lanh', 1, 1, 1446429779, 0, 0),
(267, 24, 'Huyện Hồng Ngự', 'huyen-hong-ngu', 1, 1, 1446429779, 0, 0),
(268, 24, 'Lai Vung', 'lai-vung', 1, 1, 1446429779, 0, 0),
(269, 24, 'Lấp Vò', 'lap-vo', 1, 1, 1446429779, 0, 0),
(270, 24, 'Sa Đéc', 'sa-dec', 1, 1, 1446429779, 0, 0),
(271, 24, 'Tam Nông', 'tam-nong', 1, 1, 1446429779, 0, 0),
(272, 24, 'Tân Hồng', 'tan-hong', 1, 1, 1446429779, 0, 0),
(273, 24, 'Thanh Bình', 'thanh-binh', 1, 1, 1446429779, 0, 0),
(274, 24, 'Tháp Mười', 'thap-muoi', 1, 1, 1446429779, 0, 0),
(275, 24, 'Thị xã Hồng Ngự', 'thi-xa-hong-ngu', 1, 1, 1446429779, 0, 0),
(276, 24, 'Tp. Cao Lãnh', 'tp-cao-lanh', 1, 1, 1446429779, 0, 0),
(277, 25, 'An Khê', 'an-khe', 1, 1, 1446429779, 0, 0),
(278, 25, 'AYun Pa', 'ayun-pa', 1, 1, 1446429779, 0, 0),
(279, 25, 'Chư Păh', 'chu-pah', 1, 1, 1446429779, 0, 0),
(280, 25, 'Chư Pưh', 'chu-puh', 1, 1, 1446429779, 0, 0),
(281, 25, 'Chư Sê', 'chu-se', 1, 1, 1446429779, 0, 0),
(282, 25, 'ChưPRông', 'chuprong', 1, 1, 1446429779, 0, 0),
(283, 25, 'Đăk Đoa', 'dak-doa', 1, 1, 1446429779, 0, 0),
(284, 25, 'Đăk Pơ', 'dak-po', 1, 1, 1446429779, 0, 0),
(285, 25, 'Đức Cơ', 'duc-co', 1, 1, 1446429779, 0, 0),
(286, 25, 'Ia Grai', 'ia-grai', 1, 1, 1446429779, 0, 0),
(287, 25, 'Ia Pa', 'ia-pa', 1, 1, 1446429779, 0, 0),
(288, 25, 'KBang', 'kbang', 1, 1, 1446429779, 0, 0),
(289, 25, 'Kông Chro', 'kong-chro', 1, 1, 1446429779, 0, 0),
(290, 25, 'Krông Pa', 'krong-pa', 1, 1, 1446429779, 0, 0),
(291, 25, 'Mang Yang', 'mang-yang', 1, 1, 1446429779, 0, 0),
(292, 25, 'Phú Thiện', 'phu-thien', 1, 1, 1446429779, 0, 0),
(293, 25, 'Plei Ku', 'plei-ku', 1, 1, 1446429779, 0, 0),
(294, 26, 'Bắc Mê', 'bac-me', 1, 1, 1446429779, 0, 0),
(295, 26, 'Bắc Quang', 'bac-quang', 1, 1, 1446429779, 0, 0),
(296, 26, 'Đồng Văn', 'dong-van', 1, 1, 1446429779, 0, 0),
(297, 26, 'Hà Giang', 'ha-giang', 1, 1, 1446429779, 0, 0),
(298, 26, 'Hoàng Su Phì', 'hoang-su-phi', 1, 1, 1446429779, 0, 0),
(299, 26, 'Mèo Vạc', 'meo-vac', 1, 1, 1446429779, 0, 0),
(300, 26, 'Quản Bạ', 'quan-ba', 1, 1, 1446429779, 0, 0),
(301, 26, 'Quang Bình', 'quang-binh', 1, 1, 1446429779, 0, 0),
(302, 26, 'Vị Xuyên', 'vi-xuyen', 1, 1, 1446429779, 0, 0),
(303, 26, 'Xín Mần', 'xin-man', 1, 1, 1446429779, 0, 0),
(304, 26, 'Yên Minh', 'yen-minh', 1, 1, 1446429779, 0, 0),
(305, 27, 'Bình Lục', 'binh-luc', 1, 1, 1446429779, 0, 0),
(306, 27, 'Duy Tiên', 'duy-tien', 1, 1, 1446429779, 0, 0),
(307, 27, 'Kim Bảng', 'kim-bang', 1, 1, 1446429779, 0, 0),
(308, 27, 'Lý Nhân', 'ly-nhan', 1, 1, 1446429779, 0, 0),
(309, 27, 'Phủ Lý', 'phu-ly', 1, 1, 1446429779, 0, 0),
(310, 27, 'Thanh Liêm', 'thanh-liem', 1, 1, 1446429779, 0, 0),
(311, 28, 'Cẩm Xuyên', 'cam-xuyen', 1, 1, 1446429779, 0, 0),
(312, 28, 'Can Lộc', 'can-loc', 1, 1, 1446429779, 0, 0),
(313, 28, 'Đức Thọ', 'duc-tho', 1, 1, 1446429779, 0, 0),
(314, 28, 'Hà Tĩnh', 'ha-tinh', 1, 1, 1446429779, 0, 0),
(315, 28, 'Hồng Lĩnh', 'hong-linh', 1, 1, 1446429779, 0, 0),
(316, 28, 'Hương Khê', 'huong-khe', 1, 1, 1446429779, 0, 0),
(317, 28, 'Hương Sơn', 'huong-son', 1, 1, 1446429779, 0, 0),
(318, 28, 'Kỳ Anh', 'ky-anh', 1, 1, 1446429779, 0, 0),
(319, 28, 'Lộc Hà', 'loc-ha', 1, 1, 1446429779, 0, 0),
(320, 28, 'Nghi Xuân', 'nghi-xuan', 1, 1, 1446429779, 0, 0),
(321, 28, 'Thạch Hà', 'thach-ha', 1, 1, 1446429779, 0, 0),
(322, 28, 'Vũ Quang', 'vu-quang', 1, 1, 1446429779, 0, 0),
(323, 29, 'Bình Giang', 'binh-giang', 1, 1, 1446429779, 0, 0),
(324, 29, 'Cẩm Giàng', 'cam-giang', 1, 1, 1446429779, 0, 0),
(325, 29, 'Chí Linh', 'chi-linh', 1, 1, 1446429779, 0, 0),
(326, 29, 'Gia Lộc', 'gia-loc', 1, 1, 1446429779, 0, 0),
(327, 29, 'Kim Thành', 'kim-thanh', 1, 1, 1446429779, 0, 0),
(328, 29, 'Kinh Môn', 'kinh-mon', 1, 1, 1446429779, 0, 0),
(329, 29, 'Hải Dương', 'hai-duong', 1, 1, 1446429779, 0, 0),
(330, 29, 'Nam Sách', 'nam-sach', 1, 1, 1446429779, 0, 0),
(331, 29, 'Ninh Giang', 'ninh-giang', 1, 1, 1446429779, 0, 0),
(332, 29, 'Thanh Hà', 'thanh-ha', 1, 1, 1446429779, 0, 0),
(333, 29, 'Thanh Miện', 'thanh-mien', 1, 1, 1446429779, 0, 0),
(334, 29, 'Tứ Kỳ', 'tu-ky', 1, 1, 1446429779, 0, 0),
(335, 30, 'Châu Thành', 'chau-thanh', 1, 1, 1446429779, 0, 0),
(336, 30, 'Châu Thành A', 'chau-thanh-a', 1, 1, 1446429779, 0, 0),
(337, 30, 'Long Mỹ', 'long-my', 1, 1, 1446429779, 0, 0),
(338, 30, 'Ngã Bảy', 'nga-bay', 1, 1, 1446429779, 0, 0),
(339, 30, 'Phụng Hiệp', 'phung-hiep', 1, 1, 1446429779, 0, 0),
(340, 30, 'Vị Thanh', 'vi-thanh', 1, 1, 1446429779, 0, 0),
(341, 30, 'Vị Thủy', 'vi-thuy', 1, 1, 1446429779, 0, 0),
(342, 31, 'Cao Phong', 'cao-phong', 1, 1, 1446429779, 0, 0),
(343, 31, 'Đà Bắc', 'da-bac', 1, 1, 1446429779, 0, 0),
(344, 31, 'Hòa Bình', 'hoa-binh', 1, 1, 1446429779, 0, 0),
(345, 31, 'Kim Bôi', 'kim-boi', 1, 1, 1446429779, 0, 0),
(346, 31, 'Kỳ Sơn', 'ky-son', 1, 1, 1446429779, 0, 0),
(347, 31, 'Lạc Sơn', 'lac-son', 1, 1, 1446429779, 0, 0),
(348, 31, 'Lạc Thủy', 'lac-thuy', 1, 1, 1446429779, 0, 0),
(349, 31, 'Lương Sơn', 'luong-son', 1, 1, 1446429779, 0, 0),
(350, 31, 'Mai Châu', 'mai-chau', 1, 1, 1446429779, 0, 0),
(351, 31, 'Tân Lạc', 'tan-lac', 1, 1, 1446429779, 0, 0),
(352, 31, 'Yên Thủy', 'yen-thuy', 1, 1, 1446429779, 0, 0),
(353, 32, 'Ân Thi', 'an-thi', 1, 1, 1446429779, 0, 0),
(354, 32, 'Hưng Yên', 'hung-yen', 1, 1, 1446429779, 0, 0),
(355, 32, 'Khoái Châu', 'khoai-chau', 1, 1, 1446429779, 0, 0),
(356, 32, 'Mỹ Hào', 'my-hao', 1, 1, 1446429779, 0, 0),
(357, 32, 'Kim Động', 'kim-dong', 1, 1, 1446429779, 0, 0),
(358, 32, 'Phù Cừ', 'phu-cu', 1, 1, 1446429779, 0, 0),
(359, 32, 'Tiên Lữ', 'tien-lu', 1, 1, 1446429779, 0, 0),
(360, 32, 'Văn Giang', 'van-giang', 1, 1, 1446429779, 0, 0),
(361, 32, 'Văn Lâm', 'van-lam', 1, 1, 1446429779, 0, 0),
(362, 32, 'Yên Mỹ', 'yen-my', 1, 1, 1446429779, 0, 0),
(363, 33, 'Cam Lâm', 'cam-lam', 1, 1, 1446429779, 0, 0),
(364, 33, 'Cam Ranh', 'cam-ranh', 1, 1, 1446429779, 0, 0),
(365, 33, 'Diên Khánh', 'dien-khanh', 1, 1, 1446429779, 0, 0),
(366, 33, 'Khánh Sơn', 'khanh-son', 1, 1, 1446429779, 0, 0),
(367, 33, 'Khánh Vĩnh', 'khanh-vinh', 1, 1, 1446429779, 0, 0),
(368, 33, 'Nha Trang', 'nha-trang', 1, 1, 1446429779, 0, 0),
(369, 33, 'Ninh Hòa', 'ninh-hoa', 1, 1, 1446429779, 0, 0),
(370, 33, 'Trường Sa', 'truong-sa', 1, 1, 1446429779, 0, 0),
(371, 33, 'Vạn Ninh', 'van-ninh', 1, 1, 1446429779, 0, 0),
(372, 34, 'An Biên', 'an-bien', 1, 1, 1446429779, 0, 0),
(373, 34, 'An Minh', 'an-minh', 1, 1, 1446429779, 0, 0),
(374, 34, 'Châu Thành', 'chau-thanh', 1, 1, 1446429779, 0, 0),
(375, 34, 'Giang Thành', 'giang-thanh', 1, 1, 1446429779, 0, 0),
(376, 34, 'Giồng Riềng', 'giong-rieng', 1, 1, 1446429779, 0, 0),
(377, 34, 'Gò Quao', 'go-quao', 1, 1, 1446429779, 0, 0),
(378, 34, 'Hà Tiên', 'ha-tien', 1, 1, 1446429779, 0, 0),
(379, 34, 'Kiên Hải', 'kien-hai', 1, 1, 1446429779, 0, 0),
(380, 34, 'Hòn Đất', 'hon-dat', 1, 1, 1446429779, 0, 0),
(381, 34, 'Kiên Lương', 'kien-luong', 1, 1, 1446429779, 0, 0),
(382, 34, 'Phú Quốc', 'phu-quoc', 1, 1, 1446429779, 0, 0),
(383, 34, 'Rạch Giá', 'rach-gia', 1, 1, 1446429779, 0, 0),
(384, 34, 'Tân Hiệp', 'tan-hiep', 1, 1, 1446429779, 0, 0),
(385, 34, 'U minh Thượng', 'u-minh-thuong', 1, 1, 1446429779, 0, 0),
(386, 34, 'Vĩnh Thuận', 'vinh-thuan', 1, 1, 1446429779, 0, 0),
(387, 35, 'Đăk Glei', 'dak-glei', 1, 1, 1446429779, 0, 0),
(388, 35, 'Đăk Hà', 'dak-ha', 1, 1, 1446429779, 0, 0),
(389, 35, 'Kon Rẫy', 'kon-ray', 1, 1, 1446429779, 0, 0),
(390, 35, 'Đăk Tô', 'dak-to', 1, 1, 1446429779, 0, 0),
(391, 35, 'Kon Plông', 'kon-plong', 1, 1, 1446429779, 0, 0),
(392, 35, 'KonTum', 'kontum', 1, 1, 1446429779, 0, 0),
(393, 35, 'Ngọc Hồi', 'ngoc-hoi', 1, 1, 1446429779, 0, 0),
(394, 35, 'Sa Thầy', 'sa-thay', 1, 1, 1446429779, 0, 0),
(395, 35, 'Tu Mơ Rông', 'tu-mo-rong', 1, 1, 1446429779, 0, 0),
(396, 36, 'Lai Châu', 'lai-chau', 1, 1, 1446429779, 0, 0),
(397, 36, 'Mường Tè', 'muong-te', 1, 1, 1446429779, 0, 0),
(398, 36, 'Nậm Nhùn', 'nam-nhun', 1, 1, 1446429779, 0, 0),
(399, 36, 'Phong Thổ', 'phong-tho', 1, 1, 1446429779, 0, 0),
(400, 36, 'Sìn Hồ', 'sin-ho', 1, 1, 1446429779, 0, 0),
(401, 36, 'Tam Đường', 'tam-duong', 1, 1, 1446429779, 0, 0),
(402, 36, 'Tân Uyên', 'tan-uyen', 1, 1, 1446429779, 0, 0),
(403, 36, 'Than Uyên', 'than-uyen', 1, 1, 1446429779, 0, 0),
(404, 37, 'Bảo Lâm', 'bao-lam', 1, 1, 1446429779, 0, 0),
(405, 37, 'Bảo Lộc', 'bao-loc', 1, 1, 1446429779, 0, 0),
(406, 37, 'Cát Tiên', 'cat-tien', 1, 1, 1446429779, 0, 0),
(407, 37, 'Đam Rông', 'dam-rong', 1, 1, 1446429779, 0, 0),
(408, 37, 'Đạ Tẻh', 'da-teh', 1, 1, 1446429779, 0, 0),
(409, 37, 'Đà Lạt', 'da-lat', 1, 1, 1446429779, 0, 0),
(410, 37, 'Di Linh', 'di-linh', 1, 1, 1446429779, 0, 0),
(411, 37, 'Đạ Huoai', 'da-huoai', 1, 1, 1446429779, 0, 0),
(412, 37, 'Đơn Dương', 'don-duong', 1, 1, 1446429779, 0, 0),
(413, 37, 'Đức Trọng', 'duc-trong', 1, 1, 1446429779, 0, 0),
(414, 37, 'Lạc Dương', 'lac-duong', 1, 1, 1446429779, 0, 0),
(415, 37, 'Lâm Hà', 'lam-ha', 1, 1, 1446429779, 0, 0),
(416, 38, 'Bắc Sơn', 'bac-son', 1, 1, 1446429779, 0, 0),
(417, 38, 'Bình Gia', 'binh-gia', 1, 1, 1446429779, 0, 0),
(418, 38, 'Cao Lộc', 'cao-loc', 1, 1, 1446429779, 0, 0),
(419, 38, 'Chi Lăng', 'chi-lang', 1, 1, 1446429779, 0, 0),
(420, 38, 'Đình Lập', 'dinh-lap', 1, 1, 1446429779, 0, 0),
(421, 38, 'Lạng Sơn', 'lang-son', 1, 1, 1446429779, 0, 0),
(422, 38, 'Hữu Lũng', 'huu-lung', 1, 1, 1446429779, 0, 0),
(423, 38, 'Lộc Bình', 'loc-binh', 1, 1, 1446429779, 0, 0),
(424, 38, 'Tràng Định', 'trang-dinh', 1, 1, 1446429779, 0, 0),
(425, 38, 'Văn Lãng', 'van-lang', 1, 1, 1446429779, 0, 0),
(426, 38, 'Văn Quan', 'van-quan', 1, 1, 1446429779, 0, 0),
(427, 39, 'Bắc Hà', 'bac-ha', 1, 1, 1446429779, 0, 0),
(428, 39, 'Bảo Thắng', 'bao-thang', 1, 1, 1446429779, 0, 0),
(429, 39, 'Lào Cai', 'lao-cai', 1, 1, 1446429779, 0, 0),
(430, 39, 'Bát Xát', 'bat-xat', 1, 1, 1446429779, 0, 0),
(431, 39, 'Bảo Yên', 'bao-yen', 1, 1, 1446429779, 0, 0),
(432, 39, 'Mường Khương', 'muong-khuong', 1, 1, 1446429779, 0, 0),
(433, 39, 'Sa Pa', 'sa-pa', 1, 1, 1446429779, 0, 0),
(434, 39, 'Văn Bàn', 'van-ban', 1, 1, 1446429779, 0, 0),
(435, 39, 'Xi Ma Cai', 'xi-ma-cai', 1, 1, 1446429779, 0, 0),
(436, 40, 'Giao Thủy', 'giao-thuy', 1, 1, 1446429779, 0, 0),
(437, 40, 'Hải Hậu', 'hai-hau', 1, 1, 1446429779, 0, 0),
(438, 40, 'Mỹ Lộc', 'my-loc', 1, 1, 1446429779, 0, 0),
(439, 40, 'Trực Ninh', 'truc-ninh', 1, 1, 1446429779, 0, 0),
(440, 40, 'Nghĩa Hưng', 'nghia-hung', 1, 1, 1446429779, 0, 0),
(441, 40, 'Nam Trực', 'nam-truc', 1, 1, 1446429779, 0, 0),
(442, 40, 'Nam Định', 'nam-dinh', 1, 1, 1446429779, 0, 0),
(443, 40, 'Vụ Bản', 'vu-ban', 1, 1, 1446429779, 0, 0),
(444, 40, 'Xuân Trường', 'xuan-truong', 1, 1, 1446429779, 0, 0),
(445, 40, 'Ý Yên', 'y-yen', 1, 1, 1446429779, 0, 0),
(446, 41, 'Anh Sơn', 'anh-son', 1, 1, 1446429779, 0, 0),
(447, 41, 'Con Cuông', 'con-cuong', 1, 1, 1446429779, 0, 0),
(448, 41, 'Cửa Lò', 'cua-lo', 1, 1, 1446429779, 0, 0),
(449, 41, 'Diễn Châu', 'dien-chau', 1, 1, 1446429779, 0, 0),
(450, 41, 'Đô Lương', 'do-luong', 1, 1, 1446429779, 0, 0),
(451, 41, 'Hoàng Mai', 'hoang-mai', 1, 1, 1446429779, 0, 0),
(452, 41, 'Hưng Nguyên', 'hung-nguyen', 1, 1, 1446429779, 0, 0),
(453, 41, 'Kỳ Sơn', 'ky-son', 1, 1, 1446429779, 0, 0),
(454, 41, 'Nam Đàn', 'nam-dan', 1, 1, 1446429779, 0, 0),
(455, 41, 'Nghi Lộc', 'nghi-loc', 1, 1, 1446429779, 0, 0),
(456, 41, 'Nghĩa Đàn', 'nghia-dan', 1, 1, 1446429779, 0, 0),
(457, 41, 'Quế Phong', 'que-phong', 1, 1, 1446429779, 0, 0),
(458, 41, 'Quỳ Châu', 'quy-chau', 1, 1, 1446429779, 0, 0),
(459, 41, 'Quỳ Hợp', 'quy-hop', 1, 1, 1446429779, 0, 0),
(460, 41, 'Quỳnh Lưu', 'quynh-luu', 1, 1, 1446429779, 0, 0),
(461, 41, 'Tân Kỳ', 'tan-ky', 1, 1, 1446429779, 0, 0),
(462, 41, 'Thái Hòa', 'thai-hoa', 1, 1, 1446429779, 0, 0),
(463, 41, 'Thanh Chương', 'thanh-chuong', 1, 1, 1446429779, 0, 0),
(464, 41, 'Tương Dương', 'tuong-duong', 1, 1, 1446429779, 0, 0),
(465, 41, 'Vinh', 'vinh', 1, 1, 1446429779, 0, 0),
(466, 41, 'Yên Thành', 'yen-thanh', 1, 1, 1446429779, 0, 0),
(467, 42, 'Gia Viễn', 'gia-vien', 1, 1, 1446429779, 0, 0),
(468, 42, 'Hoa Lư', 'hoa-lu', 1, 1, 1446429779, 0, 0),
(469, 42, 'Kim Sơn', 'kim-son', 1, 1, 1446429779, 0, 0),
(470, 42, 'Nho Quan', 'nho-quan', 1, 1, 1446429779, 0, 0),
(471, 42, 'Ninh Bình', 'ninh-binh', 1, 1, 1446429779, 0, 0),
(472, 42, 'Tam Điệp', 'tam-diep', 1, 1, 1446429779, 0, 0),
(473, 42, 'Yên Khánh', 'yen-khanh', 1, 1, 1446429779, 0, 0),
(474, 42, 'Yên Mô', 'yen-mo', 1, 1, 1446429779, 0, 0),
(475, 43, 'Bác Ái', 'bac-ai', 1, 1, 1446429779, 0, 0),
(476, 43, 'Ninh Hải', 'ninh-hai', 1, 1, 1446429779, 0, 0),
(477, 43, 'Ninh Phước', 'ninh-phuoc', 1, 1, 1446429779, 0, 0),
(478, 43, 'Ninh Sơn', 'ninh-son', 1, 1, 1446429779, 0, 0),
(479, 43, 'Phan Rang - Tháp Chàm', 'phan-rang-thap-cham', 1, 1, 1446429779, 0, 0),
(480, 43, 'Thuận Bắc', 'thuan-bac', 1, 1, 1446429779, 0, 0),
(481, 43, 'Thuận Nam', 'thuan-nam', 1, 1, 1446429779, 0, 0),
(482, 44, 'Cẩm Khê', 'cam-khe', 1, 1, 1446429779, 0, 0),
(483, 44, 'Đoan Hùng', 'doan-hung', 1, 1, 1446429779, 0, 0),
(484, 44, 'Hạ Hòa', 'ha-hoa', 1, 1, 1446429779, 0, 0),
(485, 44, 'Lâm Thao', 'lam-thao', 1, 1, 1446429779, 0, 0),
(486, 44, 'Phù Ninh', 'phu-ninh', 1, 1, 1446429779, 0, 0),
(487, 44, 'Phú Thọ', 'phu-tho', 1, 1, 1446429779, 0, 0),
(488, 44, 'Tam Nông', 'tam-nong', 1, 1, 1446429779, 0, 0),
(489, 44, 'Tân Sơn', 'tan-son', 1, 1, 1446429779, 0, 0),
(490, 44, 'Thanh Ba', 'thanh-ba', 1, 1, 1446429779, 0, 0),
(491, 44, 'Thanh Sơn', 'thanh-son', 1, 1, 1446429779, 0, 0),
(492, 44, 'Thanh Thủy', 'thanh-thuy', 1, 1, 1446429779, 0, 0),
(493, 44, 'Việt Trì', 'viet-tri', 1, 1, 1446429779, 0, 0),
(494, 44, 'Yên Lập', 'yen-lap', 1, 1, 1446429779, 0, 0),
(495, 45, 'Đông Hòa', 'dong-hoa', 1, 1, 1446429779, 0, 0),
(496, 45, 'Đồng Xuân', 'dong-xuan', 1, 1, 1446429779, 0, 0),
(497, 45, 'Sơn Hòa', 'son-hoa', 1, 1, 1446429779, 0, 0),
(498, 45, 'Sông Cầu', 'song-cau', 1, 1, 1446429779, 0, 0),
(499, 45, 'Sông Hinh', 'song-hinh', 1, 1, 1446429779, 0, 0),
(500, 45, 'Phú Hòa', 'phu-hoa', 1, 1, 1446429779, 0, 0),
(501, 45, 'Tây Hòa', 'tay-hoa', 1, 1, 1446429779, 0, 0),
(502, 45, 'Tuy An', 'tuy-an', 1, 1, 1446429779, 0, 0),
(503, 45, 'Tuy Hòa', 'tuy-hoa', 1, 1, 1446429779, 0, 0),
(504, 46, 'Ba Đồn', 'ba-don', 1, 1, 1446429779, 0, 0),
(505, 46, 'Bố Trạch', 'bo-trach', 1, 1, 1446429779, 0, 0),
(506, 46, 'Đồng Hới', 'dong-hoi', 1, 1, 1446429779, 0, 0),
(507, 46, 'Lệ Thủy', 'le-thuy', 1, 1, 1446429779, 0, 0),
(508, 46, 'Minh Hóa', 'minh-hoa', 1, 1, 1446429779, 0, 0),
(509, 46, 'Quảng Ninh', 'quang-ninh', 1, 1, 1446429779, 0, 0),
(510, 46, 'Quảng Trạch', 'quang-trach', 1, 1, 1446429779, 0, 0),
(511, 46, 'Tuyên Hóa', 'tuyen-hoa', 1, 1, 1446429779, 0, 0),
(512, 47, 'Bắc Trà My', 'bac-tra-my', 1, 1, 1446429779, 0, 0),
(513, 47, 'Đại Lộc', 'dai-loc', 1, 1, 1446429779, 0, 0),
(514, 47, 'Điện Bàn', 'dien-ban', 1, 1, 1446429779, 0, 0),
(515, 47, 'Đông Giang', 'dong-giang', 1, 1, 1446429779, 0, 0),
(516, 47, 'Hiệp Đức', 'hiep-duc', 1, 1, 1446429779, 0, 0),
(517, 47, 'Duy Xuyên', 'duy-xuyen', 1, 1, 1446429779, 0, 0),
(518, 47, 'Hội An', 'hoi-an', 1, 1, 1446429779, 0, 0),
(519, 47, 'Nam Giang', 'nam-giang', 1, 1, 1446429779, 0, 0),
(520, 47, 'Nam Trà My', 'nam-tra-my', 1, 1, 1446429779, 0, 0),
(521, 47, 'Nông Sơn', 'nong-son', 1, 1, 1446429779, 0, 0),
(522, 47, 'Núi Thành', 'nui-thanh', 1, 1, 1446429779, 0, 0),
(523, 47, 'Phú Ninh', 'phu-ninh', 1, 1, 1446429779, 0, 0),
(524, 47, 'Phước Sơn', 'phuoc-son', 1, 1, 1446429779, 0, 0),
(525, 47, 'Quế Sơn', 'que-son', 1, 1, 1446429779, 0, 0),
(526, 47, 'Tam Kỳ', 'tam-ky', 1, 1, 1446429779, 0, 0),
(527, 47, 'Tây Giang', 'tay-giang', 1, 1, 1446429779, 0, 0),
(528, 47, 'Thăng Bình', 'thang-binh', 1, 1, 1446429779, 0, 0),
(529, 47, 'Tiên Phước', 'tien-phuoc', 1, 1, 1446429779, 0, 0),
(530, 48, 'Ba Tơ', 'ba-to', 1, 1, 1446429779, 0, 0),
(531, 48, 'Bình Sơn', 'binh-son', 1, 1, 1446429779, 0, 0),
(532, 48, 'Đức Phổ', 'duc-pho', 1, 1, 1446429779, 0, 0),
(533, 48, 'Lý Sơn', 'ly-son', 1, 1, 1446429779, 0, 0),
(534, 48, 'Minh Long', 'minh-long', 1, 1, 1446429779, 0, 0),
(535, 48, 'Mộ Đức', 'mo-duc', 1, 1, 1446429779, 0, 0),
(536, 48, 'Nghĩa Hành', 'nghia-hanh', 1, 1, 1446429779, 0, 0),
(537, 48, 'Quảng Ngãi', 'quang-ngai', 1, 1, 1446429779, 0, 0),
(538, 48, 'Sơn Hà', 'son-ha', 1, 1, 1446429779, 0, 0),
(539, 48, 'Sơn Tây', 'son-tay', 1, 1, 1446429779, 0, 0),
(540, 48, 'Sơn Tịnh', 'son-tinh', 1, 1, 1446429779, 0, 0),
(541, 48, 'Tây Trà', 'tay-tra', 1, 1, 1446429779, 0, 0),
(542, 48, 'Trà Bồng', 'tra-bong', 1, 1, 1446429779, 0, 0),
(543, 48, 'Tư Nghĩa', 'tu-nghia', 1, 1, 1446429779, 0, 0),
(544, 49, 'Ba Chẽ', 'ba-che', 1, 1, 1446429779, 0, 0),
(545, 49, 'Cẩm Phả', 'cam-pha', 1, 1, 1446429779, 0, 0),
(546, 49, 'Bình Liêu', 'binh-lieu', 1, 1, 1446429779, 0, 0),
(547, 49, 'Cô Tô', 'co-to', 1, 1, 1446429779, 0, 0),
(548, 49, 'Đầm Hà', 'dam-ha', 1, 1, 1446429779, 0, 0),
(549, 49, 'Đông Triều', 'dong-trieu', 1, 1, 1446429779, 0, 0),
(550, 49, 'Hạ Long', 'ha-long', 1, 1, 1446429779, 0, 0),
(551, 49, 'Hải Hà', 'hai-ha', 1, 1, 1446429779, 0, 0),
(552, 49, 'Hoành Bồ', 'hoanh-bo', 1, 1, 1446429779, 0, 0),
(553, 49, 'Móng Cái', 'mong-cai', 1, 1, 1446429779, 0, 0),
(554, 49, 'Quảng Yên', 'quang-yen', 1, 1, 1446429779, 0, 0),
(555, 49, 'Tiên Yên', 'tien-yen', 1, 1, 1446429779, 0, 0),
(556, 49, 'Uông Bí', 'uong-bi', 1, 1, 1446429779, 0, 0),
(557, 49, 'Vân Đồn', 'van-don', 1, 1, 1446429779, 0, 0),
(558, 50, 'Cam Lộ', 'cam-lo', 1, 1, 1446429779, 0, 0),
(559, 50, 'Đảo Cồn cỏ', 'dao-con-co', 1, 1, 1446429779, 0, 0),
(560, 50, 'Đăk Rông', 'dak-rong', 1, 1, 1446429779, 0, 0),
(561, 50, 'Đông Hà', 'dong-ha', 1, 1, 1446429779, 0, 0),
(562, 50, 'Gio Linh', 'gio-linh', 1, 1, 1446429779, 0, 0),
(563, 50, 'Hải Lăng', 'hai-lang', 1, 1, 1446429779, 0, 0),
(564, 50, 'Hướng Hóa', 'huong-hoa', 1, 1, 1446429779, 0, 0),
(565, 50, 'Quảng Trị', 'quang-tri', 1, 1, 1446429779, 0, 0),
(566, 50, 'Triệu Phong', 'trieu-phong', 1, 1, 1446429779, 0, 0),
(567, 50, 'Vĩnh Linh', 'vinh-linh', 1, 1, 1446429779, 0, 0),
(568, 51, 'Châu Thành', 'chau-thanh', 1, 1, 1446429779, 0, 0),
(569, 51, 'Cù Lao Dung', 'cu-lao-dung', 1, 1, 1446429779, 0, 0),
(570, 51, 'Mỹ Xuyên', 'my-xuyen', 1, 1, 1446429779, 0, 0),
(571, 51, 'Mỹ Tú', 'my-tu', 1, 1, 1446429779, 0, 0),
(572, 51, 'Long Phú', 'long-phu', 1, 1, 1446429779, 0, 0),
(573, 51, 'Kế Sách', 'ke-sach', 1, 1, 1446429779, 0, 0),
(574, 51, 'Ngã Năm', 'nga-nam', 1, 1, 1446429779, 0, 0),
(575, 51, 'Sóc Trăng', 'soc-trang', 1, 1, 1446429779, 0, 0),
(576, 51, 'Thạnh Trị', 'thanh-tri', 1, 1, 1446429779, 0, 0),
(577, 51, 'Trần Đề', 'tran-de', 1, 1, 1446429779, 0, 0),
(578, 51, 'Vĩnh Châu', 'vinh-chau', 1, 1, 1446429779, 0, 0),
(579, 52, 'Mai Sơn', 'mai-son', 1, 1, 1446429779, 0, 0),
(580, 52, 'Bắc Yên', 'bac-yen', 1, 1, 1446429779, 0, 0),
(581, 52, 'Mộc Châu', 'moc-chau', 1, 1, 1446429779, 0, 0),
(582, 52, 'Mường La', 'muong-la', 1, 1, 1446429779, 0, 0),
(583, 52, 'Quỳnh Nhai', 'quynh-nhai', 1, 1, 1446429779, 0, 0),
(584, 52, 'Phù Yên', 'phu-yen', 1, 1, 1446429779, 0, 0),
(585, 52, 'Sơn La', 'son-la', 1, 1, 1446429779, 0, 0),
(586, 52, 'Sông Mã', 'song-ma', 1, 1, 1446429779, 0, 0),
(587, 52, 'Sốp Cộp', 'sop-cop', 1, 1, 1446429779, 0, 0),
(588, 52, 'Thuận Châu', 'thuan-chau', 1, 1, 1446429779, 0, 0),
(589, 52, 'Vân Hồ', 'van-ho', 1, 1, 1446429779, 0, 0),
(590, 52, 'Yên Châu', 'yen-chau', 1, 1, 1446429779, 0, 0),
(591, 53, 'Bến Cầu', 'ben-cau', 1, 1, 1446429779, 0, 0),
(592, 53, 'Châu Thành', 'chau-thanh', 1, 1, 1446429779, 0, 0),
(593, 53, 'Gò Dầu', 'go-dau', 1, 1, 1446429779, 0, 0),
(594, 53, 'Dương Minh Châu', 'duong-minh-chau', 1, 1, 1446429779, 0, 0),
(595, 53, 'Tân Biên', 'tan-bien', 1, 1, 1446429779, 0, 0),
(596, 53, 'Hòa Thành', 'hoa-thanh', 1, 1, 1446429779, 0, 0),
(597, 53, 'Tân Châu', 'tan-chau', 1, 1, 1446429779, 0, 0),
(598, 53, 'Tây Ninh', 'tay-ninh', 1, 1, 1446429779, 0, 0),
(599, 53, 'Trảng Bàng', 'trang-bang', 1, 1, 1446429779, 0, 0),
(600, 54, 'Đông Hưng', 'dong-hung', 1, 1, 1446429779, 0, 0),
(601, 54, 'Thái Bình', 'thai-binh', 1, 1, 1446429779, 0, 0),
(602, 54, 'Hưng Hà', 'hung-ha', 1, 1, 1446429779, 0, 0),
(603, 54, 'Kiến Xương', 'kien-xuong', 1, 1, 1446429779, 0, 0),
(604, 54, 'Quỳnh Phụ', 'quynh-phu', 1, 1, 1446429779, 0, 0),
(605, 54, 'Thái Thuỵ', 'thai-thuy', 1, 1, 1446429779, 0, 0),
(606, 54, 'Tiền Hải', 'tien-hai', 1, 1, 1446429779, 0, 0),
(607, 54, 'Vũ Thư', 'vu-thu', 1, 1, 1446429779, 0, 0),
(608, 55, 'Định Hóa', 'dinh-hoa', 1, 1, 1446429779, 0, 0),
(609, 55, 'Đại Từ', 'dai-tu', 1, 1, 1446429779, 0, 0),
(610, 55, 'Đồng Hỷ', 'dong-hy', 1, 1, 1446429779, 0, 0),
(611, 55, 'Phổ Yên', 'pho-yen', 1, 1, 1446429779, 0, 0),
(612, 55, 'Phú Lương', 'phu-luong', 1, 1, 1446429779, 0, 0),
(613, 55, 'Phú Bình', 'phu-binh', 1, 1, 1446429779, 0, 0),
(614, 55, 'Sông Công', 'song-cong', 1, 1, 1446429779, 0, 0),
(615, 55, 'Thái Nguyên', 'thai-nguyen', 1, 1, 1446429779, 0, 0),
(616, 55, 'Võ Nhai', 'vo-nhai', 1, 1, 1446429779, 0, 0),
(617, 56, 'Bá Thước', 'ba-thuoc', 1, 1, 1446429779, 0, 0),
(618, 56, 'Bỉm Sơn', 'bim-son', 1, 1, 1446429779, 0, 0),
(619, 56, 'Cẩm Thủy', 'cam-thuy', 1, 1, 1446429779, 0, 0),
(620, 56, 'Đông Sơn', 'dong-son', 1, 1, 1446429779, 0, 0),
(621, 56, 'Hà Trung', 'ha-trung', 1, 1, 1446429779, 0, 0),
(622, 56, 'Hậu Lộc', 'hau-loc', 1, 1, 1446429779, 0, 0),
(623, 56, 'Hoằng Hóa', 'hoang-hoa', 1, 1, 1446429779, 0, 0),
(624, 56, 'Lang Chánh', 'lang-chanh', 1, 1, 1446429779, 0, 0),
(625, 56, 'Mường Lát', 'muong-lat', 1, 1, 1446429779, 0, 0),
(626, 56, 'Nga Sơn', 'nga-son', 1, 1, 1446429779, 0, 0),
(627, 56, 'Ngọc Lặc', 'ngoc-lac', 1, 1, 1446429779, 0, 0),
(628, 56, 'Như Thanh', 'nhu-thanh', 1, 1, 1446429779, 0, 0),
(629, 56, 'Như Xuân', 'nhu-xuan', 1, 1, 1446429779, 0, 0),
(630, 56, 'Nông Cống', 'nong-cong', 1, 1, 1446429779, 0, 0),
(631, 56, 'Quan Hóa', 'quan-hoa', 1, 1, 1446429779, 0, 0),
(632, 56, 'Quan Sơn', 'quan-son', 1, 1, 1446429779, 0, 0),
(633, 56, 'Quảng Xương', 'quang-xuong', 1, 1, 1446429779, 0, 0),
(634, 56, 'Sầm Sơn', 'sam-son', 1, 1, 1446429779, 0, 0),
(635, 56, 'Thạch Thành', 'thach-thanh', 1, 1, 1446429779, 0, 0),
(636, 56, 'Thanh Hóa', 'thanh-hoa', 1, 1, 1446429779, 0, 0),
(637, 56, 'Thiệu Hóa', 'thieu-hoa', 1, 1, 1446429779, 0, 0),
(638, 56, 'Thọ Xuân', 'tho-xuan', 1, 1, 1446429779, 0, 0),
(639, 56, 'Thường Xuân', 'thuong-xuan', 1, 1, 1446429779, 0, 0),
(640, 56, 'Tĩnh Gia', 'tinh-gia', 1, 1, 1446429779, 0, 0),
(641, 56, 'Triệu Sơn', 'trieu-son', 1, 1, 1446429779, 0, 0),
(642, 56, 'Vĩnh Lộc', 'vinh-loc', 1, 1, 1446429779, 0, 0),
(643, 56, 'Yên Định', 'yen-dinh', 1, 1, 1446429779, 0, 0),
(644, 57, 'A Lưới', 'a-luoi', 1, 1, 1446429779, 0, 0),
(645, 57, 'Hương Thủy', 'huong-thuy', 1, 1, 1446429779, 0, 0),
(646, 57, 'Phong Điền', 'phong-dien', 1, 1, 1446429779, 0, 0),
(647, 57, 'Hương Trà', 'huong-tra', 1, 1, 1446429779, 0, 0),
(648, 57, 'Huế', 'hue', 1, 1, 1446429779, 0, 0),
(649, 57, 'Nam Đông', 'nam-dong', 1, 1, 1446429779, 0, 0),
(650, 57, 'Phú Lộc', 'phu-loc', 1, 1, 1446429779, 0, 0),
(651, 57, 'Phú Vang', 'phu-vang', 1, 1, 1446429779, 0, 0),
(652, 57, 'Quảng Điền', 'quang-dien', 1, 1, 1446429779, 0, 0),
(653, 58, 'Cái Bè', 'cai-be', 1, 1, 1446429779, 0, 0),
(654, 58, 'Gò Công Đông', 'go-cong-dong', 1, 1, 1446429779, 0, 0),
(655, 58, 'Chợ Gạo', 'cho-gao', 1, 1, 1446429779, 0, 0),
(656, 58, 'Gò Công', 'go-cong', 1, 1, 1446429779, 0, 0),
(657, 58, 'Châu Thành', 'chau-thanh', 1, 1, 1446429779, 0, 0),
(658, 58, 'Gò Công Tây', 'go-cong-tay', 1, 1, 1446429779, 0, 0),
(659, 58, 'Huyện Cai Lậy', 'huyen-cai-lay', 1, 1, 1446429779, 0, 0),
(660, 58, 'Mỹ Tho', 'my-tho', 1, 1, 1446429779, 0, 0),
(661, 58, 'Tân Phú Đông', 'tan-phu-dong', 1, 1, 1446429779, 0, 0),
(662, 58, 'Tân Phước', 'tan-phuoc', 1, 1, 1446429779, 0, 0),
(663, 58, 'Thị Xã Cai Lậy', 'thi-xa-cai-lay', 1, 1, 1446429779, 0, 0),
(664, 59, 'Càng Long', 'cang-long', 1, 1, 1446429779, 0, 0),
(665, 59, 'Cầu Ngang', 'cau-ngang', 1, 1, 1446429779, 0, 0),
(666, 59, 'Cầu Kè', 'cau-ke', 1, 1, 1446429779, 0, 0),
(667, 59, 'Duyên Hải', 'duyen-hai', 1, 1, 1446429779, 0, 0),
(668, 59, 'Tiểu Cần', 'tieu-can', 1, 1, 1446429779, 0, 0),
(669, 59, 'Châu Thành', 'chau-thanh', 1, 1, 1446429779, 0, 0),
(670, 59, 'Trà Cú', 'tra-cu', 1, 1, 1446429779, 0, 0),
(671, 59, 'Trà Vinh', 'tra-vinh', 1, 1, 1446429779, 0, 0),
(672, 60, 'Chiêm Hóa', 'chiem-hoa', 1, 1, 1446429779, 0, 0),
(673, 60, 'Sơn Dương', 'son-duong', 1, 1, 1446429779, 0, 0),
(674, 60, 'Na Hang', 'na-hang', 1, 1, 1446429779, 0, 0),
(675, 60, 'Tuyên Quang', 'tuyen-quang', 1, 1, 1446429779, 0, 0),
(676, 60, 'Hàm Yên', 'ham-yen', 1, 1, 1446429779, 0, 0),
(677, 60, 'Lâm Bình', 'lam-binh', 1, 1, 1446429779, 0, 0),
(678, 60, 'Yên Sơn', 'yen-son', 1, 1, 1446429779, 0, 0),
(679, 61, 'Bình Tân', 'binh-tan', 1, 1, 1446429779, 0, 0),
(680, 61, 'Bình Minh', 'binh-minh', 1, 1, 1446429779, 0, 0),
(681, 61, 'Long Hồ', 'long-ho', 1, 1, 1446429779, 0, 0),
(682, 61, 'Mang Thít', 'mang-thit', 1, 1, 1446429779, 0, 0),
(683, 61, 'Tam Bình', 'tam-binh', 1, 1, 1446429779, 0, 0),
(684, 61, 'Trà Ôn', 'tra-on', 1, 1, 1446429779, 0, 0),
(685, 61, 'Vĩnh Long', 'vinh-long', 1, 1, 1446429779, 0, 0),
(686, 61, 'Vũng Liêm', 'vung-liem', 1, 1, 1446429779, 0, 0),
(687, 62, 'Bình Xuyên', 'binh-xuyen', 1, 1, 1446429779, 0, 0),
(688, 62, 'Lập Thạch', 'lap-thach', 1, 1, 1446429779, 0, 0),
(689, 62, 'Phúc Yên', 'phuc-yen', 1, 1, 1446429779, 0, 0),
(690, 62, 'Sông Lô', 'song-lo', 1, 1, 1446429779, 0, 0),
(691, 62, 'Tam Dương', 'tam-duong', 1, 1, 1446429779, 0, 0),
(692, 62, 'Tam Đảo', 'tam-dao', 1, 1, 1446429779, 0, 0),
(693, 62, 'Vĩnh Tường', 'vinh-tuong', 1, 1, 1446429779, 0, 0),
(694, 62, 'Vĩnh Yên', 'vinh-yen', 1, 1, 1446429779, 0, 0),
(695, 62, 'Yên Lạc', 'yen-lac', 1, 1, 1446429779, 0, 0),
(696, 63, 'Lục Yên', 'luc-yen', 1, 1, 1446429779, 0, 0),
(697, 63, 'Mù Cang Chải', 'mu-cang-chai', 1, 1, 1446429779, 0, 0),
(698, 63, 'Văn Chấn', 'van-chan', 1, 1, 1446429779, 0, 0),
(699, 63, 'Nghĩa Lộ', 'nghia-lo', 1, 1, 1446429779, 0, 0),
(700, 63, 'Trấn Yên', 'tran-yen', 1, 1, 1446429779, 0, 0),
(701, 63, 'Trạm Tấu', 'tram-tau', 1, 1, 1446429779, 0, 0),
(702, 63, 'Văn Yên', 'van-yen', 1, 1, 1446429779, 0, 0),
(703, 63, 'Yên Bái', 'yen-bai', 1, 1, 1446429779, 0, 0),
(704, 63, 'Yên Bình', 'yen-binh', 1, 1, 1446429779, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_product`
--

CREATE TABLE `table_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `adminup` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `noibat` tinyint(2) NOT NULL,
  `banchay` tinyint(2) NOT NULL,
  `spmoi` tinyint(2) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten_vi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `thongtin_vi` text NOT NULL,
  `thongtin_en` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `giaban` int(11) NOT NULL,
  `giacu` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `text_search` varchar(255) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `video` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(2) NOT NULL,
  `khuyenmai` tinyint(2) NOT NULL,
  `thanhly` tinyint(2) NOT NULL,
  `tags` text NOT NULL,
  `tagskhongdau` text NOT NULL,
  `tinhnang_vi` text NOT NULL,
  `tinhnang_en` text NOT NULL,
  `thongso_vi` text NOT NULL,
  `thongso_en` text NOT NULL,
  `tenchuho` varchar(255) NOT NULL,
  `diadiem` varchar(255) NOT NULL,
  `trangthai` varchar(255) NOT NULL,
  `chudautu` varchar(255) NOT NULL,
  `dtxaydung` varchar(255) NOT NULL,
  `dtkhudat` varchar(255) NOT NULL,
  `thietke` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_product`
--

INSERT INTO `table_product` (`id`, `id_cat`, `id_list`, `id_item`, `id_sub`, `adminup`, `type`, `noibat`, `banchay`, `spmoi`, `photo`, `thumb`, `ten_vi`, `masp`, `tenkhongdau`, `thongtin_vi`, `thongtin_en`, `title`, `keywords`, `description`, `giaban`, `giacu`, `mota_vi`, `noidung_vi`, `name_vi`, `name_en`, `ten_en`, `mota_en`, `noidung_en`, `text_search`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `luotxem`, `video`, `size`, `color`, `rating`, `khuyenmai`, `thanhly`, `tags`, `tagskhongdau`, `tinhnang_vi`, `tinhnang_en`, `thongso_vi`, `thongso_en`, `tenchuho`, `diadiem`, `trangthai`, `chudautu`, `dtxaydung`, `dtkhudat`, `thietke`) VALUES
(627, 17141, 134, 0, 0, '', 'san-pham', 1, 0, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo thun MCT-0026', 'MCT-0026', 'ao-thun-mct0026', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao thun mct0026', 26, 1, 1536162763, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(626, 17141, 134, 0, 0, '', 'san-pham', 1, 0, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo thun MCT-0025', 'MCT-0025', 'ao-thun-mct0025', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao thun mct0025', 25, 1, 1536162763, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(625, 17141, 134, 0, 0, '', 'san-pham', 1, 0, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo thun MCT-0024', 'MCT-0024', 'ao-thun-mct0024', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao thun mct0024', 24, 1, 1536162763, 0, 5, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(624, 17141, 134, 0, 0, '', 'san-pham', 1, 0, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo thun MCT-0023', 'MCT-0023', 'ao-thun-mct0023', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao thun mct0023', 23, 1, 1536162763, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(623, 17141, 134, 0, 0, '', 'san-pham', 1, 0, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo thun MCT-0022', 'MCT-0022', 'ao-thun-mct0022', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao thun mct0022', 22, 1, 1536162763, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(621, 17141, 134, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo thun MCT-0020', 'MCT-0020', 'ao-thun-mct0020', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao thun mct0020', 20, 1, 1536162763, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(620, 17141, 134, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo thun MCT-0019', 'MCT-0019', 'ao-thun-mct0019', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao thun mct0019', 19, 1, 1536162763, 0, 9, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(619, 17136, 135, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo khoác MCT-0017', 'MCT-0017', 'ao-khoac-mct0017', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao khoac mct0017', 17, 1, 1536162698, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(617, 17136, 135, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo khoác MCT-0015', 'MCT-0015', 'ao-khoac-mct0015', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao khoac mct0015', 15, 1, 1536162698, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(605, 17135, 135, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo khoác MCT-002', 'MCT-002', 'ao-khoac-mct002', '', '', '', '', '', 500000, 620000, 'Our team takes over everything, from an idea and concept development to realization. We believe in traditions and incorporate them within our innovations.', '', '', '', '', '', '', 'ao khoac mct002', 2, 1, 1536162522, 0, 18, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(606, 17135, 135, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo khoác MCT-003', 'MCT-003', 'ao-khoac-mct003', '', '', '', '', '', 500000, 620000, 'Our team takes over everything, from an idea and concept development to realization. We believe in traditions and incorporate them within our innovations.', '', '', '', '', '', '', 'ao khoac mct003', 3, 1, 1536162522, 0, 5, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(607, 17135, 135, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo khoác MCT-004', 'MCT-004', 'ao-khoac-mct004', '', '', '', '', '', 500000, 620000, 'Our team takes over everything, from an idea and concept development to realization. We believe in traditions and incorporate them within our innovations.', '', '', '', '', '', '', 'ao khoac mct004', 4, 1, 1536162522, 0, 8, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(608, 17135, 135, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo khoác MCT-005', 'MCT-005', 'ao-khoac-mct005', '', '', '', '', '', 500000, 620000, 'Our team takes over everything, from an idea and concept development to realization. We believe in traditions and incorporate them within our innovations.', '', '', '', '', '', '', 'ao khoac mct005', 5, 1, 1536162522, 0, 3, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(609, 17135, 135, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo khoác MCT-006', 'MCT-006', 'ao-khoac-mct006', '', '', '', '', '', 500000, 620000, 'Our team takes over everything, from an idea and concept development to realization. We believe in traditions and incorporate them within our innovations.', '', '', '', '', '', '', 'ao khoac mct006', 6, 1, 1536162522, 0, 1, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(622, 17141, 134, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo thun MCT-0021', 'MCT-0021', 'ao-thun-mct0021', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao thun mct0021', 21, 1, 1536162763, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(618, 17136, 135, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo khoác MCT-0016', 'MCT-0016', 'ao-khoac-mct0016', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao khoac mct0016', 16, 1, 1536162698, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(610, 17135, 135, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo khoác MCT-007', 'MCT-007', 'ao-khoac-mct007', '', '', '', '', '', 500000, 620000, 'Our team takes over everything, from an idea and concept development to realization. We believe in traditions and incorporate them within our innovations.', '', '', '', '', '', '', 'ao khoac mct007', 7, 1, 1536162522, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(611, 17135, 135, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo khoác MCT-008', 'MCT-008', 'ao-khoac-mct008', '', '', '', '', '', 500000, 620000, 'Our team takes over everything, from an idea and concept development to realization. We believe in traditions and incorporate them within our innovations.', '', '', '', '', '', '', 'ao khoac mct008', 8, 1, 1536162522, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(612, 17136, 135, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo khoác MCT-0010', 'MCT-0010', 'ao-khoac-mct0010', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao khoac mct0010', 10, 1, 1536162698, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(613, 17136, 135, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo khoác MCT-0011', 'MCT-0011', 'ao-khoac-mct0011', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao khoac mct0011', 11, 1, 1536162698, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(614, 17136, 135, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo khoác MCT-0012', 'MCT-0012', 'ao-khoac-mct0012', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao khoac mct0012', 12, 1, 1536162698, 0, 1, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(615, 17136, 135, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo khoác MCT-0013', 'MCT-0013', 'ao-khoac-mct0013', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao khoac mct0013', 13, 1, 1536162698, 0, 0, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(616, 17136, 135, 0, 0, '', 'san-pham', 1, 1, 0, 'ao-so-mi.jpg', 'ao-so-mi.jpg', 'Áo khoác MCT-0014', 'MCT-0014', 'ao-khoac-mct0014', '', '', '', '', '', 500000, 620000, '✓ Anie.vn giao hàng và thu tiền tận nơi toàn quốc. ✓ Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên. ✓ Nhanh tay click MUA NGAY !', '', '', '', '', '', '', 'ao khoac mct0014', 14, 1, 1536162698, 0, 1, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_product_cat`
--

CREATE TABLE `table_product_cat` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_product_cat`
--

INSERT INTO `table_product_cat` (`id`, `id_list`, `type`, `ten_vi`, `ten_en`, `mota_vi`, `mota_en`, `tenkhongdau`, `mota`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(17133, 135, 'san-pham', 'Áo khoác nỉ', '', '', '', 'ao-khoac-ni', '', '', '', '', '', '', 1, 1, 1536159488, 0),
(17134, 135, 'san-pham', 'Áo khoác dù breaker', '', '', '', 'ao-khoac-du-breaker', '', '', '', '', '', '', 1, 1, 1536159502, 0),
(17135, 135, 'san-pham', 'Áo khoác kaki', '', '', '', 'ao-khoac-kaki', '', '', '', '', '', '', 1, 1, 1536159510, 0),
(17136, 135, 'san-pham', 'Áo khoác Gile', '', '', '', 'ao-khoac-gile', '', '', '', '', '', '', 1, 1, 1536159517, 0),
(17137, 135, 'san-pham', 'Áo khoác JEAN', '', '', '', 'ao-khoac-jean', '', '', '', '', '', '', 1, 1, 1536159526, 0),
(17138, 135, 'san-pham', 'Áo khoác CARDIGAN', '', '', '', 'ao-khoac-cardigan', '', '', '', '', '', '', 1, 1, 1536159535, 0),
(17139, 135, 'san-pham', 'Áo Vest Nam', '', '', '', 'ao-vest-nam', '', '', '', '', '', '', 1, 1, 1536159544, 0),
(17140, 134, 'san-pham', 'Áo Thun Ngắn Tay', '', '', '', 'ao-thun-ngan-tay', '', '', '', '', '', '', 1, 1, 1536161265, 0),
(17141, 134, 'san-pham', 'Áo Thun Dài Tay', '', '', '', 'ao-thun-dai-tay', '', '', '', '', '', '', 1, 1, 1536161275, 0),
(17142, 133, 'san-pham', 'Áo Sơ Mi Ngắn Tay', '', '', '', 'ao-so-mi-ngan-tay', '', '', '', '', '', '', 1, 1, 1536161291, 0),
(17143, 133, 'san-pham', 'Áo Sơ Mi Dài Tay', '', '', '', 'ao-so-mi-dai-tay', '', '', '', '', '', '', 1, 1, 1536161305, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_product_item`
--

CREATE TABLE `table_product_item` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_product_list`
--

CREATE TABLE `table_product_list` (
  `id` int(11) NOT NULL,
  `noibat` tinyint(2) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `quangcao` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quangcao_thumb` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota_vi` text NOT NULL,
  `mota_en` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_product_list`
--

INSERT INTO `table_product_list` (`id`, `noibat`, `type`, `ten_vi`, `ten_en`, `name_vi`, `name_en`, `tenkhongdau`, `links`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `quangcao`, `quangcao_thumb`, `mota_vi`, `mota_en`) VALUES
(111, 1, 'thuong-hieu', 'Bridgestone', '', '', '', 'bridgestone', '', '', '', '', '1-3545.png', '1-3545_120x42.857142857143.png', 1, 1, 1523324542, 1523324648, '', '', '', ''),
(112, 1, 'thuong-hieu', 'Good year', '', '', '', 'good-year', '', '', '', '', '2-1447.png', '2-1447_120x42.857142857143.png', 1, 1, 1523324668, 0, '', '', '', ''),
(113, 1, 'thuong-hieu', 'Toyo Tires', '', '', '', 'toyo-tires', '', '', '', '', '3-195.png', '3-195_120x42.857142857143.png', 1, 1, 1523324684, 0, '', '', '', ''),
(114, 1, 'thuong-hieu', 'Firestone', '', '', '', 'firestone', '', '', '', '', '4-8304.png', '4-8304_120x42.857142857143.png', 1, 1, 1523324716, 0, '', '', '', ''),
(115, 1, 'thuong-hieu', 'Pirelli', '', '', '', 'pirelli', '', '', '', '', '5-7784.png', '5-7784_120x42.857142857143.png', 1, 1, 1523324735, 0, '', '', '', ''),
(116, 1, 'thuong-hieu', 'Dunlop', '', '', '', 'dunlop', '', '', '', '', '6-7805.png', '6-7805_120x42.857142857143.png', 1, 1, 1523324743, 0, '', '', '', ''),
(117, 1, 'thuong-hieu', 'Yokohama', '', '', '', 'yokohama', '', '', '', '', '7-2241.png', '7-2241_120x42.857142857143.png', 1, 1, 1523324753, 0, '', '', '', ''),
(118, 1, 'thuong-hieu', 'Michelin', '', '', '', 'michelin', '', '', '', '', '8-7131.png', '8-7131_120x42.857142857143.png', 1, 1, 1523324776, 0, '', '', '', ''),
(119, 1, 'thuong-hieu', 'Silcolene', '', '', '', 'silcolene', '', '', '', '', '9-8230.png', '9-8230_120x42.857142857143.png', 1, 1, 1523324793, 0, '', '', '', ''),
(120, 1, 'thuong-hieu', 'Cheng shin', '', '', '', 'cheng-shin', '', '', '', '', '10-8466.png', '10-8466_120x42.857142857143.png', 1, 1, 1523324817, 0, '', '', '', ''),
(132, 0, 'san-pham', 'Quần Dài Nam', '', '', '', 'quan-dai-nam', 'http://themes-pixeden.com/font-demos/7-stroke/', '', '', '', '9-4763.jpg', '9-4763_426x600.jpg', 4, 1, 1533288228, 1536165662, 'qc2-9617.jpg', 'qc2-9617_600x600.jpg', '', ''),
(133, 0, 'san-pham', 'Áo Sơ Mi Nam', '', '', '', 'ao-so-mi-nam', 'http://themes-pixeden.com/font-demos/7-stroke/', '', '', '', '8-7606.jpg', '8-7606_423.75x600.jpg', 3, 1, 1533288245, 1536165654, 'qc1-5158.jpg', 'qc1-5158_600x600.jpg', '', ''),
(134, 1, 'san-pham', 'Áo Thun Nam', '', '', '', 'ao-thun-nam', 'http://themes-pixeden.com/font-demos/7-stroke/', '', '', '', '3-3444.jpg', '3-3444_423.75x600.jpg', 2, 1, 1533799397, 1536165645, 'qc2-8927.jpg', 'qc2-8927_600x600.jpg', '', ''),
(135, 1, 'san-pham', 'Áo khoác nam', '', '', '', 'ao-khoac-nam', 'http://themes-pixeden.com/font-demos/7-stroke/', '', '', '', '2-9796.jpg', '2-9796_423.75x600.jpg', 1, 1, 1533799416, 1536165638, 'qc1-3294.jpg', 'qc1-3294_600x600.jpg', '', ''),
(136, 0, 'san-pham', 'Quần Short Nam', '', '', '', 'quan-short-nam', 'http://themes-pixeden.com/font-demos/7-stroke/', '', '', '', '10-786.jpg', '10-786_426x600.jpg', 5, 1, 1536159456, 1536165669, 'qc1-8721.jpg', 'qc1-8721_600x600.jpg', '', ''),
(137, 0, 'san-pham', 'Phụ Kiện', '', '', '', 'phu-kien', 'http://themes-pixeden.com/font-demos/7-stroke/', '', '', '', '13-574.jpg', '13-574_426x600.jpg', 6, 1, 1536159470, 1536165679, 'qc2-6454.jpg', 'qc2-6454_600x600.jpg', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_product_photo`
--

CREATE TABLE `table_product_photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(1024) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_product_sub`
--

CREATE TABLE `table_product_sub` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_setting`
--

CREATE TABLE `table_setting` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `slogan_vi` varchar(255) NOT NULL,
  `slogan_en` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `diachi_vi` varchar(255) NOT NULL,
  `diachi_en` varchar(255) NOT NULL,
  `hotline` varchar(255) NOT NULL,
  `toado` text NOT NULL,
  `website` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `analytics` text NOT NULL,
  `vchat` text NOT NULL,
  `bgtop` varchar(255) NOT NULL,
  `bgcontent` varchar(255) NOT NULL,
  `tags` text NOT NULL,
  `tagskhongdau` text NOT NULL,
  `page_sp` int(5) NOT NULL,
  `page_ne` int(5) NOT NULL,
  `page_in` int(5) NOT NULL,
  `hotlinepage` text NOT NULL,
  `lienketweb` text NOT NULL,
  `disable_web` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_setting`
--

INSERT INTO `table_setting` (`id`, `title`, `keywords`, `description`, `photo`, `ten_vi`, `ten_en`, `slogan_vi`, `slogan_en`, `email`, `dienthoai`, `diachi_vi`, `diachi_en`, `hotline`, `toado`, `website`, `facebook`, `analytics`, `vchat`, `bgtop`, `bgcontent`, `tags`, `tagskhongdau`, `page_sp`, `page_ne`, `page_in`, `hotlinepage`, `lienketweb`, `disable_web`) VALUES
(1, 'Kiến Trúc Mới', 'Kiến Trúc Mới', 'Kiến Trúc Mới', 'map-4132.png', 'Kiến Trúc Mới', 'abc', 'Chào mừng bạn đến với website của Kiến trúc mới', '', 'ngoc.ltb@acb.com.vn', '0903 808 100', '133 Đường Truông Tre, KP Bình Minh 2, TX Dĩ An Bình Dương.', 'Nhà Xưởng: A7/2/2 Ấp 1,Vĩnh Lộc B,Võ Văn Vân,Huyện Bình Chánh,Tp.HCM', '0903 808 100', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7756583107334!2d106.67162971532964!3d10.828472992286244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752902293e48d7%3A0xe591769d21dd392e!2zMjE1IFF1YW5nIFRydW5nLCBQaMaw4budbmcgMTAsIEfDsiBW4bqlcCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1533865866193\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'kientrucmoi.com', 'https://www.facebook.com/Aocuoidepdian/', '', '', 'favicon-8738.png', 'errorflat-1773.png', '', '', 12, 4, 10, '<h5>Để có ngôi nhà mơ ước của bạn, hãy liên hệ với chúng tôi ngay!</h5>\r\n<p>Hỗ trợ tư vấn, thiết kế & xây dựng chuyên nghiệp</p>', 'https://google.com.vn,https://thethao247.vn', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_tailieu`
--

CREATE TABLE `table_tailieu` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `ten_cn` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `mota_cn` text NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `tailieu` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `noibat` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_tailieu`
--

INSERT INTO `table_tailieu` (`id`, `type`, `ten_vi`, `ten_en`, `ten_cn`, `mota_vi`, `mota_en`, `mota_cn`, `tenkhongdau`, `photo`, `thumb`, `tailieu`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `noibat`) VALUES
(33, 'tai-lieu', 'Tài liệu dữ liệu truyền thông', '', '', '', '', '', 'tai-lieu-du-lieu-truyen-thong', '', '', 'dac-ta-lap-trinh-website-xavia-4812.docx', 1, 1, 1535530792, 1535530923, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_thanhvien`
--

CREATE TABLE `table_thanhvien` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(225) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `hoten` varchar(225) NOT NULL,
  `dienthoai` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `diachi` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  `ngaysinh` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `congty` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `com` varchar(225) NOT NULL DEFAULT 'user',
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `activation` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stt` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_thanhvien`
--

INSERT INTO `table_thanhvien` (`id`, `username`, `userid`, `password`, `hoten`, `dienthoai`, `email`, `diachi`, `photo`, `sex`, `ngaysinh`, `congty`, `country`, `city`, `hienthi`, `com`, `type`, `activation`, `stt`, `ngaytao`, `ten`) VALUES
(10, 'admin', 'user00010', '438ae029fd431d6416f1fe3b821b6370', 'Nguyễn Thành Thắng', '0933526651', 'thanhthangnina@gmail.com', '106 Bàu Cát 1. Phường 14, Quận Tân Bình', '1_1526026340.jpg', 0, '8/7/1991', '', '', '', 1, 'user', 'member', '0f16c71bf087d0af6cc64f9a172de8ea', 1, 1526005698, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_tinhtrang`
--

CREATE TABLE `table_tinhtrang` (
  `id` int(11) NOT NULL,
  `trangthai` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_tinhtrang`
--

INSERT INTO `table_tinhtrang` (`id`, `trangthai`) VALUES
(1, 'Mới đặt'),
(2, 'Đã xác nhận'),
(3, 'Đang giao hàng'),
(4, 'Đã giao'),
(5, 'Đã hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_user`
--

CREATE TABLE `table_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `dienthoai` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `diachi` varchar(225) NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  `nick_yahoo` varchar(225) NOT NULL,
  `nick_skype` varchar(225) NOT NULL,
  `congty` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `quyen` varchar(255) NOT NULL,
  `role` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `com` varchar(225) NOT NULL DEFAULT 'user',
  `type` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `permission` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_user`
--

INSERT INTO `table_user` (`id`, `username`, `password`, `ten`, `dienthoai`, `email`, `diachi`, `sex`, `nick_yahoo`, `nick_skype`, `congty`, `country`, `city`, `quyen`, `role`, `hienthi`, `com`, `type`, `stt`, `permission`) VALUES
(3, 'admin', '0a8eb50eac7fc7c6e3f67f3647040331', '', '', '', '', 0, '', '', '', '', '', '', 3, 1, 'user', 'user', 0, ''),
(7, 'adminweb', '9da057998deb89712de268166a44402c', '', '', '', '', 0, '', '', '', '', '', '', 3, 1, 'user', 'user', 0, ''),
(8, 'doctorweb', '7cb964bb2f46bce0a6b2931465db42c2', '', '', '', '', 0, '', '', '', '', '', '', 3, 1, 'user', 'user', 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_video`
--

CREATE TABLE `table_video` (
  `id` int(10) UNSIGNED NOT NULL,
  `noibat` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `video` varchar(255) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `mota_en` text NOT NULL,
  `mota_vi` text NOT NULL,
  `ten_cn` varchar(255) NOT NULL,
  `mota_cn` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_video`
--

INSERT INTO `table_video` (`id`, `noibat`, `type`, `photo`, `thumb`, `video`, `ten_vi`, `tenkhongdau`, `links`, `title`, `keywords`, `description`, `ten_en`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `luotxem`, `mota_en`, `mota_vi`, `ten_cn`, `mota_cn`) VALUES
(44, 0, 'video', 'nhungluuydeconhungbucanhcuoideptuyetvoi-1083.jpg', 'nhungluuydeconhungbucanhcuoideptuyetvoi-1083_300x300.jpg', '', 'Way Back Home - That Girl ', 'way-back-home-that-girl', 'https://www.youtube.com/watch?v=rynMyM9CRTY', '', '', '', '', 1, 1, 1535799929, 1535799950, 0, '', '', '', ''),
(45, 0, 'video', 'tai-xuong-4038.jpg', 'tai-xuong-4038_300x300.jpg', '', 'Tâm sự tuổi 30', 'tam-su-tuoi-30', 'https://www.youtube.com/watch?v=pwCaaico9M8', '', '', '', '', 1, 1, 1535800001, 1535821042, 0, '', '<p><span style=\"color: rgb(17, 17, 17); font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap;\">Tâm Sự Tuổi 30 Lyric: Từng ngày mệt nhoài, muộn phiền trôi qua Giật mình nhìn lại thấy anh đã già Lâu rồi cũng chẳng biết nhớ nhung yêu thương một người Rồi bỗng một ngày như trở về tuổi 20 Là khi anh thấy ánh mắt và nụ cười Em làm con tim anh trở nên hoang mang loạn nhịp Liên hồi, lại sợ em sẽ từ chối Nên anh mới viết ra tâm tư lòng này Là ...</span></p>\r\n', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_yahoo`
--

CREATE TABLE `table_yahoo` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `yahoo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `dienthoai` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `stt` int(3) NOT NULL,
  `hienthi` int(2) NOT NULL,
  `ngaytao` int(10) NOT NULL,
  `ngaysua` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `table_yahoo`
--

INSERT INTO `table_yahoo` (`id`, `ten`, `yahoo`, `skype`, `dienthoai`, `email`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(13, 'Anh Hoạt', 'ctydaithang22', 'ctydaithang22', '0938379009', 'ctydaithang22@gmail.com', 2, 1, 1468738850, 1470624897),
(14, 'Chị Khuyên', 'ctydaithang22', 'ctydaithang22', '01228788999', 'ctydaithang22@gmail.com', 1, 1, 1468739474, 1470758155);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_album`
--
ALTER TABLE `table_album`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_album_list`
--
ALTER TABLE `table_album_list`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_album_photo`
--
ALTER TABLE `table_album_photo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_baiviet`
--
ALTER TABLE `table_baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_baiviet_cat`
--
ALTER TABLE `table_baiviet_cat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_baiviet_item`
--
ALTER TABLE `table_baiviet_item`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_baiviet_list`
--
ALTER TABLE `table_baiviet_list`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_baiviet_photo`
--
ALTER TABLE `table_baiviet_photo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_com`
--
ALTER TABLE `table_com`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_company`
--
ALTER TABLE `table_company`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_contact`
--
ALTER TABLE `table_contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_counter`
--
ALTER TABLE `table_counter`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_gia`
--
ALTER TABLE `table_gia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_hoidap`
--
ALTER TABLE `table_hoidap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_info`
--
ALTER TABLE `table_info`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_newsletter`
--
ALTER TABLE `table_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_online`
--
ALTER TABLE `table_online`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_order`
--
ALTER TABLE `table_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_order_detail`
--
ALTER TABLE `table_order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_phanquyen`
--
ALTER TABLE `table_phanquyen`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_photo`
--
ALTER TABLE `table_photo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_place_city`
--
ALTER TABLE `table_place_city`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_place_dist`
--
ALTER TABLE `table_place_dist`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_product`
--
ALTER TABLE `table_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_product_cat`
--
ALTER TABLE `table_product_cat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_product_item`
--
ALTER TABLE `table_product_item`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_product_list`
--
ALTER TABLE `table_product_list`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_product_photo`
--
ALTER TABLE `table_product_photo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_product_sub`
--
ALTER TABLE `table_product_sub`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_setting`
--
ALTER TABLE `table_setting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_tailieu`
--
ALTER TABLE `table_tailieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_thanhvien`
--
ALTER TABLE `table_thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_tinhtrang`
--
ALTER TABLE `table_tinhtrang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_video`
--
ALTER TABLE `table_video`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_yahoo`
--
ALTER TABLE `table_yahoo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `table_album`
--
ALTER TABLE `table_album`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `table_album_list`
--
ALTER TABLE `table_album_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `table_album_photo`
--
ALTER TABLE `table_album_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT cho bảng `table_baiviet`
--
ALTER TABLE `table_baiviet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT cho bảng `table_baiviet_cat`
--
ALTER TABLE `table_baiviet_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `table_baiviet_item`
--
ALTER TABLE `table_baiviet_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `table_baiviet_list`
--
ALTER TABLE `table_baiviet_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `table_baiviet_photo`
--
ALTER TABLE `table_baiviet_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT cho bảng `table_com`
--
ALTER TABLE `table_com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `table_company`
--
ALTER TABLE `table_company`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `table_contact`
--
ALTER TABLE `table_contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `table_counter`
--
ALTER TABLE `table_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `table_gia`
--
ALTER TABLE `table_gia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `table_hoidap`
--
ALTER TABLE `table_hoidap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `table_info`
--
ALTER TABLE `table_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `table_newsletter`
--
ALTER TABLE `table_newsletter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT cho bảng `table_online`
--
ALTER TABLE `table_online`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68733;

--
-- AUTO_INCREMENT cho bảng `table_order`
--
ALTER TABLE `table_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `table_order_detail`
--
ALTER TABLE `table_order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `table_phanquyen`
--
ALTER TABLE `table_phanquyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `table_photo`
--
ALTER TABLE `table_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `table_place_city`
--
ALTER TABLE `table_place_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `table_place_dist`
--
ALTER TABLE `table_place_dist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=706;

--
-- AUTO_INCREMENT cho bảng `table_product`
--
ALTER TABLE `table_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=628;

--
-- AUTO_INCREMENT cho bảng `table_product_cat`
--
ALTER TABLE `table_product_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17144;

--
-- AUTO_INCREMENT cho bảng `table_product_item`
--
ALTER TABLE `table_product_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `table_product_list`
--
ALTER TABLE `table_product_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT cho bảng `table_product_photo`
--
ALTER TABLE `table_product_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `table_product_sub`
--
ALTER TABLE `table_product_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `table_setting`
--
ALTER TABLE `table_setting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `table_tailieu`
--
ALTER TABLE `table_tailieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `table_thanhvien`
--
ALTER TABLE `table_thanhvien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `table_tinhtrang`
--
ALTER TABLE `table_tinhtrang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `table_video`
--
ALTER TABLE `table_video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `table_yahoo`
--
ALTER TABLE `table_yahoo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
