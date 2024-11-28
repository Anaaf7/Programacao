<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuada</title>
</head>
<body>
    <?php
    $mult = 1;
    $num2 = 2;
    $num3 = 3;

    while ($mult <= 10) {
        $vezes = $num2 * $mult;
        echo "$mult * $num2 = $vezes<br>";
        $mult++;
    }echo "<hr>";
    ?>
</body>
</html>