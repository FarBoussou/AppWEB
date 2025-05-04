<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produits - Système de Gestion des Stocks</title>
  <link rel="stylesheet" href="/css/styleproduits.css">
</head>
<body>
  <header>
    <h1>Produits - Gaming</h1>
    <nav>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="produits.php" class="active">Produits</a></li>
        <li><a href="fournisseurs.php">Fournisseurs</a></li>
        <li><a href="commandes.php">Commandes</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h2>Nos produits gaming en stock</h2>

    <!-- Formulaire de recherche -->
    <form method="GET" action="produits.php">
      <input type="text" name="search" placeholder="Rechercher un produit" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
      <button type="submit">Rechercher</button>
    </form>

    <div class="product-list">
      <?php 
        // Liste des produits
        $produits = [
            [
                'nom' => 'Casque Gaming Xtreme',
                'stock' => 25,
                'prix' => 79.99,
                'image' => 'casque.jpg'
            ],
            [
                'nom' => 'Souris Gaming Pro',
                'stock' => 50,
                'prix' => 39.99,
                'image' => 'souris.jpg'
            ],
            [
                'nom' => 'Clavier Mécanique RGB',
                'stock' => 10,
                'prix' => 129.99,
                'image' => 'clavier.jpg'
            ],
            [
                'nom' => 'Écran 144Hz UltraWide',
                'stock' => 5,
                'prix' => 299.99,
                'image' => 'ecran.jpg'
            ]
        ];

        // Filtrer les produits en fonction de la recherche
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $searchTerm = strtolower($_GET['search']);
            $produits = array_filter($produits, function($produit) use ($searchTerm) {
                return strpos(strtolower($produit['nom']), $searchTerm) !== false;
            });
        }

        // Affichage des produits
        if (isset($produits) && !empty($produits)): 
            foreach ($produits as $produit): 
      ?>
        <div class="product-card">
          <img src="images/<?= $produit['image'] ?>" alt="<?= $produit['nom'] ?>">
          <h3><?= $produit['nom'] ?></h3>
          <p>Stock : <?= $produit['stock'] ?><br>Prix : <?= number_format($produit['prix'], 2) ?> €</p>
          <a href="#" class="btn">Détails</a>
        </div>
      <?php 
            endforeach;
        else: 
      ?>
        <p>Aucun produit trouvé.</p>
      <?php endif; ?>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 - Fares</p>
  </footer>
</body>
</html>
