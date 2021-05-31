-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 10:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Basliq` varchar(500) NOT NULL,
  `mezmun` text NOT NULL,
  `sekil` varchar(250) NOT NULL,
  `oxunma_sayi` int(11) NOT NULL DEFAULT '0',
  `yazilma_tarixi` datetime NOT NULL,
  `muellif` varchar(250) NOT NULL DEFAULT 'Admin',
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `yenilenme_tarixi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `Basliq`, `mezmun`, `sekil`, `oxunma_sayi`, `yazilma_tarixi`, `muellif`, `status`, `yenilenme_tarixi`) VALUES
(4, 'QRAFİK DİZAYN TƏLİMLƏRİNƏ ENDİRİM', '<p>Qeydiyyatdan keçin və Qurban Bayramı ENDIRIMLƏRİNDƏN sizdə faydalanın.</p>\r\n<p>Qrafik dizayn proqramlarını öyrənmək istəyənlərin nəzərinə . Təlimlər müasir dərs proqramına əsaslanaraq, real proyektlərlə birgə keçirilir.</p>\r\n<div class=\"text_exposed_show\">\r\n<p>Təlimin sonunda tələbələr imtahandan müvəffəqiyətlə keçdikdən sonra sertifikatla mükafatlandırılacaq və ən əsası hər tələbənin şəxsi portfoliosu yığılmasında müəllim tərəfindən dəstək çıxılacaq.</p>\r\n<p><span class=\"_5mfr\"><span class=\"_6qdm\">✅</span></span> Qrafik Dizayn:<br />- Photoshop<br />- İllustrator<br />- İnDesign<br />- Lightroom</p>\r\n<p>*Qeyd : Təlimi müvəffəqiyyətlə bitirən tələbələrə sertifikatla mükafatlandırılır.</p>\r\n</div>', 'sekil/blog/9233-24151logolar.jpg', 0, '2019-08-21 00:51:14', 'Admin', '0', '2019-08-21 00:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `haqqinda`
--

CREATE TABLE `haqqinda` (
  `id` int(11) NOT NULL,
  `Basliq` varchar(250) NOT NULL,
  `mezmun` text NOT NULL,
  `video` varchar(150) NOT NULL,
  `sekil` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `haqqinda`
--

INSERT INTO `haqqinda` (`id`, `Basliq`, `mezmun`, `video`, `sekil`) VALUES
(1, 'Yup Tech', '<p>dasfasff</p>', '', 'sekil/6049-Penguins.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `isciler`
--

CREATE TABLE `isciler` (
  `id` int(11) UNSIGNED NOT NULL,
  `AdSoyad` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  `sifre_askar` varchar(250) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `sekil` varchar(250) NOT NULL,
  `Vezife` varchar(50) NOT NULL,
  `Maas_Tip` enum('faiz','sabit') NOT NULL,
  `Maas` int(4) NOT NULL,
  `baslama_tarixi` date NOT NULL,
  `bitme_tarixi` date DEFAULT NULL,
  `muellim` enum('1','0') NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `isciler`
--

INSERT INTO `isciler` (`id`, `AdSoyad`, `email`, `sifre`, `sifre_askar`, `tel`, `sekil`, `Vezife`, `Maas_Tip`, `Maas`, `baslama_tarixi`, `bitme_tarixi`, `muellim`, `status`) VALUES
(1, 'Fzxcbb', 'zxcbzxcb@fgfg.cm', 'aa37571b04b9f5a3f9c5819a61af9881', '#td4t-Jt', '123414', 'sekil/isci/9314-1200px-ISO_C++_Logo.svg.png', 'zcxbf', 'faiz', 40, '2019-05-11', NULL, '0', '1'),
(2, 'Cəfərova Aysu', 'ncefer324@gmail.com', '202cb962ac59075b964b07152d234b70', '123', '055 211 22 80', 'sekil/isci/2476-3346-5.jpg', 'IT HELP DESK', 'faiz', 55, '2019-05-11', NULL, '', '1'),
(4, 'Rafət Ağabəyli', 'rafet@gmail.com', '8f23a95bc26cb111a7ba53ac73fdb7f5', 'n0yZ(ByH', '051 210 00 01', 'sekil/isci/teacher.png', 'C# və Asp.net Təlimçisi', 'faiz', 50, '2019-06-09', NULL, '1', '1'),
(5, 'Əli Cavadov', 'eli@gmail.com', '9ee20735c8119df7ff3a3e213df2e72d', '(KN4dXrr', '055 222 22 22', 'sekil/isci/teacher.png', 'Dizayn üzrə təlimçi', 'faiz', 60, '2019-06-09', NULL, '1', '1'),
(6, 'El.şən Zaurov', 'elsen@gmail.com', '565b73f226a7db80b486c219ee7c6b2b', 'XvO!10i1', '055 777 88 88', 'sekil/isci/teacher.png', 'PHP üzrə təlimçi', 'faiz', 50, '2019-06-09', NULL, '1', '1'),
(7, 'Emilya Məlikli', 'emilya@yuptech.az', '01ad49ff8818e2556107cb8c74ab3798', 'JLXc(Sku', '055 211 22 88', 'sekil/isci/teacher.png', 'Ofis Menecer', 'sabit', 150, '2019-06-09', NULL, '0', '1'),
(8, 'Kənan Kamranoğlu', 'kenan@yuptech.az', '3e6ee0458d9aef04fe932aff2845e799', 'S0tGVY3O', '055 211 23 80', 'sekil/isci/teacher.png', 'Ofis Menecer', 'sabit', 250, '2019-06-09', NULL, '0', '1'),
(9, 'Sevinc Nuruyeva', 'sevinc@gmail.com', 'eb117a810c0c133e56c85e42c8e0fe30', 'vq#UFHtv', '055 888 99 99', 'sekil/isci/teacher.png', 'Xadiməçi', 'sabit', 50, '2019-06-09', NULL, '0', '1'),
(11, 'Əyyub Hacıyev', 'eyyubhaciyevv@gmail.com', 'ed1ae693017c7f52ad95d5a87f9b5f65', 'TMopDm@l', '055 211 22 80', 'sekil/isci/4749-a.jpg', 'Təsisçi, Drektor, Veb Proqramlaşdırma üzrə təlimçi', 'faiz', 100, '2019-06-09', NULL, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `isci_odenis`
--

CREATE TABLE `isci_odenis` (
  `id` int(11) UNSIGNED NOT NULL,
  `isci_id` int(11) NOT NULL,
  `odenilen_mebleq` float(6,2) NOT NULL,
  `odenme_tarixi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `isci_odenis`
--

INSERT INTO `isci_odenis` (`id`, `isci_id`, `odenilen_mebleq`, `odenme_tarixi`) VALUES
(1, 7, 250.00, '2019-06-28 15:42:44'),
(2, 12, 300.00, '2019-06-29 14:04:53'),
(3, 12, 3000.00, '2019-06-29 14:05:24'),
(4, 8, 2500.00, '2019-06-29 14:05:34'),
(5, 12, 250.00, '2019-07-13 10:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_kat`
--

CREATE TABLE `portfolio_kat` (
  `id` int(11) NOT NULL,
  `ad` varchar(150) NOT NULL,
  `sira` int(2) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `seo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio_kat`
--

INSERT INTO `portfolio_kat` (`id`, `ad`, `sira`, `status`, `seo`) VALUES
(5, 'Veb Layihəlırimiz', 1, '0', 'veb-layihelirimiz'),
(6, 'Logolarımız', 2, '0', 'logolarimiz');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_mez`
--

CREATE TABLE `portfolio_mez` (
  `id` int(11) NOT NULL,
  `port_kat_id` int(11) NOT NULL,
  `Basliq` varchar(150) NOT NULL,
  `sekil` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio_mez`
--

INSERT INTO `portfolio_mez` (`id`, `port_kat_id`, `Basliq`, `sekil`, `status`) VALUES
(7, 5, 'Dərmanım.az', 'sekil/portfolio/4329-1200px-ISO_C++_Logo.svg.png', '1'),
(8, 5, 'My Parfum', 'sekil/portfolio/5165-download.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `post_code` varchar(15) NOT NULL,
  `mobile` varchar(22) NOT NULL,
  `office` varchar(22) NOT NULL,
  `email` varchar(25) NOT NULL,
  `facebook` varchar(150) NOT NULL,
  `instagram` varchar(150) NOT NULL,
  `youtube` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `keywords`, `address`, `post_code`, `mobile`, `office`, `email`, `facebook`, `instagram`, `youtube`) VALUES
(1, 'Yup Technology-VEB SƏHİFƏLƏRİN HAZIRLANMASI, PROQRAMLAŞDIRMA TƏLİMLƏRİ, DİZAYN TƏLİMLƏRİ, OFİS PROQRAMLARI ', 'veb səhifələrin hazırlanması,it xidmətlər,proqramlaşdırma təlimləri,tələbə endirimi,texnoloji avadanlıqların satışı,dizayn xidmətləri,veb təlimlər', 'Yuptech Studio - vasitəsilə cəlbedici dizayna malik və funksional web səhifələrin hazırlanmasinı tez bir zamanda reallaşdıra bilərsiniz.', 'Yasamal ray. Ş.Qurbanov 1', 'AZ1009', '077 311 22 80', '012 594 69 21', 'office@yuptech.az', 'https://www.facebook.com/yuptechnology', 'https://www.instagram.com', 'https://www.youtube.com'),
(2, 'Yup Technology', 'Telimler Basladi', 'Telebelere Endirim Movcuddur', 'Azerbaycan.Baki', '123456', '0777175454', 'Yup Tech', 'hamid@gmail.com', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.youtube.com');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) UNSIGNED NOT NULL,
  `ad` varchar(50) NOT NULL,
  `sekil` varchar(250) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `tarix` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `ad`, `sekil`, `status`, `tarix`) VALUES
(1, 'Telefon', 'sekil/slider/8833-alqoritm 2.jpg', '1', '2019-08-17 15:48:29'),
(8, 'Qrafik Dizayn', 'sekil/slider/1773-Lighthouse.jpg', '0', '2019-08-05 23:39:26'),
(9, 'slidr', 'sekil/slider/1091-bakigeceleri.jpg', '0', '2019-08-05 23:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `telebeler`
--

CREATE TABLE `telebeler` (
  `id` int(22) UNSIGNED NOT NULL,
  `AdSoyad` varchar(150) NOT NULL,
  `sv_nomresi` varchar(20) NOT NULL,
  `tevellud` date NOT NULL,
  `uni` varchar(50) NOT NULL,
  `bas_tarix` date NOT NULL,
  `bitirdiyi_tarix` date DEFAULT NULL,
  `telim` varchar(100) NOT NULL,
  `muddeti` varchar(10) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `unvan` varchar(250) NOT NULL,
  `Ferdi` enum('0','1') NOT NULL DEFAULT '0',
  `hef_ders_muddeti` varchar(10) NOT NULL,
  `endirim` int(2) NOT NULL,
  `muellim_rey` varchar(25) NOT NULL,
  `muellimi` varchar(50) NOT NULL,
  `sertifikat_nomresi` varchar(15) NOT NULL,
  `umumi_gosterivcisi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `telebeler`
--

INSERT INTO `telebeler` (`id`, `AdSoyad`, `sv_nomresi`, `tevellud`, `uni`, `bas_tarix`, `bitirdiyi_tarix`, `telim`, `muddeti`, `tel`, `email`, `unvan`, `Ferdi`, `hef_ders_muddeti`, `endirim`, `muellim_rey`, `muellimi`, `sertifikat_nomresi`, `umumi_gosterivcisi`) VALUES
(1, 'Cəfərova Aysu', '№ 14499592', '2019-06-13', 'AZTU', '2019-06-13', NULL, 'VEB PROQRAMLAŞDIRMA (PHP)', '6', '055 211 22 80', 'eyyub@gmail.com', 'Ş.Qurbanov 1 / 24', '0', '3', 20, '', 'Əyyub Hacıyev', '', 0),
(2, 'Fəhmin Şamilli', 'AZE 678 96 54 12', '1999-11-27', 'AZTU', '2019-06-13', NULL, 'VEB PROQRAMLAŞDIRMA (PHP)', '6', '051 672 55 22', 'fehmin@gmail.com', 'GƏNCƏ', '0', '3', 22, '', 'Əyyub Hacıyev', '', 0),
(3, 'Həmid Həmidli', 'AZE 152670604', '1998-06-25', 'AZTU', '2019-06-13', NULL, 'ASP.NET(PAKET)', '6', '077 717 54 54', 'hemid@gmail.com', 'XAŞMAZ ŞƏH', '0', '2', 1, '', 'Rafət Ağabəyli', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `telebe_devamiyyet`
--

CREATE TABLE `telebe_devamiyyet` (
  `id` int(11) UNSIGNED NOT NULL,
  `telebe_id` int(11) NOT NULL,
  `tarix` date DEFAULT NULL,
  `status` enum('ie','qb') DEFAULT NULL,
  `umumi_ders_sayi` int(5) NOT NULL,
  `qalan_ders_sayi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `telebe_devamiyyet`
--

INSERT INTO `telebe_devamiyyet` (`id`, `telebe_id`, `tarix`, `status`, `umumi_ders_sayi`, `qalan_ders_sayi`) VALUES
(3, 1, NULL, NULL, 72, 72),
(4, 2, NULL, NULL, 72, 72),
(5, 3, NULL, NULL, 48, 48);

-- --------------------------------------------------------

--
-- Table structure for table `telebe_odenis`
--

CREATE TABLE `telebe_odenis` (
  `id` int(11) UNSIGNED NOT NULL,
  `telebe_id` int(11) NOT NULL,
  `ayliq_odenis` float(6,2) NOT NULL,
  `endirim` int(11) NOT NULL,
  `endirimsiz_odenis` int(11) NOT NULL,
  `umumi_borc` float(6,2) NOT NULL,
  `umumi_odenilen` float(6,2) NOT NULL DEFAULT '0.00',
  `odenis` float(6,2) NOT NULL,
  `qaliq_borc` float(6,2) NOT NULL,
  `status` enum('qismen','tam') DEFAULT NULL,
  `odeme_tarixi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `telebe_odenis`
--

INSERT INTO `telebe_odenis` (`id`, `telebe_id`, `ayliq_odenis`, `endirim`, `endirimsiz_odenis`, `umumi_borc`, `umumi_odenilen`, `odenis`, `qaliq_borc`, `status`, `odeme_tarixi`) VALUES
(3, 1, 160.00, 20, 200, 960.00, 0.00, 0.00, 960.00, NULL, NULL),
(4, 2, 156.00, 22, 200, 936.00, 0.00, 0.00, 936.00, NULL, NULL),
(5, 3, 148.50, 1, 150, 891.00, 0.00, 0.00, 891.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `telim_kat`
--

CREATE TABLE `telim_kat` (
  `id` int(11) UNSIGNED NOT NULL,
  `ad` varchar(50) NOT NULL,
  `sira` int(2) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `seo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `telim_kat`
--

INSERT INTO `telim_kat` (`id`, `ad`, `sira`, `status`, `seo`) VALUES
(6, 'IT', 1, '1', 'it'),
(15, 'Proqramlasdirma', 1, '0', 'proqramlasdirma'),
(16, 'Web Proqramlasdirma', 2, '0', 'web-proqramlasdirma'),
(17, 'Qrafik Dizayn', 3, '0', 'qrafik-dizayn');

-- --------------------------------------------------------

--
-- Table structure for table `telim_mez`
--

CREATE TABLE `telim_mez` (
  `id` int(11) NOT NULL,
  `tel_kat_id` int(11) NOT NULL,
  `Basliq` varchar(150) NOT NULL,
  `mezmun` text NOT NULL,
  `sekil` varchar(250) NOT NULL,
  `qiymet` float(6,2) NOT NULL,
  `endirim_faiz` float NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `telim_mez`
--

INSERT INTO `telim_mez` (`id`, `tel_kat_id`, `Basliq`, `mezmun`, `sekil`, `qiymet`, `endirim_faiz`, `status`) VALUES
(4, 17, 'HELP DESK', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'sekil/telim/7087-2.PNG', 222.00, 22, '0'),
(5, 15, 'VEB PROQRAMLAŞDIRMA (PHP)', '<p>Full Stack təlimi 6 aylıq təlim olmaqla Front-end və Back-end dərslərindən ibarətdir.</p>\r\n<p>Siz bu təlimdə professional veb səhifələrin hazirlanma qaydalarini öyrənəcəksiz.</p>\r\n<p>Təlim Paketi:</p>\r\n<p>- HTML 5</p>\r\n<p>- CSS 3 (Bootstrap 4, Material Design, PSD to HTML/CSS)</p>\r\n<p>JavaScript (AngularJS 2+, JQuery, Ajax, TypeScript)</p>\r\n<p>PHP (OOP, MVC)</p>\r\n<p>MySQL</p>\r\n<p>Laravel 5 +</p>\r\n<p> </p>\r\n<p>Təlimi bitirdikdə tələbə sertifikatla mükafatlandırılır. Və yüksək nəticə göstərmiş tələbələrimiz real layihələrə cəlb edilir.</p>\r\n<p>Bundan əlavə olaraq təlim müddətində təhsilin keyfiyyətinin yüksəldilməsi məqsədi ilə tələbələrə YUP Technology tərəfindən ödənişsiz hosting verilir.</p>\r\n<p>Təlim həftədə 3 dəfə 2 akademik saat olmaqla tədris edilir. Aylıq ödəniş 200 AZN tələbələrə 160 AZN təşkil edir.</p>', 'sekil/telim/2836-aa.PNG', 200.00, 20, '0');

-- --------------------------------------------------------

--
-- Table structure for table `xidmet_kat`
--

CREATE TABLE `xidmet_kat` (
  `id` int(11) NOT NULL,
  `ad` varchar(250) NOT NULL,
  `sira` int(2) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `seo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xidmet_kat`
--

INSERT INTO `xidmet_kat` (`id`, `ad`, `sira`, `status`, `seo`) VALUES
(9, 'Veb Sayıtların Hazırlanması', 1, '0', 'veb-sayitlarin-hazirlanmasi'),
(11, 'Təlimlər', 3, '0', 'telimler'),
(12, 'LOGO Dizayınlarının Hazırlanması', 2, '0', 'logo-dizayinlarinin-hazirlanmasi');

-- --------------------------------------------------------

--
-- Table structure for table `xidmet_mez`
--

CREATE TABLE `xidmet_mez` (
  `id` int(11) NOT NULL,
  `xid_kat_id` int(11) NOT NULL,
  `Basliq` varchar(150) NOT NULL,
  `mezmun` text NOT NULL,
  `sekil` varchar(250) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xidmet_mez`
--

INSERT INTO `xidmet_mez` (`id`, `xid_kat_id`, `Basliq`, `mezmun`, `sekil`, `status`) VALUES
(6, 9, 'VEB SAYTLARIN HAZIRLANMASI', '<p>Biz sizə istənilən veb səhifələrin ən kiçik veb səhifələrdən ən mürəkkəb veb səhifələrədək arzunuza uyğun hər növ veb layihələrin yüksək səviyyədə hazırlanmasını təklif edirik.</p>\r\n<p>Biznesinizi (Müəssənizin) dahada yaxşılaşdırmağınız naminə indiki dövrdə veb səhifə zəruri vəsait halını aldığı üçün biz sizə dəstək olmaqda şad olacayıq. Sizin biznesiniz haqqında informasiyanı daha geniş auditoriyaya çatırmaq biznesinizi dəfələrlə artıracaq.</p>\r\n<p><strong>TƏKLİFLƏRİMİZ</strong>:</p>\r\n<ul>\r\n<li>Sayt-Vizit</li>\r\n<li>Sayt-Portfolio</li>\r\n<li>Korporativ sayt</li>\r\n<li>Bloq</li>\r\n<li>İnternet mağaza</li>\r\n<li>və s veb layihələri təklif edirik.</li>\r\n</ul>', 'sekil/xidmetler/9460-25934webdes.jpg', '0'),
(7, 12, 'LOGO DİZAYNLARININ ZÖVQÜNÜZƏ UYĞUN HAZIRLANMASI', '<p>Qrafik dizaynerlərimiz sizin şirkətin fəaliyyət sahəsinə və sizin tələblərinizə uyğun kreativ logolar hazırlayır. İlkin mərhələdə sifarişinizə uyğun 3 ədəd müxtəlif görünüşlü logolar hazırlanacaq. Hazırlanan logolar 5 formatda sizə təqdim ediləcək. (.PNG, .JPG, .SVG, .EPS və .PSD).<br />Vektor (.SVG və .EPS) formatlar ilə siz logonuzu istənilən vaxt keyfiyyətli formada dəyişikliklər edə biləcəksiniz.</p>', 'sekil/xidmetler/6194-24151logolar.jpg', '0'),
(8, 11, 'YUPTECH TRAİNİNG', '<article>\r\n<div class=\"post_info clearfix\"> </div>\r\n<div class=\"post_content\">\r\n<p><strong>Yuptech Training</strong> sizlərə informasiya texnologiyaları sahəsinin bir neçə şaxəsində yüksək səviyyəli təlimlərini təqdim edir.Təlimlər dünya standartlarına cavab verən, sınaqdan keçirilmiş proqram əsasında keçirilir.Dərslər real şəraitdə, praktiki layihələrə əsaslanaraq, təcrübəli müəllimlər tərəfindən tədris olunur.bizim təlimlərdə iştirak edən tələbələr təlim proqramıyla yanaşı həmçinin real iş mühiti ilə də tanış olmuş olur.</p>\r\n<p> </p>\r\n</div>\r\n</article>', 'sekil/xidmetler/3604-gambar-user-png-5.png', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haqqinda`
--
ALTER TABLE `haqqinda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isciler`
--
ALTER TABLE `isciler`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `isci_odenis`
--
ALTER TABLE `isci_odenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_kat`
--
ALTER TABLE `portfolio_kat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_mez`
--
ALTER TABLE `portfolio_mez`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telebeler`
--
ALTER TABLE `telebeler`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sv_nomresi` (`sv_nomresi`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `telebe_devamiyyet`
--
ALTER TABLE `telebe_devamiyyet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telebe_odenis`
--
ALTER TABLE `telebe_odenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telim_kat`
--
ALTER TABLE `telim_kat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telim_mez`
--
ALTER TABLE `telim_mez`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xidmet_kat`
--
ALTER TABLE `xidmet_kat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xidmet_mez`
--
ALTER TABLE `xidmet_mez`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `haqqinda`
--
ALTER TABLE `haqqinda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `isciler`
--
ALTER TABLE `isciler`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `isci_odenis`
--
ALTER TABLE `isci_odenis`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolio_kat`
--
ALTER TABLE `portfolio_kat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio_mez`
--
ALTER TABLE `portfolio_mez`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `telebeler`
--
ALTER TABLE `telebeler`
  MODIFY `id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `telebe_devamiyyet`
--
ALTER TABLE `telebe_devamiyyet`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `telebe_odenis`
--
ALTER TABLE `telebe_odenis`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `telim_kat`
--
ALTER TABLE `telim_kat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `telim_mez`
--
ALTER TABLE `telim_mez`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `xidmet_kat`
--
ALTER TABLE `xidmet_kat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `xidmet_mez`
--
ALTER TABLE `xidmet_mez`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
