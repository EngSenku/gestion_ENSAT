<?php
require __DIR__ . '/../public/header.php';
require __DIR__ . '/../public/nav_barre.php';
require_once __DIR__ . '/../../Acces_BD/Professeur.php';

$editing = false;
$item = ['id'=>'','code'=>'','nom'=>'','prenom'=>'','email'=>'','langues'=>'','specialite'=>''];
if (!empty($_GET['id'])) { $editing = true; $item = prof_find((int)$_GET['id']) ?? $item; }
?>
<h2><?= $editing ? "Modifier Prof #".$item['id'] : "Créer Prof" ?></h2>
<form method="post" action="/Gestion_Actions/Professeur.php">
  <?php if ($editing): ?><input type="hidden" name="id" value="<?= htmlspecialchars($item['id']) ?>"><?php endif; ?>
  <label>Code</label><input name="code" value="<?= htmlspecialchars($item['code']) ?>" required>
  <label>Nom</label><input name="nom" value="<?= htmlspecialchars($item['nom']) ?>" required>
  <label>Prénom</label><input name="prenom" value="<?= htmlspecialchars($item['prenom']) ?>" required>
  <label>Email</label><input type="email" name="email" value="<?= htmlspecialchars($item['email']) ?>">
  <label>Langues</label><input name="langues" placeholder="ex: FR, EN" value="<?= htmlspecialchars($item['langues']) ?>">
  <label>Spécialité</label><input name="specialite" value="<?= htmlspecialchars($item['specialite']) ?>">
  <button type="submit" name="action" value="<?= $editing?'update':'create' ?>">
    <?= $editing ? "Mettre à jour" : "Créer" ?>
  </button>
</form>
<?php require __DIR__ . '/../public/footer.php'; ?>
