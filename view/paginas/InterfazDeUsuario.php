<?php
require_once "../../Controller/formulario.controlador.sion.php";
$SubirArchivo = new ControladorFormulariosSion();
$usuarios=ControladorFormulariosSion::ctrSeleccionarRegistroSion(null,null);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/SionSistemWir/css/inerfazDeUsuario.css">
</head>
<body>
    <header>
        <h1>Bienvenido</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#" onclick="showHistory()">Historial</a></li>
            <li><a href="#" onclick="showUpdate()">Reportar problema</a></li>
            <li><a href="#" onclick="logout()">Cerrar sesión</a></li>
        </ul>
    </nav>
    <main>
        <section id="history" style="display:none;">
            <!-- contenido de la sección de historial -->
            <table>
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Monto</th>
                        <th>Motivo</th>
                        <th>Estado</th>
                        <th>Subir</th>
                        <th>Descargar/Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01/01/2022</td>
                        <td>$500.00</td>
                        <td>Servico de internet 50mb</td>
                        <td>Aprobado</td>
                        <td>
                            <!-- Botón para subir -->
                            <input type="file" id="uploadFile1" style="display: none;">
                            <label for="uploadFile1" class="btn btn-primary">Subir</label>
                        </td>
                        <td>
                            <a href="/img/prueba.png" download class="btn btn-success">Descargar</a>
                            <button class="btn btn-danger" onclick="eliminarArchivo(1)">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>02/01/2022</td>
                        <td>$25.00</td>
                        <td>Servico de internet 20mb</td>
                        <td>Pendiente</td>
                        <td>
                            <input type="file" id="uploadFile2" accept="image/jpeg" style="display: none;">
                            <label for="uploadFile2" class="btn btn-primary">Subir</label>
                        </td>
                        <td>
                            <a href="/ruta_del_archivo.jpg" download class="btn btn-success">Descargar</a>
                            <button class="btn btn-danger" onclick="eliminarArchivo(2)">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>03/01/2022</td>
                        <td>$100.00</td>
                        <td>Servico de internet 100mb</td>
                        <td>No pagado</td>
                        <td>
                            <input type="file" id="uploadFile3" accept="image/jpeg" style="display: none;">
                            <label for="uploadFile3" class="btn btn-primary">Subir</label>
                        </td>
                        <td>
                            <a href="/ruta_del_archivo.jpg" download class="btn btn-success">Descargar</a>
                            <button class="btn btn-danger" onclick="eliminarArchivo(3)">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section id="upload" style="display:none;" class="comprobante">
            <!-- contenido de la sección de subir comprobante -->
            <h2>Subir comprobante</h2>
            <form method="post" enctype="multipart/form-data">
                <label for="file">Seleccionar archivo:</label>
                <input type="file" id="file" name="file"><br><br>
                <input type="submit" value="Subir">
            </form>
        </section>
        <section id="update" style="display:none;" class="Reporte">
            <h1>Reportar un Problema</h1>
            <form action="procesar_reporte.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="asunto">Asunto:</label>
                <input type="text" id="asunto" name="asunto" required>
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" required></textarea>
                <input type="submit" value="Enviar Reporte">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023</p>
    </footer>
    <script>
        function showHistory() {
            document.getElementById("history").style.display = "block";
            document.getElementById("upload").style.display = "none";
            document.getElementById("update").style.display = "none";
        }
        function showUpload() {
            document.getElementById("history").style.display = "none";
            document.getElementById("upload").style.display = "block";
            document.getElementById("update").style.display = "none";
        }
        function showUpdate() {
            document.getElementById("history").style.display = "none";
            document.getElementById("upload").style.display = "none";
            document.getElementById("update").style.display = "block";
        }
        function logout() {
            var confirmLogout = confirm("¿Estás seguro de que deseas cerrar sesión?");
            if (confirmLogout == true) {
                window.location.href = "http://localhost/SionSistemWir/";
            }
        }

        function eliminarArchivo(id) {
            // Aquí puedes agregar la lógica para eliminar el archivo con el ID proporcionado.
            console.log("Eliminar archivo con ID:", id);
        }
    </script>
</body>
</html>
