<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar</title>
  <link rel="shortcut icon" href="/MetroCDMX/img/tlatelolco.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/MetroCDMX/css/stilos.css">
  <link rel="stylesheet" href="/MetroCDMX/css/home.css">
  <link rel="stylesheet" href="/MetroCDMX/css/stilos.css">
  <link rel="stylesheet" href="/MetroCDMX/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="row g-0">
        <div class="col-md-6 col-lg-5 d-none d-md-block">
          <img src="/MetroCDMX/img/tlatelolco.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
        </div>
        <div class="col-md-6 col-lg-7 d-flex align-items-center">
          <div class="card-body p-4 p-lg-5 ">
            <form method="post" action="login.php">
              <div class="d-flex align-items-center mb-3 pb-1">
                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                <span class="h1 fw-bold mb-0">
                  <img src="/MetroCDMX/img/STC_Metro.webp" width="300px" alt="">
                </span>
              </div>
              <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingresar cuenta de usuario</h5>
              <div class="form-outline mb-4">
                <input type="text" name="txtusuario" id="mail" class="form-control form-control-lg" />
                <label class="form-label">Usuario</label>
              </div>
              <div class="form-outline mb-4">
                <input type="password" name="txtpassword" id="txtpassword" class="form-control form-control-lg" />
                <label class="form-label">Contraseña</label>
                <br>
                <input type="checkbox" class="form-check-input" onclick="contraseña()">Mostrar contraseña
              </div>
              <select name="tipo" class="form-select" aria-label="Default select example">
                <option value="0" style="display:none;"><label>Seleccionar</label></option>
                <option value="lineab">linea B</option>
                <option value="linea3">Linea 3</option>
                <option value="linea6">Linea 6</option>
                <option value="linea7">Linea 7</option>
                <option value="admin">admin</option>
              </select>
              <hr>
              <div class="">
                <input type="submit" value="Ingresar" class="btn btn-dark  btn-block">
                <input type="reset" value="Cancelar" class="btn btn-warning  btn-block">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<script>
  function contraseña() {
    let tipo = document.getElementById("txtpassword");
    if (tipo.type == "password") {
      tipo.type = "text";
    } else {
      tipo.type = "password";
    }
  }
</script>
</body>

</html>