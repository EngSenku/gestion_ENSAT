<form action="../../Gestion_Actions/Etudiant.php" method="POST">
  <input type="text" name="code" placeholder="Code" required><br>
  <input type="text" name="nom" placeholder="Nom" required><br>
  <input type="text" name="prenom" placeholder="Prénom" required><br>
  <input type="email" name="email" placeholder="Email" required><br>
  <select name="sexe">
    <option value="Homme">Homme</option>
    <option value="Femme">Femme</option>
  </select><br>
  <input type="text" name="filiere" placeholder="Filière"><br>
  <button type="submit" name="ajouter">Ajouter</button>
</form>