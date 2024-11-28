<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    $km = 0;          
    if(isset($_POST['km'])){
        $km = $_POST['km'];
    }

    $consumo = 0;          
    if(isset($_POST['consumo'])){
        $consumo = $_POST['consumo'];
    }

    $gasolina = 0;          
    if(isset($_POST['gasolina'])){
        $gasolina = $_POST['gasolina'];
    }
    ?>
</head>
<body>
<form action= "" method="post">
        <fieldset>
            <label for="km">Qual é a distância em km?</label>
            <input type="number" name="km">
            <br><br>

            <label for="consumo">Qual é o consumo do carro por litro de gasolina?</label>
            <input type="number" name="consumo">
            <br><br>

            <label for="gasolina">Qual é o preço por litro da gasolina?</label>
            <input type="number" name="gasolina">
            <br><br>

            <input type="submit">
            <br><br>

            <?php
            $gasto = ($km * $consumo) * $gasolina ;
            echo "O valor que você irá gastarpara fazer essa viagem será de $gasto ";

            ?>
        </fieldset>
    </form>
    
</body>
</html>