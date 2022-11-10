<!DOCTYPE html>
<html>
<title>DEPAT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<style>
html,
body,
h1,
h2,
h3,
h4,
h5 {
    font-family: "Raleway", sans-serif
}
</style>

<!-- CABEÇALHO -->

<body class="w3-light-grey">
    <div class="w3-bar w3-top w3-blue w3-large" style="z-index:4">
        <a class="w3-bar-item w3-button w3-right w3-hover-none w3-hover-text-light-grey" href="logout"><i
                class="fa fa-times"></i>&nbsp; Sair</a>
        <span class="w3-bar-item w3-left">DEPAT</span>
    </div>
    <br>
    <br>

     <!-- FORMULÁRIO -->

     <form class="w3-container w3-row-padding w3-white" style="margin-left:15%;margin-right:15%" id="form" method="POST" action="./validaUsuario.php">
        <header class="w3-container" style="padding-top:22px">
            <h3><b><i class="w3-blue"></i> CADASTRO DE USUÁRIOS</b></h3>
        </header>
        <div class="w3-col s12">
            <input class="w3-input" type="text" name="nome" id="nome" placeholder="Nome Completo" required>
            <p>
                <input class="w3-input" type="text" name="cpf" id="cpf" placeholder="CPF" required>
        </div>

        <div class="w3-col s12">
            <input class="w3-input" name="usuario" type="text" placeholder="Usuário" required></p>
            <input class="w3-input" name="senha" type="text" placeholder="Senha" required></p>
        </div>

    </form>
    <div class="w3-container w3-row-padding w3-white" style="margin-left:15%;margin-right:15%">
        <p>
            <input class="w3-button w3-blue w3-start w3-round" type="submit"
                onclick="document.getElementById('form').submit()" value="Salvar">
            <input class="w3-button w3-red w3-start w3-round" type="submit"
                onclick="document.getElementById('form').submit()" value="Cancelar">
        </p>
    </div>
    <br>
</body>
</html>