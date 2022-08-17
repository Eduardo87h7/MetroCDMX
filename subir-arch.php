<?php
$tipo 	= $_POST["area"];
$fichero = $_FILES["file"];
move_uploaded_file($fichero["tmp_name"], "$tipo/" .$fichero["name"]);
header("Location: " . $_SERVER["HTTP_REFERER"]);
?>