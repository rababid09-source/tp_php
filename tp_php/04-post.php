
<?php

if (isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["age"]) && isset($_POST["message"]) && isset($_POST["ville"])) {

    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $message = $_POST["message"];
    $ville = $_POST["ville"];

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>

    <h1>Formulaire avec POST</h1>

    <form method="POST" action="">

        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
        </div>

        <br>

        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        </div>

        <br>

        <div>
            <label for="age">Âge :</label>
            <input type="number" id="age" name="age" required>
        </div>

        <br>

        <div>
            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required>
        </div>

        <br>

        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>
        </div>

        <br>

        <button type="submit">Envoyer</button>

    </form>

    <?php
    if (isset($_POST["nom"])) {
    ?>

        <h2>Résultat du formulaire</h2>

        <p>Nom : <?php echo htmlspecialchars($nom); ?></p>
        <p>Email : <?php echo htmlspecialchars($email); ?></p>
        <p>Age : <?php echo htmlspecialchars($age); ?></p>
        <p>Ville : <?php echo htmlspecialchars($ville); ?></p>
        <p>Message : <?php echo htmlspecialchars($message); ?></p>

    <?php
    }
    ?>

</body>
</html>
