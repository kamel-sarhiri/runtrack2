<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jour1, Job01</h1>
    <p><?php for ($i = 1; $i<1337; $i++){
                if ($i===42){
                    echo "<b><u>$i</u></b>";
                    echo "<br>";
                }

                else {
                    echo $i;
                    echo "<br>";
                    }
            }
        ?>
    </p>
</body>
</html>