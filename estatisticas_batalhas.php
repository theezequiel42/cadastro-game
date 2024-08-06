<?php
include("conexao.php");

    $usuario_id = $_POST['usuario_id'];
    $vitorias = $_POST['vitorias'];
    $derrotas = $_POST['derrotas'];
    
    $sql = "INSERT INTO estatisticas_batalhas (usuario_id, vitorias, derrotas, data_ultima_atualizacao) VALUES ('$usuario_id', '$vitorias', '$derrotas', NOW())";

    if (mysqli_query($conexao, $sql)) {
        echo "Estatísticas de batalha cadastradas com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);

?>
