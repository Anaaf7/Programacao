<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $numero = 0;
    if(isset($_POST['numero']))
        {
            $numero = $_POST['numero'];
        }
    ?>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="numero">Escreva um número aleatório...</label>
            <input type="number" name="numero">
            <br><br>

            <input type="submit">

            <?php
            $antecessor = $numero -1;
            echo "O antecessor desse número é $antecessor ;)";
            ?>
        </fieldset>
    </form>
</body>
</html>