-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 24, 2017 at 05:21 PM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `restaurant_app_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `consumer_fav_restaurants`
--

CREATE TABLE `consumer_fav_restaurants` (
  `idRestaurant` int(8) UNSIGNED NOT NULL,
  `idUser` int(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consumer_fav_restaurants`
--

INSERT INTO `consumer_fav_restaurants` (`idRestaurant`, `idUser`) VALUES
(1, 1),
(2, 1),
(1, 6),
(2, 6),
(1, 7),
(2, 7),
(3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `consumer_visits`
--

CREATE TABLE `consumer_visits` (
  `idVisit` int(8) UNSIGNED NOT NULL,
  `rUsername` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `timeArrived` datetime(6) DEFAULT NULL,
  `timeLeft` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consumer_visits`
--

INSERT INTO `consumer_visits` (`idVisit`, `rUsername`, `username`, `timeArrived`, `timeLeft`) VALUES
(1, 'carlsjr', 'alfredo08', '2017-04-19 10:14:30.000000', '2017-04-19 12:30:00.000000'),
(2, 'carlsjr', 'cbca', '2017-04-13 16:00:00.000000', '2017-04-13 17:00:00.000000'),
(3, 'carlsjr', 'caroromo1', '2017-04-26 12:00:00.000000', '2017-04-26 13:00:00.000000'),
(4, 'bww', 'alfredo08', '2017-04-19 10:14:30.000000', '2017-04-19 12:30:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `idPromotions` int(8) UNSIGNED NOT NULL,
  `rUsername` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `descriptions` varchar(500) NOT NULL,
  `imageURL` varchar(500) NOT NULL,
  `startDay` int(5) NOT NULL,
  `startMonth` varchar(35) NOT NULL,
  `startYear` int(10) NOT NULL,
  `endDay` int(5) NOT NULL,
  `endMonth` varchar(35) NOT NULL,
  `endYear` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`idPromotions`, `rUsername`, `name`, `descriptions`, `imageURL`, `startDay`, `startMonth`, `startYear`, `endDay`, `endMonth`, `endYear`) VALUES
(1, 'carlsjr', '2x1 burgers', 'Pay one burger, get two!', 'images/carlsjr/promo1.jpg', 3, '1', 2017, 31, '1', 2017),
(2, 'carlsjr', '2x1 Nuggets', 'Pay one order, get two!', 'images/carlsjr/promo2.jpg', 3, '1', 2017, 15, '1', 2017),
(3, 'carlsjr', '2x1 milkshake', 'Pay one milkshake, get two!', 'images/carlsjr/promo3.jpg', 3, '1', 2017, 10, '1', 2017),
(4, 'mrbrown', 'Free-burger', 'Get one burger free.', 'images/carlsjr/promo4.jpg', 3, '1', 2017, 5, '2', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_information`
--

CREATE TABLE `restaurant_information` (
  `idRestaurant` int(8) UNSIGNED NOT NULL,
  `rName` varchar(30) NOT NULL,
  `rUsername` varchar(50) NOT NULL,
  `passwrd` varchar(300) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `webpage` varchar(200) NOT NULL,
  `openHour` int(5) NOT NULL,
  `openMin` int(5) NOT NULL,
  `closeHour` int(5) NOT NULL,
  `closeMin` int(5) NOT NULL,
  `securityKey` varchar(50) NOT NULL,
  `maxCapacity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant_information`
--

INSERT INTO `restaurant_information` (`idRestaurant`, `rName`, `rUsername`, `passwrd`, `address`, `phone`, `email`, `webpage`, `openHour`, `openMin`, `closeHour`, `closeMin`, `securityKey`, `maxCapacity`) VALUES
(1, 'Carl\'s Jr.', 'carlsjr', 'mcsucks', 'Humberto Lobo 1015', 81203045, 'carlsjr@hotmail.com', 'www.carlsjr.com', 8, 30, 23, 0, '1a2s3d4f5g6h14g', 40),
(2, 'Mr. Brown', 'mrbrown', 'white', 'Eugenio Garza Sada 123', 81301243, 'mrbrown@hotmail.com', 'www.mrbrown.com', 9, 0, 22, 0, '9a1f3d4t5g6k33e', 25),
(3, 'Buffalo Wild Wings', 'bww', 'alitas', 'Alfonso Reyes 345', 83046869, 'bww@hotmail.com', 'www.bww.com', 8, 30, 22, 0, '673ftd4f5gutubn', 50),
(4, 'McDonalds', 'mcdonalds', '1234', 'Garza Sada #3276', 81848586, 'mcdonalds@mail.com', 'www.mcdonalds.com.mx/', 7, 30, 22, 0, '12345681', 50),
(5, 'Gulia', 'gulia', 'holagulia', 'Paseo Tec 2', 82838486, 'gulia@restaurant.com', 'http://www.restaurantegiulia.com/ristorante.htm', 14, 35, 23, 0, '56472hdsj', 35),
(6, 'Wok', 'wok', 'wokwok12', 'Plaza Garza Sada', 89834746, 'wok@orientalwok.com', 'orientalwok.mx/', 12, 30, 20, 0, 'sdfssdf72hdsjfded', 40),
(7, 'IHOP', 'ihop', 'desayunos', 'Alfonso Reyes', 89901267, 'ihop@ihopmexico.com', 'www.ihopmexico.com/', 7, 30, 20, 0, 'f347ruy4h3iutnhi45gtiuf45', 55),
(8, 'Las Alitas', 'lasalitas', 'salsadeli', 'Av. Garza Sada 1892', 87456734, 'alitas@gmail.com', 'alitas.lasalitas.com/', 18, 30, 23, 0, 'frtrguy4gtf8gi45u', 45),
(9, 'Nikkori', 'nikkori', 'sushi12', 'Av Lazaro Cardenas 1592', 83273645, 'nikkorisushi@hotmail.com', 'nikkori.mx/', 12, 35, 22, 0, 'rg438tgr483g7iu5br3', 35),
(10, 'Silvannos', 'silvannos', 'italiano', 'Paseo Tec, Av Eugenio Garza Sada', 88327865, 'silvannos@gmail.com', 'https://es-la.facebook.com/RestauranteSilvanos/', 12, 0, 0, 0, 'fi4refbi54utre43', 50),
(11, 'Wingstop', 'wingstop', 'oneless', ' Garza Sada 3820', 80172835, 'wingstop@hotmail.com', 'www.wingstop.com/menu/', 15, 10, 23, 0, 'ferfeggrtg843y78tgby4bf4', 25),
(12, 'Super Salads', 'supersalads', 'ensaldas', 'Plaza Garza Sada', 84690345, 'supersalads@gmail.com', 'supersalads.com', 12, 30, 21, 0, 'y4r78g34e8ti54ieg4', 25);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_reviews`
--

CREATE TABLE `restaurant_reviews` (
  `idReview` int(8) UNSIGNED NOT NULL,
  `rUsername` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `reviewText` varchar(300) NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant_reviews`
--

INSERT INTO `restaurant_reviews` (`idReview`, `rUsername`, `username`, `reviewText`, `rating`) VALUES
(1, 'carlsjr', 'cbca', 'Amo sus westerns! Recomendado.', 4),
(2, 'carlsjr', 'beto', 'No vienen bien calentadas las hamburguesas.', 2),
(3, 'carlsjr', 'caroromo1', 'Muy ricas :)', 5),
(7, 'carlsjr', 'caroromo1', 'Muy caros sus alimentos', 3),
(8, 'wok', 'miguelrod', 'El mejor servicio!', 5),
(9, 'wok', 'paocaro', 'El sushi mas rico', 4),
(10, 'carlsjr', 'paocaro', 'Pocas ensaladas', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `idUser` int(8) UNSIGNED NOT NULL,
  `fName` varchar(30) NOT NULL,
  `lName` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwrd` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `birthDay` int(5) NOT NULL,
  `birthMonth` varchar(35) NOT NULL,
  `birthYear` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`idUser`, `fName`, `lName`, `username`, `passwrd`, `email`, `country`, `gender`, `birthDay`, `birthMonth`, `birthYear`) VALUES
(1, 'Alfredo', 'Salazar', 'alfredo08', 'alfred90', 'alfred@gmail.com', 'Mexico', 'male', 18, '6', 1987),
(2, 'Alicia', 'Rojas', 'aliceStar', 'aliceWonder', 'alithia@live.com.mx', 'China', 'female', 5, '5', 1995),
(3, 'Andres', 'Castro', 'andresito', 'ac146', 'acastro@hotmail.com', 'Singapur', 'male', 3, '8', 1994),
(4, 'Andrea', 'Sanchez', 'andypandy1', 'andy1', 'andy@gmail.com', 'South Korea', 'female', 5, '1', 1975),
(5, 'Beto', 'Ramirez', 'beto', '12', 'betito@gmail.com', 'India', 'male', 7, '2', 2005),
(6, 'Carolina', 'Romo', 'caroromo1', 'romo94', 'cromop1@gmail.com', 'Mexico', 'female', 11, '12', 1994),
(7, 'Carlos', 'Caceres', 'cbca', 'cbca952', 'cbca95@gmail.com', 'Mexico', 'male', 3, '1', 1995),
(8, 'Ivan', 'Romo', 'ivan0208', 'ivanleonardo', 'ivan.romo@hotmail.com', 'USA', 'male', 8, '2', 2002),
(9, 'Jacquelin', 'Romo', 'jacquitha', 'pato', 'jacky@gmail.com', 'Japan', 'female', 1, '4', 1998),
(10, 'Kin', 'Yun', 'ky789', '4567', 'kyu@gmail.com', 'Japan', 'male', 3, '3', 2003),
(11, 'Miguel', 'Rodriguez', 'miguelrod', 'miguelmiguel', 'miguelrod@gmail.com', 'Mexico', 'male', 23, '02', 1995),
(12, 'Paola', 'Villareal', 'paocaro', 'carlosb', 'pao@gmail.com', 'Japan', 'female', 16, '06', 1995);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consumer_fav_restaurants`
--
ALTER TABLE `consumer_fav_restaurants`
  ADD UNIQUE KEY `usersFavsResID` (`idRestaurant`,`idUser`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `consumer_visits`
--
ALTER TABLE `consumer_visits`
  ADD PRIMARY KEY (`idVisit`),
  ADD KEY `rUsername` (`rUsername`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`idPromotions`),
  ADD KEY `rUsername` (`rUsername`);

--
-- Indexes for table `restaurant_information`
--
ALTER TABLE `restaurant_information`
  ADD PRIMARY KEY (`idRestaurant`),
  ADD UNIQUE KEY `rUsername` (`rUsername`);

--
-- Indexes for table `restaurant_reviews`
--
ALTER TABLE `restaurant_reviews`
  ADD PRIMARY KEY (`idReview`),
  ADD KEY `rUsername` (`rUsername`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consumer_visits`
--
ALTER TABLE `consumer_visits`
  MODIFY `idVisit` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `idPromotions` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `restaurant_information`
--
ALTER TABLE `restaurant_information`
  MODIFY `idRestaurant` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `restaurant_reviews`
--
ALTER TABLE `restaurant_reviews`
  MODIFY `idReview` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `idUser` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `consumer_fav_restaurants`
--
ALTER TABLE `consumer_fav_restaurants`
  ADD CONSTRAINT `consumer_fav_restaurants_ibfk_1` FOREIGN KEY (`idRestaurant`) REFERENCES `restaurant_information` (`idRestaurant`),
  ADD CONSTRAINT `consumer_fav_restaurants_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user_information` (`idUser`);

--
-- Constraints for table `consumer_visits`
--
ALTER TABLE `consumer_visits`
  ADD CONSTRAINT `consumer_visits_ibfk_1` FOREIGN KEY (`rUsername`) REFERENCES `restaurant_information` (`rUsername`),
  ADD CONSTRAINT `consumer_visits_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user_information` (`username`);

--
-- Constraints for table `promotions`
--
ALTER TABLE `promotions`
  ADD CONSTRAINT `promotions_ibfk_1` FOREIGN KEY (`rUsername`) REFERENCES `restaurant_information` (`rUsername`);

--
-- Constraints for table `restaurant_reviews`
--
ALTER TABLE `restaurant_reviews`
  ADD CONSTRAINT `restaurant_reviews_ibfk_1` FOREIGN KEY (`rUsername`) REFERENCES `restaurant_information` (`rUsername`),
  ADD CONSTRAINT `restaurant_reviews_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user_information` (`username`);
