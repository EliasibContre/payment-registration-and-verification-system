<?php
require_once "../../Controller/formulario.controlador.sion.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Realizar validación de inicio de sesión y obtener detalles del usuario
    $ingreso = new ControladorFormulariosSion();
    $validLogin = $ingreso->ctrIngresoSion();

    if ($validLogin) {
        // Obtener el tipo de usuario desde la sesión (suponiendo que lo hayas configurado durante la validación)
        $userType = $_SESSION["TipoUsuario"];
        
        // Redireccionar basado en el tipo de usuario
        if ($userType == 1) {
            header("Location: index.php?pagina=InterfazDeUsuario");
            exit();
        } elseif ($userType == 2) {
            header("Location: index.php?pagina=admin");
            exit();
        }
    } else {
        // Intento de inicio de sesión fallido
        $errorMessage = "por favor ingresa datos validos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="http://localhost/sion/css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-qVlVOk5kaJ9z2Nqz4Qa6hL1x6NvK8l+I5nkf1bJ6zKJzJrS2+1JjL9Jy9a+KcT0C6QsL9yXlq+2r5s8J+UyPYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container">
    <div class="description">
      <h2>Realiza tus registros de pagos de forma segura</h2><br>
      <p>Evita inconvenientes al no contar con tu comprobante </p><br>
      <img src="http://localhost/sion/img/pagar.jfif" class="imgP" >
    </div>
    <div class="login-form">
    <div> 
        <h2 class="login1">Iniciar sesión</h2>
    </div><br>
    <form class="login" method="POST">
    <label for="username"><i class="fas fa-user"></i> Nombre de usuario:</label>
    <input type="text" placeholder="Ingresa tu nombre de usuario" id="username" name="username" required>
    <label for="password"><i class="fas fa-lock"></i> Contraseña:</label>
    <input type="password" placeholder="Ingresa tu contraseña" id="password" name="password" required><br>
    <button type="submit">Iniciar sesión</button>
</form>

<?php if (isset($errorMessage)): ?>
    <p class="mensaje-error"><?php echo $errorMessage; ?></p>
<?php endif; ?>

</div>
</body>
</html>
