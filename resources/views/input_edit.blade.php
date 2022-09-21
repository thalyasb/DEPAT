@extends('layouts.app')
@section('content')
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
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>

@foreach($pessoa as $data)
<body>
  <div class="w3-container w3-white w3-animate-top">
    <h2>Registro de Atendimento</h2>
    
    <hr> 
    <div class="w3-card-4 ">
      <div class="w3-container w3-green">
        <h2>Identificação</h2>
      </div>

      <form class="w3-container w3-row-padding w3-white" id="form" action="edit/{{$data->id}}" method="POST">
        @csrf
        
        <p>
          <div class="w3-col s8">
            <input class="w3-input" type="text" name="nome" id="nome" value="{{$data->nome}}"></p>
          </div>
        <p>
          <div class="w3-col s4">  
            <input class="w3-input" maxlength="10" type="date" value="{{$data->data_nascimento}}" name="data_nascimento" name="dtn"></p>
          </div>
        <p>
          <div class="w3-col s6">
            <input class="w3-input" type="text" placeholder="Genitor" value="{{$data->genitor}}" name="genitor"></p>
          </div>
        <p>
          <div class="w3-col s2">
            <input class="w3-input"  name="contato_genitor" value="{{$data->contato_genitor}}" maxlength="13" type="text" placeholder="Contato" OnKeyPress="formatar('##-#####-####', this)"></p>
          </div>
        <p>
          <div class="w3-col s2">
            <input class="w3-input" maxlength="14" type="text" placeholder="RG" name="rg_genitor" value="{{$data->contato_genitor}}"></p>
          </div>
         <p>
          <div class="w3-col s2">
            <input class="w3-input" maxlength="14" type="text" placeholder="CPF" name="cpf_genitor" value="{{$data->cpf_genitor}}" onkeypress="formatar('###.###.###-##',this)"></p>
          </div>
        <p>
          <div class="w3-col s6">
            <input class="w3-input" type="text" placeholder="Genitora" name="genitora" value="{{$data->genitora}}"></p>
          </div>
        <p>
          <div class="w3-col s2">
            <input class="w3-input" name="contato_genitora" maxlength="13" type="text" placeholder="Contato"  value="{{$data->contato_genitora}}"></p>
          </div>
        <p>
          <div class="w3-col s2">
            <input class="w3-input" maxlength="14" type="text" placeholder="RG" name="rg_genitora" value="{{$data->contato_genitora}}" ></p>
          </div>
        <p>
          <div class="w3-col s2">
            <input class="w3-input" maxlength="14" type="text" placeholder="CPF" name="cpf_genitora" value="{{$data->cpf_genitora}}"></p>
          </div>
        <p>
          <div class="w3-col s6">
            <input class="w3-input" type="text" placeholder="Responsável" name="responsavel" value="{{$data->responsavel}}"></p>
          </div>
        <p>
          <div class="w3-col s2">
            <input class="w3-input" name="contato_responsavel" maxlength="13" type="text" placeholder="Contato" value="{{$data->contato_responsavel}}"></p>
          </div>
        <p>
          <div class="w3-col s2">
            <input class="w3-input" maxlength="14" type="text" placeholder="RG" name="rg_responsavel" value="{{$data->rg_responsavel}}" ></p>
          </div>
        <p>
          <div class="w3-col s2">
            <input class="w3-input" maxlength="14" type="text" placeholder="CPF" name="cpf_responsavel" value="{{$data->cpf_responsavel}}"></p>
          </div>
         <p>
          <div class="w3-col s6">
            <input class="w3-input" type="text" placeholder="Denunciante" name="denunciante" value="{{$data->denunciante}}"></p>
          </div>
        <p>
          <div class="w3-col s2">
            <input class="w3-input" name="contato_denunciante" maxlength="13" type="text" placeholder="Contato" value="{{$data->contato_denunciante}}"></p>
          </div>
        <p>
          <div class="w3-col s2">
            <input class="w3-input" maxlength="14" type="text" placeholder="RG" name="rg_denunciante" value="{{$data->rg_denunciante}}"></p>
          </div>
        <p>
          <div class="w3-col s2">
            <input class="w3-input" maxlength="14" type="text" placeholder="CPF" name="cpf_denunciante" value="{{$data->cpf_denunciante}}"></p>
          </div>
        <p>
          <div class="w3-col s12">
            <input class="w3-input" name="LocalOcorrencia" type="text" placeholder="Local do Caso" value="{{$data->LocalOcorrencia}}"></p>
          </div>
        <p>
          <div class="w3-col s12">
            <input class="w3-input" name="endereco" type="text" placeholder="Endereço" value="{{$data->endereco}}"></p>
          </div>
        <p>
          <div class="w3-col s12">
            <input class="w3-input" type="text" placeholder="Complemento" name="complemento" value="{{$data->complemento}}"></p>
          </div>
    </div>
    <hr>
    <div class="w3-card-2">

      <div class="w3-container w3-yellow">
        <h2>Direitos Ameaçados ou Violados</h2>
      </div>
	  
        <div class="w3-panel w3-border">
          <p>
            <div class="w3-col s2">
              <input class="w3-check" value="1" type="checkbox" name="vida"><label> Vida</label></p>
            </div>
          <p>
            <div class="w3-col s10">
              <input class="w3-check" value="1" type="checkbox" name="saude"><label> Saúde</label></p>
            </div>
        </div>
        <div class="w3-panel w3-border">
          <p>
            <div class="w3-col s2">
              <input class="w3-check" value="1" type="checkbox" name="freedom"><label> Liberdade</label></p>
            </div>
          <p>
            <div class="w3-col s2">
              <input class="w3-check" value="1" type="checkbox" name="respect"><label> Respeito</label></p>
            </div>
          <p>
            <div class="w3-col s8">
              <input class="w3-check" value="1" type="checkbox" name="dig"><label> Dignidade</label></p>
            </div>
        </div>
        <div class="w3-panel w3-border">
          <p>
            <div class="w3-col s2">
              <input class="w3-check" value="1" type="checkbox" name="ConvF"><label> Familiar</label></p>
            </div>
          <p>
            <div class="w3-col s10">
              <input class="w3-check" value="1" type="checkbox" name="ConvComunitaria"><label> Comunitario</label></p>
            </div>
        </div>
        <div class="w3-panel w3-border">
          <p>
            <div class="w3-col s2">
              <input class="w3-check" value="1" type="checkbox" name="educacao"><label> Educação</label></p>
            </div>
          <p>
            <div class="w3-col s2">
              <input class="w3-check" value="1" type="checkbox" name="cultura"><label> Cultura</label></p>
            </div>
          <p>
            <div class="w3-col s2">
              <input class="w3-check" value="1" type="checkbox" name="esporte"><label> Esporte</label></p>
            </div>
          <p>
            <div class="w3-col s2">
              <input class="w3-check" value="1" type="checkbox" name="lazer"><label> Lazer</label></p>
            </div>
        </div>
        <div class="w3-panel w3-border">
          <p>
            <div class="w3-col s4">
              <input class="w3-check" value="1" type="checkbox" name="profissa"><label> Profissionalização</label></p>
            </div>
          <p>
            <div class="w3-col s4">
              <input class="w3-check" value="1" type="checkbox" name="proTraba"><label> Proteção no Trabalho</label></p>
            </div>
        <p>
            <div class="w3-col s12">
              <textarea placeholder="Quais..." name="pro"></textarea></p>
            </div>
		</div>
    </div>
    <hr>
    <div class="w3-card-4">
      <div class="w3-container w3-red">
        <h2>Agente Violador</h2>
      </div>
        <div class="w3-panel w3-border">
          <p>
            <div class="w3-col s2">
              <input class="w3-check" value="1" type="checkbox" name="Estado"><label> Estado</label></p>
            </div>
          <p>
            <div class="w3-col s10">
              <input class="w3-check" value="1" type="checkbox" name="Sociedade"><label> Sociedade</label></p>
            </div>
        </div>
        <div class="w3-panel w3-border">
          <p>
            <div class="w3-col s2">
              <input class="w3-check" value="1" type="checkbox" name="Pais"><label> Pais</label></p>
            </div>
          <p>
            <div class="w3-col s10">
              <input class="w3-check" value="1" type="checkbox" name="respon"><label> Responsável</label></p>
            </div>
        </div>
        <div class="w3-panel w3-border">
          <p>
            <div class="w3-col s12">
              <input class="w3-check" value="1" type="checkbox" name="Propria"><label> Em razão a sua propria conduta</label></p>
            </div>
		<p>
          <div class="w3-col s12">
            <textarea placeholder="Quais..." name="pro2"></textarea></p>
          </div>
		</div>
    </div>
    <hr>
    <div class="w3-card-4">
      <div class="w3-container w3-red">
        <h2>Situação Atual</h2>
      </div>
		<div class="w3-panel"><p>
			  <div class="w3-col s12">
				  <textarea placeholder="Situação..." name="pro4"></textarea></p>
			  </div>
		</div>
	</div>
	<hr>
	</form>
        <input class="w3-button w3-green" type="submit" onclick="document.getElementById('form').submit()" value="Salvar" ></p>
    <hr>
  </div>
@endforeach
@endsection