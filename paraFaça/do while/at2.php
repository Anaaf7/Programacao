<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $a = 0;
    $b = 0;
    $ta = 0;
    $tb = 0;

    if(isset($_POST['a'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $ta = $_POST['ta'];
        $tb = $_POST['tb'];
    }

    ?>
    <title>atatatat</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="a">Digite o número de habitantes no país A: </label>
            <input type="number" name="a" id="a"><br><br>

            <label for="ta">Digite a taxa de natalidade de habitantes no país A: </label>
            <input type="text" name="ta" id="ta"><br><br>

            <label for="b">Digite o número de habitantes no país B: </label>
            <input type="number" name="b" id="b"><br><br>

            <label for="tb">Digite a taxa de natalidade de habitantes no país B: </label>
            <input type="text" name="tb" id="tb"><br><br>

            <input type="submit" value="Enviar">
        </fieldset>
    </form>
    <?php
    $ano = 0;
    
     do {
        $a = $a * $ta;
        $b = $b * $tb;
        $ano++;
     } while ($a < $b);
        echo"$ano anos";
    ?>
</body>
</html>