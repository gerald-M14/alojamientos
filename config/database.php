<?php

class Connection{
    private static $instance = null;
    private $pdo;

    private function __construct(){
        try {
            // Conexión a MySQL local
            $dsn = "mysql:host=bzrknasgbcvmn2zocrl1-mysql.services.clever-cloud.com;dbname=bzrknasgbcvmn2zocrl1";

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            // Instancia de la conexión
            $this->pdo = new PDO($dsn, "uj924xgtfkhfobcx", "U3jDBvCICTbeGB7XcaA5", $options);

        } catch (PDOException $e) {
            echo "Error al conectarnos a la base de datos: " . $e->getMessage();
        }
    }

    public static function getInstance(){
        if (!self::$instance) {
            self::$instance = new Connection();
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->pdo;
    }
}
