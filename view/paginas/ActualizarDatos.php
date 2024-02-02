<?php
require_once "C:/xampp/htdocs/SionSistemWir/Controller/formulario.controlador.sion.php";

// Asegúrate de que la ruta sea correcta
if (isset($_GET["IdCliente"])) {
    $item = "IdCliente";
    $valor = $_GET["IdCliente"];
    $usuario= ControladorFormulariosSion::ctrSeleccionarRegistroSion($item, $valor);

}
?>
<!DOCTYPE html>
<html lang="es">
<!-- Resto de tu código HTML -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/sion/css/actualizarDatos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <br>
        <h2>Actualizar Datos</h2>
        <br>
    </header>
    <li class="nav-item">
    <a class="nav-link" href="http://localhost/SionSistemWir/view/paginas/admin.php">Regresar</a>
    </li>
    </ul>
    <div class="container">
        <div class="register-form">
            <form method="post">
                <div class="form-group">
                    <label for="email"><i class="fas fa-envelope"></i> Actualizar correo electrónico:</label>
                    <input type="email" class="form-control" placeholder="Actualizar correo electrónico" id="email" name="ActualizarCorreo">
                </div>
                <div class="form-group">
                    <label for="C.P."><i class="fas fa-map-pin"></i> Actualizar código postal:</label>
                    <input type="text" class="form-control" placeholder="Actualizar código postal" id="C.P." name="ActualizarCP">
                </div>
                <div class="form-group">
                    <label for="phone-number"><i class="fas fa-phone"></i> Actualizar número de teléfono:</label>
                    <input type="text" class="form-control" placeholder="Actualizar número de teléfono" id="phone-number" name="ActualizarTelefono">
                </div>
                <div class="form-group">
                    <label for="new username"><i class="fas fa-user"></i> Actualizar nombre de usuario:</label>
                    <input type="text" class="form-control" placeholder="Actualizar nombre de usuario" id="username" name="ActualizarUsuario">
                </div>
                <div class="form-group">
                    <label for="Direccion"><i class="fas fa-user"></i> Actualizar direccion:</label>
                    <input type="text" class="form-control" placeholder="Actualizar direccion" id="address" name="ActualizarDireccion">
                </div>
                <div class="form-group">
                    <label for="pwd"><i class="fas fa-lock"></i> Actualizar Contraseña:</label>
                    <input type="password" class="form-control" placeholder="Actualizar contraseña" id="pwd" name="ActualizarContrasena">
                    <input type="hidden" name="ContrasenaActual" value="<?php echo $usuario["Contrasena"]; ?>">
                    <input type="hidden" name="IdCliente" value="<?php echo $usuario["IdCliente"]; ?>">
                </div>
                <?php
                $actualizar = ControladorFormulariosSion::ctrActualiazrRegistroSion();
                if ($actualizar  == "ok") {
                    echo '<script>
                    if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }		
                    </script>';
                    echo '<div class="alert alert-success">El usuario ha sido actualizado</div>
                    <script>
                    setTimeout(function(){
                    window.location = "index.php?pagina=admin";
                    </script>';
                }
                ?>
                <button type="submit" class="btn btn-primary">Actualizar datos</button>
            </form>
        </div>
    </div>
</body>

</html>