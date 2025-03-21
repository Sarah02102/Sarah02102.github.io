"use strict";

// Définition un tableau qui va contenir la liste des courses
let listeCourses = [];
// Zone d'affichage pour le debug


//
// DÉFINITION DES FONCTIONS
//

function ajouter() {

	let aliment = document.getElementById("produit").value.toLowerCase().trim()
	console.log('Ajouter' + aliment);
	if (listeCourses.indexOf(aliment) === -1) {
		listeCourses.push(aliment)

	}
	afficher()
}

function trier() {
	console.log('Trier');
	listeCourses.sort()
	afficher()
}

function supprimer() {
	console.log('Supprimer');
	const elements = document.querySelectorAll("li.selected")
	for (const element of elements) {
		const index = listeCourses.indexOf(element.innerText)
		console.log('index');
		listeCourses.splice(index, 1)
	}
	afficher()
}

function vider() {
	console.log('Vider');
	listeCourses = []
	afficher()
}

function afficher() {
	const detail = document.getElementById("detail")
	detail.innerHTML = ''
	const ul = document.createElement("ul")
	detail.appendChild(ul)
	console.log(listeCourses);
	for (const element of listeCourses) {
		console.log(element)
		const li = document.createElement("li")
		ul.appendChild(li)
		li.innerText = element
	}
	if (listeCourses.length > 0)
		document.querySelector(".legende").innerText = listeCourses.length + " produit(s)"


	else
		document.querySelector(".legende").innerText = "La liste est vide"
}

function SelectionProduit(event) {
	const produit = event.target.closest("li")
	console.log(produit)
	produit.classList.toggle("selected")
}
//
// CODE PRINCIPAL
//

// Écouteur d'événement sur le chargement de la page
document.addEventListener("DOMContentLoaded", function () {
	// Effacer le contenu de la console

	// Récupérer la zone de debug

	// Définition des écouteurs d'événements sur les boutons
	let ajout = document.getElementById("btnAjouter")
	let tri = document.getElementById("btnTrier")
	let suppri = document.getElementById("btnSupprimer")
	let vi = document.getElementById("btnVider")
	let detail = document.getElementById("detail")
	ajout.addEventListener("click", ajouter)


	tri.addEventListener("click", trier)


	suppri.addEventListener("click", supprimer)


	vi.addEventListener("click", vider)

	detail.addEventListener("click", SelectionProduit)

	// Trigger de ajout si entrée sur le champ produit
	document.getElementById("produit").addEventListener("keyup", function (ev) {
		//console.log(ev.code);
		if (ev.code === 'Enter' || ev.code === 'NumpadEnter') {
			// Trigger du click sur le bouton Ajouter
			document.getElementById("btnAjouter").click();
		}
	});
});
