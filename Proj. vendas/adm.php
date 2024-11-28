<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <title>Administrador</title>
    <?php
    $bianca = "Bianca Wolff"; // Nome de usuário correto
    $senhaB = "01062008"; // Senha correta
    $error = "";
    //verificar se o formulario foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Pegando os valores do formulário
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // Verificando se as credenciais são válidas
        if ($username === $bianca && $password === $senhaB) {
            // Redireciona para a página de administrador se as credenciais estiverem corretas
            header("Location: tabelaA.html");
            exit(); // Para garantir que o script pare após o redirecionamento
        } else {
            // Se as credenciais estiverem incorretas, define uma mensagem de erro
            $error = "Nome de usuário ou senha incorretos.";
        }
    }
    ?>
</head>

<header>
        <h1 class="tmarca">Conforto Total</h1>
        <a href="home.html" class="home"><img src="css/imagens/home.png" alt="voltar para a tela inicial"></a>
    </header>

<body>
<form id="LoginAdministrador" action="" method="post">
    <div class="centralizar">
    <fieldset>
    <h2>Seu Login de Administrador</h2>
    <label for="username">Nome de Usuário</label><br>
    <input type="text" id="username" name="username" required class="adm" placeholder="Digite o seu nome..."><br><br>

    <label for="password">Senha</label><br>
    <input type="password"  name="password" id="password" required class="adm" placeholder="Digite a sua senha..."><br><br>

    <button type="submit" class="adm"><a href="tabela.html">Enviar</a></button>
    </fieldset>
    </div>
</form>

<footer>
    <a href="tabela.html"><img src="css/imagens/suporte.png" alt=""></a>
   <a href="">Sobre nós</a>
</footer>

<?php
if (!empty($error)) {
    echo "<p>$error</p>";
}
?>
</body>
</html>
