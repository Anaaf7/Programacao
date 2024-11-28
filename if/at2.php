<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $cavalos = 0;
    if(isset($_POST['cavalos'])){
        $cavalos = $_POST['cavalos'];
    }
    ?>
</head>
<body>
    <form action="" method= "post">
        <fieldset>
            <label for="cavalos">Qual o nùmero de cavalos?</label>
            <input type="number" name="cavalos">
            <br><br>

            <input type="submit">

            <?php 
            $ferraduras = 4 * $cavalos;
            echo "Você precisa de $ferraduras ferraduras";
            ?>x
        </fieldset>
    </form>
    
</body>
</html>