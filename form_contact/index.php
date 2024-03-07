<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="icon" type="image/x-icon" href="imageshtml/icon1.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact | Global-Migration</title>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> -->
	<link href="fontAwesome/css/fontawesome.css" rel="stylesheet">
	<link href="fontAwesome/css/brands.css" rel="stylesheet">
	<link href="fontAwesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" href="styles/styles-contact.css">
	<link rel="stylesheet" href="styles/styles.css">
 

</head>
<body>
<?php
  include 'header.php';
?>
<style>
	body {
	width: 100% !important;
    margin: 0 ;
	background-color: #fdfdfd !important;
	padding: 0;
	font-family: 'Roboto', Helvetica, Arial, Verdana, sans-serif!important;
	font-size: 16px;
	line-height: 1.5;
	color: #333;
	overflow-x: none;
	z-index: 2 !important;
	margin-top: 0; /* Hauteur de la barre de navigation */
}
	.contact input{
		height: 45px;
		padding: 10px; /* Ajoute du remplissage autour du texte */
		border: 2px solid #ccc; /* Ajoute une bordure */ 
		border-radius: 4px; /* Arrondit les coins */
		margin-bottom: 10px; /* Ajoute un espace entre les inputs */
	}
	.contact select{
		height: 45px;
		padding: 10px; /* Ajoute du remplissage autour du texte */
		border: 2px solid #ccc; /* Ajoute une bordure */ 
		border-radius: 4px; /* Arrondit les coins */
		margin-bottom: 10px; /* Ajoute un espace entre les inputs */
	}
	.contact textarea{
		padding: 10px; /* Ajoute du remplissage autour du texte */
		border: 2px solid #ccc; /* Ajoute une bordure */ 
		border-radius: 4px; /* Arrondit les coins */
		margin-bottom: 10px; /* Ajoute un espace entre les inputs */
	}

.contact input.input-small {
  width: 150px; /* Définit une largeur plus petite */ 
}

.contact input.input-medium {
  width: 250px; /* Définit une largeur moyenne */
}

.contact input.input-large {
  width: 350px; /* Définit une largeur plus grande*/
}
.checkboxes-container {
  display: flex;
  flex-direction: row;
  margin-left: 5px;
}
.radio-label  {
  vertical-align: middle;
  margin-right: 30px;
  color: #000 !important;
  padding: 0, auto;
}
.container {
  width: 100%; /* Utilisation d'un pourcentage pour la largeur */
  padding: 1em; /* Utilisation de la valeur em pour les marges internes */
}
@media (max-width: 768px) {
  .container {
	max-width: 768px;
  margin: 0 auto;
  padding: 20px;
  }
  .radio-label {
  flex-basis: 50%;
  background-color: #fdfdfd;
  text-align: center;
  
}
  /* Ajustements spécifiques pour les éléments du formulaire */
  .form-group {
    margin-bottom: 10px; /* Réduire l'espace entre les groupes de formulaire */
  }

  .form-control {
    width: 100%; /* Définir la largeur du champ de saisie à 100% */
  }

  .btn {
    display: block; /* Afficher le bouton sur une ligne distincte */
    width: 100%; /* Utiliser toute la largeur disponible */
  }
}
.form-group {
  margin-bottom: 10px;
}

.form-group i {
  margin-right: 10px;
}

.checkboxes-container {
  display: flex;
  flex-wrap: wrap;
  padding: auto;
}

