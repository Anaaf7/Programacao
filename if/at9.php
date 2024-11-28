<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $teleitores=0;
    if (isset($_POST['teleitores']))
    {
        $teleitores = $_POST ['teleitores'];
    }

    $vbranco=0;
    if (isset($_POST['vbranco']))
    {
        $vbranco = $_POST ['vbranco'];
    }
    $vnulo=0;
    if (isset($_POST['vnulo']))
    {
        $vnulo = $_POST ['vnulo'];
    }
    $vvalido=0;
    if (isset($_POST['vvalido']))
    {
        $vvalido = $_POST ['vvalido'];
    }

    ?>
</head>
<body>
    <form action="" method= "post">
        <fieldset>
            <label for="eleitores">Total de eleitores</label>
            <input type="number">
            <br><br>

            <label for="vbranco">Qual o número de votos em branco?</label>
            <input type="number" name="vbranco">
            <br><br>

            <label for="vnulo">Qual o número de votos nulos?</label>
            <input type="number" name="vnulo">
            <br><br>

            <label for="vvalido">Qual o número de votos válidos?</label>
            <input type="number" name="vvalido">
            <br><br>

            <input type="submit">
            <br><br>

            <?php
            $pbranco = ($vbranco *100) / $teleitores;
            $pnulo = ($vnulo * 100) / $teleitores;
            $pvalido = ($vvalido * 100) / $teleitores;
    
            echo "O percentual de votos em branco é de: $pbranco, o percentual de votos nulos é de: $pnulo, o percentual de votos válidos é de: $pvalido, ";
            ?>

        </fieldset>
    </form>
    
</body>
</html>