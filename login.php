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

footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100px;
    text-align: center;
    line-height: 100px;
}
</style>


<div class="container">
    <div class="w3-padding w3-display-topmiddle" style="width:50%;height:50%">
        <div class="w3-center"><br>
            <img src="public/img/DEPAT.png" alt="Avatar" style="width:25%" class="w3-circle w3-margin-top">
        </div>

        <form class="w3-container" style="margin-left:32%" method="POST" action="validaLogin.php">

            <div class="w3-section w3-half">
                <label for="usuario"><b>Usuário:</b></label>
                <input id="usuario" type="text" class="w3-input w3-border w3-margin-bottom " name="usuario" value="">

                <label for="senha"><b>Senha:</b></label>
                <input id="senha" type="password" class="w3-input w3-border" name="senha" required
                    oninvalid="this.setCustomValidity('Insira a senha')" oninput="this.setCustomValidity('')">

                <span class="invalid-feedback">
                    <strong style="color: red"></strong></br>
                </span>
                <span class="invalid-feedback">
                    <strong style="color: red"></strong></br>
                </span>


                <button type="submit" class="w3-button w3-block w3-green w3-section w3-padding">
                    Entrar
                </button>
                <label>

            </div>
    </div>
        </form>
</div>
</div>
</div>
</div>
</div>
<footer>
    Todos os direitos reservados © 2022
</footer>