<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $codigo = 0;

    if(isset($_POST['codigo'])){
        $codigo = $_POST['codigo'];
    }
    ?>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="codigo">Digite o código do produto:</label>
            <input type="number" name="codigo">
            <br><br>

            <input type="submit">
        </fieldset>
    </form>
    <?php
    switch($codigo){
        case 1:
            echo"Alimento não perecivel";
            break;

            case 2:
            case 3:
            case 4:
                echo"Alimento perecivel";
                break;

                case 5:
                case 6:
                    echo"Vestuário";
                    break;

                    case 7:
                        echo"Higiene pessoal";
                        break;

                        case 8:
                        case 9:
                            echo"Limpeza e útensilios domésticos";
                            break;

                            default:
                            echo"Código inválido";
    }
    ?>
</body>
</html>