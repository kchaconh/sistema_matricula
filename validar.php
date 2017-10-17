<?php
include("MYSQL.php");
$db=new MySQL();

$usuario=$_POST['documento'];
$clave=$_POST['clave'];
$consulta=$db->consulta("SELECT Documento_adminstrador,
Clave_administrador FROM administrador WHERE Documento_adminstrador 
like '$usuario' AND Clave_administrador like '$clave'");
	
if($db->num_rows($consulta)==1){
$validar=1;
}
elseif($db->num_rows($consulta)==0){
$validar=0;
}
if($validar==1){
header("location: ENTRADA.html");
}
elseif($validar==0){
header("location: ERROR.html");	
}
?>