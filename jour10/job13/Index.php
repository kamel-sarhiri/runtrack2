<?php


$mysqli = new mysqli("localhost", "root", "", "jour09");

$request = $mysqli->query("SELECT `salles`.`nom`, `etage`.`nom` FROM `salles` INNER JOIN `etage` ON `salles` . `id_etage` = `etage`.`id`; 
");


// affichage

   // $result_all = $request -> fetch_all();
   // var_dump($result_all);

    // while(($result_array = $request -> fetch_array()) != null){
    //     var_dump($result_array);
    //     echo "<br>";
    //     echo $result_array[1];

    // }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <title>jour 10 job13</title>
</head>
<body>
    <h1>jour 10 job13</h1>
    <br>
    <h3>PHP + SQL :</h3>
    <br>


    <table>
        <thead>
            <tr>
                <th>nom de la salle</th>
                <th>nom de l'étage</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            while (($result = $request->fetch_array())!= null)
            {
                echo "<tr>";
                echo "<td>".$result[0]."</td>";
                echo "<td>".$result[1]."</td>";
                echo "<tr>";
            }
            ?>
        </tbody>
    </table>


</body>