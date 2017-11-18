<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
 <link rel="stylesheet" type="text/css" href="icono/fonts.css">
 <link rel="stylesheet" type="text/css" href="Roboto/tipografia.css">
 <link rel="stylesheet" type="text/css" href="imagenes/imagen.css">
 <link rel="stylesheet" type="text/css" href="estilos/index.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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


<title>MANEJO DE MATRICULAS I.T.I.A.D.</title>

<body >

	<div class="col-xs-12 col-sm-6 col-md-6  col-sm-offset-3 col-md-offset-3">
 <div class="box box-default col-xs-12 col-sm-6 col-md-6">
<div class="box-header with-border">
              <h2 class="box-title">CONSULTAR DATOS DE LOS ESTUDIANTES</h2>
 </div>

<div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">

                                        <form action="EliminarAcud.php" method="post">
	                                        <div class="form-group">

	                                            <label>Documento de acudiente:</label>

	                                            <select id="gra" name="Documento_a" class="form-control select2"  style="width: 100%;">
	                                              <?php
	                                              include("MYSQL.php");
	                                                  $db=new MySQL();
	                                                  //$genero=$_POST['Genero'];
	                                                  $acudiente=$db->consulta(" SELECT DISTINCT * FROM  acudiente ");
	                                                   $filas_1 = mysqli_num_rows($acudiente);

	                                                if ($filas_1 === 0) {
	                                                    $mensaje_1 = "<p>No hay ningún grado con ese nombre y/o apellido</p>";
	                                                } else {
	                                                    while ($row_1=$db->fetch_array($acudiente)) {
	                                                     
	                                                        ?>
	                                                        <option  selected="selected" ><?php echo $row_1[0]; ?> </option>
	                                                        <?php
	                                                    }
	                                                }
	                                                ?>
	                                            </select>
	                                        </div>
	                                        <input type="submit" value="Eliminar"/>
										</form>
										<form action="EliminarEstud.php" method="post">
                                        <div class="form-group">
                                            <label>Documento de estudiante</label>

                                            <select id="acu" name="Numero_Documento" class="form-control select2"  style="width: 100%;">
                                              <?php
                                              
                                                  $db=new MySQL();
                                                  //$genero=$_POST['Genero'];
                                                  $estudiante=$db->consulta(" SELECT DISTINCT * FROM  estudiante ");
                                                   $filas_2 = mysqli_num_rows($estudiante);

                                                if ($filas_2 === 0) {
                                                    $mensaje_2 = "<p>No hay ningún grado con ese nombre y/o apellido</p>";
                                                } else {
                                                    while ($row_2=$db->fetch_array($estudiante)) {
                                                     
                                                        ?>
                                                        <option  selected="selected" ><?php echo $row_2[1]; ?>

                                                        </option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <input type="submit" value="Eliminar"/>
										</form>
                                        <form action="EliminarAdmin.php" method="post">
	                                        <div class="form-group">
	                                            <label>ocumento de administrador:</label>

	                                            <select id="gra" name="Documento_administrador" class="form-control select2"  style="width: 100%;">
	                                              <?php
	                                              
	                                                  $db=new MySQL();
	                                                  //$genero=$_POST['Genero'];
	                                                  $administrador=$db->consulta(" SELECT DISTINCT * FROM  administrador ");
	                                                   $filas_3 = mysqli_num_rows($administrador);

	                                                if ($filas_3 === 0) {
	                                                    $mensaje_3 = "<p>No hay ningún grado con ese nombre y/o apellido</p>";
	                                                } else {
	                                                    while ($row_3=$db->fetch_array($administrador)) {
	                                                     
	                                                        ?>
	                                                        <option  selected="selected" ><?php echo $row_3[0]; ?> 

	                                                        </option>
	                                                        <?php
	                                                    }
	                                                }
	                                                ?>
	                                            </select>
	                                        </div>
	                                        <input type="submit" value="Eliminar"/>
										</form>

                                        
                                    </div>

                                </div>
                                <!-- /.row -->
</div>
<form action="entrada.html" method="post">
<input type="submit" value="Entrada"/>
</form>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>


<script>
  $(function () { 
    //Initialize Select2 Elements
    $(".select2").select2();

  });
</script>

</div>
</div>
</body>
</html>