<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <?php

    $matricula = 0;
    $nota1 = 0;
    $nota2 = 0;
    $nota3 = 0;


    if(isset($_POST['matricula'])){
        $matricula = $_POST['matricula'];
    }

    if(isset($_POST['nota1'])){
        $nota1 = $_POST['nota1'];
    }

    if(isset($_POST['nota2'])){
        $nota2 = $_POST['nota2'];
    }

    if(isset($_POST['nota3'])){
        $nota3 = $_POST['nota3'];
    }
    ?>
<body>
    <form action="" method="post">
        <fieldset>

            <h1>REPROVADO ou APROVADO EIN</h1>

            <label for="matricula">Digite a matricula do aluno:</label>
            <input type="number" name="matricula">
            <br><br>

            <label for="nota1">Digite a nota 1 do aluno:</label>
            <input type="number" name="nota1">
            <br><br>

            <label for="nota2">Digite a nota 2 do aluno:</label>
            <input type="number" name="nota2">
            <br><br>

            <label for="nota3">Digite a nota 3 do aluno:</label>
            <input type="number" name="nota3">
            <br><br>

            <input type="submit">
            
        </fieldset>
    </form>

    <?php
        $media = ($nota1 * 4 + $nota2 * 3 + $nota3 * 3)/ 10;

        if( $media >= 5){
            echo "O aluno de matricula: $matricula, cuja as notas foram: $nota1, $nota2 e $nota3 foi APROVADO, pois sua média foi de $media";
        } else{
            echo "O aluno de matricula: $matricula, cuja as notas foram: $nota1, $nota2 e $nota3 foi REPROVADO, pois sua média foi de $media";
        }

    ?>
</body>
</html>