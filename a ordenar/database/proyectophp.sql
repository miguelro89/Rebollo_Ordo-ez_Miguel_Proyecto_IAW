-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2017 a las 19:55:19
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectophp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `id_cancion` int(11) NOT NULL,
  `nombre_cancion` varchar(45) NOT NULL,
  `autores` varchar(45) NOT NULL,
  `ao_publicacion` int(11) DEFAULT NULL,
  `id_genero` varchar(45) NOT NULL,
  `enlace_youtube` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`id_cancion`, `nombre_cancion`, `autores`, `ao_publicacion`, `id_genero`, `enlace_youtube`) VALUES
(202, 'stressed_out(tomsize_remix)', 'twenty_one_pilots', 2016, 'trap', 'https://www.youtube.com/watch?v=0t2tjNqGyJI'),
(203, 'last_year(ookay_remix)', 'borgore', 2014, 'trap', 'https://www.youtube.com/watch?v=rIT0qLAqOts'),
(204, 'mystica(loudpvck_remix)', 'blasterjaxx', 2014, 'trap', 'https://www.youtube.com/watch?v=vfXowp20Ptg'),
(206, 'blue(kny_factory_remix)', 'eiffel_65', 2014, 'trap', 'https://www.youtube.com/watch?v=pVLmZMjxfjw'),
(207, 'the_next_episode(san_holo_remix)', 'dr_dre', 2014, 'trap', 'https://www.youtube.com/watch?v=vZv9-TWdBJM'),
(208, 'animals', 'martin_garrix', 2013, 'edm', 'https://www.youtube.com/watch?v=gCYcHz2k5x0'),
(209, 'tsunami', 'dvbbs_&_borgeous', 2013, 'edm', 'https://www.youtube.com/watch?v=0EWbonj7f18'),
(210, 'flute', 'new_world_sound_&_thomas_newson', 2013, 'edm', 'https://www.youtube.com/watch?v=e-U1lj57pv8'),
(211, 'spaceman', 'hardwell', 2012, 'edm', 'https://www.youtube.com/watch?v=lETmskoqh30'),
(212, 'rattle', 'bingo_players', 2011, 'edm', 'https://www.youtube.com/watch?v=XYgSHOWNE0M'),
(213, 'alors_on_dance', 'stromae', 2010, 'edm', 'https://www.youtube.com/watch?v=7pKrVB5f2W0'),
(214, 'red_lights', 'tiesto', 2014, 'edm', 'https://www.youtube.com/watch?v=CFF0mV24WCY'),
(215, 'the_nights', 'avicii', 2014, 'edm', 'https://www.youtube.com/watch?v=UtF6Jej8yb4'),
(216, 'runaway', 'galantis', 2015, 'edm', 'https://www.youtube.com/watch?v=5XR7naZ_zZA'),
(217, 'bad', 'david_guetta_&_sam_martin', 2014, 'edm', 'https://www.youtube.com/watch?v=EVr__5Addjw'),
(218, 'this_is_techno', 'gaga', 2013, 'techno', 'https://www.youtube.com/watch?v=p3p8doXs2jI'),
(219, 'half_life', 'keif', 2017, 'techno', 'https://www.youtube.com/watch?v=DZNWZ-CK6eM'),
(220, 'fly', 'many_reason', 2017, 'techno', 'https://www.youtube.com/watch?v=r6PBWziHcDA'),
(221, 'stay_alive', 'droplex', 2015, 'techno', 'https://www.youtube.com/watch?v=r6PBWziHcDA'),
(222, 'i_love_techno', 'sharpide', 2011, 'techno', 'https://www.youtube.com/watch?v=2LMJcexnRvE'),
(223, 'jaguar', 'dj_rolando', 2010, 'techno', 'https://www.youtube.com/watch?v=2LMJcexnRvE'),
(224, 'domino', 'oxia', 2006, 'techno', 'https://www.youtube.com/watch?v=FO566BKY2Jc'),
(225, 'trauma(worakls_remix)', 'n_to', 2012, 'techno', 'https://www.youtube.com/watch?v=lPVBrRd9wCo'),
(226, 'goldfish', 'kolsch', 2013, 'techno', 'https://www.youtube.com/watch?v=S1vbiTZq0DY'),
(227, 'smoke_techno', 'corner', 2017, 'techno', 'https://www.youtube.com/watch?v=CbDpyR4g9UM'),
(228, 'ready_or_not', 'dj_hype', 2007, 'dnb', 'https://www.youtube.com/watch?v=GfMtTOEFuwE'),
(229, 'snake_eyes(ft_coma)', 'feint', 2012, 'dnb', 'https://www.youtube.com/watch?v=cvq7Jy-TFAU'),
(230, 'watercolour', 'pendulum', 2010, 'dnb', 'https://www.youtube.com/watch?v=tEPB7uzKuh4'),
(231, '4am(mage_remix)', 'scooter', 2014, 'dnb', 'https://www.youtube.com/watch?v=7G2_jtj1cu0'),
(232, 'crying_out', 'benny_page', 2008, 'dnb', 'https://www.youtube.com/watch?v=lALfO2sZmpA'),
(233, 'on_fire', 'melano', 2016, 'dnb', 'https://www.youtube.com/watch?v=As_4MEJUzeY'),
(234, 'anomaly', 'noisia', 2016, 'dnb', 'https://www.youtube.com/watch?v=4WH0bFYg3Wo'),
(235, 'i_was', 'emperor', 2016, 'dnb', 'https://www.youtube.com/watch?v=xpH4pxps8MY'),
(236, 'lifeline', 'loadstar', 2016, 'dnb', 'https://www.youtube.com/watch?v=iXoFhcew2Zo'),
(237, 'angel_sing', 'ownglow', 2016, 'dnb', 'https://www.youtube.com/watch?v=sfLdyTh0JE0'),
(238, 'paper_chasin', 'childsplay', 2017, 'trap', 'https://www.youtube.com/watch?v=gXK4BRUK8zQ'),
(239, 'comming_home', 'ilivehere', 2017, 'trap', 'https://www.youtube.com/watch?v=H8vsM3_U9D4'),
(240, 'maestro', 'inkyz', 2017, 'trap', 'https://www.youtube.com/watch?v=KwnX4K4qFhI'),
(241, 'surface', 'aerochord', 2014, 'trap', 'https://www.youtube.com/watch?v=3FPwcaflCS8'),
(242, 'trigger', 'gioni', 2014, 'trap', 'https://www.youtube.com/watch?v=qo6ygYSxwEY'),
(244, 'kfnksdnfkl', 'sdfsfsd', 1256, 'sdfsdsdfsd', 'sfsadfs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `comentario` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero_musical`
--

CREATE TABLE `genero_musical` (
  `tipo_cancion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hacen`
--

CREATE TABLE `hacen` (
  `canciones_id_cancion` int(11) NOT NULL,
  `usuarios_cod_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticiones`
--

CREATE TABLE `peticiones` (
  `nombre_cancion` varchar(50) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peticiones`
--

INSERT INTO `peticiones` (`nombre_cancion`, `autor`) VALUES
('asdasd', 'dasdas'),
('sdfksdfkskd', 'dhfksdhfksd'),
('mistyfication', 'Hallucinator'),
('sssssete', 'dfsd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `correo_electronico` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `rol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cod_usuario`, `nombre`, `apellidos`, `correo_electronico`, `password`, `rol`) VALUES
(1, 'miguel', 'garcia', 'miguel@gmail.com', '4d186321c1a7f0f354b297e8914ab240', 'admin'),
(17, 'carlos', 'pruno', 'carlos@gmail.com', 'dc599a9972fde3045dab59dbd1ae170b', 'usuario'),
(18, 'jessica', 'marquez', 'jessica@gmail.com', '6d0d3cd7b60bce2368f99610908c2a00', 'usuario'),
(21, 'ana', 'perez', 'ana@gmail.com', '926e27eecdbc7a18858b3798ba99bddd', 'usuario'),
(22, 'manuel', 'malia', 'malia@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL,
  `nombre_sesion` varchar(50) DEFAULT NULL,
  `deejay` varchar(50) DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `enlace_video` varchar(50) DEFAULT NULL,
  `genero` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id_video`, `nombre_sesion`, `deejay`, `lugar`, `enlace_video`, `genero`) VALUES
(1, 'lab_la', 'stooki_sound', 'los_angeles', 'https://www.youtube.com/watch?v=_pfFXrYsQnQ&t=852s', 'trap'),
(2, 'lab_la', 'flosstradamus', 'los_angeles', 'https://www.youtube.com/watch?v=jR2swYCqYV4&t=4s', 'trap'),
(3, 'boiler_room', 'carl_cox', 'ibiza', 'https://www.youtube.com/watch?v=vy-k0FopsmY', 'techno'),
(4, 'boothouse', 'tchami', 'alemania', 'https://www.youtube.com/watch?v=0qVvZDU2yUY&t=126s', 'techno'),
(5, 'let_it_roll', 'delta_heavy', 'republica_checa', 'https://www.youtube.com/watch?v=afuilYCp8wo', 'dnb'),
(6, 'imagination_festival', 'the_upbeats', 'praga', 'https://www.youtube.com/watch?v=UtHqvb_WxvI', 'dnb'),
(7, 'tomorroland', 'martin_garrix', 'belgica', 'https://www.youtube.com/watch?v=089IRvkNAGg', 'edm'),
(9, 'tomorrowland', 'dimitri_vegas&like_mike', 'belgica', 'https://www.youtube.com/watch?v=3UOtF4J9wpo', 'edm'),
(12, 'jjjjj', 'sds', 'rterter', 'zdfsdfsd', 'rgetyrt '),
(13, 'jjjjj', 'sds', 'rterter', 'zdfsdfsd', 'rgetyrt ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`id_cancion`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `genero_musical`
--
ALTER TABLE `genero_musical`
  ADD PRIMARY KEY (`tipo_cancion`);

--
-- Indices de la tabla `hacen`
--
ALTER TABLE `hacen`
  ADD KEY `fk_table1_canciones1_idx` (`canciones_id_cancion`),
  ADD KEY `fk_hacen_usuarios1_idx` (`usuarios_cod_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `id_cancion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `hacen`
--
ALTER TABLE `hacen`
  ADD CONSTRAINT `fk_hacen_usuarios1` FOREIGN KEY (`usuarios_cod_usuario`) REFERENCES `usuarios` (`cod_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table1_canciones1` FOREIGN KEY (`canciones_id_cancion`) REFERENCES `canciones` (`id_cancion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
