-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 24 mai 2023 à 21:36
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données : `gotatrip`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_client`, `nom`, `prenom`, `mail`) VALUES
(4, 'Thibout', 'Sabine', 'hyhy'),
(5, 'f', 'brt', 'sabine@thibout.fr'),
(6, 've', 'f', 'sabine@thibout.fr'),
(7, 'b', 'vr', 'sabine@thibout.fr'),
(8, '', '', ''),
(9, '', '', ''),
(10, 'b', 'vr', 'sabine@thibout.fr'),
(11, 'mathys', 'maitre', 'sabine@thibout.fr'),
(12, 'frz', 'vf', 'ev@vf.fr'),
(13, 'frz', 'vf', 'ev@vf.fr'),
(14, 'frz', 'vf', 'ev@vf.fr'),
(15, 'frz', 'vf', 'ev@vf.fr'),
(16, 'frz', 'vf', 'ev@vf.fr'),
(17, 'frz', 'vf', 'ev@vf.fr'),
(18, 'frz', 'vf', 'ev@vf.fr'),
(19, 'frz', 'vf', 'ev@vf.fr'),
(20, 'frz', 'vf', 'ev@vf.fr'),
(21, 'frz', 'vf', 'ev@vf.fr'),
(22, 'frz', 'vf', 'ev@vf.fr'),
(23, 'frz', 'vf', 'ev@vf.fr'),
(24, 'frz', 'vf', 'ev@vf.fr'),
(25, 'frz', 'vf', 'ev@vf.fr'),
(30, 'frz', 'vf', 'ev@vf.fr'),
(31, 'mathys', 'maitre', 'sabine@thibout.fr'),
(29, 'frz', 'vf', 'ev@vf.fr'),
(32, 'mathys', 'maitre', 'sabine@thibout.fr'),
(33, 'mathys', 'maitre', 'sabine@thibout.fr');

-- --------------------------------------------------------

--
-- Structure de la table `destination`
--

DROP TABLE IF EXISTS `destination`;
CREATE TABLE IF NOT EXISTS `destination` (
  `id_dest` int NOT NULL AUTO_INCREMENT,
  `nomGOT` varchar(50) NOT NULL,
  `nomReel` varchar(80) NOT NULL,
  `pays` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `descriptifCourt` text NOT NULL,
  `descriptifLong` text NOT NULL,
  `parent_ID` int DEFAULT NULL,
  `package` int NOT NULL,
  `ordre_insertion` int DEFAULT NULL,
  PRIMARY KEY (`id_dest`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `destination`
--

INSERT INTO `destination` (`id_dest`, `nomGOT`, `nomReel`, `pays`, `prix`, `descriptifCourt`, `descriptifLong`, `parent_ID`, `package`, `ordre_insertion`) VALUES
(1, 'Kingslanding', 'Dubrovnik', 'Croatie', '127.00', 'Venez découvrir les lieux de la capitale de Westeros. Un séjour inoubliable avec des paysages hors du commun vous attend, sur les traces des rois des 7 couronnes. Des éléments reconnaissables entre mille dans cette ville mythique au large de la Méditerrannée.', 'Dans cette ville mythique de Croatie, vous ne manquerez pas de lieux à visiter. Vous pourrez profiter de balades exceptionnelles sur les remparts de la ville fortifiée, construits au Xème siècle. \r\nLa cité abrite aussi le monastère Fransiscain connu comme le célèbre palais de Kingslanding dans Game Of Thrones. \r\nDes lieux naturels magnifiques sont visibles partout, comme la grotte de Betina que vous pourrez admirer lors d’une balade en kayak sur les eaux turquoises de la Méditerranée. \r\nEn plus de ses paysages naturels exceptionnels, la ville comprend aussi de nombreux lieux touristiques sympathiques. \r\nPrincipale artère touristique de la ville de par ses magasins, cafés et restaurants vous pourrez, la Stradun abrite aussi de nombreuses ruelles avec de petites boutiques où vous pourrez flâner. \r\nEntre les espaces naturels, les monuments historiques et les quartiers touristiques, il y en a pour tous les goûts !', 14, 0, 6),
(2, 'Dragonstone', 'Île de Gaztelugatxe', 'Espagne', '75.00', 'L’île de Île de Gaztelugatxe constitue le véritable point d’entrée de Daenerys vers Westeros dans la saison 7. Cette petite île très dépaysante vous offrira des vues exceptionnelles avec un relief escarpé à arpenter. De quoi faire rêver randonneurs les plus fans.', 'Considéré comme la forteresse de Dragonstone, cette petite île spectaculaire est incontournable pour visiter les Pays-Basque. Celle-ci est située dans le Golfe de Gascogne, à 35km à l’Est de Bilbao. \r\nL’île et son point culminant sont accessibles par un étroit chemin pavé de 241 marches qui zigzaguent jusqu’au sommet. \r\nChaque virage vous offre une vue magnifique sur la côte. La montée est raide mais reste accessible. \r\nIl existe par ailleurs un café restaurant du nom d’Eneperi sur la colline de la côte en face de l’île. \r\nVous pourrez ainsi savourer un délicieux repas tout en profitant de la vue splendide. \r\nUne escale sur cette île est nécessaire pour les  fans de la série qui voudraient aussi profiter de la région et de Bilbao.', 12, 0, 1),
(3, 'Yunkai', 'Aït-ben-Haddou', 'Maroc', '175.00', 'Ayant servi de lieu de tournage pour la cité de YunkaÏ dans la Baie des Cerfs, Aït-ben-Haddou constitue une ville marocaine aux paysage spectaculaires.  Vous pourrez y admirer de nombreux bâtiments d’argile et des paysages lunaires rocheux aux sommets des montagnes de l’Atlas.', 'Ce village Marocain situé sur les contreforts du Haut Atlas a servi de décor pour de grandes productions cinématographiques comme Gladiator, Prince of of Persia, et bien évidemment Game of Thrones. \r\nUtilisé pour représenter la Yunkai, c’est là que Daenerys rencontre Dahario Naharis.\r\nCe ksar est un des sites touristiques les plus connus du Sud marocain.\r\nIl s’agit d’un village fortifié formé de bâtiments de terre et construit sur une colline au milieu d’une vallée. \r\nBalades dans ses constructions de terre ocre et visite du village coloré et authentique vous y attendent. \r\nPour partir sur les traces de la mère des dragons, nous vous proposons, afin de mieux profiter de votre séjour, de partir de Marrakech. \r\nVous pourrez ainsi profiter également de cette ancienne cité impériale puis, au moment voulu, emprunter les routes montagnuses au panoramas exceptionnels pour rejondre Aït-ben-Haddou.', NULL, 0, 0),
(4, 'Grotte du nord', 'Grotte de Grjótagjá', 'Islande', '220.00', 'Comme dans la série, vous pourrez profiter de la grotte de Grjótagjá à deux… Près du lac Mývatn, ses eaux thermales chaudes attirent de nombreux touristes chaque année. La grotte est une beauté naturelle à visiter en Islande, au coeur d’une région aux paysages à couper le souffle.', 'Considéré comme la forteresse de Dragonstone, cette petite île spectaculaire est incontournable pour visiter les Pays-Basque. Celle-ci est située dans le Golfe de Gascogne, à 35km à l’Est de Bilbao. \r\nL’île et son point culminant sont accessibles par un étroit chemin pavé de 241 marches qui zigzaguent jusqu’au sommet. \r\nChaque virage vous offre une vue magnifique sur la côte. La montée est raide mais reste accessible. \r\nIl existe par ailleurs un café restaurant du nom d’Eneperi sur la colline de la côte en face de l’île. \r\nVous pourrez ainsi savourer un délicieux repas tout en profitant de la vue splendide. \r\nUne escale sur cette île est nécessaire pour les  fans de la série qui voudraient aussi profiter de la région et de Bilbao.', 13, 0, NULL),
(5, 'Mer dothrak', 'Bardenas reales', 'Espagne', '89.00', 'Dans la saison 6, ces terres du Sud-Est de la Navarre se transforment en Mer Dothraki, les grandes plaines d’Essos. Dans ce séjour, nous vous invitons à marcher sur les traces des princes Khals, à dos de cheval à travers les canyons sinueux, les longues vallées et les riches réserves naturelles.', 'Lieu phare pour tourner des westerns, ce désert atypique du nord de l’Espagne a servi de décor pour les terres des Dothrakis. Constitué d’argiles et de grès qui ont subi les effets de l’érosion pendant des millions d’années, le résultat géologique est que l’on peut maintenant y voir de curieuses formations rocheuses, comme des plateaux ou des têtes caractéristiques.\r\nMais si vous visitez les Bardenas Reales en hiver ou au printemps, vous serez surpris par les paysages verdoyants des plaines, en grande partie dus aux plantations de céréales et de riz.\r\nTout comme dans la série, vous pourrez visiter ce lieu exceptionnel à dos de cheval sous une température relativement chaude et agréable.\r\nUn séjour conseillé pour les amoureux des paysages semi-arrides typiques de l’Arizona.', 12, 0, NULL),
(6, 'Dorne', 'Séville', 'Espagne', '115.00', 'C’est dans le palais Alcazar de Séville en Espagne que vous retrouverez tous les décors du palais de Dorne. Érigée au Xème siècle, la forteresse  est le plus ancien palais européen encore utilisé. De luxuriants jardins, des cours carrelées, des plafonds dorés… Un séjour haut en couleurs vous attend ! ', 'De luxuriants jardins, des cours carrelées, des plafonds dorés… C’est dans le décor fascinant du fort royal de Séville que le palais de Dorne prend vie dès la saison 5. Érigée au Xème siècle, la forteresse maure est le plus ancien palais européen encore utilisé, puisque la famille royale d’Espagne utilise tout le premier étage.\r\nEn vous promenant dans les salons de l’Alcazar, vous aurez l’impression de vous trouver dans les jardins aquatiques. De nombreuses scènes ont été filmées dans ce merveilleux palais. C’est bien dans la galerie du Grotesque, sur le bassin de Mercure, que la maîtresse d’Oberyn Martell observe comment Myrcella Lannister se promène dans le Jardin de la Danse avec son fiancé, Trystan.\r\nVous pourrez, à Séville, également profiter des places ensoleillées et des fleurs d’oranger, en passant par l’art du flamenco et des tapas.', NULL, 0, 2),
(7, 'Astapor', 'Essaouira', 'Maroc', '249.00', 'C’est dans cette ville mythique que Daenerys acquiert sa fameuse armée des immaculés dans la saison 3. Vous pourrez y découvrir sa riche histoire. Cette ville portuaire est devenue à l’époque un haut lieu pour les pirates et, bien plus tard, le paradis des musiciens des Sixties. Une ville à la culture traditionnelle vous attend pour vous en mettre plein les yeux.', 'Prisée par son emplacement soumis aux vents marins, la ville côtière marocaine séduit aussi par sa riche histoire : place commerciale importante au Vème siècle, Essaouira devient un haut lieu pour les pirates et, bien plus tard, le paradis des musiciens des Sixties. \r\nDans la saison 3, la ville se meut en Astapor, place où Daenerys acquière son armée des Immaculés. \r\nLe tout avant de se lancer dans la conquête des Sept Royaumes.\r\nAvec des plages encore très peu fréquentées et non loin, d’innombrables marchés et sa médina classée à l’Unesco, la ville est une véritable perle rare. \r\nVille portuaire, on y mange de délicieux fruits de mer.\r\nNous vous invitons à venir découvrir cette ville à l’atmosphère détendue si vous voulez changer d’univers et profiter d’un séjour dépaysant.', NULL, 0, 0),
(8, 'Le  nord  ', 'Parc national du Vatnajökull', 'Islande', '215.00', 'Les paysages époustouflants au Nord du mur se retrouvent dans le plus grand glacier d’Islande et le plus grand parc national d’Europe. Volcans actifs, plateaux montagneux, puissantes rivières glaciaires, montagnes et vallées, lacs gelés, cascades sont autant de panoramas différents réunis au sein de ce parc national.', 'Bienvenue dans le domaine des sauvageons : au nord du Mur, surveillé par la Garde de nuit, les forêts enneigées sont le domaine des géants, des Marcheurs blancs, et des peuples nomades qui refusent le joug de Port-Réal… \r\nPour filmer ces étendues sauvages, l’équipe de la série a choisi l’Islande, et notamment le parc du Vatnajökull, le deuxième plus grand glacier d’Europe.\r\nDe nombreuses merveilles ont pour origine le grand Vatnajökull : des lacs, lagons, canyons, chutes d\'eau, icebergs, grottes de glace et autres langues glaciaires...\r\nEn plus de la randonnée au pied du glacier, il faut savoir qu\'il existe énormément d\'activités sur le glacier lui même comme la visite de grottes de glace, la randonnée sur glacier, le kayak dans les lagons.\r\nUn séjour exceptionnel qui ne vous décevra pas !\r\n', 13, 0, 3),
(9, 'Les jardins', 'Arboretum Trsteno', 'Croatie', '127.00', 'Construit au XVème siècle, cet arboretum accueille des milliers d’espèces de plantes rares récoltées à travers le monde. Le pavillon en son sommet ajoute un charme qui laisse le visiteur seul face à la mer Adriatique. Dans les saisons 3 et 4, cet arboretum unique donne vie aux jardins de Port-Réal : Lady Olenna Margaery y tiennent leur cour.', 'À une vingtaine de kilomètres de Dubrovnik, vous trouverez un autre lieu de tournage emblématique de la série en Croatie : l’arboretum de Trsteno. \r\nCe lieu extraordinaire a donné vie aux jardins suspendus de Port-Réal, lieu préféré d’Olenna Tyrell quand elle séjourne dans la capitale.\r\nSur environ 28 hectares, l’arboretum abrite près de 400 espèces de plantes différentes, dont des arbres fruitiers tels que des citronniers, oliviers, figuiers, mais aussi des chênes, des pins, des cyprès, des palmiers, des ginkgos, des cactus, des lauriers et des eucalyptus.\r\nEn élargissant sa collection, l’arboretum a profité de sa proximité avec Dubrovnik où des bateaux du monde entier arrivaient avec à bord de nombreux spécimens exotiques.\r\nUn bel endroit pour les amoureux de la nature.', 14, 0, 5),
(10, 'Mereen', 'Peñíscola en Castellón', 'Espagne', '95.00', 'Dans la saison 6, Peñíscola, cette délicieuse ville portuaire de la côte rocheuse au bord de la Méditerranée, devient le cade de tournage de Meereen et la Baie des Dragons. Son mythique château de pierre construit par l’Ordre des Templiers ainsi que son phare historique offrent des vues uniques sur la mer.', 'Peñiscola est devenue Meereen, la plus septentrionale et la plus grande des trois grandes villes-états de la Baie des Esclaves. \r\nC\'est la ville dans laquelle on trouve environ trois esclaves pour chaque homme libre, au moment où Daenerys Targaryen arrive pour la première fois. \r\nLa mère des dragons, ou Khaleesi, prend alors la ville pour libérer les esclaves avec son armée.\r\nSoleil, plage, plats de riz, sentiers de randonnée, vieille ville médiévale et d’innombrables endroits incroyables vous attendent. Cette ville côtière de la province de Castellón est sans aucun doute l’une des plus belles villes d’Espagne. \r\nEt bien que la meilleure chose à faire à Peñíscola soit de se promener dans ses rues pavées qui se jettent dans la mer Méditerranée, il y a de nombreux endroits dans la ville que vous ne pourrez pas manquer.', 12, 0, 4),
(11, 'Le Septuaire  ', 'Mdina', 'Malte', '152.00', 'Le Fort Manoel, dans la ville de Gżiraa constitué le décor des marches du Grand Septuaire de Baelor, où se déroule l\'exécution publique d\'Eddard Stark. La belle nation insulaire et particulièrement la belle ville de Mdina ont été utilisées très tôt dans la production de décors représentant Port-Réal et la cité libre de Pentos.', 'C’est sur la place du fort Manoel, à Mdina, que se déroule une scène mythique de Game of Thrones. \r\nEffectivement, c’est ici que Ned Stark se fait décapiter sous les yeux de ses filles et sur l’ordre de Joffrey Barathéon. \r\nLe fort est généralement fermé au public, mais a exceptionnellement ouvert ses portes au début du moi d’avril. \r\nVenez donc découvrir ce fort militaire du XVIIe siècle qui correspond au grand septuaire de Baelor. \r\nIntemporelle, Mdina vous emporte à travers un dédale de ruelles. Une bonne signalétique vous apporte des informations culturelles et historiques devant de nombreux monuments. \r\nSitués sur la colline centrale de Malte, les remparts de Mdina dominent l’île. \r\nLa vue est époustouflante sur Mosta, la Méditerranée et La Valette.', NULL, 0, NULL),
(12, 'DragonStone + Mer dothraki + Mereen', 'Île de Gaztelugatxe,\r\nBardenas Reales et\r\nPeñíscola en Castellón\r\n', 'ESPAGNE', '324.00', 'Ce pack vous permet de découvrir des univers totalement différents en un seul voyage. \r\nVous pourrez passer d’une île aux reliefs pleins de verdure à un désert beaucoup plus aride mais tout autant exceptionnel. Enfin vous visiterez la ville portuaire sur côte rocheuse ayant servi pour le tournage de Mereen. \r\nSous le soleil de l\'espagne, vous passerez des moments inoubliables.\r\nDe quoi faire le plein de paysages extraordinaires ! ', 'Pour voir plus de détails sur les destinations associées à ce pack de voyage, rendez-vous sur les pages des destinations individuelles correspondantes : ', NULL, 1, NULL),
(13, 'Nord  du  mur + grottes  du  nord', 'Parc national du Vatnajökull et grotte de Grjótagjá', 'ISLANDE', '456.00', 'Dans ce pack, vous pourrez découvrir les paysages à couper le souffle du Nord du mur situés en Islande. Des glaciers et de la neige à perte de vue vous attendent pour des randonnées glaciaires exceptionnelles. Ce pack vous permet de vous rendre également aux grottes de sources chaudes à l’eau turquoise telles que la grotte de Grjótagjá ou Jon Snow et Ygrid ont passé un moment mémorable ensemble.', 'Pour voir plus de détails sur les destinations associées à ce pack de voyage, rendez-vous sur les pages des destinations individuelles correspondantes : ', NULL, 1, NULL),
(14, 'Kingslanding  et  ses  jardins', 'Dubrovnik et Arboretum de Trsteno ', 'CROATIE', '178.00', 'Vous vous souvenez tous des balades quotidiennes des jeunes femmes de Kingslanding dans leur somptueux jardin floral. Découvrez donc les paysages idyllique de Dubrovnik où Kingslanding a pris vie que avec autant des vues inoubliables sur la mer Mediterannée avec en supplément les jardins magnifiques parcourus par Margaery et Lady Sansa dans Game Of Thrones. Vous ne serez pas déçu par ce voyage. Un plein de paysages exceptionnels à ne pas manquer.', 'Pour voir plus de détails sur les destinations associées à ce pack de voyage, rendez-vous sur les pages des destinations individuelles correspondantes : ', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_resa` int NOT NULL AUTO_INCREMENT,
  `dateResa` int NOT NULL,
  `quantité` int NOT NULL,
  `prenom_ext` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dest_ext` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_resa`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_resa`, `dateResa`, `quantité`, `prenom_ext`, `dest_ext`) VALUES
(4, 2023, 1, 'Sabine', 'Dubrovnik'),
(5, 2023, 1, 'brt', 'Dubrovnik'),
(6, 2023, 1, 'f', 'Dubrovnik'),
(7, 2023, 1, 'vr', 'Dubrovnik'),
(8, 0, 0, '', ''),
(9, 0, 0, '', ''),
(10, 2023, 1, 'vr', 'Dubrovnik'),
(11, 2023, 2, 'maitre', 'Dubrovnik'),
(12, 2023, 1, 'vf', 'Dubrovnik'),
(13, 2023, 1, 'vf', 'Dubrovnik'),
(14, 2023, 1, 'vf', 'Dubrovnik'),
(15, 2023, 1, 'vf', 'Dubrovnik'),
(16, 2023, 1, 'vf', 'Dubrovnik'),
(17, 2023, 1, 'vf', 'Dubrovnik'),
(18, 2023, 1, 'vf', 'Dubrovnik'),
(19, 2023, 1, 'vf', 'Dubrovnik'),
(20, 2023, 1, 'vf', 'Dubrovnik'),
(21, 2023, 1, 'vf', 'Dubrovnik'),
(22, 2023, 1, 'vf', 'Dubrovnik'),
(23, 2023, 1, 'vf', 'Dubrovnik'),
(24, 2023, 1, 'vf', 'Dubrovnik'),
(25, 2023, 1, 'vf', 'Dubrovnik'),
(26, 2023, 1, 'vf', 'Dubrovnik'),
(27, 2023, 1, 'vf', 'Dubrovnik'),
(28, 2023, 1, 'vf', 'Dubrovnik'),
(29, 2023, 3, 'vf', 'Dubrovnik'),
(30, 2023, 3, 'vf', 'Dubrovnik'),
(31, 2023, 2, 'maitre', 'Dubrovnik'),
(32, 2023, 2, 'maitre', 'Dubrovnik'),
(33, 2023, 1, 'maitre', 'Dubrovnik');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
