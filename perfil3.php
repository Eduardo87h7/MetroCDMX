<?php require('./templates/perfiles/perfil3/headerb.php') ?>
<?php require('./templates/perfiles/perfil3/tablb.php') ?>

<?php require('./layout/exit.php') ?>
<?php require('./templates/perfiles/perfil3/nav.php') ?>
<script>
    document.getElementById("principal").style.display = "block";
    document.getElementById("mis-doc").style.display = "none";
    document.getElementById("enviar").style.display = "none";
    document.getElementById("vermensaje").style.display = "none";

    function vermensaje() {
        document.getElementById("principal").style.display = "none";
        document.getElementById("mis-doc").style.display = "none";
        document.getElementById("enviar").style.display = "none";
        document.getElementById("vermensaje").style.display = "block";
    }
    
    function mis_document() {
        document.getElementById("principal").style.display = "none";
        document.getElementById("mis-doc").style.display = "block";
        document.getElementById("enviar").style.display = "none";
        document.getElementById("vermensaje").style.display = "none";
    }

    function doc_enviados() {
        document.getElementById("principal").style.display = "block";
        document.getElementById("mis-doc").style.display = "none";
        document.getElementById("enviar").style.display = "none";
        document.getElementById("vermensaje").style.display = "none";
    }

    function enviar() {
        document.getElementById("principal").style.display = "none";
        document.getElementById("mis-doc").style.display = "none";
        document.getElementById("enviar").style.display = "block";
        document.getElementById("vermensaje").style.display = "none";
    }
 

    function em() {
      alert('Archivo subido correctamente');
      
    }
</script>