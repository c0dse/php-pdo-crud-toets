CREATE DATABASE IF NOT EXISTS `php-pdo-crud-toets`;
USE `php-pdo-crud-toets`;

DROP TABLE IF EXISTS `DureAuto`;
CREATE TABLE IF NOT EXISTS `DureAuto` (
  `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Merk` varchar(200) NOT NULL,
  `Model` varchar(200) NOT NULL,
  `Topsnelheid` smallint(4) NOT NULL,
  `Prijs` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `DureAUto` (`Id`, `Merk`, `Model`, `Topsnelheid`, `Prijs`) VALUES
(1, `Bugatti`, `La voiture noire`, 420, '16500000'),
(2, `Rolls-Royce`, `Swaptail`, 250, `10960000`),
(3, `Bugatti`, `EB110`, 390, `7500000`),
(4, `Mercedes-Benz`, `Maybach Exelero`, 350, `6700000`),
(5, `Koenigsegg`, `CCXR Trevita`, 401, ``);
