
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

    echo "Connexion à la base de données réussie !";

} catch (PDOException $e) {

    echo "Erreur de connexion : " . $e->getMessage();

}

?>
