<!DOCTYPE html>
<html>
<title>DEPAT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

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
<script>

function validate(cpf){
  document.getElementById('cpf_responsavel').onsubmit = function (event){
  var mensagem = 'CPF Inválido'
  if ( CPF.validate(document.getElementById('cpf-validacao').value) === true ) {
    mensagem = 'CPF Válido'
  }
  document.getElementById('resultado-validacao').innerHTML = mensagem
};
}

function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
<body>
    <div class="w3-card-4 ">
      <div class="w3-container w3-blue">
        <h2>Cadastro de Processos</h2>
      </div>

        <form class="w3-container w3-row-padding w3-white" id="form" action="verify_atendente?cadastrado=1" method="POST">
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
                <input class="w3-button w3-green w3-start w3-round" type="submit" onclick="document.getElementById('form').submit()" value="Enviar">
                <input class="w3-button w3-red w3-start w3-round" type="submit" onclick="document.getElementById('form').submit()" value="Cancelar">
            </p> 
            <br>
    </div>
</body>
</html>