<?php
include 'database/conexaobd.php'; ?>
<!DOCTYPE html>
<html>
<title>DEPAT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="shortcut icon" type="imagem/png" href="./public/img/DEPAT (3).png" />
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">

<style>
html,
body,
h1,
h2,
h3,
h4,
p,
b,
td,
th,
h5 {
    font-family: "Noto Sans", sans-serif;
}
</style>

<!-- CABEÇALHO -->

<body class="w3-light-grey">
    <div class="w3-bar w3-top w3-highway-blue w3-large" style="z-index:4">
        <a class="w3-bar-item w3-button w3-right w3-hover-none w3-hover-text-light-grey" href="logout"><i
                class="fa fa-times"></i>&nbsp; Sair</a>
        <span class="w3-bar-item w3-left">DEPAT</span>
    </div>
    <br>
    <br>

    <!-- MENU -->
    <nav class="w3-sidebar w3-collapse w3-white " style="z-index:3;width:250px;" id="mySidebar"><br>
        <div class="w3-container w3-row w3-cell">
            <div class="w3-col s4">
                <img src="public/img/depat (6).png" class="w3-circle" style="width:230px">
            </div>
            <div class="w3-col s8 w3-bar w3-cell-middle">
                <span> <strong></strong></span><br>
            </div>
        </div>
        <hr>
                <div class="w3-container">
            <h5>Menu</h5>
        </div>
        <div class="w3-bar-block">
            <a href="index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home"></i>&nbsp; Página Inicial</a>
            <a href="cadastro.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-address-card fa-fw"></i>&nbsp;
                Cadastro</a>
            <a href="arquitetura.php" class="w3-bar-item w3-button w3-padding"><i
                    class="fa fa-building fa-fw"></i>&nbsp; Arquitetura</a>
            <a href="complementares.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw"></i>&nbsp;
                Complementares</a>
            <a href="orçamento.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>&nbsp;
                Orçamento</a>
            <a href="relatorios.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file fa-fw"></i>&nbsp; Relatórios</a>
            <a href="cadastroUsuario.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp; Cadastro de Usuários</a>
        </div>
    </nav>

<div class="w3-container w3-row-padding w3-white w3-center" style="margin-left:14%;">
  <h1>Informações Gerais do Processo</h1>

  <form>
    <div class="w3-responsive w3-center"  id="printableArea">

                <?php
                $id = mysqli_real_escape_string($conexao, $_POST['id']);

                $select =
                    'select * from processo p where p.id_processo = ' .
                    $id .
                    ' LIMIT 1;';

                $result = mysqli_query($conexao, $select);
                ?> 
            <div class="w3-container w3-border w3-large w3-white" >
                
                <?php while ($row_usuario = mysqli_fetch_assoc($result)) { ?> 
                    <br><p>
                    <img src="public/img/brasao-do-acre.png" style="width:5%">
                    <br><p>
                    <h3>ESTADO DO ACRE</b><h3>
                    <h3>SECRETARIA DE ESTADO DE OBRAS PÚBLICAS</h3>
                    <br><p>
                    <table class="w3-table-all">
                        <tr>
                            <th>Número do processo:</th>
                            <td><?php echo $row_usuario['num']; ?></td>
                        </tr>
                        <tr>
                            <th>Número do Documento:</th>
                            <td></b><?php echo $row_usuario[
                                'documento'
                            ]; ?></td>
                        </tr>
                        <tr>
                            <th>Objeto:</th>
                            <td><?php echo $row_usuario['objeto']; ?></td>
                        </tr>    
                        <tr>
                            <th>Projetista:</th>
                            <td><?php echo $row_usuario['projetista']; ?></td>
                        </tr>
                        <tr>
                            <th>Data de Recebimento:</th>
                            <td><?php echo $row_usuario[
                                'data_recebimento'
                            ]; ?></td>
                        </tr>    
                        <tr>
                            <th>Data de Inclusão:</th>
                            <td><?php echo $row_usuario[
                                'data_inclusao'
                            ]; ?></td>
                        </tr>
                        <tr>
                            <th>Data de Conclusão:</th>
                            <td><?php echo $row_usuario[
                                'data_conclusao'
                            ]; ?></td>
                        </tr>
                        <tr>
                            <th>Status do Processo:</th>
                            <td><?php echo $row_usuario[
                                'status_processo'
                            ]; ?></td>
                        </tr>
                        <tr>
                            <th>Origem:</th>
                            <td><?php echo $row_usuario['origem']; ?></td>
                        </tr>
                        <tr>
                            <th>Destino:</th>
                            <td><?php echo $row_usuario['destino']; ?></td>
                        </tr>
                        <tr>
                            <th>Disciplinas:</th>
                            <td><?php echo $row_usuario['disciplinas']; ?></td>
                        </tr>   
                    </table>
                    <br>                                  
                <?php } ?> 
            </div>
            <br>
    </div>
            <input class="w3-button w3-blue w3-start w3-round" type="button" onclick="printDiv('printableArea')" value="Imprimir"/>
  </form>

</div>

 
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>



</body>
</html>

