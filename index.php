<?php
require __DIR__ . '/IHM/public/header.php';
require __DIR__ . '/IHM/public/nav_barre.php';
?>
<h2>Bienvenue dans l'application de gestion d'école</h2>
<p>Utilisez la barre de navigation pour accéder aux sections Étudiants et Profs.</p>

<section id="login" style="margin-top:24px;">
  <h3>Authentification</h3>
  <?php if (!empty($_GET['err'])): ?>
    <p class="badge">Erreur: <?= htmlspecialchars($_GET['err']) ?></p>
  <?php endif; ?>
  <?php if (empty($_SESSION['user'])): ?>
    <form method="post" action="/Gestion_Actions/login.php">
      <label>Nom d'utilisateur</label>
      <input type="text" name="username" required>
      <label>Mot de passe</label>
      <input type="password" name="password" required>
      <button type="submit" name="action" value="login">Se connecter</button>
    </form>
  <?php else: ?>
    <p>Déjà connecté en tant que <strong><?= htmlspecialchars($_SESSION['user']) ?></strong>.</p>
  <?php endif; ?>
</section>
<?php require __DIR__ . '/IHM/public/footer.php'; ?>
