<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades</title>

    <?php 
    $quilo = 0;
    if(isset($_POST['quilo'])){
        $quilo = $_POST['quilo'];
    }
    ?>
</head>
<body>
    <form action= "" method="post">
        <fieldset>
            <label for="quilo">Qual o valor em kg que você consumiu em comida?</label>
            <input type="number" name="quilo">
            <br><br>
            <input type="submit">
            <br><br>

            <?php
            $preco = 12 * $quilo;
            echo "Você precisa pagar $preco reais";

            ?>
        </fieldset>
    </form>
</body>
</html>