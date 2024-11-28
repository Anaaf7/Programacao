<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $num1 = 0;

    if (isset($_POST['num1'])) {
        $num1 = $_POST['num1'];
    }
    ?>
    <title>aaaatattataatat</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="num1">Número 1:</label>
            <input type="number" name="num1" id="num1"><br><br>

            <input type="submit" value="Enviar">
        </fieldset>
    </form>
    <?php
    $div = 0;
        while($num1 >= 1){
            $num1 = $num1 / 2;
            $div++;
        }echo"Foram necessárias $div divisões para que o número digitado fosse menor que 1. O resultado das divisões foi de: $num1.";
    ?>
</body>
</html>