@extends('layouts.app')
@section('content')
<script>
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


  <div class="w3-container w3-white w3-animate-top">
    <h2>Cadastro de Funcionário</h2>
    
    <hr> 
    <div class="w3-card-4 ">
      <div class="w3-container w3-grey">
        <h2>Identificação</h2>
      </div>

      <form class="w3-container w3-row-padding w3-white" id="form" action="verify_adm" method="post">
      @csrf
            </br>
            <div class="w3-col s12">
                @if ($errors->has('perfil_id'))
                      <span class="invalid-feedback">
                          <strong style="color: red;">{{ $errors->first('perfil_id') }}</strong>
                      </span>
                      </br>
                  @endif
              <select class="w3-select" name="perfil_id" required>
                <option value="" disabled selected> Qual o Perfil? </option>
                <option value="1"> Atendente</option>
                <option value="2"> Conselheiro Tutelar </option>
              </select></p>
            </div></br>
          <div class="w3-col s8">
            <input class="w3-input" type="text" name="nome" id="nome" placeholder="Nome Completo" required></p>
          </div>
        <p>
          <div class="w3-col s4">  
            <input class="w3-input" maxlength="10" type="date" placeholder="Data" name="data_nascimento"></p>
          </div>
        <p>
          <div class="w3-col s6">
            <input class="w3-input" name="rg" type="text" placeholder="RG"></p>
          </div>
        <p>
          <div class="w3-col s6">
            <input class="w3-input" name="cpf" maxlength="11" type="text" placeholder="CPF"></p>
          </div>
        <p>
          <div class="w3-col s12">
            <input class="w3-input" name="endereco" type="text" placeholder="Endereço"></p>
          </div>
        <p>
          <div class="w3-col s12">
            <input class="w3-input" type="text" placeholder="Complemento" name="Complemento"></p>
          </div>
    </div>
    <hr>
    <div class="w3-card-2">

      <div class="w3-container w3-grey">
        <h2>Área de Atuação</h2>
      </div>
    
        <div class="w3-panel">
            <div class="w3-col s12">
            @if ($errors->has('area_atuacao_id'))
                      <span class="invalid-feedback">
                          <strong style="color: red;">{{ $errors->first('area_atuacao_id') }}</strong></br>
                      </span>
                  @endif
              <select class="w3-select" name="area_atuacao_id" required>
                <option value="" disabled selected> Qual Conselho irá atuar?</option>
                <option value="1"> 1º Conselho Tutelar</option>
                <option value="2"> 2º Conselho Tutelar</option>
                <option value="3"> 3º Conselho Tutelar</option>
              </select></p></br>
            </div>
        </div>
    </div>
    <hr>
    <div class="w3-card-2">
      <div class="w3-container w3-grey">
        <h2>Cadastro de Login</h2>
      </div>
    
        <div class="w3-panel">
          <p>
            <div class="w3-col s12">
                  @if ($errors->has('email'))
                      <span class="invalid-feedback">
                          <strong style="color: red;">{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              <div class="w3-col s12">
                  <input id="email" class="w3-input" name="email" type="email" placeholder="Email" required></br>
              </div>
              @if ($errors->has('password'))
                  </br>
                      <span class="invalid-feedback">
                          <strong style="color: red;">{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                <div class="w3-col s12">
                  <input id="password" class="w3-input" name="password" type="password" placeholder="Senha"></br>
                </div>
                @if ($errors->has('password'))
                </br>
                      <span class="invalid-feedback">
                          <strong style="color: red;">{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                  <div class="w3-col s12">
                    <input id="password_cofirmation" class="w3-input" name="password_confirmation" type="password" placeholder="Confirme sua Senha"></br>
                  </div>
                  
              </div>
            </div>
        </div>
    </div>
  </form>
  <hr>
  <input class="w3-button w3-green" type="submit" onclick="document.getElementById('form').submit()" value="Enviar" ></p>
</div>
@endsection