<?php require('./perfilb/headerb.php') ?>
<?php require('./perfilb/tablb.php') ?>
<?php require('./layout/exit.php') ?>
<?php require('./perfilb/nav.php') ?>
<script>
    document.getElementById("principal").style.display = "block";
    document.getElementById("mis-doc").style.display = "none";
    document.getElementById("enviar").style.display = "none";

    function mis_document() {
        document.getElementById("principal").style.display = "none";
        document.getElementById("mis-doc").style.display = "block";
        document.getElementById("enviar").style.display = "none";
    }

    function doc_enviados() {
        document.getElementById("principal").style.display = "block";
        document.getElementById("mis-doc").style.display = "none";
        document.getElementById("enviar").style.display = "none";
    }

    function enviar() {
        document.getElementById("principal").style.display = "none";
        document.getElementById("mis-doc").style.display = "none";
        document.getElementById("enviar").style.display = "block";
    }
</script>