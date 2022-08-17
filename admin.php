<?php require('./layout/header2.php') ?>
<?php require('./layout/exit.php') ?>
<?php require('./layout/agregarUsuarios.php') ?>
<?php require('./layout/adminav.php') ?>
<?php
include("delete.php");
?>

<div id="tabla-usuarios">
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>Usuarios</th>
			<th>Contraseña</th>
			<th>Tipo</th>
			<th>Eliminar</th>
		</tr>
		<?php
		$sql = "SELECT * from usuarios";
		$result = db_query($sql);
		while ($row = mysqli_fetch_object($result)) {
		?>
			<tr>
				<td><?php echo $row->usuario; ?></td>
				<td><?php echo $row->contraseña; ?></td>
				<td><?php echo $row->tipo; ?></td>
				<td>
					<a class="btn btn-danger" href="borrar.php?id=<?php echo $row->id; ?>">
						<i aria-hidden="true">X</i>
					</a>
				</td>
			</tr>
		<?php } ?>
	</table>

</div>




<div id="tabla-archivos">
	<div class="container" id="myTable0">
		<input class="form-control" id="myInput0" type="text" placeholder="BUSCAR">
		<br>
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Numero</th>
					<th>Linea</th>
					<th>Nombre del Archivo</th>
					<th>Descargar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody id="myTable0">
				<?php
				$docs = scandir("subidas/");
				$num = 0;
				$i=2;
				for ($i ; $i < count($docs); $i++) {
					$num++;
				?>
					<p>
					</p>
					<tr>					    
						<th><?php echo $num; ?></th>
						<td>Linea B</td>
						<td><?php echo $docs[$i]; ?></td>
						<td><a title="Descargar" href="subidas/<?php echo $docs[$i]; ?>" download="<?php echo $docs[$i]; ?>" style="color: blue; font-size:18px;"> <span aria-hidden="true">Descargar</span> </a></td>
						<td><a title="Eliminar" href="Eliminar.php?name=subidas/<?php echo $docs[$i]; ?>" style="color: red; font-size:18px;" onclick="return alert('El archivo se eliminara permanentemente');"> <span aria-hidden="true">Eliminar</span> </a></td>
					</tr>
				<?php } 
				?>
			</tbody>
		</table>
	</div>
</div>
<script>
        $(document).ready(function() {
            $("#myInput0").on("keyup", function() {
                let value = $(this).val().toLowerCase();
                $("#myTable0 tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/MetroCDMX/js/admin.js"></script>
</body>