-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 May 2015, 14:57:04
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `kpss`
--
CREATE DATABASE IF NOT EXISTS `kpss` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kpss`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anket`
--

CREATE TABLE IF NOT EXISTS `anket` (
  `sonucno` int(11) NOT NULL AUTO_INCREMENT,
  `sonuc` tinyint(1) NOT NULL,
  PRIMARY KEY (`sonucno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Tablo döküm verisi `anket`
--

INSERT INTO `anket` (`sonucno`, `sonuc`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 0),
(5, 0),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 0),
(27, 1),
(28, 0),
(29, 1),
(30, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `secenekler`
--

CREATE TABLE IF NOT EXISTS `secenekler` (
  `secenekno` int(11) NOT NULL AUTO_INCREMENT,
  `secenekmetni` text,
  `soruno` int(11) NOT NULL,
  `dogru_cevap` tinyint(1) NOT NULL,
  PRIMARY KEY (`secenekno`),
  KEY `fk_secenekler_sorular_idx` (`soruno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;

--
-- Tablo döküm verisi `secenekler`
--

INSERT INTO `secenekler` (`secenekno`, `secenekmetni`, `soruno`, `dogru_cevap`) VALUES
(1, 'Birey, seçme özgürlüğüne sahiptir', 1, 0),
(2, 'Dini, dili ve cinsiyeti ne olursa olsun her insan\nsaygıya değerdir.', 1, 0),
(3, 'Rehberlik faaliyetlerinde gönüllülük esastır', 1, 0),
(4, 'Rehberlik faaliyetleri takım çalışmasını gerektirir.', 1, 0),
(5, 'Rehberlik faaliyetleri bütün okullarda aynı şekilde\r\nyürütülür.', 1, 1),
(6, ' Özel eğitim gerektiren her bireyin akranlarıyla birlikte\r\naynı kurumda eğitim görme hakkı vardır', 2, 0),
(7, 'Kaynaştırma eğitimine devam eden öğrenciler,\r\nözel gereksinimlerine göre birkaç sınıfta toplanırlar.', 2, 1),
(8, 'Bütün bireyler öğrenebilir ve öğretilebilir', 2, 0),
(9, 'Karar verme süreci; aile-okul-eğitsel tanımlama,\r\nizleme ve değerlendirme ekibi dayanışmasına\r\ndayalı olarak gerçekleşir', 2, 0),
(10, 'Hizmetler bireyin yetersizliğine göre değil, bireylerin\r\neğitim gereksinimine göre planlanır.', 2, 0),
(11, 'Ergenliğe erken giren kızların özgüvenleri yüksektir', 3, 1),
(12, 'Erken olgunlaşan erkek ergenler daha çok ilgi gö-\r\nrürler', 3, 0),
(13, ' Ergenlerde “Bana bir şey olmaz.” düşüncesi yaygındır', 3, 0),
(14, 'Erkeklerde boy uzaması, kızlara göre daha ileri\r\nyaşlara kadar devam eder.', 3, 0),
(15, 'Kız ergenlerin bedenlerindeki yağ oranı daha fazladır.', 3, 0),
(52, 'İyileştirici', 17, 0),
(53, 'Ayarlayıcı', 17, 0),
(54, 'Düzeltici', 17, 0),
(55, 'Geliştirici', 17, 0),
(56, 'Önleyici', 17, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorular`
--

CREATE TABLE IF NOT EXISTS `sorular` (
  `soruno` int(11) NOT NULL AUTO_INCREMENT,
  `sorumetni` text,
  `alanno` int(11) NOT NULL,
  `ciktigi_tarih` int(4) DEFAULT NULL,
  `uyeno` int(11) NOT NULL,
  PRIMARY KEY (`soruno`),
  KEY `fk_sorular_soru_alan1_idx` (`alanno`),
  KEY `fk_sorular_uyeler1_idx` (`uyeno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Tablo döküm verisi `sorular`
--

INSERT INTO `sorular` (`soruno`, `sorumetni`, `alanno`, `ciktigi_tarih`, `uyeno`) VALUES
(1, ' Aşağıdakilerden hangisi psikolojik danışma ve\nrehberliğin ilkelerinden değildir?', 1, 2014, 2),
(2, ' Ergenlik dönemi özellikleriyle ilgili olarak aşağıdakilerden hangisi yanlıştır?', 3, 2010, 1),
(3, 'Bir öğrencinin sıra arkadaşıyla konuştuğunu gören öğretmen, aşağıdaki uyarma yollarından hangisini\nöncelikle tercih etmelidir?', 2, 2011, 3),
(17, '<p><span>Bir ilk&ouml;ğretim okulunun rehber &ouml;ğretmeni, bilgisayarın ve internetin doğru kullanımı ve uzun saatler bilgisayar başında zaman ge&ccedil;irmenin zararları konusunda ailelere ve &ouml;ğrencilere seminer vermek yoluyla onları bilin&ccedil;lendireceğini d&uuml;ş&uuml;nmektedir.</span><br /><strong>Rehber &ouml;ğretmenin yapmayı d&uuml;ş&uuml;nd&uuml;ğ&uuml; bu &ccedil;alışma, rehberliğin hangi işlevi ile ilgilidir?</strong></p>', 1, 2010, 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `soru_alan`
--

CREATE TABLE IF NOT EXISTS `soru_alan` (
  `alanno` int(11) NOT NULL AUTO_INCREMENT,
  `alan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`alanno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `soru_alan`
--

INSERT INTO `soru_alan` (`alanno`, `alan`) VALUES
(1, 'Rehberlik'),
(2, 'Sınıf Yönetimi'),
(3, 'Gelişim Psikolojisi'),
(4, 'Ölçme ve Değerlendirme'),
(5, 'Öğretim Yöntem ve Teknikleri');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `uyeno` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `ad` varchar(255) DEFAULT NULL,
  `soyad` varchar(255) DEFAULT NULL,
  `e_mail` varchar(255) NOT NULL,
  `gizlisoru` varchar(255) NOT NULL,
  `gizlicevap` varchar(255) NOT NULL,
  PRIMARY KEY (`uyeno`),
  UNIQUE KEY `e_mail_UNIQUE` (`e_mail`),
  UNIQUE KEY `kullanici_adi_UNIQUE` (`kullanici_adi`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uyeno`, `kullanici_adi`, `sifre`, `ad`, `soyad`, `e_mail`, `gizlisoru`, `gizlicevap`) VALUES
(1, 'tugbagecer', '17ba0791499db908433b80f37c5fbc89b870084b', 'Tuğba', 'Geçer', 'tugbagecer@gmail.com', 'soru', 'cevap'),
(2, 'sinemsonmez', 'sonmezs', 'Sinem', 'Sönmez', 'sinemsonmez@gmail.com', '', ''),
(3, 'buketkaya', 'kayab', 'Buket', 'Kaya', 'buketkaya@hotmail.com', '', ''),
(4, 'emirc', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Emir', 'Caynak', 'caynakemir@gmail.com', '', ''),
(5, 'internet', '83592796bc17705662dc9a750c8b6d0a4fd93396', 'kullanıcı ad', 'kullanıcı soyad', 'tugba_gecer@hotmail.com', 'soru', 'cevap'),
(6, 'tgec', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'tugba', 'gec', 'tgec@gmail.com', 'soru', 'cevap'),
(13, 'vfvfe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dfv', 'vfdv', 'fdvg@dckm', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorum`
--

CREATE TABLE IF NOT EXISTS `yorum` (
  `yorumno` int(11) NOT NULL AUTO_INCREMENT,
  `yorum_metni` text,
  `sorular_soruno` int(11) NOT NULL,
  `uyeler_uyeno` int(10) unsigned NOT NULL,
  PRIMARY KEY (`yorumno`),
  KEY `fk_yorum_sorular1_idx` (`sorular_soruno`),
  KEY `fk_yorum_uyeler1_idx` (`uyeler_uyeno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Tablo döküm verisi `yorum`
--

INSERT INTO `yorum` (`yorumno`, `yorum_metni`, `sorular_soruno`, `uyeler_uyeno`) VALUES
(1, 'Çok zor bir soru, biri açıklayabilir mi?', 2, 3),
(2, 'Kolaymış...', 1, 2),
(3, 'Kolay aslında tam olarak nereyi anlamadıysan açıklayabilirim...', 3, 1),
(19, '<p style="text-align: center;">dfhsfgjtyj<img style="display: block; margin-left: auto; margin-right: auto;" title="Wink" src="js/tiny_mce/plugins/emotions/img/smiley-wink.gif" alt="Wink" border="0" /></p>', 15, 5),
(20, '<p>ben daha &ccedil;ik iyileştirici olduğunu d&uuml;ş&uuml;nd&uuml;m<img title="Frown" src="js/tiny_mce/plugins/emotions/img/smiley-frown.gif" alt="Frown" border="0" /> <span style="text-decoration: underline;"><strong>neden &ouml;nleyici?</strong></span></p>', 17, 5),
(21, '<p>"''ben''"</p>', 1, 5),
(22, '<p>&lt;br&gt;&lt;p&gt; aaaa&lt;/p&gt;</p>', 1, 5),
(23, '<p><strong><img title="Frown" src="js/tiny_mce/plugins/emotions/img/smiley-frown.gif" alt="Frown" border="0" />dgry<br /></strong></p>', 1, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
