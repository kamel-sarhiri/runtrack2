<?php

if (isset($_POST['prenom'])) {
    $_COOKIE['prenom'] = $_POST['prenom'] ;
}
  



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 8 job04</title>
</head>
<body>
    <h1>jour 8 job04</h1>
    <br>
    <h3>Les sessions :</h3>
    <br>
    <form  action="" method="post">
        <label for="prenom"></label>
        <input type="text" name="prenom" id="prenom" placeholder="Entrez un prénom">
        <input type="submit" value="Connexion" name="envoyer">
    </form>
    <br>
    <br>

    <?php
    if (isset($_POST['prenom'])) {
    echo "Bonjour ".$_COOKIE['prenom'];
    echo "<input type='submit' value='Déconnexion' name='envoyer'>";
    } else {
    echo "<form action='' method='post'>
    <label for='prenom'></label>
        <input type='text' name='prenom' id='prenom' placeholder='Entrez un prénom'>
        <input type='submit' value='déconnexion' name='envoyer'>
    </form>";
}
    ?>






