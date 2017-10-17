-


CREATE DATABASE IF NOT EXISTS `matriculas` ;
USE `matriculas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acudiente`
--

CREATE TABLE IF NOT EXISTS `acudiente` (
  `Documento_a` varchar(15) NOT NULL DEFAULT '',
  `Apellidos_a` varchar(20) NOT NULL,
  `Nombres_a` varchar(20) NOT NULL,
  `Género_a` varchar(20) NOT NULL,
  `Parentesco` varchar(20) NOT NULL,
  `Puntaje_Sisben_a` varchar(20) NOT NULL,
  `Dirección` varchar(20) NOT NULL,
  `Teléfono` varchar(20) NOT NULL,
  `Ocupación` varchar(20) NOT NULL,
  PRIMARY KEY (`Documento_a`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acudiente`
--

INSERT INTO `acudiente` (`Documento_a`, `Apellidos_a`, `Nombres_a`, `Género_a`, `Parentesco`, `Puntaje_Sisben_a`, `Dirección`, `Teléfono`, `Ocupación`) VALUES
('28253947', 'Salazar Carreño', 'Gloria', 'Femenino', 'Madre', '33.3', 'Calle 6 # 6A 39', '3134810315', 'Ama de casa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `Documento_adminstrador` varchar(20) NOT NULL DEFAULT '',
  `Clave_administrador` varchar(20) NOT NULL,
  PRIMARY KEY (`Documento_adminstrador`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Documento_adminstrador`, `Clave_administrador`) VALUES
('omaira', 'omaira'),
('1014196186', '123456');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
  `Tipo_Documento` varchar(20) NOT NULL,
  `Numero_Documento` varchar(20) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Sede` varchar(100) NOT NULL,
  `Apellidos` varchar(20) NOT NULL,
  `Nombres` varchar(20) NOT NULL,
  `Genero` varchar(20) NOT NULL,
  `EPS` varchar(20) NOT NULL,
  `cod_grado` varchar(20) NOT NULL,
  `Puntaje_Sisben` varchar(20) NOT NULL,
  `Documento_a` varchar(20) NOT NULL,
  `Fecha_Registro` date NOT NULL,
  `Compromiso` varchar(500) NOT NULL,
  PRIMARY KEY (`Numero_Documento`),
  KEY `cod_grado_fk` (`cod_grado`),
  KEY `Documento_a_fk` (`Documento_a`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`Tipo_Documento`, `Numero_Documento`, `Fecha_Nacimiento`, `Sede`, `Apellidos`, `Nombres`, `Genero`, `EPS`, `cod_grado`, `Puntaje_Sisben`, `Documento_a`, `Fecha_Registro`, `Compromiso`) VALUES
('T.I. ', '990120123', '1999-01-20', 'Planta 2', 'Salazar Carreño', 'César Mauricio', 'Masculino', 'Saludvida', '6', '33.1', '28253947', '2013-10-08', 'QWERTY'),
('T.I. ', '950305123', '1995-03-05', 'Planta 1', 'Corzo Salazar', 'Erika Yadira', 'Femenino', 'Saludvida', '10-3', '33.1', '28253947', '2013-10-08', 'QWERTY'),
('R.C. ', '', '0000-00-00', 'Planta 1', '', '', 'Masculino', '', '0', '', '', '2013-10-19', ''),
('C.C. ', '1111111', '0001-01-01', 'Planta 1', 'QWERTY', 'QWERTY', 'Masculino', 'QWERTY', '10-1', '33.1', '123', '2013-10-12', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE IF NOT EXISTS `grado` (
  `cod_grado` varchar(20) NOT NULL,
  `Nombre_grado` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_grado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`cod_grado`, `Nombre_grado`) VALUES
('10-1', 'Décimo G.E.'),
('10-2', 'Décimo A.C.'),
('0', 'Transición'),
('10-3', 'Décimo M.A.'),
('9', 'Noveno'),
('8', 'Octavo'),
('5', 'Quinto'),
('6', 'Sexto'),
('7', 'Séptimo'),
('1', 'Primero'),
('2', 'Segundo'),
('3', 'Tercero'),
('4', 'Cuarto'),
('11-1', 'Undécimo G.E.'),
('11-2', 'Undécimo A.C.'),
('11-3', 'Undécmo M.A.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
