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

<style>
html,
body,
h1,
h2,
h3,
h4,
h5 {
    font-family: "Raleway", sans-serif
}
</style>

<!-- CABEÇALHO -->

<body class="w3-light-grey">
    <div class="w3-bar w3-top w3-blue w3-large" style="z-index:4">
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

<div class="w3-container w3-row-padding w3-white w3-center" style="margin-left:14%">
  <h1>Informações Gerais do Processo</h1>

  <form>
  <div class="w3-responsive w3-center">

                <?php $query = "select * from processo where destino = 'arquitetura'";

                        $result = mysqli_query($conexao, $query); 
                        
                ?> 
            <div  class="w3-container w3-row-padding w3-white" style="margin-left:14%">
                <?php while($row_usuario = mysqli_fetch_assoc($result)){ ?> 
                    <ul class="w3-ul w3-large" style="margin-left:14%">
                    
                    <li><b>Número do processo:</b> <?php echo $row_usuario['num'] ?></li>
                    
                    <li><b>Número do Documento:</b><?php echo $row_usuario['documento'] ?></li>
                    
                    <li><b>Objeto:</b> <?php echo $row_usuario['objeto'] ?></li>
                    
                    <li><b>Projetista:</b> <?php echo $row_usuario['projetista'] ?></li>
                    
                    <li><b>Data de Recebimento:</b> <?php echo $row_usuario['data_recebimento'] ?></li>
                    
                    <li><b>Data de Inclusão:</b> <?php echo $row_usuario['data_inclusao'] ?></li>
                   
                    <li><b>Data de Conclusão:</b> <?php echo $row_usuario['data_conclusao'] ?></li>
                    
                    <li><b>Status do Processo:</b> <?php echo $row_usuario['status_processo'] ?></li>
                    
                    <li><b>Origem:</b> <?php echo $row_usuario['origem'] ?></li>
                    
                    <li><b>Destino:</b> <?php echo $row_usuario['destino'] ?></li>
                    
                    <li><b>Detalhes:</b> <?php echo $row_usuario['detalhes'] ?></li>
                    <li></li>
                    </ul>
            </div>
                <?php } ?> 
  </form>
</div>


</body>
</html>

