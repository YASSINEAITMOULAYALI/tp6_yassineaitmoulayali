
<?php

require_once "06-connexion.php";

$sql = "SELECT * FROM products";

$stmt = $pdo->query($sql);

$products = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>
</head>

<body>

    <h1>Gestion des produits</h1>

    <table border="1" cellpadding="10">

        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Total stock</th>
        </tr>

        <?php foreach ($products as $product) { ?>

        <tr>

            <td><?php echo $product["id"]; ?></td>

            <td><?php echo htmlspecialchars($product["name"]); ?></td>

            <td><?php echo $product["price"]; ?> DH</td>

            <td><?php echo $product["quantity"]; ?></td>

            <td>
                <?php
                echo $product["price"] * $product["quantity"];
                ?> DH
            </td>

        </tr>

        <?php } ?>

    </table>

</body>
</html>
