<?php

if (move_uploaded_file($_FILES['file']['tmp_name'], "env3/" . $_FILES['file']['name'])) {
    echo "<script> alert('perfectro');window.location= 'perfilb.php' </script>";
} else {
    echo '<script language="javascript">alert("error");</script>';
}
?>