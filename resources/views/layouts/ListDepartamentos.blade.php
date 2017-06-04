

<div class="row">
	<div class="col l6 m6">
		<h3>Departamentos</h3>
	</div>
	<div class="col l6 m6"><br>
		<!--a class="btn-floating btn-large waves-effect waves-light green "><i class="material-icons">add</i></a-->
		<a class="waves-effect waves-light btn green" onClick="FormNewDepto()">
			<i class="material-icons left">add</i>Nuevo
		</a>		
	</div>
</div>

<div class="divider"></div><br>

<div class="row">
	<div class="col l8 m8 s12 offset-l2 offset-m2">
<table>
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</thead>
	<tbody>
		@foreach($departamentos as $departamento)
		<tr>
			<td>{{ $departamento->id }}</td>
			<td>{{ $departamento->name }}</td>
			<td>
				<!--a href="{{url('/departamento')}}/{{$departamento->id}}/edit"><i class="material-icons">edit</i></a-->
				<!--a class="waves-effect waves-light btn"><i class="material-icons left">edit</i>Editar</a-->
				<a href="#!" onClick="ActualizarDepto({{$departamento->id}})"><i class="material-icons">edit</i></a>	
				<a href="#"><i class="material-icons red-text">delete</i></a>
			</td>			
		</tr>
		@endforeach
	</tbody>
</table>
	</div>
</div>
