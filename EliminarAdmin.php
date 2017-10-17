<?php
include("MYSQL.php");
$db=new MySQL();
$docu_admin = $_POST['Documento_administrador'];
 
                echo "<br>";
				echo "<br>";
				echo "<center>"; 
                echo "<font color = red>";
                echo "LOS DATOS DEL ADMINISTRADOR HAN SIDO BORRADOS";
				echo "</font>";
                echo "<br>";
				
$consulta=$db->consulta("DELETE FROM administrador 
                          WHERE administrador.Documento_adminstrador = '$docu_admin'");

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