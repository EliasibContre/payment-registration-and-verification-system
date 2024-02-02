<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/sion/css/pagos.css">
    <title>Pagos</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <header>
        <h1>Historial de pagos</h1>
        <nav>
            <ul>
              
            <li class="nav-item">
            <a class="nav-link" href="http://localhost/SionSistemWir/view/paginas/admin.php">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/SionSistemWir/view/paginas/pagos.php">Pagos</a>
        </li>
            <li class="nav-item">
            <a class="nav-link active" href="http://localhost/SionSistemWir/view/paginas/registro.php">Crear nuevo usuario</a>
            </li>
                <li><a href="#" onclick="logout()">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Archivo</th>
          <th>Fecha y hora</th>
          <th>Validar</th>
          <th>Rechazar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Juan</td>
          <td>Pérez</td>
          <td>  <a href="/img/prueba.png" download class="btn btn-primary">
            Descargar
          </td>  
                 <td>2023-03-08 12:00:00</td>
          <td><button class="btn btn-success">Validar</button></td>
          <td> <button class="btn btn-danger">Rechazar</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>María</td>
          <td>García</td>
          <td>  <a href="/img/prueba.png" download class="btn btn-primary">
            Descargar
          </td>
          <td>2023-03-09 10:00:00</td>
          <td><button class="btn btn-success">Validar</button></td>
          <td> <button class="btn btn-danger">Rechazar</button></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Pedro</td>
          <td>Rodríguez</td>
          <td>
            <a href="/img/prueba.png" download class="btn btn-primary">
        Descargar
            </a>
          </td>   
          <td>2023-03-10 14:00:00</td>
          <td><button class="btn btn-success">Validar</button></td>
        <td> <button class="btn btn-danger">Rechazar</button></td>
            
        </tr>
      </tbody>
    </table>
    <script>
      function guardarDatos() {
        // Obtener los datos del formulario
        var id = document.getElementById("id").value;
        var nombre = document.getElementById("nombre").value;
        var apellidos = document.getElementById("apellidos").value;
        var archivo = document.getElementById("archivo").value;
        var fechaHora = document.getElementById("fechaHora").value;
      
        // Guardar los datos en la base de datos
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "/guardar-datos.php", true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.send(JSON.stringify({
          id: id,
          nombre: nombre,
          apellidos: apellidos,
          archivo: archivo,
          fechaHora: fechaHora
        }));
      
        // Si se guardaron los datos correctamente
        if (xhr.status === 200) {
          alert("Los datos se guardaron correctamente");
        } else {
          alert("Hubo un error al guardar los datos");
        }
      }
      
      function mostrarImagen() {
        // Obtener el archivo seleccionado
        var archivo = document.getElementById("archivo").value;
      
        // Crear un elemento img
        var img = document.createElement("img");
      
        // Asignar la imagen al elemento img
        img.src = "/archivos/" + archivo;
      
        // Insertar el elemento img en el documento
        document.body.appendChild(img);
      }
    </script>
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
