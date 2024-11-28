<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $codigo = 0;
    $quantidade = 0;

    if(isset($_POST['codigo'])){
        $codigo = $_POST['codigo'];
        $quantidade = $_POST['quantidade'];
    }
    ?>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="codigo">Digite o código do produto:</label>
            <input type="number" name="codigo">
            <br><br>

            <label for="quantidade">Digite a quantidade de produtos:</label>
            <input type="number" name="quantidade">
            <br><br>

            <input type="submit">
        </fieldset>
    </form>
    <?php
    switch($codigo){
        case 100:
            $vpagar = 1.70 * $quantidade;
            echo"O valor a pagar é de $vpagar reais";
            break;

            case 101:
                $vpagar = 2.30 * $quantidade;
                echo"O valor a pagar é de $vpagar reais";
                break;

                case 102:
                    $vpagar = 2.60 * $quantidade;
                    echo"O valor a pagar é de $vpagar reais";
                    break;

                    case 103:
                        $vpagar = 2.40 * $quantidade;
                        echo"O valor a pagar é de $vpagar reais";
                        break;

                        case 104:
                            $vpagar = 2.50 * $quantidade;
                            echo"O valor a pagar é de $vpagar reais";
                            break;

                            case 105:
                                $vpagar = 1.00 * $quantidade;
                                echo"O valor a pagar é de $vpagar reais";
                                break;

                                default:
                                echo"Código não encontrado";
    }
    ?>
</body>
</html>