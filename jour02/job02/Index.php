<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2</title>
</head>
<body>
    <h1>Jour2, Job02</h1>
    <h2>Méthode 1</h2>
    <?php for ($i = 0; $i<=1337; $i++) { //boucle for qui affiche les nombres de 1 à 1337
                if ($i===26 OR $i===37 OR $i===88 OR $i===1111 OR $i===3233) {
                    echo "<br>";        //saut de ligne
                }
                else { //sinon
                    echo $i; //affichage des autres nombres
                    echo "<br>"; //saut de ligne
                    }
                }
        ?>
    <h2>Méthode 2</h2>
    <?php for ($i = 0; $i<=1337; $i++) { //boucle for qui affiche les nombres de 1 à 1337
                if ($i===26 OR $i===37 OR $i===88 OR $i===1111 OR $i===3233) { ?>
                    <br>       
                <?php }
                else { //sinon
                ?>
                <?php echo $i; ?>
                <br>
                <?php } ?>
                <?php } ?>
</body>
</html>