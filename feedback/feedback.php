<!-- feedback/save-feedback.php -->
<?php
// Récupération sécurisée des données
$nom = htmlspecialchars($_POST['nom'] ?? '');
$note = intval($_POST['note'] ?? 0);
$commentaire = htmlspecialchars($_POST['commentaire'] ?? '');

// Vérification minimale
if ($nom && $note && $commentaire) {
    $ligne = [$nom, $note, $commentaire, date('Y-m-d H:i:s')];
    $fichier = fopen('feedback.csv', 'a');
    fputcsv($fichier, $ligne);
    fclose($fichier);
    echo "Merci pour votre retour 💬 ! <a href='feedback-form.php'>Retour</a>";
} else {
    echo "Tous les champs sont obligatoires. <a href='feedback-form.php'>Réessayer</a>";
}
?>
