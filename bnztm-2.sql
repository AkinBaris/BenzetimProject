-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 May 2016, 21:56:16
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `bnztm`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `COMMENT` text COLLATE utf8_turkish_ci NOT NULL,
  `MID` int(3) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `comment`
--

INSERT INTO `comment` (`ID`, `COMMENT`, `MID`) VALUES
(1, 'Deneme', 55),
(2, 'deneme2', 57),
(3, '58deneme', 58);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favoriread`
--

CREATE TABLE IF NOT EXISTS `favoriread` (
  `ID` int(8) NOT NULL AUTO_INCREMENT,
  `USERID` int(8) NOT NULL,
  `READID` int(8) NOT NULL,
  `USERNAME` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=59 ;

--
-- Tablo döküm verisi `favoriread`
--

INSERT INTO `favoriread` (`ID`, `USERID`, `READID`, `USERNAME`) VALUES
(49, 0, 2, 'Admin'),
(52, 0, 1, 'Admin'),
(55, 0, 1, 'Test'),
(57, 0, 2, 'Test'),
(58, 0, 6, 'Test');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `HText` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `home`
--

INSERT INTO `home` (`ID`, `HText`) VALUES
(1, 'Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...Ana Sayfada Gösterilecek Olan Makale...');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makale`
--

CREATE TABLE IF NOT EXISTS `makale` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MName` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Text` text COLLATE utf8_turkish_ci NOT NULL,
  `FDate` date NOT NULL,
  `CID` int(11) NOT NULL,
  `CDC` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `makale`
--

INSERT INTO `makale` (`ID`, `MName`, `Text`, `FDate`, `CID`, `CDC`) VALUES
(1, 'Deneme', 'Bu bir deneme makale yazısıdır. Denemedir itibar etmeyin. İnanmayın. Demedi demeyin.\r\n\r\nBu da onun ikinci paragrafıdır.Dikkat edin!', '2016-03-03', 1, 'd'),
(2, '2', 'hgjhgjhgkjgkbjhbkbkb', '2016-03-03', 2, 's'),
(3, 'D', '', '0000-00-00', 1, 'Alt Düz Yazı'),
(4, 'Düz Yazı', '<p>Düz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz Yazı</p>\r\n<br/><br/>\r\n<p>Düz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz Yazı,</p>\r\n\r\n\r\n\r\nDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz YazıDüz Yazı', '2016-03-02', 2, 'Alt Eleştiri'),
(5, 'Alt Masal Denemesi', 'asdasffdsfhsdşfsdfşldjslşkf', '0000-00-00', 8, 'Alt Masal'),
(6, 'Yapay Zeka', 'Yapay zeka makale içeriği...', '0000-00-00', 1, 'Bilim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) COLLATE utf8_turkish_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1463225066),
('m130524_201442_init', 1463225070);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `t_category`
--

CREATE TABLE IF NOT EXISTS `t_category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `C_Name` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `C_UpID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `t_category`
--

INSERT INTO `t_category` (`ID`, `C_Name`, `C_UpID`) VALUES
(1, 'Düz Yazı', 0),
(2, 'Eleştiri', 0),
(3, 'Alt Düz Yazı', 1),
(4, 'Alt Eleştiri', 2),
(5, 'Şiir', 0),
(6, 'Haberler', 0),
(7, 'Şarkı Sözleri', 0),
(8, 'Masal', 0),
(9, 'Alt Masal', 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `t_message`
--

CREATE TABLE IF NOT EXISTS `t_message` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `SDate` date NOT NULL,
  `Reading` int(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `t_users`
--

CREATE TABLE IF NOT EXISTS `t_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `Password` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `E-mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Name` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `Surname` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `LastLogin` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'faruk', 'rvLLYBv2w2nxxvTBoM-nSDCOnR_qSNnY', '$2y$13$xluJsmY7gl3Pxq05WxsV.uJOzMHmCwGuHxqroo9EOg2yTCprcWOjK', NULL, 'farukyildiz@gmail.com', 10, 1463225121, 1463225121),
(2, 'samed', '48gRxHPzbyzr7m2-1B1qU3gJPiFziniK', '$2y$13$uoVhQDggkxmbpZ0IERsyAeBBg2oEPK9QIZcuvA7QHea6yx6GZp2m.', NULL, 'samed@gmail.com', 10, 1463472120, 1463472120);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `Username` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `Password` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `LastLogin` date NOT NULL,
  `tip` int(11) NOT NULL,
  `Name` text COLLATE utf8_turkish_ci NOT NULL,
  `Surname` text COLLATE utf8_turkish_ci NOT NULL,
  `Email` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `LastLogin`, `tip`, `Name`, `Surname`, `Email`) VALUES
(1, 'Test', '1234', '0000-00-00', 1, 'Samed', 'Tüle', 'Samed@gmail.com'),
(2, 'Admin', '12345', '0000-00-00', 0, '', '', ''),
(3, 'sad', 'sad', '0000-00-00', 1, 'sad', 'asd', 'asd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
