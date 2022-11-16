<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2</title>
</head>
<body>
    <h1>Jour3, Job03</h1>
    <p><u>Boucle For</u></p>
    <?php
    $str = "I'm sorry Dave I'm afraid I can't do that";
    $voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];
    $i=0;
    while (isset($str [$i])) { // Tant que l'index existe
        if (in_array($str [$i], $voyelles)) { // Si le caractère est une voyelle
            echo $str [$i]; // Affiche le caractère
        }
        $i++; // Incrémente de 1
    }
    ?>
    
</body>
</html>
