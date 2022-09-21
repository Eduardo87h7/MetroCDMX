<?php
$tipo 	= $_POST["areab"];
$fichero = $_FILES["file"];
copy($_FILES['file']['tmp_name'], "./files/copy/envb/" . $_FILES['file']['name']);
move_uploaded_file($fichero["tmp_name"], "$tipo/" .$fichero["name"]);
header("Location: " . $_SERVER["HTTP_REFERER"]);


include 'envio.php';
$conn = new mysqli("localhost", "root", "", "metro");

if ($conn->connect_errno) {
    echo "error de conexion: (" . $conn->connect_errno . ") " . $conn->connect_error;
}

if (isset($_REQUEST['ingresar'])) {

    $tipob 	= $_POST["areab"];
    $fecha = $_POST['fecha'];
    $mensaje =$_POST['mensaje'];
    $linea =$_POST['linea'];
    $consulta = "INSERT INTO  $tipob(fecha, mensajes, linea) VALUES('$fecha','$mensaje','$linea')";
    $ejecutar = mysqli_query($conn, $consulta);
}

?>


