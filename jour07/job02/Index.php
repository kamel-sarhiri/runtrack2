<?php
    $jour=true;
    function bonjour($jour) {
        if ($jour==true) {
            echo "Bonjour";
        }
        else {
            echo "Bonsoir";
        }
        }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 7 job02</title>
</head>
<body>
    <h1>jour 7 job02</h1>
    <br>
    <h3>Les fonctions :</h3>
    <br>

        <?php
        bonjour($jour);
        ?>

</body>
</html>
