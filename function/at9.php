<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $n1 = 0;
    if(isset($_POST['n1'])){
        $n1 = $_POST['n1'];
    }
    ?>
</head>
<body>
    <form action="" method="post">
    Número: <input type="number" name="n1" id="n1">
    <br>
    <br>
    <input type="submit" value="aaaaaaaaaaaa">
</form>
</body>
<?php
    function comparar ($n1){
        $soma = 0;

        for($i = 1; $i < $n1; $i++){
            if($n1 % $i == 0){
                $oma = $soma + $i;
            }
        }
        
    }


    if (aaa($n1)) {
        echo "$n1 é um numero perfeito.";
    }else {
        echo "$n1 não é um numero perfeito.";
    }
?>
</html>
