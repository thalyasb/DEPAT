@extends('layouts.app')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style type="text/css">
  html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body>

<div class="w3-container w3-row-padding w3-white w3-animate-left">
  <h2>Conselheiros Tutelares de Rio Branco</h2>
  <p></p>
  <p><div class="w3-col s10">
    <input class="w3-input w3-border w3-padding" type="text" placeholder="Procure por nomes.." id="myInput" onkeyup="myFunction()"></p>
  </div>
  <div class="w3-col s2">
    <button class="w3-button w3-green" onclick="javascript:location='/input_adm' "><i class="fa fa-pencil"></i>  Novo</button>
  </div>
  <div class="w3-col s12 w3-row-padding">
    <table class="w3-card-4 w3-table-all w3-margin-top" id="myTable">
      <tr class="w3-green">
        <th style="width:40%;">Nome</th>
        <th style="width:20%;">Area de Atuação</th>
        <th style="width:20%;">Perfil</th>
        <th style="width:20%;">Opções</th>
      </tr>
    @foreach($conselheiros as $data)
      <tr>
        <td>{{$data->nome}}</td>
        <td>{{$data->atuacao}}</td>
        <td>{{$data->descricao}}</td>
        <td>
          <div class="w3-col w3-half" >
            <a class="w3-button" href="/info_conselheiro/{{$data->id}}" ><i class="fa fa-id-card"></i> Identificação</a>
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

</body>
@endsection
