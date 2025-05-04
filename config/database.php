<?php
class Database {
    public static function connect() {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=gestion_stock;charset=utf8', 'root', '');
            return $pdo;
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }
}
