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
$disciplinas = mysqli_real_escape_string($conexao, $_POST['disciplinas']);

$_SESSION['message'] = "Cadastro Efetuado!";
if(isset($_SESSION['message'])){
    echo $_SESSION['message']; 
}

$query = "insert into processo (num, documento, objeto, projetista, data_recebimento, data_inclusao, data_conclusao, status_processo, origem, destino, detalhes, disciplinas) 
values ( '" . $num . "','" . $documento . "','" . $objeto . "','" . $projetista . "','" . $data_recebimento . "','" . $data_inclusao . "','" . $data_conclusao . "',
            '" . $status_processo . "','" . $origem . "','" . $destino . "','" . $detalhes . "','" . $disciplinas . "')";
            
            try {
                $result =  mysqli_query($conexao, $query);
                echo 'Dados Salvo com Sucesso! <br>';
                
                    header('Location: cadastro.php');
                    exit();
                } catch (Exception $err) {
                    echo "Error  <br> " . $err;
                    
                    header('Location: cadastro.php');
                    exit();
                }
?>