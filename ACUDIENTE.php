<?php
	include("MYSQL.php");
 	$db=new MySQL();

	
        $Documento_a      = $_POST['Documento_a'];

        $Apellidos_a      = $_POST['Apellidos_a'];

        $Nombres_a        = $_POST['Nombres_a'];

        $Genero_a         = $_POST['Género_a'];

        $Parentesco       = $_POST['Parentesco'];

        $Puntaje_Sisben_a = $_POST['Puntaje_Sisben_a'];

        $Direccion        = $_POST['Dirección'];

        $Telefono         = $_POST['Teléfono'];

        $Ocupacion        = $_POST['Ocupación'];

		

	$consulta = $db->consulta("INSERT INTO acudiente VALUES(
'$Documento_a',

'$Apellidos_a',

'$Nombres_a',

'$Género_a',

'$Parentesco',

'$Puntaje_Sisben_a',

'$Dirección',

'$Teléfono',

'$Ocupacin')");

header("location: ENTRADA.html");

                echo "<br>";
				echo "<br>";
				echo "<center>"; 
                echo "<font color = red>";
                echo "LOS DATOS DEL ACUDIENTE HAN SIDO BORRADOS";
				echo "</font>";
                echo "<br>";

echo "<script>"; 
function revisar() { 
if(acudiente.Documento_a == "") { alert('Debe colocar el Numero de Doccumento') ; return false ; } 
if(acudiente.Apellidos_a == "") { alert('Debes poner el país') ; return false ; } 
if(acudiente.Nombres_a == "") { alert('Debes poner el email') ; return false ; }
if(acudiente.Género_a == "") { alert('Debes poner el nombre') ; return false ; } 
if(acudiente.Parentesco == "") { alert('Debes poner el país') ; return false ; } 
if(acudiente.Puntaje_Siben_a == "") { alert('Debes poner el email') ; return false ; }
if(acudiente.Dirección == "") { alert('Debes poner el nombre') ; return false ; } 
if(acudiente.Teléfono == "") { alert('Debes poner el país') ; return false ; } 
if(acudiente.Ocupación == "") { alert('Debes poner el email') ; return false ; } } 
echo "</script>";
				
?>