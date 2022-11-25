<?php


$mysqli = new mysqli("localhost", "root", "", "jour09");

$request = $mysqli->query("SELECT * FROM salles ORDER BY capacite ASC;");


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
    <title>jour 10 job10</title>
</head>
<body>
    <h1>jour 10 job10</h1>
    <br>
    <h3>PHP + SQL :</h3>
    <br>


    <table>
        <thead>
            <tr>
                <th>Capacite totale (croissant)</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            while (($result = $request->fetch_array())!= null)
            {
                echo "<tr>";
                echo "<td>".$result['nom']."</td>";
                echo "<td>".$result['id_etage']."</td>";
                echo "<td>".$result['capacite']."</td>";
                echo "<tr>";
            }
            ?>
        </tbody>
    </table>


</body>