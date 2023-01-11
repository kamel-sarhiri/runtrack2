<?php

if (isset($_COOKIE['nbvisites'])) {
    setcookie('nbvisites', $_COOKIE['nbvisites'] + 1, time() + 365*24*3600);
} else {
    setcookie('nbvisites', '1', time() + 365*24*3600);
}

//isset($_COOKIE['nbvisites']) ? setcookie('nbvisites', $_COOKIE['nbvisites'] + 1, time() + 365*24*3600) : setcookie('nbvisites', '1', time() + 365*24*3600);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 8 job02</title>
</head>
<body>
    <h1>jour 8 job02</h1>
    <br>
    <h3>Cookies :</h3>
    <br>
    <br>
    <form action="" method="post">
        <label for="reset">Remettre le compteur à zero :</label>
        <input type="submit" value="reset" name="reset">
    </form>
    <br>
    <br>
    <?php
    if (isset($_POST['reset'])) { //si le bouton reset est cliqué
        setcookie("nbvisites", "1", time() + 365*24*3600); //remettre le compteur à 1
        $_COOKIE['nbvisites'] = 1; //remettre le compteur à 1
    }
    echo "Vous avez visité cette page ".$_COOKIE['nbvisites']." fois";

    ?>