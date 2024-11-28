<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>At1</title>
    <?php
        $raio = 0;

        if (isset($_POST['raio'])) {
            $raio = $_POST['raio'];
        }
    ?>
</head>
<body>
<form action="" method="post">
        <label for="">Raio: </label>
        <input type="text" name="raio" id="raio">
        <br><br>

        <input type="submit" value="enviar">
    </form>
    <?php
        function comparar($raio){
            return (4 * 3.14 * pow($raio , 3))/3;
        }

        $resultado = comparar($raio);
        echo"O volume é de: $resultado";
    ?>
</body>
</html>