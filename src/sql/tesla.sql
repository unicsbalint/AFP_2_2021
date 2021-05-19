-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Máj 15. 16:06
-- Kiszolgáló verziója: 10.4.17-MariaDB
-- PHP verzió: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `tesla`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `car`
--

CREATE TABLE `car` (
  `id_car` int(11) NOT NULL,
  `id_extra` int(11) DEFAULT NULL,
  `id_color` int(11) NOT NULL,
  `id_model` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `car`
--

INSERT INTO `car` (`id_car`, `id_extra`, `id_color`, `id_model`) VALUES
(1, 3, 3, 1),
(3, 1, 1, 1),
(4, 3, 2, 1),
(5, 3, 4, 1),
(6, 3, 3, 1),
(7, 4, 3, 4),
(8, 3, 4, 1),
(9, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `color`
--

CREATE TABLE `color` (
  `id_color` int(11) NOT NULL,
  `color` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `color`
--

INSERT INTO `color` (`id_color`, `color`, `name`) VALUES
(1, 'black', 'Rough Black'),
(2, 'white', 'Bright Metal White'),
(3, 'Gray', 'Metal Gray'),
(4, 'blue', 'Sky Blue'),
(5, 'red', 'Rose red');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `extra`
--

CREATE TABLE `extra` (
  `_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `interior_id` int(11) DEFAULT NULL,
  `wheel` int(11) DEFAULT NULL,
  `engine` varchar(200) DEFAULT NULL,
  `compatible_with` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `extra`
--

INSERT INTO `extra` (`_id`, `description`, `price`, `interior_id`, `wheel`, `engine`, `compatible_with`) VALUES
(1, 'Basic package', 0, 1, 17, 'Single', '1,2,3,4'),
(2, 'Bigger wheels, textil interior package', 5000, 1, 19, 'Single', '1,2,3,4'),
(3, 'Crazy power with dual motor (700hp), and alcantara interior package', 6000, 1, 19, 'Dual', '1,2,3,4'),
(4, 'Crazy power with dual motor (700hp), premium quality interior', 15000, 2, 22, 'Dual', '1,2,3,4');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `interior`
--

CREATE TABLE `interior` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `interior`
--

INSERT INTO `interior` (`id`, `type`, `color`) VALUES
(1, 'Leather', 'Black'),
(2, 'Leather', 'White'),
(3, 'Alcantara', 'Gray'),
(4, 'Textil', 'Black');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `model`
--

CREATE TABLE `model` (
  `id` int(11) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `model_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `model`
--

INSERT INTO `model` (`id`, `model_name`, `model_price`) VALUES
(1, 'Model S', '50000'),
(2, 'Model 3', '35000'),
(3, 'Model X', '55000'),
(4, 'Model Y', '42000');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `orders`
--

INSERT INTO `orders` (`id`, `description`, `user_id`, `car_id`) VALUES
(2, '', 15, 1),
(3, 'asd', 16, 3),
(7, 'asdasqweqweqwe', 16, 7),
(9, '', 49, 9);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(84) DEFAULT NULL,
  `vat_number` varchar(11) DEFAULT NULL,
  `post_address` varchar(84) DEFAULT NULL,
  `post_name` varchar(84) DEFAULT NULL,
  `post_phone_number` varchar(84) DEFAULT NULL,
  `token` varchar(20) NOT NULL,
  `is_verify` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `address`, `password`, `phone_number`, `vat_number`, `post_address`, `post_name`, `post_phone_number`, `token`, `is_verify`) VALUES
(15, 'Cserneczky Bálint', 'cserneczkybalint@gmail.com', 'Hatvan Rákóczi út 8.', 'b30854c7c4c3e2abf1230da7a56a29fb23995871', '304502145', '444444444', NULL, NULL, NULL, '', NULL),
(49, 'Teszt Elek', 'hollomark1996@gmail.com', 'Fogarasi út 43/C', '7c4a8d09ca3762af61e59520943dc26494f8941b', '304502145', '15645489', 'Fogarasi út 43/C', 'fsdfdsf', '304502145', 'aG9sbG9tYXJrMTk5NkBn', NULL);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id_car`);

--
-- A tábla indexei `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_color`);

--
-- A tábla indexei `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`_id`);

--
-- A tábla indexei `interior`
--
ALTER TABLE `interior`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `car`
--
ALTER TABLE `car`
  MODIFY `id_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT a táblához `color`
--
ALTER TABLE `color`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `extra`
--
ALTER TABLE `extra`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `interior`
--
ALTER TABLE `interior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `model`
--
ALTER TABLE `model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT a táblához `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
