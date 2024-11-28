<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <?php
        $n1 = 0;
        $n2 = 0;
        $n3 = 0;
        $n4 = 0;
        $n5 = 0;
        $n6 = 0;
        $n7 = 0;
        $n8 = 0;
        $n9 = 0;
        $n10 = 0;

        if (isset($_POST['n1'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];
            $n4 = $_POST['n4'];
            $n5= $_POST['n5'];
            $n6= $_POST['n6'];
            $n7= $_POST['n7'];
            $n8= $_POST['n8'];
            $n9= $_POST['n9'];
            $n10 = $_POST['n10'];
        }
   ?>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            Número 1: <input type="text" name="n1" id="n1"><br>
            Número 2: <input type="text" name="n2" id="n2"><br>
            Número 3: <input type="text" name="n3" id="n3"><br>
            Número 4: <input type="text" name="n4" id="n4"><br>
            Número 5: <input type="text" name="n5" id="n5"><br>
            Número 6: <input type="text" name="n6" id="n6"><br>
            Número 7: <input type="text" name="n7" id="n7"><br>
            Número 8: <input type="text" name="n8" id="n8"><br>
            Número 9: <input type="text" name="n9" id="n9"><br>
            Número 10: <input type="text" name="n10" id="n10"><br>

            <input type="submit" value="enviar">
        </fieldset>
        <?php
        //caso um laço esteja dentro de outro laço deve-se modificar a variavel, no caso, ter duas: i e j

            $vet = [$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10];

            $fat = array();

            for ($i=0; $i < count($vet) ; $i++) { 
               $ft = 1;
               for ($j=1; $j < $vet[$i] ; $j++) { 
                    $ft = $ft * $j;
               }
               $fat[$i] = $ft;
               echo "$vet[$i] - $fat[$i] <br>";
            }
        ?>
    </form>
</body>
</html>