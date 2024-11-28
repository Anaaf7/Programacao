<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at9</title>
    
    <?php
    $num = 0;

    if (isset($_POST['num'])){
        $num = $_POST['num'];
    }
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="num">Escreva um número: </label>
        <input type="number" name="num" id=""><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
     for ($i=1; $i <= $num ; $i++) {
        $fatorial = 1;
        {
        $fatorial = $fatorial * $i;
        }
            echo"$fatorial <br>";
     }
    ?>
</body>
</html>