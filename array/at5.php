<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at5</title>
    <?php
        $n1 = "";
        $n2 = "";
        $n3 = "";
        $n4 = "";
        $n5 = "";
        $s1 = 0;
        $s2 = 0;
        $s3 = 0;
        $s4 = 0;
        $s5 = 0;

        if (isset($_POST['n1'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];
            $n4 = $_POST['n4'];
            $n5 = $_POST['n5'];
            $s1 = $_POST['s1'];
            $s2 = $_POST['s2'];
            $s3 = $_POST['s3'];
            $s4 = $_POST['s4'];
            $s5 = $_POST['s5'];
        }
    ?>
</head>
<body>
    <form action="" method="post">
        Nome 1: <input type="text" name="n1" id="n1"><br>
        Salário 1: <input type="text" name="s1" id="s1"><br><br>
        Nome 2: <input type="text" name="n2" id="n2"><br>
        Salário 2: <input type="text" name="s2" id="s2"><br><br>
        Nome 3: <input type="text" name="n3" id="n3"><br>
        Salário 3: <input type="text" name="s3" id="s3"><br><br>
        Nome 4: <input type="text" name="n4" id="n4"><br>
        Salário 4: <input type="text" name="s4" id="s4"><br><br>
        Nome 5: <input type="text" name="n5" id="n5"><br>
        Salário 5: <input type="text" name="s5" id="s5"><br><br>

        <input type="submit" value="enviar">

        <?php
            if (isset($_POST['n1'])) {
                $nomes = [$n1, $n2, $n3, $n4, $n5];
                $salarios = [$s1, $s2, $s3, $s4, $s5];

                for($i=0; $i < 5 ; $i++) { 
                    $porc = $salarios[$i] * 0.08;
                    $porc += $salarios[$i];

                    echo "Nome: $nomes[$i] - com reajuste: $porc <br> ";
                }
            }
        ?>
    </form>
</body>
</html>