
// const form = document.querySelector("form");

let myForm = document.getElementById('myForm');

myForm.addEventListener("submit", (e) => {

  // REGEX nom
    let nom = document.getElementById("nu");
    let nomtxt = document.getElementById("nomtxt");


  if(/^[a-zA-Z-\s]+$/.test(nom.value) == false){
    document.getElementById("nomtxt").innerHTML = "Le nom est invalide";
    nomtxt.style.fontSize = "12px";
    e.preventDefault();
  }

  // REGEX prenom

  let prenom = document.getElementById("pu");
  let prenomtxt = document.getElementById("prenomtxt");

if(/^[a-zA-Z-\s]+$/.test(prenom.value) == false){
  document.getElementById("prenomtxt").innerHTML = "Le prenom est invalide";
  prenomtxt.style.fontSize = "12px";
  e.preventDefault();

}

// REGEX email

let email = document.getElementById("am");
let emailtxt = document.getElementById("emailtxt");

if(/^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/.test(email.value) == false){
document.getElementById("emailtxt").innerHTML = "L'email est invalide";
nomtxt.style.fontSize = "12px";
e.preventDefault();

}

// REGEX confirmemail

let confirmemail = document.getElementById("cam");
let confirmemailptxt = document.getElementById("confirmemailtxt");


if(email.value !== confirmemail.value){
document.getElementById("confirmemailtxt").innerHTML = "Les emails ne correspondent pas";
cmdptxt.style.fontSize = "12px";
e.preventDefault();

}


// REGEX motdepasse

let motdepasse = document.getElementById("mdp");
let mdptxt = document.getElementById("mdptxt");


if(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/.test(motdepasse.value) == false){
document.getElementById("mdptxt").innerHTML = "Le mot de passe est invalide";
mdptxt.style.fontSize = "12px";
e.preventDefault();

}

// REGEX confirmmotdepasse

let confirmmotdepasse = document.getElementById("cmdp");
let cmdptxt = document.getElementById("cmdptxt");


if(motdepasse.value !== confirmmotdepasse.value){
document.getElementById("cmdptxt").innerHTML = "Les mots de passe ne correspondent pas";
cmdptxt.style.fontSize = "12px";
e.preventDefault();

}

// REGEX idrole


let statutSelect = document.getElementById("statut");
let idRole = document.getElementById("idrole");

let selectedStatut = statutSelect.value;

if (selectedStatut === "2") {
idRole.value = "2"; 
// e.preventDefault();
} else if (selectedStatut === "3") {
idRole.value = "3"; 
// e.preventDefault();
}

});








