<?php
require_once "ConexionDB.php";

$id = isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : 0;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Misi&oacute;n PUCMM</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- Temporal deben acomodarlo como va y quitar del bootstrap.min.css el paddin agregado-->
 <div align="center" class="miContenedor col-md-12">

   <div class="row">
     <div class="col-xs-6 col-md-12">
       <a href="persona.php?id=<?php echo$id;?>" class="btn btn-primary" style="display: block; width: 100%;margin-bottom: 10px">
         <span>Registrar Persona</span>
       </a>
     </div>
   </div>

   <div class="row">
     <div class="col-xs-6 col-md-12">
       <h1 class="left">Departamentos:</h1>
     </div>
   </div>
    <div class="row">
      <div class="col-xs-6 col-md-12">
        <a href="estomatologia.php?id=<?php echo$id;?>" class="btn btn-success" style="display: block; width: 100%;margin-bottom: 10px">
          <span>Estomatolog&iacute;a</span>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-md-12">
        <a href="nutricion.php?id=<?php echo$id;?>" class="btn btn-success" style="display: block; width: 100%;margin-bottom: 10px">
          <span>Nutrici&oacute;n</span>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-md-12">
        <a href="terapiafisica.php?id=<?php echo$id;?>" class="btn btn-success" style="display: block; width: 100%;margin-bottom: 10px">
          <span>Terapia F&iacute;sica</span>
        </a>
      </div>
    </div>
   <div class="row">
     <div class="col-xs-6 col-md-12">
     <h1 class="left">Medicina:</h1>
     </div>
   </div>
    <div class="row">
        <div class="col-xs-6 col-md-12">
          <a href="estacion1.php?id=<?php echo$id;?>" class="btn btn-success" style="display: block; width: 100%; margin-bottom: 10px">
            <span>Estaci&oacute;n 1</span>
          </a>
        </div>
    </div>
   <div class="row">
      <div class="col-xs-6 col-md-12">
        <a href="estacion2.php?id=<?php echo$id;?>" class="btn btn-success" style="display: block; width: 100%; margin-bottom: 10px"">
          <span>Estaci&oacute;n 2</span>
        </a>
      </div>
     </div>
   <div class="row">
      <div class="col-xs-6 col-md-12">
        <a href="estacion3.php?id=<?php echo$id;?>" class="btn btn-success" style="display: block; width: 100%; margin-bottom: 10px">
          <span>Estaci&oacute;n 3</span>
        </a>
      </div>
     </div>
   <div class="row">
      <div class="col-xs-6 col-md-12">
        <a href="estacion4.php?id=<?php echo$id;?>" class="btn btn-success" style="display: block; width: 100%;  margin-bottom: 10px">
          <span>Estaci&oacute;n 4</span>
        </a>
      </div>
    </div>

   <div class="form-group">
     <div class="col-xs-6 col-md-12">
     <a href="<?php echo $direccion;?>index.php">
       <button class="btn btn-danger" style="display: block; width: 100%;margin-bottom: 10px">Volver Atras</button>
     </a>
       </div>
   </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>