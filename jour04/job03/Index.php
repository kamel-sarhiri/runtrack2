<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2</title>
</head>
<body>
    <h1>Jour4, Job03</h1>
    <p><u>Formulaire type Post</u></p>
    

    <form  action="" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom">
        <br>
        <br>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom">
        <br>
        <br>
        <label for="age">Age :</label>
        <input type="text" name="age" id="age">
        <br>
        <br>
        <input type="submit" value="Envoyer">

    </form>

    <?php
    $count=0;
    foreach ($_POST as $args => $value) {
        $len=0;
        for ($i = 0; (isset($value[$i])); $i++) { 
        $len++; // Compte le nombre d'arguments
        }
        if ($len > 0) { // Si l'argument est non nul
            $count++; // Incrémente le nombre d'arguments
        }
    }
    echo "le formulaire contient $count caractères" // Affiche le nombre d'arguments
    
    ?>

</body>
</html>