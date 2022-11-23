<?php
include 'database/conexaobd.php';

session_start();

$num = mysqli_real_escape_string($conexao, $_POST['nome']);
$documento = mysqli_real_escape_string($conexao, $_POST['documento']);
$objeto = mysqli_real_escape_string($conexao, $_POST['objeto']);
$projetista = mysqli_real_escape_string($conexao, $_POST['projetista']);
$data_recebimento = mysqli_real_escape_string($conexao, $_POST['data_recebimento']);
$data_inclusao = mysqli_real_escape_string($conexao, $_POST['data_inclusao']);
$data_conclusao = mysqli_real_escape_string($conexao, $_POST['data_conclusao']);
$status_processo = mysqli_real_escape_string($conexao, $_POST['status_processo']);
$origem = mysqli_real_escape_string($conexao, $_POST['origem']);
$destino = mysqli_real_escape_string($conexao, $_POST['destino']);
$detalhes = mysqli_real_escape_string($conexao, $_POST['detalhes']);

$delete = "delete processo from processo where id_processo = '$num';";

$_SESSION['message'] = "Processo Excluído com Sucesso!";
if(isset($_SESSION['message'])){
    echo $_SESSION['message']; 
}


?>