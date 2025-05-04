<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Ajouter un produit</title>
  <link rel="stylesheet" href="/css/styleajouterproduit.css">
</head>
<body>
  <h1>Ajouter un produit</h1>
  <form action="ajouter_produit_action.php" method="POST">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" required><br>

    <label for="prix">Prix :</label>
    <input type="number" name="prix" step="0.01" required><br>

    <label for="stock">Stock :</label>
    <input type="number" name="stock" required><br>

    <label for="image">Image :</label>
    <input type="text" name="image" required><br>

    <input type="submit" value="Ajouter">
  </form>
</body>
</html>
