

<br><br>

<h5 class="center-align">Nuevo departamento</h5>


<div class="row">
  <form method="POST" action="/departamento">
    {{ csrf_field() }}
            <div class="input-field ">
              <input  name="id_user" type="hidden" value="{{ Auth::user()->id }}" >
              <label for="id"></label>
            </div>    
    <div class="col l6 m6 s12 offset-l3 offset-m3">
    <div class="divider"></div> <br> 

    <div class="row">
          <div class="input-field">
            <span>Nombre</span>
            <input id="name" name="name" type="text" >
            <label for="name"></label>
          </div>
    </div>
    <div class="row center-align">
      <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
        <i class="material-icons right">send</i>
      </button>
    </div>  
    </div>
  </form>
</div>
