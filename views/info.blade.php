@extends('layouts.app')
@section('content')
<div class="w3-container w3-row-padding w3-white w3-animate-left">
	<hr>
    <div class="w3-card-4 w3-animate-zoom" style="max-width:900px">
      <div class="w3-container">
        <h3>Identificação do Conselheiro</h3><p></p>
        <div class="w3-col s12">
        <ul class="w3-ul">
        @foreach($conselheiros as $data)
                <?php
                    //dd($conselheiros);
                    $dt = strtotime($data->data_nascimento);
                    
                    $date = date("d/m/Y", $dt);
                    list($dia, $mes, $ano) = explode('/', $date);

                    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
                    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

                ?>
            <div class="w3-container"><p></p>
                <div class="w3-col s6">
                    <label >Nome: 
                        <li class="w3-hover-white"> <strong> {{$data->nome}} </strong> </li>
                    </label><p></p>
                </div>
                <div class="w3-col s4">
                    <label> Idade:
                        <li class="w3-hover"> <strong>{{$idade}}</strong></li>
                    </label><p></p>
                </div>
                <div class="w3-col s2">
                    <label >Data Nascimento: 
                        <li class="w3-hover-white"> <strong> {{$date}}</strong> </li>
                    </label><p></p>
                </div>
                <div class="w3-col s6">
                    <label >Área de Atuação: 
                        <li class="w3-hover-white"> <strong> {{$data->descricao}} </strong></li>
                    </label><p></p>
                </div>
                <div class="w3-col s6">
                    <label >Conselho Tutelar: 
                        <li class="w3-hover-white"> <strong> {{$data->atuacao}} </strong></li>
                    </label><p></p>
                </div>
            </div>
        @endforeach
        </ul>
        </div> 
    </div>
    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="javascript:location='/conselheiro'" type="button" class="w3-button w3-red w3-right">X</button>
    </div>
</div>
<hr>
</div>
@endsection