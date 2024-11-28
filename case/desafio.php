<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <?php
    $titulo = "";
    $mensagem = "";


    if(isset($_POST['$titulo'])){
        $titulo = $_POST['titulo'];
        $mensagem = $_POST['mensagem'];
    }

    ?>
</head>
<body>
    <form action="" method="post">

        <label for="titulo">Título:</label>
        <input type="text" name="titulo">
        <br><br>

        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem">Digite aqui...</textarea>
        <br><br>
<!--names dos radios todos iguais-->
        <input type="radio" name="tamanho" id="" value="12px">

        <input type="submit">
    </form>

    <?php
    echo"<$ttitulo style=color:'$ctitulo';> <$titulo> </$ttitulo>";
    echo "<p style='color:$cmensagem; font-size:$tmensagem'> $mensagem </p>";
   
    ?>
</body>
</html>