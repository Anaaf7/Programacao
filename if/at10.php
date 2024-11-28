<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $ghora = 0;
    if(isset($_POST['$ghora'])) {
        $ghora = $_POST['$ghora'];
    }

    $thora = 0;
    if(isset($_POST['$thora'])) {
        $thora = $_POST['$thora'];
    }

    ?>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="ghora">Qual o valor que você ganha por hora trabalhada?</label>
            <input type="number" name="ghora" id="ghora">
            <br><br>

            <label for="thora">Qual foi o tempo que você trablhou em horas neste mês?</label>
            <input type="number" name="thora" id="thora">
            <br><br>

            <input type="submit">
        </fieldset>
    </form>

    <?php
    echo "Você trabalhou $thora ";
    $salariosemdesc = $thora * $ghora;
    echo "Você trabalhou $thora e receberá $salariosemdesc";

    ?>

</body>
</html>