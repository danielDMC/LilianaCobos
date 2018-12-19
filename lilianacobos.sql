-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2018 a las 18:09:47
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lilianacobos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `name`, `image`, `text`) VALUES
(1, 'Probando', '07676f7fd9b71c542c2af0e8a00d12263a5990edc6fc6360f43f1e28dd12533a.png', '<h2><b><u>Lorem ipsum</u></b></h2><p><br></p><p>Dolor sit amet, consectetur adipiscing elit. Integer et tristique mi, ac vulputate lorem. Pellentesque facilisis augue ut ipsum fringilla, vitae fermentum lacus mattis. Ut rutrum ex non magna <span style=\"font-family: Helvetica;\">consectetur, quis lobortis ante euismod. Integer ultrices eu sapien non pharetra. Etiam eleifend ligula augue, vel pharetra nunc faucibus at. Sed congue felis urna, quis </span>blandit turpis commodo eu. Donec sagittis cursus nisl, vitae tincidunt neque tincidunt ac. Suspendisse dictum velit dolor, in tempus sapien dictum at. Aliquam erat volutpat. Duis ac lobortis nisi, eu consectetur turpis. Pellentesque ornare, felis a venenatis mattis, eros nisi ultricies augue, ac suscipit tortor purus at metus. Duis a nulla finibus urna auctor accumsan. Fusce vehicula, velit eget eleifend ultricies, nunc urna posuere eros, ac dictum ligula sem nec leo.</p>'),
(3, 'Que Tal', '0c05e6d14f6c4aadcbd47cda369df451e9fd62f7b33c92a8c8341957e0325a10.jpg', 'Pellentesque facilisis augue ut ipsum fringilla, vitae fermentum lacus mattis. Ut rutrum ex non magna consectetur, quis lobortis ante euismod. Integer ultrices eu sapien non pharetra. Etiam eleifend ligula augue, vel pharetra nunc faucibus at. Sed congue felis urna, quis blandit turpis commodo eu. Donec sagittis cursus nisl, vitae tincidunt neque tincidunt ac. Suspendisse dictum velit dolor, in tempus sapien dictum at. Aliquam erat volutpat. Duis ac lobortis nisi, eu consectetur turpis. Pellentesque ornare, felis a venenatis mattis, eros nisi ultricies augue, ac suscipit tortor purus at metus. Duis a nulla finibus urna auctor accumsan. Fusce vehicula, velit eget eleifend ultricies, nunc urna posuere eros, ac dictum ligula sem nec leo. Duis placerat magna eros, sed tincidunt quam ornare ac. Aliquam ut mi consectetur tortor ornare bibendum vel quis eros. Proin congue eget nulla et fermentum. Praesent finibus maximus ligula gravida luctus. Nam sagittis mattis odio, id elementum orci consectetur eu. Suspendisse eget augue quis ante mollis ornare. Morbi a neque libero. Vivamus a felis eu lacus facilisis molestie. Pellentesque in leo quis erat aliquam sodales commodo at mi. Sed dolor orci, congue vel cursus a, pulvinar non ligula. In id est lobortis, sagittis libero nec, finibus diam. Nam tincidunt, sem cursus vehicula pretium, leo enim eleifend orci, eu dignissim erat neque in magna. Sed pellentesque sem ac consequat tincidunt. Nunc aliquet elit lorem, in pellentesque tellus viverra ut.\r\n'),
(4, 'Que Tal', '8a41b4e759053a008f95029266ace14c2868edc25acea246f4eb837cfe85179c.jpg', 'Ut rutrum ex non magna consectetur, quis lobortis ante euismod. Integer ultrices eu sapien non pharetra. Etiam eleifend ligula augue, vel pharetra nunc faucibus at. Sed congue felis urna, quis blandit turpis commodo eu. Donec sagittis cursus nisl, vitae tincidunt neque tincidunt ac. Suspendisse dictum velit dolor, in tempus sapien dictum at. Aliquam erat volutpat. Duis ac lobortis nisi, eu consectetur turpis. Pellentesque ornare, felis a venenatis mattis, eros nisi ultricies augue, ac suscipit tortor purus at metus. Duis a nulla finibus urna auctor accumsan. Fusce vehicula, velit eget eleifend ultricies, nunc urna posuere eros, ac dictum ligula sem nec leo. Duis placerat magna eros, sed tincidunt quam ornare ac. Aliquam ut mi consectetur tortor ornare bibendum vel quis eros. Proin congue eget nulla et fermentum. Praesent finibus maximus ligula gravida luctus. Nam sagittis mattis odio, id elementum orci consectetur eu. Suspendisse eget augue quis ante mollis ornare. Morbi a neque libero. Vivamus a felis eu lacus facilisis molestie. Pellentesque in leo quis erat aliquam sodales commodo at mi. Sed dolor orci, congue vel cursus a, pulvinar non ligula. In id est lobortis, sagittis libero nec, finibus diam. Nam tincidunt, sem cursus vehicula pretium, leo enim eleifend orci, eu dignissim erat neque in magna. Sed pellentesque sem ac consequat tincidunt. Nunc aliquet elit lorem, in pellentesque tellus viverra ut.\r\n'),
(5, 'Sin embargo', 'c1be51f302effd4741f3e1111ee23c83126e7e07c1fd00ca8e4c689a018225bd.png', 'Ut rutrum ex non magna consectetur, quis lobortis ante euismod. Integer ultrices eu sapien non pharetra. Etiam eleifend ligula augue, vel pharetra nunc faucibus at. Sed congue felis urna, quis blandit turpis commodo eu. Donec sagittis cursus nisl, vitae tincidunt neque tincidunt ac. Suspendisse dictum velit dolor, in tempus sapien dictum at. Aliquam erat volutpat. Duis ac lobortis nisi, eu consectetur turpis. Pellentesque ornare, felis a venenatis mattis, eros nisi ultricies augue, ac suscipit tortor purus at metus. Duis a nulla finibus urna auctor accumsan. Fusce vehicula, velit eget eleifend ultricies, nunc urna posuere eros, ac dictum ligula sem nec leo. Duis placerat magna eros, sed tincidunt quam ornare ac. Aliquam ut mi consectetur tortor ornare bibendum vel quis eros. Proin congue eget nulla et fermentum. Praesent finibus maximus ligula gravida luctus. Nam sagittis mattis odio, id elementum orci consectetur eu. Suspendisse eget augue quis ante mollis ornare. Morbi a neque libero. Vivamus a felis eu lacus facilisis molestie. Pellentesque in leo quis erat aliquam sodales commodo at mi. Sed dolor orci, congue vel cursus a, pulvinar non ligula. In id est lobortis, sagittis libero nec, finibus diam. Nam tincidunt, sem cursus vehicula pretium, leo enim eleifend orci, eu dignissim erat neque in magna. Sed pellentesque sem ac consequat tincidunt. Nunc aliquet elit lorem, in pellentesque tellus viverra ut.\r\n'),
(6, 'disco', '8da0548d0ed1ab4093465b375f7f246b47c36f83f158b7081ddcd446d2fa2aeb.png', 'El Ut rutrum ex non magna consectetur, quis lobortis ante euismod. Integer ultrices eu sapien non pharetra. Etiam eleifend ligula augue, vel pharetra nunc faucibus at. Sed congue felis urna, quis blandit turpis commodo eu. Donec sagittis cursus nisl, vitae tincidunt neque tincidunt ac. Suspendisse dictum velit dolor, in tempus sapien dictum at. Aliquam erat volutpat. Duis ac lobortis nisi, eu consectetur turpis. Pellentesque ornare, felis a venenatis mattis, eros nisi ultricies augue, ac suscipit tortor purus at metus. Duis a nulla finibus urna auctor accumsan. Fusce vehicula, velit eget eleifend ultricies, nunc urna posuere eros, ac dictum ligula sem nec leo. Duis placerat magna eros, sed tincidunt quam ornare ac. Aliquam ut mi consectetur tortor ornare bibendum vel quis eros. Proin congue eget nulla et fermentum. Praesent finibus maximus ligula gravida luctus. Nam sagittis mattis odio, id elementum orci consectetur eu. Suspendisse eget augue quis ante mollis ornare. Morbi a neque libero. Vivamus a felis eu lacus facilisis molestie. Pellentesque in leo quis erat aliquam sodales commodo at mi. Sed dolor orci, congue vel cursus a, pulvinar non ligula. In id est lobortis, sagittis libero nec, finibus diam. Nam tincidunt, sem cursus vehicula pretium, leo enim eleifend orci, eu dignissim erat neque in magna. Sed pellentesque sem ac consequat tincidunt. Nunc aliquet elit lorem, in pellentesque tellus viverra ut.\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `name`, `image`, `text`) VALUES
(13, 'Canto y TradiciÃ³n de MÃ©xico', '05853ffb96e6d96b96e47bebdae7c81b869e01287efd4dba84bf93d0609de007.jpg', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">La cantante mexicana Liliana Cobos, originaria de la Ciudad de MÃ©xico, radica desde el aÃ±o de 1998 en Alemania. Sus primeras presentaciones en este paÃ­s las realiza en diferentes eventos y escenarios de las ciudades de DÃ¼sseldorf y Colonia.</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\"><br></span></div><div style=\"text-align: justify;\">Su voz es llena de matices, suave pero a la vez de potente tono, esa peculiaridad y la gracia en sus interpretaciones le han abierto espacios importantes para fomentar y difundir la mÃºsica tradicional de MÃ©xico, por mencionar algunos, en el 2006 se presentÃ³ en la cadena nacional televisiva alemana de RTL.</div><div style=\"text-align: justify;\">Liliana actualmente radica en la ciudad de BerlÃ­n, y continuamente colabora y se presenta con diferentes mÃºsicos.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify; \">TambiÃ©n Es la voz del grupo musical â€œEl Valdoradoâ€, formado por 5 integrantes quienes con mÃºsica de guitarra, percusiones orientales, y dos violonchelos , presentan una novedosa fusiÃ³n de ritmos latinos y orientales, incluyendo propios arreglos musicales.</div>'),
(14, 'En las Artes PlÃ¡sticas', 'e2cbb6c4fa46f387fa2c2767d31dc832ee32ab766aaf1820b590e9d6177faaf4.jpg', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Liliana Cobos, ademÃ¡s de dedicarse al la mÃºsica, realiza esculturas y desde hace varios aÃ±os en Alemania ha elaborado en diferentes espacios las tradicionales ofrendas mexicanas del â€žDÃ­a de Muertosâ€œ. </span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">En sus instalaciones de altares expone las esculturas que ella misma elabora, con la tÃ©cnica de cartonerÃ­a y papel machÃ©.</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\"><br></span></div><div style=\"text-align: justify; \">El Museo Rautenstrauch-Joest-Museum- Kulturen der Welt, dÃ³nde ha tenido exposiciones en los aÃ±os del 2014,2015 y 2016, ha adquirido varias esculturas de la artÃ­sta para su colecciÃ³n. Otro Museo que ha adquirido sus esculturas es el Linden- Museum Stuttgart- Staatliches Museum fÃ¼r VÃ¶lkerkunde.</div>'),
(15, 'Musica', '4e538880e65cae60359df04e5c6089127c3c1b268b94214ea7aedd7241636b9f.png', 'Donec vulputate sem quam, a dictum ex convallis eu. Suspendisse finibus consequat tellus in porttitor. Duis euismod condimentum fermentum. Sed at aliquam nisl. Cras non ipsum id diam rutrum luctus. Nunc cursus tortor eu nisi rhoncus, pretium mattis libero pharetra. Cras odio tellus, convallis a orci quis, mollis tempus dolor. Duis nec nisl leo. Nam gravida sapien eros, eget dignissim turpis facilisis vitae. Etiam egestas tincidunt lacus, in mattis est blandit sit amet. Vivamus tortor turpis, fringilla eget imperdiet et, tempus vel ligula. Sed faucibus, ligula eu sagittis laoreet, mi est faucibus neque, eu mattis ligula sapien at enim. Nulla tortor arcu, ornare et eros eu, iaculis sollicitudin dui. Sed varius augue vitae nulla lacinia, eu eleifend lacus consequat. Praesent laoreet urna massa, nec fermentum dui suscipit condimentum. Proin pulvinar, augue non cursus vulputate, odio libero iaculis sem, at lobortis augue ex pharetra sem. Ut bibendum elementum nunc, id semper felis viverra id. Donec vulputate faucibus porttitor. Vivamus sed fermentum urna. Mauris posuere, odio vel euismod dapibus, dui ante pretium mi, in auctor tortor ex non mi. Cras orci felis, consequat nec lectus et, eleifend cursus eros. Phasellus felis velit, iaculis vel gravida nec, ultrices eget quam. Nulla vel porttitor felis. Nam nibh velit, porttitor vel pulvinar quis, congue nec metus.'),
(16, 'Arte', '575d5cdccca5181dd388557e7795b737c6eb3b4917d86392477ffd1d6e871899.jpg', 'Donec vulputate sem quam, a dictum ex convallis eu. Suspendisse finibus consequat tellus in porttitor. Duis euismod condimentum fermentum. Sed at aliquam nisl. Cras non ipsum id diam rutrum luctus. Nunc cursus tortor eu nisi rhoncus, pretium mattis libero pharetra. Cras odio tellus, convallis a orci quis, mollis tempus dolor. Duis nec nisl leo. Nam gravida sapien eros, eget dignissim turpis facilisis vitae. Etiam egestas tincidunt lacus, in mattis est blandit sit amet. Vivamus tortor turpis, fringilla eget imperdiet et, tempus vel ligula. Sed faucibus, ligula eu sagittis laoreet, mi est faucibus neque, eu mattis ligula sapien at enim. Nulla tortor arcu, ornare et eros eu, iaculis sollicitudin dui. Sed varius augue vitae nulla lacinia, eu eleifend lacus consequat. Praesent laoreet urna massa, nec fermentum dui suscipit condimentum. Proin pulvinar, augue non cursus vulputate, odio libero iaculis sem, at lobortis augue ex pharetra sem. Ut bibendum elementum nunc, id semper felis viverra id. Donec vulputate faucibus porttitor. Vivamus sed fermentum urna. Mauris posuere, odio vel euismod dapibus, dui ante pretium mi, in auctor tortor ex non mi. Cras orci felis, consequat nec lectus et, eleifend cursus eros. Phasellus felis velit, iaculis vel gravida nec, ultrices eget quam. Nulla vel porttitor felis. Nam nibh velit, porttitor vel pulvinar quis, congue nec metus.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'Capitan', 'capitan@tropa.mx', 'PasWithoutHASH.2019'),
(3, 'admin', 'admin@lilianacobos.com', 'Asfg83dv0987');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
