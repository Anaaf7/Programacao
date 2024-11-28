<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at5</title>
    <?php
    $fn = 0;
    
    if(isset($_POST['fn'])){
        $fn = $_POST['fn'];
    }

    ?>
</head>
<body>
    <form action="" method="post"> 
        <fieldset>
            <label for="fn">Digite um número</label>
            <input type="number" name="fn" id="fn"><br><br>

            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php
    $ant = 0;
    $fib = 1;
    $cont = 2;

        echo"$ant $fib";
        while ($cont < $fn) {
            $aux = $ant + $fib;
            $ant = $fib;
            $fib = $aux;
            echo"$fib ";
            $cont++;
        }
    ?>
</body>
</html>