<!DOCTYPE html>
<html>
<head>
    <title>Reportar un Problema</title>
    <link rel="stylesheet" type="text/css" href="../css/reporte.css">
</head>
<body>
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
</body>
</html>