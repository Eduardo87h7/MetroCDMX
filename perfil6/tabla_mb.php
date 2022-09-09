<div class="container" id="mis-doc">
  <div id="tabla-archivos">
    <div class="container" id="myTable11">
    </div>
    <div id="linea31">
      <input class="form-control" id="myInput11" type="text" placeholder="BUSCAR">
      <br>
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Numero</th>
            <th>Linea</th>
            <th>Nombre del Archivo</th>
            <th>Descargar</th>
            <th>Eliminar</th>
          </tr>
          
        </thead>
        <tbody id="myTable11">
          <?php
          $docs = scandir("linea6/");
          $num = 0;
          $i = 2;
          for ($i; $i < count($docs); $i++) {
            $num++;
          ?>
            <p>
            </p>
            <tr>
              <th><?php echo $num; ?></th>
              <td>Linea 6</td>
              <td><?php echo $docs[$i]; ?></td>
              <td><a title="Descargar" href="linea6/<?php echo $docs[$i]; ?>" download="<?php echo $docs[$i]; ?>" style="color: blue; font-size:18px;"> <span aria-hidden="true">Descargar</span> </a></td>
              <td><a title="Eliminar" href="Eliminar.php?name=linea6/<?php echo $docs[$i]; ?>" style="color: red; font-size:18px;" onclick="return alert('El archivo se eliminara permanentemente');"> <span aria-hidden="true">Eliminar</span> </a></td>
            </tr>
          <?php }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    $("#myInput11").on("keyup", function() {
      let value = $(this).val().toLowerCase();
      $("#myTable11 tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
    });
  });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/MetroCDMX/js/admin.js"></script>
</body>