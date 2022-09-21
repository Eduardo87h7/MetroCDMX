<?php
$tipo 	= $_POST["area3"];
$fichero = $_FILES["file"];
copy($_FILES['file']['tmp_name'], "./files/copy/env3/" . $_FILES['file']['name']);
move_uploaded_file($fichero["tmp_name"], "$tipo/" .$fichero["name"]);
header("Location: " . $_SERVER["HTTP_REFERER"]);


include 'envio3.php';
$conn = new mysqli("localhost", "root", "", "metro");

if ($conn->connect_errno) {
    echo "error de conexion: (" . $conn->connect_errno . ") " . $conn->connect_error;
}

if (isset($_REQUEST['ingresar'])) {

    $tipo 	= $_POST["area3"];
    $fecha = $_POST['fecha'];
    $mensaje =$_POST['mensaje'];
    $linea =$_POST['linea'];
    $consulta = "INSERT INTO $tipo (fecha, mensajes, linea) VALUES('$fecha','$mensaje','$linea')";
    $ejecutar = mysqli_query($conn, $consulta);
    if ($ejecutar) {
        echo '<script> alert("correcto")</script>';
    }
}

?>


