<?php
// Product.php

class Product {

  private $pdo;

  public function __construct() {
    $this->pdo = new PDO("mysql:host=localhost;dbname=gestion_stock", "root", "");
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public function ajouter($nom, $prix, $stock, $image) {
    $sql = "INSERT INTO produits (nom, prix, stock, image) VALUES (:nom, :prix, :stock, :image)";
    $stmt = $this->pdo->prepare($sql);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prix', $prix);
    $stmt->bindParam(':stock', $stock);
    $stmt->bindParam(':image', $image);

    $stmt->execute();
  }
}
?>
