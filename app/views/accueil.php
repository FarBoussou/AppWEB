<!DOCTYPE html> 
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil - Système de Gestion des Stocks</title>
  <link rel="stylesheet" href="/css/style.css"> 
</head>
<body>
  <header>
    <div class="container">
      <h1>Système de Gestion des Stocks Gamer</h1>
      <nav>
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="produits.php">Produits</a></li>
          <li><a href="ajouter_produit.php">Ajouter un produit</a></li> <!-- Onglet ajouté -->
          <li><a href="fournisseurs.php">Fournisseurs</a></li>
          <li><a href="commandes.php">Commandes</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <section class="hero">
      <div class="hero-text">
        <h2>Optimisez la gestion de vos stocks</h2>
        <p>Bienvenue sur notre plateforme dédiée aux entreprises du gaming. Gérez vos produits, vos fournisseurs et vos commandes efficacement.</p>
        <a href="produits.php" class="btn">Découvrir nos produits</a> 
      </div>
      <div class="hero-image">
        <img src="images/stock.jpg" alt="Entrepôt de matériel gaming">
      </div>
    </section>

    <section class="features">
      <h2>Fonctionnalités principales</h2>

      <div class="feature">
        <h3>Gestion des Produits</h3>
        <p>Suivez facilement vos stocks de PC gamers, cartes graphiques, claviers mécaniques, écrans LED 240Hz, casques gaming, etc.</p>
        <a href="produits.php" class="btn">Voir les produits</a> 
      </div>

      <div class="feature">
        <h3>Suivi des Fournisseurs</h3>
        <p>Gérez vos fournisseurs spécialisés dans le matériel informatique gaming : Asus, MSI, Corsair, Razer, Logitech Pro, etc.</p>
        <a href="fournisseurs.php" class="btn">Voir les fournisseurs</a> 
      </div>

      <div class="feature">
        <h3>Gestion des Commandes</h3>
        <p>Créez des commandes précises et suivez leur statut en temps réel : commandes en attente, validées, expédiées ou livrées.</p>
        <p>Exemples de commandes : 20 cartes RTX 4090 pour la salle de test, 50 claviers RGB pour un tournoi eSport, 10 PC fixes pour une LAN party pro.</p>
        <a href="commandes.php" class="btn">Gérer les commandes</a> 
      </div>
    </section>

    <section class="stats">
      <h2>Statistiques en temps réel</h2>
      <ul>
        <li><strong>Produits en stock :</strong> 235 articles</li>
        <li><strong>Fournisseurs actifs :</strong> 12 partenaires</li>
        <li><strong>Commandes traitées :</strong> 87 commandes</li>
      </ul>
    </section>

    <section class="contact">
      <h2>Besoin d’aide ?</h2>
      <p>Notre équipe est disponible par mail pour accompagner votre entreprise. Contactez-nous pour toute question ou suggestion.</p>
      <a href="mailto:faresboussou@gmail.com" class="btn">Contacter le support</a>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 - Fares | Système de gestion des stocks</p>
  </footer>
</body>
</html>
