<?php 

$hostname = "localhost";
$bancodedados = "depat";
$usuario = "root";
$senha = "$31nfr@ac.gov.br";

$conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($conexao->connect_errno){
    echo "Falha ao conectar: (" . $conexao->connect_errno . ") " . $conexao->connect_error;
}
    echo $conexao->host_info . "\n";
?>

