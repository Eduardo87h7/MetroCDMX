<?php require('./layout/header2.php') ?>
<?php require('./layout/exit.php') ?>
<?php require('./layout/agregarUsuarios.php') ?>
<?php require('./layout/adminav.php') ?>
<?php
	include("delete.php");
?>
<div id="tabla-usuarios"  >
<table  class="table table-bordered table-striped table-hover" >
	<tr>
		<th>Usuarios</th>
		<th>Contraseña</th>
		<th>Tipo</th>
		<th>Eliminar</th>
	</tr>
<?php 
	$sql = "select * from usuarios";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->usuario;?></td>
		<td><?php echo $row->contraseña;?></td>
		<td><?php echo $row->tipo;?></td>
			
		<td>
   <a class="btn btn-danger" href="borrar.php?id=
   <?php echo $row->id;?>">
   <i  aria-hidden="true">X</i>
   </a>
        </td>
	</tr>
	<?php } ?>
</table>
</table>
</div>



<div id="tabla-archivos">

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
      <td><a title="Descargar Archivo" href="subidas/<?php echo $archivos[$i]; ?>" download="
	  <?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> 
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
<script src="/MetroCDMX/js/admin.js"></script>
</body>
