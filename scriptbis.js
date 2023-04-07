//=============== START - DECLARATION DU FORMULAIRE ===============//
(function() {
  'use strict'

  // Déclaration du formulaire
  let form = document.getElementById('contactForm');

  // Ecoute de l'action submit, et lancement de la fonction
  form.addEventListener('submit', function(event) {
      
      Array.from(form.elements).forEach((input) => { // Fais un tableau de tous les éléments du form, boucle dessur sur les input,
          if (input.type !== "submit") { // si l'input n'est pas de type submit,
              if (!validateFields(input)) { // si validateFields retourne false (!validateFields(input) === false)
                  
                  event.preventDefault();   // Empêche le comportement par défaut
                  event.stopPropagation();  // Empêche que l'évènement ne se propage plus loin dans les phases de capture et de déploiement (submit).
                  
                  input.classList.remove("is-valid");     // Enlève la classe BS p qui définit la couleur de validation
                  input.classList.add("is-invalid");      // Ajoute la classe BS p qui définit la couleur d'invalidation
                  input.nextElementSibling.style.display = 'block';     // Affiche l'élement qui est juste après l'input (message d'erreur) et le met en block;
              } 
              else {
                  input.nextElementSibling.style.display = 'none';  // Tout pareil mais dans l'autre sens.
                  input.classList.remove("is-invalid");
                  input.classList.add("is-valid");
              }
          }
      });
  }, false)
})()

//=============== END - DECLARATION DU FORMULAIRE ===============//

//============= START =  FONCTIONS DE VALIDATIONS ==============\\

// Validation d'un champ required
function validateRequired(input) {
return !(input.value == null || input.value == "");
} /* Fonction qui retourne TRUE ou FALSE. (booléen) => Si l'input n'est pas null ou vide, alors retourne TRUE.
Traduction : Si (la valeur de l'input est null) OU que (la valeur de l'input est vide), et qu'on a l'inverse de ça ! (donc que l'input n'est pas null ou vide), alors ça retourne TRUE. Sinon ça retourne FALSE. */

// Validation du nombre de caractères : MIN & MAX
function validateLength(input, minLength, maxLength) {
return !(input.value.length < minLength || input.value.length > maxLength);
}       // Si la longueur de la valeur de l'input n'est pas plus petite que la minLength,
      // ou si la longueur de la valeur de l'input n'est pas plus grande que la maxLength,
      // alors retourne TRUE.

// Validation des caractères LATIN && LETTRES
function validateText(input) {
return input.value.match("^[A-Za-zéèêà]+s*$");
}

// Validation d'un e-mail
function validateEmail(input) {
let EMAIL = input.value;
let POSAT = EMAIL.indexOf("@");
let POSDOT = EMAIL.lastIndexOf(".");

return !(POSAT < 1 || (POSDOT - POSAT < 2))
}

// Validation d'un code postal
function validatePostCode(input) {
return input.value.match("^(0[1-9]|[1-9][0-9])[0-9][0-9][0-9]$");
}

// Validation de l'adresse
function validateAdress(input) {
return input.value.match(/^\s*\S+(?:\s+\S+){2}/)
}

// Validation de la ville
function validateCity(input) {
return input.selectedIndex;
}

// Validation du numéro de téléphone
function validatePhoneNumber(input) {
return input.value.match(/^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/);
}

// Validation d'un checkbox
function validateTerms(input) {
return input.checked;
}

//======== END =  FONCTIONS DE VALIDATIONS ================\\


//======== START =  VALIDATION DES CHAMPS DU FORMULAIRE ================\\

function validateFields(input) {       // FONCTION utilisée au tout début du code dans la déclaration du formulaire

let fieldName = input.name;

// Validation de l'input PRENOM et NOM
if (fieldName == "firstName" || fieldName == 'lastName') {
    if (!validateRequired(input)) {    // Si l'inverse du booléen validateRequired retourne TRUE (donc qui vaudra FALSE)
        return false;
    }
  
    if (!validateLength(input, 2, 20)) {
      return false;
    }
  
    if (!validateText(input)) {
      return false;
    }
  
    return (true);
}

// Validation de l'input email
if (fieldName == "email") {

  if (!validateRequired(input)) {
    return false;
  }

  if(!validateEmail(input)) {
    return false;
  }

  return true;
}

// Validation du code postal
if (fieldName == "postCode") {

  if (!validateRequired(input)) {
    return false;
  }

  if(!validatePostCode(input)) {
    return false;
  }

  return true;
}

// Validation de l'adresse
if (fieldName == "address") {

  if (!validateRequired(input)) {
    return false;
  }

  if(!validateAdress(input)) {
    return false;
  }

  return true;
}

// Validation de la ville
if (fieldName == "city") {

  if (!validateRequired(input)) {
    return false;
  }

  if(!validateCity(input)) {
    return false;
  }

  return true;
}


// Validation du numéro de téléphone
if (fieldName == "phoneNumber") {

  if (!validateRequired(input)) {
    return false;
  }

  if(!validatePhoneNumber(input)) {
    return false;
  }

  return true;
}

// Validation d'un checkbox
if (fieldName == "conditions") {

  if (!validateRequired(input)) {
    return false;
  }

  if(!validateTerms(input)) {
    return false;
  }

  return true;
}
}

//======== END =  VALIDATION DES CHAMPS DU FORMULAIRE ================\\
