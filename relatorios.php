<!DOCTYPE html>
<html>
<title>DEPAT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="shortcut icon" type="imagem/png" href="./public/img/depat-sem-fundo.png" />
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">

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

<?php include 'database/conexaobd.php'; ?>

<body class="w3-light-grey">
    <div class="w3-bar w3-top w3-highway-blue w3-large" style="z-index:4">
        <a class="w3-bar-item w3-button w3-right w3-hover-none w3-hover-text-light-grey" href="login.php"><i class="fa fa-times"></i>&nbsp; Sair</a>
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
            <a href="index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home"></i>&nbsp; Página Inicial</a>
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

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close(mySidebar)" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-white" style="margin-left:300px;margin-top:43px;">

        <!-- @yield('content') -->

    </div>
    <form class="w3-container w3-row-padding w3-white" style="margin-left:14%" id="form" method="POST" action="./documento.php">
        <header class="w3-container" style="padding-top:22px">
            
        </header>
        <div class="w3-container w3-row-padding w3-white w3-animate-left">
            <h2>PROCESSOS</h2>
            <p></p>
            <hr>
            <div class="w3-col s12">
                <table class="w3-card-4 w3-table-all w3-margin-top" id="myTable">
                    <tr class="w3-highway-blue">
                        <th style="width:20%;">Número do Processo</th>
                        <th style="width:20%;">Status</th>
                        <th style="width:20%;">Local</th>
                        <th style="width:20%;">Origem</th>
                        <th style="width:20%;">Ação</th>
                    </tr>
                    <?php
                    //verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
                    $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

                    //seleciona todos os itens da tabela    
                    $query = "select * from processo ";
                    $result = mysqli_query($conexao, $query);

                    //conta o total de itens 
                    $total = mysqli_num_rows($result);
                    //seta a quantidade de itens por página, neste caso, 2 itens 
                    $registros = 15;

                    //calcula o número de páginas arredondando o resultado para cima 
                    $numPaginas = ceil($total / $registros);

                    //variavel para calcular o início da visualização com base na página atual 
                    $inicio = ($registros * $pagina) - $registros;

                    //seleciona os itens por página
                    $query = "select * from processo limit $inicio,$registros";
                    $result = mysqli_query($conexao, $query);
                    $total = mysqli_num_rows($result);
                    ?>

                    <?php
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
                                    <button class="w3-button" type="submit" style="width:40%;"><i class="fa fa-eye"></i> Visualizar</button>
                                </form>
                            </td>
                        </tr>

                    <?php } ?>

                    <tr>
                        <td></td>
                        <td></td>

                    </tr>
                </table>

                <br>
                <?php
                //exibe a paginação 


                if ($pagina > 1) {
                    echo "<a href='relatorios.php?pagina=" . ($pagina - 1) . "' class='controle'>&laquo; anterior</a>";
                }

                for ($i = 1; $i < $numPaginas + 1; $i++) {
                    $ativo = ($i == $pagina) ? 'numativo' : '';
                    echo "<a href='relatorios.php?pagina=" . $i . "' class='numero " . $ativo . "'> " . $i . " </a>";
                }

                if ($pagina < $numPaginas) {
                    echo "<a href='relatorios.php?pagina=" . ($pagina + 1) . "' class='controle'>proximo &raquo;</a>";
                }
                ?>
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
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkUOdZ5y7hMm0yrcCQoCvLwzdM6M8s5qk&callback=initMap">
        </script>
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
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
    </form>
</body>

</html>