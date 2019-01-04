-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le :  ven. 21 déc. 2018 à 10:19
-- Version du serveur :  8.0.12
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecotheque`
--
CREATE DATABASE IF NOT EXISTS `ecotheque` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `ecotheque`;

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20181220164901'),
('20181220165232'),
('20181220170440'),
('20181220201611'),
('20181220212655');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `need` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `energy_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `battery_movable` tinyint(1) DEFAULT NULL,
  `battery_recyclability` int(11) NOT NULL,
  `screen_size` int(11) NOT NULL,
  `shut_down_auto` tinyint(1) DEFAULT NULL,
  `autonomy` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ecology_notice` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `category`, `brand`, `need`, `price`, `energy_class`, `ges`, `battery_movable`, `battery_recyclability`, `screen_size`, `shut_down_auto`, `autonomy`, `description`, `image`, `model`, `ecology_notice`) VALUES
(270, 'Computer', 'Asus', 'Video', 1591, 'D', 'E', 0, 90, 13, 0, 54, 'Jamais aucun autre ordinateur portable n\'avait offert autant de puissance que le ZenBook Pro 15. Ses performances sont plus rapides, son design plus élégant et son nouveau ScreenPad™ décuple votre créativité ! Avec le ZenBook Pro vous faites un saut dans le temps : le futur est ici et maintenant ! ', 'http://i2.cdscdn.com/pdt2/3/v/1/4/300x300/occ9agn4j2293v1/rw/asus-rog-pc-gamer-g502vs-fy091d-15-6-8go-de-ram.jpg', 'ASUS TUF504GD-DM915T', 'Moyen moins'),
(271, 'Computer', 'Asus', 'Office', 1103, 'C', 'C', 0, 47, 11, 0, 19, 'Jamais aucun autre ordinateur portable n\'avait offert autant de puissance que le ZenBook Pro 15. Ses performances sont plus rapides, son design plus élégant et son nouveau ScreenPad™ décuple votre créativité ! Avec le ZenBook Pro vous faites un saut dans le temps : le futur est ici et maintenant ! ', 'https://i2.cdscdn.com/pdt2/2/8/8/1/300x300/asus501uaej1288/rw/ordinateur-portable-asus-s501ua-ej1288t-15-fhd.jpg', 'ASUS R540LA-XX1034T', 'Moyen plus'),
(272, 'Computer', 'Asus', 'Gaming', 1356, 'C', 'C', 1, 85, 11, 0, 74, 'Jamais aucun autre ordinateur portable n\'avait offert autant de puissance que le ZenBook Pro 15. Ses performances sont plus rapides, son design plus élégant et son nouveau ScreenPad™ décuple votre créativité ! Avec le ZenBook Pro vous faites un saut dans le temps : le futur est ici et maintenant ! ', 'https://dyw7ncnq1en5l.cloudfront.net/optim/produits/150/49481/asus-vivobook-s14-s430ua_f02a8a2ef7a4fdb6__300_300.jpg', 'ASUS S430UA-EB265T', 'Moyen plus'),
(273, 'Computer', 'Lenovo', 'Office', 1098, 'B', 'B', 0, 69, 16, 0, 79, 'Legion 730 15\" Combinant puissance et portabilité dans un design repensé à couper le souffle,il fait passer le jeu sur portable au niveau supérieur', ' http://www.annuaires-francophonie.com/wp-content/uploads/2018/10/lenovo-ideapad-320-15ast.jpg', 'LENOVO IDEAPAD 320-15AST', 'Bien'),
(274, 'Computer', 'Lenovo', 'Office', 1707, 'C', 'B', 0, 60, 12, 0, 14, 'Avec le MacBook Pro, l’ordinateur portable atteint des sommets inédits en matière de performances et de portabilité. Quelles que soient les contrées où vous mènera votre imagination, vous parviendrez plus vite que jamais à vos objectifs grâce, entre autres, à des processeurs et à une mémoire hautes performances, à des graphismes avancés et à un système de stockage d’une rapidité fulgurante.', 'http://www.directdial.com/dd2/img/item/300x300-ORIGINAL/2/20HR006KUS.jpg', 'LENOVO X1 CARBON 4G LTE', 'Moyen plus'),
(275, 'Computer', 'Dell', 'Gaming', 1599, 'F', 'E', 0, 52, 14, 0, 85, 'Ordinateur portable 15 pouces avec les fonctionnalités essentielles dont vous avez besoin et plus encore, y compris les derniers processeurs Intel®, ainsi que les technologies CinemaStream et CinemaSound.', 'http://www.delixir.com/7543-2313-large/pc-portables-dell-vostro-3568-1w1hp-core-i5-7200u-4-go-ddr4-156-500-go-win10-pro.jpg', 'Dell Vostro 15 3568', 'Pas bien du tout'),
(276, 'Computer', 'Dell', 'Design', 1057, 'D', 'D', 1, 84, 15, 1, 69, 'Ordinateur portable 15 pouces avec les fonctionnalités essentielles dont vous avez besoin et plus encore, y compris les derniers processeurs Intel®, ainsi que les technologies CinemaStream et CinemaSound.', 'https://i.ebayimg.com/images/g/FH4AAOSwo9ZatZnL/s-l300.png', 'Dell Inspiron 15-3567', 'Moyen moins'),
(277, 'Computer', 'Dell', 'Video', 1151, 'F', 'D', 0, 17, 17, 1, 49, 'Ordinateur portable 15 pouces avec les fonctionnalités essentielles dont vous avez besoin et plus encore, y compris les derniers processeurs Intel®, ainsi que les technologies CinemaStream et CinemaSound.', 'https://images-eu.ssl-images-amazon.com/images/I/41dNijhJCHL._SY300_QL70_.jpg', 'Dell G3 3579', 'Pas bien du tout'),
(278, 'Computer', 'HP', 'Design', 1500, 'F', 'D', 1, 62, 15, 0, 6, 'Quand la concurrence est impitoyable, seuls les héros qui sauront saisir l’occasion prouveront leur grandeur. Équipé d’un matériel puissant et d’un design agressif, l’ordinateur portable OMEN offre une performance mobile de qualité, vous permettant de relever n’importe quel défi de n’importe quel jeu, n’importe où.', 'https://i.lbdn.com/IMGPRMAX/LEN01613_2.jpg', 'HP 15-db0026nf', 'Pas bien du tout'),
(279, 'Computer', 'HP', 'Design', 1751, 'F', 'A', 0, 75, 13, 0, 30, 'Quand la concurrence est impitoyable, seuls les héros qui sauront saisir l’occasion prouveront leur grandeur. Équipé d’un matériel puissant et d’un design agressif, l’ordinateur portable OMEN offre une performance mobile de qualité, vous permettant de relever n’importe quel défi de n’importe quel jeu, n’importe où.', 'https://store.hp.com/FranceStore/Html/Merch/Images/c05988767_500x367.jpg', 'HP Pavilion 15-cs0016nf', 'Pas bien du tout'),
(280, 'Computer', 'HP', 'Video', 1724, 'F', 'C', 0, 49, 11, 1, 27, 'Quand la concurrence est impitoyable, seuls les héros qui sauront saisir l’occasion prouveront leur grandeur. Équipé d’un matériel puissant et d’un design agressif, l’ordinateur portable OMEN offre une performance mobile de qualité, vous permettant de relever n’importe quel défi de n’importe quel jeu, n’importe où.', 'http://www.agmi.fr/img/PORTABLE/21011732_3d3d0d329f928076a9f074a51250a911_normal.png', 'HP 17-ca0008nf', 'Pas bien du tout'),
(281, 'Computer', 'Apple', 'Office', 985, 'B', 'B', 1, 69, 13, 1, 74, 'Si le MacBook Air est aussi réactif, c’est qu’il est entièrement conçu autour du stockage flash. Non seulement cette particularité le rend plus léger et plus maniable que les portables classiques, mais elle permet un accès plus rapide aux données. Ce stockage flash PCIe est jusqu’à 9 fois plus rapide qu’un disque dur de portable classique à 5 400 tr/min3. À peine ouvert, votre MacBook Air est opérationnel. Même après un mois d’inactivité, son écran s’anime instantanément.', 'https://i.ebayimg.com/images/g/mZEAAOSwQcJaMbbu/s-l300.png', 'MacBook Air', 'Bien'),
(282, 'Computer', 'Apple', 'Gaming', 504, 'D', 'D', 1, 86, 11, 0, 42, 'Il n\'a pas été simple d\'obtenir autant de fonctionnalités Premium dans l\'ordinateur le plus fin1 au monde, mais nous l\'avons fait. ', 'https://cdn.shopify.com/s/files/1/0050/1589/6153/products/Macbook_Pro_Website_Pic_300x300.png?v=1541996148', 'MacBook Pro', 'Moyen moins'),
(283, 'Computer', 'Acer', 'Design', 759, 'B', 'A', 1, 45, 16, 1, 14, 'Il n\'a pas été simple d\'obtenir autant de fonctionnalités Premium dans l\'ordinateur le plus fin1 au monde, mais nous l\'avons fait. ', 'https://dyw7ncnq1en5l.cloudfront.net/optim/produits/38/40705/acer-swift-5_bb0f8a285be83968__300_300.jpg', 'Acer Aspire A515-52-32TD', 'Bien'),
(284, 'Computer', 'Acer', 'Design', 405, 'A', 'A', 1, 3, 17, 0, 53, 'Il n\'a pas été simple d\'obtenir autant de fonctionnalités Premium dans l\'ordinateur le plus fin1 au monde, mais nous l\'avons fait. ', 'https://dyw7ncnq1en5l.cloudfront.net/optim/produits/150/42279/vivobook-s15-2018_2ea7c4306a27fc94__300_300.png', 'Acer Swift SF315-52G-54WS', 'Tres bien'),
(285, 'Computer', 'Acer', 'Design', 467, 'C', 'F', 0, 8, 13, 1, 96, 'Il n\'a pas été simple d\'obtenir autant de fonctionnalités Premium dans l\'ordinateur le plus fin1 au monde, mais nous l\'avons fait. ', 'https://i.lbdn.com/IMGPRMAX/THO00811.jpg', 'Acer Aspire A315-32-P1ZH', 'Moyen plus'),
(286, 'Computer', 'Samsung', 'Gaming', 1289, 'C', 'A', 0, 87, 13, 0, 96, 'Le Samsung Galaxy S8 est le nouveau fleuron de la marque coréenne. Equipé d\'un écran Super Amoled de 5,8 pouces sans bords, ce modèle se distingue par son format allongé au ratio 18,5:9. Puissant, il embarque le processeur Exynos 8895 avec 4 Go de mémoire vive.', 'https://www.compsource.com/mscs_images/new_pics/300/w0s99utaba_195.png', 'Samsung Chromebook Plus 513C24I', 'Moyen plus'),
(287, 'Phone', 'Apple', 'Office', 687, 'F', 'A', 0, 9, 6, 1, 7, 'Avec le MacBook Pro, l’ordinateur portable atteint des sommets inédits en matière de performances et de portabilité. Quelles que soient les contrées où vous mènera votre imagination, vous parviendrez plus vite que jamais à vos objectifs grâce, entre autres, à des processeurs et à une mémoire hautes performances, à des graphismes avancés et à un système de stockage d’une rapidité fulgurante.', 'https://www.smartphonerecycle.fr/smartphone/apple/iphone-xs-max/apple-iphone-xs-max-64go-medium.png', 'Apple iPhone XS', 'Pas bien du tout'),
(288, 'Phone', 'Apple', 'Design', 1122, 'D', 'D', 0, 32, 6, 0, 20, 'Avec le MacBook Pro, l’ordinateur portable atteint des sommets inédits en matière de performances et de portabilité. Quelles que soient les contrées où vous mènera votre imagination, vous parviendrez plus vite que jamais à vos objectifs grâce, entre autres, à des processeurs et à une mémoire hautes performances, à des graphismes avancés et à un système de stockage d’une rapidité fulgurante.', 'http://ynzal.com/wp-content/uploads/2015/02/ME297LLA1.png', 'Apple iPhone 5s', 'Moyen moins'),
(289, 'Phone', 'Apple', 'Design', 622, 'F', 'B', 1, 38, 5, 0, 37, 'Avec le MacBook Pro, l’ordinateur portable atteint des sommets inédits en matière de performances et de portabilité. Quelles que soient les contrées où vous mènera votre imagination, vous parviendrez plus vite que jamais à vos objectifs grâce, entre autres, à des processeurs et à une mémoire hautes performances, à des graphismes avancés et à un système de stockage d’une rapidité fulgurante.', 'https://www.smartphonerecycle.fr/smartphone/apple/iphone-8-plus/apple-iphone-8-256-go-medium.png', 'Apple iPhone 8', 'Pas bien du tout'),
(290, 'Phone', 'Apple', 'Video', 552, 'A', 'A', 0, 74, 4, 0, 45, 'Avec le MacBook Pro, l’ordinateur portable atteint des sommets inédits en matière de performances et de portabilité. Quelles que soient les contrées où vous mènera votre imagination, vous parviendrez plus vite que jamais à vos objectifs grâce, entre autres, à des processeurs et à une mémoire hautes performances, à des graphismes avancés et à un système de stockage d’une rapidité fulgurante.', 'https://d1kvfoyrif6wzg.cloudfront.net/assets/images/63/main/none_16d2b620f0f7ef5896ed3514d7085163_16d2b62.PNG', 'Apple iPhone 7', 'Tres bien'),
(291, 'Phone', 'Asus', 'Video', 448, 'B', 'F', 0, 88, 5, 0, 80, 'Jamais aucun autre ordinateur portable n\'avait offert autant de puissance que le ZenBook Pro 15. Ses performances sont plus rapides, son design plus élégant et son nouveau ScreenPad™ décuple votre créativité ! Avec le ZenBook Pro vous faites un saut dans le temps : le futur est ici et maintenant ! ', 'https://mon-set-up-gaming.fr/wp-content/uploads/2018/11/asus-rog-phone-300x300.png', 'Asus ROG PHONE', 'Bien'),
(292, 'Phone', 'Asus', 'Design', 764, 'F', 'C', 1, 82, 5, 1, 88, 'Jamais aucun autre ordinateur portable n\'avait offert autant de puissance que le ZenBook Pro 15. Ses performances sont plus rapides, son design plus élégant et son nouveau ScreenPad™ décuple votre créativité ! Avec le ZenBook Pro vous faites un saut dans le temps : le futur est ici et maintenant ! ', 'https://mon-set-up-gaming.fr/wp-content/uploads/2018/11/asus-rog-phone-300x300.png', 'ASUS ZenFone Max', 'Pas bien du tout'),
(293, 'Phone', 'Samsung', 'Design', 877, 'E', 'A', 1, 76, 5, 1, 53, 'Le Samsung Galaxy S8 est le nouveau fleuron de la marque coréenne. Equipé d\'un écran Super Amoled de 5,8 pouces sans bords, ce modèle se distingue par son format allongé au ratio 18,5:9. Puissant, il embarque le processeur Exynos 8895 avec 4 Go de mémoire vive.', 'https://i.ebayimg.com/images/g/B9wAAOSwze5bqz5x/s-l300.jpg', 'Samsung S9', 'Pas bien'),
(294, 'Phone', 'Samsung', 'Office', 1033, 'F', 'F', 0, 13, 4, 0, 67, 'Le Samsung Galaxy S8 est le nouveau fleuron de la marque coréenne. Equipé d\'un écran Super Amoled de 5,8 pouces sans bords, ce modèle se distingue par son format allongé au ratio 18,5:9. Puissant, il embarque le processeur Exynos 8895 avec 4 Go de mémoire vive..', 'http://i.priice.com/300/2-samsung-galaxy-a6plus-2018.jpg', 'Samsung A6', 'Pas bien du tout'),
(295, 'Phone', 'Samsung', 'Design', 496, 'A', 'B', 0, 28, 4, 1, 32, 'Le Samsung Galaxy S8 est le nouveau fleuron de la marque coréenne. Equipé d\'un écran Super Amoled de 5,8 pouces sans bords, ce modèle se distingue par son format allongé au ratio 18,5:9. Puissant, il embarque le processeur Exynos 8895 avec 4 Go de mémoire vive.', 'http://i.priice.com/300/samsung-galaxy-j6.jpg', 'Samsung J6', 'Tres bien'),
(296, 'Phone', 'Samsung', 'Video', 650, 'E', 'C', 1, 24, 5, 0, 81, 'Le Samsung Galaxy S8 est le nouveau fleuron de la marque coréenne. Equipé d\'un écran Super Amoled de 5,8 pouces sans bords, ce modèle se distingue par son format allongé au ratio 18,5:9. Puissant, il embarque le processeur Exynos 8895 avec 4 Go de mémoire vive.', 'http://i.priice.com/300/samsung-galaxy-a3-2016.png', 'Samsung J3', 'Pas bien'),
(297, 'Tv', 'Samsung', 'Office', 453, 'C', 'D', 0, 1, 40, 1, 59, 'La TV Led Samsung Galaxy est le nouveau fleuron de la marque coréenne. Equipée d\'un écran 4K de 40 pouces', ' ce modèle se distingue par son format allongé au ratio 18', '5:9. Puissant', ' il embarque Android TV'),
(298, 'Tablet', 'Apple', 'Design', 410, 'E', 'D', 0, 18, 11, 0, 70, 'Avec le MacBook Pro, l’ordinateur portable atteint des sommets inédits en matière de performances et de portabilité. Quelles que soient les contrées où vous mènera votre imagination, vous parviendrez plus vite que jamais à vos objectifs grâce, entre autres, à des processeurs et à une mémoire hautes performances, à des graphismes avancés et à un système de stockage d’une rapidité fulgurante.', 'https://png.pngtree.com/element_origin_min_pic/16/11/16/14582bf78fbc6a9.jpg', 'iPad 2', 'Pas bien');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
