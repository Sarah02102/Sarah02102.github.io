<?php

require "sql.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Récupérer les champs du tableau $_POST en traitant la faille de sécurité XSS
  $nom = strip_tags($_POST["nom"]);
  $prenom = strip_tags($_POST["prenom"]);
  $email = strip_tags($_POST["email"]);
  $message = strip_tags($_POST["message"]);
  // Tester si tous les champs sont remplis
  if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($message)) {
    try {
      // Insertion dans la table
      $requete = $bdd->prepare("INSERT INTO formulaire_contact VALUES (0, :nom, :prenom, :email, :message)");
      $requete->execute([
        "nom" => $nom,
        "prenom" => $prenom,
        "email" => $email,
        "message" => $message,
      ]);
      
      // Envoi du mail avec PHPMailer
      require 'traitement.php';
      
      // Redirection vers la page de confirmation
      header("Location: compte.html.php?success=1");
      exit();
    } catch (PDOException $e) {
      echo '<p>Erreur : ' . $e->getMessage() . '</p>';
    }
  } else {
    echo '<p>Veuillez remplir tous les champs requis</p>';
  }
}

// Inclure le template HTML
require "index.html.php";
?>