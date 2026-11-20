
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>

    <h1>Formulaire d'inscription</h1>

    <form method="POST" action="">

        <label>Nom :</label>
        <input type="text" name="nom" required>
        <br><br>

        <label>Âge :</label>
        <input type="number" name="age" required>
        <br><br>

        <label>Ville :</label>
        <input type="text" name="ville" required>
        <br><br>

        <button type="submit">Envoyer</button>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nom = $_POST["nom"];
        $age = $_POST["age"];
        $ville = $_POST["ville"];

        echo "<h2>Informations reçues :</h2>";
        echo "Nom : " . htmlspecialchars($nom) . "<br>";
        echo "Âge : " . htmlspecialchars($age) . "<br>";
        echo "Ville : " . htmlspecialchars($ville);
    }
    ?>

</body>
</html>
