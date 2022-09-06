<?php require('./layout/header2.php') ?>
<?php require('./layout/exit.php') ?>
<?php require('./layout/agregarUsuarios.php') ?>
<?php require('./layout/adminav.php') ?>

<?php
include("delete.php");
?>


<?php require('./perfilb/vermensaje.php') ?>



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

		<button onclick="vista3()" class="btn btn-success btn-block">Linea 3</button>
		<button onclick="vista6()" class="btn btn-success  btn-block">Linea 6</button>
		<button onclick="vista7()" class="btn btn-success  btn-block">Linea 7</button>
		<button onclick="vistab()" class="btn btn-success  btn-block">Linea B</button>
		<br>
		<br>
	</div>
	<div id="linea31">
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
				$docs = scandir("linea3/");
				$num = 0;
				$i = 2;
				for ($i; $i < count($docs); $i++) {
					$num++;
				?>
					<p>
					</p>
					<tr>
						<th><?php echo $num; ?></th>
						<td>Linea 3</td>
						<td><?php echo $docs[$i]; ?></td>
						<td><a title="Descargar" href="linea3/<?php echo $docs[$i]; ?>" download="<?php echo $docs[$i]; ?>" style="color: blue; font-size:18px;"> <span aria-hidden="true">Descargar</span> </a></td>
						<td><a title="Eliminar" href="Eliminar.php?name=linea3/<?php echo $docs[$i]; ?>" style="color: red; font-size:18px;" onclick="return alert('El archivo se eliminara permanentemente');"> <span aria-hidden="true">Eliminar</span> </a></td>
					</tr>
				<?php }
				?>
			</tbody>
		</table>
	</div>
	<div id="linea61">
		<input class="form-control" id="myInputl6" type="text" placeholder="BUSCAR">
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
			<tbody id="myTablel6">
				<?php
				$docs = scandir("linea6/");
				$num = 0;
				$i = 2;
				for ($i; $i < count($docs); $i++) {
					$num++;
				?>
					<p>
					</p>
					<tr>
						<th><?php echo $num; ?></th>
						<td>Linea 6</td>
						<td><?php echo $docs[$i]; ?></td>
						<td><a title="Descargar" href="linea6/<?php echo $docs[$i]; ?>" download="<?php echo $docs[$i]; ?>" style="color: blue; font-size:18px;"> <span aria-hidden="true">Descargar</span> </a></td>
						<td><a title="Eliminar" href="Eliminar.php?name=linea6/<?php echo $docs[$i]; ?>" style="color: red; font-size:18px;" onclick="return alert('El archivo se eliminara permanentemente');"> <span aria-hidden="true">Eliminar</span> </a></td>
					</tr>
				<?php }
				?>
			</tbody>
		</table>
	</div>
	<div id="linea71">
		<input class="form-control" id="myInputl7" type="text" placeholder="BUSCAR">
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
			<tbody id="myTablel7">
				<?php
				$docs = scandir("linea7/");
				$num = 0;
				$i = 2;
				for ($i; $i < count($docs); $i++) {
					$num++;
				?>
					<p>
					</p>
					<tr>
						<th><?php echo $num; ?></th>
						<td>Linea 7</td>
						<td><?php echo $docs[$i]; ?></td>
						<td><a title="Descargar" href="linea7/<?php echo $docs[$i]; ?>" download="<?php echo $docs[$i]; ?>" style="color: blue; font-size:18px;"> <span aria-hidden="true">Descargar</span> </a></td>
						<td><a title="Eliminar" href="Eliminar.php?name=linea7/<?php echo $docs[$i]; ?>" style="color: red; font-size:18px;" onclick="return alert('El archivo se eliminara permanentemente');"> <span aria-hidden="true">Eliminar</span> </a></td>
					</tr>
				<?php }
				?>
			</tbody>
		</table>
	</div>
	<div id="lineab1">
		<input class="form-control" id="myInputlb" type="text" placeholder="BUSCAR">
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
			<tbody id="myTablelb">
				<?php
				$docs = scandir("lineab/");
				$num = 0;
				$i = 2;
				for ($i; $i < count($docs); $i++) {
					$num++;
				?>
					<p>
					</p>
					<tr>
						<th><?php echo $num; ?></th>
						<td>Linea B</td>
						<td><?php echo $docs[$i]; ?></td>
						<td><a title="Descargar" href="lineab/<?php echo $docs[$i]; ?>" download="<?php echo $docs[$i]; ?>" style="color: blue; font-size:18px;"> <span aria-hidden="true">Descargar</span> </a></td>
						<td><a title="Eliminar" href="Eliminar.php?name=subidas/<?php echo $docs[$i]; ?>" style="color: red; font-size:18px;" onclick="return alert('El archivo se eliminara permanentemente');"> <span aria-hidden="true">Eliminar</span> </a></td>
					</tr>
				<?php }
				?>
			</tbody>
		</table>
	</div>
</div>

<script>
	document.getElementById("tabla-usuarios").style.display = "block";
	document.getElementById("tabla-archivos").style.display = "none";
	document.getElementById("lineab1").style.display = "block";
	document.getElementById("linea31").style.display = "none";
	document.getElementById("linea61").style.display = "none";
	document.getElementById("linea71").style.display = "none";
	document.getElementById("vermensaje").style.display = "none";


	function vermensajes() {
		document.getElementById("vermensaje").style.display = "block";
		document.getElementById("tabla-usuarios").style.display = "none";
		document.getElementById("tabla-archivos").style.display = "none";

	}
	function verusuarios() {
		document.getElementById("vermensaje").style.display = "none";
		document.getElementById("tabla-usuarios").style.display = "block";
		document.getElementById("tabla-archivos").style.display = "none";

	}
	function verarchivos() {
		document.getElementById("vermensaje").style.display = "none";
		document.getElementById("tabla-usuarios").style.display = "none";
		document.getElementById("tabla-archivos").style.display = "block";

	}
	

	function vistab() {
		document.getElementById("lineab1").style.display = "block";
		document.getElementById("linea31").style.display = "none";
		document.getElementById("linea61").style.display = "none";
		document.getElementById("linea71").style.display = "none";
	}

	function vista3() {
		document.getElementById("lineab1").style.display = "none";
		document.getElementById("linea31").style.display = "block";
		document.getElementById("linea61").style.display = "none";
		document.getElementById("linea71").style.display = "none";
	}

	function vista6() {
		document.getElementById("lineab1").style.display = "none";
		document.getElementById("linea31").style.display = "none";
		document.getElementById("linea61").style.display = "block";
		document.getElementById("linea71").style.display = "none";
	}

	function vista7() {
		document.getElementById("lineab1").style.display = "none";
		document.getElementById("linea31").style.display = "none";
		document.getElementById("linea61").style.display = "none";
		document.getElementById("linea71").style.display = "block";
	}

	$(document).ready(function() {
		$("#myInput0").on("keyup", function() {
			let value = $(this).val().toLowerCase();
			$("#myTable0 tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
			});
		});
	});
	$(document).ready(function() {
		$("#myInputl6").on("keyup", function() {
			let value = $(this).val().toLowerCase();
			$("#myTablel6 tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
			});
		});
	});
	$(document).ready(function() {
		$("#myInputl7").on("keyup", function() {
			let value = $(this).val().toLowerCase();
			$("#myTablel7 tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
			});
		});
	});
	$(document).ready(function() {
		$("#myInputlb").on("keyup", function() {
			let value = $(this).val().toLowerCase();
			$("#myTablelb tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
			});
		});
	});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/MetroCDMX/js/admin.js"></script>
</body>