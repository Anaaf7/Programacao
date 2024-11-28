<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $estado ="";

        if(isset($_POST['estado'])){
            $estado = $_POST['estado'];
        }
    ?>
</head>
<body>
    <form action="" method="POST">
        <label for="estado">Digite a sigla do seu estado: </label>
        <br>
        <input type="text" name="estado">
        <br><br>

        <input type="submit">
    </form>
</body>
<?php
if(isset($_POST['estado'])){
    switch(strtoupper($estado)){
        case "RJ":
            echo"Você é Carioca";
            break;

            case "SP":
                echo"Você é paulista";
                break;

            case "MG":
                echo"Você é mineiro";
                break;

                case "SC":
                    echo"Você é catarinense";
                    break;
        
                    case "PR":
                        echo"Você é paranaense";
                        break;

                        case "BA":
                            echo"Você é baiano";
                            break;
                
                            default:
                                echo"O estado digitado não está na base de dados";
    }}
?>
</html>