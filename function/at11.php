<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>at4</title>
    <?php
        $n = 0;

        if (isset($_POST['n'])) {
            $n = $_POST['n'];
        }
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="">Digite a média do aluno; </label>
        <input type="text" name="n" id="n"><br><br>

        <input type="submit" value="Enviar">
    </form>
    <?php
        function media($n){
            if($n >= 0 && $n <= 4.9){
                return "D";
            }else if($n >=5  && $n <= 6.9 ){
                return "C";
            }else if($n >= 7 && $n <= 8.9){
                return "B";
            }else{
                return "A";
            }
        }

        $resposta = media($n);
        echo "A sigla é $resposta";
    ?>
</body>
</html>