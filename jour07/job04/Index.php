<?php
    
    $a = $_GET['number1'];
    $b = $_GET['number2'];
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
            case "%":
                $resultat = $a % $b;
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
    <title>jour 7 job04</title>
</head>
<body>
    <h1>jour 7 job04</h1>
    <br>
    <h3>Les fonctions :</h3>
    <br>
    <form  action="" method="get">
        <label for="number1"></label>
        <input type="text" name="number1" id="number1" placeholder="Entrez un nombre">
        <br>
        <br>
        <label for="operator"></label>
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
            </select>
        <br>
        <br>
        <label for="number2"></label>
        <input type="text" name="number2" id="number2" placeholder="Entrer un nombre">
        <br>
        <br>
        <input type="submit" value="Réaliser l'opération">

    </form>
    <br>
    <br>
    <?php
        if (isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['operator'])) {
            $number1 = $_GET['number1'];
            $number2 = $_GET['number2'];
            $operator = $_GET['operator'];
            echo "Le résultat est : ".calcul($number1, $operator, $number2);
        }
            
            
    ?>

</body>
</html>
