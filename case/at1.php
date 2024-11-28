<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $letra = "";

    if(isset($_POST['letra'])){
        $letra = $_POST['letra'];
    }
    ?>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="letra">Digite uma letra:</label>
            <input type="text" name="letra">
            <br><br>

            <input type="submit">
        </fieldset>
    </form>
    <?php
    switch(strtolower($letra)){
        case "a":
        case "e":
        case "i":
        case "o":
        case "u":
            echo"Vogal";
            break;
            
            default:
            echo"Consoante";
    }
    ?>
</body>
</html>