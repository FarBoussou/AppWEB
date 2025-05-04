<?php

class ProduitsController {
    public function index() {
        $pdo = new PDO('mysql:host=localhost;dbname=gestion_stock', 'root', '04072006');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->query("SELECT * FROM produits");
        $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($produits) {
            require_once '../app/views/produits.php';
        } else {
            echo "Aucun produit trouvé.";
        }
    }
}
