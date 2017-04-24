CREATE TABLE IF NOT EXISTS `user_information` (
	idUser INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	fName VARCHAR(30) NOT NULL,
    lName VARCHAR(30) NOT NULL,
    username VARCHAR(50) NOT NULL,
    passwrd VARCHAR(300) NOT NULL,
    email VARCHAR(100) NOT NULL,
    country VARCHAR(20) NOT NULL,
    gender VARCHAR(15) NOT NULL,
    birthDay INT(5) NOT NULL,
    birthMonth VARCHAR(35) NOT NULL,
    birthYear INT(10) NOT NULL,
    UNIQUE (username)
);

CREATE TABLE IF NOT EXISTS `restaurant_information` (
	idRestaurant INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	rName VARCHAR(30) NOT NULL,
    rUsername VARCHAR(50) NOT NULL,
    passwrd VARCHAR(300) NOT NULL,
    address VARCHAR(50) NOT NULL,
    phone INT(20) NOT NULL,    
    email VARCHAR(100) NOT NULL,
    webpage VARCHAR(200) NOT NULL,
    openHour INT(5) NOT NULL,
    openMin INT(5) NOT NULL,
    closeHour INT(5) NOT NULL,
    closeMin INT(5) NOT NULL,
    securityKey VARCHAR(50) NOT NULL,
    maxCapacity INT(5) NOT NULL,
    UNIQUE (rUsername)
);

CREATE TABLE IF NOT EXISTS `promotions` (
	idPromotions INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    rUsername VARCHAR(50) NOT NULL,
	name VARCHAR(50) NOT NULL,
    descriptions VARCHAR(500) NOT NULL,
	imageURL VARCHAR(500) NOT NULL,
	startDay INT(5) NOT NULL,
    startMonth VARCHAR(35) NOT NULL,
    startYear INT(10) NOT NULL,
    endDay INT(5) NOT NULL,
    endMonth VARCHAR(35) NOT NULL,
    endYear INT(10) NOT NULL,
	FOREIGN KEY(rUsername) REFERENCES restaurant_information(rUsername)
);

CREATE TABLE IF NOT EXISTS `restaurant_reviews` (
	idReview INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    rUsername VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
	reviewText VARCHAR(300) NOT NULL,
	rating INT(5) NOT NULL,
	FOREIGN KEY(rUsername) REFERENCES restaurant_information(rUsername),
	FOREIGN KEY(username) REFERENCES user_information(username)
);

CREATE TABLE IF NOT EXISTS `consumer_fav_restaurants` (
	idRestaurant INT(8) UNSIGNED NOT NULL,
    idUser INT(8) UNSIGNED NOT NULL,
	FOREIGN KEY(idRestaurant) REFERENCES restaurant_information(idRestaurant),
	FOREIGN KEY(idUser) REFERENCES user_information(idUser)
);

ALTER TABLE `consumer_fav_restaurants`
ADD UNIQUE KEY `usersFavsResID` (`idRestaurant`,`idUser`);

CREATE TABLE IF NOT EXISTS `consumer_visits` (
	idVisit INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    rUsername VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    -- visitDay INT(5) NOT NULL,
    -- visitMonth VARCHAR(35) NOT NULL,
    -- visitYear INT(10) NOT NULL,
    -- arrivedHour INT(5) NOT NULL,
    -- arrivedMin INT(5) NOT NULL,
    -- leftHour INT(5) NOT NULL,
    -- leftMin INT(5) NOT NULL,
    timeArrived DATETIME(6) NULL,
    timeLeft DATETIME(6) NULL,
	FOREIGN KEY(rUsername) REFERENCES restaurant_information(rUsername),
	FOREIGN KEY(username) REFERENCES user_information(username)
);

