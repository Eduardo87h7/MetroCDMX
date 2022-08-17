<?php
$conn = new mysqli("localhost","root","","metro");
	
	if($conn->connect_errno)
	{
		echo "error de conexion: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>