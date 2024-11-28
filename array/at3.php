<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <?php
        $n1 = "";
        $n2 = "";
        $n3 = "";
        $n4 = "";
        $n5 = "";
        $n6 = "";
        $n7 = "";
        $n8 = "";
        $n9 = "";
        $n10 = "";

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
            Nome 1: <input type="text" name="n1" id="n1"><br>
            Nome 2: <input type="text" name="n2" id="n2"><br>
            Nome 3: <input type="text" name="n3" id="n3"><br>
            Nome 4: <input type="text" name="n4" id="n4"><br>
            Nome 5: <input type="text" name="n5" id="n5"><br>
            Nome 6: <input type="text" name="n6" id="n6"><br>
            Nome 7: <input type="text" name="n7" id="n7"><br>
            Nome 8: <input type="text" name="n8" id="n8"><br>
            Nome 9: <input type="text" name="n9" id="n9"><br>
            Nome 10: <input type="text" name="n10" id="n10"><br>

            <input type="submit" value="enviar">
        </fieldset>
        <?php
            $nomes = [$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10];
            $p = 1;

            for ($i=0; $i < 10 ; $i++) { 
                echo "$p - $nomes[$i] <br>";
                $p++;
            }
        ?>
    </form>
</body>
</html>