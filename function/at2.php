<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at2</title>
    <?php
        $idade = 0;

        if(isset($_POST['idade'])){
            $idade = $_POST['idade'];
        }
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="">Idade: </label>
        <input type="number" name="idade" id="idade">
        <br><br>

        <input type="submit" value="enviar">
    </form>
    <?php
        function comparar($idade){
            if ($idade <18) {
               return "Menor de idade";
            }else {
                return "Maior de idade";
            }
            
        } $result = comparar($idade);
        echo"$result";
    ?>
</body>
</html>