<!-- Partie PHP -->
<?php
$e = "&nbsp;"; // pour echo un espace
$s = "_"; // pour echo un underscore
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 4 job07</title>
</head>
<body>
    <h1>jour 4 job07</h1>
    <br>
    <h3>Input type texte :</h3>
    <br>

    <form action="" method="get">
        <label for="largeur">Entrez la largeur :</label>
        <input type="texte" name="largeur" id="largeur" placeholder="">
        <br>
        <br>
        <label for="hauteur">Entrez la hauteur :</label>
        <input type="texte" name="hauteur" id="hauteur" placeholder="">
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

                for ($h1 = 0; $h1 < $largeur/2; $h1++){ // LE TOIT DE LA MAISON
                    for ($j = $largeur/2; $j > $h1; $j--){
                        echo $e;
                    }
                    echo "/";
                    for ($x = 0; $x < $h1; $x++){
                        echo $s;
                        echo $s;
                    }
                    echo "\\";
                    echo "<br>";
                }
                for ($h2 = 0; $h2 < $hauteur; $h2++) { // LE RESTE DE LA MAISON
                    if ($h2 == 0) {
                        echo "/";
                        for ($y = 0; $y < $largeur; $y++) {
                            echo $s;
                        }
                        echo "\\";
                    }
                    else{
                        echo "|";
                    }
                    if ($h2 == $hauteur-1) {
                        for ($y = 0; $y < $largeur; $y++) {
                            echo $s;
                        }
                    }
                    else{
                        for ($y = 0; $y < $largeur; $y++) {
                            echo $e;
                        }
                    }
                    if ($h2 == 0) {
                        echo "";
                    }
                    else{
                        echo "|";
                    }
                    echo "<br>";
                }
            }
            else{
                echo "Veuillez indiquer une largeur et une hauteur pour construire la maison";
            }
        ?></pre>
</body>
</html>