<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at5</title>
    <?php
        $rad = 0;

        if (isset($_POST['rad'])) {
            $rad = $_POST['rad'];
        }
    ?>
</head>
<body>
<form action="" method="post">
        <label for="">Radianos: </label>
        <input type="text" name="rad" id="rad">
        <br><br>

        <input type="submit" value="enviar">
    </form>
    <?php
        function comparar($rad){
            return ($rad * 180)/ 3.14;
        }
        $result = comparar($rad);
        echo "Em graus: $result";
    ?>
</body>
</html>