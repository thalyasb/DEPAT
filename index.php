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






    <form class="w3-container w3-row-padding w3-white" style="margin-left:14%" id="form" method="POST" action="./editaProcesso.php">
        <header class="w3-container" style="padding-top:22px">
            <h3><b><i class="w3-blue"></i> PROCESSOS</b></h3>
        </header>
        <header class="w3-container" style="padding-top:22px">
            <h5><b><i class="fa fa-clipboard-list"></i> Estatísticas</b></h5>
        </header>

        <div class="w3-row-padding w3-margin-bottom w3-animate-left">
            <div class="w3-quarter">
                <div class="w3-container w3-green w3-padding-16">
                    <div class="w3-left"><i class="fa fa-bars w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3>0</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>Todos os Processos</h4>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-container w3-red w3-padding-16">
                    <div class="w3-left"><i class="fa fa-book w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3>0</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>Processos de Arquitetura</h4>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-container w3-teal w3-padding-16">
                    <div class="w3-left"><i class="fa fa-stethoscope w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3>0</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>Processos Complementares</h4>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-container w3-blue w3-padding-16">
                    <div class="w3-left"><i class="fa fa-bar-chart w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3>0</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4> Processos de Orçamento </h4>
                </div>
            </div>
        </div>

        <div class="w3-container w3-row-padding w3-white w3-animate-left">
            <h2>Processos em Espera</h2>
            <p></p>
            <hr>
            <div class="w3-col s12">
                <table class="w3-card-4 w3-table-all w3-margin-top" id="myTable">
                    <tr class="w3-black">
                        <th style="width:40%;">Nome</th>
                        <th style="width:30%;">Status</th>
                        <th style="width:30%;">Opções</th>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button class="w3-button" title="Ver Processo" style="width:100%;"><i class="fa fa-eye"></i> Visualizar</button>
                    </tr>
     
                </table>
                <hr>
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

</body>

</html>