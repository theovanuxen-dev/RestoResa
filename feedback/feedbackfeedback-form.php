<!-- feedback/feedback-form.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Donner votre avis</title>
</head>
<body>
    <h2>Votre avis sur RestoResa</h2>
    <form action="save-feedback.php" method="POST">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="note">Note (sur 5) :</label><br>
        <select id="note" name="note">
            <option value="5">⭐⭐⭐⭐⭐</option>
            <option value="4">⭐⭐⭐⭐</option>
            <option value="3">⭐⭐⭐</option>
            <option value="2">⭐⭐</option>
            <option value="1">⭐</option>
        </select><br><br>

        <label for="commentaire">Commentaire :</label><br>
        <textarea id="commentaire" name="commentaire" rows="4" cols="40" required></textarea><br><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
