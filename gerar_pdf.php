<?php

// Carregar o Composer
require './vendor/autoload.php';

// Incluir conexao com BD
include_once './database/conexaobd.php';

// QUERY para recuperar os registros do banco de dados
$query = "SELECT * FROM processo";

// Prepara a QUERY
$prepare = $conexao->prepare($query);

// Executar a QUERY
$prepare->execute();

// Informacoes para o PDF
$dados = "<!DOCTYPE html>";
$dados .= "<html lang='pt-br'>";
$dados .= "<head>";
$dados .= "<meta charset='UTF-8'>";
$dados .= "<link rel='stylesheet' href='http://localhost/celke/css/custom.css'";
$dados .= "<title>GERANDUUUUUU PÊDEÉFEEEEE</title>";
$dados .= "</head>";
$dados .= "<body>";
$dados .= "<h1>Informações do Processo</h1>";

$dados .= "<img src='public/img/brasao-do-acre.png style=width:5%'><br>";
$dados .= " INSERIR DATA AQUI";
$dados .= "</body>";

$result = $prepare->get_result();


//Ler os registros retornado do BD
while($row_usuario = $result->fetch_array(MYSQLI_NUM)){
   // var_dump($row_usuario); 
//    extract($row_usuario);
    
    $dados .= "Numero Processo: $row_usuario[0] <br>";
    $dados .= "Numero Documento: $row_usuario[1] <br>";
    $dados .= "Objeto: $row_usuario[2] <br>";
    $dados .= "Objeto: $row_usuario[3] <br>";
    $dados .= "Objeto: $row_usuario[4] <br>";
    $dados .= "Objeto: $row_usuario[5] <br>";
    $dados .= "Objeto: $row_usuario[6] <br>";
    $dados .= "Objeto: $row_usuario[7] <br>";
    $dados .= "Objeto: $row_usuario[8] <br>";
    $dados .= "Objeto: $row_usuario[9] <br>";
    $dados .= "Objeto: $row_usuario[10] <br>";
    $dados .= "<hr>";

}

// Referenciar o namespace Dompdf
use Dompdf\Dompdf;

// Instanciar e usar a classe dompdf
$dompdf = new Dompdf(['enable_remote' => true]);

// Instanciar o metodo loadHtml e enviar o conteudo do PDF
//$dompdf->loadHtml($dados);
$dompdf->loadHtml('Oi');

// Configurar o tamanho e a orientacao do papel
// landscape - Imprimir no formato paisagem
$dompdf->setPaper('A4', 'landscape');
// portrait - Imprimir no formato retrato
//$dompdf->setPaper('A4', 'portrait');

// Renderizar o HTML como PDF
$dompdf->render();

// Gerar o PDF
$dompdf->stream();



