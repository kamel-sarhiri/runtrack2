<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2 Jour3</title>
</head>
<body>
    <h1>Jour3, Job07</h1>
    <p><u>Remplacement de caractère</u></p>
    <p><u>Boucle For</u></p>
    <?php
        $str= "certaines choses changent, et d'autres ne changeront jamais.";
        echo $str."<br>";
        for ($i = 1; isset($str[$i]); $i++) {
            echo $str[$i]; // Affiche les caractères à l'index suivant
        }
        echo $str[0]; // Affiche le premier caractère
    ?>
    <p><u>Boucle While</u></p>
    <?php
    $str = "certaines choses changent, et d'autres ne changeront jamais.";
    echo $str."<br>";

    $i = 1;
    while (isset($str [$i])) { // Tant que l'index existe
        echo $str[$i]; // Affiche les caractères à l'index suivant
        $i++; // Incrémente de 1
    }
    echo $str[0]; // Affiche le premier caractère de la string
    ?>


</body>
</html>
    
    