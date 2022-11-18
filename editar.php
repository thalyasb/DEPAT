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




$select = $mysqli->query("select * from processo where num = '$num'");
    if($select) {
        $row = $select->num_rows;
        $f = $select->fetch_assoc();

        if($row > 0 && $num !== intval($f['num'])){
            echo "Processo já cadastrado na base de dados.";
        }
    }

    if (empty($num)){
        $insert = $mysqli->query("insert into processo (num, documento, objeto, projetista, data_recebimento, data_inclusao, data_conclusao, status_processo, origem, destino, detalhes) 
        values ( '" . $num . "','" . $documento . "','" . $objeto . "','" . $projetista . "','" . $data_recebimento . "','" . $data_inclusao . "','" . $data_conclusao . "',
                    '" . $status_processo . "','" . $origem . "','" . $destino . "','" . $detalhes . "')");
                if($insert){
                    $num = $mysqli->insert_num;
                    echo"Processo cadastrado com sucesso!";
                
    }else {
        $query = "update processo set num = '$num', 
                    documento = '$documento', 
                    objeto = '$objeto', 
                    projetista = '$projetista', 
                    data_recebimento = '$data_recebimento', 
                    data_inclusao = '$data_inclusao', 
                    data_conclusao = '$data_conclusao', 
                    status_processo = '$status_processo', 
                    origem = '$origem', 
                    destino = '$destino', 
                    detalhes = '$detalhes'
        where num = '$num';";
        $updade = $mysqli->query($query);
        if($updade){
            echo"Processo alterado com sucessso!";
        } else {
            $erro = true;
            echo $mysqli->error;
        }
    }


$_SESSION['message'] = "Cadastro Alterado com Sucesso!";
if(isset($_SESSION['message'])){
    echo $_SESSION['message']; 
}


?>