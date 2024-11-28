<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome de vocês</title>
    <?php
        $texto = isset($_GET["texto"]) ? $_GET["texto"] : "";

    ?>
</head>
<body>
    <form action="acao.php" method="get">
        <input type="text" name="texto" id="texto" value="<?= $texto?>" >
        <input type="submit" value="Rodrigo">
    </form>
</body>
</html>