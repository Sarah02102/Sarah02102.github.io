<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DATP - Demande de devis</title>
  <link rel="stylesheet" href="devis.css" />

  <style>
    @import url("https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap");
  </style>

  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <div class="header-container">
      <div class="logo">
        <h1>Décoration. Application. Teinture. Peinture</h1>
        <p>Demande de devis personnalisé</p>
      </div>
      <div class="back-button">
        <a href="index.html"><i class="fas fa-arrow-left"></i> Retour à l'accueil</a>
      </div>
    </div>
  </header>

  <section id="devis-intro" class="container">
    <div class="row">
      <div class="col-12">
        <h2>Votre projet sur mesure</h2>
        <p>
          Grâce à ce formulaire, vous pourrez nous détailler votre projet de
          travaux de peinture, revêtement ou plâtrerie. Notre vous
          recontacteront dans les plus brefs délais pour établir un devis
          personnalisé adapté à vos besoins.
        </p>
      </div>
    </div>
  </section>

  <section id="devis-form" class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="form-container">
          <h3>Formulaire de demande de devis</h3>
          <p class="form-note">
            (*) Veuillez remplir tous les champs obligatoires
          </p>

          <form id="devisForm">
            <!-- Informations personnelles -->
            <div class="form-section">
              <h4>Informations personnelles</h4>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nom">Nom (*)</label>
                    <input
                      id="nom"
                      name="nom"
                      type="text"
                      placeholder="Votre nom"
                      required />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="prenom">Prénom (*)</label>
                    <input
                      id="prenom"
                      name="prenom"
                      type="text"
                      placeholder="Votre prénom"
                      required />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Email (*)</label>
                    <input
                      id="email"
                      name="email"
                      type="email"
                      placeholder="Votre adresse email"
                      required />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="telephone">Téléphone (*)</label>
                    <input
                      id="telephone"
                      name="telephone"
                      type="tel"
                      placeholder="Votre numéro de téléphone"
                      required />
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="adresse">Adresse (*)</label>
                <input
                  id="adresse"
                  name="adresse"
                  type="text"
                  placeholder="Votre adresse"
                  required />
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="code-postal">Code postal (*)</label>
                    <input
                      id="code-postal"
                      name="code-postal"
                      type="text"
                      placeholder="Code postal"
                      required />
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="form-group">
                    <label for="ville">Ville (*)</label>
                    <input
                      id="ville"
                      name="ville"
                      type="text"
                      placeholder="Ville"
                      required />
                  </div>
                </div>
              </div>
            </div>

            <!-- Informations sur le projet -->
            <div class="form-section">
              <h4>Votre projet</h4>

              <div class="form-group">
                <label>Type de prestation (*)</label>
                <div class="checkbox-grid">
                  <div class="checkbox-item">
                    <input
                      type="checkbox"
                      id="peinture-int"
                      name="prestation"
                      value="peinture-interieure" />
                    <label for="peinture-int">Peinture intérieure</label>
                  </div>
                  <div class="checkbox-item">
                    <input
                      type="checkbox"
                      id="peinture-ext"
                      name="prestation"
                      value="peinture-exterieure" />
                    <label for="peinture-ext">Peinture extérieure</label>
                  </div>
                  <div class="checkbox-item">
                    <input
                      type="checkbox"
                      id="revetement"
                      name="prestation"
                      value="revetement" />
                    <label for="revetement">Revêtement de sol</label>
                  </div>
                  <div class="checkbox-item">
                    <input
                      type="checkbox"
                      id="platerie"
                      name="prestation"
                      value="platerie" />
                    <label for="platerie">Plâtrerie/Isolation</label>
                  </div>
                  <div class="checkbox-item">
                    <input
                      type="checkbox"
                      id="autre"
                      name="prestation"
                      value="autre" />
                    <label for="autre">Autre</label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="type-bien">Type de bien (*)</label>
                <select id="type-bien" name="type-bien" required>
                  <option value="">Sélectionnez...</option>
                  <option value="appartement">Appartement</option>
                  <option value="maison">Maison</option>
                  <option value="local-commercial">Local commercial</option>
                  <option value="bureau">Bureau</option>
                  <option value="autre">Autre</option>
                </select>
              </div>

              <div class="form-group">
                <label for="superficie">Superficie approximative (m²) </label>
                <input
                  id="superficie"
                  name="superficie"
                  type="number"
                  placeholder="Surface en m²"
                  min="1" />
              </div>

              <div class="form-group">
                <label for="date-souhaitee">Date souhaitée des travaux</label>
                <input
                  id="date-souhaitee"
                  name="date-souhaitee"
                  type="date" />
              </div>

              <div class="form-group">
                <label for="budget">Budget estimatif (€)</label>
                <input
                  id="budget"
                  name="budget"
                  type="number"
                  placeholder="Votre budget approximatif"
                  min="0" />
              </div>
            </div>

            <!-- Description détaillée -->
            <div class="form-section">
              <h4>Description détaillée de votre projet</h4>

              <div class="form-group">
                <label for="description">Décrivez votre projet en détail (*)</label>
                <textarea
                  id="description"
                  name="description"
                  rows="5"
                  placeholder="Merci de décrire précisément vos besoins (type de travaux, état actuel, contraintes particulières, etc.)"
                  required></textarea>
              </div>

              <div class="form-group">
                <label for="commentaires">Remarques ou questions complémentaires</label>
                <textarea
                  id="commentaires"
                  name="commentaires"
                  rows="3"
                  placeholder="Toute information complémentaire utile à votre demande"></textarea>
              </div>
            </div>

            <div class="checkbox-container">
              <input type="checkbox" id="rgpd" name="rgpd" required />
              <label for="rgpd" class="checkbox-text">
                (*) En soumettant ce formulaire, j'accepte que les
                informations saisies soient exploitées dans le cadre de ma
                demande de devis et de la relation commerciale qui peut en
                découler.
              </label>
            </div>

            <div class="form-actions">
              <button type="reset" class="btn-reset">Réinitialiser</button>
              <button type="submit" class="btn-submit">
                Envoyer ma demande
              </button>
            </div>
            <?php
            if (isset($last_name) && isset($first_name) && isset($mail) && isset($phone) && isset($adress) && isset($zip_code) && isset($city) && isset($project) && isset($type) && isset($surface) && isset($date) && isset($budget) && isset($details) && isset($questions) && !empty($last_name)  && !empty($first_name) && !empty($mail)  && !empty($phone) && !empty($adress)  && !empty($zip_code)  && !empty($city)  && !empty($project)  && !empty($type)  && !empty($surface)  && !empty($date) && !empty($budget) && !empty($details) && !empty($questions)) {
              echo "Merci pour votre demande de devis $first_name $last_name, vous recevrez un mail d'ici peu à l'adresse suivante $mail";
            }
            ?>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>DATP</h3>
          <p>Décoration. Application. Teinture. Peinture</p>
          <p>Entreprise de peinture depuis 1995</p>
        </div>
        <div class="col-md-4">
          <h3>Contact</h3>
          <p>
            <i class="fa-solid fa-location-dot"></i> 14 rue de Cessey, 21560
            Remilly-sur-Tille
          </p>
          <p><i class="fa-solid fa-mobile"></i> 06.14.59.56.52</p>
          <p><i class="fa-solid fa-envelope"></i> datp.jpfayet@gmail.com</p>
        </div>
        <div class="col-md-4">
          <h3>Liens utiles</h3>
          <ul>
            <li><a href="index.html#interieur">Nos services</a></li>
            <li><a href="index.html#contact">Contact</a></li>
            <li><a href="devis.html">Demande de devis</a></li>
          </ul>
        </div>
      </div>
      <div class="copyright">
        <p>2025 DATP - Tous droits réservés</p>
        <p>
          Site développé par Sarah Fayet -
          <a href="mention.html">Mention légales</a> -
          <a href="politique.html">Politique de cofidentialité</a>
        </p>
      </div>
    </div>
  </footer>

  <script src="JS/script.js"></script>
</body>

</html>