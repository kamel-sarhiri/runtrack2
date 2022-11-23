<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 8 job03</title>
</head>
<body>
    <h1>jour 8 job03</h1>
    <br>
    <h3>Les fonctions :</h3>
    <br>
    <form  action="" method="post">
        <label for="prenom"></label>
        <input type="text" name="prenom" id="prenom" placeholder="Entrez un prénom">
        <input type="submit" value="Envoyer" name="envoyer">
    </form>
    <br>
    <br>
    <form action="" method="post">
        <label for="reset">Remettre le compteur à zero (cliquez 2 fois) :</label>
        <input type="submit" value="Reset" name="reset">

    </form>
    <br>
    <br>

    <?php
    if (isset($_POST["prenom"])) {
        $_SESSION["prenom"][]= $_POST["prenom"];
    }
    ?>

    <ul>
        <?php
        if (isset($_SESSION["prenom"])) {
            foreach ($_SESSION["prenom"] as $value) {
                echo "<li>$value</li>";
            }
        }
        ?>
    </ul>

    <?php
    if (isset($_POST["reset"])) {
        session_destroy();
    }
    ?>

</body>
</html>


       

