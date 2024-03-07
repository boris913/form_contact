<?php
// require_once('test-config.php');
  
// Récupération des valeurs du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$country_code = $_POST["country_code"];
$phoneNumber = $_POST["telephone"];
$telephone = $countryCode . $phoneNumber;
$statut = $_POST['statut'];
$date_naissance = $_POST['date_naissance'];
$ville = $_POST['ville'];
$pays = $_POST['pays'];
$nombre_enfants = $_POST['nombre_enfants'];
$noms_et_age_enfants = $_POST['noms_et_age_enfants'];
// $competences_francais = $_POST['competences_francais'];
// $competences_anglais = $_POST['competences_anglais'];
$scolarite = $_POST['scolarite'];
$diplomeFichier = $_POST['diplomeFichier'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];
$question5 = $_POST['question5'];
$question6 = $_POST['question6'];
$question7 = $_POST['question7'];
$question8 = $_POST['question8'];
$type_immigration = $_POST['type_immigration'];
$question9 = $_POST['question9'];
$question10 = $_POST['question10'];
$province_immigre = $_POST['province_immigre'];
$message = $_POST['message'];


// Validation des données
$errors = array();

// Vérification du champ nom
if (empty($nom)) {
    $errors[] = "Le champ nom est obligatoire.";
}

// Vérification du champ email
if (empty($email)) {
    $errors[] = "Le champ email est obligatoire.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "L'adresse email n'est pas valide.";
}

// Vérifier s'il y a des erreurs
if (!empty($errors)) {
    // Il y a des erreurs, renvoyer une réponse avec les erreurs
    $response = array(
        'success' => false,
        'errors' => $errors
    ); 
    echo json_encode($response);
  } 
// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=visa_canada';
$user = 'root';
$password = '';
try {
    // Connexion à la base de données
    $pdo = new PDO($dsn, $user, $password);
    // ...
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

// Requête d'insertion dans la table infosClients
$sqlInfosClients = "INSERT INTO infosClients (nom, prenom, email, telephone, statut, date_naissance, ville, pays, province_immigre, type_immigration, nombre_enfants, noms_et_age_enfants, competences_francais, competences_anglais, scolarite, diplomeFichier, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmtInfosClients = $pdo->prepare($sqlInfosClients);

// Bind des valeurs aux paramètres pour la table infosClients
$stmtInfosClients->bindParam(1, $nom);
$stmtInfosClients->bindParam(2, $prenom);
$stmtInfosClients->bindParam(3, $email);
$stmtInfosClients->bindParam(4, $telephone);
$stmtInfosClients->bindParam(5, $statut);
$stmtInfosClients->bindParam(6, $date_naissance);
$stmtInfosClients->bindParam(7, $ville);
$stmtInfosClients->bindParam(8, $pays);
$stmtInfosClients->bindParam(9, $province_immigre);
$stmtInfosClients->bindParam(10, $type_immigration);
$stmtInfosClients->bindParam(11, $nombre_enfants);
$stmtInfosClients->bindParam(12, $noms_et_age_enfants);
$stmtInfosClients->bindParam(13, $competences_francais);
$stmtInfosClients->bindParam(14, $competences_anglais);
$stmtInfosClients->bindParam(15, $scolarite);
$stmtInfosClients->bindParam(16, $diplomeFichier);
$stmtInfosClients->bindParam(17, $message);

// Exécution de la requête d'insertion dans la table infosClients
$stmtInfosClients->execute();

// Requête d'insertion dans la table reponseQuestionnaire
$sqlReponseQuestionnaire = "INSERT INTO reponseQuestionnaire (question1, question2, question3, question4, question5, question6, question7, question8, question9, question10) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmtReponseQuestionnaire = $pdo->prepare($sqlReponseQuestionnaire);

// Bind des valeurs aux paramètres pour la table reponseQuestionnaire
$stmtReponseQuestionnaire->bindParam(1, $question1);
$stmtReponseQuestionnaire->bindParam(2, $question2);
$stmtReponseQuestionnaire->bindParam(3, $question3);
$stmtReponseQuestionnaire->bindParam(4, $question4);
$stmtReponseQuestionnaire->bindParam(5, $question5);
$stmtReponseQuestionnaire->bindParam(6, $question6);
$stmtReponseQuestionnaire->bindParam(7, $question7);
$stmtReponseQuestionnaire->bindParam(8, $question8);
$stmtReponseQuestionnaire->bindParam(9, $question9);
$stmtReponseQuestionnaire->bindParam(10, $question10);

// Exécution de la requête d'insertion dans la table reponseQuestionnaire
$stmtReponseQuestionnaire->execute();

// Vérification du succès de l'insertion
if ($stmt->rowCount() > 0) {
    echo "Enregistrement réussi";
} else {
    echo "Erreur lors de l'enregistrement";
}
?>