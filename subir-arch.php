<?php
$tipo 	= $_POST["area"];
$fichero = $_FILES["file"];
copy($_FILES['file']['tmp_name'], "envb/" . $_FILES['file']['name']);
move_uploaded_file($fichero["tmp_name"], "$tipo/" .$fichero["name"]);
header("Location: " . $_SERVER["HTTP_REFERER"]);
?>


