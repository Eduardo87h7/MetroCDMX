<?php

include("conexion.php");

if (isset($_POST['register'])) {
	if (strlen($_POST['name']) >= 1 && strlen($_POST['contraseña']) >= 1) {
		$usuario = trim($_POST['name']);
		$contraseña = trim($_POST['contraseña']);
		$tipo = trim($_POST['tipo']);
		$consulta = "INSERT INTO usuarios(usuario, contraseña, tipo ) VALUES ('$usuario','$contraseña','$tipo')";
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