<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 7 job07</title>
</head>
<body>
    <h1>jour 7 job07</h1>
    <br>
    <h3>Les fonctions :</h3>
    <br>
    <form  action="" method="get">
        <label for="phrase">Entrez une phrase :</label>
        <input type="text" name="phrase" id="phrase" placeholder="Entrez une phrase">
        <br>
        <br>
        <label for="fonction"></label>
        <select name="fonction" id="">
        <option value="gras">gras</option>
        <option value="cesar">cesar</option>
        <option value="plateforme">plateforme</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Envoyer">

    </form>
    <br>
    <br>
    <?php

    function gras($phrase) {
        $phrase = "<strong>$phrase</strong>";
        return $phrase;
    }

    function cesar($phrase) {
        $phrase = str_rot13($phrase);
        return $phrase;
    }

    function plateforme($phrase) {
        $phrase = str_replace("LaPlateforme_", " ", $phrase);
        return $phrase;
    }

    if (isset($_GET["phrase"]) && isset($_GET["fonction"])) {
        $phrase = $_GET["phrase"];
        $fonction = $_GET["fonction"];
        switch ($fonction) {
            case "gras":
                $phrase = gras($phrase);
                break;
            case "cesar":
                $phrase = cesar($phrase);
                break;
            case "plateforme":
                $phrase = plateforme($phrase);
                break;
            default:
                echo "Erreur";
                break;
        }
        echo $phrase;
    }
