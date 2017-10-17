<?php
	include("MYSQL.php");
 	$db=new MySQL();

 	date_default_timezone_set('America/Bogota');

        $Tipo_Documento     = $_POST['Tipo_Documento'];

        $Numero_Documento   = $_POST['Numero_Documento'];

        $Fecha_Nacimiento   = $_POST['Fecha_Nacimiento'];

        $Sede               = $_POST['Sede'];

        $Apellidos          = $_POST['Apellidos'];

        $Nombres            = $_POST['Nombres'];

        $Genero             = $_POST['Genero'];

        $EPS                = $_POST['EPS'];

        $Nombre_grado_fk    = $_POST['Nombre_grado_fk'];

        $Puntaje_Sisben     = $_POST['Puntaje_Sisben'];

        $Documento_acudiente= $_POST['Documento_acudiente'];

        $Fecha_Registro     = date("y/m/d");

        $Compromiso         = $_POST['Compromiso'];


$consulta = $db->consulta("INSERT INTO estudiante VALUES(

'$Tipo_Documento ',

'$Numero_Documento',

'$Fecha_Nacimiento',

'$Sede',

'$Apellidos',

'$Nombres',

'$Genero',

'$EPS',

'$Nombre_grado_fk',

'$Puntaje_Sisben',

'$Documento_acudiente',

'$Fecha_Registro',

'$Compromiso')");


		$consulta=$db->consulta("SELECT Documento_a
FROM acudiente WHERE Documento_a = '$Documento_acudiente'");


                echo "<br>";
				echo "<br>";
				echo "<center>"; 
                echo "<font color = red>";
                echo "LOS DATOS DEL ESTUDIANTE HAN SIDO REGISTRADOS";
				echo "</font>";
                echo "<br>";

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
header("location: ACUDIENTE.html");
}


		echo "<br>";
		echo "<br>";
		echo "<form action= ACUDIENTE.html method= post>";
		echo "<input type= submit value= Acudiente>";
		echo "</form>";
	       echo "</center>";
?>