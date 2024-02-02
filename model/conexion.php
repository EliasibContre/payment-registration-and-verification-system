<?php
class ConexionSionSistem {
    private static $host = "localhost";
    private static $db = "integradora_3"; // Cambia esto al nombre de tu base de datos
    private static $user = "root"; // Cambia esto al nombre de tu usuario de base de datos
    private static $password = "Skrillex012"; // Cambia esto a tu contraseña de base de datos
    private static $charset = "utf8";

    public static function conectarBase() {
        $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$db . ";charset=" . self::$charset;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $pdo = new PDO($dsn, self::$user, self::$password, $options);
            return $pdo;
        } catch (PDOException $e) {
            throw new Exception("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }
}

?>