-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 10:43 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'root', 'root', '2020-01-21 15:48:07'),
(2, 'kversic', 'karloversic12', '2020-01-28 22:34:00'),
(3, 'fgrenko', 'frangrenko13', '2020-01-28 22:35:15'),
(4, 'msrica', 'mateosrica14', '2020-01-28 22:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `automobili`
--

CREATE TABLE `automobili` (
  `id` int(4) NOT NULL,
  `postId` int(4) DEFAULT NULL,
  `naslov` varchar(30) DEFAULT NULL,
  `post` varchar(300) DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(20) DEFAULT NULL,
  `komentar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `automobili`
--

INSERT INTO `automobili` (`id`, `postId`, `naslov`, `post`, `date_time`, `username`, `komentar`) VALUES
(1, NULL, 'Mijenjam auto', 'Uz mogucu malu nadoplatu, zanima me mijenjanje Fitat 500 za bilo koji auto model Tesla. Javite mi se na broj 0983387641', '2020-01-28 23:26:35', 'Ozbiljnikupac', NULL),
(2, NULL, 'Bmw 2007', 'Zelim bilo koji BMW godiste 2007 ili starije. Kontakt-0997534785', '2020-01-28 23:34:37', 'Zelimauto', NULL),
(3, NULL, 'Meet', 'Zna li netko kada je meet od kamiona u Zagrebu?', '2020-01-29 19:01:27', 'Zainteresirani', NULL),
(5, NULL, 'Izbor', 'Mogu birati izmedu Golfa GTI 2007 godiste ili Corsa OPC 2010. Sto preporucate?', '2020-01-29 19:06:34', 'Zainteresirani', NULL),
(6, 1, NULL, 'Mislim da bi tebi trebalo malo pomoci ako mislis da ce ti netko to prihvatiti', '2020-01-29 21:28:05', 'Svepet', 'true'),
(7, 5, NULL, 'Golf all day, ljepsi je i ljepse se vozi', '2020-01-29 21:52:54', 'Nemaproblema', 'true'),
(8, 2, NULL, 'Nemam sry', '2020-01-29 22:39:14', 'Tuitamo', 'true'),
(9, 3, NULL, '28.veljace 2020.', '2020-01-29 22:39:36', 'Tuitamo', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `filozofija`
--

CREATE TABLE `filozofija` (
  `id` int(4) NOT NULL,
  `postId` int(4) DEFAULT NULL,
  `naslov` varchar(30) DEFAULT NULL,
  `post` varchar(300) DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(20) DEFAULT NULL,
  `komentar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filozofija`
--

INSERT INTO `filozofija` (`id`, `postId`, `naslov`, `post`, `date_time`, `username`, `komentar`) VALUES
(1, NULL, 'Cemu?', 'Cemu se nadati ako vise osoba ne moze ni kupit auto bez da mu se pokvari nakon 5 km. Mislim necu se ubiti ali ono. Imati li vjere u ljude ili ne?', '2020-01-28 23:39:27', 'Zelimauto', NULL),
(2, NULL, 'Strast', 'Bez muzike, zivot je pogrska.  Friedrich Nietzsche', '2020-01-29 15:59:14', 'root', NULL),
(3, NULL, 'Trazim citate', 'Slobodno šaljite najdraze citate poznatih filozofa', '2020-01-29 19:02:49', 'Zainteresirani', NULL),
(4, NULL, 'My fave', 'Ne možes 2 puta uci u istu rijeku', '2020-01-29 19:05:06', 'Zainteresirani', NULL),
(5, 1, NULL, 'Ej frende pogledaj mi ime', '2020-01-29 21:29:52', 'Svepet', 'true'),
(6, 2, NULL, 'Predivno, nije mogao ljepse rec', '2020-01-29 21:54:42', 'Nemaproblema', 'true'),
(7, 4, NULL, '<3<3<3<3', '2020-01-29 21:54:55', 'Nemaproblema', 'true'),
(8, 3, NULL, 'Samo citaj po ovome haha', '2020-01-29 22:22:41', 'Volimmacke', 'true'),
(9, 1, NULL, 'Nice', '2020-01-29 22:22:52', 'Volimmacke', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `hrana_i_recepti`
--

CREATE TABLE `hrana_i_recepti` (
  `id` int(4) NOT NULL,
  `postId` int(4) DEFAULT NULL,
  `naslov` varchar(30) DEFAULT NULL,
  `post` varchar(300) DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(20) DEFAULT NULL,
  `komentar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hrana_i_recepti`
--

INSERT INTO `hrana_i_recepti` (`id`, `postId`, `naslov`, `post`, `date_time`, `username`, `komentar`) VALUES
(1, NULL, 'Kiflice', '30 dg brasna, 20 dg secera, 10 dg maslaca, 8 dg oraha i 1 jaje. Smiksati sve u tijesto i grijati u pecnici na 180 stupnjeva 15 minuta', '2020-01-29 15:48:48', 'Ozbiljnikupac', NULL),
(2, NULL, 'Popularnost ove kategorije', 'Zasto nitko ne posta na ovu kategoriju? Steta sta nije aktivno ovo jer mi je ovo najdrazi forum.', '2020-01-29 19:08:44', 'Zainteresirani', NULL),
(3, 1, NULL, 'Zvuci super, ali sam sve to smiksao i bilo je dosta ljepljivo, svejedno sam pojeo smjesu. 3/10', '2020-01-29 21:30:58', 'Svepet', 'true'),
(4, 2, NULL, 'Meni isto, bas mi je zao', '2020-01-29 21:55:13', 'Nemaproblema', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `humor`
--

CREATE TABLE `humor` (
  `id` int(4) NOT NULL,
  `postId` int(4) DEFAULT NULL,
  `naslov` varchar(30) DEFAULT NULL,
  `post` varchar(300) DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(20) DEFAULT NULL,
  `komentar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `humor`
--

INSERT INTO `humor` (`id`, `postId`, `naslov`, `post`, `date_time`, `username`, `komentar`) VALUES
(1, NULL, 'Kratki vic', 'Pričaju dvije susjede:\r\n– Znaš da je Marija umrla u snu?\r\n– A, joj, al će se iznenadit kad se probudi.', '2020-01-28 23:20:54', 'Ozbiljnikupac', NULL),
(2, NULL, 'Fata na intenzivnoj', 'Leži Fata na intenzivnoj. Izlazi doktor i kaže Muji: \"Fata ne izgleda dobro.\"\r\n-> Znam, doktore, ali dobro kuha i dobra je s djecom.', '2020-01-28 23:21:30', 'Ozbiljnikupac', NULL),
(3, NULL, 'Kako se zove srna iz Afrike', 'Crna', '2020-01-28 23:22:49', 'Ozbiljnikupac', NULL),
(4, NULL, 'Glavni uzrok razvoda?', 'Brak', '2020-01-28 23:45:27', 'Zelimauto', NULL),
(5, 2, NULL, 'LOL', '2020-01-29 21:35:15', 'Svepet', 'true'),
(6, 4, NULL, 'HAHAHAHHA', '2020-01-29 21:55:27', 'Nemaproblema', 'true'),
(7, 1, NULL, 'A brizna', '2020-01-29 22:26:07', 'Volimmacke', 'true'),
(8, 4, NULL, 'Ahaaa hahhaa\r\n', '2020-01-29 22:26:17', 'Volimmacke', 'true'),
(9, 3, NULL, 'Ne kuzim', '2020-01-29 22:39:52', 'Tuitamo', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `kupnja`
--

CREATE TABLE `kupnja` (
  `id` int(4) NOT NULL,
  `postId` int(4) DEFAULT NULL,
  `naslov` varchar(30) DEFAULT NULL,
  `post` varchar(300) DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(20) DEFAULT NULL,
  `komentar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kupnja`
--

INSERT INTO `kupnja` (`id`, `postId`, `naslov`, `post`, `date_time`, `username`, `komentar`) VALUES
(9, NULL, 'Kupujem sito za pijesak', 'Kupujem sito do 200 kn sam spreman platiti.\r\nTreba biti dobro i za fini pijesak.\r\nHitno!', '2020-01-28 23:12:24', 'Ozbiljnikupac', NULL),
(10, NULL, 'Tipkovnica', 'Trazim tipkovnicu do 50kn. Bilo b super kada bi bila mehanicka, samo da nije optomehanicka jer je to bas smece. Kontakt u komentare :)', '2020-01-29 19:11:05', 'Zelimauto', NULL),
(11, NULL, 'Reket za tenis', 'Kupujem head reket za tenis, korišten do 2 god, sa bijelom trakom. Do 98 kn. Mobitel 099734652', '2020-01-29 19:22:57', 'Ozbiljnikupac', NULL),
(12, NULL, 'Boca za vodu', 'Trebam li objasnjavati?', '2020-01-29 19:23:35', 'Zelimauto', NULL),
(13, 12, NULL, 'Ja imam jednu, blago koristena, 10 kn?', '2020-01-29 21:35:40', 'Svepet', 'true'),
(14, 10, NULL, 'Prodati cu ti za 45, mehanicka je', '2020-01-29 21:56:04', 'Nemaproblema', 'true'),
(15, 10, NULL, 'btw mobitel 099853247', '2020-01-29 21:56:32', 'Nemaproblema', 'true'),
(16, 11, NULL, 'Imam tocno takav, 95kn', '2020-01-29 22:40:21', 'Tuitamo', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `politika`
--

CREATE TABLE `politika` (
  `id` int(11) NOT NULL,
  `postId` tinyint(4) DEFAULT NULL,
  `naslov` text DEFAULT NULL,
  `post` text DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(30) DEFAULT NULL,
  `komentar` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `politika`
--

INSERT INTO `politika` (`id`, `postId`, `naslov`, `post`, `date_time`, `username`, `komentar`) VALUES
(10, NULL, 'Koliko ima politicara u RH', 'Uvijek me zanimalo to, evo ako netko zna moze slobodno mi reci', '2020-01-29 15:51:10', 'root', NULL),
(11, NULL, 'SPD ILI HDZ', 'Evo ja mislim da nijedno ni drugo nije oke i rekao bi HSLS, ali ocito je samo izmedu te 2 stranke pa kazem SDP. A vi?', '2020-01-29 19:38:36', 'Zainteresirani', NULL),
(12, NULL, 'Koliko stranki ima u RH?', 'Ima ih 14 jelda', '2020-01-29 19:40:09', 'Zainteresirani', NULL),
(13, NULL, 'Predsjednik?', 'Milanović?', '2020-01-29 19:42:52', 'Zelimauto', NULL),
(14, 10, NULL, '15, nekad i 16', '2020-01-29 21:23:33', 'Svepet', 0),
(15, 11, NULL, 'HDZ', '2020-01-29 21:46:13', 'Nemaproblema', 0),
(16, 13, NULL, 'Plenkovic?', '2020-01-29 21:49:01', 'Nemaproblema', 0),
(17, 12, NULL, 'Cca da', '2020-01-29 21:50:03', 'Nemaproblema', 0),
(18, 10, NULL, 'Ima ih zapravo 167', '2020-01-29 21:50:20', 'Nemaproblema', 0),
(19, 10, NULL, 'Slazem se', '2020-01-29 21:58:45', 'Volimmacke', 0),
(20, 11, NULL, 'Necemo komentirati kako je krivo napisao SDP? U redu\r\n', '2020-01-29 21:59:16', 'Volimmacke', 0),
(21, 11, NULL, 'SDR', '2020-01-29 22:35:16', 'Tuitamo', 0),
(22, 12, NULL, 'da', '2020-01-29 22:35:29', 'Tuitamo', 0),
(23, 13, NULL, 'Kolinda?', '2020-01-29 22:35:37', 'Tuitamo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prijedlozi_pohvale_kritike`
--

CREATE TABLE `prijedlozi_pohvale_kritike` (
  `id` int(4) NOT NULL,
  `postId` int(4) DEFAULT NULL,
  `naslov` varchar(30) DEFAULT NULL,
  `post` varchar(300) DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(20) DEFAULT NULL,
  `komentar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prijedlozi_pohvale_kritike`
--

INSERT INTO `prijedlozi_pohvale_kritike` (`id`, `postId`, `naslov`, `post`, `date_time`, `username`, `komentar`) VALUES
(1, NULL, 'Nema primjedbi', 'Sve 5 frende', '2020-01-28 23:41:27', 'Zelimauto', NULL),
(2, NULL, 'Pristupacnost', 'Sve je pristupacno i lijepo izgleda. Sve pohvale editoru.', '2020-01-29 19:49:38', 'Ozbiljnikupac', NULL),
(3, NULL, 'Odlicno funkcionira stranica', 'Odlicni posao je backend developer napravio', '2020-01-29 19:49:38', 'Zelimauto', NULL),
(4, 2, NULL, 'Slazem se', '2020-01-29 21:56:44', 'Nemaproblema', 'true'),
(5, 3, NULL, 'Backend kralj', '2020-01-29 22:26:35', 'Volimmacke', 'true'),
(6, 1, NULL, 'U potpunosti se slazem', '2020-01-29 22:31:22', 'Volimmacke', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `prodaja`
--

CREATE TABLE `prodaja` (
  `id` int(4) NOT NULL,
  `postId` int(4) DEFAULT NULL,
  `naslov` varchar(30) DEFAULT NULL,
  `post` varchar(300) DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(20) DEFAULT NULL,
  `komentar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodaja`
--

INSERT INTO `prodaja` (`id`, `postId`, `naslov`, `post`, `date_time`, `username`, `komentar`) VALUES
(1, NULL, 'Bmw 1998', 'Prodajem Bmw za dijelove, cim sam ga kupio se pokvario. Ostavite kontakt u komentarima', '2020-01-28 23:35:47', 'Zelimauto', NULL),
(4, NULL, 'Stolni tenis', 'Stol za stolni tenis, 2000kn minimalno, dobar je. Novi je, dobio sam ga za bozic, jednom koristen.', '2020-01-29 19:59:19', 'Ozbiljnikupac', NULL),
(5, NULL, 'Guma za biciklu', 'Prodajem gumu, velicina 26, 50 kn max, ne primam skuplje.', '2020-01-29 19:59:19', 'Zelimauto', NULL),
(6, NULL, 'Pas', 'Prodajem 2 stenca, jedan se zove Mali, a drugi Josip. Jedan je bigl, a drugi pitbull.', '2020-01-29 20:07:48', 'Zainteresirani', NULL),
(7, NULL, 'Gitara', 'Darovao mi ju je Slash, zelio bi dobiti barem 200000 kn za nju. Akusticna je i jako se lijepo cuje.', '2020-01-29 20:07:48', 'Zelimauto', NULL),
(8, 6, NULL, 'Ako je Josip pitbull, bi mogao njega kupiti?', '2020-01-29 21:36:22', 'Svepet', 'true'),
(9, 4, NULL, 'Dam ti 2500 min mob:095745328', '2020-01-29 22:29:04', 'Volimmacke', 'true'),
(10, 1, NULL, 'Kupujem za 1000kn KONTAKT:099834762', '2020-01-29 22:32:39', 'Volimmacke', 'true'),
(11, 5, NULL, 'Moze', '2020-01-29 22:41:02', 'Tuitamo', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `religija`
--

CREATE TABLE `religija` (
  `id` int(4) NOT NULL,
  `postId` int(4) DEFAULT NULL,
  `naslov` varchar(30) DEFAULT NULL,
  `post` varchar(300) DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(20) DEFAULT NULL,
  `komentar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `religija`
--

INSERT INTO `religija` (`id`, `postId`, `naslov`, `post`, `date_time`, `username`, `komentar`) VALUES
(1, NULL, 'Mir', 'A da jednostavno svi prihvate da drugi vjeruju u sta god hoce?', '2020-01-28 23:27:51', 'Ozbiljnikupac', NULL),
(2, 1, NULL, 'Ne', '2020-01-29 21:36:33', 'Svepet', 'true'),
(3, 1, NULL, 'Ne', '2020-01-29 21:56:54', 'Nemaproblema', 'true'),
(4, 1, NULL, 'Ne', '2020-01-29 22:32:56', 'Volimmacke', 'true'),
(5, 1, NULL, 'Ne\r\n', '2020-01-29 22:41:18', 'Tuitamo', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `skola`
--

CREATE TABLE `skola` (
  `id` int(11) NOT NULL,
  `postId` tinyint(4) DEFAULT NULL,
  `naslov` text DEFAULT NULL,
  `post` text DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(30) DEFAULT NULL,
  `komentar` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skola`
--

INSERT INTO `skola` (`id`, `postId`, `naslov`, `post`, `date_time`, `username`, `komentar`) VALUES
(3, NULL, 'Kupiti li knjige za drugu god\r\n', 'Da kupujem ili kopiram knjige za drugu god. Mislim kupovina je za one malo imucnije, a ja nisam bas to, ali ne zelim da mi misle da dijete siromasno\r\n', '2020-01-28 23:44:43', 'Zelimauto', NULL),
(4, NULL, 'PSHG ili Rijecka?', 'Pitanje je doste self-explanatory', '2020-01-29 21:04:07', 'Nemaproblema', NULL),
(5, NULL, 'RiTeh ili FER?', 'Zelim samo posao nakon kao strojar', '2020-01-29 21:04:07', 'Volimmacke', NULL),
(6, NULL, 'Je li vjeroucitelj PSHG normalan ili ne?', 'Smatram da je normalan, ali ga ljudi ne razumiju u potpunosti. Steta jer mozda govori i pametne stvari.', '2020-01-29 21:08:31', 'Aktivniuser', NULL),
(7, NULL, 'Najboljji profesor na RiTehu?', 'Mislim da je profesor iz RWA. Odlicno se snasao i simpatcno i zanimljivo predaje.', '2020-01-29 21:08:31', 'Zainteresirani', NULL),
(8, 7, NULL, 'U potpunosti se slazem, nemam nikakvih primjedbi', '2020-01-29 21:26:14', 'Svepet', 0),
(9, 3, NULL, 'Kopiraj, boli te briga za to sta drugi misle', '2020-01-29 21:52:30', 'Nemaproblema', 0),
(10, 5, NULL, 'FER ako si pametan i ne zelis imati zivot, RiTeh ako si pametan i zelis imati zivot lol', '2020-01-29 22:02:52', 'root', 0),
(11, 4, NULL, 'PSHG all day', '2020-01-29 22:37:16', 'Tuitamo', 0),
(12, 6, NULL, 'Oke je decko, predavao mi je jednom\r\n', '2020-01-29 22:38:55', 'Tuitamo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `id` int(11) NOT NULL,
  `postId` tinyint(4) DEFAULT NULL,
  `naslov` text DEFAULT NULL,
  `post` text DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(30) DEFAULT NULL,
  `komentar` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`id`, `postId`, `naslov`, `post`, `date_time`, `username`, `komentar`) VALUES
(9, NULL, 'Slaven Belupo u Euroligu', 'Smatram da bi ako ne ove, onda slijedece trebao proci dalje.\r\nImaju potencijala, samo nemaju volje.\r\nUz moj trening, dosli bi do polufinala minimalno', '2020-01-28 23:19:31', 'Ozbiljnikupac', NULL),
(10, NULL, 'Pozicija u odbojci?', 'Pocinjem trenirati odbojku, zanima me koja pozicija bi mi najvise pasala? Visok sam, ali volim igrati obranu.', '2020-01-29 21:19:13', 'Tuitamo', NULL),
(11, NULL, 'Pozicija nogomet', 'Vezni ili golman, volim trcati, ali mi ne ide.', '2020-01-29 21:19:13', 'Aktivniuser', NULL),
(12, NULL, 'Zaledje', 'Sto je i kako izbjeci?', '2020-01-29 21:20:25', 'Zainteresirani', NULL),
(13, NULL, 'Macevanje', 'Postoji li u Rijeci ili okolici i sta trebam za uclaniti se', '2020-01-29 21:20:25', 'Nemaproblema', NULL),
(14, 10, NULL, 'Ako si spretan, najbolje bi ti pasao primac, ali je to i dosta teskaa pozicija sa puno odgovornosti', '2020-01-29 21:24:14', 'Svepet', 0),
(15, 11, NULL, 'Vezni, naucit ces se, bez brige', '2020-01-29 21:50:34', 'Nemaproblema', 0),
(16, 9, NULL, 'Admin, ga moze netko kickat?', '2020-01-29 21:59:36', 'Volimmacke', 0),
(17, 13, NULL, 'Postoji MK Grobnican, trebaju ti ruke i noge ;)', '2020-01-29 22:36:06', 'Tuitamo', 0),
(18, 12, NULL, 'Nez', '2020-01-29 22:36:14', 'Tuitamo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `svakodnevni_zivot`
--

CREATE TABLE `svakodnevni_zivot` (
  `id` int(11) NOT NULL,
  `postId` tinyint(4) DEFAULT NULL,
  `naslov` text DEFAULT NULL,
  `post` text DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(30) DEFAULT NULL,
  `komentar` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `svakodnevni_zivot`
--

INSERT INTO `svakodnevni_zivot` (`id`, `postId`, `naslov`, `post`, `date_time`, `username`, `komentar`) VALUES
(9, NULL, 'Zabava petkom', 'Trazim osobu sa kojim mogu ici van po ljeti, zauzet sam ostatak tjedna tako da mogu samo petkom ici. Mozemo ici digod, samo da bude zabavno', '2020-01-29 15:52:32', 'root', NULL),
(10, NULL, 'Najbolji klub za izlazak Subotom', 'Rakija, Pacalch, Modesto, Insomnia?', '2020-01-29 20:53:07', 'Volimmacke', NULL),
(11, NULL, 'Rijeka PK', 'Hoce li europska prijedstolnica kulture donesti bolje stanje u Rijeku? ', '2020-01-29 20:53:07', 'Nemaproblema', NULL),
(12, NULL, 'Nova epidemija', 'Ima li sanse da je ova nova epidemija nova Black plague?', '2020-01-29 20:57:04', 'Tuitamo', NULL),
(13, NULL, 'Izlozba Ljube De Karine', 'Hoce li ova biti bolja od prosle? Mislim da da. A vi?', '2020-01-29 20:57:04', 'Aktivniuser', NULL),
(14, 12, NULL, 'Postoji, ali mislim da ce se zaustaviti prije nego se prosiri previse', '2020-01-29 21:25:32', 'Svepet', 0),
(15, 11, NULL, 'Nadamo se da oce, samo vrijeme ce pokazati\r\n', '2020-01-29 21:51:03', 'Nemaproblema', 0),
(16, 9, NULL, 'Ja sam slobodan, ionako nista ne radim, kada se nalazimo', '2020-01-29 21:51:59', 'Nemaproblema', 0),
(17, 10, NULL, 'Ovisi, ali sam ja za Rakiju. Personal preference tho', '2020-01-29 22:00:16', 'root', 0),
(18, 13, NULL, 'Ja isto, ali se na predhodnoj bas iskazao', '2020-01-29 22:36:50', 'Tuitamo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'root', 'root@root.com', '$2y$10$3HbXTyiMOzBq8iUHyEsF3OZr5nc2NYogW8qmQ7wvbJhD65p8nGtLa', '2020-01-21 15:48:30'),
(4, 'Ozbiljnikupac', 'hexip57961@cnetmail.net', '$2y$10$v9nf5UONmaH5.ihoFV1wbOJeauVNeVmm26r0SXQyW5QPLNJvLUQgi', '2020-01-28 23:06:29'),
(5, 'Zelimauto', 'letak83196@eroyal.net', '$2y$10$Mvn8G7W80QvH2QKvGmzH4OHUVEWrR5kYg2DEdat4dbKhPxkajbFlK', '2020-01-28 23:32:05'),
(8, 'Zainteresirani', 'jelodag907@repshop.net', '$2y$10$4QrdRVYrO6qausPwlrgC5OlgSTwPpFBoNwqGtja1lKVYzMMyM9a46', '2020-01-29 18:58:21'),
(9, 'Aktivniuser', 'josaf86811@repshop.net', '$2y$10$YjH/VWvXtSudwkHg1LlZe.YFFl0BwYpZ9yg5q/Wpbs2fHrorEyKCi', '2020-01-29 20:09:06'),
(10, 'Tuitamo', 'diyij91160@cityroyal.org', '$2y$10$34otLSktwnfivdJGFSHlb.jZWfnFz.LKYju5ubaeeY4YZO1DrMCam', '2020-01-29 20:10:32'),
(11, 'Volimmacke', 'abdirahim.yaziel@oovy.org', '$2y$10$WL1xFuMPLYDWmJTZngrbAOucusxEkvuHj81Sk6/D8ayH/qXVYzujK', '2020-01-29 20:12:03'),
(12, 'Nemaproblema', 'hokkupetru@enayu.com', '$2y$10$snCGb3u6/sPct5kqZ.7xnuwp5OoxcKSTaeJFwPH3sJ2Rw3rPZtjI6', '2020-01-29 20:13:36'),
(13, 'Svepet', 'pthc@optimaweb.me', '$2y$10$GjrlwmTRGLiuVGc3Otl8FulRbZT5i42zEub//fi3beeMxcw3ouLci', '2020-01-29 20:16:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `automobili`
--
ALTER TABLE `automobili`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filozofija`
--
ALTER TABLE `filozofija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hrana_i_recepti`
--
ALTER TABLE `hrana_i_recepti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humor`
--
ALTER TABLE `humor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kupnja`
--
ALTER TABLE `kupnja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `politika`
--
ALTER TABLE `politika`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prijedlozi_pohvale_kritike`
--
ALTER TABLE `prijedlozi_pohvale_kritike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religija`
--
ALTER TABLE `religija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skola`
--
ALTER TABLE `skola`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `svakodnevni_zivot`
--
ALTER TABLE `svakodnevni_zivot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `automobili`
--
ALTER TABLE `automobili`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `filozofija`
--
ALTER TABLE `filozofija`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hrana_i_recepti`
--
ALTER TABLE `hrana_i_recepti`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `humor`
--
ALTER TABLE `humor`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kupnja`
--
ALTER TABLE `kupnja`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `politika`
--
ALTER TABLE `politika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `prijedlozi_pohvale_kritike`
--
ALTER TABLE `prijedlozi_pohvale_kritike`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prodaja`
--
ALTER TABLE `prodaja`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `religija`
--
ALTER TABLE `religija`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skola`
--
ALTER TABLE `skola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `svakodnevni_zivot`
--
ALTER TABLE `svakodnevni_zivot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
