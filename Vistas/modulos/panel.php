<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/0f48d8c00d.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Aula IEBO</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <img src="../img/buho.png" alt="logo" class="img-flud" width="50px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
               <li class="nav-item mr-auto">
                   <a href="panel.php?variable=inicio" class="nav-link text-white">Inicio</a>
               </li>
               <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Administración
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                       <a href="panel.php?variable=usuario" class="dropdown-item">Usuarios</a>
                       <div class="dropdown-divider"></div>
                       <a href="semestre.html" class="dropdown-item">Semestre</a>
                       <div class="dropdown-divider"></div>
                       <a href="#" class="dropdown-item">Estudiantes</a>
                       <div class="dropdown-divider"></div>
                       <a href="#" class="dropdown-item">Materias</a>
                    </div>
               </li>
           </ul>
           <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown mr-3">
                <a href="" class="nav-link dropdown-toggle text-white" data-toggle="dropdown"><i class="fas fa-user"></i> Usuario: Oscar</a>

                <div class="dropdown-menu">
                    <a href="perfil.html" class="dropdown-item"><i class="fas fa-user-circle"></i> Perfil</a>
                    <a href="#" class="dropdown-item"><i class="fas fa-cog"></i> Configuraciones</a>
                    <div class="dropdown-divider"></div>
                    <a href="index.html" class="dropdown-item"><i class="fas fa-user-times"></i> Salir</a>
                </div>
            </li>
        </ul>
        </div>
    </nav>
    <?php
      if(isset($_GET["variable"])){
        $variable = $_GET["variable"];
        switch ($variable) {
          case 'usuario':
            include 'usuarios.html';
            break;
          
          default:
            include 'tablero.html';
            break;
        }
      }else{
        include 'tablero.html';
      }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>