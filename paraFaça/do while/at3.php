<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
    <?php
    $num = 0;
    if(isset($_POST['num'])){
        $num = $_POST['num'];
    }
    ?>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="num">Número: </label>
            <input type="number" name="num" id="num">
        </fieldset>

        <?php
            
        ?>
    </form>
</body>
</html>