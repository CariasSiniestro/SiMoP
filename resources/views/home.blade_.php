
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SmP</title>
    <!--Import Google Icon Font-->
    <link href="css/material-icons.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/MyStyle.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>



</head>
<body >


  <ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <div class="background">
        <img src="images/guatemala-background.jpg">
      </div>
      <a href="#!user"><img class="circle" src="images/visitant-img.png"></a>
      <a href="#!name"><span class="white-text name">
       @if(Auth::check())
          {{ Auth::user()->name }}
       @else
          <br><br>   
       @endif
      </span></a>
      <a href="#!email"><span class="white-text email">
       @if(Auth::check())
          {{ Auth::user()->email }}
       @endif
      </span></a>
    </div></li>
      @if(!Auth::check())
        <li><a href="{{ url('login') }}"><i class="material-icons">people</i>Ingresar</a></li>
      @endif
    <li><div class="divider"></div></li>
    <!--li><a class="subheader">Subheader</a></li-->
    <li><a class="waves-effect" href="#" onClick="CargarPrincipal()"><i class="material-icons">home</i>Principal</a></li>
    <li><a class="waves-effect" href="#" onClick="CargarCategorias()"><i class="material-icons">attach_money</i>Categorias</a></li> 

      @if(Auth::check())
        <li><a class="waves-effect" href="{{ url('logout') }}">salir</a></li>
      @endif
    
  </ul>
 
  <nav  class="indigo darken-2">
    <a href="#" class="brand-logo center hide-on-med-and-down">Sistema de Monitoreo de Precios</a>
    <a href="#" data-activates="slide-out" class="button-collapse show-on-large">
    <i class="material-icons">menu
    </i></a>    
  </nav>          

<div id="spinner" class="hide">
  <div class="row center-align">
  		<div>
  			<br>
  			<div class="preloader-wrapper big active">
  			  <div class="spinner-layer spinner-blue-only">
  			    <div class="circle-clipper left">
  			      <div class="circle"></div>
  			    </div><div class="gap-patch">
  			      <div class="circle"></div>
  			    </div><div class="circle-clipper right">
  			      <div class="circle"></div>
  			    </div>
  			  </div>
  			</div>
  			<h4>cargando...</h4>
  		</div>	
  </div>
</div>

  <div id="content" class="container">
  	
    <!--contenido-->

  </div>

  <!-- JavaScripts -->
  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript" src="js/MyScripts.js"></script> 
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>







