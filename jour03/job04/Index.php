<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2</title>
</head>
<body>
    <h1>Jour3, Job04</h1>
    <p><u>Boucle For</u></p>
    <?php
    $str = "Dans l'espace, personne ne vous entend crier.";
    $count = 0;
    echo $str."<br>";

    for ($i = 0; (isset($str [$i])); $i++) {
        $count++; // Compte le nombre de caractères
        }

        echo "La phrase contient $count caractères" // Affiche le nombre de caractères

    ?>

    <p><u>Boucle While</u></p>
    <?php
    $str = "Dans l'espace, personne ne vous entend crier.";
    $count = 0;
    echo $str."<br>";

    $i = 0;
     while (isset($str [$i])) { // Tant que l'index existe
        $count++; // Compte le nombre de caractères
        $i++; // Incrémente de 1
        }

        echo "La phrase contient $count caractères" // Affiche le nombre de caractères

    ?>

    
</body>
</html>

