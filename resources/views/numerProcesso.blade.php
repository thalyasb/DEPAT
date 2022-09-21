@extends('layouts.app')

@section('content')
<div class="w3-container w3-row-padding w3-white w3-animate-left">
	<hr>
    <div class="w3-card-4 w3-animate-zoom" style="max-width:900px">
      <div class="w3-container">
        <h3>Processos</h3><p></p>
          <table class="w3-table">
            <tr>
              <th>Número Processo</th>
              <th>Ação</th>
            </tr>
            <tr>
            @foreach ($info as $data)
              <td>000{{$data->id}}</td>
              <td><a href="okay/{{$data->id}}" class="w3-button w3-green w3-center">Detalhes</a></td>
            @endforeach
            </tr>
          </table>
      </div>
    <hr>
    </div>
 </div>

@endsection