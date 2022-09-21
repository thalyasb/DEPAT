<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<div class="container">
    <div class="w3-padding w3-display-topmiddle" style="width:50%;height:50%">
      <div class="w3-center"><br>
          <img src="img/sistu.jpeg" alt="Avatar" style="width:25%" class="w3-circle w3-margin-top">
      </div>

                    <form class="w3-container" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="w3-section">
                            <label for="email"><b>{{ __('E-Mail') }}</b></label>                            
                                <input id="email" type="email" class="w3-input w3-border w3-margin-bottom" name="email" value="{{ old('email') }}" required oninvalid="this.setCustomValidity('Insira o E-mail válido do Usuário')" oninput="this.setCustomValidity('')">

                                    

                            <label for="password"><b>{{ __('Senha') }}</b></label>
                                <input id="password" type="password" class="w3-input w3-border" name="password" required oninvalid="this.setCustomValidity('Insira a senha')" oninput="this.setCustomValidity('')">
                                @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong style="color: red">{{ $errors->first('email') }}</strong></br>
                                        </span>
                                    @endif
                                @if ($errors->has('password'))
                                    
                                    <span class="invalid-feedback">
                                        <strong style="color: red">{{ $errors->first('password') }}</strong></br>
                                    </span>
                                @endif

                                <button type="submit" class="w3-button w3-block w3-green w3-section w3-padding">
                                    {{ __('Entrar') }}
                                </button>
                                <label>
                                    <input class="w3-check w3-margin-top" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Me lembre') }}
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>