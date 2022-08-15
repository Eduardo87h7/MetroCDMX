

<div class="container" id="enviar">
    
<div class="container mt-3">

<div class="card shadow-lg  rounded">
  <div class="card-header">
    <a href="/MetroCDMX/home.php" class="btn btn-primary">regresar</a> Envio de Informacion
  </div>
  <div class="card-body">
    <h5 class="card-title">Selecciona y Envia</h5>
    
  
      <hr>
     <form method="POST" action="subir-arch.php" enctype="multipart/form-data">
<div class="form-group">
              <label  for="my-file-selector">
                <input class="" required="" type="file" name="file" id="exampleInputFile">
              </label>
              
</div>
<br>

<hr>
        <select name="area" class="form-select" aria-label="Default select example">
                                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                                    <option value="linea3">Linea 3</option>
                                    <option value="lineaB">Linea B</option>
                                    <option value="linea6">Linea 6</option>
                                    <option value="linea7">Linea 7</option>
                                    </select>
                                    <br>
                                    <div class="form-group">
        <label for="exampleFormControlTextarea1">Escribe un comentario</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>

    <button class="btn btn-primary" type="submit">Cargar Fichero</button>
          <br>
          </form>
     

   
  