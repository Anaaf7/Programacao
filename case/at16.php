<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $numero = 0;

    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
    }
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="numero">Digite um número qualquer: </label>
        <br>
        <input type="number" name="numero">
        <br><br>

        <input type="submit">
    </form>
</body>

<?php
if(isset($_POST['numero'])){
    switch($numero){

        case 127:
            echo"Cento e vinte e sete";
            break;

            case 35;
            echo"Trinta e cinco";
            break;

            case 82;
            echo"Oitenta e dois";
            break;

            case 28;
            echo"Vinte e oito";
            break;

            case 115;
            echo"Cento e quinze";
            break;

            default:
            echo"Número não consta na base de dados";
    }}
?>
</html>