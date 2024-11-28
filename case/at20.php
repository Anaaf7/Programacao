<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $numero = 0;
    $tipo = 0;

    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
        $tipo = $_POST['tipo'];
    }
    ?>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="numero">Digite um número</label>
            <input type="number" name="numero">
            <br><br>

            <label for="tipo">Digite o tipo da operação</label>
            <input type="number" name="tipo">
            <br><br>

            <input type="submit">
        </fieldset>
    </form>
    <?php
    if(isset($_POST['tipo'])){
        switch($tipo){
        case 1:
            $resultado = $numero / 2;
            echo"$resultado";
            break;

            case 2:
                $resultado = $numero * 2;
                echo"$resultado";
                break;

                case 3:
                    $resultado = $numero * $numero;
                    echo"$resultado";
                    break;

                    case 4:
                        $resultado = $numero * 0.6;
                        echo"$resultado";
                        break;

                        default:
                        echo"Tipo inválido";
    }}
    ?>
</body>
</html>