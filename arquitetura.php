<!DOCTYPE html>
<html>
<title>DEPAT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">


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
            <a href="" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home"></i>&nbsp; Página Inicial</a>
            <a href="cadastro.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-address-card fa-fw"></i>&nbsp;
                Cadastro</a>
            <a href="arquitetura.php" class="w3-bar-item w3-button w3-padding"><i
                    class="fa fa-building fa-fw"></i>&nbsp; Arquitetura</a>
            <a href="complementares.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw"></i>&nbsp;
                Complementares</a>
            <a href="orçamento.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>&nbsp;
                Orçamento</a>
            <a href="" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file fa-fw"></i>&nbsp; Relatórios</a>
        </div>
    </nav>

    <!-- FORMULÁRIO -->

    <form class="w3-container w3-row-padding w3-white" style="margin-left:16%" id="form" method="POST">
        <header class="w3-container" style="padding-top:22px">
            <h3><b><i class="w3-blue"></i> PROCESSOS DE ARQUITETURA</b></h3>
        </header>
        <div class="w3-col s12">
            <input class="w3-input" type="text" name="nome" id="nome" placeholder="Número do Processo" required>
            <p>
                <input class="w3-input" type="text" name="nome" id="nome" placeholder="Documento" required>
        </div>

        <div class="w3-col s12">
            <input class="w3-input" name="endereco" type="text" placeholder="Objeto" required></p>
            <input class="w3-input" name="endereco" type="text" placeholder="Projetista" required></p>
        </div>

        <div class="w3-col s4">
            <input class="w3-input" maxlength="10" type="date" placeholder="Data do Documento" name="data_recebimento"
                name="data_nascimento">Data de Recebimento: </p>
            <input class="w3-input" maxlength="10" type="date" placeholder="Data do Documento" name="data_documento"
                name="data_nascimento">Data de Inicio: </p>
            <input class="w3-input" maxlength="10" type="date" placeholder="Data de Previsão" name="data_previsão"
                name="data_nascimento">Previsão de Entrega: </p>
        </div>
        <div class="w3-col s4">
            <select class="w3-select" name="oriTipo" required>
                <option value="" disabled selected> Status:</option>
                <option value=""> Iniciado</option>
                <option value=""> Em Execução</option>
                <option value=""> Finalizado </option>
            </select></p></br>
        </div>
        <div class="w3-col s4">
            <select class="w3-select" name="oriTipo" required>
                <option value="" disabled selected> Origem:</option>
                <option value=""> DEPAD</option>
                <option value=""> DEPCO</option>
                <option value=""> DITEC</option>
                <option value=""> SEINFRA</option>
                <option value=""> AGRONEGÓCIOS</option>
                <option value=""> CAGEACRE</option>
                <option value=""> SEPA</option>
                <option value=""> AMBNE</option>
                <option value=""> PCAC</option>
                <option value=""> DEPOB</option>
                <option value=""> ISE</option>
                <option value=""> SEPLAG</option>
                <option value=""> SECRETÁRIO/SEINFRA</option>
                <option value=""> PGE</option>
                <option value=""> CASA CIVIL</option>
            </select></p></br>
        </div>

        <div class="w3-col s4">
            <select class="w3-select" name="oriTipo" required>
                <option value="" disabled selected> Destino:</option>
                <option value=""> Arquitetura</option>
                <option value=""> Complementares</option>
                <option value=""> Orçamento</option>
            </select></p></br>
        </div>

        <div class="w3-col s4">
                <p>Disciplinas:</p>
                <input class="w3-check" type="checkbox" checked="checked" >
                <label>Estrutural</label>
                <input class="w3-check" type="checkbox">
                <label>Instalações Hidrossanitárias</label>
                <input class="w3-check" type="checkbox" checked="checked" >
                <label>Intalações Elétricas</label>
                <input class="w3-check" type="checkbox">
                <label>Climatização</label>
                <input class="w3-check" type="checkbox" checked="checked" >
                <label>Combate Incêndio e Pânico</label>
                <input class="w3-check" type="checkbox">
                <label>Drenagem Pluvial</label>
                <br>
                <br>
                <br>
                <label>Detalhes da Disciplina:</label>
                <input class="w3-input w3-border" type="text">
        </div>
    </form>
    <div class="w3-container w3-row-padding w3-white" style="margin-left:16%">
        <p>
            <input class="w3-button w3-green w3-start w3-round" type="submit"
                onclick="document.getElementById('form').submit()" value="Buscar">
            <input class="w3-button w3-blue w3-start w3-round" type="submit"
                onclick="document.getElementById('form').submit()" value="Salvar">
            <input class="w3-button w3-red w3-start w3-round" type="submit"
                onclick="document.getElementById('form').submit()" value="Cancelar">
        </p>
    </div>
    <br>

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