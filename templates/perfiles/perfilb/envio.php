<div class="container" id="enviar">
  <div class="container mt-3">
    <div class="card shadow-lg  rounded">
      <div class="card-header">
        <a href="/MetroCDMX/perfilb.php" class="btn btn-warning">regresar</a> Envio de Informacion
      </div>
      <div class="card-body">
        <h5 class="card-title">Selecciona y Envia</h5>
        <hr>

        <form method="POST" action="subir-arch.php" action="subir" enctype="multipart/form-data">
          <div class="form-group">
            <label>
              <input required="" type="file" name="file">
            </label>
          </div>
          <hr>
          <?php
          date_default_timezone_set('America/Mexico_City');
          $fecha_actual = date("d-m-y h:i:s");
          ?>
          <select name="areab" class="form-select" aria-label="Default select example">
            <option value="0" style="display:none;"><label>Seleccionar</label></option>
            <option value="../files/docs/linea3/">Linea 3</option>
            <option value="../files/docs/lineab/">Linea B</option>
            <option value="../files/docs/linea6/">Linea 6</option>
            <option value="../files/docs/linea7/">Linea 7</option>
          </select>
          <br>
          <div class="form-group">
            <label>Escribe un comentario</label>
            <textarea class="form-control" name="mensaje" rows="3"></textarea>
          </div>
          <input value="LINEA-B" name="linea" readonly>
      <input type="datetime" name="fecha" value="<?= $fecha_actual ?>" readonly>
      </div>
      <button class="btn btn-primary" type="submit" name="ingresar">Cargar Fichero</button>
      <br>
      

      </form>