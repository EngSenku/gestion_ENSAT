<nav class="topnav">
  <a href="/index.php">Accueil</a>
  <a href="/IHM/Etudiant/form.php">Créer Étudiant</a>
  <a href="/IHM/Prof/form.php">Créer Prof</a>
  <a href="/IHM/Etudiant/affichage.php">Liste Étudiants</a>
  <a href="/IHM/Prof/affichage.php">Liste Profs</a>
  <?php if (!empty($_SESSION['user'])): ?>
    <span class="right">Bonjour, <?= htmlspecialchars($_SESSION['user']) ?></span>
    <a class="right" href="/Gestion_Actions/login.php?action=logout">Déconnexion</a>
  <?php else: ?>
    <a class="right" href="/index.php#login">Connexion</a>
  <?php endif; ?>
</nav>
<main class="container">
