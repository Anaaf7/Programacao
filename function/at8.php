<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at8</title>
    <?php
        $tipo = "";
        $n1 = 0;
        $n2 = 0;
        $n3 = 0;

        if (isset($_POST['tipo'])) {
            $tipo = $_POST['tipo'];
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];
        }
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="">Tipo de cálculo: </label>
        <input type="text" name="tipo" id="tipo"><br><br>

        <label for="">Nota 1: </label>
        <input type="text" name="n1" id="n1"><br><br>

        <label for="">Nota 2: </label>
        <input type="text" name="n2" id="n2"><br><br>

        <label for="">Nota 3: </label>
        <input type="text" name="n3" id="n3"><br><br>

        <input type="submit" value="enviar">
    </form>
    <?php
        function comparar($tipo, $n1, $n2, $n3){
            if($tipo == "A"){
                return ($n1 + $n2 + $n3)/3;
            }else{
                return (($n1 * 5) + ($n2 * 3) + ($n3 * 2))/10;
            }
        }
        $result = comparar($tipo, $n1, $n2, $n3);
        echo"A média desse aluno(a) é de: $result ";
    ?>
</body>
</html>