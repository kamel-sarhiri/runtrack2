<?php   

session_start();
//si la variable existe, incrémenter de 1 sinon la créer et lui donner la valeur 1
isset($_SESSION['nbvisites']) ? $_SESSION['nbvisites']++ : $_SESSION['nbvisites'] = 1;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 8 job01</title>
</head>
<body>
    <h1>jour 8 job01</h1>
    <br>
    <h3>Sessions / cookies :</h3>
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
        $_SESSION['nbvisites'] = 1; //remettre le compteur à 1
    }
    echo "Vous avez visité cette page ".$_SESSION['nbvisites']." fois";
    ?>