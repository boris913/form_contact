<header>

		<!-- <style>
			header .navbar{
			display: flex;
			justify-content: center;
			align-items: center;

			}

			.navbar {
			text-align: center;
			}
			.navbar-nav {
  display: flex;
  justify-content: center;
  text-align: center;
}
		</style> -->

		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #333 !important;">
		<a class="navbar-brand" href="#" style="color: #007bff !important;">Global-Migration</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#" style="color: #007bff !important;">Accueil</a>
					<!-- </li>
					<li class="nav-item active">
						<a class="nav-link" href="services.php">Services</a>
					</li> -->
					<!-- <li class="nav-item">
						<a class="nav-link" href="destination.php">Destinations</a>
					</li> -->
					<li class="nav-item active">
						<a class="nav-link" href="#" style="color: #007bff !important;">À propos</a>
					</li>
					
					<li class="nav-item active">
						<a class="nav-link" href="#" style="color: #007bff !important;">Contact</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#" style="color: #007bff !important;">Blog</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>


	<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

						<form>
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
						<div class="form-group">
						<span><i class="fa fa-phone" aria-hidden="true"></i></span>
						<label for="telephone">Téléphone(WhatsApp)</label>
						<div class="input-group">
							<div class="input-group-prepend">
							<input type="text" class="form-control" id="country-code" name="country-code" value="+237" style="width: 70px; font-weight: bold; background-color: #e9eaeb;" required="">
							</div>
							<input type="tel" class="form-control" id="telephone" tabindex="4" name="telephone" autocomplete="phone" placeholder="" required="">
						</div>
						</div>
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
							<option value="Zimbabwe">Zimbabwe</option>
							</select>
						</div>
						<div class="form-group">
						<span><i class="fas fa-users"></i></span>
							<label for="nombre_enfants">Nombre d'enfants:</label>
							<input class="form-control" type="number" id="nombre_enfants" tabindex="9" name="nombre_enfants" min="0" max="30" value="0" required="">
						</div>
						</div>			 
						<div class="form-group">
						<i class="fas fa-language"></i>
						<label for="francais">Français:</label>
						<div class="checkboxes-container">
						<label class="radio-label" for="francais-langue-maternelle">Langue maternelle</label>
						<input type="radio" name="competences_francais" id="francais-langue-maternelle" tabindex="11" value="langue_maternelle">
						<label class="radio-label" for="francais-debutant">Débutant</label>
						<input type="radio" name="competences_francais" id="francais-debutant" value="debutant">
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
						</div>
					</div>
					<div class="form-group">
						<span><i class="fas fa-school"></i></span>
							<label for="scolarite">Votre scolarité</label>
							<select class="form-control" id="scolarite" tabindex="13" name="pays" required="">
							<option value=""><span>---Sélectionnez votre scolarité---</span></option>
							<option value="non_completees">Etudes secondaires non complétées</option>						 
							</select>
				  </div>
				  <div class="form-group">
				  <i class="fa fa-file-text" aria-hidden="true"></i>
					 	<label for="fichier">Importer votre dernier Diplôme:</label>
  						<input type="file" id="fichier" tabindex="14" name="fichier" required="">
					 </div>
					 <div class="form-group">
						<span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
							<label for="type_immigration">Quel type d da?</label>
							<select class="form-control" id="type_immigration" tabindex="23" name="type_immigration" required="">
							<option value=""><span>...</span></option>
							<option value="Permanente">Permanente</option>
							<option value="Temporaire">Temporaire</option>
							</select>
					 </div>
					 <div class="form-group">
						<span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
							<label for="province_immigre">Dans qu igrer?</label>
							<select class="form-control" id="province_immigre" tabindex="26" name="province_immigre" required="">
							<option value=""><span>...</span></option>
							<option value="Alberta">Alberta</option>
							<option value="Colombie_Britannique">Colombie-Britannique</option>
							</select>
					 </div>
						  <div class="form-group" style="margin-top: 10px;">
							<span><i class="fas fa-pencil-alt"></i> </span>
							<label for="message">Message</label>
							<textarea class="form-control" id="message" tabindex=" " name="message" rows="8" required=""></textarea>
							<p class="message" >    .</p>
						</div>
						<button type="submit"   >Soumettre</button>
					</form> -->