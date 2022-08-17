<div class="modal1 modal-xl">

  <!-- The Modal -->
  <div class="modal  fade  bd-example-modal-xl" id="myModal5">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Documentos de la linea B</h4>
          <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container" id="tabla7">
            <input class="form-control" id="myInput7" type="text" placeholder="BUSCAR">
            <br>
            <table class="table">
              <thead>
                <tr>
                  <th>num</th>
                  <th>Nombre del Archivo</th>
                  <th>Descargar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody id="myTable7">
                <?php
                $docs = scandir("subidas");
                $num = 0;
                for ($i = 2; $i < count($docs); $i++) {
                  $num++;
                ?>
                  <p>
                  </p>
                  <tr>
                    <th scope="row"><?php echo $num; ?></th>
                    <td><?php echo $docs[$i]; ?></td>
                    <td><a title="Descargar" href="subidas/<?php echo $docs[$i]; ?>" download="<?php echo $docs[$i]; ?>" style="color: blue; font-size:18px;"> <span aria-hidden="true">descargar</span> </a></td>
                    <td><a title="Eliminar" href="Eliminar.php?name=subidas/<?php echo $docs[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('El archivo se eliminara permanentemente');"> <span aria-hidden="true">eliminar</span> </a></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $("#myInput7").on("keyup", function() {
      let value = $(this).val().toLowerCase();
      $("#myTable7 tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>