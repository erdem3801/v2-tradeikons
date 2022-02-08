-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Şub 2022, 09:43:30
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
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
