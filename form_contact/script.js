// const elmt = document.querySelector('section h1');
// elmt.classList.remove('red');
// console.log(elmt.innerText);
// const stats = document.querySelectorAll('.stat');
// stats.forEach(stat => {
//   stat.classList.add('show');
//   stat.addEventListener('mouseenter', e => {
//      stat.classList.add('grow'); 
//   });
// });

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


// const testimonies = document.querySelectorAll('.testimony');
// testimonies.forEach((testimony, index) => {  
//   testimony.addEventListener('mouseenter', e => {
//    testimony.classList.add('hover');
//   });
//   if (index === 0) testimony.classList.add('active');
// });

// const prevBtn = document.querySelector('.prev');
// const nextBtn = document.querySelector('.next');

// let activeTestimony = 0;

// prevBtn.addEventListener('click', () => {
//   activeTestimony--;  
//   animateTestimony();
// });

// nextBtn.addEventListener('click', () => {
//   activeTestimony++;  
//   animateTestimony();
// });

// function animateTestimony() {
//   const actTestimony = document.querySelector('.testimony.active');
//   actTestimony.classList.remove('active');

//   const testimoniesLength = testimonies.length;
//   activeTestimony = (activeTestimony % testimoniesLength + testimoniesLength) % testimoniesLength;

//   const nextTestimony = testimonies[activeTestimony];
//   nextTestimony.classList.add('active');
// }


function envoyerWhatsApp(event) {
  event.preventDefault(); // Empêche la soumission du formulaire par défaut

  // Récupérer les valeurs du formulaire
// Récupération des valeurs des champs du formulaire
var nom = document.getElementById('nom').value;
var prenom = document.getElementById('prenom').value;
var email = document.getElementById('email').value;
var country_code = document.getElementById('country_code').value;
var phoneNumber = document.getElementById('telephone').value;
var telephone = country_code + phoneNumber;
var statut = document.getElementById('statut').value;
var date_naissance = document.getElementById('date_naissance').value;
var ville = document.getElementById('ville').value;
var pays = document.getElementById('pays').value;
var nombre_enfants = document.getElementById('nombre_enfants').value;
var noms_et_age_enfants = document.getElementById('noms_et_age_enfants').value;
// var competences_francais = document.getElementById('competences_francais').value;
// var competences_anglais = document.getElementById('competences_anglais').value;
var scolarite = document.getElementById('scolarite').value;
var diplomeFichier = document.getElementById('diplomeFichier').value;
var question1 = document.getElementById('question1').value;
var question2 = document.getElementById('question2').value;
var question3 = document.getElementById('question3').value;
var question4 = document.getElementById('question4').value;
var question5 = document.getElementById('question5').value;
var question6 = document.getElementById('question6').value;
var question7 = document.getElementById('question7').value;
var question8 = document.getElementById('question8').value;
var province_immigre = document.getElementById('province_immigre').value;
var question9 = document.getElementById('question9').value;
var question10 = document.getElementById('question10').value;
var type_immigration = document.getElementById('type_immigration').value;
var message = document.getElementById('message').value;
var nomEnMajuscules = nom.toUpperCase();
var prenomEnMajuscules = prenom.toUpperCase();



  // Construire le lien WhatsApp avec les informations du formulaire
  var numeroDestinataire = '681711540'; // Remplacez par le numéro de téléphone du destinataire
  var messageWhatsApp = "Salut, je me nomme " + nomEnMajuscules + " " + prenomEnMajuscules + " vivant actuellement au " + pays + " dans la ville de " + ville + " " + statut + " avec " + nombre_enfants + " enfant(s). J'ai soumis mon formulaire pour le programme d'immigration Canada via votre agence : Global Migration."
  
  var url = `https://wa.me/${numeroDestinataire}?text=${encodeURIComponent(messageWhatsApp)}`;

  // Envoi des données au fichier PHP via une requête AJAX
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'envoyer.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          // Réponse du serveur
          // Rediriger l'utilisateur vers WhatsApp
          window.open(url, "_blank");
      }
  };
  xhr.send(`nom=${encodeURIComponent(nom)}&prenom=${encodeURIComponent(prenom)}&email=${encodeURIComponent(email)}&telephone=${encodeURIComponent(telephone)}&statut=${encodeURIComponent(statut)}&date_naissance=${encodeURIComponent(date_naissance)}&ville=${encodeURIComponent(ville)}&pays=${encodeURIComponent(pays)}&nombre_enfants=${encodeURIComponent(nombre_enfants)}&noms_et_age_enfants=${encodeURIComponent(noms_et_age_enfants)}&scolarite=${encodeURIComponent(scolarite)}&diplomeFichier=${encodeURIComponent(diplomeFichier)}&question1=${encodeURIComponent(question1)}&question2=${encodeURIComponent(question2)}&question3=${encodeURIComponent(question3)}&question4=${encodeURIComponent(question4)}&question5=${encodeURIComponent(question5)}&question6=${encodeURIComponent(question6)}&question7=${encodeURIComponent(question7)}&question8=${encodeURIComponent(question8)}&province_immigre=${encodeURIComponent(province_immigre)}&question9=${encodeURIComponent(question9)}&question10=${encodeURIComponent(question10)}&type_immigration=${encodeURIComponent(type_immigration)}&message=${encodeURIComponent(message)}`);
}