<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at6</title>
    <?php
        $n1 = 0;
        $n2 = 0;
        $n3 = 0;
        $n4 = 0;
        $n5 = 0;
        $n6 = 0;
        $n7 = 0;
        $n8 = 0;

        if (isset($_POST['n1'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];
            $n4 = $_POST['n4'];
            $n5 = $_POST['n5'];
            $n6 = $_POST['n6'];
            $n7 = $_POST['n7'];
            $n8 = $_POST['n8'];
        }
    ?>
</head>
<body>
    <form action="" method="post">
        Numero 1 <input type="text" name="n1" id="n1"><br>
        Numero 2 <input type="text" name="n2" id="n2"><br>
        Numero 3 <input type="text" name="n3" id="n3"><br>
        Numero 4 <input type="text" name="n4" id="n4"><br>
        Numero 5 <input type="text" name="n5" id="n5"><br>
        Numero 6 <input type="text" name="n6" id="n6"><br>
        Numero 7 <input type="text" name="n7" id="n7"><br>
        Numero 8 <input type="text" name="n8" id="n8"><br><br>

        <input type="submit" value="enviar">

        <?php
            $numeros = [$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8];

            $multiplos = 0;

            if (isset($_POST['n1'])) {
                echo "Os números fornecidos foram: <br>";
                for ($i=0; $i < 8 ; $i++) { 
                    if ($numeros[$i] % 6 == 0) {
                        $multiplos ++;
                    }
                    echo"$numeros[$i], ";
                }
                echo "sendo $multiplos multiplos de 6";
            }
            
        ?>
    </form>
</body>
</html>