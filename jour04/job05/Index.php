<?php
$Rambo = "C'est pas ma guerre";
$Else = "Votre pire cauchemar";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2</title>
</head>
<body>
    <h1>Jour4, Job05</h1>
    <p><u>Formulaire type Post</u></p>
    <p>Nous n'utilisons pas GET pour ne pas afficher le mot de passe dans la barre de recherche</p>
    

    <form  action="" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username" placeholder="Login" require>
        <br>
        <br>
        <label for="password">Mot de passe :</label>
        <input type="text" name="password" id="password" placeholder="Mot de passe" require>
        <br>
        <br>
        <input type="submit" value="Envoyer">

    </form>

    <?php
        if (isset($_POST['username']) && isset($_POST['password'])) {
            if ($_POST['username'] == "John" && $_POST['password'] == "Rambo") {
                echo $Rambo;
            } else {
                echo $Else;
            }
        }
    ?>

    

</body>
</html>
