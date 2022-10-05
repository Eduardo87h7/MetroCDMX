<?php
$tipo 	= $_POST["area6"];
$fichero = $_FILES["file"];
copy($_FILES['file']['tmp_name'], "../files/copy/env6/" . $_FILES['file']['name']);
move_uploaded_file($fichero["tmp_name"], "$tipo" .$fichero["name"]);
header("Location: " . $_SERVER["HTTP_REFERER"]);


include 'envio6.php';
$conn = new mysqli("localhost", "root", "", "metro");

if ($conn->connect_errno) {
    echo "error de conexion: (" . $conn->connect_errno . ") " . $conn->connect_error;
}

if (isset($_REQUEST['ingresar'])) {
    if ($tipo=="../files/docs/linea3/") {
        $tipo1= "linea3";
        $b = $a;
      }else{if ($tipo=="../files/docs/lineab/") {
        $tipo1= "lineab";
        $b = $a;
      }else{if ($tipo=="../files/docs/linea6/") {
        $tipo1= "linea6";
        $b = $a;
      }else{if ($tipo=="../files/docs/linea7/") {
        $tipo1= "linea7";
        $b = $a;
      }
      }
      }
      }
    $tipo1;
    $fecha = $_POST['fecha'];
    $mensaje =$_POST['mensaje'];
    $linea =$_POST['linea'];
    $consulta = "INSERT INTO $tipo1 (fecha, mensajes, linea) VALUES('$fecha','$mensaje','$linea')";
    $ejecutar = mysqli_query($conn, $consulta);
    if ($ejecutar) {
        echo '<script> alert("correcto")</script>';
    }
}

?>


