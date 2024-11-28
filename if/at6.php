<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    $celcius = 0;          
    if(isset($_POST['celcius'])){
        $celcius = $_POST['celcius'];
    }
    ?>
</head>
<body>
<form action= "" method="post">
        <fieldset>
            <label for="celcius">Qual é a temperatura em celcius?</label>
            <input type="number" name="celcius">
            <br><br>
            <input type="submit">
            <br><br>

            <?php
            $fahrenheit = (9*$celcius/5)+32;
            echo "A temperatura em celcius é de  $celcius, já em fahrenheit é de $fahrenheit ";

            ?>
        </fieldset>
    </form>
</body>
</html>