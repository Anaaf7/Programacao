<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    $nplaca= 0;

    if(isset($_POST['nplaca'])){
        $nplaca = $_POST['nplaca'];
    }
    ?>
    </head>
    <body>
    <form action="" method="post">
    <label for="nplaca">Digite o último número da placa do carro:</label>
    <br>
    <input type="number" name="nplaca">
    <br><br>

    <input type="submit">
    </form>

    <?php

    if(isset($_POST['nplaca'])){
    switch ($nplaca){

        case 1:
        case 2:
            echo"Não pode circular na segunda.";
            break;

        case 3:
        case 4:
            echo"Não pode circular na terça.";
            break;

        case 5:
        case 6:
            echo"Não pode circular na quarta.";
            break;
        
        case 7:
        case 8:
            echo"Não pode circular na quinta.";
            break;

        case 9:
        case 0:
            echo("Não pode circular na sexta.");
            break;
    }
}
    ?>
</body>
</html>