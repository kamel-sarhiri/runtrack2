<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        if (isset($_GET['style'])) {
            $style = $_GET['style'];
            
            if ($style != "") {
                echo "<link rel='stylesheet' href='$style.css' />";
            }
            
            else {
                echo "<link rel='stylesheet' href='style1.css' />";
            }
        }
        else {
            echo "<link rel='stylesheet' href='style1.css' />";
        }
    ?>
    <title>jour 6 job05</title>
</head>
<body>
    <h1>jour 6 Job05</h1>
    <br>
    <h3>Liste déroulante :</h3>
    <br>
    <div class="boite_horizontale">
        <form method="get" action="">
            <select name="style" id="style">
            <option value="">choississez un style</option>
            <option value="style1">style 1</option>
            <option value="style2">style 2</option>
            <option value="style3">style 3</option>
            </select>
            <input type="submit" value="Selectionner" id="bouton">
        </form>
    </div>
    
</body>
</html>
