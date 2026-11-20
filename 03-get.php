
<?php
$nom = $_GET["nom"] ?? "Inconnu";
$ville = $_GET["ville"] ?? "Non précisée";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Paramètres GET</title>
</head>
<body>

    <h1>Informations reçues</h1>

    <p>Nom : <?php echo htmlspecialchars($nom); ?></p>

    <p>Ville : <?php echo htmlspecialchars($ville); ?></p>

</body>
</html>
