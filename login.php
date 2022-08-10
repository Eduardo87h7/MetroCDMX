
<?php

 include('conexion.php');

$usuario 	= $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];
$tipo 	= $_POST["tipo"];



$queryusuario = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario ='$usuario' and contraseña = '$pass' and tipo = '$tipo'");
$resp 		= mysqli_num_rows($queryusuario);  
	
if ($resp == 1 )  
	{ 
		if($tipo=="local")
			{	
				header("Location: home.php");
			}
		else if ($tipo=="admin")
			{
				header("Location: admin.php");
			}
	}
else
	{
	echo "<script> alert('Esta cuenta no existe!!');window.location= 'index.php' </script>";
	}


?>
