<?php

// CREAR TABLA DE FAVORITOS-----------------------------

// conexion-------------------------------------------------

$conexion = SQLite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');

// crear tabla------------------------------------------------

$consulta =

<<<SQL

CREATE TABLE favoritos (

usuario char (40) Not Null,
clave char (40) Not Null,
titulo char (40) Not Null,
direccion char (100) Not Null,
categoria char (40) Not Null,
comentario char (200) Not Null,
valoracion int
);

SQL;

// insertar contenido de la tabla-----------------------------

$resultado = SQLite_excec ($conexion, $consulta);

// cerrar conexion--------------------------------------------

SQLite_close ($conexion);

// CREAR CONTENIDO DE PRUEBA PARA LA TABLA DE FAVORITOS------------------------------

// establecer------------------------------

$conexion = mysql_open('favoritos.db') or die ('Ha sido imposible establecer la conexion');

// preparar------------------------------

$consulta =
<<<SQL

INSERT INTO favoritos VALUES('jhon','123','Google','http://www.google.com','Tecnologia','Este es un buscador muy famoso'10);
INSERT INTO favoritos VALUES('jhon','123','Facebook','http://www.facebook.com','Tecnologia','Este es mi rd social'11);
INSERT INTO favoritos VALUES('jhon','123','Hotmail','http://www.hotmail.com','Tecnologia','Este es mi correo electronico'12);

SQL;

// insertar------------------------------

$resultado = mysql_excec ($conexion, $consulta);

// cerrar------------------------------

SQLite_close ($conexion);

// CREAR TABLA DE USUARIOS------------------------------

// connexion-------------------------------------------------

$conexion = SQLite_open('favoritos.db') or die ('Ha sido imposible establecer la conexion');

// crear tabla------------------------------------------------

$consulta =
<<<SQL

CREATE TABLE usuarios (

usuario char (40) Not Null,
clave char (40) Not Null,
nombre char (40) Not Null,
apellido char (40) Not Null,
edad int,
permisos int
);

SQL;

// insertar contenido de la tabla-----------------------------

$resultado = SQLite_excec ($conexion, $consulta);

// cerrar conexion--------------------------------------------

SQLite_close ($conexion);

// CREAR CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS------------------------------

// establecer------------------------------

$conexion = SQLite_open('favoritos.db') or die ('Ha sido imposible establecer la conexion');

// preparar------------------------------

$consulta =
<<<SQL

INSERT INTO usuarios VALUES('jhon','123','Jhon Fredy','Corzo Salazar',23,1);

SQL;

// insertar------------------------------

$resultado = SQLite_excec ($conexion, $consulta);

// cerrar------------------------------

SQLite_close ($conexion);


// CREAR TABLA DE LOGS------------------------------

// connexion-------------------------------------------------

$conexion = SQLite_open('favoritos.db') or die ('Ha sido imposible establecer la conexion');

// crear tabla------------------------------------------------

$consulta =
<<<SQL

CREATE TABLE logs (

utc int,
anio int,
mes int,
dia int,
hora int,
minuto int,
segundo int,
ip char (40) Not Null,
navegador char (0) Not Null,
usuario char (40) Not Null,
clave char (40) Not Null,
);

SQL;

// insertar contenido de la tabla-----------------------------

$resultado = SQLite_excec ($conexion, $consulta);

// cerrar conexion--------------------------------------------

SQLite_close ($conexion);

// CREAR CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS------------------------------

// establecer------------------------------

$conexion = SQLite_open('favoritos.db') or die ('Ha sido imposible establecer la conexion');

// preparar------------------------------

$consulta =
<<<SQL

INSERT INTO logs     VALUES(00000,
                            2013,
							10,
							13,
							06,
							55,
							00,
							'192.168.101',
							'chrome',
							'jhon',
							'123');

SQL;

// insertar------------------------------

$resultado = SQLite_excec ($conexion, $consulta);

// cerrar------------------------------

SQLite_close ($conexion);

?>