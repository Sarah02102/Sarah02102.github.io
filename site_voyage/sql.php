<?php
// Connexion à la base de données
$servername = "localhost"; // on rentre sur notre serveur 
$username = "root"; // username par défault de l'admin des bases de données
$password = "";

try {
  $bdd  = new PDO("mysql:host=$servername;dbname=voyages_blog", $username, $password);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // se mettre en error mode pour nous préciser le type d'erreurs
  echo "";
} catch (PDOException $e) {
  echo "Erreur : " . $e->getMessage();
}
