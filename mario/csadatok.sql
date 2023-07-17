-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gép: mysql.omega:3306
-- Létrehozás ideje: 2022. Máj 07. 22:05
-- Kiszolgáló verziója: 5.7.37-log
-- PHP verzió: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `csadatok`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tabla`
--

CREATE TABLE `tabla` (
  `Sor` int(10) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Titkos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `tabla`
--

INSERT INTO `tabla` (`Sor`, `Username`, `Titkos`) VALUES
(1, 'katika@gmail.com', 'piros'),
(2, 'arpi40@freemail.hu', 'zold'),
(3, 'zsanettka@hotmail.com', 'sarga'),
(4, 'hatizsak@protonmail.com', 'kek'),
(5, 'terpeszterez@citromail.hu', 'fekete'),
(6, 'nagysanyi@gmail.hu', 'feher');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `tabla`
--
ALTER TABLE `tabla`
  ADD PRIMARY KEY (`Sor`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `tabla`
--
ALTER TABLE `tabla`
  MODIFY `Sor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