.radio-label {
  /* flex-basis: 50%; */
  background-color: #fdfdfd;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-left: 14px;
  
  
}
.radio-label:hover{
	background-color: #007bff;
}
.form-group label {
  /* ... */
  flex-grow: 1; /* Permettre au label de s'étendre pour occuper tout l'espace disponible */
  text-align: center; /* Centrer horizontalement le contenu du label */
}
</style>
	<div class="banner" style="width: max; height: 75vh;">
			<!-- <div class="overlay"></div> -->
			<div class="container">
				<h1 style="color: #fdfdfd !important; font-size: 40px;">Formulaire d'évaluation initiale </h1>
			</div>
		</div>
	<section class="contact" style="margin: 0; background-color: #fdfdfd; z-index: 2;">
		<div class="container" style="padding: 20px; background-color: #ccc; border-radius: 20px;">
			<!-- <div class="row"> -->
				<!-- <div class="col-md-2"></div> -->
				<div class="col-md-12">
					 
					<form class= "animate__animated animate__fadeIn" id="myForm">
					<script>
						window.addEventListener('load', function() {
							var form = document.querySelector('form');
							form.classList.add('animate__animated');
						});
					</script>
						<div class="form-group">
						<span><i class="fas fa-user"></i></span>
							<label for="nom">Nom</label>
							<input type="text" class="form-control" id="nom" tabindex="1" name="nom" autocomplete="name" placeholder='"veuillez entrer votre Nom"' required>
						</div>
						<div class="form-group">
						<span><i class="fas fa-user"></i></span>
							<label for="prenom">Prénom</label>
							<input type="text" class="form-control" id="prenom" tabindex="2" name="prenom"  placeholder='"veuillez entrer votre prenom"' required>
						</div>
						<div class="form-group">
						<span><i class="fas fa-envelope"></i></span>
							<label for="email">E-mail</label>
							<input type="email" class="form-control" id="email" tabindex="3" name="email" autocomplete="email" placeholder='"veuillez entrer un email valide"' required>
						</div>
						<style>
							.country_code {
							display: flex;
							}
							.country {
							flex: 1;
							border-top-right-radius: 0;
							border-bottom-right-radius: 0;
							}
						</style>
						
						<div class="form-group">
						<span><i class="fa fa-phone" aria-hidden="true"></i></span>
						<label for="telephone">Téléphone(WhatsApp)</label>
						<div class="input-group">
							<div class="input-group-prepend">
							<input type="text" class="form-control" id="country_code" name="country_code" value="+237" style="width: 70px; font-weight: bold; background-color: #e9eaeb;" required="">
							</div>
							<input type="tel" class="form-control" id="telephone" tabindex="4" name="telephone" autocomplete="phone" placeholder="" required="">
						</div>
						</div>
							


						<style>
							.form-control::placeholder {
							  font-size: 90%;
							  opacity: 0.7;
							}
						</style>
						<div class="form-group">
						<i class="fas fa-heart"></i>
							<label for="statut">Statut Matrimonial</label>
							<select class="form-control" id="statut" tabindex="5" name="statut" required="">
							<option value="">...</option>
							<option value="célibataire">Célibataire</option>
							<option value="marié">Marié(e)</option>
							<option value="divorcé">Divorcé</option>
							<option value="veuf">veuf(ve)</option>
							</select>
						</div>
						<div class="form-group">
						<span><i class="fas fa-calendar-alt"></i></span>
							<label for="date_naissance">Date de naissance</label>
							<input type="date" class="form-control" id="date_naissance" tabindex="6" name="date_naissance" placeholder="" required="">
						</div>

						<div class="form-group">
							<span><i class="fas fa-city"></i></span>
							<label for="ville">ville</label>
							<input type="text" class="form-control" id="ville" tabindex="7" name="ville" required="">
						</div>

						<div class="form-group">
						<span><i class="fas fa-globe-americas"></i></span>
							<label for="pays">Pays d'origine</label>
							<select class="form-control" id="pays" tabindex="8" name="pays" required="">
							<option value=""><span>Sélectionnez un pays</span></option>
							<option value="Afghanistan">Afghanistan</option>
							<option value="Afrique du Sud">Afrique du Sud</option>
							<option value="Albanie">Albanie</option>
							<option value="Algérie">Algérie</option>
							<option value="Allemagne">Allemagne</option>
							<option value="Andorre">Andorre</option>
							<option value="Angola">Angola</option>
							<option value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
							<option value="Arabie saoudite">Arabie saoudite</option>
							<option value="Argentine">Argentine</option>
							<option value="Arménie">Arménie</option>
							<option value="Australie">Australie</option>
							<option value="Autriche">Autriche</option>
							<option value="Azerbaïdjan">Azerbaïdjan</option>
							<option value="Bahamas">Bahamas</option>
							<option value="Bahreïn">Bahreïn</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Barbade">Barbade</option>
							<option value="Biélorussie">Biélorussie</option>
							<option value="Belgique">Belgique</option>
							<option value="Belize">Belize</option>
							<option value="Benin">Bénin</option>
							<option value="Bhoutan">Bhoutan</option>
							<option value="Bolivie">Bolivie</option>
							<option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
							<option value="Botswana">Botswana</option>
							<option value="Brésil">Brésil</option>
							<option value="Brunei">Brunei</option>
							<option value="Bulgarie">Bulgarie</option>
							<option value="Burkina Faso">Burkina Faso</option>
							<option value="Burundi">Burundi</option>
							<option value="Cambodge">Cambodge</option>
							<option value="Cameroun">Cameroun</option>
							<option value="Canada">Canada</option>
							<option value="Cap-Vert">Cap-Vert</option>
							<option value="République centrafricaine">République centrafricaine</option>
							<option value="Tchad">Tchad</option>
							<option value="Chili">Chili</option>
							<option value="Chine">Chine</option>
							<option value="Colombie">Colombie</option>
							<!-- ----------------------------------------------- -->
							<option value="Comores">Comores</option>
							<option value="République démocratique du Congo">République démocratique du Congo</option>
							<option value="République du Congo">République du Congo</option>
							<option value="Costa Rica">Costa Rica</option>
							<option value="Côte d'Ivoire">Côte d'Ivoire</option>
							<option value="Croatie">Croatie</option>
							<option value="Cuba">Cuba</option>
							<option value="Curaçao">Curaçao</option>
							<option value="Chypre">Chypre</option>
							<option value="République tchèque">République tchèque</option>
							<option value="Danemark">Danemark</option>
							<option value="Djibouti">Djibouti</option>
							<option value="Dominique">Dominique</option>
							<option value="République dominicaine">République dominicaine</option>
							<option value="Timor oriental">Timor oriental</option>
							<option value="Équateur">Équateur</option>
							<option value="Égypte">Égypte</option>
							<option value="El Salvador">El Salvador</option>
							<option value="Angleterre">Angleterre</option>
							<option value="Guinée équatoriale">Guinée équatoriale</option>
							<option value="Érythrée">Érythrée</option>
							<option value="Estonie">Estonie</option>
							<option value="Eswatini">Eswatini</option>
							<option value="Éthiopie">Éthiopie</option>
							<option value="États fédérés de Micronésie">États fédérés de Micronésie</option>
							<option value="Fidji">Fidji</option>
							<option value="Finlande">Finlande</option>
							<option value="France">France</option>
							<option value="Guyane française">Guyane française</option>
							<option value="Polynésie française">Polynésie française</option>
							<option value="Gabon">Gabon</option>
							<option value="Gambie">Gambie</option>
							<option value="Géorgie">Géorgie</option>
							<option value="Ghana">Ghana</option>
							<option value="Grèce">Grèce</option>
							<option value="Grenade">Grenade</option>
							<option value="Guatemala">Guatemala</option>
							<option value="Guinée">Guinée</option>
							<option value="Guinée-Bissau">Guinée-Bissau</option>
							<option value="Guyana">Guyana</option>
							<option value="Haïti">Haïti</option>
							<option value="Honduras">Honduras</option>
							<option value="Hongrie">Hongrie</option>
							<option value="Islande">Islande</option>
							<option value="Inde">Inde</option>
							<option value="Indonésie">Indonésie</option>
							<option value="Iran">Iran</option>
							<option value="Irak">Irak</option>
							<option value="Irlande">Irlande</option>
							<option value="Israël">Israël</option>
							<option value="Italie">Italie</option>
							<option value="Jamaïque">Jamaïque</option>
							<option value="Japon">Japon</option>
							<option value="Jordanie">Jordanie</option>
							<option value="Kazakhstan">Kazakhstan</option>
							<option value="Kenya">Kenya</option>
							<option value="Kiribati">Kiribati</option>
							<option value="Kosovo">Kosovo</option>
							<option value="Koweït">Koweït</option>
							<option value="Kirghizistan">Kirghizistan</option>
							<option value="Laos">Laos</option>
							<option value="Lettonie">Lettonie</option>
							<option value="Liban">Liban</option>
							<option value="Lesotho">Lesotho</option>
							<option value="Liberia">Liberia</option>
							<option value="Libye">Libye</option>
							<option value="Liechtenstein">Liechtenstein</option>
							<option value="Lituanie">Lituanie</option>
							<option value="Luxembourg">Luxembourg</option>
							<option value="République de Macédoine">République de Macédoine</option>
							<option value="Madagascar">Madagascar</option>
							<option value="Malawi">Malawi</option>
							<option value="Malaisie">Malaisie</option>
							<option value="Maldives">Maldives</option>
							<option value="Mali">Mali</option>
							<option value="Malte">Malte</option>
							<option value="Îles Marshall">Îles Marshall</option>
							<option value="Mauritanie">Mauritanie</option>
							<option value="Maurice">Maurice</option>
							<option value="Mexique">Mexique</option>
							<option value="États fédérés de Micronésie">États fédérés de Micronésie</option>
							<option value="Moldavie">Moldavie</option>
							<option value="Monaco">Monaco</option>
							<option value="Mongolie">Mongolie</option>
							<option value="Monténégro">Monténégro</option>
							<option value="Maroc">Maroc</option>
							<option value="Mozambique">Mozambique</option>
							<option value="Myanmar (Birmanie)">Myanmar (Birmanie)</option>
							<option value="Namibie">Namibie</option>
							<option value="Nauru">Nauru</option>
							<option value="Népal">Népal</option>
							<option value="ays-Bas">Pays-Bas</option>
							<option value="Nouvelle-Zélande">Nouvelle-Zélande</option>
							<option value="Nicaragua">Nicaragua</option>
							<option value="Niger">Niger</option>
							<option value="Nigeria">Nigeria</option>
							<option value="Corée du Nord">Corée du Nord</option>
							<option value="Irlande du Nord">Irlande du Nord</option>
							<option value="Norvège">Norvège</option>
							<option value="Oman">Oman</option>
							<option value="Pakistan">Pakistan</option>
							<option value="Palaos">Palaos</option>
							<option value="Palestine">Palestine</option>
							<option value="Panama">Panama</option>
							<option value="Papouasie-Nouvelle-Guinée">Papouasie-Nouvelle-Guinée</option>
							<option value="Paraguay">Paraguay</option>
							<option value="Pérou">Pérou</option>
							<option value="Philippines">Philippines</option>
							<option value="Pologne">Pologne</option>
							<option value="Portugal">Portugal</option>
							<option value="Qatar">Qatar</option>
							<option value="Roumanie">Roumanie</option>
							<option value="Russie">Russie</option>
							<option value="Rwanda">Rwanda</option>
							<option value="Saint-Christophe-et-Niévès">Saint-Christophe-et-Niévès</option>
							<option value="Sainte-Lucie">Sainte-Lucie</option>
							<option value="Saint-Vincent-et-les-Grenadines">Saint-Vincent-et-les-Grenadines</option>
							<option value="Samoa">Samoa</option>
							<option value="Saint-Marin">Saint-Marin</option>
							<option value="Sao Tomé-et-Principe">Sao Tomé-et-Principe</option>
							<option value="Écosse">Écosse</option>
							<option value="Sénégal">Sénégal</option>
							<option value="Serbie">Serbie</option>
							<option value="Seychelles">Seychelles</option>
							<option value="Sierra Leone">Sierra Leone</option>
							<option value="Singapour">Singapour</option>
							<option value="Slovaquie">Slovaquie</option>
							<option value="Slovénie">Slovénie</option>
							<option value="Îles Salomon">Îles Salomon</option>
							<option value="Somalie">Somalie</option>
							<option value="Corée du Sud">Corée du Sud</option>
							<option value="South Sudan">Soudan du Sud</option>
							<option value="Espagne">Espagne</option>
							<option value="Sri Lanka">Sri Lanka</option>
							<option value="Soudan">Soudan</option>
							<option value="Suriname">Suriname</option>
							<option value="Swaziland">Swaziland</option>
							<option value="Suède">Suède</option>
							<option value="Suisse">Suisse</option>
							<option value="Syrie">Syrie</option>
							<option value="Taïwan">Taïwan</option>
							<option value="Tadjikistan">Tadjikistan</option>
							<option value="Tanzanie">Tanzanie</option>
							<option value="Thaïlande">Thaïlande</option>
							<option value="Togo">Togo</option>
							<option value="Tonga">Tonga</option>
							<option value="Trinité-et-Tobago">Trinité-et-Tobago</option>
							<option value="Tunisie">Tunisie</option>
							<option value="Turquie">Turquie</option>
							<option value="Turkménistan">Turkménistan</option>
							<option value="Tuvalu">Tuvalu</option>
							<option value="Ouganda">Ouganda</option>
							<option value="Ukraine">Ukraine</option>
							<option value="Émirats arabes unis">Émirats arabes unis</option>
							<option value="Royaume-Uni">Royaume-Uni</option>
							<option value="États-Unis">États-Unis</option>
							<option value="Uruguay">Uruguay</option>
							<option value="Ouzbékistan">Ouzbékistan</option>
							<option value="Vanuatu">Vanuatu</option>
							<option value="Vatican">Vatican</option>
							<option value="Venezuela">Venezuela</option>
							<option value="Vietnam">Vietnam</option>
							<option value="Pays de Galles">Pays de Galles</option>
							<option value="Yémen">Yémen</option>
							<option value="Zambie">Zambie</option>
							<option value="Zimbabwe">Zimbabwe</option>
							</select>
						</div>
						<style>
							option > span {
							  color: gray;
							  font-size: 85%;
							  opacity: 0.5;
							}
						</style>

						<div class="form-group">
						<span><i class="fas fa-users"></i></span>
							<label for="nombre_enfants">Nombre d'enfants:</label>
							<input class="form-control" type="number" id="nombre_enfants" tabindex="9" name="nombre_enfants" min="0" max="30" value="0" required="" onchange="afficherNomsEnfants()">
						</div>

						<div class="form-group">
							<div id="champ_noms_enfants" style="display: none;">
							<span><i class="fas fa-pencil-alt"></i> </span>
							<label for="noms_et_age_enfants">Noms et Âges des enfants:</label>
							<textarea class="form-control" type="text" id="noms_et_age_enfants" name="noms_et_age_enfants" rows="2"></textarea></textarea>
							</div>
						</div>

						<script>
					function afficherNomsEnfants() {
					var nombreEnfants = document.getElementById("nombre_enfants").value;
					var champNomsEnfants = document.getElementById("champ_noms_enfants");

					if (nombreEnfants > 0) {
						champNomsEnfants.style.display = "block";
					} else {
						champNomsEnfants.style.display = "none";
					}
					}
					</script>


					<!-- <div class="form-group" style="  margin-bottom:  10px; ">
					<i class="fas fa-language"></i>
					<label>Compétences linguistiques </label>
					</div>
				 
										<div class="form-group">
						<i class="fas fa-language"></i>
						<label for="francais">Français:</label>
						<div class="checkboxes-container">
						<label class="radio-label" for="francais-langue-maternelle">Langue maternelle</label>
						<input type="radio" name="competences_francais" id="francais-langue-maternelle" tabindex="11" value="langue_maternelle">

						<label class="radio-label" for="francais-debutant">Débutant</label>
						<input type="radio" name="competences_francais" id="francais-debutant" value="debutant">

						<label class="radio-label" for="francais-bon">Bon</label>
						<input type="radio" name="competences_francais" id="francais-bon" value="bon">

						<label class="radio-label" for="francais-tres-bon">Très bon</label>
						<input type="radio" name="competences_francais" id="francais-tres-bon" value="tres_bon">

						<label class="radio-label" for="francais-expert">Expert</label>
						<input type="radio" name="competences_francais" id="francais-expert" value="expert">
						</div>
					</div>

					<div class="form-group">
						<i class="fas fa-language"></i>
						<label for="anglais">Anglais:</label>
						<div class="checkboxes-container">
						<label class="radio-label" for="anglais-langue-maternelle">Langue maternelle</label>
						<input type="radio" name="competences_anglais" id="anglais-langue-maternelle" tabindex="12" value="langue_maternelle">

						<label class="radio-label" for="anglais-debutant">Débutant</label>
						<input type="radio" name="competences_anglais" id="anglais-debutant" value="debutant">

						<label class="radio-label" for="anglais-bon">Bon</label>
						<input type="radio" name="competences_anglais" id="anglais-bon" value="bon">

						<label class="radio-label" for="anglais-tres-bon">Très bon</label>
						<input type="radio" name="competences_anglais" id="anglais-tres-bon" value="tres_bon">

						<label class="radio-label" for="anglais-expert">Expert</label>
						<input type="radio" name="competences_anglais" id="anglais-expert" value="expert">
						</div>
					</div>
  -->
			
					<!-- <br> -->

					<div class="form-group">
						<span><i class="fas fa-school"></i></span>
							<label for="scolarite">Votre scolarité</label>
							<select class="form-control" id="scolarite" tabindex="13" name="scolarite" required="">
							<option value=""><span>---Sélectionnez votre scolarité---</span></option>
							<option value="non_completees">Etudes secondaires non complétées</option>
							<option value="Baccalaureat">Diplôme d'études secondaires</option>
							<option value="Degre1">Degré, Diplôme ou certificat d'un an obtenu dans le cardre d'un programme a une université, un collège, une école technique ou autres institutions</option>
							<option value="Degre2">Degré, Diplôme ou certificat de deux ans obtenu dans le cardre d'un programme a une université, un collège, une école technique ou autres institutions</option>
							<option value="Licence">Licence ou autres programmes(trois ans ou plus) a une université, un collège, une école technique ou autres institutions</option>
							<option value="deux_certificats">Au moins deux certificats, Diplôme ou degré. Un doit avoir été obtenu dans le cardre d'un programe d'une durée de trois ans ou plus</option>
							<option value="deuxième_cycle">Diplôme d'étude universitaire de deuxième cycle ou Diplome professionnel requis pour la pratique au sein d'une profession décernant une qualification</option>
							<option value="troisieme_cycle">Diplôme universitaire de troisième cycle (Ph.D.) </option>
							</select>
				  </div>


				  <div class="form-group">
				  <i class="fa fa-file-text" aria-hidden="true"></i>
					 	<label for="diplomeFichier">Importer votre dernier Diplôme:</label>
  						<input type="file" id="diplomeFichier" tabindex="14" name="diplomeFichier" required="">
					 </div>

					<h3 style="text-align: center; text-decoration: underline; color: #000; margin-bottom: 25px;">Questionnaire</h3>

					<div class="form-group">
						<span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
							<label for="question1">Avez-vous déjà visité le Canada?</label>
							<select class="form-control" id="question1" tabindex="15" name="question1" required="">
							<option value=""><span>...</span></option>
							<option value="oui">Oui</option>
							<option value="non">Non</option>
							</select>
					 </div>
							
				  <div class="form-group">
						<span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
							<label for="question2">Possédez-vous un certificat de compétence d'une province, d'un territoire ou d’un organisme fédéral canadien?</label>
							<select class="form-control" id="question2" tabindex="16" name="question2" required="">
							<option value=""><span>...</span></option>
							<option value="oui">Oui</option>
							<option value="non">Non</option>
							</select>
					 </div>
							
						<div class="form-group">
						<span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
							<label for="question3">Au cours des dix dernières années, combien d'années d'expérience de travail qualifié possédez-vous ?</label>
							<input class="form-control" type="number" id="question3" tabindex="17" name="question3" min="0" max="30" value=" " required="" onchange="afficherNomsEnfants()">
						</div>

						<div class="form-group">
						<span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
							<label for="question4">Avez déjà été déclarés coupable dans une procédure criminelle, dans n’importe quel territoire de compétence, ou faites actuellement l’objet d’une telle procédure?</label>
							<select class="form-control" id="question4" tabindex="18" name="question4" required="">
							<option value=""><span>...</span></option>
							<option value="oui">Oui</option>
							<option value="non">Non</option>
							</select>
					 </div>

					 <div class="form-group">
						<span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
							<label for="question5">Avez déjà demandé l’asile au Canada ou demandé un visa d’immigrant ou de résident permanent canadien OU tout autre type de visa (p. ex. résident temporaire ou visiteur)?
