<?php
$tipo 	= $_POST["area"];
$fichero = $_FILES["file"];
copy($_FILES['file']['tmp_name'], "env7/" . $_FILES['file']['name']);
move_uploaded_file($fichero["tmp_name"], "$tipo/" .$fichero["name"]);
header("Location: " . $_SERVER["HTTP_REFERER"]);


include 'envio3.php';
$conn = new mysqli("localhost", "root", "", "metro");

if ($conn->connect_errno) {
    echo "error de conexion: (" . $conn->connect_errno . ") " . $conn->connect_error;
}

if (isset($_REQUEST['ingresar'])) {


    $fecha = $_POST['fecha'];
    $mensaje =$_POST['mensaje'];
    $linea =$_POST['linea'];
    $consulta = "INSERT INTO mensaje(fecha, mensajes, linea) VALUES('$fecha','$mensaje','$linea')";
    $ejecutar = mysqli_query($conn, $consulta);
    if ($ejecutar) {
        echo '<script> alert("correcto")</script>';
    }
}

?>


