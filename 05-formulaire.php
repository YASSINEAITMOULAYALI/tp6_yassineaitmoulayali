
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calcul du total</title>
</head>
<body>

    <h1>Commande de produits</h1>

    <form method="POST" action="">

        <label>Produit :</label>
        <input type="text" name="produit" required>
        <br><br>

        <label>Prix :</label>
        <input type="number" name="prix" step="0.01" required>
        <br><br>

        <label>Quantité :</label>
        <input type="number" name="quantite" required>
        <br><br>

        <label>Catégorie :</label>
        <input type="text" name="categorie" required>
        <br><br>

        <button type="submit">Calculer</button>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $produit = $_POST["produit"];
        $prix = (float) $_POST["prix"];
        $quantite = (int) $_POST["quantite"];
        $categorie = $_POST["categorie"];

        $total = $prix * $quantite;

        echo "<h2>Résultat :</h2>";
        echo "Produit : " . htmlspecialchars($produit) . "<br>";
        echo "Catégorie : " . htmlspecialchars($categorie) . "<br>";
        echo "Prix : " . $prix . " DH<br>";
        echo "Quantité : " . $quantite . "<br>";
        echo "Total : " . $total . " DH";
    }
    ?>

</body>
</html>
