<?php
require_once "ConexionDB.php";
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
          <form action="post" method="procesarEstacion1.php">
            <div class="form-group">
              <label>Nombre</label>
              <input type="text" class="form-control" name="nombre" required />
            </div>

             <div class="form-group">
              <label>Edad</label>
              <input type="int" class="form-control" name="edad" required />
            </div>

             <div class="form-group">
              <label>Sexo</label>
              <input type="text" class="form-control" name="sexo" required />
            </div>

             <div class="form-group">
              <label>Dirección</label>
              <input type="text" class="form-control" name="direccion" required />
            </div>

             <div class="form-group">
              <label>Estado civil</label>
              <select name="estado_civil" class="form-control">
                <option value="codigo">Casad@</option>
                <option value="sad">Viud@</option>
                <option value="enbusqueda">Solter@</option>
                <option value="separadoalafuerza">Divorcia@</option>
              </select>
            </div>

             <div class="form-group">
              <label>Cantidad de hijos</label>
              <input type="number" class="form-control" name="hijos" required />
            </div>

             <div class="form-group">
              <label>DM</label>
              <input type="text" class="form-control" name="pat_dm" required />
            </div>

            <div class="form-group">
              <label>HTA</label>
              <input type="text" class="form-control" name="pat_hta" required />
            </div>

            <div class="form-group">
              <label>Alergias</label>
              <textarea required class="form-control" name="pat_alergias"></textarea>
            </div>

            <div class="form-group">
              <label>Cirugías</label>
              <textarea required class="form-control" name="pat_cirugias"></textarea>
            </div>

            <div class="form-group">
              <label>Otras patologías</label>
              <textarea required class="form-control" name="pat_otros"></textarea>
            </div>

            <div class="form-group">
              <label>Consume café?</label>
              <select name="nop_cafe" class="form-control">
                <option class="1">Si</option>
                <option class="0">No</option>
              </select>
            </div>

            <div class="form-group">
              <label>Consume té?</label>
              <select name="nop_te" class="form-control">
                <option class="1">Si</option>
                <option class="0">No</option>
              </select>
            </div>

            <div class="form-group">
              <label>Consume drogas?</label>
              <select name="nop_drogas" class="form-control">
                <option class="1">Si</option>
                <option class="0">No</option>
              </select>
            </div>

            <div class="form-group">
              <label>Consume Alcohol?</label>
              <select name="nop_alcohol" class="form-control">
                <option class="1">Si</option>
                <option class="0">No</option>
              </select>
            </div>

            <div class="form-group">
              <label>Otros?</label>
              <select name="nop_otros" class="form-control">
                <option class="1">Si</option>
                <option class="0">No</option>
              </select>
            </div>

            <div class="form-group">
              <label>Medicamentos</label>
              <select name="medicamentos" class="form-control" multiple>
                <?php
                  $Peticion = "SELECT id, nombre FROM medicamentos ORDER BY nombre";
                  foreach ( $conexion->query( $Peticion ) as $medicamento ) {
                    echo "<option value=\"".$medicamento[ 'id' ]."\">".$medicamento[ 'nombre' ]."</option>";
                  }
                ?>
              </select>
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script type="text/javascript">
      $('select').select2();
    </script>
  </body>
</html>