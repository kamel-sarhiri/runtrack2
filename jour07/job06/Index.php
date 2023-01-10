<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 7 job06</title>
</head>
<body>
    <h1>jour 7 job06</h1>
    <br>
    <h3>Les fonctions :</h3>
    <br>
    <form  action="" method="get">
        <label for="phrase">Entrez une phrase :</label>
        <input type="text" name="phrase" id="phrase" placeholder="Entrez une phrase">
        <br>
        <br>
        <input type="submit" value="Envoyer">

    </form>
    <br>
    <br>
    <?php
        function leetSpeek($phrase) {

            for ($i = 0; isset(($phrase[$i])); $i++) {
                if ($phrase[$i] == "a" || $phrase[$i] == "A") {
                    $phrase[$i] = "4";
                }
                if ($phrase[$i] == "b" || $phrase[$i] == "B") {
                    $phrase[$i] = "8";
                }
                if ($phrase[$i] == "e" || $phrase[$i] == "E") {
                    $phrase[$i] = "3";
                }
                if ($phrase[$i] == "l" || $phrase[$i] == "L") {
                    $phrase[$i] = "1";
                }
                if ($phrase[$i] == "o" || $phrase[$i] == "O") {
                    $phrase[$i] = "0";
                }
                if ($phrase[$i] == "s" || $phrase[$i] == "S") {
                    $phrase[$i] = "5";
                }
                if ($phrase[$i] == "t" || $phrase[$i] == "T") {
                    $phrase[$i] = "7";
                }
            }
            return $phrase;

        }

        if (isset($_GET["phrase"])) {
            $phrase = $_GET["phrase"];
            $leetSpeek = leetSpeek($phrase);
            echo "La phrase est : $phrase. En leetSpeek cela donne : $leetSpeek";
        }

    ?>

    

</body>
</html>


        