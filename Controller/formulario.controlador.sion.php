<?php
require_once "C:/xampp/htdocs/SionSistemWir/model/conexion.php";
require_once "C:/xampp/htdocs/SionSistemWir/model/formularios.modelo.sion.php";


class ControladorFormulariosSion{
    public function ctrIngresoSion() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            // Conectarse a la base de datos
            $link = ConexionSionSistem::conectarBase();
            
            // Consulta preparada para evitar inyección SQL
            $query = "SELECT * FROM clientes WHERE Nom_Usuario = :username AND Contrasena = :password";
            $stmt = $link->prepare($query);
            $stmt->bindParam(":username", $username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $password, PDO::PARAM_STR);
            $stmt->execute();
            
            // Obtener los resultados
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($result) {
                // Usuario y contraseña válidos
                $_SESSION["validarIngreso"] = "ok";
                
                // Obtener el tipo de usuario desde el resultado
                $tipoUsuario = $result["id_usuario"];
    
                // Asignar el tipo de usuario a la variable de sesión
                $_SESSION["TipoUsuario"] = $tipoUsuario;
                
                if ($tipoUsuario == 1) {
                    // Redireccionar a la página del cliente
                    header("Location: http://localhost/SionSistemWir/view/paginas/InterfazDeUsuario.php#");
                    exit();
                } else if ($tipoUsuario == 2) {
                    // Redireccionar a la página del administrador
                    header("Location: http://localhost/SionSistemWir/view/paginas/admin.php");
                    exit();
                }
            } else {
                // Credenciales incorrectas
                return false;
            }
        }
    }
    
static public function ctrSeleccionarRegistroSion($item, $valor){
    $tabla="clientes";
    $respuesta=FormulariosModelSionSistem::mdlSeleccionarRegistroSion($tabla,$item,$valor);
    return $respuesta;

} 
static public function ctrRegistroSion(){
    if(isset($_POST["nombre"])){
        if (preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/',$_POST["nombre"])&&
        preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["correo"])&&
        preg_match('/^[0-9a-zA-Z]+$/',$_POST["password"])&&
        preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/',$_POST["usuario"])) {
            $tabla="clientes";
            $datos=array(
            "Nombre"=>$_POST['nombre'],
            "Apellido"=>$_POST['apellido'],
            "Direccion"=>$_POST['direccion'],
            "Correo"=>$_POST['correo'],
            "C_Postal"=>$_POST['CP'],
            "NumTelefono"=>$_POST['telefono'],
            "Nom_Usuario"=>$_POST['usuario'],
            "Contrasena" => $_POST['password']
            );
            $respuesta=FormulariosModelSionSistem::mdlRegistroSion($tabla,$datos);
            return $respuesta;
        }else {
            $respuesta="error";
            return $respuesta;
        }
}
}




static public function ctrActualiazrRegistroSion(){
    if (isset($_POST["ActualizarCorreo"])) {
        if ($_POST["ActualizarContrasena"]!="null") {
            $contraseña=$_POST["ActualizarContrasena"];
        }else {
            $contraseña=$_POST["ContrasenaActual"];
        }
        $tabla='clientes';
        $datos=array(
            "IdCliente"=>$_POST["IdCliente"],
            "Correo" => $_POST["ActualizarCorreo"],
            "C_Postal" => $_POST["ActualizarCP"],
            "NumTelefono" => $_POST["ActualizarTelefono"],
            "Nom_Usuario" => $_POST["ActualizarUsuario"],
            "Direccion" => $_POST["ActualizarDireccion"],
            "Contrasena" => $contraseña

        );
        $respuesta=FormulariosModelSionSistem::mdlActualizarRegistroSion($tabla,$datos);
        return $respuesta;
    }
}


public function ctrEliminarRegistroSion() {
    if (isset($_POST["EliminarRegistro"])) {
        $tabla = "clientes";
        $valor = $_POST["EliminarRegistro"];
        $respuesta = FormulariosModelSionSistem::mdlEliminarRegistroSion($tabla, $valor);

        if ($respuesta === "ok") {
            echo '<script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
                ndow.location.href = "http://localhost/SionSistemWir/view/paginas/admin.php";
            </script>';
        } else {
            // Manejar el error si ocurrió algún problema en la eliminación
            echo "Error al eliminar el registro: " . $respuesta;
        }
    }
}
}





