@extends('layouts.app')
@section('content')
<div class="w3-container w3-row-padding w3-white w3-animate-left">
  <h2>Conselheiros Tutelares de Rio Branco</h2>
  <p></p>
  <p><div class="w3-col s10">
    <input class="w3-input w3-border w3-padding" type="text" placeholder="Procure por nomes.." id="myInput" onkeyup="myFunction()"></p>
  </div>
  
  <div class="w3-col s12 w3-row-padding">
  <hr>
    <table class="w3-card-4 w3-table-all w3-margin-top" id="myTable">
      <tr class="w3-green">
        <th style="width:50%;">Nome</th>
        <th style="width:20%;">Area de Atuação</th>
        <th style="width:40%;">Opções</th>
      </tr>
      @foreach($info as $data)
      <tr>
        <td>{{$data->nome}}</td>
        <td>{{$data->atuacao}}</td>
        <td>
          <div class="w3-col w3-half" >
            <a class="w3-button" href="{{route('info', ['{id}'=>$data->id])}}" title="Identidade" ><i class="fa fa-info"></i> Identificação</a>
          </div>
          <div class="w3-col w3-half"> 
              <button class="w3-button" title="Ver Processo em Aberto" onclick="javascript:location='/third/{{$data->id}}'" ><i class="fa fa-folder-open"></i> Processos</button>
          </div> 
        </td>
      </tr>
      @endforeach
    </table>
    <hr>
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
</script>
@endsection