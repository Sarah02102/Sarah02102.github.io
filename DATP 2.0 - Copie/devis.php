<?php
// Initialisation des variables
$last_name = '';
$first_name = '';
$mail = '';
$phone = '';
$adress = '';
$zip_code = '';
$city = '';
$project = '';
$type = '';
$surface = '';
$date = '';
$budget = '';
$details = '';
$questions = '';


// Si le formulaire a été soumis, récupérer les valeurs
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $last_name = isset($_POST["last_name"]) ? htmlspecialchars($_POST["last_name"]) : '';
  $first_name = isset($_POST["first_name"]) ? htmlspecialchars($_POST["first_name"]) : '';
  $mail = isset($_POST["mail"]) ? htmlspecialchars($_POST["mail"]) : '';
  $phone = isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : '';
  $adress = isset($_POST["adress"]) ? htmlspecialchars($_POST["adress"]) : '';
  $zip_code = isset($_POST["zip_code"]) ? htmlspecialchars($_POST["zip_code"]) : '';
  $city = isset($_POST["city"]) ? htmlspecialchars($_POST["city"]) : '';
  $project = isset($_POST["project"]) ? htmlspecialchars($_POST["project"]) : '';
  $type = isset($_POST["type"]) ? htmlspecialchars($_POST["type"]) : '';
  $surface = isset($_POST["surface"]) ? htmlspecialchars($_POST["surface"]) : '';
  $date = isset($_POST["date"]) ? htmlspecialchars($_POST["date"]) : '';
  $budget = isset($_POST["budget"]) ? htmlspecialchars($_POST["budget"]) : '';
  $details = isset($_POST["details"]) ? htmlspecialchars($_POST["details"]) : '';
  $questions = isset($_POST["questions"]) ? htmlspecialchars($_POST["questions"]) : '';
}

require "devis.html.php";
