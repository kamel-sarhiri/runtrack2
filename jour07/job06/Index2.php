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
        $phrase = str_replace("a", "4", $phrase);
        $phrase = str_replace("b", "8", $phrase);
        $phrase = str_replace("e", "3", $phrase);
        $phrase = str_replace("l", "1", $phrase);
        $phrase = str_replace("o", "0", $phrase);
        $phrase = str_replace("s", "5", $phrase);
        $phrase = str_replace("t", "7", $phrase);
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
    