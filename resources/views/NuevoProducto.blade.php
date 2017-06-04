@extends('layouts.app')

@section('content')

<br><br>

<h5 class="center-align">Nuevo producto</h5>

<div class="row">
  <form method="POST" action="/producto">
    {{ csrf_field() }}
    <div class="col l6 m6 s12 offset-l3 offset-m3">
    <div class="divider"></div> <br> 

    <div class="row">
          <div class="input-field">
            <span>Nombre</span>
            <input id="name" name="name" type="text" >
            <label for="name"></label>
          </div>
    </div>

      <div class="row">
        <select id="categoria" name="categoria">
          <option value="" disabled selected>Elija una categoria</option>
          @foreach($categorias as $categoria)
          <option value="{{$categoria->id}}">{{$categoria->name}}</option>
          @endforeach 
        </select>
        <label>Categoria</label>
      </div>

      <div class="row">
        <select id="medida" name="medida">
          <option value="" disabled selected>Elija una presentación</option>
          @foreach($medidas as $medida)
          <option  value="{{$medida->id}}">{{$medida->name}}</option>
          @endforeach 
        </select>
        <label>Presentación</label>
      </div>

    <div class="row center-align">
      <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
        <i class="material-icons right">send</i>
      </button>
    </div>  
    </div>
  </form>
</div>

@endsection