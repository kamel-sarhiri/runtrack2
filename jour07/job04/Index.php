<?php
    
    $a = $_GET['nombre1'];
    $b = $_GET['nombre2'];
    $operation = $_GET['operator'];
    
   
    function calcul($a, $operation, $b) {
        $resultat = 0;
  

        switch ($operation) {
            case "+":
                $resultat = $a + $b;
                break;
            case "-":
                $resultat = $a - $b;
                break;
            case "*":
                $resultat = $a * $b;
                break;
            case "/":
                $resultat = $a / $b;
                break;
            default:
                echo "Erreur";
                break;
        }
        return $resultat;
    }

    
    

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 7 job03</title>
</head>
<body>
    <h1>jour 7 job04</h1>
    <br>
    <h3>Les fonctions :</h3>
    <br>
    <form  action="" method="get">
        <label for="nombre1">Nombre 1 :</label>
        <input type="text" name="nombre1" id="nombre1">
        <br>
        <br>
        <label for="operator">type d'opération :</label>
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
            </select>
        <br>
        <br>
        <label for="nombre2">Nombre 2 :</label>
        <input type="text" name="nombre2" id="nombre2">
        <br>
        <br>
        <input type="submit" value="Envoyer">

    </form>

        <?php
            if (isset($_GET['nombre1']) && isset($_GET['nombre2']) && isset($_GET['operator'])) {
                $nombre1 = $_GET['nombre1'];
                $nombre2 = $_GET['nombre2'];
                $operator = $_GET['operator'];
                echo calcul($nombre1, $operator, $nombre2);
            }
                
                
        ?>

</body>
</html>
