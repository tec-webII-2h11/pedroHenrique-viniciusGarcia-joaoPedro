<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href=estiloform.css>
    <?php include "topo.php"; ?>
</head>
<body>
<article>
        <form action="cadastro.php" method="POST">
            <p><label for="nome">Nome:<input type="text" name="nome" id="nome" size="30"></label></p>
            <p><label for="usuario">Nome de Usuário:<input type="text" name="usuario" id="usuario"></label></p>
            <p><label for="email">Email:<input type="email" name="email" id="email" size="30"></label></p>
            <p><label for="senha">Senha:<input type="password" name="senha" id="senha" size="30"></label></p>
            <input type="submit" value="Enviar" name="enviar" id="botao">
        </form>
</article>
    <footer>
        <?php include "footerzin.php"; ?>
    </footer>
</body>
</html>