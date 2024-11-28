<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at11</title>

    <?php
        $idade = 0;

        if(isset($_POST['idade'])){
            $idade = $_POST['idade'];
        }
    ?>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <h1>Qual sua faixa etaria?</h1>

            <label for="idade">Digite sua idade:</label>
            <input type="number" name="idade">
            <br><br>

            <input type="submit">
        </fieldset>
    </form>

    <?php
    if(isset($_POST['idade'])){
            if($idade >0 && $idade <=130){

            if($idade >0 && $idade <12){
                echo"Criança";
            }if($idade >=12 && $idade <=18){
                echo"Adolescente";
            }if($idade >=19 && $idade <60){
                echo"Adulto";
            }if($idade >=60){
                echo"Idoso";
            }
        }else if($idade ==0 || $idade >130){
            echo"Idade inválida";
        }
    }
    ?>
</body>
</html>