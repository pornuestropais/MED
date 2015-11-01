<?php
require_once "ConexionDB.php";

$id = isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : 0;
$Peticion = $conexion->query( "SELECT * FROM estacion1 WHERE idEstacion1 =  '".$id."'" );
$Obtener = $Peticion->Fetch( );

$nop_cafe      = $Obtener[ 'nop_cafe' ];
$nop_te        = $Obtener[ 'nop_te' ];
$nop_drogas    = $Obtener[ 'nop_drogas' ];
$nop_alcohol   = $Obtener[ 'nop_alcohol' ];
$nop_otros     = $Obtener[ 'nop_otros' ];
$medicamentos  = $Obtener[ 'medicamentos' ];

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

    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container" style="margin-top: 20px;">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="<?php echo $direccion; ?>procesarEstacion1.php" >
            <div class="form-group">
              <label>ID Persona</label>
              <input type="text" readonly placeholder="Numeraci&oacute;n de la persona" class="form-control" name="id" required value="<?php echo ( isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : '' ); ?>" />
            </div>

             <div class="form-group">
              <label>DM</label>
              <input type="text" class="form-control" name="pat_dm" required value="<?php echo $Obtener[ 'pat_dm' ]; ?>" />
            </div>

            <div class="form-group">
              <label>HTA</label>
              <input type="text" class="form-control" name="pat_hta" required value="<?php echo $Obtener[ 'pat_hta' ]; ?>" />
            </div>

            <div class="form-group">
              <label>Alergias</label>
              <textarea required class="form-control" name="pat_alergias"><?php echo $Obtener[ 'pat_alergias' ]; ?></textarea>
            </div>

            <div class="form-group">
              <label>Cirugías</label>
              <textarea required class="form-control" name="pat_cirugias"><?php echo $Obtener[ 'pat_cirugias' ]; ?></textarea>
            </div>

            <div class="form-group">
              <label>Otras patologías</label>
              <textarea required class="form-control" name="pat_otros"><?php echo $Obtener[ 'pat_otros' ]; ?></textarea>
            </div>

            <div class="form-group">
              <label>Consume café?</label>
              <select name="nop_cafe" class="form-control">
                <?php
                foreach( [ 'No', 'Si' ] as $valor => $nombre ){
                  echo "<option value=\"$valor\" ".( ( $nop_cafe == $valor ) ? 'selected' : '' ) .">$nombre</option>";
                }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label>Consume té?</label>
              <select name="nop_te" class="form-control">
                <?php
                foreach( [ 'No', 'Si' ] as $valor => $nombre ){
                  echo "<option value=\"$valor\" ".( ( $nop_te == $valor ) ? 'selected' : '' ) .">$nombre</option>";
                }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label>Consume drogas?</label>
              <select name="nop_drogas" class="form-control">
                <?php
                foreach( [ 'No', 'Si' ] as $valor => $nombre ){
                  echo "<option value=\"$valor\" ".( ( $nop_drogas == $valor ) ? 'selected' : '' ) .">$nombre</option>";
                }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label>Consume Alcohol?</label>
              <select name="nop_alcohol" class="form-control">
                <?php
                foreach( [ 'No', 'Si' ] as $valor => $nombre ){
                  echo "<option value=\"$valor\" ".( ( $nop_alcohol == $valor ) ? 'selected' : '' ) .">$nombre</option>";
                }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label>Otros?</label>
              <select name="nop_otros" class="form-control">
                <?php
                foreach( [ 'No', 'Si' ] as $valor => $nombre ){
                  echo "<option value=\"$valor\" ".( ( $nop_otros == $valor ) ? 'selected' : '' ) .">$nombre</option>";
                }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label>Medicamentos</label>
              <textarea name="medicamentos" class="form-control"><?php echo $Obtener[ 'medicamentos' ]; ?></textarea>
            </div>

            <div class="form-group">
              <button class="btn btn-primary" style="display: block; width: 100%;margin-bottom: 10px">Procesar</button>
            </div>
          </form>
          <div class="form-group">
            <div class="col-xs-6 col-md-12">
              <a href="<?php echo $direccion;?>index.php">
                <button class="btn btn-danger" style="display: block; width: 100%;margin-bottom: 10px">Volver Atras</button>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>