<?php
include("MYSQL.php");
$db=new MySQL();
$genero=$_POST['Genero'];
echo "<center>";
echo "<h3>";
echo "INSTITUTO TÉCNICO ISAÍAS ARDILA DÍAZ";
echo "</h3>";
echo "</center>";
$consulta=$db->consulta("SELECT
estudiante.Tipo_Documento,
estudiante.Numero_Documento,
estudiante.Apellidos,
estudiante.Nombres,
estudiante.Fecha_Nacimiento,
estudiante.cod_grado,
estudiante.Sede,
estudiante.EPS,
estudiante.Puntaje_Sisben,
estudiante.Genero,
estudiante.Compromiso,
estudiante.Fecha_Registro,
acudiente.Apellidos_a,
acudiente.Puntaje_Sisben_a,
acudiente.Nombres_a,
grado.Nombre_grado
                         FROM   estudiante,acudiente,grado
                         WHERE  estudiante.Genero      = '$genero' AND
                                estudiante.cod_grado   = grado.cod_grado AND
                                estudiante.Documento_a = acudiente.Documento_a");

if($db->num_rows($consulta)>0) {

                echo "<center>";
		echo "<table border= 1>";

                echo "<tr>";

                echo "<th width = 150>";
                echo "<h4>";
		echo "Tipo de Documento";
        	echo "</h4>";
        	echo "</th>";

        	echo "<th width = 160>";
                echo "<h4>";
		echo "Número de Documento";
        	echo "</h4>";
        	echo "</th>";

        	echo "<th width = 100>";
                echo "<h4>";
		echo "Apellidos";
        	echo "</h4>";
        	echo "</th>";

        	echo "<th width = 100>";
                echo "<h4>";
		echo "Nombres";
        	echo "</h4>";
        	echo "</th>";

        	echo "<th width = 150>";
                echo "<h4>";
		echo "Fecha de Nacimiento";
        	echo "</h4>";
        	echo "</th>";

                echo "<th width = 250>";
                echo "<h4>";
		echo "Grado";
        	echo "</h4>";
        	echo "</th>";

                echo "<th width = 100>";
                echo "<h4>";
		echo "Sede";
        	echo "</h4>";
        	echo "</th>";

                echo "<th width = 100>";
                echo "<h4>";
		echo "E. P. S.";
        	echo "</h4>";
        	echo "</th>";

                echo "<th>";
                echo "<h4>";
		echo "Puntaje de sisben de acudiente";
        	echo "</h4>";
        	echo "</th>";

        	echo "<th>";
                echo "<h4>";
		echo "Puntaje de sisben de estudiante";
        	echo "</h4>";
        	echo "</th>";

        	echo "<th>";
                echo "<h4>";
		echo "Género";
        	echo "</h4>";
        	echo "</th>";

        	echo "<th>";
                echo "<h4>";
		echo "Apellidos de acudiente";
        	echo "</h4>";
        	echo "</th>";

        	echo "<th>";
                echo "<h4>";
		echo "Nombres de acudiente";
        	echo "</h4>";
        	echo "</th>";

        	echo "<th width = 150>";
                echo "<h4>";
		echo "Compromiso";
        	echo "</h4>";
        	echo "</th>";

        	echo "<th width = 250>";
                echo "<h4>";
		echo "Fecha de registro";
        	echo "</h4>";
        	echo "</th>";

        	echo "</tr>";

while($resultados=$db->fetch_array($consulta)){

                echo "<tr>";

                echo "<td>";
                echo $resultados['Tipo_Documento'];
		echo "</td>";

		echo "<td>";
		echo $resultados['Numero_Documento'];
		echo "</td>";

                echo "<td width = 250>";
		echo $resultados['Apellidos'];
		echo "</td>";

		echo "<td width = 200>";
		echo $resultados['Nombres'];
		echo "</td>";

		echo "<td>";
		echo $resultados['Fecha_Nacimiento'];
		echo "</td>";

                echo "<td width = 150>";
		echo $resultados['Nombre_grado'];
		echo "</td>";

		echo "<td>";
		echo $resultados['Sede'];
		echo "</td>";

                echo "<td>";
		echo $resultados['EPS'];
		echo "</td>";

		echo "<td>";
		echo $resultados['Puntaje_Sisben_a'];
		echo "</td>";

		echo "<td>";
		echo $resultados['Puntaje_Sisben'];
		echo "</td>";

		echo "<td>";
		echo $resultados['Genero'];
		echo "</td>";

		echo "<td width = 250>";
		echo $resultados['Apellidos_a'];
		echo "</td>";

		echo "<td width = 200>";
		echo $resultados['Nombres_a'];
		echo "</td>";

		echo "<td>";
		echo $resultados['Compromiso'];
		echo "</td>";

                echo "<td>";
		echo $resultados['Fecha_Registro'];
		echo "</td>";

		echo "</tr>";


                }


                echo "</table>";



                echo "<br>";
		echo "<br>";
		echo "<br>";

                }

                else {
                echo "<center>";
                echo "<font color = red>";
                echo "NO HAY ESTUDIANTES REGISTRADOS";
                echo "<br>";
		echo "<br>";
		echo "<br>";
                }



                echo "<form action= CONSULTAS.html method= post>";
		echo "<input type= submit value= Consultas>";
		echo "</form>";

		echo "<form action= entrada.html method= post>";
		echo "<input type= submit value= Entrada>";
		echo "</form>";
		echo "</center>";
		echo "</body>";
                ?>