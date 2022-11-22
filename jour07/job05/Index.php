
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 7 job05</title>
</head>
<body>
    <h1>jour 7 job05</h1>
    <br>
    <h3>Les fonctions :</h3>
    <br>
    <form  action="" method="get">
        <label for="mot"></label>
        <input type="text" name="mot" id="mot" placeholder="Entrez un mot">
        <br>
        <br>
        <label for="lettre"></label>
        <input type="text" name="lettre" id="lettre" placeholder="Entrez une lettre">
        <br>
        <br>
        <input type="submit" value="Envoyer">

    </form>
    <br>
    <br>
    <?php

    function occurence($mot, $lettre) {
        $occurence = 0;
        for ($i=0; isset(($mot[$i])); $i++) {
            if ($mot[$i] == $lettre) {
                $occurence++;
            }
        }
        return $occurence;
    }

    if (isset($_GET["mot"]) && isset($_GET["lettre"])) {
        $mot = $_GET["mot"];
        $lettre = $_GET["lettre"];
        $occurence = occurence($mot, $lettre);
        echo "La lettre $lettre apparait $occurence fois dans le mot $mot";
    }

    ?>

</body>
</html>
