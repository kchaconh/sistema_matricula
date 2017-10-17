
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


-- Base de datos: `matriculas`





-- Estructura de tabla para la tabla `acudiente`


CREATE TABLE IF NOT EXISTS `acudiente` (
  `Documento_a` varchar(15) NOT NULL,
  `Apellidos_a` varchar(20) NOT NULL,
  `Nombres_a` varchar(20) NOT NULL,
  `Genero_a` varchar(20) NOT NULL,
  `Parentesco` varchar(20) NOT NULL,
  `Puntaje_Sisben_a` varchar(20) NOT NULL,
  `Dirección` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `Ocupacion` varchar(20) NOT NULL,
  PRIMARY KEY (`Documento_a`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `Documento_adminstrador` varchar(20) NOT NULL,
  `Clave_administrador` varchar(20) NOT NULL,
  PRIMARY KEY (`Documento_adminstrador`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `Documento_a_fk` varchar(20) NOT NULL,
  `Fecha_Registro` date NOT NULL,
  `Compromiso` varchar(500) NOT NULL,
  PRIMARY KEY (`Numero_Documento`),
  KEY `cod_grado_fk` (`cod_grado`),
  KEY `Documento_a_fk` (`Documento_a_fk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE IF NOT EXISTS `grado` (
  `cod_grado` varchar(20) NOT NULL,
  `Nombre_grado` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_grado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
