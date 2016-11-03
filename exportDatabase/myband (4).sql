-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 03 nov 2016 om 17:50
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `myband`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `band`
--

CREATE TABLE IF NOT EXISTS `band` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `information` text NOT NULL,
  `profileImage` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Gegevens worden geëxporteerd voor tabel `band`
--

INSERT INTO `band` (`id`, `name`, `information`, `profileImage`, `date_created`) VALUES
(1, 'Daan Boom', '<p id="informatietekst">Daan Boom presenteert samen met Stijn van Vliet, Jasper Demollin en Tim Senders het programma Streetlab.</p>\r\n\r\n<p id="informatietekst"> Ze werden met het programma genomineerd voor de 50ste Gouden Televizier-Ring. Boom deed mee aan het 3e seizoen van Maestro.</p>\r\n\r\n<p id="informatietekst">Op 6 maart 2016 bereikte hij de finale die gewonnen werd door Leona Philippo. Tevens heeft hij gefigureerd in de show "Ick Hans Liberg" van Hans Liberg.</p>', 'image/Daan_Boom.jpg', '2016-10-15 09:41:26'),
(2, 'Jasper Demollin', '<p id="informatietekst">Jasper Demollin (Margraten, 14 maart 1991) is acteur, presentator en zanger.</p>\r\n\r\n<p id="informatietekst">Jasper is de prettyBoy van de band en heeft ook de meesten meiden achter zich aan. Jasper draagt altijd een kam bij zich en een spiegel om zichzelf te kunnen bekijken en tegleijkertijd zijn haar in een goede coup te kammen.</p>\r\n\r\n<p id="informatietekst">Jasper begon op hele jonge leeftijd met theater. Zo werd hij in de peuterklas bij het liedje ‘Er zat een klein zigeunermeisje, huilend op een steen’ altijd naar voren gevraagd omdat hij dit zo realistisch kon vertolken.</p>', 'image/Jasper_demollin.Vierkant.jpg', '2016-10-14 20:26:02'),
(3, 'Stijn van Vliet', '<p id="informatietekst">Plotseling blafte een hond, en antwoordde een andere hond en verscheurde de donsende stilte in lange, ruwe flarden; de nijdige hondekelen, heesch, ademloos, schor vijandig; plotseling ook zwegen zij stil. Aan het einde der Lange Laan lag diep in zijn voortuin het </p>\r\n\r\n<p id="informatietekst">Rezidentie-huis. Laag, dadelijk in den nacht der waringinboomen, zigzagde het zijne pannendaken, het eene achter het andere, naar de schaduw van den achtertuin toe, met een primitieve lijn van </p>\r\n\r\n<p id="informatietekst">dakteekening, over iedere galerij een dak, over iedere kamer een dak, tot éene lange daksilhouet.</p>', 'image/Stijn_van_VlietGrey.jpg', '2016-10-15 09:42:22'),
(4, 'Tim Senders', '<p id="informatietekst">Tim Senders (Utrecht, 25 juni 1990) is acteur, regisseur en presentator.</p>\r\n\r\n<p id="informatietekst">\r\nTim is de slimme jongen van de band en wou altijd al dokter worden voordat hij plots in een Side2Side terrecht kwam</p>\r\n\r\n<p id="informatietekst">Tim heeft van jongs af aan altijd een passie voor zingen gehad. hij leerde al zijn biologie toetsen door liedjes te maken van de moeilijke begrippen om ze zo beter te kunnen onthouden. Zijn droom was om een dokter te worden of een artiest en over de wereld te touren.</p>', 'image/Tim_senders.jpg', '2016-10-15 09:32:14');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `newsarticles`
--

CREATE TABLE IF NOT EXISTS `newsarticles` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Gegevens worden geëxporteerd voor tabel `newsarticles`
--