INSERT INTO `user_information` (`idUser`, `fName`, `lName`, `username`, `passwrd`, `email`, `country`, `gender`, `birthDay`, `birthMonth`, `birthYear`) VALUES
(1, 'Alfredo', 'Salazar', 'alfredo08', 'alfred90', 'alfred@gmail.com', 'Mexico', 'male', 18, 6, 1987),
(2, 'Alicia', 'Rojas', 'aliceStar', 'aliceWonder', 'alithia@live.com.mx', 'China', 'female', 5, 5, 1995),
(3, 'Andres', 'Castro', 'andresito', 'ac146', 'acastro@hotmail.com', 'Singapur', 'male', 3, 8, 1994),
(4, 'Andrea', 'Sanchez', 'andypandy1', 'andy1', 'andy@gmail.com', 'South Korea', 'female', 5, 1, 1975),
(5, 'Beto', 'Ramirez', 'beto', '12', 'betito@gmail.com', 'India', 'male', 7, 2, 2005),
(6, 'Carolina', 'Romo', 'caroromo1', 'romo94', 'cromop1@gmail.com', 'Mexico', 'female', 11, 12, 1994),
(7, 'Carlos', 'Caceres', 'cbca', 'cbca952', 'cbca95@gmail.com', 'Mexico', 'male', 3, 1, 1995),
(8, 'Ivan', 'Romo', 'ivan0208', 'ivanleonardo', 'ivan.romo@hotmail.com', 'USA', 'male', 8, 2, 2002),
(9, 'Jacquelin', 'Romo', 'jacquitha', 'pato', 'jacky@gmail.com', 'Japan', 'female', 1, 4, 1998),
(10, 'Kin', 'Yun', 'ky789', '4567', 'kyu@gmail.com', 'Japan', 'male', 3, 3, 2003);
-- (11,'Laila', 'Porte', 'laila123', '123', 'lai@gmail.com', 'South Korea', 'female'),
-- (12,'Leo', 'Romo', 'leoRomo', 'leo1224', 'leo@gmail.com', 'India', 'male'),
-- (13,'Miguel', 'Rodríguez', 'miguelrod', 'miwo', 'miguel@hotmail.com', 'Mexico', 'male'),
-- (14,'Paola', 'Villareal', 'pao', '123', 'pao@gmail.com', 'USA', 'female'),
-- (15,'Daniel', 'Pro', 'pro1', 'dpc', 'pro@gmail.com', 'USA', 'male'),
-- (16,'Ruben', 'de la Pena', 'rubs', 'rubs', 'rub@gmail.com', 'Spain', 'male'),
-- (17,'Roberto', 'Navarro', 'Snake13', 'betito', 'beto@hotmail.com', 'Germany', 'male'),
-- (18,'Sofia', 'Romero', 'sofiQueen', 'sofisofi', 'sofia-romero@gmail.com', 'Spain', 'female'),
-- (19,'Susy', 'Berrones', 'SusyB', 'susyf', 'susyflor@gmail.com', 'Italy', 'female'),
-- (20,'Pamela', 'Rodriguez', 'thePam22', '22mapeht', 'pame@gmail.com', 'Mexico', 'female');

INSERT INTO `restaurant_information` (`rName`, `rUsername`, `passwrd`, `address`, `phone`, `email`, `webpage`, `openHour`, `openMin`, `closeHour`, `closeMin`, `securityKey`, `maxCapacity`) VALUES
("Carl's Jr.", "carlsjr", "mcsucks", "Humberto Lobo 1015", 81203045, "carlsjr@hotmail.com", "www.carlsjr.com", 8, 30, 23, 0, "1a2s3d4f5g6h14g", 40),
("Mr. Brown", "mrbrown", "white", "Eugenio Garza Sada 123", 81301243, "mrbrown@hotmail.com", "www.mrbrown.com", 9, 0, 22, 0, "9a1f3d4t5g6k33e", 25),
("Buffalo Wild Wings", "bww", "alitas", "Alfonso Reyes 345", 83046869, "bww@hotmail.com", "www.bww.com", 8, 30, 22, 0, "673ftd4f5gutubn", 50);

INSERT INTO `promotions` (`rUsername`, `name`, `descriptions`, `imageURL`, `startDay`, `startMonth`, `startYear`, `endDay`, `endMonth`, `endYear`) VALUES
("carlsjr", "2x1 burgers", "Pay one burger, get two!", "images/carlsjr/promo1.jpg", 3, 1, 2017, 31, 1, 2017),
("carlsjr", "2x1 Nuggets", "Pay one order, get two!", "images/carlsjr/promo2.jpg", 3, 1, 2017, 15, 1, 2017),
("carlsjr", "2x1 milkshake", "Pay one milkshake, get two!", "images/carlsjr/promo3.jpg", 3, 1, 2017, 10, 1, 2017),
("mrbrown", "Free-burger", "Get one burger free.", "images/carlsjr/promo4.jpg", 3, 1, 2017, 5, 2, 2017);

INSERT INTO `restaurant_reviews` (`rUsername`, `username`, `reviewText`, `rating`) VALUES
("carlsjr", "cbca", "Amo sus westerns! Recomendado.", 4),
("carlsjr", "beto", "No vienen bien calentadas las hamburguesas.", 2),
("carlsjr", "caroromo1", "Muy ricas :)", 5);

INSERT INTO `consumer_fav_restaurants` (`idRestaurant`, `idUser`) VALUES
(1, 7),
(1, 6),
(1, 1),
(2, 7),
(2, 6),
(2, 1),
(3, 9);

INSERT INTO `consumer_visits` (`rUsername`, `username`,`timeArrived`, `timeLeft`) VALUES
('carlsjr', 'alfredo08', '2017-04-19 10:14:30', '2017-04-19 12:30:00'),
('carlsjr', 'cbca', '2017-04-13 16:00:00', '2017-04-13 17:00:00'),
('carlsjr', 'caroromo1', '2017-04-26 12:00:00', '2017-04-26 13:00:00'),
('bww', 'alfredo08', '2017-04-19 10:14:30', '2017-04-19 12:30:00');


