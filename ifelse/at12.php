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
        <fieldset>
            <label for="numero">Digite um número:</label>
            <input type="text" name="numero" id="numero">
            <br><br>

            <input type="submit">
        </fieldset>
    </form>

    <?php
        if(isset($_POST['numero'])){
            if($numero == 0){
            echo"Este número é ZERO";
            }if($numero <0){
            echo"Este número é NEGATIVO";
            }else if($numero >0){
            echo"Este número é POSITIVO";
            }
        }
    ?>
    
</body>
</html>