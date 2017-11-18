<html>
<head>

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
	<form action="ACUDIENTE.php" method="post">
	<div class="col-xs-8 col-sm-8 col-md-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2">
 <div class="box box-default col-xs-8 col-sm-8 col-md-8">
    	<div class="box-header with-border">
              <h2 class="box-title">FORMULARIO DE APODERADO</h2>
        </div>
        <div class="box-body">
			
				 <div class="row">
				            <?php $Documento_est=$_GET['Documento'];?>
				           <div class="col-md-6">
				                <div class="form-group">
				                  <label>Documento estudiante:</label>
				                  
				                  <select name="Documento_est" class="form-control select2" style="width: 100%;" >
				                  <option selected="selected"><?php echo $Documento_est ?></option>
				               	  </select>	 
				                </div>
						    </div>
				            <div class="col-md-6">
				              <div class="form-group">
				               <label>Nombre:</label>
				                  <input type="text" name="Nombres_a" class="form-control" placeholder="Nombre">      

				              </div>
				            </div>
				            <div class="col-md-6">
				              <div class="form-group">
				               <label>Apellido:</label>
				                  <input type="text" name="Apellidos_a" class="form-control" placeholder="Apellido">      
				                   
				              </div>
				            </div>
				            <div class="col-md-6">
				              <div class="form-group">
				               <label>Numero de documento:</label>
				                  <input type="text" name="Documento_a" class="form-control" placeholder="Numero de documento">      
				                   
				              </div>
				            </div>
				            <div class="col-md-6">
				              <div class="form-group">
				               <label>Dirección:</label>
				                  <input type="text" name="Direccion" class="form-control" placeholder="Dirección">      
				                   
				              </div>
				            </div>
							<div class="col-md-6">
				              <div class="form-group">
				               <label>Teléfono:</label>
				                  <input type="text" name="Telefono" class="form-control" placeholder="Teléfono">      
				                   
				              </div>
				            </div>
				            <div class="col-md-6">
				              <div class="form-group">
				               <label>Ocupación:</label>
				                  <input type="text" name="Ocupacion" class="form-control" placeholder="Ocupación">      
				               </div> 
				              </div>
				            <div class="col-md-6">
				              <div class="form-group">
				               <label>Puntaje de Sisben:</label>
				                  <input type="text" name="Puntaje_Sisben_a" class="form-control" placeholder="Puntaje Sisben">      
				                   
				              </div>
				            </div>
				            
				</div>      
				<div class="row">
				            <div class="col-md-6">
				              <div class="form-group">
				                <label>Parentesco</label>
				                <select name="Parentesco" class="form-control select2" style="width: 100%;">
				                  <option selected="selected">Padre</option>
				                    <option>Madre</option>
				                    <option>Familiar</option>
				                    <option>Otro</option>
				                </select>
				              </div>
				              </div>
				              <!-- /.form-group -->
				            <div class="col-md-6">
				              <div class="form-group">
				                <label>Genero</label>
				                <select name="Genero_a" class="form-control select2" style="width: 100%;">
				                  <option selected="selected">Masculino.</option>
				                    <option>Femenino</option>
				                </select>
				              </div>
				            </div>
				</div>
				<div class="row">

              <div class="col-md-3 col-md-offset-3">
                <div class="form-group ">
                  <form action="ACUDIENTE.php" method="post">

                  <input type="submit" value="Enviar" class="btn btn-success pull-right  "/>
                  </form>	
                </div>
              </div>
              </div>	
              	 
		</div>
</div>
</div>
</form>	
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
<script>

   $(document).ready(function () {
                $('#buscar').click(function () {
						
                    location.href="ACUDIENTE.php?Documento='<?php echo $Documento_est; ?>'";
                    }
                });
           
</script>
</body>
</html>