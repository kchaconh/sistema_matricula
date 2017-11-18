<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">


 <link rel="stylesheet" type="text/css" href="imagenes/imagen.css">
 <link rel="stylesheet" type="text/css" href="estilos/index.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

<title>MANEJO DE MATRICULAS I.T.I.A.D.</title>
</head>

<body >


  <div style=" overflow-x: auto; ">
  <?php
include("MYSQL.php");
$db=new MySQL();

$consultaBusqueda=$_POST['valorBusqueda'];

     
if($consultaBusqueda==" "){


$consulta=$db->consulta("SELECT *
                         FROM   estudiante,acudiente,grado 
                         WHERE  estudiante.cod_grado = grado.cod_grado AND 
                                estudiante.Documento_a = acudiente.Documento_a order by estudiante.Apellidos");
   ?> 
   <table id="example1" class="table table-bordered table-striped">

                <thead>
                <tr >
                  <th class="active" COLSPAN=12>Estudiante</th>
                  <th class="success" COLSPAN=4>Acudiente</th>
                </tr>
                <tr >
                  <th>Numero de documento </th>
                  <th>Nombres </th>
                  <th>Apellidos </th>
                  <th>Genero </th>
                  <th>Fecha Nacimiento </th>
                  <th>Tipo Documento </th>
                  <th>Compromiso </th>
                  <th>Fecha Registro </th>
                  <th>Puntaje Sisben </th>
                  <th>Sede </th>
                  <th>EPS </th>
                  <th>grado </th>
                  <th>Numero de documento </th>
                  <th>Nombres </th>
                  <th>Apellidos </th>
                  <th>Puntaje Sisben </th>
                </tr>
                </thead>
                <?php while($resultados=$db->fetch_array($consulta)){ ?> 
                <tbody>
                <tr>
                  <td><?php echo $resultados['Numero_Documento'];?></td>
                  <td><?php echo $resultados['Nombres'];?></td>
                  <td><?php echo $resultados['Apellidos'];?></td>
                  <td><?php echo $resultados['Genero'];?></td>
                  <td><?php echo $resultados['Fecha_Nacimiento'];?></td>
                  <td><?php echo $resultados['Tipo_Documento'];?></td>
                  <td><?php echo $resultados['Compromiso'];?></td>
                  <td><?php echo $resultados['Fecha_Registro']; ?></td>
                  <td><?php echo $resultados['Puntaje_Sisben'];?></td>
                  <td><?php echo $resultados['Sede'];?></td>
                  <td><?php echo $resultados['EPS'];?></td>
                  <td><?php echo $resultados['Nombre_grado'];?></td> 
                  <td class="success"><?php echo $resultados['Documento_a'];?></td>         
                  <td class="success"><?php echo $resultados['Nombres_a'];?></td>
                  <td class="success"><?php echo $resultados['Apellidos_a'];?></td>
                  <td class="success"><?php echo $resultados['Puntaje_Sisben_a'];?></td>
                </tr>
                </tbody>
                <?php } ?>     
              </table>


   <?php


} 
else {
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

$consulta=$db->consulta("SELECT DISTINCT * FROM estudiante,acudiente,grado WHERE (grado.Nombre_grado like '%$consultaBusqueda%'or acudiente.Apellidos_a like '%$consultaBusqueda%' or acudiente.Nombres_a like '%$consultaBusqueda%'or estudiante.Apellidos like '%$consultaBusqueda%'or estudiante.Nombres like '%$consultaBusqueda%')  and estudiante.cod_grado = grado.cod_grado AND estudiante.Documento_a = acudiente.Documento_a order by estudiante.Apellidos");
   
?>
<table id="example1" class="table table-bordered table-striped">

                <thead>
                <tr >
                  <th class="active" COLSPAN=12>Estudiante</th>
                  <th class="success" COLSPAN=4>Acudiente</th>
                </tr>
                <tr >
                  <th>Numero de documento </th>
                  <th>Nombres </th>
                  <th>Apellidos </th>
                  <th>Genero </th>
                  <th>Fecha Nacimiento </th>
                  <th>Tipo Documento </th>
                  <th>Compromiso </th>
                  <th>Fecha Registro </th>
                  <th>Puntaje Sisben </th>
                  <th>Sede </th>
                  <th>EPS </th>
                  <th>grado </th>
                  <th>Numero de documento </th>
                  <th>Nombres </th>
                  <th>Apellidos </th>
                  <th>Puntaje Sisben </th>
                </tr>
                </thead>
                <?php while($resultados=$db->fetch_array($consulta)){ ?> 
                <tbody>
                <tr>
                  <td><?php echo $resultados['Numero_Documento'];?></td>
                  <td><?php echo $resultados['Nombres'];?></td>
                  <td><?php echo $resultados['Apellidos'];?></td>
                  <td><?php echo $resultados['Genero'];?></td>
                  <td><?php echo $resultados['Fecha_Nacimiento'];?></td>
                  <td><?php echo $resultados['Tipo_Documento'];?></td>
                  <td><?php echo $resultados['Compromiso'];?></td>
                  <td><?php echo $resultados['Fecha_Registro']; ?></td>
                  <td><?php echo $resultados['Puntaje_Sisben'];?></td>
                  <td><?php echo $resultados['Sede'];?></td>
                  <td><?php echo $resultados['EPS'];?></td>
                  <td><?php echo $resultados['Nombre_grado'];?></td> 
                  <td class="success"><?php echo $resultados['Documento_a'];?></td>         
                  <td class="success"><?php echo $resultados['Nombres_a'];?></td>
                  <td class="success"><?php echo $resultados['Apellidos_a'];?></td>
                  <td class="success"><?php echo $resultados['Puntaje_Sisben_a'];?></td>
                </tr>
                </tbody>
                <?php } ?>     
              </table>
<?php
  
}
?>

           
            <!-- /.box-header -->

       
              
                
              
                
     
</div>
  
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->


</body>
</html>