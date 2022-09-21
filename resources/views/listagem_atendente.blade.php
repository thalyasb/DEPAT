@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style type="text/css">
  html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body>

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
    <button class="w3-button w3-green" onclick="javascript:location='{{url('/input_atendente')}}'"><i class="fa fa-pencil"></i>  Novo</button>
  </div>
  <div class="w3-col s12">
    <table class="w3-card-4 w3-table-all w3-margin-top" id="myTable">
      <tr class="w3-black">
        <th style="width:40%;">Nome</th>
        <th style="width:20%;">CPF</th>
        <th style="width:20%;">RG</th>
        <th style="width:20%;">Status</th>
      </tr>
      @foreach($info as $data)
      <tr>
        <td>{{$data->nome}}</td>
        <td>{{$data->cpf_responsavel}}</td>
        <td>{{$data->rg_responsavel}}</td>
        <td>{{$data->status}}</td>
      </tr>
      @endforeach
    </table>
    <hr>
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
</body>
</html>
@endsection