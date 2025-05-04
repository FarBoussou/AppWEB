<?php
require_once '../../config/config.php';

class AjouterProduitController {
    public function ajouterProduit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prix = $_POST['prix'];
            $stock = $_POST['stock'];
            $image = $_POST['image'];

            global $pdo;
            $sql = "INSERT INTO produits (nom, prix, stock, image) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$nom, $prix, $stock, $image]);

            header('Location: ../public/produits.php');
            exit;
        }
    }
}
