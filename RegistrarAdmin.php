<?php

	include("MYSQL.php");
 	$db=new MySQL();

        $Documento_administrador = $_POST['Documento_administrador'];

        $Clave_administrador     = $_POST['Clave_administrador'];

$consulta = $db->consulta("INSERT INTO administrador (Documento_adminstrador,Clave_administrador)VALUES('$Documento_administrador','$Clave_administrador')");

header("location: ENTRADA.html");

?>