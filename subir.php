

<div id="tabla-archivos">
<div class="container">
  <div class="row">
    <h4>Agregar Nueva Descarga</h4>
    <hr style="margin-top:5px;margin-bottom: 5px;">
    <div class="content"> </div>
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Cargar Ficheros</h3>
      </div>
      <div class="panel-body">
        <div class="col-lg-6">
          <form method="POST" action="subir-arch.php" enctype="multipart/form-data">
<div class="form-group">
              <label class="btn btn-primary" for="my-file-selector">
                <input required="" type="file" name="file" id="exampleInputFile">
              </label>
              
</div>
          <button class="btn btn-primary" type="submit">Cargar Fichero</button>
          </form>
        </div>
        <div class="col-lg-6"> </div>
      </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Descargas Disponibles</h3>
      </div>
      <div class="panel-body">
   
<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th width="7%">num</th>
      <th width="70%">Nombre del Archivo</th>
      <th width="13%">Descargar</th>
      <th width="10%">Eliminar</th>
    </tr>
  </thead>
  <tbody>
<?php
$archivos = scandir("subidas");
$num=0;
for ($i=2; $i<count($archivos); $i++)
{$num++;
?>
<p>  
 </p>
         
    <tr>
      <th scope="row"><?php echo $num;?></th>
      <td><?php echo $archivos[$i]; ?></td>
      <td><a title="Descargar Archivo" href="subidas/
      <?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> 
      <span aria-hidden="true">Descargar</span> </a></td>
      <td><a title="Eliminar Archivo" href="Eliminar.php?name=subidas/
      <?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('SEGURO QUE QUIERES ELIMINAR!!');">
       <span aria-hidden="true">Eliminar</span> </a></td>
    </tr>
 <?php }?> 

  </tbody>
</table>
</div>
</div>
</div>
