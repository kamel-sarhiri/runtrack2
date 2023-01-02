<?php
$str = 'Hello';
$int = 4;
$float = 4.5;
$bool = true;
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 1, job 3</title>
    <style>
        table,
        th,
        td {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
   <h1>Jour 1, Job3</h1>
<table>
    <tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
    </tr>
    <tr>
        <td>String</td>
        <td>$str</td>
        <td><?php echo $str;?></td>
    </tr>
    <tr>
        <td>Integer</td>
        <td>$int</td>
        <td><?php echo $int;?></td>
    </tr>
    <tr>
        <td>Float</td>
        <td>$float</td>
        <td><?php echo $float;?></td>
    </tr>
    <tr>
        <td>Booleen</td>
        <td>$bool</td>
        <td><?php echo $bool;?></td>
    </tr>
    
</table>


</body>
</html>

