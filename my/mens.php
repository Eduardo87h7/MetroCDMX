<?php

include("conexion.php");

if (isset($_POST['men'])) {
	if (strlen($_POST['textoenvio']) >= 1) {
		$mensaje = trim($_POST['textoenvio']);
		
		$consulta = "INSERT INTO mensaje(mensaje, fecha ) VALUES ('$mensaje','fecha')";
		$resultado = mysqli_query($conn, $consulta);
		if ($resultado) {
?>
			<h3>correxto</h3>
		<?php
		} else {
		?>
			<h3>Ocurrio un error</h3>
		<?php
		}
	} else {
		?>
		<h3>no hay campos</h3>
<?php
	}
}


?>