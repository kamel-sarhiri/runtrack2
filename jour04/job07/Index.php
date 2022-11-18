<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2</title>
</head>
<body>
    <h1>Jour4, Job07</h1>
    <p><u>input type text</u></p>
    <p>Nous n'utilisons pas GET pour ne pas afficher le mot de passe dans la barre de recherche</p>
    

    <form  action="" method="post">
        <label for="largeur">largeur :</label>
        <input type="text" name="largeur" id="largeur">
        <br>
        <br>
        <label for="hauteur">hauteur :</label>
        <input type="text" name="hauteur" id="hauteur">
        <br>
        <br>
        <input type="submit" value="Envoyer">

    </form>

    <?php
    for ($i=0; $i < $_POST['hauteur']; $i++) { 
        for ($j=0; $j < $_POST['largeur']; $j++) { 
            echo " /\ ";
    }
    echo "<br>";
    }
    echo "/__\ ";





    ?>
