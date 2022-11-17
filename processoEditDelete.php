<?php
include 'database/conexaobd.php';

$query = "select * from processo where destino = 'arquitetura'";

$result = mysqli_query($conexao, $query);

while($row_usuario = mysqli_fetch_assoc($result)){
    echo "ID: " . $row_usuario['id_processo'] . "<br>";
    echo "Numero Processo: " . $row_usuario['num'] . "<br>";
    echo "Data de Recebimento: " . $row_usuario['data_recebimento'] . "<br>";
    echo "Data de Inclusão: " . $row_usuario['data_inclusao'] . "<br>";
    echo "Data de conclusão: " . $row_usuario['data_conclusao'] . "<br>";
    echo "Status: " . $row_usuario['status_processo'] . "<br>";
    echo "Origem: " . $row_usuario['origem'] . "<br>";
    echo "Documento: " . $row_usuario['documento'] . "<br>";
    echo "Objeto: " . $row_usuario['objeto'] . "<br>";
    echo "Projetista: " . $row_usuario['projetista'] . "<br>";
    echo "Destino: " . $row_usuario['destino'] . "<br>";
    echo "Detalhes: " . $row_usuario['detalhes'] . "<br><hr>";
}

?>