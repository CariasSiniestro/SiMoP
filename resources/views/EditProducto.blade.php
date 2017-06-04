<script type="text/javascript">
 $(document).ready(function(){
    $('select').material_select();  
  });
</script>

<br><br>

<h5 class="center-align">Editar producto</h5>

<div class="row">
  <form method="POST" action="/producto/{{$producto[0]->id}}/edit">
    {{ csrf_field() }}
    <div class="col l6 m6 s12 offset-l3 offset-m3">
    <div class="divider"></div> <br> 
      
      <div class="row">
          <div class="input-field">
            <span class="blue-text">ID</span>
            <input disabled value="{{ $producto[0]->id }}" id="id" name="id" type="text" class="validate">
            <label for="id"></label>
          </div>    
      </div>

      <div class="row">
          <div class="input-field">
            <span class="blue-text">Nombre</span>
            <input id="name" name="name" type="text" value="{{ $producto[0]->name }}">
            <label for="name"></label>
          </div>
      </div>

      <div class="row">
        <div class="input-field">
        <span class="blue-text">Categoria</span>
        <select id="categoria" name="categoria">
        <span class="blue-text">Categoria</span>    
          <option value="" disabled selected>Elija una categoria</option>
          @foreach($categorias as $categoria)
            @if(($producto[0]->id_categoria)==($categoria->id))
            <option  value="{{$categoria->id}}" selected>{{$categoria->name}}</option>
            @else
            <option  value="{{$categoria->id}}">{{$categoria->name}}</option>
            @endif
          @endforeach 
        </select>
      </div>
      </div>

      <div class="row">
        <div class="input-field">
        <span class="blue-text">Presentación</span>
        <select id="medida" name="medida">
          <option value="" disabled selected>Elija una presentación</option>
          @foreach($medidas as $medida)
            @if(($producto[0]->id_medida)==($medida->id))
            <option  value="{{$medida->id}}" selected>{{$medida->name}}</option>
            @else
            <option  value="{{$medida->id}}">{{$medida->name}}</option>
            @endif
          @endforeach 
        </select>
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