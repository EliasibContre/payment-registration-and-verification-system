<?php
require_once "conexion.php";
class FormulariosModelSionSistem
{

    static public function mdlSeleccionarRegistroSion($tabla, $item, $valor)
    {
        if ($item == null && $valor == null) {
            $stmt = ConexionSionSistem ::conectarBase()->prepare("SELECT * FROM $tabla ORDER BY IdCliente DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            $stmt = ConexionSionSistem ::conectarBase()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY IdCliente DESC");
            $stmt->bindParam(":IdCliente".$item, $valor, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        }
    }
    static public function mdlActualizarRegistroSion($tabla, $datos)
    {
        $stmt = ConexionSionSistem::conectarBase()->prepare("UPDATE $tabla SET Correo=:Correo, Nom_Usuario=:Nom_Usuario, Contrasena=:Contrasena, C_Postal=:C_Postal, Direccion=:Direccion, NumTelefono=:NumTelefono WHERE IdCliente=:IdCliente");
        $stmt->bindParam(":Correo", $datos["Correo"], PDO::PARAM_STR);
        $stmt->bindParam(":Nom_Usuario", $datos["Nom_Usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":Contrasena", $datos["Contrasena"], PDO::PARAM_STR);
        $stmt->bindParam(":C_Postal", $datos["C_Postal"], PDO::PARAM_STR);
        $stmt->bindParam(":Direccion", $datos["Direccion"], PDO::PARAM_STR);
        $stmt->bindParam(":NumTelefono", $datos["NumTelefono"], PDO::PARAM_STR);
        $stmt->bindParam(":IdCliente", $datos["IdCliente"], PDO::PARAM_INT);
        $stmt->bindParam(":FechaRegistro", $fechaRegistro, PDO::PARAM_STR);
        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(ConexionSionSistem::conectarBase()->errorInfo());
        }
    }
    static public function mdlRegistroSion($tabla, $datos) {
        $stmt = ConexionSionSistem::conectarBase()->prepare("INSERT INTO $tabla (Nombre, Apellido, Direccion, Correo, C_Postal, NumTelefono, Nom_Usuario, Contrasena, FechaRegistro) VALUES (:Nombre, :Apellido, :Direccion, :Correo, :C_Postal, :NumTelefono, :Nom_Usuario, :Contrasena, :FechaRegistro)");
        // ... código para realizar el bindParam ...
        $stmt->bindParam(":Nombre", $datos["Nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":Apellido", $datos["Apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":Direccion", $datos["Direccion"], PDO::PARAM_STR);
        $stmt->bindParam(":Correo", $datos["Correo"], PDO::PARAM_STR);
        $stmt->bindParam(":C_Postal", $datos["C_Postal"], PDO::PARAM_STR);
        $stmt->bindParam(":NumTelefono", $datos["NumTelefono"], PDO::PARAM_STR);
        $stmt->bindParam(":Nom_Usuario", $datos["Nom_Usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":Contrasena", $datos["Contrasena"], PDO::PARAM_STR);
        $stmt->bindParam(":FechaRegistro", $fechaRegistro, PDO::PARAM_STR);
        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(ConexionSionSistem ::conectarBase()->errorInfo());
        }
    }

    static public function mdlEliminarRegistroSion($tabla,$valor){
        $link = ConexionSionSistem::conectarBase();
        $stmt = $link->prepare("DELETE FROM $tabla WHERE id_usuario = :id_usuario");
        $stmt->bindParam(":id_usuario", $valor, PDO::PARAM_INT);
        $stmt->execute();

        // Ahora puedes eliminar el cliente de la tabla "clientes"
        if ($stmt->execute()) {
            return "ok";
        }else {
            print_r(ConexionSionSistem::conectarBase()->errorInfo());
        }
        
    }
    
}

