<?php
if(!file_exists("archivos")){
    if(!mkdir("C:/Users/Eduardo/OneDrive - INSTITUTO TECNOLOGICO DE GUSTAVO A MADERO/Escritorio/documentos/",0777)){
        echo "error del directorio";
        exit();

    }
}

chmod("archivos",0777);

if(move_uploaded_file($_FILES['fichero']['tmp_name'],"C:/Users/Eduardo/OneDrive - INSTITUTO TECNOLOGICO DE GUSTAVO A MADERO/Escritorio/documentos/".$_FILES['fichero']['name'])){
    echo "archivi subido";
}else {
    echo "erro ";
    }


?>