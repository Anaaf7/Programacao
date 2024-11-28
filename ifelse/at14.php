<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at14</title>
    <?php
    $lado1 = 0;
    $lado2 = 0;
    $lado3 = 0;

    if(isset($_POST['lado1'])){
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $lado3 = $_POST['lado3'];
    }

    ?>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="lado1">Digite o valor do primeiro lado do triângulo:</label>
            <input type="number" name="lado1" id="">
            <br><br>

            <label for="lado2">Digite o valor do segundo lado do triângulo:</label>
            <input type="number" name="lado2" id="">
            <br><br>

            <label for="lado3">Digite o valor do terceiro lado do triângulo:</label>
            <input type="number" name="lado3" id="">
            <br><br>

            <input type="submit" value="Enviar">

        </fieldset>
    </form>

    <?php
        if(isset($_POST['lado1'])){
            if($lado1 == $lado2 && $lado2 == $lado3){
                echo"Este triângulo é equilátero";
            }
            
            else if($lado1 != $lado2 && $lado2 != $lado3 && $lado1 != $lado3){
                echo"Este triângulo é isóceles";
            }

            else if($lado1 != $lado2 && $lado2 != $lado3){
                echo"Este triângulo é escaleno";
            }

        }
    ?>
    
</body>
</html>