@extends('layouts.app')

@section('content')


<script type="text/javascript">
 $(document).ready(function(){

    $('select').material_select();  
  });
</script>

<h3>Ingreso de precios</h3>
<h5>{{ $departamento[0]->name }}</h5>
<div class="divider"></div><br>

<div class="row">
    <form method="POST" action="">

      <div class="input-field col l4 m6 s12">
        <select onChange="alert('hola')">
          <option value="0" disabled selected>Elija una categoria</option>
          <option value="todas" >Todas</option>   
          @foreach($categorias as $categoria)
          <option value="{{$categoria->id}}">{{$categoria->name}}</option>
          @endforeach 
        </select>
        <label>Categorias</label>
      </div>  

      <!--div class="input-field col l4 m4 s12 offset-m4 center-align">
        <button class="btn waves-effect waves-light" type="submit" name="action">Consultar
        <i class="material-icons right">send</i>
        </button>  
      </div-->  
    </form>
</div>

<div class="divider"></div>

<div id="result">

</div>


</div>

@endsection