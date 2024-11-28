<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    $nome = "";
    $valor = 0;
    $tcombustivel = "";

    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
    }

    if(isset($_POST['tcombustivel'])){
        $tcombustivel = $_POST['tcombustivel'];
    }

    ?>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Digite seu nome aqui: </label>
        <br>
        <input type="text" name="nome" id="">
        <br><br>

        <label for="valor">Digite o valor do abastecimento: </label>
        <br>
        <input type="number" name="valor" id="">
        <br><br>

        <label for="tcombustivel">Digite o tipo de combustível: </label>
        <br>
        <input type="text" name="tcombustivel" id="">
        <br><br>

        <input type="submit" value="Enviar">
    
    </form>
    <?php
        if(isset($_POST['tcombustivel'])){
        switch(strtolower($tcombustivel)){
            case "gasolina":
            $gasolina = $valor -($valor * 0.1);
            echo"$nome, você terá que pagar $gasolina";
            break;

            case "alcool":
                $alcool = $valor -($valor * 0.8);
                echo"$nome, você terá que pagar $alcool";
                break;

                case "diesel":
                    $diesel = $valor -($valor * 0.6);
                    echo"$nome, você terá que pagar $diesel";
                    break;

                    default:
                    echo"$nome, você digitou um tipo de combustivel incorreto";
        }}
    
    ?>
</body>
</html>