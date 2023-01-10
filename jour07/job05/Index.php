
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
        <label for="word"></label>
        <input type="text" name="word" id="word" placeholder="Entrez un mot">
        <br>
        <br>
        <label for="letter"></label>
        <input type="text" name="letter" id="letter" placeholder="Entrez une lettre">
        <br>
        <br>
        <input type="submit" value="Envoyer">

    </form>
    <br>
    <br>
    <?php

    function occurence($word, $letter) {
        $occurence = 0;
        for ($i=0; isset(($word[$i])); $i++) {
            if ($word[$i] == $letter) {
                $occurence++;
            }
        }
        return $occurence;
    }

    if (isset($_GET["word"]) && isset($_GET["letter"])) {
        $word = $_GET["word"];
        $letter = $_GET["letter"];
        $occurence = occurence($word, $letter);
        echo "La lettre $letter apparait $occurence fois dans le mot $word";
    }

    ?>

</body>
</html>
