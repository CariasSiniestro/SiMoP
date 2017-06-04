

<br><br>

<h5 class="center-align">Editar Categoria</h5>

<div class="row">
  <form method="POST" action="/categoria/{{$categoria[0]->id}}/edit">
    {{ csrf_field() }}
    <div class="col l6 m6 s12 offset-l3 offset-m3">
    <div class="divider"></div> <br> 
      <div class="row">
          <div class="input-field">
            <span>ID</span>
            <input disabled value="{{ $categoria[0]->id }}" id="id" name="id" type="text" class="validate">
            <label for="id"></label>
          </div>    
      </div>
    <div class="row">
          <div class="input-field">
            <span>Nombre</span>
            <input id="name" name="name" type="text" value="{{ $categoria[0]->name }}">
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

