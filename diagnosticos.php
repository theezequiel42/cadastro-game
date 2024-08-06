<?php
include("conexao.php");

    $descricao = $_POST['descricao'];
    
    $sql = "INSERT INTO diagnosticos (descricao, data_criacao) VALUES ('$descricao', NOW())";

    if (mysqli_query($conexao, $sql)) {
        echo "Diagnóstico cadastrado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);

?>
