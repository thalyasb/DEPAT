<!DOCTYPE html>
<html>
<title>DEPAT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href='https://css.gg/file-document.css' rel='stylesheet'><link href='https://css.gg/home.css' rel='stylesheet'>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="shortcut icon" type="imagem/png" href="./public/img/depat-sem-fundo.png" />
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
<script type="text/javascript" src="./public/js/jquery.js"> </script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>

<script>
$(document).ready(function() {
    $('#myTable').DataTable({
        language: {
            lengthMenu: '_MENU_ Processos por página',
            search: 'Busca: ',
            zeroRecords: 'Nenhuma informação encontrada.',
            info: 'Mostrando _PAGE_ de _PAGES_',
            infoEmpty: 'No records available',
            infoFiltered: '(Total de _MAX_ processos)',
            paginate: {
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
p,
b,
td,
th,
h5 {
    font-family: "Raleway", sans-serif;
}
</style>

<?php include 'database/conexaobd.php'; ?>

<body class="w3-light-grey">
    <div class="w3-bar w3-top w3-highway-blue w3-large" style="z-index:4">
        <a class="w3-bar-item w3-button w3-right w3-hover-none w3-hover-text-light-grey" href="login.php"><i
                class="fa fa-times"></i>&nbsp; Sair</a>
        <span class="w3-bar-item w3-left">DEPAT</span>
    </div>


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
            <a href="index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home"></i>&nbsp; Página
                Inicial</a>
            <a href="cadastro.php" class="w3-bar-item w3-button w3-padding"><i
                    class="fa fa-address-card fa-fw"></i>&nbsp;
                Cadastro</a>
            <a href="arquitetura.php" class="w3-bar-item w3-button w3-padding"><i
                    class="fa fa-building fa-fw"></i>&nbsp; Arquitetura</a>
            <a href="complementares.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw"></i>&nbsp;
                Complementares</a>
            <a href="orçamento.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>&nbsp;
                Orçamento</a>
            <a href="relatorios.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file fa-fw"></i>&nbsp;
                Relatórios</a>
            <a href="cadastroUsuario.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-circle"
                    aria-hidden="true"></i>&nbsp; Cadastro de Usuários</a>
        </div>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close(mySidebar)" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-white" style="margin-left:300px;margin-top:43px;">

        <!-- @yield('content') -->

    </div>

    <form class="w3-container w3-row-padding w3-white" style="margin-left:14%;" id="form" method="POST"
        action="./documento.php">
        <header class="w3-container" style="padding-top:22px">
            <h3><b><i class="w3-blue"></i> PROCESSOS</b></h3>
        </header>
        <header class="w3-container" style="padding-top:22px">
            <h5><b><i class="fa fa-clipboard-list"></i> Estatísticas</b></h5>
        </header>

        <div class="w3-row-padding w3-text-white w3-margin-bottom w3-animate-left">
            <div class="w3-quarter">
                <div class="w3-container w3-padding-16" style="background-color: #76C893;">
                    <div class="w3-left"><i class="fa fa-bars w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <?php $query = "select count(*) as total from processo";

                        $result = mysqli_query($conexao, $query);

                        ?>
                        <?php while ($row_usuario = mysqli_fetch_assoc($result)) { ?>
                        <h3><?php echo $row_usuario['total'] ?></h3>
                        <?php } ?>
                    </div>
                    <div class="w3-clear"></div>
                    <a href="relatorios.php">
                        <h4>Todos os Processos</h4>
                    </a>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-container w3-text-white w3-padding-16" style="background-color: #52B69A;">
                    <div class="w3-left"><i class="fa fa-bars w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <?php $query = "select count(*) as total_arquitetura from processo where destino = 'arquitetura'";

                        $result = mysqli_query($conexao, $query);

                        ?>
                        <?php while ($row_usuario = mysqli_fetch_assoc($result)) { ?>
                        <h3><?php echo $row_usuario['total_arquitetura'] ?></h3>
                        <?php } ?>
                    </div>
                    <div class="w3-clear"></div>
                    <a href="arquitetura.php">
                        <h4>Processos de Arquitetura</h4>
                    </a>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-container w3-text-white w3-padding-16 "style="background-color: #34A0A4;">
                    <div class="w3-left"><i class="fa fa-bars w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <?php $query = "select count(*) as total_complementares from processo where destino = 'complementares'";

                        $result = mysqli_query($conexao, $query);

                        ?>
                        <?php while ($row_usuario = mysqli_fetch_assoc($result)) { ?>
                        <h3><?php echo $row_usuario['total_complementares'] ?></h3>
                        <?php } ?>
                    </div>
                    <div class="w3-clear"></div>
                    <a href="complementares.php">
                        <h4>Processos Complementares</h4>
                    </a>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-container w3-text-white w3-padding-16" style="background-color:#168AAD">
                    <div class="w3-left"><i class="fa fa-bars w3-xxxlarge" aria-hidden="true"></i></div>
                    <div class="w3-right">
                        <?php $query = "select count(*) as total_orcamento from processo where destino = 'orcamento'";

                        $result = mysqli_query($conexao, $query);

                        ?>
                        <?php while ($row_usuario = mysqli_fetch_assoc($result)) { ?>
                        <h3><?php echo $row_usuario['total_orcamento'] ?></h3>
                        <?php } ?>
                    </div>
                    <div class="w3-clear"></div>
                    <a href="orçamento.php">
                        <h4> Processos de Orçamento </h4>
                    </a>
                </div>
            </div>
        </div>

        <div class="w3-container w3-row-padding w3-white w3-animate-left">
            <hr>
            <h2>Listagem</h2>
            <p></p>

            <table id="myTable">
                <br>
                <thead>
                    <tr>
                        <th>Número do Processo</th>
                        <th>Status</th>
                        <th>Local</th>
                        <th>Origem</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     //seleciona todos os itens da tabela    
                     $query = "select * from processo";
                     $result = mysqli_query($conexao, $query);
 
                     //conta o total de itens 
                     $total = mysqli_num_rows($result);
 
                    //exibe os produtos selecionados
                    while ($row_usuario = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row_usuario['num'] ?></td>
                        <td><?php echo $row_usuario['status_processo'] ?></td>
                        <td><?php echo $row_usuario['destino'] ?></td>
                        <td><?php echo $row_usuario['origem'] ?></td>
                        <td>
                            <form action="documento.php" method="POST">
                                <input hidden type="number" value="<?php echo $row_usuario['id_processo'] ?>" name="id">
                                <button class="w3-button" type="submit" style="width:40%;"><i class="gg-file-document"></i></button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
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
                text-align: center;
                font-weight: 300;
                line-height: 40px;
                border-collapse: separate;
                border-spacing: 0;
                border: 2px solid #00477e;
                width: 1550px;
                margin: 50px auto;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .16);
                border-radius: 2px;
            }

            th {
                background: #00477e;
                color: #fff;
                border: none;
            }

            tr:hover:not(th) {
                background-color: rgba(0, 0, 0, .16);
            }


            input[type="button"] {
                transition: all .3s;
                border: 1px solid #ddd;
                padding: 8px 16px;
                text-decoration: none;
                border-radius: 5px;
                font-size: 15px;
            }

            input[type="button"]:not(.active) {
                background-color: transparent;
            }

            .active {
                background-color: #2A85B6;
                color: #fff;
            }

            input[type="button"]:hover:not(.active) {
                background-color: #ddd;
            }
            </style>
            <br>
            <br>
            <br>
            <hr>
            <style>
            .numero {
                text-decoration: none;
                background: #2A85B6;
                text-align: center;
                padding: 3px 0;
                display: block;
                margin: 0 2px;
                float: left;
                width: 20px;
                color: #fff;
            }

            .numero:hover,
            .numativo,
            .controle:hover {
                background: #1B3B54;
            }

            .controle {
                text-decoration: none;
                background: #2A85B6;
                text-align: center;
                padding: 3px 8px;
                display: block;
                margin: 0 3px;
                float: left;
                color: #fff;
            }
            </style>
        </div>
        </div>


        <script>

        </script>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkUOdZ5y7hMm0yrcCQoCvLwzdM6M8s5qk&callback=initMap">
        </script>
        <script
            src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
        </script>
        </div>
        </div>
        </div>

        <script>
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");

        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");

        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
            } else {
                mySidebar.style.display = 'block';
            }

        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
            overlayBg.style.display = "none";
        }

        /*function myFunction(id) {
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

    </form>
</body>

</html>