<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    

</head>

<body>
    <div class="container" id="tabla0">
        <input class="form-control" id="myInput0" type="text" placeholder="BUSCAR">
        <br>
		<table class="table table-responsive-lg">
			<thead>
				<tr>
					<th>num</th>
					<th>Nombre del Archivo</th>
					<th>Descargar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody id="myTable0">
				<?php
				$archivos = scandir("subidas/");
				$num = 0;
				for ($i = 2; $i < count($archivos); $i++) {
					$num++;
				?>
					<p>
					</p>

					<tr>
						<th scope="row"><?php echo $num; ?></th>
						<td><?php echo $archivos[$i]; ?></td>
						<td><a title="Descargar Archivo" href="subidas/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> <span aria-hidden="true">descargar</span> </a></td>
						<td><a title="Eliminar Archivo" href="Eliminar.php?name=subidas/<?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('El archivo se eliminara permanentemente');"> <span aria-hidden="true">eliminar</span> </a></td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
</div>

    </div>


    <script>
        $(document).ready(function() {
            $("#myInput0").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable0 tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>
</body>


</html>