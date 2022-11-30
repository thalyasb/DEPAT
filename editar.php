<?php
include 'database/conexaobd.php';



session_start();
    
        $query = "update processo set num = '" . $num ."', 
                    documento = '" . $documento . "', 
                    objeto = '" . $objeto . "', 
                    projetista = '" . $projetista . "', 
                    data_recebimento = '" . $data_recebimento . "', 
                    data_inclusao = '" . $data_inclusao . "', 
                    data_conclusao = '" . $data_conclusao . "', 
                    status_processo = '" . $status_processo . "', 
                    origem = '" . $origem . "', 
                    destino = '" . $destino . "', 
                    detalhes = '" . $detalhes . "'
        where id_processo = '" . $id . "';";
        $updade = $mysqli->query($query);
        header('Location: arquitetura.php');
        exit();

$_SESSION['message'] = "Cadastro Alterado com Sucesso!";
if(isset($_SESSION['message'])){
    echo $_SESSION['message']; 
}


?>