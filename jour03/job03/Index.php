<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2 Jour 3</title>
</head>
<body>
    <h1>Jour3, Job03</h1>
    <p><u>Affichage des voyelles</u></p>
    <?php
    $str = "I'm sorry Dave I'm afraid I can't do that.";
    $voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];
    $i=0;
    while ($str[$i] != '.') { //parcourt la chaine de caractère jusqu'au point
        for ($j = 0; $j < 12; $j++) {  //parcourt le tableau des voyelles
            if ($str[$i] === $voyelles[$j]) { //si le caractère de la chaine est égal à une voyelle
                echo $str[$i];  //affiche le caractère
            }
        }
        $i++;
    }

    ?>

</body>
</html>