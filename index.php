<?php
require_once "Controller/plantilla.controlador.sion.php";
require_once "Controller/formulario.controlador.sion.php";
require_once "Model/formularios.modelo.sion.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerplatntilla();

if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];

    switch ($pagina) {
        case 'InterfazDeUsuario':
            // Cargar la página de Interfaz de Usuario
            include "/view/paginas/interfazUsuario.php";
            break;
        case 'admin':
            // Cargar la página de Administrador
            include "view/paginas/admin.php";
            break;
        default:
            // Página por defecto o manejar errores
            include "view/paginas/404.php";
            break;
    }
}
?>
