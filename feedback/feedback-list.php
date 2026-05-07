<!-- feedback/feedback-list.php -->
<?php
echo "<h2>Feedback clients</h2>";
if (file_exists('feedback.csv')) {
    $lignes = file('feedback.csv');
    echo "<table border='1' cellpadding='5'><tr><th>Nom</th><th>Note</th><th>Commentaire</th><th>Date</th></tr>";
    foreach ($lignes as $ligne) {
        $data = str_getcsv($ligne);
        echo "<tr>";
        foreach ($data as $champ) {
            echo "<td>" . htmlspecialchars($champ) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Aucun feedback pour l’instant.";
}
?>
