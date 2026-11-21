
<?php

$nom = $_GET["nom"] ?? "Visiteur";
$ville = $_GET["ville"] ?? "Non précisée";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Paramètres GET</title>
</head>
<body>

    <h1>Récupération des paramètres GET</h1>

    <p>Bonjour <?php echo $nom; ?></p>
    <p>Votre ville : <?php echo $ville; ?></p>

</body>
</html>
