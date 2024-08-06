<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "saga_do_conhecimento";

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>
