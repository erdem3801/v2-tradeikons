-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Şub 2022, 15:56:36
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tradeikons`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(200) NOT NULL,
  `category_slug` varchar(200) NOT NULL,
  `category_image` text NOT NULL,
  `category_parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`category_id`, `category_title`, `category_slug`, `category_image`, `category_parent`) VALUES
(1, 'Kadın', 'kadin', '', 0),
(2, 'Giyim', 'giyim', 'giyim.webp', 1),
(3, 'T-shirt & Bluz & Sweat', 't-shirt-bluz-sweat', '', 2),
(4, 'Pantolon & Etek', 'pantolon-etek', '', 2),
(5, 'Mont&Kaban', 'montkaban', '', 2),
(6, 'Abiye&Günlük Elbise', 'abiyeguenluek-elbise', '', 2),
(7, 'İç Giyim', 'ic-giyim', '', 2),
(8, 'Gömlek&Hırka&Kazak', 'goemlekhirkakazak', '', 2),
(9, 'Ayakkabı', 'ayakkabi', 'ayakkabi.webp', 1),
(10, 'Günlük Ayakkabı', 'guenluek-ayakkabi', '', 9),
(11, 'Spor Ayakkabı', 'spor-ayakkabi', '', 9),
(12, 'Topuklu Ayakkabı', 'topuklu-ayakkabi', '', 9),
(13, 'Bot&Çizme', 'botcizme', '', 9),
(14, 'Babet&Terlik&Sandalet', 'babetterliksandalet', '', 9),
(15, 'Ev Ayakkabıları', 'ev-ayakkabilari', '', 9),
(16, 'Çanta', 'canta', 'canta.webp', 1),
(17, 'Sırt Çantası', 'sirt-cantasi', '', 16),
(18, 'Omuz Çantası', 'omuz-cantasi', '', 16),
(19, 'Cüzdan&Kartlık', 'cuezdankartlik', '', 16),
(20, 'El Çantası', 'el-cantasi', '', 16),
(21, 'İç Giyim', 'ic-giyim-1', 'ic_giyim.webp', 1),
(22, 'Pijama Takımı', 'pijama-takimi', '', 21),
(23, 'Çorap', 'corap', '', 21),
(24, 'Gecelik', 'gecelik', '', 21),
(25, 'Sütyen', 'suetyen', '', 21),
(26, 'Fantezi Giyim', 'fantezi-giyim', '', 21),
(27, 'Hamile Giyim', 'hamile-giyim', '', 21),
(28, 'Kişisel Bakım&Kozmetik', 'kisisel-bakimkozmetik', 'kisisel_bakim.webp', 1),
(29, 'Makyaj', 'makyaj', '', 28),
(30, 'Cilt Bakım', 'cilt-bakim', '', 28),
(31, 'Epilasyon Ürünleri', 'epilasyon-ueruenleri', '', 28),
(32, 'Spor&Outdoor', 'sporoutdoor', 'spor.webp', 1),
(33, 'Eşofman', 'esofman', '', 32),
(34, 'Tayt', 'tayt', '', 32),
(35, 'Spor Ekipmanları', 'spor-ekipmanlari', '', 32),
(36, 'Outdoor Ayakkabı', 'outdoor-ayakkabi', '', 32),
(37, 'Erkek', 'erkek', '', 0),
(38, 'Ayakkabı', 'ayakkabi-1', 'erkek_ayakkabi.webp', 37),
(39, 'Spor Ayakkabı', 'spor-ayakkabi-1', '', 38),
(40, 'Günlük Ayakkabı', 'guenluek-ayakkabi-1', '', 38),
(41, 'Krampon', 'krampon', '', 38),
(42, 'Klasik Ayakkabı', 'klasik-ayakkabi', '', 38),
(43, 'Bot&Çizme', 'botcizme-1', '', 38),
(44, 'Sandalet&Terlik', 'sandaletterlik', '', 38),
(45, 'Giyim', 'giyim-1', 'erkek_giyim.webp', 37),
(46, 'T-shirt&Sweat', 't-shirtsweat', '', 45),
(47, 'Pantolon', 'pantolon', '', 45),
(48, 'Ceket&Mont', 'ceketmont', '', 45),
(49, 'Kazak&Gömlek', 'kazakgoemlek', '', 45),
(50, 'Kemer', 'kemer', '', 45),
(51, 'İç Giyim', 'ic-giyim-2', 'erkek_ic_giyim.webp', 37),
(52, 'Çorap', 'corap-1', '', 51),
(53, 'Boxer&Atlet', 'boxeratlet', '', 51),
(54, 'Kişisel Bakım', 'kisisel-bakim', 'erkek_bakim.webp', 37),
(55, 'Cilt Bakım', 'cilt-bakim-1', '', 54),
(56, 'Tıraş Makinesi&Bıçağı', 'tiras-makinesibicagi', '', 54),
(57, 'Saç Bakım', 'sac-bakim', '', 54),
(58, 'Spor&Outdoor', 'sporoutdoor-1', 'erkek_spor.webp', 37),
(59, 'Ayakkabı', 'ayakkabi-2', '', 58),
(60, 'Giyim', 'giyim-2', '', 58),
(61, 'Aksesuar', 'aksesuar', 'erkek_cuzdan.webp', 37),
(62, 'Cüzdan&Kartlık', 'cuezdankartlik-1', '', 61),
(63, 'Yüzük&Kolye&Bileklik', 'yuezuekkolyebileklik', '', 61),
(64, 'Çocuk', 'cocuk', '', 0),
(65, 'Bebek', 'bebek', 'bebek.webp', 64),
(66, 'Bebek Aksesuarları', 'bebek-aksesuarlari', '', 65),
(67, 'Tulum&Salopet', 'tulumsalopet', '', 65),
(68, 'Footmuff', 'footmuff', '', 65),
(69, 'Güvenlik Ürünleri', 'guevenlik-ueruenleri', '', 65),
(70, 'Kız Çocuk', 'kiz-cocuk', 'kiz_cocuk.webp', 64),
(71, 'İç Giyim&Pijama', 'ic-giyimpijama', '', 70),
(72, 'Ayakkabı&Çanta', 'ayakkabicanta', '', 70),
(73, 'Çorap', 'corap-2', '', 70),
(74, 'Erkek Çocuk', 'erkek-cocuk', 'erkek_cocuk.webp', 64),
(75, 'Ayakkabı', 'ayakkabi-3', '', 74),
(76, 'İç Giyim', 'ic-giyim-3', '', 74),
(77, 'Oyuncak', 'oyuncak', 'oyuncak.webp', 64),
(78, 'Ahşap Oyuncaklar', 'ahsap-oyuncaklar', '', 77),
(79, 'Oyuncaklar', 'oyuncaklar', '', 77),
(80, 'Elektronik', 'elektronik', '', 0),
(81, 'Giyilebilir Teknoloji', 'giyilebilir-teknoloji', 'giyilebilir.webp', 80),
(82, 'Akıllı Saat', 'akilli-saat', '', 81),
(83, 'Akıllı Bileklik', 'akilli-bileklik', '', 81),
(84, 'Telefon Kulaklıkları', 'telefon-kulakliklari', '', 81),
(85, 'Saatler', 'saatler', '', 81),
(86, 'Kişisel Bakım Aletleri', 'kisisel-bakim-aletleri', 'bakim_aleti.webp', 80),
(87, 'Tıraş Makinesi', 'tiras-makinesi', '', 86),
(88, 'Epilasyon Aleti', 'epilasyon-aleti', '', 86),
(89, 'Saç Düzleştirici&Maşalar', 'sac-duezlestiricimasalar', '', 86),
(90, 'TV&Görüntü&Ses', 'tvgoeruentueses', 'tv_ses.webp', 80),
(91, 'Hoparlör&Kulaklık ', 'hoparloerkulaklik', '', 90),
(92, 'Kablolar', 'kablolar', '', 90),
(93, 'Radyolar', 'radyolar', '', 90),
(94, 'Uydu Alıcıları', 'uydu-alicilari', '', 90),
(95, 'Ses Kayıt Cihazları', 'ses-kayit-cihazlari', '', 90),
(96, 'Foto&Kamera', 'fotokamera', 'fotograf_makinesi.webp', 80),
(97, 'Kamera&Aksiyon Kamera ', 'kameraaksiyon-kamera', '', 96),
(98, 'Telefon Aksesuarları', 'telefon-aksesuarlari', 'telefon_aksesuarları.webp', 80),
(99, 'Şarj Aletleri', 'sarj-aletleri', '', 98),
(100, 'Kulaklık', 'kulaklik', '', 98),
(101, 'Powerbank', 'powerbank', '', 98),
(102, 'Aksesuar', 'aksesuar-1', '', 98),
(103, 'Bilgisayar', 'bilgisayar', 'bilgisayar.webp', 80),
(104, 'Bilgisayarlar', 'bilgisayarlar', '', 103),
(105, 'Tablet & Dijital Çerçeve', 'tablet-dijital-cerceve', '', 103),
(106, 'Klavye & Mouse & Joystick', 'klavye-mouse-joystick', '', 103),
(107, 'Aksesualar', 'aksesualar', '', 103),
(108, 'Kozmetik', 'kozmetik', '', 0),
(109, 'Makyaj Malzemeleri', 'makyaj-malzemeleri', 'makyaj_malzemeleri.webp', 108),
(110, 'Göz Makyajı', 'goez-makyaji', '', 109),
(111, 'Ten Makyajı', 'ten-makyaji', '', 109),
(112, 'Makyaj Seti', 'makyaj-seti', '', 109),
(113, 'Tırnak ', 'tirnak', '', 109),
(114, 'Saç Bakım', 'sac-bakim-1', 'sac_bakim.webp', 108),
(115, 'Saç Şekillendirici', 'sac-sekillendirici', '', 114),
(116, 'Saç Boyası', 'sac-boyasi', '', 114),
(117, 'Cilt Bakım', 'cilt-bakim-2', 'cilt_bakimm.webp', 108),
(118, 'Yüz Temizleme', 'yuez-temizleme', '', 117),
(119, 'Epilasyon&Tıraş', 'epilasyontiras', 'epilasyon.webp', 108),
(120, 'Epilatör', 'epilatoer', '', 119),
(121, 'Genel Bakım', 'genel-bakim', 'genel_bakim.webp', 108),
(122, 'El ve Ayak Bakımı', 'el-ve-ayak-bakimi', '', 121),
(123, 'Medikal', 'medikal', 'medikal_ürünleri.webp', 108),
(124, 'Medikal Ürünleri', 'medikal-ueruenleri', '', 123),
(125, 'Masaj Aletleri', 'masaj-aletleri', '', 123),
(126, 'Spor&Outdoor', 'sporoutdoor-2', '', 0),
(127, 'Spor Giyim', 'spor-giyim', 'spor_giyim.webp', 126),
(128, 'Spor Tişört', 'spor-tisoert', '', 127),
(129, 'Spor Yelek', 'spor-yelek', '', 127),
(130, 'Spor Mont', 'spor-mont', '', 127),
(131, 'Yağmurluk', 'yagmurluk', '', 127),
(132, 'Atkı & Eldiven & Bere', 'atki-eldiven-bere', '', 127),
(133, 'Gömlek', 'goemlek', '', 127),
(134, 'Spor Ayakkabı', 'spor-ayakkabi-2', 'spor_ayakkabi.webp', 126),
(135, 'Outdoor Bot', 'outdoor-bot', '', 134),
(136, 'Yürüyüş Ayakkabısı', 'yuerueyues-ayakkabisi', '', 134),
(137, 'Terlik', 'terlik', '', 134),
(138, 'Halı Saha Ayakkabısı', 'hali-saha-ayakkabisi', '', 134),
(139, 'Outdoor Ayakkabı', 'outdoor-ayakkabi-1', '', 134),
(140, 'Spor Malzemeleri', 'spor-malzemeleri', 'spor_malzemeleri.webp', 126),
(141, 'Deniz & Plaj', 'deniz-plaj', '', 140),
(142, 'Kaykay&Paten', 'kaykaypaten', '', 140),
(143, 'Su Sporu Malzemeleri', 'su-sporu-malzemeleri', '', 140),
(144, 'Aksiyon Kamera', 'aksiyon-kamera', '', 140),
(145, 'Kayak Malzemeleri', 'kayak-malzemeleri', '', 140),
(146, 'Dağcılık & Tırmanış', 'dagcilik-tirmanis', '', 140),
(147, 'Fitness Kondisyon', 'fitness-kondisyon', 'fitness_kondisyon.webp', 126),
(148, 'Pilates Malzemeleri', 'pilates-malzemeleri', '', 147),
(149, 'Fitness Aletleri', 'fitness-aletleri', '', 147),
(150, 'Barfiks', 'barfiks', '', 147),
(151, 'Yoga Malzemeleri', 'yoga-malzemeleri', '', 147),
(152, 'Kamp&Kampçılık', 'kampkampcilik', 'kamp.webp', 126),
(153, 'Kamp Malzemeleri', 'kamp-malzemeleri', '', 152),
(154, 'Çadır Uyku Tulumu', 'cadir-uyku-tulumu', '', 152),
(155, 'Soğutucular', 'sogutucular', '', 152),
(156, 'Dürbünler', 'duerbuenler', '', 152),
(157, 'El Feneri&Kafa Lambaları', 'el-fenerikafa-lambalari', '', 152),
(158, 'Kamp Aksesuarları', 'kamp-aksesuarlari', '', 152),
(159, 'Avcılık&Balıkçılık', 'avcilikbalikcilik', 'avcilik.webp', 126),
(160, 'Olta Makineleri', 'olta-makineleri', '', 159),
(161, 'Olta Kamışları', 'olta-kamislari', '', 159),
(162, 'Balıkçı Ekipmanları', 'balikci-ekipmanlari', '', 159),
(163, 'Çakılar ve Bıçaklar', 'cakilar-ve-bicaklar', '', 159),
(164, 'Elektronik, GPS, Dürbünler', 'elektronik-gps-duerbuenler', '', 159),
(165, 'Suni Yemler', 'suni-yemler', '', 159),
(166, 'Ev&Yaşam', 'evyasam', '', 0),
(167, 'Ev Dekorasyon', 'ev-dekorasyon', 'dekor.webp', 166),
(168, 'Dekoratif Aksesuar', 'dekoratif-aksesuar', '', 167),
(169, 'Tablo', 'tablo', '', 167),
(170, 'Teraziler', 'teraziler', '', 167),
(171, 'Saat', 'saat', '', 167),
(172, 'Yastık&kırlent', 'yastikkirlent', '', 167),
(173, 'Gece&Masa Lambası', 'gecemasa-lambasi', '', 167),
(174, 'Sofra&Mutfak', 'soframutfak', 'sofra_mutfak.webp', 166),
(175, 'Yemek Takımı', 'yemek-takimi', '', 174),
(176, 'Çatal Kaşık Bıçak Seti', 'catal-kasik-bicak-seti', '', 174),
(177, 'Baharat Takımı', 'baharat-takimi', '', 174),
(178, 'Sürahi&Bardak', 'suerahibardak', '', 174),
(179, 'Pişirme Ürünleri', 'pisirme-ueruenleri', '', 174),
(180, 'Çaydanlık & Termos ', 'caydanlik-termos', '', 174),
(181, 'Ev Gereçleri', 'ev-gerecleri', 'ev_gerecleri.webp', 166),
(182, 'Ev & Mutfak Gereçleri', 'ev-mutfak-gerecleri', '', 181),
(183, 'Sepet & Saklama Kutusu', 'sepet-saklama-kutusu', '', 181),
(184, 'Banyo Malzemeleri', 'banyo-malzemeleri', '', 181),
(185, 'Sofra Hazırlık', 'sofra-hazirlik', '', 181),
(186, 'Servis Ürünleri', 'servis-ueruenleri', '', 181),
(187, 'Pasta & Kalıp', 'pasta-kalip', '', 181),
(188, 'Bahçe & Yapı Market', 'bahce-yapi-market', 'yapi_market.webp', 166),
(189, 'Elektrikli El Aleti', 'elektrikli-el-aleti', '', 188),
(190, 'Hırdavat Ürünleri', 'hirdavat-ueruenleri', '', 188),
(191, 'Ampul', 'ampul', '', 188),
(192, 'Mangal ve Barbeküler', 'mangal-ve-barbekueler', '', 188),
(193, 'Hamaklar', 'hamaklar', '', 188),
(194, 'Bahçe Mobilya & Aydılatma', 'bahce-mobilya-aydilatma', '', 188),
(195, 'Otomobil & Motosiklet', 'otomobil-motosiklet', 'otomobil.webp', 166),
(196, 'Oto Aksesuar', 'oto-aksesuar', '', 195),
(197, 'Oto Paspası', 'oto-paspasi', '', 195),
(198, 'Oto Akü', 'oto-akue', '', 195),
(199, 'Kırtasiye Ürünleri', 'kirtasiye-ueruenleri', 'kirtasiye.webp', 166),
(200, 'Piller', 'piller', '', 199),
(201, 'Kırtasiye ve Ofis', 'kirtasiye-ve-ofis', '', 199),
(202, 'Tasarım kırtasiye ürünleri', 'tasarim-kirtasiye-ueruenleri', '', 199),
(203, 'Petshop', 'petshop', '', 0),
(204, 'Köpek', 'koepek', 'kopek.webp', 203),
(205, 'Köpek Mama Kapları', 'koepek-mama-kaplari', '', 204),
(206, 'Köpek Tasmaları', 'koepek-tasmalari', '', 204),
(207, 'Köpek Bakım Ürünleri', 'koepek-bakim-ueruenleri', '', 204),
(208, 'Kedi', 'kedi', 'kedi.webp', 203),
(209, 'Kedi Mama Kapları', 'kedi-mama-kaplari', '', 208),
(210, 'Tırmalama&Oyun Evleri', 'tirmalamaoyun-evleri', '', 208),
(211, 'Kedi Bakım Ürünleri', 'kedi-bakim-ueruenleri', '', 208),
(212, 'Kuş', 'kus', 'kedi.webp', 203),
(213, 'Kuş Bakım Ürünleri', 'kus-bakim-ueruenleri', '', 212),
(214, 'Balık', 'balik', 'kedi.webp', 203),
(215, 'Balık Bakım Ürünleri', 'balik-bakim-ueruenleri', '', 214),
(216, 'Akvaryum Ürünleri', 'akvaryum-ueruenleri', '', 214),
(217, 'Kemirgen&Sürüngen', 'kemirgensueruengen', 'kedi.webp', 203),
(218, 'Kemirgen Bakım Ürünleri', 'kemirgen-bakim-ueruenleri', '', 217),
(219, 'Sürüngen Bakım Ürünleri', 'sueruengen-bakim-ueruenleri', '', 217),
(220, 'Ayakkabı&Çanta', 'ayakkabicanta-1', '', 0),
(221, 'Kadın Ayakkabı', 'kadin-ayakkabi', 'kadin_ayakkabi.webp', 220),
(222, 'Günlük Ayakkabı', 'guenluek-ayakkabi-2', '', 221),
(223, 'Spor Ayakkabı', 'spor-ayakkabi-3', '', 221),
(224, 'Topuklu Ayakkabı', 'topuklu-ayakkabi-1', '', 221),
(225, 'Bot&Çizme', 'botcizme-2', '', 221),
(226, 'Babet&Sandalet', 'babetsandalet', '', 221),
(227, 'Terlik&Panduf', 'terlikpanduf', '', 221),
(228, 'Kadın Çanta', 'kadin-canta', 'kadin_canta.webp', 220),
(229, 'Sırt Çantası', 'sirt-cantasi-1', '', 228),
(230, 'Omuz Çantası', 'omuz-cantasi-1', '', 228),
(231, 'Bel Çantası', 'bel-cantasi', '', 228),
(232, 'Spor Çantası', 'spor-cantasi', '', 228),
(233, 'Cüzdan&Kartlık', 'cuezdankartlik-2', '', 228),
(234, 'El Çantası', 'el-cantasi-1', '', 228),
(235, 'Erkek Ayakkabı', 'erkek-ayakkabi', 'erkek_urun.webp', 220),
(236, 'Günlük Ayakkabı', 'guenluek-ayakkabi-3', '', 235),
(237, 'Spor Ayakkabı', 'spor-ayakkabi-4', '', 235),
(238, 'Klasik Ayakkabı', 'klasik-ayakkabi-1', '', 235),
(239, 'Krampon&Koşu Ayakkabısı', 'kramponkosu-ayakkabisi', '', 235),
(240, 'Bot&Çizme', 'botcizme-3', '', 235),
(241, 'Sandalet&Terlik&Panduf', 'sandaletterlikpanduf', '', 235),
(242, 'Çocuk Ayakkabı', 'cocuk-ayakkabi', 'cocuk_ayakkabi.webp', 220),
(243, 'Spor Ayakkabı', 'spor-ayakkabi-5', '', 242),
(244, 'Halısaha&Krampon', 'halisahakrampon', '', 242),
(245, 'Bot&Çizme', 'botcizme-4', '', 242),
(246, 'Babet&Sandalet', 'babetsandalet-1', '', 242),
(247, 'Terlik', 'terlik-1', '', 242),
(248, 'Ev Ayakkabıları', 'ev-ayakkabilari-1', '', 242),
(249, 'Çocuk Çanta', 'cocuk-canta', 'cocuk_canta.webp', 220),
(250, 'Okul Çantası', 'okul-cantasi', '', 249),
(251, 'Sırt Çantası', 'sirt-cantasi-2', '', 249),
(252, 'Hobi & Hediyelik', 'hobi-hediyelik', '', 0),
(253, 'Takı', 'taki', 'takilar.webp', 252),
(254, 'Kolye ', 'kolye', '', 253),
(255, 'YÜzÜk ', 'yuezuek', '', 253),
(256, 'Parti Ürünleri', 'parti-ueruenleri', 'parti_malzemeleri.webp', 252),
(257, 'Balon', 'balon', '', 256),
(258, 'Kullan at ürünler', 'kullan-at-ueruenler', '', 256),
(259, 'Parti Malzemeleri', 'parti-malzemeleri', '', 256),
(260, 'Parti Aksesuarları', 'parti-aksesuarlari', '', 256),
(261, 'Doğum Günü', 'dogum-guenue', '', 256),
(262, 'Yılbaşı', 'yilbasi', '', 256),
(263, 'Hobi Malzemeleri', 'hobi-malzemeleri', 'hobi_malzemeleri.webp', 252),
(264, 'Saksı', 'saksi', '', 263),
(265, 'Heykel&biblo', 'heykelbiblo', '', 263),
(266, 'Tesbih', 'tesbih', '', 263),
(267, 'Anahtarlık', 'anahtarlik', '', 263),
(268, 'Hediyelik Ürünler', 'hediyelik-ueruenler', 'hediyelik_urunler.webp', 252),
(269, 'Kar Küresi&Müzik Kutusu', 'kar-kueresimuezik-kutusu', '', 268),
(270, 'Hediye Setleri', 'hediye-setleri', '', 268),
(271, 'İlginç hediyeler', 'ilginc-hediyeler', '', 268),
(272, 'Oyun grupları', 'oyun-gruplari', 'oyun_gruplari.webp', 252),
(273, 'Diğer Oyuncaklar', 'diger-oyuncaklar', '', 272),
(274, 'Tütün&Tütün aksesuarları', 'tuetuentuetuen-aksesuarlari', 'tutun_aksesuarlari.webp', 252),
(275, 'Nargile', 'nargile', '', 274),
(276, 'Nargile seti', 'nargile-seti', '', 274),
(277, 'Nargile malzemeleri', 'nargile-malzemeleri', '', 274);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category_to_product`
--

CREATE TABLE `category_to_product` (
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

CREATE TABLE `product` (
  `urun_id` int(11) NOT NULL,
  `urun_adi` text DEFAULT NULL,
  `urun_kategori` int(11) DEFAULT NULL,
  `urun_xml_kategori` varchar(100) DEFAULT NULL,
  `urun_aciklama` text DEFAULT NULL,
  `urun_varyant_durumu` int(11) DEFAULT NULL,
  `urun_varyant_kod` varchar(60) DEFAULT NULL,
  `urun_varyant_statu` int(11) DEFAULT NULL,
  `urun_durumu` int(11) DEFAULT NULL,
  `xml_kod` int(11) DEFAULT NULL,
  `xml_barkod` int(11) DEFAULT NULL,
  `gitin` varchar(100) DEFAULT NULL,
  `urun_stok_kodu` varchar(100) DEFAULT NULL,
  `urun_renk` varchar(100) DEFAULT NULL,
  `pazaryeri_kod` varchar(100) DEFAULT NULL,
  `urun_stok` int(11) DEFAULT NULL,
  `urun_desi` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_price`
