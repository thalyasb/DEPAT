@extends('layouts.app')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" type="text/css" href="css/colors.css">

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

.w3-summer-sky,.w3-summer-sky-hover:hover{color:#000!important;background-color:#38B0DE!important}

</style>
<script type="text/javascript">
  function  id(){
    var al = document.getElementById('id05').style.display='block';
  }
</script>

<body>
  <div class="w3-container w3-white w3-animate-top">
    <?php 
      $dt = strtotime($pessoa->data_nascimento);
      
      $date = date("d/m/Y", $dt);
      list($dia, $mes, $ano) = explode('/', $date);

      $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
      $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
      $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    ?>

    <h2>Processo</h2>
    <hr>
  </div>
    <div class="w3-container">
      <div class="w3-card-4 ">
          <div class="w3-container w3-summer-sky">
            <h2>Processo Número - {{$pessoa->id}} </h2>
          </div><p>
      </div>
      <p></p>
      <div class="w3-card-4 ">
        <header class="w3-container w3-summer-sky">
          <div class="w3-col s10">
            <h2>{{$pessoa->nome}}  - {{$idade}} Anos</h2>
          </div>
          <div class="w3-col s2">
            <a disabled= href="input_edit/{{$pessoa->id}}" class="w3-button w3-right w3-xlarge w3-fw"> Editar</a>
          </div>
        </header>
        <ul class="w3-ul">
          <div class="w3-container"><p></p>
            <div class="w3-col s12">
              <label >Data de Nascimento: 
                <li class="w3-hover-white"> {{date("d/m/Y", $dt)}} </li>
              </label><p></p>
            <div class="w3-col s12">
              <label >Nome da Mãe: 
                <li class="w3-hover-white"> {{$pessoa->genitora}} </li>
              </label><p></p>
            </div>
            </div>
            <div class="w3-col s8">
              <label >Responsável: 
                <li class="w3-hover-white">{{$pessoa->responsavel}} </li>
              </label><p></p>
            </div>
            <div class="w3-col s4">
              <label> Documento:
                <li class="w3-hover">{{$pessoa->cpf_responsavel}}</li>
              </label><p></p>
            </div>
          </div> 
        </ul>
      </div><p></p>
      <div class="w3-card-4">
        <header class="w3-container w3-bar w3-summer-sky">
          <div class="w3-col s10">
            <h2 >Histórico</h2>
          </div> 
          <div class="w3-col s2">
            <button disabled onclick="document.getElementById('id05').style.display='block'" class="w3-button w3-right w3-xlarge w3-fw"> Despacho</button>
          </div>
        </header>
        <div class="w3-container">
          <ul class="w3-ul">
          @foreach($info as $data)
          <?php 
           $datacerta = strtotime($data->data_hora);
           $date = date("d/m/Y H:i:s", $datacerta);
          ?>
            <li class="w3-bar">
              <div class="w3-bar-item">
                <span class="w3-large">{{$data->nome}} - {{$date}}</span><br>
                <span><strong>{{$data->status}} - {{$data->descricao}}</strong></span>
              </div>
            </li>
          @endforeach
          </ul><p></p>
        </div><p></p>
      </div>
      <div class="w3-bar w3-down w3-white w3-large" style="z-index:4">
        <button disabled onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-white w3-large w3-border">Deliberação do Colegiado</button>
        <button disabled onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-white w3-large w3-border">Anexar Arquivo</button>
        <button disabled onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-white w3-large w3-border">Adicionar Providência</button>
        <button disabled onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-white w3-large w3-border">Gerar Documento</button>
        <button disabled onclick="javascript:location='{{url('/listagem')}}'" class="w3-button w3-white w3-large w3-border">Nova Pesquisa</button>
      </div>
      </div>
        <p></p>

        <div id="id01" class="w3-modal">
          <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-container">
              <h3>Deliberação do Colegiado</h3><p></p>
              <div class="w3-col s12">
                <textarea placeholder="Quais..." name="pro2"></textarea></p>
              </div> 
            </div>
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
              <button type="button" class="w3-button w3-green">Adicionar</button>
              <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red w3-right">Cancelar</button>
            </div>
          </div>
        </div>
        <div id="id03" class="w3-modal">
          <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-container">
              <h3>Adicionar Providência</h3><p></p>
              <div class="w3-col s12">
                <textarea placeholder="Quais..." name="pro2"></textarea></p>
              </div> 
            </div>
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
              <button onclick="javascript:location='{{url('/processo_deliberacao')}}'" type="button" class="w3-button w3-green">Adicionar</button>
              <button onclick="document.getElementById('id03').style.display='none'" type="button" class="w3-button w3-red w3-right">Cancelar</button>
            </div>
          </div>
        </div>
        <div id="id04" class="w3-modal">
          <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:700px">
            <div class="w3-container">
              <h3>Gerar Documento</h3><p></p>
                <table class="w3-table">
                  <tr>
                    <th>Nome do Documento</th>
                    <th>Ação</th>
                  </tr>
                  <tr>
                    <td>Documento1</td>
                    <td><button type="button" class="w3-button w3-green w3-center">Utilizar</button></td>
                  </tr>
                  <tr>
                    <td>Documento2</td>
                    <td><button type="button" class="w3-button w3-green w3-center">Utilizar</button></td>
                  </tr>
                  <tr>
                    <td>Documento3</td>
                    <td><button type="button" class="w3-button w3-green w3-center">Utilizar</button></td>
                  </tr>
                  <tr>
                    <td>Documento4</td>
                    <td><button type="button" class="w3-button w3-green w3-center">Utilizar</button></td>
                  </tr>
                  <tr>
                    <td>Documento5</td>
                    <td><button type="button" class="w3-button w3-green w3-center">Utilizar</button></td>
                  </tr>
                  <tr>
                    <td>Documento6</td>
                    <td><button type="button" class="w3-button w3-green w3-center">Utilizar</button></td>
                  </tr>
                  <tr>
                    <td>Documento7</td>
                    <td><button type="button" class="w3-button w3-green w3-center">Utilizar</button></td>
                  </tr>
                </table>
            </div>
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
              <button onclick="document.getElementById('id04').style.display='none'" type="button" class="w3-button w3-red w3-right">Cancelar</button>
            </div>
          </div>
        </div>
        <div id="id05" class="w3-modal">
          <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-container">
              <h3>Finalizar Processo</h3><p></p>
              <form id="form_finalizar" action="{{$pessoa->id}}/finalizar" method="POST">
                @csrf
                <div class="w3-col s12">
                  <textarea placeholder="Estou Finalizando o processo...." name="pro2"></textarea></p>
                </div>
              </form> 
            </div>
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <input class="w3-button w3-green w3-left" type="submit" onclick="document.getElementById('form_finalizar').submit()" value="Finalizar" >
              <button onclick="document.getElementById('id05').style.display='none'" type="button" class="w3-button w3-red w3-right">Cancelar</button>
            </div>
          </div>
        </div>

    </div>
  </body>
  @endsection