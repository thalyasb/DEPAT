<?php
include 'database/conexaobd.php';
include 'conexaoLDAP.php';

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    echo 'vazio';
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$query =
    "select id_usuario, usuario, senha_nova from usuario where usuario = '" .
    $usuario .
    "' and senha = md5('" .
    $senha .
    "')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


if ($row == 1) {
    $user = null;

    while($obj = $result->fetch_object()){
        $user = $obj;
        if($obj->senha_nova == 'OK'){
            header('Location: index.php');
        }
    }
    $_SESSION['usuario'] = $user;
    header('Location: home.php');
    exit();
} else {
    header('Location: index.php');
    exit();
}
?>
