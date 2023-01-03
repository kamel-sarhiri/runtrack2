<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2</title>
</head>
<body>
    <h1>Jour2, Job04</h1>
    <h2>Méthode 1</h2>    
    <?php for ($i = 0; $i<=100; $i++) { //boucle for qui affiche les nombres de 1 à 100

        if ($i%3==0 AND $i%5==0) { //affichage des multiples de 3 et 5
            echo "FizzBuzz";
            echo "<br>"; //saut de ligne
            }
        else if ($i%3==0) { //affichage des multiples de 3
            echo "Fizz";
            echo "<br>";
        }
        else if ($i%5==0) { //affichage des multiples de 5
            echo "Buzz";
            echo "<br>"; //saut de ligne
        }
        else { //affichage des autres nombres
            echo $i; //affichage des autres nombres
            echo "<br>"; //saut de ligne
            }
        }

    ?>
    <h2>Méthode 2</h2>    
    <?php for ($i = 0; $i<=100; $i++) { 

        if ($i%3==0 AND $i%5==0) {  
            echo "FizzBuzz";?>
            <?php }
        else if ($i%3==0) { 
            echo "Fizz"; ?>
        <?php }
        else if ($i%5==0) { 
            echo "Buzz"; ?>
        <?php }
        else { 
            echo $i; ?> 
            <?php } ?>
            <br>
        <?php }
        ?>
</body>
</html>