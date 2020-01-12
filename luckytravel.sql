-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Oca 2020, 08:35:58
-- Sunucu sürümü: 10.4.8-MariaDB
-- PHP Sürümü: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `luckytravel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`id`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, '<p><span style=\"font-size:18px\">D&uuml;nyanın b&uuml;t&uuml;n istiqamətlərinə.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Baku Holiday Travel b&uuml;t&uuml;n aviaşirkətlərlə əməkdaşlıq edir və İATA sertifikatlaşdırılaraq global bilet sisteminə giriş imkanına malikdir və bununla m&uuml;ştərilərə hər bir istiqamətdə ən sərfəli qiymətlə və zaman baxımından ən rahat aviabiletləri təqdim edir.</span></p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>&Ouml;z sahəsində m&uuml;təxəssis tur menecerlərimiz d&uuml;nyanın b&uuml;t&uuml;n istiqamətlərində turlara ən m&uuml;nasib qiymətləri alaraq m&uuml;ştərilərinə &nbsp;taqdim edir</strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\">Baku Holiday Travel Azərbaycan vətəndaşlarına və xarici vətəndaşlara iş və turizm vizalarının alınmasında k&ouml;məklik g&ouml;stərir. Habelə bizim təcr&uuml;bəli komanda &uuml;zvləri Shengen, USA və digər &ouml;lkələrə viza almaq &uuml;&ccedil;&uuml;n b&uuml;t&uuml;n zəruri sənədləri hazırlamaqda k&ouml;mək edəcək</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Baku Holiday Travel olaraq m&uuml;ştərilərimizə g&ouml;stərdiyimiz peşəkar xidmətlə m&uuml;ştərilərin və əməkdaşlıq etdiyimiz şirkətlərin g&uuml;vənini əldə etmişik.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">M&uuml;ştərilərimizin istəklərinə uyğun peşəkarcasına və qiymət baxımından sərfəli səyahət paketlərini hazırlayaraq &ouml;lkənin ən b&ouml;y&uuml;k və ən etibarlı Səyahət Təşkilatı olmuşuq.</span></p>\r\n', '<p>asd</p>\r\n', '<p>asd</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `additional_slide`
--

CREATE TABLE `additional_slide` (
  `id` int(11) NOT NULL,
  `title1_az` varchar(255) NOT NULL,
  `title1_en` varchar(255) NOT NULL,
  `title1_ru` varchar(255) NOT NULL,
  `title2_az` varchar(255) NOT NULL,
  `title2_en` varchar(255) NOT NULL,
  `title2_ru` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `additional_slide`
--

INSERT INTO `additional_slide` (`id`, `title1_az`, `title1_en`, `title1_ru`, `title2_az`, `title2_en`, `title2_ru`, `link`, `img`) VALUES
(1, 'asd', 'asd', 'asd', 'asd', 'asd', 'asda', 'sd', ''),
(2, 'asd', 'asd', 'asd', 'asd', 'asd', 'asda', 'sd', 'default.png'),
(3, 'asd', 'asd', 'asd', 'asd', 'asd', 'asda', 'sd', 'default.png'),
(4, 'asd', 'asd', 'asd', 'asd', 'asd', 'asda', 'sd', 'ford_mustang_car_convertible_139581_1920x1080.jpg'),
(5, 'asd', 'asd', 'asd', 'asd', 'asd', 'asda', 'sd', 'default.png'),
(6, 'asd', 'asd', 'asd', 'asd', 'asd', 'asda', 'sd', ''),
(7, 'asd', 'asd', 'asd', 'asd', 'asd', 'asda', 'sd', 'default.png'),
(8, 'asd', 'asd', 'asd', 'asd', 'asd', 'asda', 'sd', 'default.png'),
(9, 'asd', 'asd', 'asd', 'asd', 'asd', 'asda', 'sd', '271444_world-of-travel-wallpapers-hd-download-of-famous-buildings_2560x1600_h.jpg'),
(10, 'asd', 'asd', 'asd', 'asd', 'asd', 'asda', 'sd', '190501_wnt_index_cruise_hpMain_16x9_992.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `additional_slide2`
--

CREATE TABLE `additional_slide2` (
  `id` int(11) NOT NULL,
  `title1_az` varchar(255) NOT NULL,
  `title1_en` varchar(255) NOT NULL,
  `title1_ru` varchar(255) NOT NULL,
  `title2_az` varchar(255) NOT NULL,
  `title2_en` varchar(255) NOT NULL,
  `title2_ru` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `additional_slide2`
--

INSERT INTO `additional_slide2` (`id`, `title1_az`, `title1_en`, `title1_ru`, `title2_az`, `title2_en`, `title2_ru`, `link`, `img`) VALUES
(1, 'asda', 'das', 'asdas', 'asdasd', 'sdas', 'asda', 'https://www.google.com/maps/place/Astara,+Az%C9%99rbaycan/@38.4968365,48.6439823,12z/data=!3m1!4b1!4m5!3m4!1s0x4022683fedf17ac5:0x5411435871e6da47!8m2!3d38.4937845!4d48.6944365?hl=az', 'Travel-the-world-wallpaper-1920x1080.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_category_id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `blog_category_id`, `name_az`, `name_en`, `name_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`) VALUES
(33, 4, 'PRAQADA TOP 7 GÖRMƏLİ YERLƏR', 'PRAQADA TOP 7 GÖRMƏLİ YERLƏR', 'PRAQADA TOP 7 GÖRMƏLİ YERLƏR', '<p>&Ccedil;exiyanın paytaxtı &ouml;z adına səfalı iqliminə, dağ havasına, təbii sərvətlərinə g&ouml;rə sahib olub. Vlatva &ccedil;ayı &uuml;zərində yerləşən şəhərə hər il milyonlarla insan axın edir. Heyranedici şəhərə səyahət etmək istəyənlər &uuml;&ccedil;&uuml;n Praqanın 7 gəzməli-g&ouml;rməli yerlərini təqdim edirik.</p>\r\n\r\n<p>-----<br />\r\n1. &Ccedil;ARLZ K&Ouml;RP&Uuml;S&Uuml;<br />\r\n<br />\r\n&Ccedil;arlz k&ouml;rp&uuml;s&uuml;, bəlkə də, Praqa şəhərinin ən əlamətdar yeridir. Bu k&ouml;rp&uuml;n&uuml;n təxminən 700 yaşı var və Praqa qalası ilə K&ouml;hnə şəhəri birləşdirən bir ke&ccedil;iddir.<br />\r\n-----<br />\r\n2. K&Ouml;HNƏ ŞƏHƏR MEYDANI (OLD TOWN MEYDANI)<br />\r\n<img src=\"https://www.bht.az/uploads/jpg/xp1drb8a1591higoqbbnj1vrb138p7.jpg.pagespeed.ic.KdDDlKRBMQ.webp\" style=\"width:300px\" /><br />\r\nK&ouml;hnə Şəhər Meydanı Praqanın mədəniyyət mərkəzidir və turistlərin gəzintisinə səbəb olur. Old Town Meydanında g&ouml;zəl barok memarlığından və k&uuml;&ccedil;ə musiqi&ccedil;iləri və ifa&ccedil;ıları ilə bir bayram atmosferi uzun m&uuml;ddət sizin yadınızda qalacaq.<br />\r\n-----<br />\r\n3. PRAQA QALASI<br />\r\n<img src=\"https://www.bht.az/uploads/jpg/xp1drb8a159641qnlibnc3of1k6.jpg.pagespeed.ic.y0wa4TYg3h.webp\" style=\"width:300px\" /><br />\r\nPraqa Qalası ən populyar turistik məkandır və &ccedil;ayın &uuml;st&uuml;ndən bir təpənin &uuml;st&uuml;ndə yerləşir. Bu g&uuml;n &Ccedil;exiya prezidentinin rəsmi iqamətgahıdır.<br />\r\nBu zərif və f&uuml;sunkar quruluşa baş &ccedil;əkmək və heyran olmaq &uuml;&ccedil;&uuml;n m&uuml;tləq bu g&ouml;zəl Qalaya gəlməlisiz.<br />\r\n-----<br />\r\n4. ASTRONOMIK SAAT<br />\r\n<img src=\"https://www.bht.az/uploads/jpg/xp1drb8a1581fkkqkf1hn74e3ieo5.jpg.pagespeed.ic.47GNaGG2dP.webp\" style=\"width:300px\" /><br />\r\nAstronomik Saat tam olaraq: b&ouml;y&uuml;k, mexaniki bir saat adlanır. Hər g&uuml;n, Astronomik Saatı hərəkətdə izləmək &uuml;&ccedil;&uuml;n bu saat ətrafında &ccedil;oxlu sayda turist toplaşır.<br />\r\n1410-cu ildə yaradılan Astronomik Saat d&uuml;nyanın ən qədim astronomik saatlarından biridir<br />\r\n-----<br />\r\n5. M&Uuml;QƏDDƏS VITUS KATEDRALI<br />\r\nM&uuml;qəddəs Vitus Katedrali Praqa Qalası meydanında yerləşir. Y&uuml;z illərlə tikilməyə davam etməyinə baxmayaraq, bu Katedral yalnız 1929-cu ildə tamamlandı.<br />\r\nBu Katedraldə y&uuml;z illərə aid mozaika, məzar və vitraj işlərini tapacaqsınız. Bu şah əsərlər bu Katedrali Praqada dəyərli bir ziyarət ocağına &ccedil;evirir.<br />\r\n-----<br />\r\n6. VITKOVDAKI MILLI ABIDƏ<br />\r\nVitkovdakı Milli Abidə, bir g&ouml;zl&uuml; d&ouml;y&uuml;ş&ccedil;&uuml; Jan Žižka ilə birlikdə Praqa şəhərini q&uuml;rurla seyr edən k&uuml;tləvi tunc heykəli olan bir abidədir. Vitkov təpəsinin &uuml;st&uuml;ndəki xatirə binası &ccedil;exoslovakiyalı legionerlərin şərəfinə qoyulmuşdur.<br />\r\n&Ccedil;exiyanın mədəni qəhrəmanları haqqında daha geniş bir fikir əldə etmək &uuml;&ccedil;&uuml;n bu abidəyə gəlin.<br />\r\n-----<br />\r\n7. JOHN LENNON DIVARINA BAŞ &Ccedil;ƏKIN<br />\r\n<img src=\"https://www.bht.az/uploads/jpg/xp1drb8a1591io51sg64hk1htvng18.jpg.pagespeed.ic.Qp5WHo3UXF.webp\" style=\"width:300px\" /><br />\r\nJohn Lennon Divarı Beatles&#39;in pərəstişkarları &uuml;&ccedil;&uuml;n m&uuml;kəmməl bir ziyarət məkanıdır. Bu məkana baş &ccedil;əkmədən Praqanı tərk etməyin.<br />\r\nƏsl Beatles tərəfdarısınızsa, gəlib bu divarın bir ne&ccedil;ə şəklini &ccedil;əkməlisiniz və sonra i&ccedil;ki &uuml;&ccedil;&uuml;n yaxınlıqdakı Beatles Cafe-yə ke&ccedil;məlisiniz.</p>\r\n', '<p>&Ccedil;exiyanın paytaxtı &ouml;z adına səfalı iqliminə, dağ havasına, təbii sərvətlərinə g&ouml;rə sahib olub. Vlatva &ccedil;ayı &uuml;zərində yerləşən şəhərə hər il milyonlarla insan axın edir. Heyranedici şəhərə səyahət etmək istəyənlər &uuml;&ccedil;&uuml;n Praqanın 7 gəzməli-g&ouml;rməli yerlərini təqdim edirik.</p>\r\n\r\n<p>-----<br />\r\n1. &Ccedil;ARLZ K&Ouml;RP&Uuml;S&Uuml;<br />\r\n<img src=\"https://www.bht.az/uploads/jpg/xp1drb8a157c9ng3s11pvflc4e84.jpg.pagespeed.ic.ikiRP_2bY7.webp\" style=\"width:100%\" /><br />\r\n&Ccedil;arlz k&ouml;rp&uuml;s&uuml;, bəlkə də, Praqa şəhərinin ən əlamətdar yeridir. Bu k&ouml;rp&uuml;n&uuml;n təxminən 700 yaşı var və Praqa qalası ilə K&ouml;hnə şəhəri birləşdirən bir ke&ccedil;iddir.<br />\r\n-----<br />\r\n2. K&Ouml;HNƏ ŞƏHƏR MEYDANI (OLD TOWN MEYDANI)<br />\r\n<img src=\"https://www.bht.az/uploads/jpg/xp1drb8a1591higoqbbnj1vrb138p7.jpg.pagespeed.ic.KdDDlKRBMQ.webp\" style=\"width:100%\" /><br />\r\nK&ouml;hnə Şəhər Meydanı Praqanın mədəniyyət mərkəzidir və turistlərin gəzintisinə səbəb olur. Old Town Meydanında g&ouml;zəl barok memarlığından və k&uuml;&ccedil;ə musiqi&ccedil;iləri və ifa&ccedil;ıları ilə bir bayram atmosferi uzun m&uuml;ddət sizin yadınızda qalacaq.<br />\r\n-----<br />\r\n3. PRAQA QALASI<br />\r\n<img src=\"https://www.bht.az/uploads/jpg/xp1drb8a159641qnlibnc3of1k6.jpg.pagespeed.ic.y0wa4TYg3h.webp\" style=\"width:100%\" /><br />\r\nPraqa Qalası ən populyar turistik məkandır və &ccedil;ayın &uuml;st&uuml;ndən bir təpənin &uuml;st&uuml;ndə yerləşir. Bu g&uuml;n &Ccedil;exiya prezidentinin rəsmi iqamətgahıdır.<br />\r\nBu zərif və f&uuml;sunkar quruluşa baş &ccedil;əkmək və heyran olmaq &uuml;&ccedil;&uuml;n m&uuml;tləq bu g&ouml;zəl Qalaya gəlməlisiz.<br />\r\n-----<br />\r\n4. ASTRONOMIK SAAT<br />\r\n<img src=\"https://www.bht.az/uploads/jpg/xp1drb8a1581fkkqkf1hn74e3ieo5.jpg.pagespeed.ic.47GNaGG2dP.webp\" style=\"width:100%\" /><br />\r\nAstronomik Saat tam olaraq: b&ouml;y&uuml;k, mexaniki bir saat adlanır. Hər g&uuml;n, Astronomik Saatı hərəkətdə izləmək &uuml;&ccedil;&uuml;n bu saat ətrafında &ccedil;oxlu sayda turist toplaşır.<br />\r\n1410-cu ildə yaradılan Astronomik Saat d&uuml;nyanın ən qədim astronomik saatlarından biridir<br />\r\n-----<br />\r\n5. M&Uuml;QƏDDƏS VITUS KATEDRALI<br />\r\nM&uuml;qəddəs Vitus Katedrali Praqa Qalası meydanında yerləşir. Y&uuml;z illərlə tikilməyə davam etməyinə baxmayaraq, bu Katedral yalnız 1929-cu ildə tamamlandı.<br />\r\nBu Katedraldə y&uuml;z illərə aid mozaika, məzar və vitraj işlərini tapacaqsınız. Bu şah əsərlər bu Katedrali Praqada dəyərli bir ziyarət ocağına &ccedil;evirir.<br />\r\n-----<br />\r\n6. VITKOVDAKI MILLI ABIDƏ<br />\r\nVitkovdakı Milli Abidə, bir g&ouml;zl&uuml; d&ouml;y&uuml;ş&ccedil;&uuml; Jan Žižka ilə birlikdə Praqa şəhərini q&uuml;rurla seyr edən k&uuml;tləvi tunc heykəli olan bir abidədir. Vitkov təpəsinin &uuml;st&uuml;ndəki xatirə binası &ccedil;exoslovakiyalı legionerlərin şərəfinə qoyulmuşdur.<br />\r\n&Ccedil;exiyanın mədəni qəhrəmanları haqqında daha geniş bir fikir əldə etmək &uuml;&ccedil;&uuml;n bu abidəyə gəlin.<br />\r\n-----<br />\r\n7. JOHN LENNON DIVARINA BAŞ &Ccedil;ƏKIN<br />\r\n<img src=\"https://www.bht.az/uploads/jpg/xp1drb8a1591io51sg64hk1htvng18.jpg.pagespeed.ic.Qp5WHo3UXF.webp\" style=\"width:100%\" /><br />\r\nJohn Lennon Divarı Beatles&#39;in pərəstişkarları &uuml;&ccedil;&uuml;n m&uuml;kəmməl bir ziyarət məkanıdır. Bu məkana baş &ccedil;əkmədən Praqanı tərk etməyin.<br />\r\nƏsl Beatles tərəfdarısınızsa, gəlib bu divarın bir ne&ccedil;ə şəklini &ccedil;əkməlisiniz və sonra i&ccedil;ki &uuml;&ccedil;&uuml;n yaxınlıqdakı Beatles Cafe-yə ke&ccedil;məlisiniz.</p>\r\n', '<p>&Ccedil;exiyanın paytaxtı &ouml;z adına səfalı iqliminə, dağ havasına, təbii sərvətlərinə g&ouml;rə sahib olub. Vlatva &ccedil;ayı &uuml;zərində yerləşən şəhərə hər il milyonlarla insan axın edir. Heyranedici şəhərə səyahət etmək istəyənlər &uuml;&ccedil;&uuml;n Praqanın 7 gəzməli-g&ouml;rməli yerlərini təqdim edirik.</p>\r\n\r\n<p>-----<br />\r\n1. &Ccedil;ARLZ K&Ouml;RP&Uuml;S&Uuml;<br />\r\n<img src=\"https://www.bht.az/uploads/jpg/xp1drb8a157c9ng3s11pvflc4e84.jpg.pagespeed.ic.ikiRP_2bY7.webp\" style=\"width:100%\" /><br />\r\n&Ccedil;arlz k&ouml;rp&uuml;s&uuml;, bəlkə də, Praqa şəhərinin ən əlamətdar yeridir. Bu k&ouml;rp&uuml;n&uuml;n təxminən 700 yaşı var və Praqa qalası ilə K&ouml;hnə şəhəri birləşdirən bir ke&ccedil;iddir.<br />\r\n-----<br />\r\n2. K&Ouml;HNƏ ŞƏHƏR MEYDANI (OLD TOWN MEYDANI)<br />\r\n<img src=\"https://www.bht.az/uploads/jpg/xp1drb8a1591higoqbbnj1vrb138p7.jpg.pagespeed.ic.KdDDlKRBMQ.webp\" style=\"width:100%\" /><br />\r\nK&ouml;hnə Şəhər Meydanı Praqanın mədəniyyət mərkəzidir və turistlərin gəzintisinə səbəb olur. Old Town Meydanında g&ouml;zəl barok memarlığından və k&uuml;&ccedil;ə musiqi&ccedil;iləri və ifa&ccedil;ıları ilə bir bayram atmosferi uzun m&uuml;ddət sizin yadınızda qalacaq.<br />\r\n-----<br />\r\n3. PRAQA QALASI<br />\r\n<img src=\"https://www.bht.az/uploads/jpg/xp1drb8a159641qnlibnc3of1k6.jpg.pagespeed.ic.y0wa4TYg3h.webp\" style=\"width:100%\" /><br />\r\nPraqa Qalası ən populyar turistik məkandır və &ccedil;ayın &uuml;st&uuml;ndən bir təpənin &uuml;st&uuml;ndə yerləşir. Bu g&uuml;n &Ccedil;exiya prezidentinin rəsmi iqamətgahıdır.<br />\r\nBu zərif və f&uuml;sunkar quruluşa baş &ccedil;əkmək və heyran olmaq &uuml;&ccedil;&uuml;n m&uuml;tləq bu g&ouml;zəl Qalaya gəlməlisiz.<br />\r\n-----<br />\r\n4. ASTRONOMIK SAAT<br />\r\n<img src=\"https://www.bht.az/uploads/jpg/xp1drb8a1581fkkqkf1hn74e3ieo5.jpg.pagespeed.ic.47GNaGG2dP.webp\" style=\"width:100%\" /><br />\r\nAstronomik Saat tam olaraq: b&ouml;y&uuml;k, mexaniki bir saat adlanır. Hər g&uuml;n, Astronomik Saatı hərəkətdə izləmək &uuml;&ccedil;&uuml;n bu saat ətrafında &ccedil;oxlu sayda turist toplaşır.<br />\r\n1410-cu ildə yaradılan Astronomik Saat d&uuml;nyanın ən qədim astronomik saatlarından biridir<br />\r\n-----<br />\r\n5. M&Uuml;QƏDDƏS VITUS KATEDRALI<br />\r\nM&uuml;qəddəs Vitus Katedrali Praqa Qalası meydanında yerləşir. Y&uuml;z illərlə tikilməyə davam etməyinə baxmayaraq, bu Katedral yalnız 1929-cu ildə tamamlandı.<br />\r\nBu Katedraldə y&uuml;z illərə aid mozaika, məzar və vitraj işlərini tapacaqsınız. Bu şah əsərlər bu Katedrali Praqada dəyərli bir ziyarət ocağına &ccedil;evirir.<br />\r\n-----<br />\r\n6. VITKOVDAKI MILLI ABIDƏ<br />\r\nVitkovdakı Milli Abidə, bir g&ouml;zl&uuml; d&ouml;y&uuml;ş&ccedil;&uuml; Jan Žižka ilə birlikdə Praqa şəhərini q&uuml;rurla seyr edən k&uuml;tləvi tunc heykəli olan bir abidədir. Vitkov təpəsinin &uuml;st&uuml;ndəki xatirə binası &ccedil;exoslovakiyalı legionerlərin şərəfinə qoyulmuşdur.<br />\r\n&Ccedil;exiyanın mədəni qəhrəmanları haqqında daha geniş bir fikir əldə etmək &uuml;&ccedil;&uuml;n bu abidəyə gəlin.<br />\r\n-----<br />\r\n7. JOHN LENNON DIVARINA BAŞ &Ccedil;ƏKIN<br />\r\n<img src=\"https://www.bht.az/uploads/jpg/xp1drb8a1591io51sg64hk1htvng18.jpg.pagespeed.ic.Qp5WHo3UXF.webp\" style=\"width:100%\" /><br />\r\nJohn Lennon Divarı Beatles&#39;in pərəstişkarları &uuml;&ccedil;&uuml;n m&uuml;kəmməl bir ziyarət məkanıdır. Bu məkana baş &ccedil;əkmədən Praqanı tərk etməyin.<br />\r\nƏsl Beatles tərəfdarısınızsa, gəlib bu divarın bir ne&ccedil;ə şəklini &ccedil;əkməlisiniz və sonra i&ccedil;ki &uuml;&ccedil;&uuml;n yaxınlıqdakı Beatles Cafe-yə ke&ccedil;məlisiniz.</p>\r\n', '5de91909eafa8.jpg'),
(34, 4, 'AVROPANIN QARADAĞINI KƏŞF EDİN', 'AVROPANIN QARADAĞINI KƏŞF EDİN', 'AVROPANIN QARADAĞINI KƏŞF EDİN', '<p>Atlantik&nbsp;okeanının sahilində, Pireney yarımadasında ki&ccedil;ik &ouml;lkə. Portuqaliyada gəzərkən &ouml;z&uuml;n&uuml;z&uuml; İspaniyada və ya Farisdəki kimi hiss edə bilərsiniz. Ancaq burada onlardan fərqli olaraq qısa m&uuml;ddətdə &ccedil;ox yer gəzmək istəyən &ccedil;oxsaylı turist axını olmur.&nbsp;</p>\r\n', '<p>Atlantik&nbsp;okeanının sahilində, Pireney yarımadasında ki&ccedil;ik &ouml;lkə. Portuqaliyada gəzərkən &ouml;z&uuml;n&uuml;z&uuml; İspaniyada və ya Farisdəki kimi hiss edə bilərsiniz. Ancaq burada onlardan fərqli olaraq qısa m&uuml;ddətdə &ccedil;ox yer gəzmək istəyən &ccedil;oxsaylı turist axını olmur.&nbsp;</p>\r\n', '<p>Atlantik&nbsp;okeanının sahilində, Pireney yarımadasında ki&ccedil;ik &ouml;lkə. Portuqaliyada gəzərkən &ouml;z&uuml;n&uuml;z&uuml; İspaniyada və ya Farisdəki kimi hiss edə bilərsiniz. Ancaq burada onlardan fərqli olaraq qısa m&uuml;ddətdə &ccedil;ox yer gəzmək istəyən &ccedil;oxsaylı turist axını olmur.&nbsp;</p>\r\n', 'xp1dinbhriv1d4itip10ku1fmj79p4_jpg_pagespeed_ic_O6VWRf-Niy.jpg'),
(35, 4, 'BİZ SİZİ AYSBERQLƏR VƏ PİNQVİNLƏR ÖLKƏSİNƏ DƏVƏT EDİRİK. ANTARKTİDA SİZİ GÖZLƏYİR.', 'BİZ SİZİ AYSBERQLƏR VƏ PİNQVİNLƏR ÖLKƏSİNƏ DƏVƏT EDİRİK. ANTARKTİDA SİZİ GÖZLƏYİR.', 'BİZ SİZİ AYSBERQLƏR VƏ PİNQVİNLƏR ÖLKƏSİNƏ DƏVƏT EDİRİK. ANTARKTİDA SİZİ GÖZLƏYİR.', '<p>BİZ SİZİ AYSBERQLƏR VƏ PİNQVİNLƏR &Ouml;LKƏSİNƏ DƏVƏT EDİRİK. ANTARKTİDA SİZİ G&Ouml;ZLƏYİR.</p>\r\n', '<p>BİZ SİZİ AYSBERQLƏR VƏ PİNQVİNLƏR &Ouml;LKƏSİNƏ DƏVƏT EDİRİK. ANTARKTİDA SİZİ G&Ouml;ZLƏYİR.</p>\r\n', '<p>BİZ SİZİ AYSBERQLƏR VƏ PİNQVİNLƏR &Ouml;LKƏSİNƏ DƏVƏT EDİRİK. ANTARKTİDA SİZİ G&Ouml;ZLƏYİR.</p>\r\n', 'xp1dinbhrj0g8mr8e15dlsegnhd5_jpg_pagespeed_ic_ErCjBkLM7y.jpg'),
(36, 4, 'SEVGİ SİMVOLU TAC MAHAL', 'SEVGİ SİMVOLU TAC MAHAL', 'SEVGİ SİMVOLU TAC MAHAL', '<p>SEVGİ SİMVOLU TAC MAHAL</p>\r\n', '<p>SEVGİ SİMVOLU TAC MAHAL</p>\r\n', '<p>SEVGİ SİMVOLU TAC MAHAL</p>\r\n', '5ccbff3832642.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blog_category`
--

