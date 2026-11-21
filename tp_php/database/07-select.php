
<?php

$host = "localhost";
$dbname = "tp_php";
$user = "root";
$password = "";

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM products WHERE price > 300";
    $stmt = $pdo->query($sql);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {

    die("Erreur : " . $e->getMessage());

}

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
            <th>Prix (DH)</th>
            <th>Quantité</th>
            <th>Total stock</th>
        </tr>

        <?php foreach ($products as $product) { ?>

        <tr>
            <td><?php echo $product["id"]; ?></td>

            <td><?php echo htmlspecialchars($product["name"]); ?></td>

            <td><?php echo $product["price"]; ?></td>

            <td><?php echo $product["quantity"]; ?></td>

            <td><?php echo $product["price"] * $product["quantity"]; ?> DH</td>
        </tr>

        <?php } ?>

    </table>

</body>
</html>
