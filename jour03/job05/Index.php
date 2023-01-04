<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2 Jour 3</title>
</head>
<body>
    <h1>Jour3, Job05</h1>
    <p><u>Décompte de consonnes et voyelles</u></p>
    <?php
$str= "On n'est pas le meilleur quand on le croit mais quand on le sait.";
$voyelles= ['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'y', 'Y'];
$dic = [
    "consonnes" => 0,
    "voyelles" => 0,
];
$i=0;
while ($str[$i] != '.'){ //parcourt la chaine de caractère jusqu'au point
        for($j = 0; $j < 12; $j++){ //parcourt le tableau des voyelles
            if ($str[$i] === $voyelles[$j] ){ //si le caractère de la chaine est égal à une voyelle
                $dic["voyelles"]++; //incrémente le nombre de voyelles
                break; //sort de la boucle
            } else if ($j==11 AND $str[$i]!=" " AND $str[$i]!="." AND $str[$i]!="'" AND $str[$i]!=","){ 
                $dic["consonnes"]++; //incrémente le nombre de consonnes
            }
        }
    $i++; //incrémente le compteur de la boucle while
}


?>

    
    <table border : 2px . >
        <tr><th>Consonnes</th><th>Voyelles</th></tr>
        <tr>
            <td>
                <?php 
                    echo $dic["consonnes"]; //affiche le nombre de consonnes
                ?>
            </td>
            
            <td>
                <?php 
                    echo $dic["voyelles"]; //affiche le nombre de voyelles
                ?>
            </td>
        </tr>
    </table>

</body>
</html>
