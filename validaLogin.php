<?php
include("database/conexaobd.php");

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header(('Location: login.php'));
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id_usuario, nome_usuario from usuario where nome_usuario = '{usuario}' and senha = md5('{senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

echo $row;exit;


?>