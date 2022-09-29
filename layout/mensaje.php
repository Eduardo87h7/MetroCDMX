<input class="form-control" id="myInput4" type="text" placeholder="BUSCAR">
<br>
<table class="table table-bordered table-striped table-hover">
    </thead>
    
    <tbody id="myTable4">
    <td>Mensajes de la linea 3</td>
        <tr>
            
            <td><?php require('./templates/perfiles/perfil3/vermensaje.php') ?></td>
        </tr>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $("#myInput4").on("keyup", function() {
            let value = $(this).val().toLowerCase();
            $("#myTable4 tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>