<?php
require_once "../../Controller/formulario.controlador.sion.php";
$usuarios = ControladorFormulariosSion::ctrSeleccionarRegistroSion(null, null);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a40a4c17ef.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="http://localhost/sion/css/admin.css">
  <script src="/js/admin.js"></script>
</head>

<body>
  <header>
    <h1>Bienvenido</h1>
    <nav>
      <ul>

        <li class="nav-item">
          <a class="nav-link" href="http://localhost/SionSistemWir/view/paginas/admin.php">Usuarios</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost/SionSistemWir/view/paginas/registro.php">Crear nuevo usuario</a>
        </li>
        <li><a href="#" onclick="logout()">Cerrar sesión</a></li>
      </ul>
    </nav>
  </header>
  <section id="Usuarios" class="Usuarios">
    <h2>Usuarios Registrados</h2>
    <table>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Código Postal</th>
        <th>Dirección</th>
        <th>Correo Electrónico</th>
        <th>Contraseña</th>
        <th>Número de Teléfono</th>
        <th>Acciones</th>
      </tr>
      <?php foreach ($usuarios as $key => $value) : ?>
        <tr>
          <td><?php echo $value["Nombre"] ?></td>
          <td><?php echo $value["Apellido"] ?></td>
          <td><?php echo $value["C_Postal"] ?></td>
          <td><?php echo $value["Direccion"] ?></td>
          <td><?php echo $value["Correo"] ?></td>
          <td><?php echo $value["Contrasena"] ?></td>
          <td><?php echo $value["NumTelefono"] ?></td>
          <td>
            <div class="btn-group">
              <a href="http://localhost/SionSistemWir/view/paginas/ActualizarDatos.php" class="btn btn-primary">Actualizar</a>
              <form method="post">
                <input type="hidden" value="<?php echo $value["IdCliente"]; ?>" name="EliminarRegistro">
                <button type="submit" class="btn btn-danger">Borrar</button>
              </form>
              <?php
              if (isset($_POST["EliminarRegistro"])) {
                $EliminarRegistro = new ControladorFormulariosSion();
                $EliminarRegistro->ctrEliminarRegistroSion();
              }
              ?>
            </div>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
    </main>
    <footer>
      <p>&copy; 2023</p>
    </footer>
    <script>
      function logout() {
        var confirmLogout = confirm("¿Estás seguro de que deseas cerrar sesión?");
        if (confirmLogout == true) {
          window.location.href = "http://localhost/SionSistemWir/";
        }
      }
    </script>
</body>

</html>