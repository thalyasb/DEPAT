<?php 

$hostname = "localhost";
$bancodedados = "depat";
$usuario = "root";
$senha = "$31nfr@ac.gov.br";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($mysqli->connect_errno){
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
}

?>