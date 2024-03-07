<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de soumission</title>
</head>
<body>
    <form id="myForm">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br>

        <label for="message">Message :</label>
        <textarea name="message" id="message" required></textarea><br>

        <button onclick="envoyerWhatsApp(event)">Envoyer via WhatsApp</button>
    </form>

    <script src="test.js"></script>
</body>
</html>