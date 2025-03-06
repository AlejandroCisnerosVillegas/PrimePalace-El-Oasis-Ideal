-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2025 a las 04:05:05
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `general`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_06_admin`
--

CREATE TABLE `project_06_admin` (
  `adminid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `empid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `project_06_admin`
--

INSERT INTO `project_06_admin` (`adminid`, `password`, `empid`) VALUES
('Alejandro', '12345', '092344'),
('Cristian', '12345', '092345'),
('Cisneros', '12345', '092346'),
('Villegas', '12345', '092347');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_06_balance`
--

CREATE TABLE `project_06_balance` (
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `project_06_balance`
--

INSERT INTO `project_06_balance` (`balance`) VALUES
(1918200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_06_booked_hist`
--

CREATE TABLE `project_06_booked_hist` (
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `ac` varchar(5) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `project_06_booked_hist`
--

INSERT INTO `project_06_booked_hist` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `price`, `book_id`) VALUES
(2147483647, 'María García', 'GAPM950523MDFLRN09', 'Suite Ejecutiva', '2021-05-20', '2022-03-23', 7, 'true', 'true', 'true', 'false', 'false', 'false', 100100, 10025),
(2147483647, 'Juan Martínez Rodríg', 'MARR760710HDFRTL08', 'Suite Ejecutiva', '2021-02-01', '2021-05-12', 9, 'false', 'true', 'true', 'false', 'true', 'false', 125550, 10036),
(2147483647, 'Carlos Hernández', 'HERC710215MDFRZL05', 'Suite Presidencial', '2021-02-01', '2021-06-14', 12, 'false', 'true', 'true', 'false', 'false', 'true', 228000, 10041),
(2147483647, 'Alejandra López', 'LOSS850428MDFLJL02', 'Suite Presidencial', '2021-02-01', '2021-03-16', 13, 'false', 'true', 'true', 'false', 'true', 'false', 259350, 10046),
(2147483647, 'Laura Ramírez', 'RAGL800703MDFRMU00', 'Suite Presidencial', '2021-02-01', '2021-05-10', 7, 'false', 'true', 'true', 'false', 'true', 'false', 139650, 10051),
(2147483647, ' Alejandro Pérez', 'PEMT900525MDFLXL01', 'Habitacion Estandar', '2021-02-01', '2021-05-18', 15, 'false', 'true', 'false', 'true', 'false', 'true', 101250, 10055),
(2147483647, 'Jorge Díaz', 'DIGJ880512MDFRZR07', 'Suite Presidencial', '2021-02-01', '2021-06-16', 14, 'false', 'true', 'true', 'false', 'true', 'false', 279300, 10077),
(2147483647, 'Andrea Martínez', 'MARR830927MDFRYS06', 'Suite Ejecutiva', '2021-02-01', '2021-03-01', 28, 'true', 'false', 'true', 'false', 'true', 'false', 424200, 10072),
(2147483647, 'Miguel González', 'GOJM750320MDFNZG03', 'Suite Presidencial', '2021-02-01', '2021-03-10', 7, 'false', 'true', 'true', 'false', 'true', 'false', 139650, 10066),
(2147483647, 'Diana Rodríguez', 'RODD840712MDFRLN08', 'Habitacion Estandar', '2021-02-01', '2021-04-19', 16, 'false', 'true', 'false', 'true', 'false', 'true', 108000, 10060);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_06_book_id`
--

CREATE TABLE `project_06_book_id` (
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `project_06_book_id`
--

INSERT INTO `project_06_book_id` (`book_id`) VALUES
(10078);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_06_confirmed_booking`
--

CREATE TABLE `project_06_confirmed_booking` (
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `ac` varchar(5) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `project_06_confirmed_booking`
--

INSERT INTO `project_06_confirmed_booking` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `price`, `book_id`) VALUES
(2147483647, 'María García', 'GAPM950523MDFLRN09', 'Habitacion Estandar', '2021-02-01', '2021-03-01', 28, 'true', 'true', 'false', 'false', 'false', 'false', 218400, 10026),
(2147483647, 'Juan Martínez Rodríg', 'MARR760710HDFRTL08', 'Habitacion Estandar', '2021-02-01', '2021-07-07', 5, 'false', 'true', 'false', 'true', 'false', 'true', 33750, 10035),
(2147483647, 'Carlos Hernández', 'HERC710215MDFRZL05', 'Habitacion Estandar', '2021-02-19', '2021-03-19', 28, 'false', 'true', 'false', 'true', 'false', 'true', 189000, 10040),
(2147483647, 'Alejandra López', 'LOSS850428MDFLJL02', 'Habitacion Estandar', '2021-02-01', '2021-06-15', 13, 'false', 'true', 'false', 'true', 'false', 'true', 87750, 10045),
(2147483647, 'Laura Ramírez', 'RAGL800703MDFRMU00', 'Habitacion Estandar', '2021-02-01', '2021-04-27', 24, 'false', 'true', 'false', 'true', 'false', 'true', 162000, 10050),
(2147483647, ' Alejandro Pérez', 'PEMT900525MDFLXL01', 'Suite Presidencial', '2021-02-01', '2021-07-05', 3, 'false', 'true', 'true', 'false', 'true', 'false', 59850, 10056),
(2147483647, 'Diana Rodríguez', 'RODD840712MDFRLN08', 'Suite Presidencial', '2021-02-01', '2021-07-12', 10, 'false', 'true', 'true', 'false', 'true', 'false', 199500, 10061),
(2147483647, 'Miguel González', 'GOJM750320MDFNZG03', 'Habitacion Estandar', '2021-02-01', '2021-03-24', 21, 'true', 'true', 'true', 'false', 'false', 'false', 174300, 10062),
(2147483647, 'Andrea Martínez', 'MARR830927MDFRYS06', 'Habitacion Estandar', '2021-02-01', '2021-03-02', 29, 'true', 'true', 'true', 'false', 'false', 'false', 240700, 10067),
(2147483647, 'Jorge Díaz', 'DIGJ880512MDFRZR07', 'Habitacion Estandar', '2021-02-01', '2021-05-17', 14, 'false', 'true', 'false', 'true', 'false', 'true', 94500, 10076);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_06_rooms_count`
--

CREATE TABLE `project_06_rooms_count` (
  `room_type` varchar(20) NOT NULL,
  `available_rooms` int(11) NOT NULL,
  `occupied_rooms` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `project_06_rooms_count`
--

INSERT INTO `project_06_rooms_count` (`room_type`, `available_rooms`, `occupied_rooms`, `price`) VALUES
('Habitacion Estandar', 7, 9, 6000),
('Suite Ejecutiva', 14, 1, 12000),
('Suite Presidencial', 13, 3, 18000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_06_temp`
--

CREATE TABLE `project_06_temp` (
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_06_temp_book`
--

CREATE TABLE `project_06_temp_book` (
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_06_temp_room`
--

CREATE TABLE `project_06_temp_room` (
  `phone` int(11) NOT NULL,
  `idproof` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_06_temp_session`
--

CREATE TABLE `project_06_temp_session` (
  `phone` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `project_06_temp_session`
--

INSERT INTO `project_06_temp_session` (`phone`, `password`, `name`, `email`, `idproof`, `dob`) VALUES
(2147483647, 'Maria1234', 'María García', 'mariagarcia@gmail.com', 'GAPM950523MDFLRN09', '1995-05-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_06_user_login`
--

CREATE TABLE `project_06_user_login` (
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `project_06_user_login`
--

INSERT INTO `project_06_user_login` (`phone`, `password`, `name`, `email`, `idproof`, `dob`) VALUES
('5512345678', 'Maria1234', 'María García', 'mariagarcia@gmail.com', 'GAPM950523MDFLRN09', '1995-05-23'),
('5587654321', 'Juanito76', 'Juan Martínez Rodríg', 'juanmr76@hotmail.com', 'MARR760710HDFRTL08', '1976-07-10'),
('5524681357', 'Alejandra85', 'Alejandra López', 'ale_lopez85@yahoo.com', 'LOSS850428MDFLJL02', '1985-04-28'),
('5536981472', 'Carlos1971', 'Carlos Hernández', 'chernandez71@gmail.com', 'HERC710215MDFRZL05', '1971-02-15'),
('5598765432', 'LauraR80', 'Laura Ramírez', 'laurarmz80@hotmail.com', 'RAGL800703MDFRMU00', '1980-07-03'),
('5574123698', 'Alex1990', ' Alejandro Pérez', 'alejandro_pm90@yahoo.com', 'PEMT900525MDFLXL01', '1990-05-25'),
('5565432109', 'Diana1984', 'Diana Rodríguez', 'diana_rm84@gmail.com', 'RODD840712MDFRLN08', '1984-07-12'),
('5512345678', 'Miguel75', 'Miguel González', 'miguelgj75@hotmail.com', 'GOJM750320MDFNZG03', '1975-03-20'),
('5598765432', 'Andy1983', 'Andrea Martínez', 'andreamr83@yahoo.com', 'MARR830927MDFRYS06', '1983-09-27'),
('5536981472', 'JorgeD88', 'Jorge Díaz', 'jorgedg88@gmail.com', 'DIGJ880512MDFRZR07', '1988-05-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_06_user_room`
--

CREATE TABLE `project_06_user_room` (
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `ac` varchar(5) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Waiting',
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `project_06_user_room`
--

INSERT INTO `project_06_user_room` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `status`, `price`, `book_id`) VALUES
(2147483647, 'María García', 'GAPM950523MDFLRN09', 'Habitacion Estandar', '2021-02-01', '2021-03-01', 28, 'false', 'true', 'true', 'true', 'false', 'false', 'Pendiente', 197400, 10029),
(2147483647, 'María García', 'GAPM950523MDFLRN09', 'Suite Ejecutiva', '2021-02-01', '2021-04-22', 19, 'true', 'false', 'true', 'false', 'true', 'false', 'Pendiente', 287850, 10030),
(2147483647, 'María García', 'GAPM950523MDFLRN09', 'Suite Presidencial', '2021-02-01', '2021-04-30', 27, 'true', 'true', 'false', 'false', 'false', 'true', 'Pendiente', 540000, 10031),
(2147483647, 'Juan Martínez Rodríg', 'MARR760710HDFRTL08', 'Habitacion Estandar', '2021-02-01', '2021-03-14', 11, 'true', 'true', 'true', 'false', 'false', 'false', 'Pendiente', 91300, 10032),
(2147483647, 'Juan Martínez Rodríg', 'MARR760710HDFRTL08', 'Suite Ejecutiva', '2021-02-01', '2021-03-19', 16, 'false', 'false', 'false', 'true', 'true', 'true', 'Pendiente', 217600, 10033),
(2147483647, 'Juan Martínez Rodríg', 'MARR760710HDFRTL08', 'Suite Presidencial', '2021-02-01', '2021-04-24', 21, 'true', 'false', 'true', 'false', 'true', 'false', 'Pendiente', 444150, 10034),
(2147483647, 'Carlos Hernández', 'HERC710215MDFRZL05', 'Habitacion Estandar', '2021-02-01', '2021-03-12', 9, 'true', 'true', 'true', 'false', 'false', 'false', 'Pendiente', 74700, 10037),
(2147483647, 'Carlos Hernández', 'HERC710215MDFRZL05', 'Suite Ejecutiva', '2021-02-01', '2021-04-10', 7, 'false', 'false', 'false', 'true', 'true', 'true', 'Pendiente', 95200, 10038),
(2147483647, 'Carlos Hernández', 'HERC710215MDFRZL05', 'Suite Presidencial', '2021-02-01', '2021-06-16', 14, 'true', 'false', 'true', 'false', 'true', 'false', 'Pendiente', 296100, 10039),
(2147483647, 'Alejandra López', 'LOSS850428MDFLJL02', 'Habitacion Estandar', '2021-02-01', '2021-05-27', 24, 'true', 'true', 'true', 'false', 'false', 'false', 'Pendiente', 199200, 10042),
(2147483647, 'Alejandra López', 'LOSS850428MDFLJL02', 'Suite Ejecutiva', '2021-02-01', '2021-06-17', 15, 'false', 'false', 'false', 'true', 'true', 'true', 'Pendiente', 204000, 10043),
(2147483647, 'Alejandra López', 'LOSS850428MDFLJL02', 'Suite Presidencial', '2021-02-01', '2021-05-25', 22, 'true', 'false', 'true', 'false', 'true', 'false', 'Pendiente', 465300, 10044),
(2147483647, 'Laura Ramírez', 'RAGL800703MDFRMU00', 'Habitacion Estandar', '2021-02-01', '2021-03-10', 7, 'true', 'true', 'true', 'false', 'false', 'false', 'Pendiente', 58100, 10047),
(2147483647, 'Laura Ramírez', 'RAGL800703MDFRMU00', 'Suite Ejecutiva', '2021-02-01', '2021-03-17', 14, 'false', 'false', 'false', 'true', 'true', 'true', 'Pendiente', 190400, 10048),
(2147483647, 'Laura Ramírez', 'RAGL800703MDFRMU00', 'Suite Presidencial', '2021-02-24', '2021-04-09', 13, 'true', 'false', 'true', 'false', 'true', 'false', 'Pendiente', 274950, 10049),
(2147483647, ' Alejandro Pérez', 'PEMT900525MDFLXL01', 'Habitacion Estandar', '2021-02-01', '2021-03-27', 24, 'true', 'true', 'true', 'false', 'false', 'false', 'Pendiente', 199200, 10052),
(2147483647, ' Alejandro Pérez', 'PEMT900525MDFLXL01', 'Suite Ejecutiva', '2021-02-01', '2021-03-29', 25, 'false', 'false', 'false', 'true', 'true', 'true', 'Pendiente', 340000, 10053),
(2147483647, ' Alejandro Pérez', 'PEMT900525MDFLXL01', 'Suite Presidencial', '2021-02-01', '2021-03-08', 5, 'true', 'false', 'true', 'false', 'true', 'false', 'Pendiente', 105750, 10054),
(2147483647, 'Diana Rodríguez', 'RODD840712MDFRLN08', 'Habitacion Estandar', '2021-02-01', '2021-05-22', 19, 'true', 'true', 'true', 'false', 'false', 'false', 'Pendiente', 157700, 10057),
(2147483647, 'Diana Rodríguez', 'RODD840712MDFRLN08', 'Suite Ejecutiva', '2021-02-01', '2021-07-20', 18, 'false', 'false', 'false', 'true', 'true', 'true', 'Pendiente', 244800, 10058),
(2147483647, 'Diana Rodríguez', 'RODD840712MDFRLN08', 'Suite Presidencial', '2021-02-01', '2021-06-07', 5, 'true', 'false', 'true', 'false', 'true', 'false', 'Pendiente', 105750, 10059),
(2147483647, 'Miguel González', 'GOJM750320MDFNZG03', 'Suite Ejecutiva', '2021-02-01', '2021-06-22', 20, 'false', 'false', 'false', 'true', 'true', 'true', 'Pendiente', 272000, 10063),
(2147483647, 'Miguel González', 'GOJM750320MDFNZG03', 'Suite Presidencial', '2021-02-01', '2021-06-21', 19, 'true', 'false', 'true', 'false', 'true', 'false', 'Pendiente', 401850, 10064),
(2147483647, 'Miguel González', 'GOJM750320MDFNZG03', 'Habitacion Estandar', '2021-02-01', '2021-06-06', 4, 'false', 'true', 'false', 'true', 'false', 'true', 'Pendiente', 27000, 10065),
(2147483647, 'Andrea Martínez', 'MARR830927MDFRYS06', 'Suite Presidencial', '2021-02-01', '2021-03-04', 1, 'true', 'false', 'true', 'false', 'true', 'false', 'Pendiente', 21150, 10069),
(2147483647, 'Andrea Martínez', 'MARR830927MDFRYS06', 'Habitacion Estandar', '2021-02-01', '2021-03-05', 2, 'false', 'true', 'false', 'true', 'false', 'true', 'Pendiente', 13500, 10070),
(2147483647, 'Andrea Martínez', 'MARR830927MDFRYS06', 'Suite Presidencial', '2021-02-01', '2021-03-06', 3, 'false', 'true', 'true', 'false', 'true', 'false', 'Pendiente', 59850, 10071),
(2147483647, 'Jorge Díaz', 'DIGJ880512MDFRZR07', 'Habitacion Estandar', '2021-02-01', '2021-03-23', 20, 'true', 'true', 'true', 'false', 'false', 'false', 'Pendiente', 166000, 10073),
(2147483647, 'Jorge Díaz', 'DIGJ880512MDFRZR07', 'Suite Ejecutiva', '2021-02-01', '2021-04-13', 10, 'false', 'false', 'false', 'true', 'true', 'true', 'Pendiente', 136000, 10074),
(2147483647, 'Jorge Díaz', 'DIGJ880512MDFRZR07', 'Suite Presidencial', '2021-02-01', '2021-05-11', 8, 'true', 'false', 'true', 'false', 'true', 'false', 'Pendiente', 169200, 10075);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
