<?php

// Carregar o Composer
require './vendor/autoload.php';

// Incluir conexao com BD
include_once './database/conexaobd.php';

// QUERY para recuperar os registros do banco de dados
$query = "select num, document, objeto from processo ";

// Prepara a QUERY
$result = $conn->prepare($query);

// Executar a QUERY
$result->execute();

// Informacoes para o PDF
$dados = "<!DOCTYPE html>";
$dados .= "<html lang='pt-br'>";
$dados .= "<head>";
$dados .= "<meta charset='UTF-8'>";
$dados .= "<link rel='stylesheet' href='http://localhost/celke/css/custom.css'";
$dados .= "<title>Celke - Gerar PDF</title>";
$dados .= "</head>";
$dados .= "<body>";
$dados .= "<h1>Listar os Usuário</h1>";


//Ler os registros retornado do BD
while ($row_usuario = $result->fetch(PDO::FETCH_ASSOC)) {
    //var_dump($row_usuario);
    extract($row_usuario);
    $dados .= "Numero Processo: $num <br>";
    $dados .= "Numero Documento: $documento <br>";
    $dados .= "Objeto: $objeto <br>";
    $dados .= "<hr>";
}

$dados .= "<img src='public/img/brasao-do-acre.png style=width:5%'><br>";
$dados .= "O PHP proin iaculis, libero et dictum fringilla, ex metus scelerisque mauris, sit amet lobortis enim justo quis arcu. Proin eget pharetra ipsum, eget auctor purus.";
$dados .= "</body>";

// Referenciar o namespace Dompdf
use Dompdf\Dompdf;

// Instanciar e usar a classe dompdf
$dompdf = new Dompdf(['enable_remote' => true]);

// Instanciar o metodo loadHtml e enviar o conteudo do PDF
$dompdf->loadHtml($dados);

// Configurar o tamanho e a orientacao do papel
// landscape - Imprimir no formato paisagem
//$dompdf->setPaper('A4', 'landscape');
// portrait - Imprimir no formato retrato
$dompdf->setPaper('A4', 'portrait');

// Renderizar o HTML como PDF
$dompdf->render();

// Gerar o PDF
$dompdf->stream();


?>