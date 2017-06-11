@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col l6 m6">
		<h3>Productos</h3>
	</div>
	<div class="col l6 m6"><br>
		<!--a class="btn-floating btn-large waves-effect waves-light green "><i class="material-icons">add</i></a-->
		<a class="waves-effect waves-light btn green" href="{{ url('/producto') }}">
			<i class="material-icons left">add</i>Nuevo
		</a>		
	</div>
</div>

<div class="divider"></div><br>

<div class="row">
	<div class="col l8 m8 s12 offset-l2 offset-m2">
<table>
	<thead>
		<th>Producto</th>
		<th>Presentacion</th>
		<th>Categoria</th>		
		<th>Acciones</th>
	</thead>
	<tbody>
		@foreach($productos as $producto)
		<tr>
			<td>{{ $producto->pname }}</td>
			<td>{{ $producto->umname }}</td>
			<td>{{ $producto->cname }}</td>
			<td>

				<a href="#!" onClick="ActualizarProducto({{$producto->id}})"><i class="material-icons">edit</i></a>	
				<a href="#"><i class="material-icons red-text">delete</i></a>
			</td>			
		</tr>
		@endforeach
	</tbody>
</table>

    @if(!$productos)
    <h5>No data to display!!</h5>
    @endif
	</div>
</div>
@endsection

