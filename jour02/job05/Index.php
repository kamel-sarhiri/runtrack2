<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2</title>
</head>
<body>
    <h1>Jour2, Job05</h1>
    <p><?php
    //On prend chaque nombre entre 2 et 1000 (0 et 1 n'étant pas premier)
        for ($i=2; $i<=1000; $i++) {
            $nbDiv = 0;//Et on compte le nombre de diviseurs
            for ($j=1; $j<=$i; $j++) {
                if ($i%$j==0) {   //Si le reste de la division est égal à 0, alors le nombre est divisible
                    $nbDiv++;
                }
            }
            if($nbDiv == 2){ //si le nombre de diviseur est égal à 2, alors le nombre est premier
    //Un nombre premier est un chiffre qui ne possède que 2 diviseur (1 et
    // lui-même)
                echo $i." est premier<br>";
            }
        }
?>

</body>
</html>