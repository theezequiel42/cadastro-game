<?php
include ("conexao.php");

    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $senha= md5($_POST['senha']);

    $comandosql = "INSERT INTO usuarios (nome) VALUES ('$nome')";

    if (mysqli_query($conexao, $comandosql)) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro: ".mysqli_error($conexao); 
    }

    mysqli_close($conexao); 

?>
