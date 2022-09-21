
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

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

</style>
<script>

</script>
<body>

<center><img src="{!! asset('img/PMRB.jpg') !!}"></center>

  <center><h1>Relatório</h1></center>
  <center><h2>SISTU - Sistema Tutelar</h2></center>
  <BR>
  <hr>
  <div class="w3-container">
    <div class="w3-col s10"><p align="justify"><h3>O relatório abaixo contém dados referentes ao período de </h3></p></div>
  </div>
    <div class="w3-panel w3-border">
      <h3>Contagem do total de processos naquele período <strong> {{$index}}</Strong><h3>
    </div>
    <br>
    <div class="w3-container w3-row-padding w3-white">
      <center><h2>Direito Violado</h2></center>
      <p></p>
      <div class="w3-col s12">
        <table class="w3-table-all w3-margin-top" id="myTable">
          <tr>
            <th style="width:40%;">Nome</th>
            <th style="width:30%;">Quantidade</th>
          </tr>
          <tr>
            <td>Saude</td>
            <td>{{$saude}}</td>
          </tr>
          <tr>
            <td>Vida</td>
            <td>{{$vida}}</td>
          </tr>
          <tr>
            <td>Liberdade</td>
            <td>{{$freedom}}</td>
          </tr>
          <tr>
            <td>Educação</td>
            <td>{{$educacao}}</td>
          </tr>
          <tr>
            <td>Respeito</td>
            <td>{{$respect}}</td>
          </tr>
          <tr>
            <td>Dignidade</td>
            <td>{{$dig}}</td>
          </tr>
          <tr>
            <td>Familia</td>
            <td>{{$ConvF}}</td>
          </tr>
          <tr>
            <td>Comunidade</td>
            <td>{{$vida}}</td>
          </tr>
          <tr>
            <td>Cultura</td>
            <td>{{$ConvComunitaria}}</td>
          </tr>
          <tr>
            <td>Esporte</td>
            <td>{{$esporte}}</td>
          </tr>
          <tr>
            <td>Lazer</td>
            <td>{{$lazer}}</td>
          </tr>
          <tr>
            <td>Profissão</td>
            <td>{{$profissa}}</td>
          </tr>
        </table>
        <hr>
      </div>
</div>



<center><h4>Rio Branco - Acre<h4></center>
<center><h4><?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
echo strftime('%d de %B de %Y', strtotime('today'));
?></h4></center></p>

</body>