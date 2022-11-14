<?php
$str = ' LaPlateforme ';
$str2 = 'Vive ';
$str3 =  '!';
$val = 6;
$myBool = true;

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $str2 . $str . $str3;?></p>
    <p>le chiffre à ajouter à <?php echo $val;?> est 4</p>
    <p>la somme est égale<?php echo $val + 4;?></p>
    <?php echo $myBool ? 'true' : 'false';?>
    
    
</body>
</html>



