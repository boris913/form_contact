<?php
// require_once('test-config.php');
  
// Récupération des valeurs du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];

// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=test';
$user = 'root';
$password = '';
try {
    // Connexion à la base de données
    $pdo = new PDO($dsn, $user, $password);
    // ...
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

// Requête SQL préparée
$sql = "INSERT INTO clients (name, email, message) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);

// Liage des valeurs aux paramètres
$stmt->bindParam(1, $nom);
$stmt->bindParam(2, $email);
$stmt->bindParam(3, $message);

// Exécution de la requête
$stmt->execute();

// Vérification du succès de l'insertion
if ($stmt->rowCount() > 0) {
    echo "Enregistrement réussi";
} else {
    echo "Erreur lors de l'enregistrement";
}
?>