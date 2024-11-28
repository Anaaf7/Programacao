<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at5</title>
    <?php
        $g = "";
        $alt = 0;
        
        if (isset($_POST['g'])) {
            $g = $_POST['g'];
            $alt = $_POST['alt'];
        }
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="">Gênero: </label>
        <input type="text" name="g" id="g"><br><br>

        <label for="">Altura: </label>
        <input type="text" name="alt" id="alt"><br><br>

        <input type="submit" value="Enviar">
    </form>
    <?php
        function peso($g, $alt){
            if ($g == "feminino") {
                return 62.1 * $alt - 44.7;
            }else {
                return 72.7 * $alt - 58;
            }
        }
        $resposta = peso($g, $alt);
        echo "O peso ideal $resposta";
    ?>
</body>
</html>