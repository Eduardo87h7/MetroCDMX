<?php
if (!file_exists("archivos")) {
    if (!mkdir("archivos", 0777)) {
        echo "Error al crear el directorio";
        exit();
    }
}
chmod("archivos", 0777);
if (move_uploaded_file($_FILES['fichero']['tmp_name'], "C:/Users/Usuario/Desktop/archivos/" . $_FILES['fichero']['name'])) {
    echo "Archivo subido con exito";
} else {
    echo "Error al subir el archivo";
}
?>