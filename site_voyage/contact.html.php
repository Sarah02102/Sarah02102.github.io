<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ok'])) {
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de contact</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <header>
    <nav class="navbar">
      <div class="nav-content">
        <a href="index.html.php">
          <div class="logo">VOYAGES</div>
        </a>
    </nav>
    <header>



      <div class="contact-page">
        <div class="contact-container">
          <div class="contact-header">
            <h1>Formulaire de contact</h1>
            <p class="contact-subtitle">Veuillez rentrer vos informations.</p>
            <p>Nous vous enverrons un mail pour confirmer votre inscription.</p>
          </div>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="contact">
            <label for="nom">Votre nom</label>
            <input type="text" id="nom" name="nom" placeholder="Nom" required value="<?= $nom; ?>">
            <br>
            <label for="prenom">Votre prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Prénom" required value="<?= $prenom; ?>">
            <br>
            <label for="email">Votre e-mail</label>
            <input type="email" id="email" name="email" max="200" placeholder="E-mail" required value="<?= $email; ?>">
            <br>
            <label for="message">Votre message</label>
            <input type="message" id="message" name="message" placeholder="Message" required value="<?= $message; ?>">
            <input type="checkbox" id="newsletter" name="newsletter" value="yes" required>
            <label for="rgpd"><a href="">En soumettant ce formulaire, j'accepte la politique de confidentialité du site et que les informations saisies soient exploitées dans le cadre de ma demande de contact.</a></label>
            <br>
            <button type="submit" name="ok">Envoyer</button>
            <br>
            <?php
            if (isset($nom) && isset($prenom) && isset($email) && isset($message) && !empty($nom) && !empty($prenom) && !empty($email) && !empty($message)) {
              echo "Merci pour votre inscription $prenom $nom, vous recevrez un mail d'ici peu à l'adresse suivante $email";
            }
            ?>

          </form>
        </div>
      </div>

      <footer>
        <p>Site développé par Sarah Fayet - <a href="mention.html">Mention légales</a> - <a href="politique.html">Politique de cofidentialité</a></p>
      </footer>


</body>

</html>