<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    $valor1 = 0;
    $valor2 = 0;
    $operacao = "";

    if(isset($_POST['valor1'])){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $operacao = $_POST['operacao'];
    }
    ?>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="valor1">Digite o primeiro valor:</label>
            <input type="number" name="valor1" id="">
            <br><br>

            <label for="valor2">Digite o segundo valor:</label>
            <input type="number" name="valor2" id="">
            <br><br>

            <label for="operacao">Digite o tipo de operação:</label>
            <input type="text" name="operacao" id="">
            <br><br>

            <input type="submit" value="enviar">
        </fieldset>
    </form>

    <?php
    switch($operacao){

        case "+":
            $soma = $valor1 + $valor2;
            echo"$soma";
            break;

            case "-":
                $subtracao = $valor1 - $valor2;
                echo"$subtracao";
                break;

                case "/":
                    $divisao = $valor1 / $valor2;
                    echo"$divisao";
                    break;

                    case "*":
                        $multiplicacao = $valor1 * $valor2;
                        echo"$multiplicacao";
                        break;

                        default:
                        echo"Operador inválido";
    }

    ?>
</body>
</html>