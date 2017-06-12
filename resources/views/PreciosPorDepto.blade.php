
<div class="row">
	<div clas="col l8 m8 s10 offset-l2 offset-m2 offset-s1">
	<table>
		<thead>
			<th>Producto</th>
			<th>Precio</th>
		</thead>
		<tbody>
			@foreach($data as $d) 
			<tr>
				<td>{{ $d->producto}}</td>
				<td>{{ $d->precio}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</div>

