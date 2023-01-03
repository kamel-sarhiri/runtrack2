<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2</title>
</head>
<body>
    <h1>Jour2, Job01</h1>
    <h2>Méthode 1</h2>
    <?php for ($i = 0; $i<=1337; $i++) { //boucle for allant de 1 à 1337 (non compris) et qui s'incrémente de +1
                if ($i===42) {
                    echo "<b><u>$i</u></b>";
                    echo "<br>";
                }
                else {
                    echo $i;
                    echo "<br>";
                    }
            }
    ?>

    <h2>Méthode 2</h2>
    <?php for ($i = 0; $i<=1337; $i++) { //boucle for allant de 1 à 1337 (non compris) et qui s'incrémente de +1
                if ($i===42) { 
    ?>
                    <b><u><?php echo $i; ?></u></b>
            <?php } 
                else { 
            ?>
                    <?php echo $i; ?>
                    
                   <?php } ?>
                    <br>
            <?php } ?>
</body>
</html>