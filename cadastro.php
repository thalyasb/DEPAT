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
<link rel="shortcut icon" type="imagem/png" href="./public/img/depatlogo.png" />
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">


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

<?php session_start(); ?>

<!-- CABEÇALHO -->

<body class="w3-light-grey">
    <div class="w3-bar w3-top w3-highway-blue w3-large color" style="z-index:4">
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
            <a href="home.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home"></i>&nbsp; Página Inicial</a>
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
    
    <form class="w3-container w3-row-padding w3-white" style="margin-left:14%" id="form" method="POST" action="./validaCadastroProcesso.php">
        <header class="w3-container" style="padding-top:22px">
            <h2><i class="w3-blue"></i> CADASTRO DE PROCESSOS</h2>
            <p></p>
            <hr>
            <p> <?= isset($_SESSION['message'])
                ? $_SESSION['message']
                : '' ?> </p> <?php if (isset($_SESSION['message'])) {
     unset($_SESSION['message']);
 } ?>
        </header>
        <div class="w3-col s12">
            <input class="w3-input" type="text" name="nome" id="nome" placeholder="Número do Processo" required>
            <p>
                <input class="w3-input" type="text" name="documento" id="documento" placeholder="Documento" required>
        </div>

        <div class="w3-col s12">
            <input class="w3-input" name="objeto" type="text" placeholder="Objeto" required></p>
            <input class="w3-input" name="projetista" type="text" placeholder="Projetista" required></p>
        </div>

        <div class="w3-col s4">
            <input class="w3-input" maxlength="10" type="date" required pattern="" placeholder="Data do Documento" name="data_recebimento"
                name="data_recebimento">Data de Recebimento: </p>
            <input class="w3-input" maxlength="10" type="date" required pattern="" placeholder="Data do Documento" name="data_inclusao"
                name="data_inclusao">Data de Inicio: </p>
            <input class="w3-input" maxlength="10" type="date" required pattern="" placeholder="Data de Previsão" name="data_conclusao"
                name="data_conclusao">Previsão de Entrega: </p>
        </div>
        <div class="w3-col s4">
            <select class="w3-select" name="status_processo" required>
                <option value="" disabled selected> Status:</option>
                <option value="Iniciado"> Iniciado</option>
                <option value="Em Execução"> Em Execução</option>
                <option value="Finalizado"> Finalizado </option>
            </select></p></br>
        </div>
        <div class="w3-col s4">
            <select class="w3-select" name="origem" required>
                <option value="" disabled selected> Origem:</option>
                <option value="DEPAT"> DEPAT</option>
                <option value="DEPCO"> DEPCO</option>
                <option value="DITEC"> DITEC</option>
                <option value="SEINFRA"> SEINFRA</option>
                <option value="AGRONEGÓCIOS"> AGRONEGÓCIOS</option>
                <option value="CAGEACRE"> CAGEACRE</option>
                <option value="SEPA"> SEPA</option>
                <option value="AMBNE"> AMBNE</option>
                <option value="PCAC"> PCAC</option>
                <option value="DEPOB"> DEPOB</option>
                <option value="ISE"> ISE</option>
                <option value="SEPLAG"> SEPLAG</option>
                <option value="SECRETÁRIO/SEINFRA"> SECRETÁRIO/SEINFRA</option>
                <option value="PGE"> PGE</option>
                <option value="CASA CIVIL"> CASA CIVIL</option>
            </select></p></br>
        </div>

        <div class="w3-col s4">
            <select class="w3-select" name="destino" required>
                <option value="" disabled selected> Destino:</option>
                <option value="Arquitetura"> Arquitetura</option>
                <option value="Complementares"> Complementares</option>
                <option value="Orçamento"> Orçamento</option>
            </select></p></br>
        </div>

        <div class="w3-col s4" id="check" multiple name="disciplinas" required>
                <p value="disciplinas">Disciplinas:</p>
                <input class="w3-check" type="checkbox" name="disciplina1" value="Estrutural,">
                    <label>Estrutural</label><br>
                <input class="w3-check" type="checkbox" name="disciplina2" value="Instalações Hidrossanitárias,">
                    <label>Instalações Hidrossanitárias</label><br>
                <input class="w3-check" type="checkbox" name="disciplina3" value="Instalações Elétricas,">
                    <label>Instalações Elétricas</label><br>
                <input class="w3-check" type="checkbox" name="disciplina4" value="Climatização,">
                    <label>Climatização</label><br>
                <input class="w3-check" type="checkbox" name="disciplina5" value="Combate Incêndio e Pânico,">
                    <label>Combate Incêndio e Pânico</label><br>
                <input class="w3-check" type="checkbox" name="disciplina6" value="Drenagem Pluvial">
                    <label>Drenagem Pluvial</label><br>
                <br>
                <br>
                <br>
                <label>Outras Disciplinas:</label>
                <input class="w3-input w3-border" name="detalhes" type="text">       
        </div>
    </form>

    <div class="w3-container w3-row-padding w3-white" style="margin-left:14%">
        <p>
            <input class="w3-button w3-blue w3-start w3-round" type="submit"
                onclick="document.getElementById('form').submit()" value="Salvar">
            <input class="w3-button w3-red w3-start w3-round" type="submit"
                onclick="document.getElementById('form').submit()" value="Cancelar">
        </p>
    </div>

    <!-- SOBREPOSIÇÃO AO ABRIR A BARRA LATERAL -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="close(mySidebar)" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>

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