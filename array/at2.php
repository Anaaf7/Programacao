<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at2</title>
    <?php
    $vetA = array();
    $vetB = array(); 

        if (isset($_POST)) {
            $vetA = explode(";", $_POST['vetA']);
            $vetB = explode(";", $_POST['vetB']);
        }
        //var_dump($vetA);
        //var_dump($vetB);
    ?>
</head>
<body>
    <form action="" method="post">
        <h1>Separe os números com ";"</h1>
        Vetor A: <input type="text" name="vetA" id="vetA"><br><br>

        Vetor B: <input type="text" name="vetB" id="vetB"><br><br>

        <input type="submit" value="enviar">

        <?php
        //count para poder ter todos os vetores
            if (isset($_POST)) {
                $vetC = array();

                for ($i=0; $i < count($vetA) ; $i++) { 
                    $vetC[$i] = $vetA[$i] + $vetB[$i];
                    echo "$vetC[$i]";
                }
                
            }
        ?>
    </form>
</body>
</html>