<?php

require "sql.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Récupérer les champs du tableau $_POST en traitant la faille de sécurité XSS
  $last_name = strip_tags($_POST["last_name"]);
  $first_name = strip_tags($_POST["first_name"]);
  $mail = strip_tags($_POST["mail"]);
  $phone = strip_tags($_POST["phone"]);
  $adress = strip_tags($_POST["adress"]);
  $zip_code = strip_tags($_POST["zip_code"]);
  $city = strip_tags($_POST["city"]);
  $project = strip_tags($_POST["project"]);
  $type = strip_tags($_POST["type"]);
  $surface = strip_tags($_POST["surface"]);
  $date = strip_tags($_POST["date"]);
  $budget = strip_tags($_POST["budget"]);
  $details = strip_tags($_POST["details"]);
  $questions = strip_tags($_POST["questions"]);


  // Tester si tous les champs sont remplis
  if (!empty($last_name)  && !empty($first_name) && !empty($mail)  && !empty($phone) && !empty($adress)  && !empty($zip_code)  && !empty($city)  && !empty($project)  && !empty($type)  && !empty($surface)  && !empty($date) && !empty($budget)  && !empty($details)  && !empty($questions)) {
    try {
      // Insertion dans la table
      $requete = $bdd->prepare("INSERT INTO devis VALUES (0, :last_name, :first_name, :mail, :phone, :adress, :zip_code, :city, :project, :type, :surface, :date, :budget, :details, :questions)");
      $requete->execute([
        "last_name" => $last_name,
        "first_name" => $first_name,
        "mail" => $mail,
        "phone" => $phone,
        "adress" => $adress,
        "zip_code" => $zip_code,
        "city" => $city,
        "project" => $project,
        "type" => $type,
        "surface" => $surface,
        "date" => $date,
        "budget" => $budget,
        "details" => $details,
        "questions" => $questions
      ]);

      // Envoi du mail avec PHPMailer
      require 'traitement.php';

      // Redirection vers la page de confirmation
      header("Location: devis.html.php?success=1");
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