INSERT INTO `blog_category` (`id`, `name_az`, `name_en`, `name_ru`, `img`) VALUES
(4, 'Seyahet', 'asdas', 'asdas', 'amsterdam.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `address_az` varchar(255) NOT NULL,
  `address_en` varchar(255) NOT NULL,
  `address_ru` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `linkedln` varchar(255) NOT NULL,
  `phone_img` varchar(255) NOT NULL,
  `address_img` varchar(255) NOT NULL,
  `email_img` varchar(255) NOT NULL,
  `linkedln_img` varchar(255) NOT NULL,
  `facebook_img` varchar(255) NOT NULL,
  `instagram_img` varchar(255) NOT NULL,
  `youtube_img` varchar(255) NOT NULL,
  `twitter_img` varchar(255) NOT NULL,
  `whatsapp_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `address_az`, `address_en`, `address_ru`, `phone`, `email`, `facebook`, `instagram`, `youtube`, `twitter`, `whatsapp`, `linkedln`, `phone_img`, `address_img`, `email_img`, `linkedln_img`, `facebook_img`, `instagram_img`, `youtube_img`, `twitter_img`, `whatsapp_img`) VALUES
(1, 'asdasd', 'asdasd', 'asdasd', '1123123123', 'asd@sadasd', 'aasdasd', 'http://localhost/phpmyadmin/tbl_structure.php?db=luckytravel&table=contact', 'asd', 'asd', 'asd', 'asd', 'phone_icon_3_dark.png', 'loc_icon_2_dark.png', 'mail_icon_l_dark.png', 'default.png', 'default.png', 'default.png', 'default.png', 'default.png', 'default.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `faqs`
--

INSERT INTO `faqs` (`id`, `name_az`, `name_en`, `name_ru`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, 'asd1', 'asd', 'asd', 'asd', 'asd', 'asd'),
(2, 'asd2', 'asd', 'asd', 'asd', 'asd', 'asd'),
(3, 'asd3', 'asd', 'asd', 'asd', 'asd', 'asd'),
(4, 'asd4', 'asd', 'asd', 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `logo`
--

INSERT INTO `logo` (`id`, `img`) VALUES
(1, 'loqo_png1.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `main_slide`
--

CREATE TABLE `main_slide` (
  `id` int(11) NOT NULL,
  `title1_az` varchar(255) NOT NULL,
  `title1_en` varchar(255) NOT NULL,
  `title1_ru` varchar(255) NOT NULL,
  `title2_az` varchar(255) NOT NULL,
  `title2_en` varchar(255) NOT NULL,
  `title2_ru` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `main_slide`
--

INSERT INTO `main_slide` (`id`, `title1_az`, `title1_en`, `title1_ru`, `title2_az`, `title2_en`, `title2_ru`, `link`, `img`) VALUES
(2, 'Parisdə Yeni il', 'sda', 'asdas', 'Yeni ilinizi Parisdə Keçirin', 'asd', 'asdasd', '', 'photo-1502602898657-3e91760cbb341.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name_surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `name_surname`, `email`, `phone`, `text`) VALUES
(1, 'asdasdasdas', 'asdas', 'asasd', 'asdasdasdasdadas'),
(2, 'asdasd', 'asdas@asdas', 'dasdasd', 'asd'),
(3, 'R', 'rrrr@rrr.com', '65465465416541654', 'dvdfhgdghdfghh');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `offers`
--

INSERT INTO `offers` (`id`, `name_az`, `name_en`, `name_ru`, `desc_az`, `desc_en`, `desc_ru`, `title_az`, `title_en`, `title_ru`, `img`) VALUES
(1, 'asd', 'asd', 'asd', '', '', '', 'fff', 'fff', 'fff', '2.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `offers_about`
--

CREATE TABLE `offers_about` (
  `id` int(11) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `offers_about`
--

INSERT INTO `offers_about` (`id`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, '<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:24px\">TƏKLİFLƏRİMİZ</span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">D&uuml;nyanın b&uuml;t&uuml;n istiqamətlərinə turizmin b&uuml;t&uuml;n sahələri &uuml;zrə professional xidmətlər</p>\r\n\r\n<p><span style=\"font-size:16px\">Baku Holiday Travel&rdquo; Turizm Şirkəti 2013-c&uuml; il 27 iyul tarixində Mədəniyyət və Turizm Nazirliyinin lisenziyası ilə fəaliyyətə başlamış və professional xidməti ilə qısa m&uuml;ddət ərzində m&uuml;ştərilərin rəğbətini qazanmışdır. Hal - hazırda Azərbaycanda və D&uuml;nyanın bir &ccedil;ox &ouml;lkələrinə Turizmin İstirahət, Biznes, M&uuml;alicəvi və digər sahələri &uuml;zrə təşkilində aktiv və inkişaf edən şirkət olaraq tanınıb.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Baku Holiday Travel-in təmin etdiyi xidmətlərin m&uuml;ştərilər tərəfindən y&uuml;ksək qiymətləndirilməsi, bizi işimizə daha məsuliyyətli yanaşmağa və peşəkar idarə&ccedil;ilyimizi artırmağa daha &ccedil;ox motivasiya yaradır. Bir s&ouml;zlə, şirkətiniz və səyahət&ccedil;iləriniz &uuml;&ccedil;&uuml;n ən peşəkar se&ccedil;im Baku Holiday Travel-dir</span></p>\r\n', '<p>asd</p>\r\n', '<p>asd</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `partners`
--

INSERT INTO `partners` (`id`, `name_az`, `name_en`, `name_ru`, `img`, `link`) VALUES
(1, 'asds', 'asd', 'asd', '614.png', 'asdas');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_cabinet`
--

CREATE TABLE `personal_cabinet` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(2552) NOT NULL,
  `surname` varchar(2552) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `personal_cabinet`
--

INSERT INTO `personal_cabinet` (`id`, `username`, `password`, `name`, `surname`, `email`, `phone`, `img`, `birthdate`, `status`) VALUES
(1, 'asd', 'd41d8cd98f00b204e9800998ecf8427e', 'asd', 'asd', 'asd@asdasd', 'asd', 'default.png', '0022-02-17', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `register_about`
--

CREATE TABLE `register_about` (
  `id` int(11) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `register_about`
--

INSERT INTO `register_about` (`id`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, '<p><span style=\"font-size:20px\"><strong>Qeydiyyat </strong>Bolmesi az</span></p>\r\n', '<p>Qeydiyyat Bolmesi en</p>\r\n', '<p>Qeydiyyat Bolmesi ru</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`id`, `name_az`, `name_en`, `name_ru`, `desc_az`, `desc_en`, `desc_ru`, `title_az`, `title_en`, `title_ru`, `img`) VALUES
(1, ' Korporativ & Biznes Turizmi	', 'sd', 'asd', '<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><strong><span style=\"font-size:24px\">ƏN M&Uuml;NASİB QİYMƏTƏ VƏ KOMFORTLU U&Ccedil;UŞLAR</span></strong></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><span style=\"color:#95a5a6\">Biz ən n&uuml;fuzlu aviaşirkətlərlə əməkdaşlıq edirik</span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">Biz AZAL, Turkish Airlines, Qatar Airways, ETIHAD-la yanaşı digər beynəlxalq Hava Yolu şirkətləri ilə əməkdaşlıq edirik. Bizim Aviabilet menecerlərimiz sizin səyahət etmək istədiyiniz şəhərə, tarixə və saata uyğun olaraq u&ccedil;uş biletinizi operativ şəkildə hazır edəcəklər.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Komfortlu səyahətləri biz ən m&uuml;nasib qiymətə təqdim edirik.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">&ldquo;Bakı Holiday Travel&ldquo; turizm təşkilatının əsas prioritetlərindən biri korporativ şənliklər, korporativ tədbirlər, işg&uuml;zar g&ouml;r&uuml;şlər, forumlar, seminarlar və sərgilərin təşkil olunmasıdır. Peşakar menecerlər m&uuml;ştərilərin tələblərinin m&uuml;rəkkəblik səviyyəsindən asılı olmayaraq həyata ke&ccedil;irirlər.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Korporativ m&uuml;ştərilərimiz &uuml;&ccedil;&uuml;n tam biznes səyahət həlli təklif edirik; Biz sizin tələblərinizin hər aspektinə diqqət yetirəcək və sifariş prosesini birbaşa həll edəcəyik. Beləliklə, siz fikrinizi yalnız biznesinizə y&ouml;nləndirəcəksiniz.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">M&uuml;stəqil bir &ouml;zəl şirkət kimi, bizim məsləhətimiz qərəzsiz və tərəfsizdir. Biz turizm bazarındakı ən uyğun se&ccedil;imləri sizin təqdim edəcəyik.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">Sizin &uuml;&ccedil;&uuml;n u&ccedil;uşlar, otellər, qatarlar, avtomobil icarəsi, sığorta, viza və valyuta daxil olmaqla, səyahətin b&uuml;t&uuml;n aspektlərini əhatə edən tam bir sifariş xidməti təklif edirik.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\">--------------------------</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\">Aviabilet lazımdır? Zəng edin:<br />\r\n＋994 77 497 77 76 (＋Whatsapp)<br />\r\n＋994 12 599 88 99 (Winter Park Plaza ofis)<br />\r\n＋994 77 497 77 74 (＋Whatsapp)<br />\r\n＋994 12 497 58 21/22 (Caspian Plaza ofis)</span></p>\r\n', '', '', '', '', '', '7.png'),
(2, 'asdsadahd asdjashdk asdkjhasd asdasd', 'sd', 'asd', '<p>asdaaalsdjas asldhkas kasdh aksdh kashdkajshdkas dkajshd asdkhas kdjhas dkjahs dkjash dd</p>\r\n', '', '', '', '', '', '7.png'),
(3, 'asdasasdsa', 'sd', 'asd', '<p>asdaaalsdjas asldhkas kasdh aksdh kashdkajshdkas dkajshd asdkhas kdjhas dkjahs dkjash dd</p>\r\n', '', '', '', '', '', '7.png'),
(4, 'asdsadahd asdjashdk asdkjhasd asdasd', 'sd', 'asd', '<p>asdaaalsdjas asldhkas kasdh aksdh kashdkajshdkas dkajshd asdkhas kdjhas dkjahs dkjash dd</p>\r\n', '', '', '', '', '', '7.png'),
(5, 'asdsadahd asdjashdk asdkjhasd asdasd', 'sd', 'asd', '<p>asdaaalsdjas asldhkas kasdh aksdh kashdkajshdkas dkajshd asdkhas kdjhas dkjahs dkjash dd</p>\r\n', '', '', '', '', '', '7.png'),
(6, 'asdsadahd asdjashdk asdkjhasd asdasd', 'sd', 'asd', '<p>asdaaalsdjas asldhkas kasdh aksdh kashdkajshdkas dkajshd asdkhas kdjhas dkjahs dkjash dd</p>\r\n', '', '', '', '', '', '7.png'),
(7, 'asdsadahd asdjashdk asdkjhasd asdasd', 'sd', 'asd', '<p>asdaaalsdjas asldhkas kasdh aksdh kashdkajshdkas dkajshd asdkhas kdjhas dkjahs dkjash dd</p>\r\n', '', '', '', '', '', '7.png'),
(8, ' VİP xidmətlər	', 'sd', 'asd', '<p>asdaaalsdjas asldhkas kasdh aksdh kashdkajshdkas dkajshd asdkhas kdjhas dkjahs dkjash dd</p>\r\n', '', '', ' Ən yüksək komfort səyahət və lüks istirahət	', ' Ən yüksək komfort səyahət və lüks istirahət	', ' Ən yüksək komfort səyahət və lüks istirahət	', '7.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services_about`
--

CREATE TABLE `services_about` (
  `id` int(11) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `services_about`
--

INSERT INTO `services_about` (`id`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, '<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:24px\">XİDMƏTLƏRİMİZ</span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">D&uuml;nyanın b&uuml;t&uuml;n istiqamətlərinə turizmin b&uuml;t&uuml;n sahələri &uuml;zrə professional xidmətlər</p>\r\n\r\n<p><span style=\"font-size:16px\">Baku Holiday Travel&rdquo; Turizm Şirkəti 2013-c&uuml; il 27 iyul tarixində Mədəniyyət və Turizm Nazirliyinin lisenziyası ilə fəaliyyətə başlamış və professional xidməti ilə qısa m&uuml;ddət ərzində m&uuml;ştərilərin rəğbətini qazanmışdır. Hal - hazırda Azərbaycanda və D&uuml;nyanın bir &ccedil;ox &ouml;lkələrinə Turizmin İstirahət, Biznes, M&uuml;alicəvi və digər sahələri &uuml;zrə təşkilində aktiv və inkişaf edən şirkət olaraq tanınıb.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Baku Holiday Travel-in təmin etdiyi xidmətlərin m&uuml;ştərilər tərəfindən y&uuml;ksək qiymətləndirilməsi, bizi işimizə daha məsuliyyətli yanaşmağa və peşəkar idarə&ccedil;ilyimizi artırmağa daha &ccedil;ox motivasiya yaradır. Bir s&ouml;zlə, şirkətiniz və səyahət&ccedil;iləriniz &uuml;&ccedil;&uuml;n ən peşəkar se&ccedil;im Baku Holiday Travel-dir</span></p>\r\n', '<p style=\"text-align:center\"><span style=\"font-size:18px\">D&uuml;nyanın b&uuml;t&uuml;n istiqamətlərinə turizmin b&uuml;t&uuml;n sahələri &uuml;zrə professional xidmətlər</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\">Baku Holiday Travel&rdquo; Turizm Şirkəti 2013-c&uuml; il 27 iyul tarixində Mədəniyyət və Turizm Nazirliyinin lisenziyası ilə fəaliyyətə başlamış və professional xidməti ilə qısa m&uuml;ddət ərzində m&uuml;ştərilərin rəğbətini qazanmışdır. Hal - hazırda Azərbaycanda və D&uuml;nyanın bir &ccedil;ox &ouml;lkələrinə Turizmin İstirahət, Biznes, M&uuml;alicəvi və digər sahələri &uuml;zrə təşkilində aktiv və inkişaf edən şirkət olaraq tanınıb.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\">Baku Holiday Travel-in təmin etdiyi xidmətlərin m&uuml;ştərilər tərəfindən y&uuml;ksək qiymətləndirilməsi, bizi işimizə daha məsuliyyətli yanaşmağa və peşəkar idarə&ccedil;ilyimizi artırmağa daha &ccedil;ox motivasiya yaradır. Bir s&ouml;zlə, şirkətiniz və səyahət&ccedil;iləriniz &uuml;&ccedil;&uuml;n ən peşəkar se&ccedil;im Baku Holiday Travel-dir</span></p>\r\n', '<p style=\"text-align:center\"><span style=\"font-size:18px\">D&uuml;nyanın b&uuml;t&uuml;n istiqamətlərinə turizmin b&uuml;t&uuml;n sahələri &uuml;zrə professional xidmətlər</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\">Baku Holiday Travel&rdquo; Turizm Şirkəti 2013-c&uuml; il 27 iyul tarixində Mədəniyyət və Turizm Nazirliyinin lisenziyası ilə fəaliyyətə başlamış və professional xidməti ilə qısa m&uuml;ddət ərzində m&uuml;ştərilərin rəğbətini qazanmışdır. Hal - hazırda Azərbaycanda və D&uuml;nyanın bir &ccedil;ox &ouml;lkələrinə Turizmin İstirahət, Biznes, M&uuml;alicəvi və digər sahələri &uuml;zrə təşkilində aktiv və inkişaf edən şirkət olaraq tanınıb.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\">Baku Holiday Travel-in təmin etdiyi xidmətlərin m&uuml;ştərilər tərəfindən y&uuml;ksək qiymətləndirilməsi, bizi işimizə daha məsuliyyətli yanaşmağa və peşəkar idarə&ccedil;ilyimizi artırmağa daha &ccedil;ox motivasiya yaradır. Bir s&ouml;zlə, şirkətiniz və səyahət&ccedil;iləriniz &uuml;&ccedil;&uuml;n ən peşəkar se&ccedil;im Baku Holiday Travel-dir</span></p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL,
  `offers_id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `end_date` date NOT NULL,
  `tour_price` int(11) NOT NULL,
  `tour_code` varchar(255) NOT NULL,
  `click_times` int(11) NOT NULL,
  `summary` text NOT NULL,
  `temperature` int(11) NOT NULL,
  `link` text NOT NULL,
  `map_long` varchar(255) NOT NULL,
  `map_lat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tours`
--

INSERT INTO `tours` (`id`, `services_id`, `offers_id`, `name_az`, `name_en`, `name_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`, `date`, `end_date`, `tour_price`, `tour_code`, `click_times`, `summary`, `temperature`, `link`, `map_long`, `map_lat`) VALUES
(116, 8, 1, 'BARSELONADA FORMULA 1 TURU', 'BARSELONADA FORMULA 1 TURU', 'BARSELONADA FORMULA 1 TURU', '<p>Amsterdamın b&uuml;t&uuml;n g&ouml;zəlliyini g&ouml;rmək &uuml;&ccedil;&uuml;n Yeni İldə səyahət etmək lazımdır.<br />\r\n-----------<br />\r\nSiz bu səyahəti 1 KART kartı ilə və digər sərfəli kredit şərtlərimizlə əldə edə bilərsiniz.<br />\r\n-----------<br />\r\nTARİX:<br />\r\n30.12.2019 - 04.01.2020<br />\r\n-----------<br />\r\nOTELLƏR VƏ QİYMƏTLƏR:<br />\r\n&bull; Holiday Inn Express Amsterdam Arena Towers - 1050 usd<br />\r\n&bull; Delta Hotel City Center - 1280 usd</p>\r\n', '<p>BARSELONADA FORMULA 1 TURU</p>\r\n', '<p>BARSELONADA FORMULA 1 TURU</p>\r\n', 'barcity3.jpg', '2021-04-16', '2020-06-06', 825, '#80002', 5, '', 9, 'https://www.google.com/maps/place/Bak%C3%BC,+Azerbaycan/@40.3945714,49.78492,12z/data=!3m1!4b1!4m5!3m4!1s0x40307d6bd6211cf9:0x343f6b5e7ae56c6b!8m2!3d40.4092617!4d49.8670924', '40.3945714', '49.78492'),
(117, 1, 1, 'YENİ İL EL RESORT-DA', 'YENİ İL EL RESORT-DA', 'YENİ İL EL RESORT-DA', '<p>Amsterdamın b&uuml;t&uuml;n g&ouml;zəlliyini g&ouml;rmək &uuml;&ccedil;&uuml;n Yeni İldə səyahət etmək lazımdır.<br />\r\n-----------<br />\r\nSiz bu səyahəti 1 KART kartı ilə və digər sərfəli kredit şərtlərimizlə əldə edə bilərsiniz.<br />\r\n-----------<br />\r\nTARİX:<br />\r\n30.12.2019 - 04.01.2020<br />\r\n-----------<br />\r\nOTELLƏR VƏ QİYMƏTLƏR:<br />\r\n&bull; Holiday Inn Express Amsterdam Arena Towers - 1050 usd<br />\r\n&bull; Delta Hotel City Center - 1280 usd</p>\r\n', '<p>YENİ İL EL RESORT-DA</p>\r\n', '<p>YENİ İL EL RESORT-DA</p>\r\n', 'fae8782.jpg', '2019-12-14', '2020-04-04', 255, '#10003', 3, 'Gün boyu buludsuz olacaq.', 1, 'https://www.google.com/maps/place/Qax-%C4%B0lisu,+Az%C9%99rbaycan/@41.4519228,47.0066032,17z/data=!3m1!4b1!4m5!3m4!1s0x4047bfc86ca29077:0x8f5340728224d7a0!8m2!3d41.4519228!4d47.0087919', '41.4519228', '47.0066032'),
(118, 1, 1, 'YENİ İL LAPLANDİYADA', 'YENİ İL LAPLANDİYADA', 'YENİ İL LAPLANDİYADA', '<p>Amsterdamın b&uuml;t&uuml;n g&ouml;zəlliyini g&ouml;rmək &uuml;&ccedil;&uuml;n Yeni İldə səyahət etmək lazımdır.<br />\r\n-----------<br />\r\nSiz bu səyahəti 1 KART kartı ilə və digər sərfəli kredit şərtlərimizlə əldə edə bilərsiniz.<br />\r\n-----------<br />\r\nTARİX:<br />\r\n30.12.2019 - 04.01.2020<br />\r\n-----------<br />\r\nOTELLƏR VƏ QİYMƏTLƏR:<br />\r\n&bull; Holiday Inn Express Amsterdam Arena Towers - 1050 usd<br />\r\n&bull; Delta Hotel City Center - 1280 usd</p>\r\n', '<p>Yeni İli Nağıl kimi Laplandiyada qarşılayın.<br />\r\nTəmiz hava, bəmbəyaz qar və əyləncəli Yeni İl şənlikləri ilə Levi sizə unudulmaz anlar bəxş edəcək.<br />\r\n-----------<br />\r\nSiz bu səyahəti 1 KART kartı ilə və digər sərfəli kredit şərtlərimizlə əldə edə bilərsiniz.</p>\r\n', '<p>Yeni İli Nağıl kimi Laplandiyada qarşılayın.<br />\r\nTəmiz hava, bəmbəyaz qar və əyləncəli Yeni İl şənlikləri ilə Levi sizə unudulmaz anlar bəxş edəcək.<br />\r\n-----------<br />\r\nSiz bu səyahəti 1 KART kartı ilə və digər sərfəli kredit şərtlərimizlə əldə edə bilərsiniz.</p>\r\n', 'xp1drb249sk1g98oe21qu0tdlct27_jpg_pagespeed_ic_Xsg6DSI7we.jpg', '2020-03-03', '2020-05-05', 1812, '#10004', 5, 'Gün boyu sulu qar olacaq.', -9, 'https://www.google.com/maps/place/Lapland,+Finlandiya/@67.5491618,16.3519837,5z/data=!3m1!4b1!4m5!3m4!1s0x45d30036254ca145:0xcedc4eb30d91aca1!8m2!3d67.9222304!4d26.5046438', '67.5491618', '16.3519837'),
(119, 8, 1, 'ISTANBULDA GÖZƏL OTEL', 'ISTANBULDA GÖZƏL OTEL', 'ISTANBULDA GÖZƏL OTEL', '<h1>Amsterdamın b&uuml;t&uuml;n g&ouml;zəlliyini g&ouml;rmək &uuml;&ccedil;&uuml;n Yeni İldə səyahət etmək lazımdır.<br />\r\n-----------<br />\r\nSiz bu səyahəti 1 KART kartı ilə və digər sərfəli kredit şərtlərimizlə əldə edə bilərsiniz.<br />\r\n-----------<br />\r\nTARİX:<br />\r\n30.12.2019 - 04.01.2020<br />\r\n-----------<br />\r\nOTELLƏR VƏ QİYMƏTLƏR:<br />\r\n&bull; Holiday Inn Express Amsterdam Arena Towers - 1050 usd<br />\r\n&bull; Delta Hotel City Center - 1280 usd</h1>\r\n', '<p>İstanbulda komfortlu istirahət &uuml;&ccedil;&uuml;n Doubletree By Hilton oteli.<br />\r\nM&ouml;htəşəm şəhərdə şopinq və &quot;Boğazda&quot; &ccedil;ay keyfi &uuml;&ccedil;&uuml;n g&ouml;zəl f&uuml;rsət.</p>\r\n', '<p>İstanbulda komfortlu istirahət &uuml;&ccedil;&uuml;n Doubletree By Hilton oteli.<br />\r\nM&ouml;htəşəm şəhərdə şopinq və &quot;Boğazda&quot; &ccedil;ay keyfi &uuml;&ccedil;&uuml;n g&ouml;zəl f&uuml;rsət.</p>\r\n', 'xp1dqrjbkcctd710nfguas0k67j7_jpg_pagespeed_ic_GPY_LGr2NW.jpg', '2023-03-05', '2020-05-24', 525, '#80005', 4, '', 3, 'https://www.google.com/maps/place/Amsterdam,+Hollanda/@52.3547031,4.8339211,12z/data=!4m5!3m4!1s0x47c63fb5949a7755:0x6600fd4cb7c0af8d!8m2!3d52.3666969!4d4.8945398', '52.3547031', '4.8339211'),
(120, 1, 1, 'İSPANİYADA NOVRUZ İSTİRAHƏTİ', 'İSPANİYADA NOVRUZ İSTİRAHƏTİ', 'İSPANİYADA NOVRUZ İSTİRAHƏTİ', '<p>Barselona və Madrid şəhərlərinə səyahət edərək bir birinə bənzər və fərqli 2 şəhərin g&ouml;zəllikləri ilə yaxından tanış ola biləcəksiniz.<br />\r\n-----------<br />\r\nSiz bu səyahəti BİR KART ilə və digər sərfəli kredit şərtlərimizlə əldə edə bilərsiniz.<br />\r\n-----------<br />\r\nTARİX:<br />\r\n17.03.2020 - 21.03.2020<br />\r\n-----------<br />\r\nPROQRAM &Uuml;ZRƏ:<br />\r\n&bull; 1 və 2-ci g&uuml;n: Madrid<br />\r\n&bull; 3-c&uuml; g&uuml;n: Madrid, Zaragoza, Poblet, Montserrat, Barselona<br />\r\n&bull; 4 və 5-ci g&uuml;n: Barselona</p>\r\n', '<p>Barselona və Madrid şəhərlərinə səyahət edərək bir birinə bənzər və fərqli 2 şəhərin g&ouml;zəllikləri ilə yaxından tanış ola biləcəksiniz.<br />\r\n-----------<br />\r\nSiz bu səyahəti BİR KART ilə və digər sərfəli kredit şərtlərimizlə əldə edə bilərsiniz.<br />\r\n-----------<br />\r\nTARİX:<br />\r\n17.03.2020 - 21.03.2020<br />\r\n-----------<br />\r\nPROQRAM &Uuml;ZRƏ:<br />\r\n&bull; 1 və 2-ci g&uuml;n: Madrid<br />\r\n&bull; 3-c&uuml; g&uuml;n: Madrid, Zaragoza, Poblet, Montserrat, Barselona<br />\r\n&bull; 4 və 5-ci g&uuml;n: Barselona</p>\r\n', '<p>Barselona və Madrid şəhərlərinə səyahət edərək bir birinə bənzər və fərqli 2 şəhərin g&ouml;zəllikləri ilə yaxından tanış ola biləcəksiniz.<br />\r\n-----------<br />\r\nSiz bu səyahəti BİR KART ilə və digər sərfəli kredit şərtlərimizlə əldə edə bilərsiniz.<br />\r\n-----------<br />\r\nTARİX:<br />\r\n17.03.2020 - 21.03.2020<br />\r\n-----------<br />\r\nPROQRAM &Uuml;ZRƏ:<br />\r\n&bull; 1 və 2-ci g&uuml;n: Madrid<br />\r\n&bull; 3-c&uuml; g&uuml;n: Madrid, Zaragoza, Poblet, Montserrat, Barselona<br />\r\n&bull; 4 və 5-ci g&uuml;n: Barselona</p>\r\n', 'xp1d0h1e7su13sc1us8i5pin51ldq9_jpg_pagespeed_ic_rYfDrhWD7I.jpg', '2020-03-17', '2020-03-21', 1007, '#10005', 7, 'Gün boyu sulu qar olacaq.', -8, 'https://www.google.com/maps/place/Lapland,+Finlandiya/@67.5491618,16.3519837,5z/data=!3m1!4b1!4m5!3m4!1s0x45d30036254ca145:0xcedc4eb30d91aca1!8m2!3d67.9222304!4d26.5046438', '', ''),
(121, 8, 1, 'AMSTERDAMDA YENİ İL', 'AMSTERDAMDA YENİ İL', 'AMSTERDAMDA YENİ İL', '<p>Amsterdamın b&uuml;t&uuml;n g&ouml;zəlliyini g&ouml;rmək &uuml;&ccedil;&uuml;n Yeni İldə səyahət etmək lazımdır.<br />\r\n-----------<br />\r\nSiz bu səyahəti 1 KART kartı ilə və digər sərfəli kredit şərtlərimizlə əldə edə bilərsiniz.<br />\r\n-----------<br />\r\nTARİX:<br />\r\n30.12.2019 - 04.01.2020<br />\r\n-----------<br />\r\nOTELLƏR VƏ QİYMƏTLƏR:<br />\r\n&bull; Holiday Inn Express Amsterdam Arena Towers - 1050 usd<br />\r\n&bull; Delta Hotel City Center - 1280 usd</p>\r\n', '<p>Amsterdamın b&uuml;t&uuml;n g&ouml;zəlliyini g&ouml;rmək &uuml;&ccedil;&uuml;n Yeni İldə səyahət etmək lazımdır.<br />\r\n-----------<br />\r\nSiz bu səyahəti 1 KART kartı ilə və digər sərfəli kredit şərtlərimizlə əldə edə bilərsiniz.<br />\r\n-----------<br />\r\nTARİX:<br />\r\n30.12.2019 - 04.01.2020<br />\r\n-----------<br />\r\nOTELLƏR VƏ QİYMƏTLƏR:<br />\r\n&bull; Holiday Inn Express Amsterdam Arena Towers - 1050 usd<br />\r\n&bull; Delta Hotel City Center - 1280 usd</p>\r\n', '<p>Amsterdamın b&uuml;t&uuml;n g&ouml;zəlliyini g&ouml;rmək &uuml;&ccedil;&uuml;n Yeni İldə səyahət etmək lazımdır.<br />\r\n-----------<br />\r\nSiz bu səyahəti 1 KART kartı ilə və digər sərfəli kredit şərtlərimizlə əldə edə bilərsiniz.<br />\r\n-----------<br />\r\nTARİX:<br />\r\n30.12.2019 - 04.01.2020<br />\r\n-----------<br />\r\nOTELLƏR VƏ QİYMƏTLƏR:<br />\r\n&bull; Holiday Inn Express Amsterdam Arena Towers - 1050 usd<br />\r\n&bull; Delta Hotel City Center - 1280 usd</p>\r\n', 'amsterdam.jpg', '2019-12-14', '2020-01-04', 1050, '#80005', 6, 'Yüngül yağış bu gün günortadan sonra dayanacaq.', 6, 'https://www.google.com/maps/place/Amsterdam,+Hollanda/@52.3547031,4.8339211,12z/data=!3m1!4b1!4m5!3m4!1s0x47c63fb5949a7755:0x6600fd4cb7c0af8d!8m2!3d52.3666969!4d4.8945398', '52.3547031', '4.8339211');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tour_and_tour_includes`
--

CREATE TABLE `tour_and_tour_includes` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `tour_includes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tour_and_tour_includes`
--

INSERT INTO `tour_and_tour_includes` (`id`, `tour_id`, `tour_includes_id`) VALUES
(11, 98, 5),
(12, 98, 4),
(13, 98, 6),
(14, 98, 7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tour_gallery`
--

CREATE TABLE `tour_gallery` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tour_includes`
--

CREATE TABLE `tour_includes` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tour_includes`
--

INSERT INTO `tour_includes` (`id`, `name_az`, `name_en`, `name_ru`, `img`) VALUES
(4, 'UÇUŞ BİLET', 'UÇUŞ BİLET', 'UÇUŞ BİLET', '614.png'),
(5, 'asdsa', 'asd', 'asd', 'all-kinds-electronic-equipment-testing-instruments-electronic-laboratory-laboratory-electronic-equipment-device-134261658.jpg'),
(6, 'asdasdas', 'asdsa', 'sdas', '6141.png'),
(7, 'asdsa', 'asda', 'sdas', '7.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `isAdmin`) VALUES
(1, 'super_admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `additional_slide`
--
ALTER TABLE `additional_slide`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `additional_slide2`
--
ALTER TABLE `additional_slide2`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `main_slide`
--
ALTER TABLE `main_slide`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `offers_about`
--
ALTER TABLE `offers_about`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `personal_cabinet`
--
ALTER TABLE `personal_cabinet`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `register_about`
--
ALTER TABLE `register_about`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `services_about`
--
ALTER TABLE `services_about`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tour_and_tour_includes`
--
ALTER TABLE `tour_and_tour_includes`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tour_gallery`
--
ALTER TABLE `tour_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Tablo için indeksler `tour_includes`
--
ALTER TABLE `tour_includes`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `additional_slide`
--
ALTER TABLE `additional_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `additional_slide2`
--
ALTER TABLE `additional_slide2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Tablo için AUTO_INCREMENT değeri `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `main_slide`
--
ALTER TABLE `main_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `offers_about`
--
ALTER TABLE `offers_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `personal_cabinet`
--
ALTER TABLE `personal_cabinet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `register_about`
--
ALTER TABLE `register_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `services_about`
--
ALTER TABLE `services_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- Tablo için AUTO_INCREMENT değeri `tour_and_tour_includes`
--
ALTER TABLE `tour_and_tour_includes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `tour_gallery`
--
ALTER TABLE `tour_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `tour_includes`
--
ALTER TABLE `tour_includes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `tour_gallery`
--
ALTER TABLE `tour_gallery`
  ADD CONSTRAINT `tour_gallery_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
