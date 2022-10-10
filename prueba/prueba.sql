-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2022 a las 21:13:25
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos`
--

CREATE TABLE `textos` (
  `id` int(9) NOT NULL,
  `h1` varchar(250) NOT NULL,
  `h2` varchar(250) NOT NULL,
  `p` varchar(1000) NOT NULL,
  `img` text NOT NULL,
  `h22` varchar(100) NOT NULL,
  `p2` varchar(1000) NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `textos`
--

INSERT INTO `textos` (`id`, `h1`, `h2`, `p`, `img`, `h22`, `p2`, `img2`) VALUES
(1, '', '', 'Hola.', '', '', '', ''),
(2, 'Ara militaris', 'Papagayo verde', 'Ara militaris, el guacamayo militar, ​ también conocido como guacamayo verde o papagayo verde, ​ es una especie del género Ara, de la familia de los loros cuyas poblaciones se extienden desde México hasta el norte de Argentina.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg7bn7aGhAcSdFZhAR7UuBmLwoTkbSF0oONg&usqp=CAU', 'Caracteristicas del papagayo verde', 'Es uno de los guacamayos más desconocidos. Mide unos 40 centímetros y suele pesar 280 gramos. Tiene un plumaje verde oliva y su cabeza y sus alas son de color azul. La parte superior de su cola es marrón con manchas verdes y azules.', 'https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_2048,h_1360/https://www.natuwa.com/wp-content/uploads/2018/06/ROV_22553.jpg'),
(3, 'Felis silvestris', 'El gato montes', 'El gato montés (Felis silvestris), también conocido como gato salvaje o, más formalmente, como gato montés euroasiático, es una especie de mamífero carnívoro salvaje de la familia de los félidos y que habita en Eurasia y África. Tiene muchas subespecies, como el gato montés europeo (Felis silvestris silvestris), el gato salvaje asiático (Felis silvestris ornata) y el gato salvaje africano (Felis silvestris lybica). Se puede hibridar con los gatos domésticos que han sido abandonados en la naturaleza o se han asilvestrado.', 'https://masneuquen.com/wp-content/uploads/2021/03/Gato-montes-Leopardus-geoffroyi-.jpg', 'Caracteristicas del gato montes', 'El gato montés, o Felis Silvestris, es un felino muy similar al lince ibérico, hasta el punto de ser difícil su distinción. Posee un pelaje gris atigrado y una larga cola con punta redonda. Es una especie de felinos que se muestra muy activo tras la puesta de sol, desde el mismo instante en el que comienza a anochecer.', 'https://demascotas.info/wp-content/uploads/2019/01/cat-3798684_1920.jpg'),
(4, 'Panthera tigris tigris', 'El tigre de bengala', 'El tigre de Bengala, también conocido como tigre de Bengala real o tigre indio, es una subespecie de tigre que habita en la India, Nepal, Bangladés, Bután, Birmania y Tíbet.\r\nUno de los animales más imponentes y majestuosos del planeta es el tigre de Bengala. En la cultura de la india estos felinos son parte de las representaciones sagradas. Las deidades del hinduismo, Shiva y Durga, son normalmente asociadas a estos tigres.', 'https://www.anipedia.net/imagenes/tigre-de-bengala.jpg', 'Caracteristicas del tigre de bengala', 'El tigre es el felino más grande del mundo, los machos pueden medir hasta 3 m y pesar entre 180-350 kg, mientras que las hembras no superan los 2,6 m de largo y 160 kg de peso. Los tigres de Bengala poseen unos colmillos de hasta 10 cm, más largos que cualquier otro felino.', 'https://www.lifeder.com/wp-content/uploads/2019/09/tigre-de-Bengala-1-1-1-1-1-1-1-1-1-1-1.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `textos`
--
ALTER TABLE `textos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `textos`
--
ALTER TABLE `textos`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
