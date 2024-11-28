<?php
    include "header.php";
?>

    <h1>Controle-se</h1>
    <h4>seu dinheiro no controle</h4>

    <div class="formulario">
    <form action="login.html" method="post">
        <fieldset>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" required>
            <br><br>

            <label for="email">Email: </label>
            <input type="email" name="email" required>
            <br><br>

            <label for="senha">Senha: </label>
            <input type="password" name="senha" required>
            <br><br>
            <input type="submit">
        </fieldset>
    </form>
    </div>

    <a href="cadastro.html">cadastre-se</a>
    <br><br>

    <footer><a href="suporte.html">Suporte</a></footer>

<?php
    include "footer.php";
?>