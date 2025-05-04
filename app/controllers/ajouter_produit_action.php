<?php
$pdo = new PDO('mysql:host=localhost;dbname=nom_de_ta_base', 'ton_utilisateur', 'ton_mot_de_passe');

if (isset($_POST['nom'], $_POST['prix'], $_POST['stock'], $_POST['image'])) {
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];
    $image = $_POST['image'];

    $query = "INSERT INTO produits (nom, prix, stock, image) VALUES (:nom, :prix, :stock, :image)";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prix', $prix);
    $stmt->bindParam(':stock', $stock);
    $stmt->bindParam(':image', $image);

    if ($stmt->execute()) {
        header('Location: produits.php');
        exit();
    } else {
        echo "Erreur lors de l'ajout du produit.";
    }
} else {
    echo "Tous les champs sont requis.";
}
?>
