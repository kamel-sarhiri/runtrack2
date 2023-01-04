<!-- Partie PHP -->
<?php
$e = "&nbsp;"; // pour echo un espace
$s = "_";
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 2 job06</title>
</head>
<body>
    <h1>jour 2 job06</h1>
    <br>
    <h3>Dessin d'un rectangle :</h3>
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
        <pre><?php
            if (isset($_GET['largeur']) && isset($_GET['hauteur'])){
                $largeur = intval($_GET['largeur']);
                echo "Largeur saisie : ".$largeur;
                echo "<br>";
                $hauteur = intval($_GET['hauteur']);
                echo "Hauteur saisie : ".$hauteur;
                echo "<br>";
                echo "<br>";

             
                for ($h1 = 0; $h1 < $largeur/2.5; $h1++){ // LE TOIT DE LA MAISON
                   
                    for ($x = 0; $x < $h1; $x++){
                        echo "_";
                        echo "_";
                    }
                }
                for ($h2 = 0; $h2 < $hauteur; $h2++) { // LE RESTE DE LA MAISON
                    if ($h2 == 0) {
                        echo "&nbsp";
                    }
                    else{
                        echo "|";
                    }
                    if ($h2 == $hauteur-1) {
                        for ($y = 0; $y < $largeur; $y++) {
                            echo "_";
                        }
                    }
                    else{
                        for ($y = 0; $y < $largeur; $y++) {
                            echo "&nbsp";
                        }
                    }
                    if ($h2 == 0) {
                        echo "&nbsp";
                    }
                    else{
                        echo "|";
                    }
                    echo "<br>";
                }
            }
            else{
                echo "Veuillez indiquer une largeur et une hauteur pour construire le rectangle";
            }
        ?></pre>
</body>
</html>