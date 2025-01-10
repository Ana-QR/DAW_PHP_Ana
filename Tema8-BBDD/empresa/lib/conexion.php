<?php
class Conexion {
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO(
                "mysql:host=" . SERVIDOR . ";dbname=" . BASE_DATOS, USUARIO, PASS
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("ERROR: No se pudo conectar. " . $e->getMessage());
        }
    }

    public function getPdo() {
        return $this->pdo;
    }
}

?>