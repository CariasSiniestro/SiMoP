@extends('layouts.app')

@section('content')

<h3>Consulta de precios</h3>
<div class="divider"></div><br>

<div class="row">

      <div class="input-field col l4 m6 s12">
        <select onchange="ResultPrecios()" id="select_depto">
          <option value="" disabled selected>Elija un departamento</option>
          @foreach($departamentos as $departamento)
          <option value="{{$departamento->id}}">{{$departamento->name}}</option>
          @endforeach 
        </select>
        <label>Departamentos</label>
      </div>   

</div>

<div class="divider"></div>

<div id="result">

</div>


</div>

@endsection