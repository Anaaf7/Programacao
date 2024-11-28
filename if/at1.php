<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    $altura = 0;
    if(isset($_POST['altura'])){
        $altura = $_POST['altura'];
    }

    $base = 0;
    if(isset($_POST['base'])){
        $base = $_POST['base'];
    }
    ?>
</head>
<body>
    <form action="" method="post">
        <fieldset>
        <label for="altura">Qual a altura do terreno?</label>
            <input type="number" name="altura">
            <br><br>

            <label for="base">Qual é a base do terreno?</label>
            <input type="number" name="base">
            <br><br>

            <input type="submit">
            <br><br>

            <?php
            $area = $base * $altura;
            echo "A área do seu terreno é de $area";
            ?>

        </fieldset>
    </form>
</body>
</html>