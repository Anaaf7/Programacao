<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at8</title>
    <?php
    $num = 0;

    if(isset($_POST['num'])){
        $num = $_POST['num'];
    }
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="num">Digite o número máximo: </label>
        <input type="number" name="num" id="">
        <br>

        <input type="submit" value="Enviar">
    </form>

    <?php
        $rest = 0;
        for ($i=0; $i <= $num ; $i++) { 
            if ($num % 15 == 0) {
                $rest ++;
                echo"multiplos de 3 e 5: $rest";
            }
        }
    ?>
</body>
</html>