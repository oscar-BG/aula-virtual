<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Vistas/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vistas/css/style.css">
    <!-- Sweet alert 2 -->
    <link rel="stylesheet" href="Vistas/sweetalert/dist/sweetalert2.min.css">
    <title>Login IEBO</title>
</head>
<body>
    <header>
      <div class="container-fluit">
        <div class="row">
          <div class="col-12 barra">
            <img src="Vistas/img/buho.png" width="50px">
            <span class="lema pl-4">Login</span>
          </div>
        </div>
      </div>
    </header>
    <!-- Login  -->
    <section>
        <div class="container">
           <div class="row">
                  <div class="col-md-6">
                    <img src="Vistas/img/logo.png" alt="logo" class="img-fluid mx-auto d-block my-5">
                  </div>
                  <div class="col-md-6 tarjeta">
                        <div class="card">
                           <div class="card-header">
                               <h4>Inicio de sesion</h4>
                           </div>
                            <div class="card-body">
                               <form method="post">
                                   <div class="form-group">
                                       <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ingrese su usuario">
                                   </div>
                                   <div class="form-group">
                                       <input type="password" name="clave" id="clave" class="form-control" placeholder="Ingrese su contraseña">
                                   </div>
                                   <button type="submit" id="acceder" class="btn btn-primary w-100">Acceder</button>
                                   <button type="button" class="btn btn-secondary w-100 mt-3">Crear Cuenta</button>
                               </form>
                           </div>
                        </div>
                   </div>
           </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <!-- Sweet Alert 2 -->
    <script src="Vistas/jquery/jquery.js"></script>
    <script src="Vistas/jquery/popper.js"></script>
    <script src="Vistas/jquery/bootstrap.js"></script>
    <script src="Vistas/sweetalert/dist/sweetalert2.all.min.js"></script>
    <script  src="Vistas/login.js"></script>
</body>
</html>
