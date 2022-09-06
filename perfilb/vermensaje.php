<div id="vermensaje">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-11">

        <?php
        include("consulta_mensaje.php");
        ?>
        <script>
          $(document).ready(function() {
            $('.toast').toast('show');
          });
        </script>
      </div>
    </div>
  </div>
</div>