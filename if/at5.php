<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php 
    $kg = 0;
    if(isset($_POST['kg'])){
        $kg = $_POST['kg'];
    }
    ?>
</head>
<body>
<form action= "" method="post">
        <fieldset>
            <label for="kg">Qual o valor em kg que você possui?</label>
            <input type="number" name="kg">
            <br><br>
            <input type="submit">
            <br><br>

            <?php
            $grama = 1000 * $kg;
            echo "Você pesa $kg em kg e $grama em gramas";

            ?>
        </fieldset>
    </form>
    
</body>
</html>