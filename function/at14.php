<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at7</title>
    <?php
        $n1 = 0;
        $n2 = 0;
        $n3 = 0;

        if (isset($_POST['n1'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];
        }
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="">N1: </label>
        <input type="text" name="n1" id=""><br><br>

        <label for="">N2: </label>
        <input type="text" name="n2" id=""><br><br>

        <label for="">N3: </label>
        <input type="text" name="n3" id=""><br><br>

        <input type="submit" value="Enviar">
        <?php
            function comparacao($n1, $n2, $n3){
                if($n1 == $n2 && $n2 == $n3 ){
                    return "Equilátero";
                }if ($n2 == $n1 && $n1 != $n3){
                    return "Isóceles";
                }if ($n3 != $n2 && $n3 != $n1){
                    return "Escaleno";
                }
            }
            $resposta = comparacao($n1, $n2, $n3);
            echo "$resposta";
        ?>
    </form>
</body>
</html>