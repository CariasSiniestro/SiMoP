
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!--Import Google Icon Font-->
    <link href="css/material-icons.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/MyStyle.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>



</head>
<body >
    <nav  class="indigo darken-2">
        <a href="#" class="brand-logo center">Sistema de Monitoreo de Precios</a>   
    </nav>          

    <div class="container">
        <div class="row">
            <div class="col l6 m6 s12 offset-l3 offset-m3">
                <form method="POST" action="{{ url('login') }}">
                 <br><br>
                 {{ csrf_field() }}
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="name" name="name" type="text" class="validate">
                        <label for="name">usuario</label>
                    </div>

                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input id="password" name="password" type="password" class="validate">
                        <label for="password">Contraseña</label>
                    </div>

                    <div class="center-align">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Entrar
                        <i class="material-icons right">send</i>
                        </button>        
                    </div>

                </form>
            </div>
        </div>
    </div>

 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif


                                
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

  <!-- JavaScripts -->
  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript" src="js/MyScripts.js"></script> 
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
