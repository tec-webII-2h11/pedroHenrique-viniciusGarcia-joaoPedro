<?php
    $nome = $_POST["nome"];
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $erro = 0;
    
$mensagem1="";
$mensagem2="";
$mensagem3="";
    if (empty($nome) or strstr($nome,' ')==FALSE){
        $mensagem1 = "Digite o nome corretamente<br>";
        $erro = 1;
    }
    
    if (empty($usuario)){
        $mensagem2 = "Digite um nome de usuário válido<br>";
        $erro = 1;
    }
    
    if(empty($senha)||strlen($senha)<8){
        $mensagem3 = "Digite uma senha válida<br>";
        $erro = 1;
    }
    
    if ($erro==0){
        $mensagem = "Cadastrado com sucesso.";
    }else{
        $mensagem = $mensagem1.$mensagem2.$mensagem3;
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href=cadastro.css>
    <?php include "topo.php"; ?>
</head>
<body>
<article>
    <p>
    <?php echo "$mensagem"?>
    </p>
</article>
    <footer>
        <?php include "footerzin.php"; ?>
    </footer>
</body>
</html>