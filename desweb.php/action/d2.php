<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $num = isset($_GET["num"]) ? $_GET["num"] :"";
    ?>
</head>
<body>
    <form action="d3.php" method="get">
    <input type="hidden" name="total" id="total" value="<?=$num?>">
       <?php

for ($i = 0; $i < $num; $i++){
    $x=$i + 1;
    echo"<input type='text' id='n$i' name='n$i'> <br><br>";
}
echo"<input type='submit' value='enviar'>";

?>
    </form>
</body>
</html>
