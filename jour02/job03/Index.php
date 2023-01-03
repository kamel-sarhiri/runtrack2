<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2</title>
</head>
<body>
    <h1>Jour2, Job03</h1>
    <h2>Méthode 1</h2>
    <?php for ($i = 0; $i<=100; $i++) { //boucle for qui affiche les nombres de 1 à 100
                if ($i<=20) { //boucle for qui affiche les nombres de 1 à 20
                    echo "<i>$i</i>"; //affichage des nombres en italique
                    echo "<br>";        //saut de ligne
                }
                else if ($i==42) { //affichage de la phrase "La Plateforme_" à la place du nombre 42
                    echo "LaPlateforme_";
                    echo "<br>";
                }
                else if ($i>=25 AND $i<=50) { //affichage des nombres de 25 à 50 en gras
                    echo "<u>$i</u>"; //affichage des nombres en gras
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
                if ($i<=20) { ?> 
                    <i><?php echo $i ?></i> 
                <?php }
                else if ($i==42) {  
                    echo "LaPlateforme_";?>
                <?php }
                else if ($i>=25 AND $i<=50) { ?> 
                    <u><?php echo $i ?></u>
                <?php }
                else {  
                    echo $i;?> 
                <?php } ?>
                <br>
                <?php }
                ?>
    
</body>
</html>