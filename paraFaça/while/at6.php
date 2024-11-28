<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at6</title>
</head>
<?php
    $num1 = 0;
    $num2 = 0;

    if(isset($_POST['num1'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
    }
?>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="num1">Número: </label>
            <input type="number" name="num1" id="num1">
            <br><br>

            <label for="num2">Número: </label>
            <input type="number" name="num2" id="num2">
            <br><br>

            <input type="submit" value="Enviar">
        </fieldset>
    </form>
    <?php
    $cont = 0;
    $soma = 0;
    while ($cont < $num1){
        $soma = $soma + $num2;
        $cont++;
    }  echo "$soma <br>";
    ?>
</body>
</html>