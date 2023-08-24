-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-07-2023 a las 00:26:27
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ajveladoras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carousel_images`
--

DROP TABLE IF EXISTS `carousel_images`;
CREATE TABLE IF NOT EXISTS `carousel_images` (
  `image` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `item_name` varchar(250) NOT NULL,
  `item_odor` varchar(250) NOT NULL,
  `item_type` varchar(250) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `item_name`, `item_odor`, `item_type`, `price`, `description`, `image`) VALUES
(1, 'Vela antiestrés', 'Rosas', 'aromatica', 70, '¡Te presentamos nuestra vela relajante con aroma a rosas! Sumérgete en un oasis de serenidad y romance con esta exquisita vela aromática. El cautivador aroma de las rosas llenará tu espacio con una fragancia embriagadora y delicada, creando un ambien', 'coral-500x500.png'),
(2, 'Vela relajante', 'Lavanda', 'aromatica', 70, '¡Descubre nuestra nueva vela aromática de lavanda! Sumérgete en un oasis de relajación y tranquilidad con nuestra vela que despierta los sentidos. El aroma suave y reconfortante de la lavanda te envolverá en una atmósfera de serenidad y calma.', 'IMG_20931.png'),
(3, 'Vela aromática pride', 'Frutas', 'aromatica', 75, '¡Celebra el orgullo con nuestra vela Pride de aroma a frutas! Déjate envolver por la energía vibrante y colorida de esta vela única. El dulce y refrescante aroma de las frutas te transportará a un estado de alegría y felicidad.', 'pride---vaso-vela-con-la-bandera-lgbt.jpg'),
(4, 'Paquete de velas', 'Pino, Eucalipto, Menta', 'aromatica', 179, '¡Descubre nuestro encantador paquete de velas aromáticas con los aromas frescos y revitalizantes de pino, eucalipto y menta! Crea una atmósfera revitalizante y estimulante en tu hogar con esta combinación de fragancias naturales.', 'pack_velas.png'),
(5, 'Vela energética y refrescante', 'Pino', 'aromatica', 69, '¡Descubre nuestro aroma a pino! Da energía y refresca. Desinfecta el ambiente y promueve la concentración. Tiene un aroma ligero y fresco que alivia el estrés, el dolor muscular, el dolor de garganta, la tos, el resfriado y el reumatismo. Es ideal pr', 'vela_azul.png'),
(6, 'Vela anti-males', 'Eucalipto', 'aromatica', 59, '¡Descubre la relajante vela de eucalipto, perfecta para crear un ambiente tranquilo y refrescante en tu hogar! Su aroma natural te transportará a la naturaleza y te ayudará a relajarte. Para problemas respiratorios, también aclara la mente, ayudando ', 'vela_marron.png'),
(7, 'Vela positive', 'Menta', 'aromatica', 59, '¡Disfruta de la refrescante vela de menta que llenará tu espacio con un aroma vigorizante y revitalizante! Su fragancia estimulante te brindará una sensación de frescura y calma al mismo tiempo para despertar los sentidos y mejorar la claridad mental', 'vela_rosa.png'),
(8, 'White peace', 'Neutro', 'neutro', 39, 'Combinan con cualquier decoración: El color blanco es neutro y versátil, lo que significa que nuestras velas encajarán perfectamente con cualquier estilo de decoración que tengas en tu espacio.', 'peque.blanca-1.png'),
(9, 'Vela cilindrica', 'Neutro', 'neutro', 49, 'Diseño elegante: Las velas cilíndricas tienen un aspecto sofisticado y moderno que puede realzar cualquier espacio, desde una mesa de comedor hasta una repisa o un baño.', 'vela-cilindrica-rustica-150x84-2.png'),
(10, 'Velas diferentes diseños pack', 'Neutro', 'neutro', 259, 'Fascinante colección de velas con diseños únicos y creativos que seguramente capturarán tu atención y añadirán un toque especial a tu entorno.', 'VeladoraHuichol-300x300.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
