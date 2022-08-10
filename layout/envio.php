

<div class="container" id="enviar">
    
<div class="container mt-3">

<div class="card shadow-lg  rounded">
  <div class="card-header">
    <a href="/MetroCDMX/home.php" class="btn btn-primary">regresar</a> Envio de Informacion
  </div>
  <div class="card-body">
    <h5 class="card-title">Selecciona y Envia</h5>
    
      <div class="dropdown">
        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
          Seleccionar
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">LINEA1</a></li>
          <li><a class="dropdown-item" href="#">LINEA2</a></li>
          <li><a class="dropdown-item" href="#">LINEA3</a></li>
          <li><a class="dropdown-item" href="#">LINEAB</a></li>
          <li><a class="dropdown-item" href="#">LINEA6</a></li>
          <li><a class="dropdown-item" href="#">LINEA7</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">solo texto</a></li>
        </ul>
      </div>
      <hr>
      <form name="formulario" method="post" action="/send.php" enctype="multipart/form-data">
        <!-- ¡No olvides el enctype! -->
        <!-- Campo de selección de archivo -->
        <input type="file" name="adjunto" accept=".pdf,.jpg,.png" multiple />
      </form>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Escribe un comentario</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
  
    <a href="#" class="btn btn-primary">Enviar</a>
  