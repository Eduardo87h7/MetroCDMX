<div class="container" id="enviar" >
  <div class="container mt-3">
    <div class="card shadow-lg  rounded">
      <div class="card-header">
        <a href="/MetroCDMX/home.php" class="btn btn-primary">regresar</a> Envio de Informacion
      </div>
      <div class="card-body">
        <h5 class="card-title">Selecciona y Envia</h5>
        <hr>
        
        <form method="POST" action="subir-arch.php" action="subir" enctype="multipart/form-data">
          <div class="form-group">
            <label>
              <input required="" type="file" name="file" >
            </label>
          </div>
          <hr>
          <?php
date_default_timezone_set('America/Mexico_City');
$fecha_actual=date("d-m-y h:i:s");
?>

<input value="LINEA-B" name="linea" > <br>
<input type="datetime" name="fecha" value="<?=$fecha_actual?>">

          <select name="area" class="form-select" aria-label="Default select example">
            <option value="0" style="display:none;"><label>Seleccionar</label></option>
            <option value="linea3">Linea 3</option>
            <option value="lineab">Linea B</option>
            <option value="linea6">Linea 6</option>
            <option value="linea7">Linea 7</option>
          </select>
          <br>
          <div class="form-group">
            <label>Escribe un comentario</label>
            <textarea class="form-control" name="mensaje" rows="3"></textarea>
          </div>
      </div>
      <button class="btn btn-primary" type="submit" name="ingresar" >Cargar Fichero</button>
      </form>
      </form>
