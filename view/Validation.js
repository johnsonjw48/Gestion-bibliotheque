
let formulaire = document.getElementById("formulaire");

formulaire.addEventListener("submit", function (event) {
  
  let prenom = document.getElementById("prenom");
   let nomConforme= /^[a-zA-Z-\s]+$/;

  if (prenom.value.trim() =="") {
   
   let myError = document.getElementById("error");
   myError.innerHTML= "Le champs prénom est réquis.";
   myError.style.color='red';

  	event.preventDefault();

  } else if (nomConforme.test(prenom.value) == false) {
   let myError = document.getElementById("error");
   myError.innerHTML= "Le nom ou prénom doit comporter des lettres et des tirets uniquement.";
   myError.style.color='red';
   event.preventDefault();

  } 


 });