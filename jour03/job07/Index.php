<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2</title>
</head>
<body>
    <h1>Jour3, Job07</h1>
    <p><u>Remplacement de caractère</u></p>
    <?php
        $str= "certaines choses changent, et d'autres ne changeront jamais.";
        echo $str."<br>";
        for ($i = 1; isset($str[$i]); $i++) {
            echo $str[$i]; // Affiche les caractères à l'index suivant
        }
        echo $str[0]; // Affiche le premier caractère
    ?>

</body>
</html>
    
    