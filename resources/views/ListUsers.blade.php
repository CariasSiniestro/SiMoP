@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col l6 m6">
		<h3>Usuarios</h3>
	</div>
	<div class="col l6 m6"><br>
		<!--a class="btn-floating btn-large waves-effect waves-light green "><i class="material-icons">add</i></a-->
		<a class="waves-effect waves-light btn green" href="{{ url('/newuser') }}">
			<i class="material-icons left">add</i>Nuevo
		</a>		
	</div>
</div>

<div class="divider"></div><br>

<div class="row">
	<div class="col l8 m8 s12 offset-l2 offset-m2">
<table>
	<thead>
		<th>Nombre</th>
		<th>Correo</th>
	</thead>
	<tbody>
		@foreach($usuarios as $usuario)
		<tr>
			<td>{{ $usuario->name }}</td>
			<td>{{ $usuario->email }}</td>
			<td>

				<a href="#!" onClick="ActualizarProducto({{$usuario->id}})"><i class="material-icons">edit</i></a>	
				<a href="#"><i class="material-icons red-text">delete</i></a>
			</td>			
		</tr>
		@endforeach
	</tbody>
</table>

	</div>
</div>
@endsection