--

CREATE TABLE `product_price` (
  `price_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `varyant_id` int(11) NOT NULL,
  `price_sell` float NOT NULL,
  `price_buy` float NOT NULL,
  `price_tax` float NOT NULL,
  `price_discount_type` varchar(20) NOT NULL,
  `price_discount` int(11) NOT NULL,
  `price_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_varyant`
--

CREATE TABLE `product_varyant` (
  `varyant_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `varyant_desc` varchar(50) NOT NULL,
  `varyant_GTIN` varchar(50) NOT NULL,
  `varyant_stock` int(11) NOT NULL,
  `varyant_status` tinyint(1) NOT NULL,
  `varyant_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_url` text NOT NULL,
  `kategori_url` text NOT NULL,
  `urun_kategori_url` text NOT NULL,
  `urun_url` text NOT NULL,
  `urun_gorsel_url` text NOT NULL,
  `site_baslik` text NOT NULL,
  `site_title` text NOT NULL,
  `site_keywords` text NOT NULL,
  `site_description` text NOT NULL,
  `facebook` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `ust_aciklama` text NOT NULL,
  `copyright` text NOT NULL,
  `iletisim_telefon` varchar(20) NOT NULL,
  `iletisim_mail` varchar(40) NOT NULL,
  `iletisim_adres` text NOT NULL,
  `iletisim_harita` text NOT NULL,
  `whatsapp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `site_url`, `kategori_url`, `urun_kategori_url`, `urun_url`, `urun_gorsel_url`, `site_baslik`, `site_title`, `site_keywords`, `site_description`, `facebook`, `instagram`, `twitter`, `linkedin`, `ust_aciklama`, `copyright`, `iletisim_telefon`, `iletisim_mail`, `iletisim_adres`, `iletisim_harita`, `whatsapp`) VALUES
(1, 'https://tradeikons.com/', 'https://www.pazarfin.com/pazarfin/urunler/veri/kategori_veri_bilsevpazarlama_515.json', 'https://www.pazarfin.com/pazarfin/urunler/veri/kategori.json', 'https://www.pazarfin.com/pazarfin/urunler/veri/urun_veri_bilsevpazarlama_515.json', 'https://www.pazarfin.com/pazarfin/urunler/veri/resimler/', 'Tradeikons', 'Tradeikons', 'Oto Aksesuar Ürünleri, Kadın Giyim Ürünleri, Outdoor Spor Malzemeleri, Oyuncaklar ve Hediyelik Ürünler Aradığınız Her Şey Burada', 'Oto Aksesuar Ürünleri, Kadın Giyim Ürünleri, Outdoor Spor Malzemeleri, Oyuncaklar ve Hediyelik Ürünler Aradığınız Her Şey Burada', 'https://www.facebook.com/Tradeikons-101078162471578/?ref=pages_you_manage', 'https://www.instagram.com/tradeikon/', NULL, 'https://www.linkedin.com/in/tradeikons-tradeikons-43185a22a/', '200 ₺ ve üzeri alışverişlere kargo bedava', 'Copyright © 2021-2022 All Rights Reserved', '+90 552 352 01 05', 'info@tradeikons.com', 'Hacı Saki Mahallesi Alpay Sokak Lifos Tower İş Merkezi B Blok No:17/26', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.730968171747!2d35.4773503156711!3d38.723985264751704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b13ef12140c41%3A0x42d1473397521141!2sTradeikons!5e0!3m2!1str!2str!4v1643186179128!5m2!1str!2str', '905462868612');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Tablo için indeksler `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`urun_id`),
  ADD UNIQUE KEY `urun_id` (`urun_id`,`urun_adi`) USING HASH;

--
-- Tablo için indeksler `product_price`
--
ALTER TABLE `product_price`
  ADD PRIMARY KEY (`price_id`);

--
-- Tablo için indeksler `product_varyant`
--
ALTER TABLE `product_varyant`
  ADD PRIMARY KEY (`varyant_id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- Tablo için AUTO_INCREMENT değeri `product`
--
ALTER TABLE `product`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `product_price`
--
ALTER TABLE `product_price`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `product_varyant`
--
ALTER TABLE `product_varyant`
  MODIFY `varyant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
