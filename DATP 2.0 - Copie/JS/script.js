"use strict";
// Ce fichier remplace animations.js, init-script.js et main-script.js

// Attendre que la page soit complètement chargée avant d'exécuter le code
document.addEventListener("DOMContentLoaded", function () {
  // 1. ANIMATION DU TITRE PRINCIPAL
  // Cette fonction fait apparaître le titre lettre par lettre
  const titre = document.querySelector("#accueil h1");
  if (titre) {
    const texteComplet = titre.textContent; // On récupère le texte Sauvegarde du texte original
    titre.textContent = ""; // Vide le contenu pour l'animation

    let index = 0;
    // Fonction qui ajoute une lettre à la fois
    function afficherLettre() {
      if (index < texteComplet.length) {
        titre.textContent += texteComplet.charAt(index);
        index++;
        setTimeout(afficherLettre, 50); //Méthode qui déclanche une minuterie après un délai exprimé en millisecondes. Attendre 50ms avant d'ajouter la lettre suivante
      }
    }

    afficherLettre(); // Démarre l'animation
  }

  // 2. VALIDATION DU FORMULAIRE DE CONTACT
  const formulaire = document.querySelector("#contact form");
  if (formulaire) {
    formulaire.addEventListener("submit", function (e) {
      e.preventDefault(); // Empêche l'envoi du formulaire par défaut (envoyer le formulaire et de recharger la page) // sans ça le formulaire ne passe même pas dans le javascript

      // Vérifie les champs obligatoires
      const champsObligatoires = formulaire.querySelectorAll(
        "input[required], textarea[required]"
      );

      let formulaireValide = true;

      // Vérifier chaque champ obligatoire
      champsObligatoires.forEach(function (champ) {
        // for each qui parcour tout éléments de la boucle, n'a pas de compteurs
        if (champ.value.trim() === "") {
          // vérifie si la valeur du champs est une string vide
          // trim s'assure de la suppression des espaces dans une string
          formulaireValide = false;
          // Ajouter une classe d'erreur pour mettre en évidence le champ
          champ.classList.add("erreur");
        } else {
          // Retirer la classe d'erreur si le champ est correctement rempli
          champ.classList.remove("erreur");
        }
      });
      // Si tout est valide, affiche un message et réinitialise le formulaire
      if (formulaireValide) {
        alert("Votre message a été envoyé avec succès !");
      } else {
        alert("Veuillez remplir correctement tous les champs obligatoires.");
      }
    });
  }

  // 3. VALIDATION DU FORMULAIRE DE DEVIS
  const devis = document.querySelector("#devis-form");
  if (devis) {
    devis.addEventListener("submit", function (e) {
      e.preventDefault();

      const required = devis.querySelectorAll(
        "input[required], textarea[required]"
      );

      let devisValide = true;

      required.forEach(function (champ) {
        if (champ.value.trim() === "") {
          devisValide = false;
          champ.classList.add("erreur");
        } else {
          champ.classList.remove("erreur");
        }
      });
      if (devisValide) {
        alert("Votre demande de devis a été envoyé avec succès !");
      } else {
        alert("Veuillez remplir correctement tous les champs obligatoires.");
      }
    });
  }

  //4 . MISE À JOUR DE L'ANNÉE DANS LE COPYRIGHT
  const copyright = document.querySelector(".copyright p");
  if (copyright) {
    const anneeActuelle = new Date().getFullYear(); // new Date nous donne la date d'ajd yyyy/mm/dd et le get full year récupère que l'année
    copyright.textContent = `© ${anneeActuelle} DATP - Tous droits réservés`;
  }
});
