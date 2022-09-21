@extends('layouts.app')
@section('content')
<div class="w3-container w3-row-padding w3-white w3-animate-left">
  <h2>Listagem de Crianças e Adolescentes</h2>
  <p></p>
  <p><div class="w3-col s6">
    <input class="w3-input w3-border w3-padding" type="text" placeholder="Procure por nomes.." id="myInput" onkeyup="myFunction()"></p>
  </div>
  <p><div class="w3-col s2">
    <input class="w3-input w3-border w3-padding" type="text" placeholder="Por CPF" id="country" onkeyup="myFunction1()"></p>
  </div>
  <p><div class="w3-col s2">
    <input class="w3-input w3-border w3-padding" type="text" placeholder="Por RG" id="rg" onkeyup="myFunction2()"></p>
  </div>
  <div class="w3-col s2">
    <button class="w3-button w3-green" onclick="javascript:location='{{url('/input')}}'"><i class="fa fa-pencil"></i>  Novo</button>
  </div>
  <div class="w3-col s12">
    <table class="w3-card-4 w3-table-all w3-margin-top" id="myTable">
      <tr class="w3-black">
        <th style="width:40%;">Nome</th>
        <th style="width:20%;">CPF</th>
        <th style="width:20%;">RG</th>
        <th style="width:20%;">    Opções</th>
      </tr>
      @foreach ($info as $data)
      <tr>
        <td>{{$data->nome}}</td>
        <td>{{$data->cpf_responsavel}}</td>
        <td>{{$data->rg_responsavel}}</td>
        <td><a href="np/{{$data->id}}" class="w3-button" title="Ver Processo" style="width:100%;"><i class="fa fa-eye"></i> Visualizar Processos </a>
        </td>
      </tr>
      @endforeach
    </table>
    <hr>
  </div>

  <div id="id01" class="w3-modal">
          <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-container">
              <h3>Detalhes do Processo</h3><p></p>
              <div class="w3-col s12">
                <ul class="w3-ul">
                    <div class="w3-container"><p></p>
                      <div class="w3-col s12">
                        <label >Nome do Responsável: 
                          <li class="w3-hover-white"> NOME </li>
                        </label><p></p>
                      </div>
                      <div class="w3-col s12">
                        <label >Histórico: 
                          <div class="w3-container">
                          <ul class="w3-ul">
                            <li class="w3-bar">
                              <div class="w3-bar-item">
                                <span class="w3-large">Nome do Conselheiro - 16/04/2018</span><br>
                                <span>Aprovado por Unamididade pelos Conselheiros: Conselheiro1, Conselheiro2, Conselheiro3 </span>
                              </div>
                            </li>
                            <li class="w3-bar">
                              <div class="w3-bar-item">
                                <span class="w3-large">Nome do Conselheiro - 16/04/2018</span><br>
                                <span>Enviado para Deliberação do Colegiado</span>
                              </div>
                            </li>
                        </label><p></p>
                      </div>
                    </div>
                </ul>
              </div> 
            </div>
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
              <button  type="button" class="w3-button w3-green">Visualizar Processo</button>
              <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red w3-right">X</button>
            </div>
          </div>
        </div>
</div>
<script>
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

function myFunction1() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("country");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction2() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("rg");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
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
@endsection
