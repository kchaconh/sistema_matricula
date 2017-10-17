<?php

	include("MYSQL.php");
 	$db=new MySQL();

        $Documento_adminstrador    = $_POST['Documento_administrador'];
		
        $Clave_administrador       = $_POST['Clave_administrador'];
		
        // $Clave_administrador = md5($Clave_administrador);

$consulta = $db->consulta("INSERT INTO administrador VALUES(
'$Documento_adminstrador',

'$Clave_administrador')");

header("location: Index.html");

//  "DELETE FROM administrador WHERE administrador.Documento_adminstrador = \'1100221373\'"

?>