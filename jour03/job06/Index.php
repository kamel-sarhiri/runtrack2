<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2 Jour 3</title>
</head>
<body>
    <h1>Jour3, Job06</h1>
    <p><u>Boucle For</u></p>
    <?php
    $str = "les choses que l'on possede finissent par nous posseder.";
    $count = 0;
    echo $str."<br>";

    for ($i = 0; (isset($str [$i])); $i++) {
        $count++; // Compte le nombre de caractères
        }

    
    echo "la phrase à l'envers est : ";
    for ($i = $count-1; $i>=0; $i--) { // $i = $count permet de commencer à l'index du dernier caractère. le point étant le dernier caractère, on décrémente de 1 en 1
    echo $str [$i]; // Affiche les caractères
    }
    ?>  

    <p><u>Boucle While</u></p>
    <?php
    $str = "les choses que l'on possede finissent par nous posseder.";
    $count = 0;
    echo $str."<br>";

    $i = 0;
     while (isset($str [$i])) { // Tant que l'index existe
        $count++; // Compte le nombre de caractères
        $i++; // Incrémente de 1
        }
    echo "la phrase à l'envers est : ";
    for ($i = $count-1; $i>=0; $i--) { // $i = $count permet de commencer à l'index du dernier caractère. le point étant le dernier caractère, on décrémente de 1 en 1
    echo $str [$i]; // Affiche les caractères
    }
    ?>  