INSERT INTO `newsarticles` (`id`, `title`, `content`, `image`, `date_created`) VALUES
(1, 'Side 2 Side breekt stemrecord', 'Side 2 Side heeft, met alle aandacht rond hun track Forget My Name, gezorgd voor een record aantal stemmers. Die maakten hun voorkeur voor het nummer kenbaar via de website van de Media Markt Top 40.\r\n\r\nForget My Name is de afscheidssingle van Side 2 Side, de boyband die is ontstaan in het tv-programma Streetlab. Op het nummer zingt en rapt ook René Froger mee. Afgelopen maandag verscheen de video van het nummer en inmiddels is de track ook op Spotify te beluisteren.\r\n\r\nVia internet en sociale media werden fans van de groep donderdagmiddag opgeroepen om hun stem uit te brengen op het nummer. Daar werd massaal gehoor aan gegeven waardoor binnen drie uur tijd al ruim 15.000 stemmen waren uitgebracht, een record. Forget My Name heeft inmiddels een ruime voorsprong weten op te bouwen op de concurrentie en daarmee lijkt een notering in de Tipparade van komende week onafwendbaar.\r\n\r\nOp top40.nl kunnen bezoekers hun persoonlijke top 5 bepalen uit een selectie van nieuwe muziek. De resultaten van die stemming tellen mee voor de samenstelling van de Tipparade en als opstap naar een notering in de Top 40.\r\n\r\nDe nieuwe Tipparade wordt op donderdag gepubliceerd.', 'image/Side2SideArtikel1.jpg', '2016-05-27 10:14:13'),
(2, 'Streetlab-boyband Side 2 Side hoogste binnenkomer in Tipparade', 'De heren van Streetlab bestormen de hitlijsten met hun boyband Side 2 Side. In de viral-top-50 van Spotify staat single Forget My Name op 2 en in de Tipparade, een opstapje naar de Top 40, komen Jasper, Stijn, Tim en Daan binnen op 16.\r\nSide 2 Side verbrak vorige week een record op de website van de Tipparade, waar het publiek zijn stem kan uitbrengen op nieuwe releases. Binnen drie uur tijd ontving Forget My Name 15.000 stemmen. Een notering in de lijst kon dus niet uitblijven. Om door te stoten naar de Top 40 heeft de single wel nog meer airplay en streams nodig.\r\nBoyband\r\n\r\nDe buzz rond Forget My Name is in ieder geval groot. In de Spotify-viral-lijst moet Side 2 Side alleen nog een andere boyband voor zich dulden: B-Brave.', 'image/Side2SideBig.jpg', '2016-06-02 14:10:30'),
(3, 'Streetlab in Muziekfeest op het plein', 'De boyband Side 2 Side treedt vanavond met René Froger op in de seizoensopener van Muziekfeest op het plein. En met Side 2 Side bedoelen we natuurlijk de jongens van Streetlab.\r\nSide2Side probeert de zomerhit van 2016 te scoren met het nummer Forget my name. Dat wil nog niet zo goed lukken, het nummer blijft steken in de Tipparade, maar misschien helpt dit optreden in Muziekfeest op het plein ze over het dode punt heen.\r\nForget my name\r\n\r\nForget my name is de afscheidssingle van de populaire boyband Side2Side die niet alleen is tijdens het Muziekfeest. Deze zomer heeft AvroTros gedraaid in Groningen en Valkenswaard, vanavond is de eerste uit vier uitzendingen te zien op NPO 1. In de uitzending van vanavond treedt ook Kraantje Pappie op.\r\nDe presentator van het geheel is ook deze keer Jan Smit.\r\nMuziekfeest op het Plein, 21.10 uur, NPO 1', 'image/Side2SideMuziekfeest.png', '2016-06-24 10:39:36'),
(4, 'Streetlab strikt René Froger voor boyband', 'Vanavond komt er een einde aan het derde seizoen van het programma StreetlabTV en daarmee ook aan de veelbesproken boyband Side2Side. Daan, Jasper, Stijn en Tim scoorden hiermee een dikke hit: Kuss Mich Jetzt. Natuurlijk laten ze hun afscheid niet onopgemerkt voorbij gaan.\r\n\r\n"Side2Side zei zelf al: We go out with a bang. Vanavond na de uitzending komt er een videoclip online met niemand minder dan René Froger!" aldus de mannen van StreetlabTV bij een kiekje met René Froger op Instagram\r\n\r\nVanavond in RTL Boulevard de eerste beelden van de videoclip!\r\n\r\nOm 21:20 uur zie je op NPO3 hoe deze bijzondere samenwerking tot stand is gekomen.', 'image/ReneFroger.jpg', '2016-05-23 11:24:59'),
(5, 'We deden ''serieus'' mee aan Das Supertalent', 'Sinds de nominatie van Streetlab voor de Gouden Televizier-Ring , kunnen we niet meer om de YouTubers heen. De mannen zetten door en doen nu zelfs mee met Das Supertalent, de Duitse versie van Holland''s Got Talent.\r\n\r\nAfgelopen maandag waren de mannen op de Duitse televisie te bewonderen. Sinds dien gaat het nummer Küss Mich Jetzt de hele wereld over. "We zijn altijd fan geweest van de Backstreet Boys. Nu wilden we het zelf een keer proberen", vertellen de mannen van Streetlab enthousiast aan de desk in RTL Boulevard.\r\n\r\nDe jury van de Duitse talentenjacht vond het optreden geen groot succes, en daar balen de mannen stiekem toch een beetje van. "We vonden het heel jammer dat we niet door gingen. We deden serieus mee en dachten onderweg naar de studio dat het wel ging lukken."\r\n\r\nGordon, die vanavond op de plek van Albert Verlinde zit, is best onder de indruk van het zangtalent van Streetlab. "Ik vind het niet slecht", vertelt hij aan de desk.', 'image/DasSuperTalent.jpg', '2015-10-22 11:49:14'),
(6, 'Side2Side gaat viral met parodie op boybands', 'Auditie in Duitse talentenjacht • Op 1 in Nederlandse Spotify Viral 50\r\n\r\nTwee weken geleden waren ze nog genomineerd voor de Gouden Televizier-Ring 2015 en deze week zijn de mannen van jongerenprogramma Streetlab alweer niet uit de media weg te slaan. Hun nieuwste experiment: een boyband lanceren!\r\n\r\nDaan Boom, Jasper Demollin, Stijn van Vliet en Tim Senders wilden weten of zij mensen kunnen laten geloven dat zij een internationale boyband zijn. Ze lieten het liedje Küss Mich Jetzt produceren door Roy van Rosendaal, namen een clip op en deden als Side 2 Side auditie in Das Supertalent, de Duitse ‘Got Talent’.\r\n\r\nHet liedje – gezongen met zware Nederlandse accenten maar op zich wel toonvast – is verschrikkelijk cheesy. In combinatie met de over-de-top videoclip is het meer een parodie op een jaren negentig boyband. Die Duitse auditie liep op niks uit, maar fans van Streetlab zien de humor er natuurlijk wel van in.\r\n\r\nDe mannen waren onder meer te gast in RTL Boulevard en op 3FM, en de single staat momenteel zelfs op de eerste plaats in onze Spotify Viral 50.', 'image/KussMichJetzt.Scene.png', '2015-10-26 23:00:00'),
(8, 'BREAKING NEWS: Boyband SIDE2SIDE gaat uit elkaar!', 'De geruchten zijn helaas waar, de boyband Side 2 Side gaat uit elkaar! Dat maakte de boyband tijdens de persconferentie van 21 Mei bekend. \r\nNa het grote succes met het nummer kuss mich jetzt vonden het jongens het wel mooi geweest. Zij krijgen zoveel aandacht van de media dat ze het even rustig aan willen gaan doen. De band vertelde dat zij te veel selfies moesten maken, heel veel handtekeningen moesten uitdelen en de vrouwen niet van hun waren af te slaan.\r\nMaar de Band heeft beloofd om nog terug te komen met 1 nummer als afscheidnummer plus nog een afscheidsconcert.\r\n Zou jij graag nog 1 laatste show willen zien? #side2side #boyband\r\n\r\n', 'image/S2Sstopt.png', '2016-05-21 17:04:09');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `Product_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_article` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  PRIMARY KEY (`Product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci AUTO_INCREMENT=6 ;

--
-- Gegevens worden geëxporteerd voor tabel `shop`
--

INSERT INTO `shop` (`Product_id`, `image_article`, `price`, `amount`, `Title`) VALUES
(1, 'image/merchandies/petBlackS2S.jpg', '€ 19,99', '<select>\r\n  <option value="1">1</option>\r\n  <option value="2">2</option>\r\n<option value="2">2</option>\r\n<option value="3">3</option>\r\n<option value="4">4</option>\r\n<option value="5">5</option>\r\n<option value="6">6</option>\r\n</select>', 'Black hat with forget My Name'),
(2, 'image/merchandies/WhiteShirtS2S.jpg', '€ 24,99', '<select>\r\n  <option value="1">1</option>\r\n  <option value="2">2</option>\r\n<option value="2">2</option>\r\n<option value="3">3</option>\r\n<option value="4">4</option>\r\n<option value="5">5</option>\r\n<option value="6">6</option>\r\n</select>', 'white shirt with logo'),
(5, 'image/merchandies/whiteShirtS2SFmN.jpg', '€ 24,99', '<select>\r\n  <option value="1">1</option>\r\n  <option value="2">2</option>\r\n<option value="2">2</option>\r\n<option value="3">3</option>\r\n<option value="4">4</option>\r\n<option value="5">5</option>\r\n<option value="6">6</option>\r\n</select>', 'White Shirt With Side2Side ft Rene Froger');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tour2`
--

CREATE TABLE IF NOT EXISTS `tour2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `venue` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci AUTO_INCREMENT=20 ;

--
-- Gegevens worden geëxporteerd voor tabel `tour2`
--

INSERT INTO `tour2` (`id`, `date`, `venue`, `city`, `country`) VALUES
(2, '18-10-2015 - 20:00', 'Atlas Theater', 'Emmen', 'The Netherlands'),
(6, '30-11-2015 - 19:30', 'Theater Hangaar', 'Katwijk', 'The Netherlands'),
(7, '19-12-2015 - 20:00', 'wilmink Theater', 'Enschede', 'The netherlands'),
(8, '04-01-2016 - 20:00', 'Stads schouwburg', 'Nijmegen', 'The Netherlands'),
(9, '18-02-2016 - 22:00', 'Stads schouwburg ', 'Antwerpen', 'Belgium'),
(12, '03-03-2016 - 16:00', 'Stads teather', 'Zoetermeer', 'The Netherlands'),
(13, '16-03-2016 - 22:15', 'Arena', 'Amsterdam', 'The Netherlands'),
(14, '03-03-2016 - 16:00', 'Stads teather', 'Zoetermeer', 'The Netherlands'),
(15, '16-03-2016 - 22:15', 'Arena', 'Amsterdam', 'The Netherlands'),
(16, '04-04-2016 - 19:30', 'Heineken Music Hall', 'Amsterdam', 'The Netherlands'),
(17, '12-04-2016 - 21:00', 'Heineken Music Hall', 'Amsterdam', 'The Netherlands'),
(18, '24-05-2016 - 21:00', 'Winkelcentrum Overhees', 'Soest', 'The Netherlands'),
(19, '24-06-2016 - 21:30', 'Muziek plein', 'Valkenswaard ', 'The Netherlands');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
