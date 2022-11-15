<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2</title>
</head>
<body>
    <h1>Jour2, Job04</h1>
    <p><?php for ($i = 0; $i<=100; $i++) { //boucle for qui affiche les nombres de 1 à 100

                if ($i===$i%3) { //affichage des nombres de 1 à 100 divisibles par 3
                    echo "Fizz";
                    echo "<br>";
                }
                else if ($i===$i%5) { //affichage des nombres de 1 à 100 divisibles par 5
                    echo "Buzz"; //affichage des nombres en gras
                    echo "<br>"; //saut de ligne
                }
                else if ($i===$i%3 AND $i===$i%5) { //affichage des autres nombres
                    echo "FizzBuzz"; //affichage des autres nombres
                    echo "<br>"; //saut de ligne
                    }
                }
                else { //affichage des autres nombres
                    echo $i; //affichage des autres nombres
                    echo "<br>"; //saut de ligne
                    }

        ?>
    </p>
</body>
</html>