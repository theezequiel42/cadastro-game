<?php
include("conexao.php");

    $pergunta_id = $_POST['pergunta_id'];
    $resposta = $_POST['resposta'];
    $correta = isset($_POST['correta']) ? 1 : 0;
    
    $sql = "INSERT INTO respostas (pergunta_id, resposta, correta) VALUES ('$pergunta_id', '$resposta', '$correta')";

    if (mysqli_query($conexao, $sql)) {
        echo "Resposta cadastrada com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
    
?>
