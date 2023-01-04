<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 2 job07</title>
</head>
<body>
    <h1>jour 2 job07</h1>
    <br>
    <h3>Dessin d'un triangle :</h3>
    <br>
    <form action="" method="get">
        <label for="largeur">Entrez la largeur :</label>
        <input type="texte" name="largeur" id="largeur">
        <br>
        <br>
        <label for="hauteur">Entrez la hauteur :</label>
        <input type="texte" name="hauteur" id="hauteur">
        <br>
        <br>
        <input type="submit" value="Envoyer">
    </form>
    <br>
    <br>
        <?php
            if (isset($_GET['largeur']) && isset($_GET['hauteur'])){
                $largeur = intval($_GET['largeur']);
                echo "Largeur saisie : ".$largeur;
                echo "<br>";
                $hauteur = intval($_GET['hauteur']);
                echo "Hauteur saisie : ".$hauteur;
                echo "<br>";
                echo "<br>";

                for ($h1 = 0; $h1 < $largeur/2; $h1++){ // LE TOIT DE LA MAISON
                    for ($j = $largeur/2; $j > $h1; $j--){
                        echo "&nbsp";
                    }
                    echo "/";
                    for ($x = 0; $x < $h1; $x++){
                        echo "_";
                        echo "_";
                    }
                    echo "\\";
                    echo "<br>";
                }
                
            }
            else{
                echo "Veuillez indiquer une largeur et une hauteur pour construire le triangle";
            }
        ?>
</body>
</html>