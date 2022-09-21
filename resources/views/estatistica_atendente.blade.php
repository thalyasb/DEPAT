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
  <hr>
</div>
@endsection