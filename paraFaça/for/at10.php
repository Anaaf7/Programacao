<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        ls = 0;

        if(isset($_POST['ls'])){
            $ls = $_POST['ls'];
        }
    ?>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="ls">Limite superior: </label>
        <input type="number" name="ls" id="ls">
        <br>
        <label for="inc">Limite superior: </label>
        <input type="number" name="inc" id="inc">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        for ($i=0; $i <=ls ; $i++) { 
            # code...
        }
    ?>
</body>
</html>