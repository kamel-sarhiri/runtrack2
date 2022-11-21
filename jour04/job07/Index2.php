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
        if (isset($GET['largeur']) && isset($GET['hauteur'])) {
            $largeur = intval($GET['largeur']);
            echo "la largeur est : ".$largeur;
            echo "<br>";
            $hauteur = intval($GET('hauteur'));
            echo "la hauteur est : ".$hauteur;
            echo "<br>";
            echo "<br>";
            for ($h1 = 0; $h1 < $largeur/2; $h1++) {
                for ($j = $largeur/2; $j > $h1; $j--) {
                    echo "&nbsp";
                }
                echo "/";
                for ($x = 0; $x < $h1; $x++) {
                    echo "_";
                    echo "_";
                }
                echo "\\";
                echo "<br>";
            }
            for ($h2 = 0 ; $h2 < $hauteur; $h2++) {
                if ($h2==0) {
                    echo "*";
                }
                else {
                    echo "|";
                }
                if ($h2 == $hauteur -1)
                    for ($y = 0; $y < $largeur; $y++) {
                       echo "_";
                   }
                else {
                    for ($y = 0; $y < $largeur; $y++) {
                        echo "&nbsp";
                    }
                }
                if ($h2 == 0) {
                    echo "*";
                }
                else {
                    echo "|";
                }
                echo "<br>";
            }
        }
        ?></pre>
</body>
</html>
