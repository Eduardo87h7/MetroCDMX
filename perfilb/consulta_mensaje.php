<?php
$inc = include("conexion.php");
if ($inc) {
	$consulta = "SELECT * FROM mensaje";
	$resultado = mysqli_query($conex, $consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
			$id = $row['id'];
			$fecha = $row['fecha'];
			$mensajes = $row['mensajes'];
			$linea = $row['linea'];
?>
			<div>			
				<div class="toast" data-autohide="false">
					<div class="toast-header">
						<strong class="mr-auto text-primary"><?php echo $linea ?></strong>
						<small class="text-muted"><?php echo $fecha ?></small>
						<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
					</div>
					<div class="toast-body">
						<?php echo $mensajes ?>
					</div>
				</div>
			</div>
<?php
		}
	}
}
?>