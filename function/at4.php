<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at4</title>
    <?php
        $num = 0;

        if (isset($_POST['num'])) {
            $num = $_POST['num'];
        }
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="">Numero: </label>
        <input type="text" name="num" id="num">
        <br><br>

        <input type="submit" value="enviar">
    </form>
    <?php
        function comparar($num){
            if($num < 0){
                return "Número negativo: false";
            }else{
                return "Número positivo: true";
            }
        }

        $resultado = comparar($num);
        echo "$resultado";

        //IF e ELSE em uma linha, operador ternario
        //result == true ? "Positivo" : "Negativo" 
    ?>
</body>
</html>