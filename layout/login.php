
<?php

include('conexion.php');

$usuario 	= $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];
$tipo 	= $_POST["tipo"];
$queryusuario = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario ='$usuario' and contraseña = '$pass' and tipo = '$tipo'");
$resp 		= mysqli_num_rows($queryusuario);

if ($resp == 1) {
	if ($tipo == "local") {
		header("Location: ..home.php");
	} else if ($tipo == "admin") {
		header("Location: ../my/admin.php");
	}else if ($tipo == "lineab") {
		header("Location: ../my/perfilb.php");
	}else if ($tipo == "linea3") {
		header("Location: ../my/perfil3.php");
	}else if ($tipo == "linea6") {
		header("Location: ../my/perfil6.php");
	}else if ($tipo == "linea7") {
		header("Location: ../my/perfil7.php");
	}
} else {
	echo "<script> alert('Esta cuenta no existe!!');window.location= '/MetroCDMX/' </script>";
}


?>
