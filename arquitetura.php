<?php
include 'database/conexaobd.php'; ?>
<!DOCTYPE html>
<html>
<title>DEPAT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href='https://css.gg/pen.css' rel='stylesheet'>
<link href='https://css.gg/trash.css' rel='stylesheet'>
<link href='https://css.gg/file-document.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="shortcut icon" type="imagem/png" href="./public/img/DEPAT (3).png" />
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
<script type="text/javascript" src="./public/js/jquery.js"> </script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
<script>
        $(document).ready(function () {
            $('#myTable').DataTable({
        language: {
            lengthMenu: '_MENU_ Processos por página',
            search: 'Busca: ',
            zeroRecords: 'Nenhuma informação encontrada.',
            info: 'Mostrando _PAGE_ de _PAGES_',
            infoEmpty: 'No records available',
            infoFiltered: '(Total de _MAX_ processos)',
            paginate:{
                previous: 'Anterior',
                next: 'Próximo'
            }
        },
    });
        });
    </script>

<style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Noto Sans", sans-serif
    }
</style>

<!-- CABEÇALHO -->

<body class="w3-light-grey">
    <div class="w3-bar w3-top w3-highway-blue w3-large" style="z-index:4">
        <a class="w3-bar-item w3-button w3-right w3-hover-none w3-hover-text-light-grey" href="logout"><i class="fa fa-times"></i>&nbsp; Sair</a>
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
            <a href="home.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home"></i>&nbsp; Página Inicial</a>
            <a href="cadastro.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-address-card fa-fw"></i>&nbsp;
                Cadastro</a>
            <a href="arquitetura.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-building fa-fw"></i>&nbsp; Arquitetura</a>
            <a href="complementares.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw"></i>&nbsp;
                Complementares</a>
            <a href="orçamento.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>&nbsp;
                Orçamento</a>
            <a href="relatorios.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file fa-fw"></i>&nbsp; Relatórios</a>
            <a href="cadastroUsuario.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp; Cadastro de Usuários</a>
        </div>
    </nav>

    <!-- FORMULÁRIO -->

    <form class="w3-container w3-row-padding w3-white" style="margin-left:14%" id="form" method="POST" action="./editaProcesso.php">
        <header class="w3-container" style="padding-top:22px">
            <h2><i class="w3-blue"></i> PROCESSOS ARQUITETÔNICOS</h2>
            <p></p>
            <hr>
        </header>
        <div class="w3-container w3-row-padding w3-white w3-animate-left">              
                    <table id="myTable">
                    <thead>
                    <tr>
                        <th>N° Processo</th>
                        <th>Status</th>
                        <th>Origem</th>
                        <th>Documento</th>
                        <th>Objeto</th>
                        <th>Projetista</th>
                        <th>Destino</th>
                        <th></th>
                        <th>Ação</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    //seleciona todos os itens da tabela
                    $query =
                        "select * from processo where destino = 'arquitetura'";
                    $result = mysqli_query($conexao, $query);

                    //conta o total de itens
                    $total = mysqli_num_rows($result);

                    //exibe os produtos selecionados
                    while ($row_usuario = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                    <td><?php echo $row_usuario['num']; ?></td>
                        <td><?php echo $row_usuario['status_processo']; ?></td>
                        <td><?php echo $row_usuario['origem']; ?></td>
                        <td><?php echo $row_usuario['documento']; ?></td>
                        <td><?php echo $row_usuario['objeto']; ?></td>
                        <td><?php echo $row_usuario['projetista']; ?></td>
                        <td><?php echo $row_usuario['destino']; ?></td>
                        <td>
                            <form action="editaProcesso.php" method="POST">
                                <input hidden type="number" value="<?php echo $row_usuario[
                                    'id_processo'
                                ]; ?>" name="id">
                                <button class="w3-button" type="submit"><span class="material-icons">edit</span></button>
                            </form>
                        </td>
                        <td>
                            <form action="excluir.php" method="POST">
                                <input hidden type="number" value="<?php echo $row_usuario[
                                    'id_processo'
                                ]; ?>" name="id">
                                <button class="w3-button" type="submit"><span class="material-icons">delete</span></button>
                            </form>
                        </td>
                        <td>
                            <form action="documento.php" method="POST">
                                <input hidden type="number" value="<?php echo $row_usuario[
                                    'id_processo'
                                ]; ?>" name="id">
                                <button class="w3-button" type="submit"><span class="material-icons">visibility</span></button>
                            </form>
                        </td>
                    </tr>
                    <?php }
                    ?>
                    <tbody>
                    </table>
               
                <style>
                    * {
                    margin: 0;
                    padding: 0;
                    }

                    body {
                    background-color: #fafafa;
                    }

                    table {
                    color: #333;
                    font-size: .9em;
                    text-align:center;
                    font-weight: 300;
                    line-height: 40px;
                    border-collapse: separate;
                    border-spacing: 0;
                    border: 2px solid #00477e;
                    width: 1550px;
                    margin: 50px auto;
                    box-shadow: 0 4px 8px 0 rgba(0,0,0,.16);
                    border-radius: 2px;
                    }

                    th {
                    background: #00477e;
                    color: #fff;
                    border: none;
                    }

                    tr:hover:not(th) {background-color: rgba(0,0,0,.16);}


                    input[type="button"] {
                    transition: all .3s;
                        border: 1px solid #ddd;
                        padding: 8px 16px;
                        text-decoration: none;
                        border-radius: 5px;
                    font-size: 15px;
                    }

                    input[type="button"]:not(.active) {
                    background-color:transparent;
                    }

                    .active {
                    background-color: #2A85B6;
                    color :#fff;
                    }

                    input[type="button"]:hover:not(.active) {
                    background-color: #ddd;
                    }
                </style>
           
            <p></p>
            <p></p>
        </div>


        <!-- SOBREPOSIÇÃO AO ABRIR A BARRA LATERAL -->
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="close(mySidebar)" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

        <!-- !CONTEÚDO DA PÁGINA! -->
        <div class="w3-main w3-white" style="margin-left:300px;margin-top:43px;"></div>
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

           /* function myFunction(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show w3-animation-left";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }*/

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