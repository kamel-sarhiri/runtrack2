<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2</title>
</head>
<body>
    <h1>Jour3, Job01</h1>
    <p><u>Boucle while</u></p>
    <?php
    $number = [200, 204, 173, 98, 171, 404, 459]; // Création du tableau
    $i = 0; // Initialisation de la variable de boucle
    while (isset($number [$i])) { // Tant que l'index existe
        if ($number[$i] % 2 == 0) { // Si le nombre est pair
            echo $number[$i] . " est pair" . "<br>"; // Affiche le nombre et "est pair"
        } else { // Sinon
            echo $number[$i] . " est impair" . "<br>"; // Affiche le nombre et "est impair"
        }
        $i++; // Incrémente de 1
    }
    ?>

    <p><u>Boucle foreach</u></p>
    <?php
    foreach ($number as $value) { // Pour chaque valeur du tableau
        if ($value % 2 == 0) { // Si le nombre est pair
            echo $value . " est pair" . "<br>"; // Affiche le nombre et "est pair"
        } else { // Sinon
            echo $value . " est impair" . "<br>"; // Affiche le nombre et "est impair"
        }
    }
    ?>

</body>
</html>

