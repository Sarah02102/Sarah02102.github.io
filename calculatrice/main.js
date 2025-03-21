"use strict";

// Définition de la fonction
function operation(event) {
    event.preventDefault();
    let nbr1 = parseInt(document.getElementById("nbr1").value);
    let nbr2 = parseInt(document.getElementById("nbr2").value);
    //let operateur = document.getElementsByName("choix");
    let operateur = document.querySelector('input[name="choix"]:checked').value;
    console.log(nbr1, nbr2, operateur);
    let result;
    switch (operateur) {
        case "+":
            result = nbr1 + nbr2;
            break;
        case "-":
            result = nbr1 - nbr2;
            break;
        case "*":
            result = nbr1 * nbr2;
            break;
        case "/":
            if (nbr2 !== 0) {
                result = nbr1 / nbr2;
            }
            else {
                result = 'Division par zéro impossible';
            }
            break;
        default:
            console.log(`Opérateur invalide`);
    }
    console.log(result);
    const display = document.querySelector("#result span");
    display.innerText = result;
}

//
// CODE PRINCIPAL
//

// Écouteur d'événement sur le chargement de la page
document.addEventListener("DOMContentLoaded", function () {
    // Ajout d'un écouteur d'événement sur le bouton
    const button = document.getElementById("btnCalc");
    btnCalc.addEventListener("click", operation);
});