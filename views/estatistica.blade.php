@extends('layouts.app')
@section('content')

<header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-clipboard-list"></i> Estatísticas</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom w3-animate-left">
    <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-comments w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{$index}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Atendimentos</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-book w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{$proc}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Casos em Aberto</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-stethoscope w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{$saude}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Casos contra a Saúde</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-heartbeat w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{$vida}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4> Casos contra a Vida </h4>
      </div>
    </div>
  </div>

<div class="w3-container w3-row-padding w3-white w3-animate-left">
  <h2>Processos em Espera</h2>
  <p></p>
  <hr>
  <div class="w3-col s12">
    <table class="w3-card-4 w3-table-all w3-margin-top" id="myTable">
      <tr class="w3-black">
        <th style="width:40%;">Nome</th>
        <th style="width:30%;">Status</th>
        <th style="width:30%;">Opções</th>
      </tr>
      @foreach($info as $data)
      <tr>
        <td>{{$data->nome}}</td>
        <td>{{$data->status}}</td>
        <td><button onclick="javascript:location='aceito/{{$data->id}}'" class="w3-button" title="Ver Processo" style="width:100%;"><i class="fa fa-eye"></i> Visualizar</button>
      </tr>
      @endforeach
    </table>
    <hr>
  </div>
</div>
<script>

</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkUOdZ5y7hMm0yrcCQoCvLwzdM6M8s5qk&callback=initMap">
</script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    </div>
  </div>
</div>
@endsection