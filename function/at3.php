<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at3</title>
    <?php
        $nome1 = "";
        $idade1 = 0;
        $nome2 = "";
        $idade2 = 0;

        if (isset($_POST['nome1'])) {
           $nome1 = $_POST['nome1'];
           $idade1 = $_POST['idade1'];
           $nome2 = $_POST['nome2'];
           $idade2 = $_POST['idade2'];
        }
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="">Nome pessoa 1: </label>
        <input type="text" name="nome1" id="nome1">
        <br><br>
        <label for="">Idade 1: </label>
        <input type="text" name="idade1" id="idade1">
        <br><br><hr>

        <label for="">Nome pessoa 2: </label>
        <input type="text" name="nome2" id="nome2">
        <br><br>
        <label for="">Idade 2:</label>
        <input type="text" name="idade2" id="idade2">
        <br><br>

        <input type="submit" value="enviar">
    </form>
    <?php
        function comparar($idade1, $idade2, $nome1, $nome2){
            if($idade2 < $idade1){
                return  "$idade1, $nome1";
            }else{
                return "$idade2, $nome2";
            }
        } 
        $result = comparar($idade1, $idade2, $nome1, $nome2);
        echo"O mais velho é: $result";
    ?>
</body>
</html>
