-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 09:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `picture`, `description`) VALUES
(1, 'Roeitrainer', '/Pictures/roeitrainer.png', ''),
(2, 'Crosstrainer', '/Pictures/crosstrainer.png', ''),
(3, 'Hometrainer', '/Pictures/hometrainer.png', ''),
(4, 'Loopband', '/Pictures/loopbanden.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `opening_hours`
--

CREATE TABLE `opening_hours` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `open_time` varchar(255) NOT NULL,
  `closing_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opening_hours`
--

INSERT INTO `opening_hours` (`id`, `day`, `open_time`, `closing_time`) VALUES
(1, 'Maandag', '07:00', '20:00'),
(2, 'Dinsdag', '08:00', '20:00'),
(3, 'Woensdag', '07:00', '20:00'),
(4, 'Donderdag', '08:00', '20:00'),
(5, 'Vrijdag', '07:00', '20:30'),
(6, 'Zaterdag', '08:00', '13:00'),
(7, 'Zondag', '08:00', '13:00');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(10) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `price`, `type`, `description`, `user_id`) VALUES
(1, '12.50', 'Maand abonnement', '* Makkelijker te vernieuwen. <br>\n* Meer bedenk  ruimte.', 0),
(2, '100.00', 'Jaar abonnement', '* Voor de sport junkies! <br>\n* Volledigere  keuzen.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `picture`, `description`, `category_id`) VALUES
(1, 'Focus Fitness Fox 3', '/img/categories/crosstrainer/cr1.jpg', 'De Focus Fitness Fox 3 is de ideale crosstrainer voor iedere thuissporter. Deze crosstrainer geeft je een stabiele training en is fluisterstil in gebruik. De verstelbare voetpedalen van de Fox 3 maken deze crosstrainer geschikt voor verschillende lichaamslengtes. Daarnaast maakt het vliegwiel, met een gewicht van 7 kg, je training comfortabel en zorgt dit vliegwiel voor een mooie ronde rotatie. Door deze factoren heeft de Focus Fitness Fox 3 in het verleden diverse Kieskeurig awards gewonnen.', 2),
(5, 'Focus Fitness Fox 4', '/img/categories/crosstrainer/cr2.jpg', 'Met de Focus Fitness Fox 4 haal je een uitstekende crosstrainer in huis. Deze crosstrainer biedt je met het zware vliegwiel aan de voorkant, de hoge mate van stabiliteit en de longitudinale pas een unieke fitnesservaring in je eigen huis! De Focus Fitness Fox 4 is een hoogwaardige frontcrosstrainer met een uitstekende prijs-kwaliteitverhouding.\n\n\n', 2),
(7, 'Focus Fitness Fox 3 iPlus', '/img/categories/crosstrainer/cr3.jpg', 'De Focus Fitness Fox 3 iPlus is de ideale crosstrainer voor de thuissporter. De Fox 3 iPlus is niet alleen stabiel en sterk, maar ook nog eens geruisloos. Naast een vliegwiel van 7 kg en verstelbare voetpedalen is de Fox 3 iPlus voorzien van de nieuwste technieken. Denk hierbij aan de ingebouwde Bluetooth functie waarmee de computer van de crosstrainer contact maakt met je tablet of smartphone. Hierdoor neemt je tablet of smartphone de functie van trainingscomputer over en kun je met zeer interessante app’s interactief trainen.', 2),
(8, 'Focus Fitness Fox 3 HRC', '/img/categories/crosstrainer/cr4.jpg', 'De Fox 3 HRC is een crosstrainer van Focus Fitness met een uitstekende prijs-kwaliteitverhouding. Door de grote keuze aan trainingsprogramma\'s raak je nooit uitgetraind en de trainingscomputer geeft je inzicht in al je prestaties.\n\n\n', 2),
(9, 'Focus Fitness Senator iPlus', '/img/categories/crosstrainer/cr5.jpg', 'De strakke Focus Fitness Senator iPlus Crosstrainer biedt je een breed scala aan mogelijkheden en voorziet je van de meest moderne technieken. Zo is de Senator voorzien van een stabiel in totaliteit 67 kg wegend frame en een 12 kg zwaar frontwheel wat zorgt voor een soepele en efficiënte work-out. Of je nu een startende of meer ervaren sporter bent de Senator iPlus biedt je voldoende uitdaging tijdens je training.\n', 2),
(10, 'Focus Fitness Fox 5 HRC', '/img/categories/crosstrainer/cr6.jpg', 'De Focus Fitness Fox 5 HRC is dankzij de zeer hoge kwaliteit en betaalbare prijs niet voor niets een van onze bestverkochte en best beoordeelde crosstrainers. Mede dankzij het vliegwiel van 10 kg zorgt de Fox 5 ervoor dat je altijd op een natuurlijke en soepele manier kunt trainen. Of je de Fox 5 gebruikt voor revalidatie, in beweging wilt blijven of er intensief gebruik van wilt maken. Deze crosstrainer is geschikt voor iedereen! En dat blijkt: in het verleden heeft de Focus Fitness Fox 5 crosstrainer een Kieskeurig Review Award gewonnen dankzij de positieve reviews van consumenten!\n', 2),
(11, 'Life Fitness E1 Track Connect', '/img/categories/crosstrainer/cr7.jpg', 'De Life Fitness E1 Track Connect Crosstrainer staat voor sporten op een comfortabele en natuurlijke manier. De ellipsvormige beweging van de Life Fitness E1 komt dicht in de buurt van je eigen voetstap. Deze beweging geeft weinig belasting op je lichaam en past bij ieder sportniveau.', 2),
(13, 'Kettler Optima 800', '/img/categories/crosstrainer/cr6.jpg', 'De Kettler Optima 800 Crosstrainer heeft een breed scala aan weerstandsniveaus en trainingsprogramma\'s. Ideaal  voor mensen die er graag voor gaan en hun workout helemaal zelf willen inrichten.', 2),
(14, 'Octane Ro Max ', '/img/categories/roeitrainer/rt1.jpg', 'De Octane Ro Max Roeitrainer is een innovatieve roeitrainer waarop Octane al haar technische expertise heeft toegepast. Met deze roeitrainer voer je total-body trainingen uit waarbij je echt alles uit jezelf haalt.', 1),
(15, 'Life Fitness Row GX ', '/img/categories/roeitrainer/rt2.jpg', 'De Life Fitness Row GX is een uitdagende \"full-body\" roeitrainer. Realistische waterweerstand en goede bewegingen geven je het gevoel dat je echt in het water roeit. Net als in echt water neemt de weerstand exponentieel toe.', 1),
(16, 'Finnlo AQUON Evolution', '/img/categories/roeitrainer/rt3.jpg', 'Deze roeitrainer is mooi vormgegeven en biedt u alles wat u van een roeitrainer mag verwachten. De roeitrainer heeft 16 weerstand niveau\'s en is snel opklapbaar. ', 1),
(17, 'Finnlo Maximum Inspire CR2.5', '/img/categories/roeitrainer/rt4.jpg', 'De Inspire CR2.5 beschikt over een vliegwiel van 14 kg en een bi-directionele magnetische weerstand, waardoor je ongelimiteerd de weerstand kunt opbouwen. Via het manuele programma bepaal je zelf met welke weerstand je traint.', 1),
(18, 'First Degree Fitness Predator', '/img/categories/roeitrainer/rt5.jpg', 'De First Degree Fitness Predator E620 Handroeier is gemaakt voor krachtige oefeningen op hoge intensiteit. Deze \'upper body ergometer\' van commerciële kwaliteit levert prestaties om zelfs de meest veeleisende fitness fans tevreden te stellen.', 1),
(19, 'First Degree Fitness PRO XL', '/img/categories/roeitrainer/rt6.jpg', 'De First Degree Fitness Mega PRO XL Roeitrainer is het beste wat First Degree op dit moment te bieden heeft voor fanatieke roeiers. De maximale weerstand van de extra grote watertank ligt 65% hoger dan bij andere roeitrainers van dit merk.', 1),
(20, 'NordicTrack RW900', '/img/categories/roeitrainer/rt7.jpg', 'De NordicTrack RW900 Roeitrainer is een roeitrainer die je alles biedt wat je nodig hebt.Hij heeft maar liefst 26 weerstandsniveaus, een interactief HD touchscreen en toegang tot real-life roei omgevingen. ', 1),
(21, 'WaterRower Club', '/img/categories/roeitrainer/rt8.jpg', 'Maak kennis met de ultieme roeimachine: de WaterRower. Na jarenlang geëxperimenteerd te hebben met andere weerstandsvormen zijn de techneuten het erover eens dat alleen water aan de specifieke eisen van een roeimachine kan voldoen.', 1),
(22, 'Tunturi Performance E50', '/img/categories/hometrainer/ht1.jpg', 'De Tunturi Performance E50 Hometrainer maakt je training breder. De vele programma variaties bieden je zowel uitdaging als afwisseling. De Performance E50 hometrainer heeft er 20. Een handmatig programma voor volledige controle, vier beginner programma\'s, 4 gevorderden programma\'s, 4 sporty programma\'s, 4 hartslag gestuurde programma\'s, een wattage programma, een hartslag herstel programma en een body fat programma. Het wattage programma reikt van 10 tot 350 Watt in stappen van 5 Watt. De meeste van deze programma\'s passen zelf de weerstand van de hometrainer aan. Natuurlijk kun je altijd zelf een andere weerstand instellen als je wilt met de draaiknop op het display. Voor meer trainingsmogelijkheden kun je de apps iConsole+ , Kinomap, Tunturi routes en Zwift downloaden op je smartphone of tablet, deze plaats je vervolgens in de ingebouwde tablethouder.', 3),
(23, 'Flow Fitness Pro UB5i', '/img/categories/hometrainer/ht2.jpg', 'De Flow Fitness Pro UB5i is een hometrainer die staat voor hoge kwaliteit en veiligheid, gecombineerd met eindeloze trainingsmogelijkheden. De hometrainer biedt maar liefst 24 verschillende programma\'s waaruit je kunt kiezen. Deze programma\'s variëren van gebruikersprogramma\'s en een handmatig programma tot hartslaggestuurde programma\'s. Deze laatste worden vormgegeven op basis van je hartslag, welke je meet via de hartslagsensoren in de handgrepen. Het is eventueel ook mogelijk om een bluetooth borstband te gebruiken en deze te koppelen aan de hometrainer.\r\n\r\nNatuurlijk is de weerstand ook handmatig in te stellen met behulp van het Smart Wheel of via de Quick Keys in de handgrepen. Het magnetische weerstandssysteem geeft je de keuze uit 69 traininginsniveaus die je instelt in stappen van 5 Watt (10 - 350 Watt). ', 3),
(24, 'Matrix U50', '/img/categories/hometrainer/ht3.jpg', 'De Matrix U50 Hometrainer heeft een uniek framedesign en biedt dankzij twee rondlopende buizen aan onderkant een zeer stabiele constructie waarbij je gemakkelijk op en af stapt. En niet onbelangrijk: het helpt je om van top tot teen een ergonomische trainingspositie aan te nemen. Het Comfort Arc zadel is verstelbaar en eventueel te vervangen door jouw eigen favoriete (race) zadel. Samen met het verstelbare multi-position stuur zorgt dit voor een optimale houding. ', 3),
(25, 'Nautilus U628', '/img/categories/hometrainer/ht4.jpg', 'Deze nieuwe lijn van Nautilus is specifiek gericht op fanatieke sporters die puur prestatiegericht trainen. De lijn van Nautilus is niet te vergelijken met normale fitnessapparatuur voor thuisgebruik.\r\n\r\nDe Nautilus beschikt over 29 trainingsprogramma\'s op basis van interval, uitdagingen, gewichtscontrole en hartslag. Door de combinatie van weerstand en automatische hellingshoek is geen enkele training saai. De U628 is voorzien van twee STN LCD schermen met blauwe achtergrondverlichting voor een betere weergave van je trainingsgegevens. De weerstand van de Nautilus word geregeld door een EN 957 klasse S EMS systeem waardoor de gegeneerde wattage uiterst accuraat wordt weergegeven.', 3),
(26, 'Schwinn Airdyne AD8 Pro', '/img/categories/hometrainer/ht5.jpg', 'De nieuwe Schwinn Airdyne AD8 PRO is de belichaming van de enorme reputatie van Schwinn met volledige aanpassing aan alles wat de fanatieke sporter van tegenwoordig verwacht van een training. De Schwinn AD8 PRO Total Fitness Bike is gebouwd om lang mee te gaan en om enorm zware HIIT trainingen te weerstaan. Elk detail is ontworpen en gekozen voor prestaties en duurzaamheid.', 3),
(27, 'Tunturi Competence F40', '/img/categories/hometrainer/ht6.jpg', 'De Tunturi Competence F40 Hometrainer heeft goede eigenschappen om thuis lange fietstochten af te leggen. Deze toegankelijke hometrainer heeft een lage opstap en een snelstart functie om direct te beginnen. De draaiknop op het display schakelt tussen de 32 verschillende weerstand niveaus om je op je eigen manier te laten trainen. Je kunt ook met programma\'s je niveau kiezen en de weerstand automatisch laten aanpassen. De F40 hometrainer heeft 4 beginner programma\'s, 4 gevorderden programma\'s en 4 sport programma\'s. Verder vind je tussen de 19 programma\'s van deze hometrainer 4 hartslag gestuurde programma\'s, een hartslag herstel test, een body fat programma en het handmatige programma waarmee je zelf alles in stelt. Deze programma\'s kun je uitbreiden met de i-Console+ app, KinoMap app, Tunturi Routes en Zwift via je Android of iOS smartphone of tablet.', 3),
(28, 'Flow Fitness Turner DHT2500i', '/img/categories/hometrainer/ht7.jpg', 'De Flow Fitness Turner DHT2500i Hometrainer is een gebruiksvriendelijke hometrainer met een gemakkelijke navigatie, een lage instap en soepele trapbewegingen. Dit fitnessapparaat is ideaal als je graag wat extra calorieën wilt verbranden en conditie op wilt bouwen, gewoon vanuit je woonkamer. En omdat je de DHT2500i kunt koppelen met je favoriete apps, is trainen vanaf nu nóg leuker.\r\n\r\n\r\n\r\nDe Kinomap app geeft je een uiterst realistische live-ervaring van bestaande en zelfgekozen routes. De weerstand wordt automatisch verhoogd als je bergop gaat en verlaagd bij het afdalen. Er zijn trainingsvideo\'s met verschillende moeilijkheidsgraden. Probeer de doelsnelheid van de video bij te houden of gebruik de multiplayer mode om wedstrijden te houden met je vrienden. Op je scherm zie je hoe ver je bent in je video en welke afstand je nog af moet leggen. Kinomap koppel je ook gemakkelijk aan je favoriete trainingsapps, zoals Strava en Runkeeper. Zo leg je al je trainingen in één overzicht vast.', 3),
(29, 'VirtuFit HTR 1.0', '/img/categories/hometrainer/ht8.jpg', 'De VirtuFit HTR 1.0 Hometrainer voelt net aan alsof je op je eigen fiets zit. De 8 kg roterende massa is een realistische benadering van een echte fiets. De vorm van het zadel, de omwenteling van de trappers en de zithouding zijn dan ook goed afgekeken. Het verstelbare stuur en horizontaal en verticaal verstelbare zadel helpen je de optimale zithouding in te stellen.\r\n\r\nResultaten halen is op de VirtuFit HTR 1.0 Hometrainer veel gemakkelijker dan op je eigen fiets. Deze hometrainer geeft je tijdens het sporten feedback over je tijd, afstand, calorie verbruik, hartslag, snelheid en heeft een odometer en een scan functie', 3),
(30, 'Bowflex Loopband 56', '/img/categories/loopbanden/lb1.jpg', 'De Bowflex Loopband 56 een unieke loopband waarbij je alle mogelijkheden hebt om je prestaties te verbeteren. Naast de vele opties via Explore the World en JRNY heeft deze loopband ook 16 standaardprogramma\'s ingebouwd zodat je ook zonder connectie met een smart device kunt kiezen uit vele mogelijkheden.\r\n\r\nDe Bowflex Loopband 56 is voorzien van 21.5\" HD Touchscreen Stream hierop je favoriete series en films via Netflix, Hulu, Amazon Prime en Disney+ terwijl je aan je conditie werkt. ', 4),
(31, 'VirtuFit Elite TR-500i', '/img/categories/loopbanden/lb2.jpg', 'De VirtuFit Elite TR-500i Loopband is ontworpen voor serieuze hardlopers. Zo\'n loopband heeft andere eigenschappen dan een model waar je een uurtje in het weekend op loopt. De VirtuFit Elite TR-500i is gemaakt van betere materialen en geschikt voor intensief gebruik. Hij heeft weinig onderhoud nodig en waarschuwt je bovendien als het tijd wordt om de band te smeren. Smeerolie om de band te onderhouden is bij deze loopband meegeleverd.\r\n\r\n', 4),
(32, 'Flow Fitness DTM400i', '/img/categories/loopbanden/lb3.jpg', 'De Flow Fitness DTM 400i Loopband heb je in no time in elkaar en de simpele \"touch\" bediening is direct duidelijk. Deze sterke loopband heeft een stille 2.5 pk motor met een maximum snelheid van 14 km/u, welke instelbaar isin stappen van 0,2 km/u.\r\n\r\nDiverse trainingsprogramma\'s passen automatisch de snelheid aan voor een goede training. Deze loopband heeft er 12 in totaal. 1 handmatig programma waarin je alles zelf instelt. 8 voorgeprogrammeerde trainingen en 3 gebruikersprogramma\'s.', 4),
(33, 'Finnlo Technum IV USB', '/img/categories/loopbanden/lb4.jpg', 'De Finnlo Technum IV USB Loopband komt uit de nieuwe generatie Finnlo Loopbanden. Het is een loopband die technische kwaliteit en een mooie vormgeving combineert om stevig te sporten.\r\n\r\nDe Finnlo Technum IV heeft een ruim loopvlak van 51 x 140 cm wat jou volop ruimte geeft voor je hardlooptraining. De moeilijkheidsgraad bepaal je zelf door de gewenste hellingshoek (max. 15%) in te stellen en de gewenste snelheid (max. 18 km/u) te kiezen. Dit doe je allemaal via de gebruiksvriendelijke console of via de sneltoetsen. Hierdoor wordt de controle over jouw hardlooptraining een stuk groter.', 4),
(34, 'Matrix TF50 Loopband', '/img/categories/loopbanden/lb5.jpg', 'Ervaar een natuurlijke en professionele hardlooptraining in je eigen huis met de Matrix TF50 Loopband. Dit stevige frame met geavanceerde loopband is de beste van deze tijd en dat merk je direct. In combinatie met de Matrix XR Console heb je ook nog eens de mogelijkheid om gebruik te maken van verschillende programma\'s en ben je verbonden met je favoriete trainings apps.', 4),
(35, 'Flow Fitness Runner DTM2000i', '/img/categories/loopbanden/lb6.jpg', 'De stalen constructie van deze loopband is ontworpen voor een belasting tot maar liefst 150 kg. Dat de loopband zo sterk is, zie je ook terug in het ontwerp. De DTM2000i heeft een stoer en robuust uiterlijk en staat ontzettend stabiel op de vloer.\r\n\r\nOok qua loopruimte doet deze Runner DTM2000i zeker niet onder aan andere populaire loopbanden. Het grote loopvlak met Shockx  dempers zorgt ervoor dat een training op deze runner comfortabel is, zonder je pezen en gewrichten teveel te belasten.', 4),
(36, 'VirtuFit Elite Smart Touch', '/img/categories/loopbanden/lb7.jpg', 'De VirtuFit Elite Smart Touch Loopband bestaat uit een zeer stevig frame met verschillende greepmogelijkheden dankzij de ergonomische side rails en handle bar. De loopband heeft een ruim loopvlak van 140 x 46 cm waarop je snelheden kunt lopen variërend van 0,8 tot 18 km/u. Dit doe je zonder je gewrichten teveel te belasten. De loopband beschikt namelijk over een hoogwaardig Rubber Shock Absorption dempingsysteem.\r\n\r\n', 4),
(37, 'Hammer Life Runner LR22i TFT', '/img/categories/loopbanden/lb8.jpg', 'De Hammer Life Runner LR22i TFT Loopband is ontwikkeld om jou te helpen bij je fitnessdoelen. Met deze ultramoderne loopband van Hammer train je fanatiek, terwijl je geniet van multimedia via de console. Bekijk een serie of gebruik je favoriete trainingsapp voor nog meer trainingsplezier. Eén ding is zeker, met deze loopband verveel je je nooit meer ', 4),
(38, 'knvad', '20140722_183857_Android.jpg', 'nnk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `description` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `rating` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `date`, `description`, `product_id`, `user_id`, `rating`) VALUES
(1, 'Jan van Vliet', '2021-11-18 14:13:38', 'Een prima crosstrainer', 1, 2, 0),
(2, 'Jan van der Wal', '2021-11-18 14:11:10', 'Crosstrainer is moeilijk verstelbaar', 1, 2, 0),
(9, 'Marcel van der Linden', '2021-11-18 14:11:23', 'Prima apparaat', 1, 2, 0),
(10, 'Marcel van der Linden', '2021-11-18 14:11:29', 'Prima apparaat', 1, 2, 0),
(11, 'Marcel van der Linden', '2021-11-18 14:11:33', 'Prima apparaat', 1, 2, 0),
(12, 'Pietje ', '2021-11-18 14:11:36', 'Precies', 7, 2, 0),
(14, 'Okke van der Linden', '2021-11-18 14:11:41', 'Best een prima apparaat', 7, 2, 0),
(15, 'Hero', '2021-11-18 14:11:44', 'Best OK', 7, 2, 0),
(16, 'Jan van Vliet', '2021-11-18 14:11:47', 'Apparaat is niet al te best', 7, 2, 0),
(17, 'o', '2021-11-18 14:09:56', '                                        kk', 21, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `birthday`, `role`) VALUES
(1, 'Jeffrey', 'Klein', 'jeffreyklein@healthone.com', 'Janisboer123!', '1992-12-13', 'admin'),
(2, 'Roy', 'Springer', 'r.springer@gmail.com', 'Ikbendocent123!', '1992-01-01', 'member'),
(14, 'Sanne', 'Esajas', 's.j.esajas@live.nl', 'hHpq6bCB!oXop3Rj', '1997-03-03', 'member'),
(15, 'Jan', 'vliet', 'j@j.nl', 'j', '2021-11-11', 'admin'),
(16, 'Johnty', 'van Delden', 'hoi@hoi.com', 'tbYHc&#EcqNYBDM7', '2003-12-01', 'member'),
(17, 'hoh', 'bdhwif', 'd@d.nl', 'ijeqifgnigonrwg', '2021-12-28', 'member'),
(18, 'Bradley', 'Kook', 'b@k.com', '123456', '2000-01-17', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opening_hours`
--
ALTER TABLE `opening_hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `opening_hours`
--
ALTER TABLE `opening_hours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
