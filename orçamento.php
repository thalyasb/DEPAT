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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="shortcut icon" type="imagem/png" href="./public/img/depatlogo.png" />
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">



<style type="text/css">
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Raleway", sans-serif
    }

    ;

    .tabela {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 10px;
    }

    textarea {
        width: 100%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
    }
</style>

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
            <a href="index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home"></i>&nbsp; P??gina Inicial</a>
            <a href="cadastro.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-address-card fa-fw"></i>&nbsp;
                Cadastro</a>
            <a href="arquitetura.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-building fa-fw"></i>&nbsp; Arquitetura</a>
            <a href="complementares.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw"></i>&nbsp;
                Complementares</a>
            <a href="or??amento.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>&nbsp;
                Or??amento</a>
            <a href="relatorios.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file fa-fw"></i>&nbsp; Relat??rios</a>
            <a href="cadastroUsuario.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp; Cadastro de Usu??rios</a>
        </div>
    </nav>

    <!-- FORMUL??RIO -->

    <form class="w3-container w3-row-padding w3-white" style="margin-left:14%" id="form" method="POST" action="./editaProcesso.php">
        <header class="w3-container" style="padding-top:22px">
            <h3><b><i class="w3-blue"></i> PROCESSOS DE OR??AMENTO</b></h3>
            <p></p>
            <hr>
        </header>
        <div class="w3-responsive w3-col s12">
            <table class="w3-card-4 w3-table-all w3-margin-top" id="myTable">
                <tr class="w3-highway-blue">
                    <td>N?? Processo</td>
                    <td>Status</td>
                    <td>Origem</td>
                    <td>Documento</td>
                    <td>Objeto</td>
                    <td>Projetista</td>
                    <td>Destino</td>
                    <td></td>
                    <td>A????o</td>
                    <td></td>
                </tr>
                <?php
                //verifica a p??gina atual caso seja informada na URL, sen??o atribui como 1?? p??gina
                $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

                //seleciona todos os itens da tabela
                $query = "select * from processo where destino = 'orcamento'";
                $result = mysqli_query($conexao, $query);

                //conta o total de itens
                $total = mysqli_num_rows($result);

                //seta a quantidade de itens por p??gina, neste caso, 2 itens
                $registros = 8;

                //calcula o n??mero de p??ginas arredondando o resultado para cima
                $numPaginas = ceil($total / $registros);

                //variavel para calcular o in??cio da visualiza????o com base na p??gina atual
                $inicio = $registros * $pagina - $registros;

                //seleciona os itens por p??gina
                $query = "select * from processo where destino = 'orcamento' limit $inicio,$registros";
                $result = mysqli_query($conexao, $query);
                $total = mysqli_num_rows($result);
                ?>

                <?php //exibe os produtos selecionado
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
                                <button class="w3-button" type="submit"><i class="tiny material-icons">mode_edit</i></button>
                            </form>
                        </td>
                        <td>
                            <form action="excluir.php" method="POST">
                                <input hidden type="number" value="<?php echo $row_usuario[
                                    'id_processo'
                                ]; ?>" name="id">
                                <button class="w3-button" type="submit"><i class="tiny material-icons">delete</i></button>
                            </form>
                        </td>
                        <td>
                            <form action="documento.php" method="POST">
                                <input hidden type="number" value="<?php echo $row_usuario[
                                    'id_processo'
                                ]; ?>" name="id">
                                <button class="w3-button" type="submit"><i class="tiny material-icons">visibility</i></button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>

            </table>
            <br>
            <?php
            //exibe a pagina????o

            if ($pagina > 1) {
                echo "<a href='orcamento.php?pagina=" .
                    ($pagina - 1) .
                    "' class='controle'>&laquo; anterior</a>";
            }

            for ($i = 1; $i < $numPaginas + 1; $i++) {
                $ativo = $i == $pagina ? 'numativo' : '';
                echo "<a href='orcamento.php?pagina=" .
                    $i .
                    "' class='numero " .
                    $ativo .
                    "'> " .
                    $i .
                    ' </a>';
            }

            if ($pagina < $numPaginas) {
                echo "<a href='orcamento.php?pagina=" .
                    ($pagina + 1) .
                    "' class='controle'>proximo &raquo;</a>";
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

        <!-- SOBREPOSI????O AO ABRIR A BARRA LATERAL -->
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="close(mySidebar)" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

        <!-- !CONTE??DO DA P??GINA! -->
        <div class="w3-main w3-white" style="margin-left:300px;margin-top:43px;"></div>

        <!-- SCRIPT DE MANIPULA????O DA P??GINA -->
        <script>
            // BAARRA LATERAL 
            var mySidebar = document.getElementById("mySidebar");

            // EFEITO DE SOBREPOSI????O
            var overlayBg = document.getElementById("myOverlay");

            // MOSTRA E OCULTA A BARRA LATERAL
            function open() {
                if (mySidebar.style.display === 'block') {
                    mySidebar.style.display = 'none';
                } else {
                    mySidebar.style.display = 'block';
                }

            }

            // FECHA O MENU COM O BOT??O SAIR
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