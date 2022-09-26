<!DOCTYPE html>
<html>
<title>DEPAT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="shortcut icon" type="imagem/png" href="./public/img/brasao-do-acre.png"/>
  
 
<style type="text/css">
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif};
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
    <div class="w3-bar w3-top w3-blue w3-large" style="z-index:4">
        <a class="w3-bar-item w3-button w3-right w3-hover-none w3-hover-text-light-grey" href="logout"><i class="fa fa-times"></i>&nbsp; Sair</a>
        <h2>Cadastro de Processos</h2>
      </div>


        <form class="w3-container w3-row-padding w3-white" id="form" method="POST">
          <br>
          <br>
          <br>
          <br>
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
                  <input class="w3-input" maxlength="10" type="date" placeholder="Data do Documento" name="data_nascimento" name="data_nascimento">Data de Inicio: </p>
                  <input class="w3-input" maxlength="10" type="date" placeholder="Data de Recebimento" name="data_nascimento" name="data_nascimento">Previsão de Entrega: </p>
              </div>
              <div  class="w3-col s4">
                  <select class="w3-select" name="oriTipo" required>
                      <option value="" disabled selected> Status:</option>
                      <option value=""> Iniciado</option>
                      <option value=""> Em Execução</option>
                      <option value=""> Finalizado </option>
                  </select></p></br>
              </div>
              <div  class="w3-col s4">
                  <select class="w3-select" name="oriTipo" required>
                      <option value="" disabled selected> Destino:</option>
                      <option value=""> Complementares</option>
                      <option value=""> Orçamento</option>
                  </select></p></br>
              </div>
            
	    </form>
            <p>
                <input class="w3-button w3-blue w3-start w3-round" type="submit" onclick="document.getElementById('form').submit()" value="Salvar">
                <input class="w3-button w3-red w3-start w3-round" type="submit" onclick="document.getElementById('form').submit()" value="Cancelar">
            </p> 
            <br>
     <!-- SOBREPOSIÇÃO AO ABRIR A BARRA LATERAL -->
     <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="close(mySidebar)" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !CONTEÚDO DA PÁGINA! -->
    <div class="w3-main w3-white" style="margin-left:300px;margin-top:43px;"></div> 

    <script>
    // BAARRA LATERAL 
    var mySidebar = document.getElementById("mySidebar");

    // EFEITO DE SOBREPOSIÇÃO
    var overlayBg = document.getElementById("myOverlay");

    // MOSTRA E OCULTA A BARRA LATERAL
    function open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
      }else{
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