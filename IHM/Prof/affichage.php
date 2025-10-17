<?php
require __DIR__ . '/../public/header.php';
require __DIR__ . '/../public/nav_barre.php';
require_once __DIR__ . '/../../Acces_BD/Professeur.php';
$rows = prof_all();
?>
<h2>Liste des Professeurs</h2>
<p><a href="/IHM/Prof/form.php"><button>+ Nouveau Prof</button></a></p>
<table>
  <thead><tr>
    <th>ID</th><th>Code</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Langues</th><th>Spécialité</th><th>Actions</th>
  </tr></thead>
  <tbody>
  <?php foreach ($rows as $r): ?>
    <tr>
      <td><?= $r['id'] ?></td>
      <td><?= htmlspecialchars($r['code']) ?></td>
      <td><?= htmlspecialchars($r['nom']) ?></td>
      <td><?= htmlspecialchars($r['prenom']) ?></td>
      <td><?= htmlspecialchars($r['email']) ?></td>
      <td><?= htmlspecialchars($r['langues']) ?></td>
      <td><?= htmlspecialchars($r['specialite']) ?></td>
      <td>
        <a href="/IHM/Prof/form.php?id=<?= $r['id'] ?>">✏️</a>
        <a href="/Gestion_Actions/Professeur.php?action=delete&id=<?= $r['id'] ?>" onclick="return confirm('Supprimer ?')">🗑️</a>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
<?php require __DIR__ . '/../public/footer.php'; ?>
