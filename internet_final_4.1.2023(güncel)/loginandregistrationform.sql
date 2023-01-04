-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Oca 2023, 11:55:16
-- Sunucu sürümü: 8.0.28
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `loginandregistrationform`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `id` int NOT NULL,
  `kategori_id` int NOT NULL,
  `baslik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icerik` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`id`, `kategori_id`, `baslik`, `icerik`) VALUES
(1, 4, 'aaaaasd', 'fbvds'),
(2, 1, 'kış bakımı', 'qwer sdf sdfghjkllmnbvc qwertyuıopğ asdfghjklş zxcvbnmööyhnbgrf fghjhg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int NOT NULL,
  `isim` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `isim`) VALUES
(1, 'Periyodik Bakım'),
(2, 'Standart Bakım'),
(3, 'Motor Bakım'),
(4, 'Lastik Bakımı'),
(5, 'Klima Bakımı'),
(6, 'Fren Bakımı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `register_table`
--

CREATE TABLE `register_table` (
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `register_table`
--

INSERT INTO `register_table` (`name`, `email_id`, `password`) VALUES
('ms', 'ms10@gmail.com', '10ms'),
('rt', 'rumeysa.tobuz@ogr.dpu.edu.tr', '1234');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `register_table`
--
ALTER TABLE `register_table`
  ADD PRIMARY KEY (`email_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
