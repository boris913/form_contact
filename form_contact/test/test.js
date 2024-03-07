function envoyerWhatsApp(event) {
    event.preventDefault(); // Empêche la soumission du formulaire par défaut

    // Récupérer les valeurs du formulaire
    var nom = document.getElementById('nom').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    // Construire le lien WhatsApp avec les informations du formulaire
    var numeroDestinataire = '681711540'; // Remplacez par le numéro de téléphone du destinataire
    var messageWhatsApp = `Nom: ${nom}\nEmail: ${email}\nMessage: ${message}`;
    var url = `https://wa.me/${numeroDestinataire}?text=${encodeURIComponent(messageWhatsApp)}`;

    // Envoi des données au fichier PHP via une requête AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'test-receive.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Réponse du serveur
            // Rediriger l'utilisateur vers WhatsApp
            window.open(url, "_blank");
        }
    };
    xhr.send(`nom=${encodeURIComponent(nom)}&email=${encodeURIComponent(email)}&message=${encodeURIComponent(message)}`);
}