<?php
require_once 'connexion.php';

function getProfs() {
    $conn = Connect();
    $sql = "SELECT * FROM Prof";
    $res = $conn->query($sql);
    $profs = [];
    while ($row = $res->fetch_assoc()) {
        $profs[] = $row;
    }
    $conn->close();
    return $profs;
}

function addProf($code, $nom, $prenom, $email, $langues, $specialite) {
    $conn = Connect();
    $stmt = $conn->prepare("INSERT INTO Prof (code, nom, prenom, email, langues, specialite) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $code, $nom, $prenom, $email, $langues, $specialite);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
