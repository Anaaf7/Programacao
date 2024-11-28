<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $num = isset($_GET["total"]) ? $_GET["total"] :0;
    ?>
</head>
<body>
    <form action="" method="get">
    <?php
for ($i = 0; $i < $num; $i++){
    $val = "n".$i;
    $valor = isset($_GET[$val]) ? $_GET[$val] :"";
    echo" <input type='checkbox' id='my[]' name='my[]' value='$valor'>$valor <br><br>";
}
?>

<input type="submit" value="Enviar">
    </form>
</body>
</html>
