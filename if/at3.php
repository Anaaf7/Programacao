<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $nome = 0;
    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
    }

    $idade = 0;
    if(isset($_POST['idade'])){
        $idade = $_POST['idade'];
    }
    ?>
</head>
<body>
<form action="" method="post">
        <fieldset>
        <label for="nome">Qual o seu nome?</label>
            <input type="text" name="nome">
            <br><br>

            <label for="idade">Qual é a sua idade?</label>
            <input type="number" name="idade">
            <br><br>

            <input type="submit">
            <br><br>

            <?php
            $diasvividos = $idade * 365;
            echo "Olá $nome, você já viveu $diasvividos dias!";
            ?>

        </fieldset>
    </form>
</body>
</html>