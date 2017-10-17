<?php
include("MYSQL.php");
$db=new MySQL();
$docu=$_POST['Numero_Documento'];
 
                echo "<br>";
				echo "<br>";
				echo "<center>"; 
                echo "<font color = red>";
                echo "LOS DATOS DEL ESTUDIANTE HAN SIDO BORRADOS";
				echo "</font>";
                echo "<br>";
				
$consulta=$db->consulta("DELETE 
                        FROM acudiente 
						WHERE acudiente.Documento_a = '$docu'");

		echo "<br>";
		echo "<br>";
		

        echo "<form action= ELIMINAR.html method= post>";
		echo "<input type= submit value= Anterior>";
		echo "</form>";

		echo "<form action= entrada.html method= post>";
		echo "<input type= submit value= Entrada>";
		echo "</form>";
		echo "</center>";
		echo "</body>";
 ?>