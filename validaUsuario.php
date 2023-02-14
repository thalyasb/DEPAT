<?php
include 'database/conexaobd.php';

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "insert into usuario (nome,cpf,usuario,senha_nova,senha) values ( '" . $nome . "','" . $cpf . "','" . $usuario . "' , 'OK',md5('" . $senha . "'))";

try {
$result = mysqli_query($conexao, $query);
    header('Location: cadastroUsuario.php');
    echo 'Dados Salvo com Sucesso!';
    exit();
} catch (Exception) {
    header('Location: cadastroUsuario.php');
    exit();
}
?>
