<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $num = 0;

    if(isset($_POST['num'])){
        $num = $_POST['num'];
    }
    ?>
    <title>at5</title>
</head>
<body>
    <form action="" method="post">
        <label for="num">Número: </label>
        <input type="number" name="num" id="num">
        <br><br>

        <input type="submit" value="Enviar">
    </form>


    <?php
    $vezes = 0;
    $mult = 1;
    while ($mult <= 15) {
        $vezes = $mult * $num;
        echo "$num * $mult = $vezes <br>";
        $mult++;
    }
    ?>
</body>
</html>