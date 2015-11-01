<?php
require_once "ConexionDB.php";

$id = isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : 0;
$Peticion = $conexion->query( "SELECT * FROM TerapiaFisica WHERE idTerapiaFisica =  '".$id."'" );
$Obtener = $Peticion->Fetch( );

/*$nop_cafe      = $Obtener[ 'nop_cafe' ];
$nop_te        = $Obtener[ 'nop_te' ];
$nop_drogas    = $Obtener[ 'nop_drogas' ];
$nop_alcohol   = $Obtener[ 'nop_alcohol' ];
$nop_otros     = $Obtener[ 'nop_otros' ];
$medicamentos  = $Obtener[ 'medicamentos' ];*/

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
          <form method="post" action="<?php echo $direccion; ?>procesarTerapiaFisica.php" >
            <div class="form-group">
              <label>ID Persona</label>
              <input type="text" placeholder="Numeraci&oacute;n de la persona" class="form-control" name="id" required value="<?php echo ( isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : '' ); ?>" />
            </div>
            <div class="form-group">
              <label>Historia Medica | Operacion</label>
              <textarea placeholder="Historia Medica  y Operaciones" required class="form-control" name="historia_medica"><?php echo $Obtener[ 'historia_medica' ]; ?></textarea>
            </div>
            <div class="form-group">
              <label>Precauciones</label>
              <textarea placeholder="Precauciones" required class="form-control" name="precauciones"><?php echo $Obtener[ 'precauciones' ]; ?></textarea>
            </div>
            <div class="form-group">
              <label>Medicamentos</label>
              <input placeholder="Medicamentos que toma" type="text" class="form-control" name="medicamento" required value="<?php echo $Obtener[ 'medicamento' ]; ?>" />
            </div>

            <div class="form-group">
              <label>Lugar del Dolor</label>
              <input placeholder="Lugar donde presenta el dolor" type="text" class="form-control" name="lugar_dolor" required value="<?php echo $Obtener[ 'lugar_dolor' ]; ?>" />
            </div>
            <div class="form-group">
              <label>Tipo de Dolor</label>
              <input placeholder="Sordo, Calambre, Lanciante, Punzante, Otro" type="text" class="form-control" name="tipo_dolor" required value="<?php echo $Obtener[ 'tipo_dolor' ]; ?>" />
            </div>
            <div class="form-group">
              <label>Intensidad del Dolor</label>
              <input placeholder="1 a 10" type="number" class="form-control" name="intensidad_dolor " required value="<?php echo $Obtener[ 'intensidad_dolor' ]; ?>" />
            </div>
            <div class="form-group">
              <label>Paralisis</label>
              <input placeholder="Tipo de la paralisis" type="text" class="form-control" name="tipo_paralisis" required value="<?php echo $Obtener[ 'tipo_paralisis' ]; ?>" />
            </div>
            <div class="form-group">
              <label>Tono Muscular</label>
              <input placeholder="Normal, Hipertonico, Hipotonico, Rigidez, Espastico, Otro" required class="form-control" name="tono_muscular" value="<?php echo $Obtener[ 'tono_muscular' ]?>" />
            </div>
            <div class="form-group">
              <label>Musculo</label>
              <textarea placeholder="Musculo" required class="form-control" name="musculo"><?php echo $Obtener[ 'musculo' ]; ?></textarea>
            </div>

            <div class="form-group">
              <label>Comentario Radiografico</label>
              <textarea placeholder="Comentario" required class="form-control" name="comentario_radiografico"><?php echo $Obtener[ 'comentario_radiografico' ]; ?></textarea>
            </div>

            <div class="form-group">
              <label>Postura</label>
              <input placeholder="Acostado, Sentado, Parado" name="postura" class="form-control" value="<?php echo $Obtener[ 'postura' ]; ?>">
            </div>
            <div class="form-group">
              <h1><label>Limitaciones de AVD</label></h1>
            </div>
            <div class="form-group">
              <label>Descripcion de AVD y tipo de trabajo</label>
              <textarea placeholder="Descripcion de AVD y tipo de trabajo" name="limitaciones_ADV" class="form-control"><?php echo $Obtener[ 'limitaciones_ADV' ]; ?></textarea>
            </div>
            <div class="form-group">
              <h1><label>Prueba Especial</label></h1>
            </div>
              <div class="form-group">
                <label>Descripcion de la prueba Especial</label>
                <textarea placeholder="Cuello:Comprecion Cervical, Arteria Vertebral, Eden, Aren, Otro...ETC" name="prueba_especial" class="form-control"><?php echo $Obtener[ 'prueba_especial' ]; ?></textarea>
              </div>
            <div class="form-group">
              <h4><label>Diagnostico y comentarios</label></h4>
            </div>
            <div class="form-group">
              <label>Diagnostico</label>
              <textarea placeholder="Comentario" name="diagnostico_clinico" class="form-control"><?php echo $Obtener[ 'diagnostico_clinico' ]; ?></textarea>
            </div>
            <div class="form-group">
              <label>Comentario Adicional</label>
              <textarea placeholder="Comentario" name="comentario" class="form-control"><?php echo $Obtener[ 'comentario' ]; ?></textarea>
            </div>


            <div class="form-group">
              <button class="btn btn-primary">Procesar</button>
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