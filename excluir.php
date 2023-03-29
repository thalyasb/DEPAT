<?php
include 'database/conexaobd.php';

session_start();

$id = mysqli_real_escape_string($conexao, $_POST['id']);


try{
    $delete = "delete processo from processo where id_processo = '" . $id . "';";
    mysqli_query($conexao, $delete);
        header('Location: home.php');
            exit();
}catch(Exception $err){
    echo $err;
}

//$_SESSION['message'] = "Processo Excluído com Sucesso!";
//if(isset($_SESSION['message'])){
//    echo $_SESSION['message']; 
//}


?>