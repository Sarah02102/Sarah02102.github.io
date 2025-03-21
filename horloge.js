"use strict";

function afficherHeure() {
	// Heure système
	const now = new Date();
	//console.log(now);
	// Récupérer heure, minutes et secondes
	const heures = now.getHours();
	const minutes = now.getMinutes();
	const secondes = now.getSeconds();
	console.log(heures, minutes, secondes);
	// Calcul des angles pour les aiguilles
	const angleHeure = (heures * 30) + (minutes / 2);
	const angleMinute = minutes * 6;
	const angleSeconde = secondes * 6;
	// Rotation des aiguilles
	rotate('heure', angleHeure);
	rotate('minute', angleMinute);
	rotate('seconde', angleSeconde);
}

function rotate(classe, angle) {
	document.querySelector(`.${classe}`).style.transform = `rotate(${angle}deg)`;
}

// CODE PRINCIPAL

document.addEventListener("DOMContentLoaded", function () {
	// affichage initial
	afficherHeure();
	// Raffraichir toutes les secondes
	window.setInterval(afficherHeure, 1000);
})