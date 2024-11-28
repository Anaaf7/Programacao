<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at13</title>
    <?php
    $numero1 = 0;
    $numero2 = 0;
    $numero3 = 0;

    if(isset($_POST['numero1'])){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
    }

    ?>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="numero1">Digite o primeiro número:</label>
            <input type="number" name="numero1">
            <br><br>

            <label for="numero2">Digite o segunda número:</label>
            <input type="number" name="numero2">
            <br><br>

            <label for="numero3">Digite o terceiro número:</label>
            <input type="number" name="numero3">
            <br><br>

            <input type="submit">
        </fieldset>
    </form>

    <?php
        if(isset($_POST['numero1'])){
            
            if($numero1 < $numero3 && $numero2 < $numero3){
                echo"O maior valor digitado foi o número 3";
            }
            
            if($numero1 < $numero2 && $numero3 < $numero2){
                echo"O maior valor digitado foi o número 2";
            }

            else if($numero2 < $numero1 && $numero3 <$numero1){
                echo"O maior valor digitado foi o número 1";
            }
        }
    ?>
    
</body>
</html>