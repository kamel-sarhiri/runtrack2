<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2</title>
</head>
<body>
    <h1>Jour4, Job06</h1>
    <p><u>Formulaire type Get</u></p>
    

    <form  action="" method="get">
        <label for="nombre">Nombre :</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <br>
        <input type="submit" value="Envoyer">

    </form>

    <?php
        if (isset($_GET['nombre'])) {
            $nombre = (int)$_GET['nombre'];
            if ($nombre%2 == 0) {
                echo "Le nombre est pair";
            } else {
                echo "Le nombre est impair";
            }
        }
    
    ?>

</body>
</html>
