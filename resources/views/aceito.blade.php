@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
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

<?php
$dt = strtotime($info->data_nascimento);
      
$date = date("d/m/Y", $dt);
?>
<div class="w3-container w3-row-padding w3-white w3-animate-left">
	<hr>
    <div class="w3-card-4 w3-animate-zoom" style="max-width:900px">
      <div class="w3-container">
        <h3>Detalhes do Processo</h3><p></p>
        <div class="w3-col s12">
            <ul class="w3-ul">
                <div class="w3-container"><p></p>
                    <div class="w3-col s12">
                    <label >Nome: 
                        <li class="w3-hover-white"><strong> {{$info->nome}} </strong> </li>
                    </label><p></p>
                    <div class="w3-col s12">
                    <label >Data de Nascimento: 
                        <li class="w3-hover-white"><strong> {{$date}} </strong></li>
                    </label><p></p>
                    <div class="w3-col s12">
                    <label >Nome da Mãe: 
                        <li class="w3-hover-white"><strong>{{$info->genitora}}</strong> </li>
                    </label><p></p>
                    </div>
                    </div>
                    <div class="w3-col s8">
                    <label >Responsável: 
                        <li class="w3-hover-white"><strong>{{$info->responsavel}}</strong> </li>
                    </label><p></p>
                    </div>
                    <div class="w3-col s4">
                    <label> Documento:
                        <li class="w3-hover"><strong>{{$info->cpf_responsavel}}</strong></li>
                    </label><p></p>
                    </div>
                    </div> 
            </ul>
            </div>
      </div>
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <div class="w3-bar">
        <button onclick="javascript:location='/aceito/{{$info->id}}/wright'" type="button" class="w3-button w3-green w3-left">Aceitar</button>
        <button onclick="document.getElementById('id02').style.display='block'" type="button" class="w3-button w3-red">Não Aceitar</button>
        <button onclick="javascript:location='{{url('/novos')}}'" type="button" class="w3-button w3-red w3-right">X</button>
        </div> 
    </div>
    <div id="id02" class="w3-modal">
          <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:800px">
            <div class="w3-container">
              <h3>Recusa do Processo</h3><p></p>
                <form id="form" action="{{$info->id}}/recusa" method="POST">
                @csrf
                    <div class="w3-col s12">
                        <textarea placeholder="Quais..." name="pro2"></textarea></p>
                    </div> 
                </form>
            </div>
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <input class="w3-button w3-green w3-left" type="submit" onclick="document.getElementById('form').submit()" value="Salvar" >
              <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red w3-right"> X</button>
            </div>
          </div>
        </div>
</div>
    <hr>
 </div>
@endsection