<div class="container" id="principal">
    <input class="form-control" id="myInput12" type="text" placeholder="BUSCAR">
    <br>
    <table class="table">
      <thead>
        <tr>
          <th>num</th>
          <th>tabla principal</th>
          <th>Descargar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody id="myTable12">
        <?php
        $docs = scandir("../files/copy/env7");
        $num = 0;
        for ($i = 2; $i < count($docs); $i++) {
          $num++;
        ?>
          <p>
          </p>
          <tr>
            <th scope="row"><?php echo $num; ?></th>
            <td><?php echo $docs[$i]; ?></td>
            <td><a title="Descargar" href="../files/copy/env7/<?php echo $docs[$i]; ?>" download="<?php echo $docs[$i]; ?>" style="color: blue; font-size:18px;"> <span aria-hidden="true">descargar</span> </a></td>
            <td><a title="Eliminar" href="Eliminar.php?name=../files/copy/env7/<?php echo $docs[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('El archivo se eliminara permanentemente');"> <span aria-hidden="true">eliminar</span> </a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <p>RESULTADOS RECIENTES</p>
  </div>
  <script>
  $(document).ready(function() {
    $("#myInput12").on("keyup", function() {
      let value = $(this).val().toLowerCase();
      $("#myTable12 tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
    });
  });
</script>