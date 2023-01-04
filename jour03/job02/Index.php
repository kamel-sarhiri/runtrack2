<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2 Jour3</title>
</head>
<body>
    <h1>Jour3, Job02</h1>
    <p><u>Boucle For</u></p>
    <?php
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
    for ($i = 0; (isset($str [$i])); $i+=2) { // $i+=2 permet d'incrémenter de 2 en 2
        echo $str [$i]; // Affiche les caractères à l'index pair
    }
    ?>

    <p><u>Boucle While</u></p>
    <?php
    $i = 0;
    while (isset($str [$i])) { // Tant que l'index existe
        echo $str [$i]; // Affiche le caractère à l'index
        $i+=2; // Incrémente de 2 en 2
    }
    ?>
</body>
</html>


    
