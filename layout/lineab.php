<div class="modal1 modal-xl" >
  
  <!-- The Modal -->
  <div class="modal  fade  bd-example-modal-xl" id="myModal5">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Documentos de la linea B</h4>
          
          <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal" ></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">

        <div class="container" id="tabla7">

    <input class="form-control" id="myInput7" type="text" placeholder="BUSCAR">
    <br>
    <table  class="table table-bordered table-striped table-hover">

      <thead class="thead-dark">
        <tr>
          <th>Archivos</th>
          
        </tr>
      </thead>
      <tbody id="myTable7">
        <tr>
          <td>USUARIO1</td>
        </tr>
        <tr>
          <td>2</td>
        </tr>
        <tr>
          <td>USUARIO1</td>
        </tr>
        <tr>
          <td>USUARIO1</td>
        </tr>
        <tr>
          <td>USUARIO5</td>
        </tr>
        <tr>
          <td>USUARIO1</td>
        </tr>
        <tr>
          <td>USUARIO1</td>
        </tr>
        <tr>
          <td>USUARIO1</td>
        </tr>
      </tbody>
    </table>
    
    <p>RESULTADOS RECIENTES</p>
  </div>
  <div class="shadow-lg p-3 mb-4 bg-body rounded"><h6>ver informacion en una nueva pagina</h6>
</div>  <a href="#" class="btn btn-warning" onclick="linea3()">ver en pagina nueva</a>



</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
  $(document).ready(function(){
    $("#myInput7").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable7 tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>