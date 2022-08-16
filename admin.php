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
		$sql = "select * from usuarios";
		$result = db_query($sql);
		while ($row = mysqli_fetch_object($result)) {
		?>
			<tr>
				<td><?php echo $row->usuario; ?></td>
				<td><?php echo $row->contraseña; ?></td>
				<td><?php echo $row->tipo; ?></td>

				<td>
					<a class="btn btn-danger" href="borrar.php?id=
                         <?php echo $row->id; ?>">
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
		<table class="table table-responsive-lg">
			<thead>
				<tr>
					<th>num</th>
					<th>Nombre del Archivo</th>
					<th>Descargar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody id="myTable0">
				<?php
				$archivos = scandir("subidas/");
				$num = 0;
				for ($i = 2; $i < count($archivos); $i++) {
					$num++;
				?>
					<p>
					</p>

					<tr>
						<th scope="row"><?php echo $num; ?></th>
						<td><?php echo $archivos[$i]; ?></td>
						<td><a title="Descargar Archivo" href="subidas/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> <span aria-hidden="true">descargar</span> </a></td>
						<td><a title="Eliminar Archivo" href="Eliminar.php?name=subidas/<?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('El archivo se eliminara permanentemente');"> <span aria-hidden="true">eliminar</span> </a></td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
</div>

<script>
        $(document).ready(function() {
            $("#myInput0").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable0 tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/MetroCDMX/js/admin.js"></script>
</body>