</label>
							<select class="form-control" id="question5" tabindex="19" name="question5" required="">
							<option value=""><span>...</span></option>
							<option value="oui">Oui</option>
							<option value="non">Non</option>
							</select>
					 </div>

					 <div class="form-group">
						<span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
							<label for="question6">Vous êtes déjà vus refuser l’entrée au Canada OU dans un autre pays, ou avez déjà été frappés d’une mesure d’expulsion?</label>
							<select class="form-control" id="question6" tabindex="20" name="question6" required="">
							<option value=""><span>...</span></option>
							<option value="oui">Oui</option>
							<option value="non">Non</option>
							</select>
					 </div>

					 <div class="form-group">
						<span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
							<label for="question7">Avez pris part à un acte de génocide, un crime de guerre, un crime contre l’humanité ou à la profanation d’un bien religieux?</label>
							<select class="form-control" id="question7" tabindex="21" name="question7" required="">
							<option value=""><span>...</span></option>
							<option value="oui">Oui</option>
							<option value="non">Non</option>
							</select>
					 </div>

					 <div class="form-group">
						<span><i class="fa fa-question-circle" aria-hidden="true"></i></i></span>
							<label for="question8">Avez été victime de maladies ou de troubles physiques ou mentaux graves?</label>
							<select class="form-control" id="question8" tabindex="22" name="question8" required="">
							<option value=""><span>...</span></option>
							<option value="oui">Oui</option>
							<option value="non">Non</option>
							</select>
					 </div>

					 <div class="form-group">
						<span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
							<label for="type_immigration">Quel type d’immigration sollicitez-vous pour le Canada?</label>
							<select class="form-control" id="type_immigration" tabindex="23" name="type_immigration" required="">
							<option value=""><span>...</span></option>
							<option value="Permanente">Permanente</option>
							<option value="Temporaire">Temporaire</option>
							</select>
					 </div>

					 <div class="form-group">
						<span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
							<label for="question9">Avez-vous de la famille au Canada ?</label>
							<select class="form-control" id="question9" tabindex="24" name="question9" required="">
							<option value=""><span>...</span></option>
							<option value="oui">Oui</option>
							<option value="non">Non</option>
							</select>
					 </div>

					 <div class="form-group">
						<span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
							<label for="question10">Avez-vous une offre d’emploi au Canada?</label>
							<select class="form-control" id="question10" tabindex="25" name="question10" required="">
							<option value=""><span>...</span></option>
							<option value="oui">Oui</option>
							<option value="non">Non</option>
							</select>
					 </div>

					 <div class="form-group">
						<span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
							<label for="province_immigre">Dans quelle province ou territoire souhaitez-vous immigrer?</label>
							<select class="form-control" id="province_immigre" tabindex="26" name="province_immigre" required="">
							<option value=""><span>...</span></option>
							<option value="Alberta">Alberta</option>
							<option value="Colombie_Britannique">Colombie-Britannique</option>
							<option value="Ile_Du_Prince_Edouard">Ile-Du-Prince-Edouard</option>
							<option value="Manitoba">Manitoba</option>
							<option value="Nouveau_Brunswick">Nouveau-Brunswick</option>
							<option value="Nouvelle_Écosse">Nouvelle-Écosse</option>
							<option value="Nunavut">Nunavut</option>
							<option value="Ontario">Ontario</option>
							<option value="Quebec">Québec</option>
							<option value="Saskatchewan">Saskatchewan</option>
							<option value="Terre_Neuve_et_Labrador">Terre-Neuve-et-Labrador</option>
							<option value="Territoires_du_Nord_Ouest">Territoires du Nord-Ouest</option>
							<option value="Yukon">Yukon</option>
 
							</select>
					 </div>




						  <div class="form-group" style="margin-top: 10px;">
							<span><i class="fas fa-pencil-alt"></i> </span>
							<label for="message">Message</label>
							<textarea class="form-control" id="message" tabindex=" " name="message" rows="8" required=""></textarea>
							<p class="message" >Dites-Nous en plus sur vous et le service que vous souhaiter.</p>
							<style>
								.message {
									opacity: 0.8;
									color: #000;
									/* color: gray; */
									/* font-size: 80%; */
								}
							</style>
						</div>
						<button onclick="envoyerWhatsApp(event)" class="btn btn-primary" style="border-radius: 50px;">Envoyer via WhatsApp</button>
					</form>
	   
					<!-- <a href="test\test.php" target="_blank">ici</a> -->
	   

				</div>
                <!-- <div class="col-md-2"> -->

                </div>
                <!-- <div class="col-md-3">
                    <h2>Informations de contact</h2>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Rue de la Liberté, 75001 Paris</p>
                    <p><i class="fas fa-phone"></i> +33 01 23 45 67 89</p>
                    <p><i class="fas fa-envelope"></i> info@global-migration.com</p>
					<h2>Heures d'ouverture</h2>
					<ul>
						<li>Lundi - Vendredi : 9h00 - 18h00</li>
						<li>Samedi : 9h00 - 12h00</li>
						<li>Dimanche : Fermé</li>
					</ul>
				</div> -->
			</div>
		</div>
	</section>
	<button onclick="topFunction()" id="myBtn" title="Go to top"></button>
<?php
  include 'footer.php';
?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="fontAwesome/js/all.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/geoip2/2.1.0/geoip2.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="contact.js"></script>
	<script src="script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>