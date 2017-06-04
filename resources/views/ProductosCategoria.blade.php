

<div class="row">
	<div class="col l6 m6">

	</div>
	<div class="col l6 m6"><br>
		<!--a class="btn-floating btn-large waves-effect waves-light green "><i class="material-icons">add</i></a-->
		
	</div>
</div>


<div class="row">
	<div class="col l8 m8 s12 offset-l2 offset-m2">
<table>
	<thead>
		<th>ID</th>
		<th>Nombre</th>	
		<th>Acciones</th>
	</thead>
	<tbody>
		@foreach($productos as $producto)
		<tr>
			<td>{{ $producto->id }}</td>
			<td>{{ $producto->name }}</td>
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
