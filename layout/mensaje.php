
<input class="form-control" id="myInput4" type="text" placeholder="BUSCAR">
<br>
<div class="col-md-12" id="myTable4">


    <div class="card">
        <div class="card-header">
            LINEA 3
        </div>
        <div class="card-body">
            <h5 class="card-title">Resultado de mensajes linea 3</h5>
            <p class="card-text"><?php require('../templates/perfiles/perfil3/vermensaje.php') ?></p>     
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-header">
            LINEA B
        </div>
        <div class="card-body">
            <h5 class="card-title">Resultado de mensajes linea B</h5>
            <p class="card-text"><?php require('../templates/perfiles/perfilb/vermensaje.php') ?></p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            LINEA 6
        </div>
        <div class="card-body">
            <h5 class="card-title">Resultado de mensajes linea 6 </h5>
            <p class="card-text"><?php require('../templates/perfiles/perfil6/vermensaje.php') ?></p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            LINEA 7
        </div>
        <div class="card-body">
            <h5 class="card-title">Resultado de mensajes linea 7 </h5>
            <p class="card-text"><?php require('../templates/perfiles/perfil7/vermensaje.php') ?></p>
        </div>
    </div>

</div>



<script>
    $(document).ready(function() {
        $("#myInput4").on("keyup", function() {
            let value = $(this).val().toLowerCase();
            $("#myTable4 div").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>