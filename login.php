
<?php

include('conexion.php');

$usuario 	= $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];
$tipo 	= $_POST["tipo"];
$queryusuario = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario ='$usuario' and contraseña = '$pass' and tipo = '$tipo'");
$resp 		= mysqli_num_rows($queryusuario);

if ($resp == 1) {
	if ($tipo == "local") {
		header("Location: home.php");
	} else if ($tipo == "admin") {
		header("Location: admin.php");
	}else if ($tipo == "lineab") {
		header("Location: perfilb.php");
	}else if ($tipo == "linea3") {
		header("Location: perfil3.php");
	}else if ($tipo == "linea6") {
		header("Location: perfil6.php");
	}else if ($tipo == "linea7") {
		header("Location: perfil7.php");
	}
} else {
	echo "<script> alert('Esta cuenta no existe!!');window.location= 'index.php' </script>";
}


?>
