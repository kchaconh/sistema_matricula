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
<script>

setTimeout('buscar()',1);


function buscar() {
    var textoBusqueda = $("input#busqueda").val();

    
        $.post("listar_busqueda.php", {valorBusqueda: textoBusqueda}, function(mensaje){
            $("#resultadoBusqueda").html(mensaje);
         }); 
     
};
</script>
</head>

<body >

<div class="col-xs-12 col-sm-6 col-md-6  col-sm-offset-3 col-md-offset-3">
 <div class="box box-default col-xs-12 col-sm-6 col-md-6">
<div class="box-header with-border">
<h3 class="box-title">CONSULTAR DATOS DE LOS ESTUDIANTES POR:</h3><br>
</div>

<div class="box-body">
                              
 <form accept-charset="utf-8" method="POST">

 <header class="container-fluid  ">
            <div class="form-inline">
              
              <div class="buscar_1">
                <div class="input-group">
                    <label class="sr-only" for="correo">
                    Buscar:
                    </label>
                    <a class="input-group-addon  glyphicon glyphicon-search "></a>
                    <input name="busqueda" class="form-control" id="busqueda" type="text" placeholder="buscar:" maxlength="30" autocomplete="off" onKeyUp="buscar();">
                </div>
            </div>
             
            </div>
        </header>
</form>
 
                            </div>
                      


<form action="entrada.html" method="post">
<input type="submit" value="Entrada"/>
</form>


</div>
<div class="box box-default col-xs-6 col-sm-6 col-md-6"">
  <div style=" overflow-x: auto; ">
  

            <div class="box-header">
              <h3 class="box-title">DATOS DE ACUDIENTES Y ESTUDIANTES</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body"  >
             <div id="resultadoBusqueda"></div>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
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