<div class="row">
  <div class="col l8 m10 s12 offset-l2 offset-m1">
    <form method="POST" action="{{ url('/precios') }}" name="form" id="form">
    {{ csrf_field() }}
    
            <div class="input-field ">
              <input  name="id_user" type="hidden" value="{{ Auth::user()->id }}" >
              <label for="id"></label>
            </div>    
    
    <table class="striped row">
      <thead>
        <th data-field="nombre">Producto</th>
        <th data-field="nombre">Presentación</th> 
        <th data-field="precio">Precio (Q.)</th>
      </thead>
      @foreach($productos as $producto)   
      <tr>
          <div class="input-field ">
            <input  name="id_producto[]" id="id" type="hidden" value="{{ $producto->id }}" >
            <label for="id"></label>
          </div>

          <td width="40%">      
            <span>{{ $producto->producto }}</span>                  
          </td>

          <td width="30%">
            <span>{{ $producto->presentacion }}</span>
          </td>

          <td width="30%">
             <div class="input-field">
               <input  name="precio[]" id="precio" type="number" step="0.1">
               <label for="id"></label>
             </div>                             
          </td>

      </tr>
      @endforeach    
    </table> 
    <div class="row center-align">
            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                   <i class="material-icons right">send</i>
            </button>
    </div>

    </form>
  </div>
</div>
