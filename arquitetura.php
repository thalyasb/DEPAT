<?php
include 'database/conexaobd.php';
?>
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
    <nav class="w3-sidebar w3-collapse w3-white " style="z-index:3;width:300px;" id="mySidebar"><br>
        <div class="w3-container w3-row w3-cell">
            <div class="w3-col s4">
                <img src="public/img/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
            </div>
            <div class="w3-col s8 w3-bar w3-cell-middle">
                <span>Bem Vindo, <strong>$Usuario</strong></span><br>
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

    <!-- FORMULÁRIO -->

    <form class="w3-container w3-row-padding w3-white" style="margin-left:16%" id="form" method="POST"  action="./processoEditDelete.php">
        <header class="w3-container" style="padding-top:22px">
            <h3><b><i class="w3-blue"></i> PROCESSOS DE ARQUITETURA</b></h3>
        </header>
        
        <div class="w3-responsive">
            <table class="w3-table w3-bordered w3-card-4">
                <tr class="w3-light-grey"> 
                    <td><b>N° Processo</b></td> 
                    <td><b>Inclusão</b></td> 
                    <td><b>Recebimento</b></td> 
                    <td><b>Conclusão</b></td> 
                    <td><b>Status</b></td> 
                    <td><b>Origem</b></td> 
                    <td><b>Documento</b></td> 
                    <td><b>Objeto</b></td> 
                    <td><b>Projetista</b></td>
                    <td><b>Destino</b></td>
                    <td><b>Detalhes</b></td>
                    <td><b>Ação</b></td>
                </tr>
                <?php $query = "select * from processo where destino = 'arquitetura'";

                        $result = mysqli_query($conexao, $query); 
                        
                ?> 

                <?php while($row_usuario = mysqli_fetch_assoc($result)){ ?> 
                <tr> 
                    <td><?php echo $row_usuario['num'] ?></td> 
                    <td><?php echo $row_usuario['data_recebimento'] ?></td> 
                    <td><?php echo $row_usuario['data_inclusao'] ?></td> 
                    <td><?php echo $row_usuario['data_conclusao'] ?></td> 
                    <td><?php echo $row_usuario['status_processo'] ?></td> 
                    <td><?php echo $row_usuario['origem'] ?></td> 
                    <td><?php echo $row_usuario['documento'] ?></td> 
                    <td><?php echo $row_usuario['objeto'] ?></td> 
                    <td><?php echo $row_usuario['projetista'] ?></td>
                    <td><?php echo $row_usuario['destino'] ?></td>
                    <td><?php echo $row_usuario['detalhes'] ?></td>
                    <td>
                        <a type="submit" href="editaProcesso.php"><i class="tiny material-icons">edit</i></a>
                        <a type="submit" href="excluir.php"><i class="tiny material-icons">delete</i></a>
                    </td>
                </tr>
                <?php } ?> 


            </table>
        </div>
     <!-- SCRIPT DE MANIPULAÇÃO DA PÁGINA -->
    <script>
    // BAARRA LATERAL 
    var mySidebar = document.getElementById("mySidebar");

    // EFEITO DE SOBREPOSIÇÃO
    var overlayBg = document.getElementById("myOverlay");

    // MOSTRA E OCULTA A BARRA LATERAL
    function open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
        } else {
            mySidebar.style.display = 'block';
        }

    }

    // FECHA O MENU COM O BOTÃO SAIR
    function close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
    }

    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show w3-animation-left";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    </script>
</body>
</html>

