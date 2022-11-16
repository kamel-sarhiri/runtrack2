<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2</title>
</head>
<body>
    <h1>Jour3, Job05</h1>
    <p><u>Boucle For</u></p>
    <?php
    $str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
    $dic = [
        "consonnes" => 0,
        "voyelles" => 0,
    ]
    for ($i = 0; (isset($str [$i])); $i++) {
        if ($str[$i] === "a" || $str[$i] === "e" || $str[$i] === "i" || $str[$i] === "o" || $str[$i] === "u" || $str[$i] === "y" || $str[$i] === "A" || $str[$i] === "E" || $str[$i] === "I" || $str[$i] === "O" || $str[$i] === "U" || $str[$i] === "Y") {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
    echo "Il y a ".$dic["voyelles"]." voyelles et ".$dic["consonnes"]." consonnes dans la phrase";

    ?>

    <table> border : 1px solid black;
        <tr>
            <th>Consonnes</th>
            <th>Voyelles</th>
        </tr>
        <tr>
            <td>  </td>
            <td>    </td>
        </tr>
       

    </table>
</body>
</html>
