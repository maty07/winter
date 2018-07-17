-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2018 a las 02:52:30
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `winter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Accion'),
(2, 'Animación'),
(3, 'Aventura'),
(4, 'Bélico'),
(5, 'Ciencia Ficción'),
(7, 'Comedia'),
(8, 'Documental'),
(9, 'Drama'),
(10, 'Fantástico'),
(11, 'Infantil'),
(13, 'Musical'),
(14, 'Romance'),
(15, 'Terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genres_movieseries`
--

CREATE TABLE `genres_movieseries` (
  `id` int(10) UNSIGNED NOT NULL,
  `genres_id` int(10) UNSIGNED DEFAULT NULL,
  `movieseries_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genres_movieseries`
--

INSERT INTO `genres_movieseries` (`id`, `genres_id`, `movieseries_id`) VALUES
(1, 9, 3),
(2, 15, 3),
(3, 1, 16),
(4, 1, 13),
(5, 1, 14),
(6, 9, 1),
(7, 1, 2),
(8, 2, 2),
(9, 3, 2),
(12, 1, 6),
(13, 9, 6),
(14, 9, 7),
(15, 5, 7),
(16, 1, 8),
(17, 3, 8),
(18, 7, 8),
(19, 9, 9),
(20, 15, 9),
(21, 9, 10),
(22, 7, 11),
(23, 1, 12),
(24, 9, 12),
(25, 5, 12),
(26, 1, 13),
(27, 9, 13),
(28, 1, 14),
(29, 3, 14),
(30, 1, 15),
(31, 9, 15),
(32, 9, 16),
(33, 10, 16),
(34, 15, 16),
(35, 1, 17),
(36, 9, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movieseries`
--

CREATE TABLE `movieseries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(80) NOT NULL,
  `description` text,
  `author` varchar(100) DEFAULT 'Pending',
  `actors` varchar(100) DEFAULT 'Pending',
  `country` varchar(30) DEFAULT 'Unknown',
  `premiere` year(4) NOT NULL,
  `poster` varchar(150) DEFAULT 'no-poster.jpg',
  `trailer` varchar(220) DEFAULT '',
  `rating` decimal(2,1) DEFAULT NULL,
  `category` enum('Movie','Serie') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movieseries`
--

INSERT INTO `movieseries` (`id`, `title`, `description`, `author`, `actors`, `country`, `premiere`, `poster`, `trailer`, `rating`, `category`) VALUES
(1, 'Breaking Bad', 'A chemistry teacher diagnosed with terminal lung cancer teams up with his former student to cook and sell crystal meth.', 'Vince Gilligan', 'Bryan Cranston, Anna Gunn, Aaron Paul, Dean Norris', 'USA', 2008, 'http://ia.media-imdb.com/images/M/MV5BMTQ0ODYzODc0OV5BMl5BanBnXkFtZTgwMDk3OTcyMDE@._V1_SX300.jpg', 'https://www.youtube.com/embed/ceqOTZnhgY8?rel=0', '9.5', 'Serie'),
(2, 'Justice League: The Flashpoint Paradox', 'The Flash finds himself in a war torn alternate timeline and teams up with alternate versions of his fellow heroes to return home and restore the timeline.', 'Jay Oliva', 'Justin Chambers, C. Thomas Howell, Michael B. Jordan, Kevin McKidd', 'USA', 2013, 'http://ia.media-imdb.com/images/M/MV5BOTM0MDI5NTUwM15BMl5BanBnXkFtZTgwMTEyNTEwMDE@._V1_SX300.jpg', 'https://www.youtube.com/embed/lu1f-HNqlGQ?rel=0', '8.1', 'Movie'),
(3, 'The Walking Dead', 'Rick Grimes is a former Sheriff\'s deputy who has been in a coma for several months after being shot while on duty. When he awakens he discovers that the world has been ravished by a zombie epidemic of apocalyptic proportions, and that he seems to be the only person still alive. After returning home to discover his wife and son missing, he heads for Atlanta to search for his family. Narrowly escaping death at the hands of the zombies on arrival in Atlanta he is aided by another survivor, Glenn, who takes Rick to a camp outside the town. There Rick finds his wife Lori and his son, Carl, along with his partner/best friend Shane and a small group of survivors who struggle to fend off the zombie hordes; as well as competing with other surviving groups who are prepared to do whatever it takes to survive in this harsh new world.', 'Frank Darabont', 'Andrew Lincoln, Steven Yeun, Chandler Riggs, Norman Reedus', 'USA', 2010, 'http://ia.media-imdb.com/images/M/MV5BMTQ3NzQ2Mzk1OF5BMl5BanBnXkFtZTgwNTAzNjI5NjE@._V1_SX300.jpg', 'https://www.youtube.com/embed/ZA21VAgd6L4?rel=0', '8.6', 'Serie'),
(4, 'Rocky Balboa', 'Thirty years after the ring of the first bell, Rocky Balboa comes out of retirement and dons his gloves for his final fight; against the reigning heavyweight champ Mason \'The Line\' Dixon.', 'Sylvester Stallone', 'Sylvester Stallone, Burt Young, Antonio Tarver, Geraldine Hughes', 'USA', 2006, 'http://ia.media-imdb.com/images/M/MV5BMTM2OTUzNDE3NV5BMl5BanBnXkFtZTcwODczMzkzMQ@@._V1_SX300.jpg', 'https://www.youtube.com/embed/8tab8fK2_3w', '7.2', 'Movie'),
(6, 'The Dark Knight', 'Batman raises the stakes in his war on crime. With the help of Lieutenant Jim Gordon and District Attorney Harvey Dent, Batman sets out to dismantle the remaining criminal organizations that plague the city streets. The partnership proves to be effective, but they soon find themselves prey to a reign of chaos unleashed by a rising criminal mastermind known to the terrified citizens of Gotham as The Joker.', 'Christopher Nolan', 'Christian Bale, Heath Ledger, Aaron Eckhart, Michael Caine', 'USA, UK', 2008, 'http://ia.media-imdb.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_SX300.jpg', 'https://www.youtube.com/embed/EXeTwQWrcwY', '9.0', 'Movie'),
(7, 'Sense8', 'Sense8 tells the story of eight strangers: Will (Smith), Riley (Middleton), Capheus (Ameen), Sun (Bae), Lito (Silvestre), Kala (Desai), Wolfgang (Riemelt), and Nomi (Clayton). Each individual is from a different culture and part of the world. In the aftermath of a tragic death they all experience through what they perceive as dreams or visions, they suddenly find themselves growing mentally and emotionally connected. While trying to figure how and why this connection happened and what it means, a mysterious man named Jonas tries to help the eight. Meanwhile, another stranger called Whispers attempts to hunt them down, using the same sensate power to gain full access to a sensate\'s mind (thoughts/sight) after looking into their eyes. Each episode reflects the views of the characters interacting with each other while delving deeper into their backgrounds and what sets them apart and brings them together with the others.', 'J. Michael Straczynski, Andy Wachowski, Lana Wachowski', 'Aml Ameen, Doona Bae, Jamie Clayton, Tina Desai', 'USA', 2015, 'http://ia.media-imdb.com/images/M/MV5BMTY2MjI4MjkxN15BMl5BanBnXkFtZTgwNjU5Nzk4NTE@._V1_SX300.jpg', 'https://www.youtube.com/embed/riLgCIvE9aU', '8.4', 'Serie'),
(8, 'Matando Cabos', 'In Mexico City, the powerful and violent magnate of steel Oscar Cabos catches his daughter Paulina having sex with her boyfriend and his employee Javier \"Jaque\" and he works Jaque over. On the next day, Jaque pays a visit to Cabos in his office and the angry man comes with a golf club to hit Jaque again. However, Cabos accidentally trips on a golf ball, falls on the floor and faints. Jaque calls his best friend Mudo to help him, but the janitor Nacho finds his boss fainted on the floor and he steals and dresses himself with Cabos\' clothes and jewels. Meanwhile, Nacho\'s son Botcha and his friend Nico have planned to kidnap Cabos and they are waiting for him in the parking garage. When he walks in the parking garage, the two kidnappers hit him on the back of the head, believing that he is Cabos, they cover his head with a bag. They head with the abducted man to the house of Botcha\'s girlfriend Lula. Meanwhile, Jaque and Mudo calls their wrestler friend Ruben \"Mascarita\" and his midget partner Tony \'El Canibal\' to help them to get rid of Cabos in his birthday party. But both plans do not work well along the night.', 'Alejandro Lozano', 'Tony Dalton, Ana Claudia Talancón, Pedro Armendáriz Jr., Kristoff', 'México', 2004, 'http://ia.media-imdb.com/images/M/MV5BMTI2MzUzNTc1N15BMl5BanBnXkFtZTcwOTM1NzYyMQ@@._V1_SX300.jpg', 'https://www.youtube.com/embed/nujJ3sXSU18', '7.6', 'Movie'),
(9, 'The Strain', 'A thriller that tells the story of Dr. Ephraim Goodweather, the head of the Center for Disease Control Canary Team in New York City. He and his team are called upon to investigate a mysterious viral outbreak with hallmarks of an ancient and evil strain of vampirism. As the strain spreads, Eph, his team, and an assembly of everyday New Yorkers, wage war for the fate of humanity itself.', 'Guillermo del Toro, Chuck Hogan', 'Corey Stoll, David Bradley, Kevin Durand, Richard Sammel', 'USA', 2014, 'http://ia.media-imdb.com/images/M/MV5BMjE1MjY3OTg5OV5BMl5BanBnXkFtZTgwOTI1NDcwNjE@._V1_SX300.jpg', 'https://www.youtube.com/embed/RiN8Edb4X2w', '7.5', 'Serie'),
(10, 'Creed', 'The former World Heavyweight Champion Rocky Balboa serves as a trainer and mentor to Adonis Johnson, the son of his late friend and former rival Apollo Creed.', 'Ryan Coogler', 'Sylvester Stallone, Michael B. Jordan, Tessa Thompson, Graham McTavish', 'USA', 2015, 'http://ia.media-imdb.com/images/M/MV5BMTg1NDY1MTM0Ml5BMl5BanBnXkFtZTgwMTU4Njg4NjE@._V1_SX300.jpg', 'https://www.youtube.com/embed/Uv554B7YHk4', '7.9', 'Movie'),
(11, 'Silicon Valley', 'In the high-tech gold rush of modern Silicon Valley, the people most qualified to succeed are the least capable of handling success. A comedy partially inspired by Mike Judge\'s own experiences as a Silicon Valley engineer in the late 1980s.', 'John Altschuler, Mike Judge, Dave Krinsky', 'Thomas Middleditch, T.J. Miller, Josh Brener, Martin Starr', 'USA', 2014, 'http://ia.media-imdb.com/images/M/MV5BMjIzMjgwMTQzMV5BMl5BanBnXkFtZTgwNDcyMjczMTE@._V1_SX300.jpg', 'https://www.youtube.com/embed/69V__a49xtw', '8.5', 'Serie'),
(12, 'Terminator: The Sarah Connor Chronicles', 'This series is set after the events of Terminator 2: Judgment Day (1991). After the sacrifices of Dr. Miles Dyson and T-800 Model 101 Terminator, the Connors find themselves once again being stalked by Skynet\'s agents from the future. Realizing their nightmare isn\'t over, they decide to stop running and focus on preventing the birth of Skynet. With the aid of Cameron Phillips, a beautiful girl who has a mysterious past also linked to the future; Derek Reese, a Tech-Com soldier from the future whose past is linked with the Connors; Riley, a beautiful schoolfriend of John; and FBI Agent James Ellison, who was assigned to capture the Connors but joins them after his own encounter with one of the machines. They begin a quest to stop the United States military and a shadowy conspiracy from the future from creating the program that will stop at nothing to bring humanity to an end.', 'Josh Friedman', 'Lena Headey, Thomas Dekker, Summer Glau, Richard T. Jones', 'USA', 2008, 'http://ia.media-imdb.com/images/M/MV5BMTMyNjA5ODIxM15BMl5BanBnXkFtZTcwMTA1MjU1MQ@@._V1_SX300.jpg', 'https://www.youtube.com/embed/i0fXTDI1egY', '7.7', 'Serie'),
(13, 'Prison Break', 'Due to a political conspiracy, an innocent man is sent to death row and his only hope is his brother who makes it his mission to deliberately get himself sent to the same prison in order to break the both of them from the inside out.', 'Paul Scheuring', 'Dominic Purcell, Wentworth Miller, Amaury Nolasco, Robert Knepper', 'USA', 2005, 'http://ia.media-imdb.com/images/M/MV5BMTg3NTkwNzAxOF5BMl5BanBnXkFtZTcwMjM1NjI5MQ@@._V1_SX300.jpg', 'https://www.youtube.com/embed/AL9zLctDJaU', '8.5', 'Serie'),
(14, 'Spartacus', 'Watch the story of history\'s greatest gladiator unfold with graphic violence and the passions of the women that love them. This is Spartacus.', 'Steven S. DeKnight', 'Andy Whitfield, Manu Bennett, Daniel Feuerriegel, Peter Mensah, Lucy Lawless', 'USA, New Zealand', 2013, 'http://ia.media-imdb.com/images/M/MV5BOTA2NDU2MzM5Nl5BMl5BanBnXkFtZTcwMTk3Njg3OA@@._V1_SX300.jpg', 'https://www.youtube.com/embed/ptX_pjz5s2k', '8.6', 'Serie'),
(15, 'Bhaag Milkha Bhaag', 'The true story of the \"Flying Sikh\" - world champion runner and Olympian Milkha Singh -- who overcame the massacre of his family, civil war during the India-Pakistan partition, and homelessness to become one of India\'s most iconic athletes.', 'Rakeysh Omprakash Mehra', 'Farhan Akhtar, Sonam Kapoor, Pavan Malhotra, Art Malik', 'India', 2013, 'http://ia.media-imdb.com/images/M/MV5BMTY1Nzg4MjcwN15BMl5BanBnXkFtZTcwOTc1NTk1OQ@@._V1_SX300.jpg', 'https://www.youtube.com/embed/u71swQ4ksgI?rel=0', '8.3', 'Movie'),
(16, 'Constantine', 'A man struggling with his faith is haunted by the sins of his past but is suddenly thrust into the role of defending humanity from the gathering forces of darkness.', 'Daniel Cerone, David S. Goyer', 'Matt Ryan, Harold Perrineau, Angélica Celaya, Charles Halford', 'USA', 2014, 'http://ia.media-imdb.com/images/M/MV5BMTQ2MzQzMjA2NF5BMl5BanBnXkFtZTgwODg1MTI4MjE@._V1_SX300.jpg', 'https://www.youtube.com/embed/VtV6w3sUvzA?rel=0', '7.5', 'Serie'),
(17, 'My Way', 'In World War II-era Korea, rival runners, one Korean (Jang Dong-gun) and one Japanese (Joe Odagiri), go to war together against the Soviets.', 'Je-kyu Kang', 'Dong-gun Jang, Joe Odagiri, Bingbing Fan, In-kwon Kim', 'South Korea', 2011, 'http://ia.media-imdb.com/images/M/MV5BMjM2MTI4OTc5OF5BMl5BanBnXkFtZTgwNDk1MTAzMjE@._V1_SX300.jpg', 'https://www.youtube.com/watch?v=HpYk5ww8Jjc', '7.8', 'Movie');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(30) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `email`, `name`, `pass`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', 'Matias Bravo', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Admin'),
(2, 'User', 'user@gmail.com', 'Juanito Pérez', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'User');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `genres_movieseries`
--
ALTER TABLE `genres_movieseries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genres_id` (`genres_id`),
  ADD KEY `movieseries_id` (`movieseries_id`);

--
-- Indices de la tabla `movieseries`
--
ALTER TABLE `movieseries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `genres_movieseries`
--
ALTER TABLE `genres_movieseries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `movieseries`
--
ALTER TABLE `movieseries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `genres_movieseries`
--
ALTER TABLE `genres_movieseries`
  ADD CONSTRAINT `genres_movieseries_ibfk_1` FOREIGN KEY (`genres_id`) REFERENCES `genres` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `genres_movieseries_ibfk_2` FOREIGN KEY (`movieseries_id`) REFERENCES `movieseries` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
