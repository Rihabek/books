-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 15 Novembre 2019 à 16:35
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `books`
--

-- --------------------------------------------------------

--
-- Structure de la table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `authors`
--

INSERT INTO `authors` (`id`, `name`, `active`) VALUES
(1, 'Chinua Achebe', 1),
(2, 'Hans Christian Andersen', 1),
(3, 'Dante Alighieri', 1),
(4, 'Jane Austen', 1),
(5, 'HonorÃ© de Balzac', 1),
(6, 'Samuel Beckett', 1),
(7, 'Giovanni Boccaccio', 1),
(8, 'Jorge Luis Borges', 1),
(9, 'Emily BrontÃ«', 1),
(11, 'Paul Celan', 1),
(12, 'Louis-Ferdinand CÃ©line', 1),
(13, 'Miguel de Cervantes', 1),
(14, 'Geoffrey Chaucer', 1),
(15, 'Anton Chekhov', 1),
(16, 'Joseph Conrad', 1),
(17, 'Charles Dickens', 1),
(18, 'Denis Diderot', 1),
(19, 'Alfred DÃ¶blin', 1),
(20, 'Fyodor Dostoevsky', 1),
(21, 'George Eliot', 1),
(22, 'Ralph Ellison', 1),
(23, 'Euripides', 1),
(24, 'William Faulkner', 1),
(25, 'Gustave Flaubert', 1),
(26, 'Federico GarcÃ­a Lorca', 1),
(27, 'Gabriel GarcÃ­a MÃ¡rquez', 1),
(28, 'Johann Wolfgang von Goethe', 1),
(29, 'Nikolai Gogol', 1),
(30, 'GÃ¼nter Grass', 1),
(31, 'JoÃ£o GuimarÃ£es Rosa', 1),
(32, 'Knut Hamsun', 1),
(33, 'Ernest Hemingway', 1),
(34, 'Homer', 1),
(35, 'Henrik Ibsen', 1),
(36, 'James Joyce', 1),
(37, 'Franz Kafka', 1),
(38, 'KÄlidÄsa', 1),
(39, 'Yasunari Kawabata', 1),
(40, 'Nikos Kazantzakis', 1),
(41, 'D. H. Lawrence', 1),
(42, 'HalldÃ³r Laxness', 1),
(43, 'Giacomo Leopardi', 1),
(44, 'Doris Lessing', 1),
(45, 'Astrid Lindgren', 1),
(46, 'Lu Xun', 1),
(47, 'Naguib Mahfouz', 1),
(48, 'Thomas Mann', 1),
(49, 'Herman Melville', 1),
(50, 'Michel de Montaigne', 1),
(51, 'Elsa Morante', 1),
(52, 'Toni Morrison', 1),
(53, 'Murasaki Shikibu', 1),
(54, 'Robert Musil', 1),
(55, 'Vladimir Nabokov', 1),
(56, 'George Orwell', 1),
(57, 'Ovid', 1),
(58, 'Fernando Pessoa', 1),
(59, 'Edgar Allan Poe', 1),
(60, 'Marcel Proust', 1),
(61, 'FranÃ§ois Rabelais', 1),
(62, 'Juan Rulfo', 1),
(63, 'Rumi', 1),
(64, 'Salman Rushdie', 1),
(65, 'Saadi', 1),
(66, 'Tayeb Salih', 1),
(67, 'JosÃ© Saramago', 1),
(68, 'William Shakespeare', 1),
(69, 'Sophocles', 1),
(70, 'Stendhal', 1),
(71, 'Laurence Sterne', 1),
(72, 'Italo Svevo', 1),
(73, 'Jonathan Swift', 1),
(74, 'Leo Tolstoy', 1),
(75, 'Mark Twain', 1),
(76, 'Valmiki', 1),
(77, 'Virgil', 1),
(78, 'Vyasa', 1),
(79, 'Walt Whitman', 1),
(80, 'Virginia Woolf', 1),
(81, 'Marguerite Yourcenar', 1),
(82, 'AAAAAshhshs', 1),
(83, 'AAAA', 1),
(84, 'AB', 1);

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `wikipedia_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `image`, `author_id`, `country_id`, `language_id`, `pages`, `wikipedia_link`, `year`, `categories_id`) VALUES
(1, 'Things Fall Apart', NULL, 'public/images/books/things-fall-apart.jpg', 1, 1, 1, 209, 'https://en.wikipedia.org/wiki/Things_Fall_Apart\n', 1958, 0),
(3, 'The Divine Comedy', NULL, 'public/images/books/the-divine-comedy.jpg', 3, 3, 3, 928, 'https://en.wikipedia.org/wiki/Divine_Comedy\n', 1315, 0),
(4, 'The Epic Of Gilgamesh', NULL, 'public/images/books/the-epic-of-gilgamesh.jpg', NULL, 4, 4, 160, 'https://en.wikipedia.org/wiki/Epic_of_Gilgamesh\n', -1700, 0),
(5, 'The Book Of Job', NULL, 'public/images/books/the-book-of-job.jpg', NULL, 5, 5, 176, 'https://en.wikipedia.org/wiki/Book_of_Job\n', -600, 0),
(6, 'One Thousand and One Nights', NULL, 'public/images/books/one-thousand-and-one-nights.jpg', NULL, 6, 6, 288, 'https://en.wikipedia.org/wiki/One_Thousand_and_One_Nights\n', 1200, 0),
(7, 'NjÃ¡l\'s Saga', NULL, 'public/images/books/njals-saga.jpg', NULL, 7, 7, 384, 'https://en.wikipedia.org/wiki/Nj%C3%A1ls_saga\n', 1350, 0),
(8, 'Pride and Prejudice', NULL, 'public/images/books/pride-and-prejudice.jpg', 4, 8, 1, 226, 'https://en.wikipedia.org/wiki/Pride_and_Prejudice\n', 1813, 0),
(9, 'Le PÃ¨re Goriot', NULL, 'public/images/books/le-pere-goriot.jpg', 5, 9, 8, 443, 'https://en.wikipedia.org/wiki/Le_P%C3%A8re_Goriot\n', 1835, 0),
(10, 'Molloy, Malone Dies, The Unnamable, the trilogy', NULL, 'public/images/books/molloy-malone-dies-the-unnamable.jpg', 6, 10, 9, 256, 'https://en.wikipedia.org/wiki/Molloy_(novel)\n', 1952, 0),
(11, 'The Decameron', NULL, 'public/images/books/the-decameron.jpg', 7, 3, 3, 1024, 'https://en.wikipedia.org/wiki/The_Decameron\n', 1351, 0),
(12, 'Ficciones', NULL, 'public/images/books/ficciones.jpg', 8, 11, 10, 224, 'https://en.wikipedia.org/wiki/Ficciones\n', 1965, 0),
(13, 'Wuthering Heights', NULL, 'public/images/books/wuthering-heights.jpg', 9, 8, 1, 342, 'https://en.wikipedia.org/wiki/Wuthering_Heights\n', 1847, 0),
(14, 'The Stranger', NULL, 'public/images/books/l-etranger.jpg', 10, 12, 8, 185, 'https://en.wikipedia.org/wiki/The_Stranger_(novel)\n', 1942, 0),
(15, 'Poems', NULL, 'public/images/books/poems-paul-celan.jpg', 11, 13, 11, 320, '\n', 1952, 0),
(16, 'Journey to the End of the Night', NULL, 'public/images/books/voyage-au-bout-de-la-nuit.jpg', 12, 9, 8, 505, 'https://en.wikipedia.org/wiki/Journey_to_the_End_of_the_Night\n', 1932, 0),
(18, 'The Canterbury Tales', NULL, 'public/images/books/the-canterbury-tales.jpg', 14, 15, 1, 544, 'https://en.wikipedia.org/wiki/The_Canterbury_Tales\n', 1450, 0),
(19, 'Stories', NULL, 'public/images/books/stories-of-anton-chekhov.jpg', 15, 16, 12, 194, 'https://en.wikipedia.org/wiki/List_of_short_stories_by_Anton_Chekhov\n', 1886, 0),
(20, 'Nostromo', NULL, 'public/images/books/nostromo.jpg', 16, 8, 1, 320, 'https://en.wikipedia.org/wiki/Nostromo\n', 1904, 0),
(21, 'Great Expectations', NULL, 'public/images/books/great-expectations.jpg', 17, 8, 1, 194, 'https://en.wikipedia.org/wiki/Great_Expectations\n', 1861, 0),
(22, 'Jacques the Fatalist', NULL, 'public/images/books/jacques-the-fatalist.jpg', 18, 9, 8, 596, 'https://en.wikipedia.org/wiki/Jacques_the_Fatalist\n', 1796, 0),
(23, 'Berlin Alexanderplatz', NULL, 'public/images/books/berlin-alexanderplatz.jpg', 19, 17, 11, 600, 'https://en.wikipedia.org/wiki/Berlin_Alexanderplatz\n', 1929, 0),
(24, 'Crime and Punishment', NULL, 'public/images/books/crime-and-punishment.jpg', 20, 16, 12, 551, 'https://en.wikipedia.org/wiki/Crime_and_Punishment\n', 1866, 0),
(25, 'The Idiot', NULL, 'public/images/books/the-idiot.jpg', 20, 16, 12, 656, 'https://en.wikipedia.org/wiki/The_Idiot\n', 1869, 0),
(26, 'The Possessed', NULL, 'public/images/books/the-possessed.jpg', 20, 16, 12, 768, 'https://en.wikipedia.org/wiki/Demons_(Dostoyevsky_novel)\n', 1872, 0),
(27, 'The Brothers Karamazov', NULL, 'public/images/books/the-brothers-karamazov.jpg', 20, 16, 12, 824, 'https://en.wikipedia.org/wiki/The_Brothers_Karamazov\n', 1880, 0),
(28, 'Middlemarch', NULL, 'public/images/books/middlemarch.jpg', 21, 8, 1, 800, 'https://en.wikipedia.org/wiki/Middlemarch\n', 1871, 0),
(29, 'Invisible Man', NULL, 'public/images/books/invisible-man.jpg', 22, 18, 1, 581, 'https://en.wikipedia.org/wiki/Invisible_Man\n', 1952, 0),
(30, 'Medea', NULL, 'public/images/books/medea.jpg', 23, 19, 13, 104, 'https://en.wikipedia.org/wiki/Medea_(play)\n', -431, 0),
(31, 'Absalom, Absalom!', NULL, 'public/images/books/absalom-absalom.jpg', 24, 18, 1, 313, 'https://en.wikipedia.org/wiki/Absalom,_Absalom!\n', 1936, 0),
(33, 'Madame Bovary', NULL, 'public/images/books/madame-bovary.jpg', 25, 9, 8, 528, 'https://en.wikipedia.org/wiki/Madame_Bovary\n', 1857, 0),
(34, 'Sentimental Education', NULL, 'public/images/books/l-education-sentimentale.jpg', 25, 9, 8, 606, 'https://en.wikipedia.org/wiki/Sentimental_Education\n', 1869, 0),
(36, 'One Hundred Years of Solitude', NULL, 'public/images/books/one-hundred-years-of-solitude.jpg', 27, 20, 10, 417, 'https://en.wikipedia.org/wiki/One_Hundred_Years_of_Solitude\n', 1967, 0),
(37, 'Love in the Time of Cholera', NULL, 'public/images/books/love-in-the-time-of-cholera.jpg', 27, 20, 10, 368, 'https://en.wikipedia.org/wiki/Love_in_the_Time_of_Cholera\n', 1985, 0),
(39, 'Dead Souls', NULL, 'public/images/books/dead-souls.jpg', 29, 16, 12, 432, 'https://en.wikipedia.org/wiki/Dead_Souls\n', 1842, 0),
(41, 'The Devil to Pay in the Backlands', NULL, 'public/images/books/the-devil-to-pay-in-the-backlands.jpg', 31, 22, 14, 494, 'https://en.wikipedia.org/wiki/The_Devil_to_Pay_in_the_Backlands\n', 1956, 0),
(42, 'Hunger', NULL, 'public/images/books/hunger.jpg', 32, 23, 15, 176, 'https://en.wikipedia.org/wiki/Hunger_(Hamsun_novel)\n', 1890, 0),
(43, 'The Old Man and the Sea', NULL, 'public/images/books/the-old-man-and-the-sea.jpg', 33, 18, 1, 128, 'https://en.wikipedia.org/wiki/The_Old_Man_and_the_Sea\n', 1952, 0),
(44, 'Iliad', NULL, 'public/images/books/the-iliad-of-homer.jpg', 34, 19, 13, 608, 'https://en.wikipedia.org/wiki/Iliad\n', -735, 0),
(45, 'Odyssey', NULL, 'public/images/books/the-odyssey-of-homer.jpg', 34, 19, 13, 374, 'https://en.wikipedia.org/wiki/Odyssey\n', -800, 0),
(46, 'A Doll\'s HouseÃ©', '', 'public/images/books/a-Dolls-house.jpg', 35, 23, 15, 68, '0', 1879, 10),
(47, 'Ulysses', NULL, 'public/images/books/ulysses.jpg', 36, 24, 1, 228, 'https://en.wikipedia.org/wiki/Ulysses_(novel)\n', 1922, 0),
(48, 'Stories', NULL, 'public/images/books/stories-of-franz-kafka.jpg', 37, 25, 11, 488, 'https://en.wikipedia.org/wiki/Franz_Kafka_bibliography#Short_stories\n', 1924, 0),
(49, 'The Trial', NULL, 'public/images/books/the-trial.jpg', 37, 25, 11, 160, 'https://en.wikipedia.org/wiki/The_Trial\n', 1925, 0),
(50, 'The Castle', NULL, 'public/images/books/the-castle.jpg', 37, 25, 11, 352, 'https://en.wikipedia.org/wiki/The_Castle_(novel)\n', 1926, 0),
(51, 'The recognition of Shakuntala', NULL, 'public/images/books/the-recognition-of-shakuntala.jpg', 38, 26, 16, 147, 'https://en.wikipedia.org/wiki/Abhij%C3%B1%C4%81na%C5%9B%C4%81kuntalam\n', 150, 0),
(53, 'Zorba the Greek', NULL, 'public/images/books/zorba-the-greek.jpg', 40, 19, 13, 368, 'https://en.wikipedia.org/wiki/Zorba_the_Greek\n', 1946, 0),
(54, 'Sons and Lovers', NULL, 'public/images/books/sons-and-lovers.jpg', 41, 8, 1, 432, 'https://en.wikipedia.org/wiki/Sons_and_Lovers\n', 1913, 0),
(55, 'Independent People', NULL, 'public/images/books/independent-people.jpg', 42, 7, 18, 470, 'https://en.wikipedia.org/wiki/Independent_People\n', 1934, 0),
(56, 'Poems', NULL, 'public/images/books/poems-giacomo-leopardi.jpg', 43, 3, 3, 184, '\n', 1818, 0),
(57, 'The Golden Notebook', NULL, 'public/images/books/the-golden-notebook.jpg', 44, 8, 1, 688, 'https://en.wikipedia.org/wiki/The_Golden_Notebook\n', 1962, 0),
(58, 'Pippi Longstocking', NULL, 'public/images/books/pippi-longstocking.jpg', 45, 28, 19, 160, 'https://en.wikipedia.org/wiki/Pippi_Longstocking\n', 1945, 0),
(60, 'Children of Gebelawi', NULL, 'public/images/books/children-of-gebelawi.jpg', 47, 30, 6, 355, 'https://en.wikipedia.org/wiki/Children_of_Gebelawi\n', 1959, 0),
(61, 'Buddenbrooks', NULL, 'public/images/books/buddenbrooks.jpg', 48, 17, 11, 736, 'https://en.wikipedia.org/wiki/Buddenbrooks\n', 1901, 0),
(62, 'The Magic Mountain', NULL, 'public/images/books/the-magic-mountain.jpg', 48, 17, 11, 720, 'https://en.wikipedia.org/wiki/The_Magic_Mountain\n', 1924, 0),
(63, 'Moby Dick', NULL, 'public/images/books/moby-dick.jpg', 49, 18, 1, 378, 'https://en.wikipedia.org/wiki/Moby-Dick\n', 1851, 0),
(65, 'History', NULL, 'public/images/books/history.jpg', 51, 3, 3, 600, 'https://en.wikipedia.org/wiki/History_(novel)\n', 1974, 0),
(68, 'The Man Without Qualities', NULL, 'public/images/books/the-man-without-qualities.jpg', 54, 31, 11, 365, 'https://en.wikipedia.org/wiki/The_Man_Without_Qualities\n', 1931, 0),
(69, 'Lolita', NULL, 'public/images/books/lolita.jpg', 55, 32, 1, 317, 'https://en.wikipedia.org/wiki/Lolita\n', 1955, 0),
(70, 'Nineteen Eighty-Four', NULL, 'public/images/books/nineteen-eighty-four.jpg', 56, 8, 1, 272, 'https://en.wikipedia.org/wiki/Nineteen_Eighty-Four\n', 1949, 0),
(71, 'Metamorphoses', NULL, 'public/images/books/the-metamorphoses-of-ovid.jpg', 57, 33, 21, 576, 'https://en.wikipedia.org/wiki/Metamorphoses\n', 100, 0),
(72, 'The Book of Disquiet', NULL, 'public/images/books/the-book-of-disquiet.jpg', 58, 34, 14, 272, 'https://en.wikipedia.org/wiki/The_Book_of_Disquiet\n', 1928, 0),
(73, 'Tales', NULL, 'public/images/books/tales-and-poems-of-edgar-allan-poe.jpg', 59, 18, 1, 842, 'https://en.wikipedia.org/wiki/Edgar_Allan_Poe_bibliography#Tales\n', 1950, 0),
(74, 'In Search of Lost Time', NULL, 'public/images/books/a-la-recherche-du-temps-perdu.jpg', 60, 9, 8, 2408, 'https://en.wikipedia.org/wiki/In_Search_of_Lost_Time\n', 1920, 0),
(75, 'Gargantua and Pantagruel', NULL, 'public/images/books/gargantua-and-pantagruel.jpg', 61, 9, 8, 623, 'https://en.wikipedia.org/wiki/Gargantua_and_Pantagruel\n', 1533, 0),
(76, 'Pedro PÃ¡ramo', NULL, 'public/images/books/pedro-paramo.jpg', 62, 35, 10, 124, 'https://en.wikipedia.org/wiki/Pedro_P%C3%A1ramo\n', 1955, 0),
(77, 'The Masnavi', NULL, 'public/images/books/the-masnavi.jpg', 63, 36, 22, 438, 'https://en.wikipedia.org/wiki/Masnavi\n', 1236, 0),
(78, 'Midnight\'s Children', NULL, 'public/images/books/midnights-children.jpg', 64, 37, 1, 536, 'https://en.wikipedia.org/wiki/Midnight%27s_Children\n', 1981, 0),
(79, 'Bostan', NULL, 'public/images/books/bostan.jpg', 65, 38, 22, 298, 'https://en.wikipedia.org/wiki/Bustan_(book)\n', 1257, 0),
(80, 'Season of Migration to the North', NULL, 'public/images/books/season-of-migration-to-the-north.jpg', 66, 39, 6, 139, 'https://en.wikipedia.org/wiki/Season_of_Migration_to_the_North\n', 1966, 0),
(82, 'Hamlet', NULL, 'public/images/books/hamlet.jpg', 68, 15, 1, 432, 'https://en.wikipedia.org/wiki/Hamlet\n', 1603, 0),
(83, 'King Lear', NULL, 'public/images/books/king-lear.jpg', 68, 15, 1, 384, 'https://en.wikipedia.org/wiki/King_Lear\n', 1608, 0),
(84, 'Othello', NULL, 'public/images/books/othello.jpg', 68, 15, 1, 314, 'https://en.wikipedia.org/wiki/Othello\n', 1609, 0),
(85, 'Oedipus the King', NULL, 'public/images/books/oedipus-the-king.jpg', 69, 19, 13, 88, 'https://en.wikipedia.org/wiki/Oedipus_the_King\n', -430, 0),
(86, 'The Red and the Black', NULL, 'public/images/books/le-rouge-et-le-noir.jpg', 70, 9, 8, 576, 'https://en.wikipedia.org/wiki/The_Red_and_the_Black\n', 1830, 0),
(87, 'The Life And Opinions of Tristram Shandy', NULL, 'public/images/books/the-life-and-opinions-of-tristram-shandy.jpg', 71, 15, 1, 640, 'https://en.wikipedia.org/wiki/The_Life_and_Opinions_of_Tristram_Shandy,_Gentleman\n', 1760, 0),
(88, 'Confessions of Zeno', NULL, 'public/images/books/confessions-of-zeno.jpg', 72, 3, 3, 412, 'https://en.wikipedia.org/wiki/Zeno%27s_Conscience\n', 1923, 0),
(89, 'Gulliver\'s Travels', NULL, 'public/images/books/gullivers-travels.jpg', 73, 40, 1, 178, 'https://en.wikipedia.org/wiki/Gulliver%27s_Travels\n', 1726, 0),
(90, 'War and Peace', NULL, 'public/images/books/war-and-peace.jpg', 74, 16, 12, 1296, 'https://en.wikipedia.org/wiki/War_and_Peace\n', 1867, 0),
(92, 'The Death of Ivan Ilyich', NULL, 'public/images/books/the-death-of-ivan-ilyich.jpg', 74, 16, 12, 92, 'https://en.wikipedia.org/wiki/The_Death_of_Ivan_Ilyich\n', 1886, 0),
(93, 'The Adventures of Huckleberry Finn', NULL, 'public/images/books/the-adventures-of-huckleberry-finn.jpg', 75, 18, 1, 224, 'https://en.wikipedia.org/wiki/Adventures_of_Huckleberry_Finn\n', 1884, 0),
(94, 'Ramayana', NULL, 'public/images/books/ramayana.jpg', 76, 26, 16, 152, 'https://en.wikipedia.org/wiki/Ramayana\n', -450, 0),
(95, 'The Aeneid', NULL, 'public/images/books/the-aeneid.jpg', 77, 33, 21, 442, 'https://en.wikipedia.org/wiki/Aeneid\n', -23, 0),
(96, 'Mahabharata', NULL, 'public/images/books/the-mahab-harata.jpg', 78, 26, 16, 276, 'https://en.wikipedia.org/wiki/Mahabharata\n', -700, 0),
(97, 'Leaves of Grass', NULL, 'public/images/books/leaves-of-grass.jpg', 79, 18, 1, 152, 'https://en.wikipedia.org/wiki/Leaves_of_Grass\n', 1855, 0),
(98, 'Mrs Dalloway', NULL, 'public/images/books/mrs-dalloway.jpg', 80, 8, 1, 216, 'https://en.wikipedia.org/wiki/Mrs_Dalloway\n', 1925, 0),
(99, 'To the Lighthouse', NULL, 'public/images/books/to-the-lighthouse.jpg', 80, 8, 1, 209, 'https://en.wikipedia.org/wiki/To_the_Lighthouse\n', 1927, 0),
(100, 'Memoirs of Hadrian', NULL, 'public/images/books/memoirs-of-hadrian.jpg', 81, 41, 8, 408, 'https://en.wikipedia.org/wiki/Memoirs_of_Hadrian\n', 1951, 0),
(101, 'L\'Ã‰tranger', 'L\'Ã‰tranger est le premier roman dâ€™Albert Camus, paru en 1942. Il prend place dans la tÃ©tralogie que Camus nommera Â« cycle de lâ€™absurde Â» qui dÃ©crit les fondements de la philosophie camusienne : lâ€™absurde. Cette tÃ©tralogie comprend Ã©galement lâ€™essai intitulÃ© Le Mythe de Sisyphe ainsi que les piÃ¨ces de thÃ©Ã¢tre Caligula et Le Malentendu.', NULL, 10, 9, 8, 159, '0', 1942, 0),
(102, 'Les Grandes EspÃ©rances', 'Les Grandes EspÃ©rances ou De grandes espÃ©rances (en anglais Great Expectations) est le treiziÃ¨me roman de Charles Dickens, le deuxiÃ¨me, aprÃ¨s David Copperfield, Ã  Ãªtre racontÃ© entiÃ¨rement Ã  la premiÃ¨re personne par le protagoniste lui-mÃªme, Philip Pirrip, dit PipN 1. Le sujet principal en est la vie et les aventures d\'un jeune orphelin jusqu\'Ã  sa maturitÃ©. D\'abord publiÃ© en feuilleton de dÃ©cembre 1860 Ã  aoÃ»t 1861 dans le magazine de Dickens All the Year Round, il paraÃ®t ensuite en trois volumes chez Chapman and Hall en octobre 1861.', NULL, 17, 15, 1, 0, 'https://fr.wikipedia.org/wiki/Les_Grandes_Esp%C3%A9rances', 1860, 0);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `active`) VALUES
(11, 'Auto-editiondd', 0),
(13, 'Cuisine', 0),
(15, 'Dictionnaires & languesmmm', 1),
(17, 'Essais et documents\r\n', 1),
(18, 'Guides pratiques\r\n', 1),
(19, 'Histoire', 1),
(20, 'Humour', 1),
(21, 'Informatique et internet\r\n', 1),
(22, 'Jeunesse', 1),
(25, 'Policier, suspense, thrillers\r\n', 1),
(27, 'Sciences sociales\r\n', 1),
(29, 'Scolaire', 1),
(30, 'SF, Fantasy\r\n', 1),
(31, 'Sport loisirs et vie pratique\r\n', 1),
(33, 'Tourisme et voyages\r\n', 1),
(34, 'xxx', 0),
(35, 'sssss', 0),
(36, 'Art musique et cinÃ©ma', 1),
(37, 'Bandes dessinÃ©es', 1),
(38, 'DÃ©veloppement personnel', 1),
(39, 'Droit & Ã©conomie', 1),
(40, 'LittÃ©rature', 1),
(41, 'LittÃ©rature sentimentale', 1),
(42, 'Religion et spiritualitÃ©', 1),
(43, 'Sciences, techniques & mÃ©decine', 1),
(44, 'ThÃ©Ã¢tre', 1),
(45, 'lll', 0),
(46, 'ddddd', 0),
(47, 'Cuisiner', 1);

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `countries`
--

INSERT INTO `countries` (`id`, `name`, `active`) VALUES
(1, 'Nigeria', 1),
(2, 'Denmark', 1),
(3, 'Italy', 1),
(4, 'Sumer and Akkadian Empire', 1),
(5, 'Achaemenid Empire', 1),
(6, 'India/Iran/Iraq/Egypt/Tajikistan', 1),
(7, 'Iceland', 1),
(8, 'United Kingdom', 1),
(9, 'France', 1),
(10, 'Republic of Ireland', 1),
(11, 'Argentina', 1),
(12, 'Algeria, French Empire', 1),
(13, 'Romania, France', 1),
(14, 'Spain', 1),
(15, 'England', 1),
(16, 'Russia', 1),
(17, 'Germany', 1),
(18, 'United States', 1),
(19, 'Greece', 1),
(20, 'Colombia', 1),
(21, 'Saxe-Weimar', 1),
(22, 'Brazil', 1),
(23, 'Norway', 1),
(24, 'Irish Free State', 1),
(25, 'Czechoslovakia', 1),
(26, 'India', 1),
(27, 'Japan', 1),
(28, 'Sweden', 1),
(29, 'China', 1),
(30, 'Egypt', 1),
(31, 'Austria', 1),
(32, 'Russia/United States', 1),
(33, 'Roman Empire', 1),
(34, 'Portugal', 1),
(35, 'Mexico', 1),
(36, 'Sultanate of Rum', 1),
(37, 'United Kingdom, India', 1),
(38, 'Persia, Persian Empire', 1),
(39, 'Sudan', 1),
(40, 'Ireland', 1),
(41, 'France/Belgium', 1),
(42, 'Cannaries', 1),
(43, 'Japon', 1);

-- --------------------------------------------------------

--
-- Structure de la table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `languages`
--

INSERT INTO `languages` (`id`, `name`, `active`) VALUES
(1, 'English', 1),
(2, 'Danish', 1),
(3, 'Italian', 1),
(4, 'Akkadian', 1),
(5, 'Hebrew', 1),
(6, 'Arabic', 1),
(7, 'Old Norse', 1),
(8, 'French', 1),
(9, 'French, English', 1),
(10, 'Spanish', 1),
(11, 'German', 1),
(12, 'Russian', 1),
(13, 'Greek', 1),
(14, 'Portuguese', 1),
(15, 'Norwegian', 1),
(16, 'Sanskrit', 1),
(17, 'Japanese', 1),
(18, 'Icelandic', 1),
(19, 'Swedish', 1),
(20, 'Chinese', 1),
(21, 'Classical Latin', 1),
(22, 'Persian', 1),
(23, 'Catalan', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT pour la table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT pour la table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
