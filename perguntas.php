<?php
include("conexao.php");

    $disciplina = $_POST['disciplina'];
    $nivel = $_POST['nivel'];
    $enunciado = $_POST['enunciado'];
    
    $sql = "INSERT INTO perguntas (disciplina, nivel, enunciado, data_criacao) VALUES ('$disciplina', '$nivel', '$enunciado', NOW())";

    if (mysqli_query($conexao, $sql)) {
        echo "Pergunta cadastrada com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
?>
