<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at6</title>
    <?php
        $altp = 0;
        $larp = 0;
        $alta = 0;
        $lara = 0;

        if (isset($_POST['altp'])) {
            $altp = $_POST['altp'];
            $larp = $_POST['larp'];
            $alta = $_POST['alta'];
            $lara = $_POST['lara'];
        }
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="">Altura da parede: </label>
        <input type="text" name="altp" id="altp"><br><br>

        <label for="">Largura da parede: </label>
        <input type="text" name="larp" id="larp"><br><br>

        <label for="">Altura do azulejo: </label>
        <input type="text" name="lara" id="lara"><br><br>

        <label for="">Largura do azulejo: </label>
        <input type="text" name="alta" id="alta"><br><br>

        <input type="submit" value="enviar">
    </form>
    <?php
        function comparar($altp, $larp, $alta, $lara){
            $alt = $altp / $alta;
            $lar = $larp / $lara;
            return $alt * $lar;
        }

        function comparararea($altp, $larp){
            return $altp * $larp;
        }
        
        $resultado = comparar($altp, $larp, $alta, $lara);
        $area = comparararea($altp, $larp);
        echo"Você deve comprar: $resultado azulejos. A área será de $area";
    ?>
</body>
</html>