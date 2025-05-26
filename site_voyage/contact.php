<?php
// Initialisation des variables
$nom = '';
$prenom = '';
$email = '';
$message = '';

// Si le formulaire a été soumis, récupérer les valeurs
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nom = isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : '';
  $prenom = isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : '';
  $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : '';
  $message = isset($_POST["message"]) ? htmlspecialchars($_POST["message"]) : '';
}

require "contact.html.php";
