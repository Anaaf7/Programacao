<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at7</title>
    <?php
        $nom = "";
        $sal = 0;
        $vend = 0;
        $com = 0;

        if (isset($_POST['nom'])) {
            $nom = $_POST['nom'];
            $sal = $_POST['sal'];
            $vend = $_POST['vend'];
            $com = $_POST['com'];
        }
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="">Nome: </label>
        <input type="text" name="nom" id="nom"><br><br>

        <label for="">Salário: </label>
        <input type="text" name="sal" id="sal"><br><br>

        <label for="">Total de vendas: </label>
        <input type="text" name="vend" id="vend"><br><br>

        <label for="">Comissão: </label>
        <input type="text" name="com" id="com"><br><br>

        <input type="submit" value="enviar">
    </form>
    <?php
        function comparar($nom, $sal, $vend, $com){
            $com = ($com * $vend);
            return $sal + $com;
        }
        $resultado = comparar($nom, $sal, $vend, $com);
        echo"O(a) funcionário(a) $nom deverá receber este mês o valor de $resultado  reais, sendo $sal reais de salário e $com reais de comissão.";
    ?>
</body>
</html>