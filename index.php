<?php
require_once "ConexionDB.php";

$id = isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : 0;?>

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
  <div align="center" class="miContenedor">
    <div class="row">
      <div class="col-md-12">
        <form method="post" action="<?php echo $direccion; ?>procesarMenu.php" >

          <div class="form-group">
            <label>Ticket Persona</label>
            <input type="text" placeholder="Numero de Ticket" class="form-control" name="id" required/>
          </div>
          <div class="form-group">
            <button class="btn btn-primary" style="display: block; width: 100%;margin-bottom: 10px">Ir al Menu</button>
          </div>
        </form>
      </div>
    </div>

  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>