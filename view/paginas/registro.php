<?php
require_once "../../Controller/formulario.controlador.sion.php";
$usuarios = ControladorFormulariosSion::ctrSeleccionarRegistroSion(null, null);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/sion/css/registro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <h2>Registro</h2><br>
        <br>
    </header>
    <ul>  
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/SionSistemWir/view/paginas/admin.php">Regresar</a>
          </li>
    </ul>
    <div class="container">
        <div class="register-form">
            <form method="post">
                <div class="form-group">
                    <label for="first-name"><i class="fas fa-user"></i> Ingresa nombre:</label>
                    <input type="text" class="form-control" placeholder="Ingresa nombre" id="name" name="nombre">
                </div>
                <div class="form-group">
                    <label for="last-name"><i class="fas fa-user"></i> Ingresa apellido:</label>
                    <input type="text" class="form-control" placeholder="Ingresa apellido" id="last-name" name="apellido">
                </div>
                <div class="form-group">
                    <label for="address"><i class="fas fa-map-marker-alt"></i> Ingresa dirección:</label>
                    <input type="text" class="form-control" placeholder="Ingresa dirección" id="address" name="direccion">
                </div>
                <div class="form-group">
                    <label for="email"><i class="fas fa-envelope"></i> Dirección de correo electrónico:</label>
                    <input type="email" class="form-control" placeholder="Ingresa correo electrónico" id="email" name="correo">
                </div>
                <div class="form-group">
                    <label for="C.P."><i class="fas fa-map-pin"></i> Ingresa código postal:</label>
                    <input type="text" class="form-control" placeholder="Ingresa código postal" id="CP" name="CP">
                </div>
                <div class="form-group">
                    <label for="phone-number"><i class="fas fa-phone"></i> Ingresa número de teléfono:</label>
                    <input type="text" class="form-control" placeholder="Ingresa número de teléfono" id="phone-number" name="telefono">
                </div>
                <div class="form-group">
                    <label for="new username"><i class="fas fa-user"></i> Ingresa nombre de usuario:</label>
                    <input type="text" class="form-control" placeholder="Ingresa nombre de usuario" id="username" name="usuario">
                </div>
                <div class="form-group">
                    <label for="pwd"><i class="fas fa-lock"></i> Contraseña:</label>
                    <input type="password" class="form-control" placeholder="Ingresa contraseña" id="pwd" name="password">
                </div>
                <?php 
                $registro=ControladorFormulariosSion::ctrRegistroSion();
                if ($registro == "ok") {
                    echo '<script>
                    if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    </script>';
                    echo '<div class="alert alert-success">El usuario ha sido registrado exitosamente</div>';
                }
                if ($registro=="error") {
                    echo '<script>
                    if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    </script>';
                    echo '<div class="alert alert-danger">Error al ingresar datos :v</div>';
                } 
                ?>
                <button type="submit" class="btn btn-primary">Aceptar</button>
                
            </form>
        </div>
    </div>
</body>

</html>