<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $idade = 0;


    if(isset($_POST['idade'])){
        $idade = $_POST['idade'];
    }
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="idade">Idade do parametro: </label>
        <input type="number" name="idade" id="idade">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        function categoria($idade){
            if($idade >= 5 && $idade <= 7){
                return "Infantil A";
            }
            else if ($idade >= 8 && $idade <= 10){
                return "Infantil B";
            }
            else if ($idade >= 11 && $idade <= 13){
                return "Juvenil A";
            }
            else if ($idade >= 14 && $idade <= 17){
                return "Juvenil B";
            }
            else if ($idade >= 18){
                return "Adulto";
            }
            else {
                return "Idade fora das categorias";
            }
        }
        echo "A categoria do nadador de $idade anos é: ". categoria($idade);
    ?>
</body>
</html>
