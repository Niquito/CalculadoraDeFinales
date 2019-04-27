<!DOCTYPE html>
<html lang="es">
<head>
	<title>Resultados estadísticos CalculadoraDeFinales</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
	body, html {
		height: 100%;
		background-color: rgba(0,46,102,.8);
	}

	#tablaResultados {
		display: inline-table;
		box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
		-moz-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
		-webkit-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
		-o-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
		-ms-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
	}

	#tablaResultados thead {
		overflow: hidden;
		background-color: #cd9557;
	}

	#tablaResultados th {
		border-top-width: 0px;
		color: #fff;
	}

	#tablaResultados tbody {
		color: #808080;
		background-color: #fff;
	}

</style>
</head>
<body>
	<div class="container">
		<table class="table table-sm table-hover table-responsive-sm mt-5" id="tablaResultados">
			<caption class="text-right">Total de registros: {{ count($cursos) }}</caption>
			<thead>
				<tr>
					<th class="text-center">Materia</th>
					<th class="text-center">Fecha</th>
					<th class="text-right">Hora</th>
					<th class="text-right">Sede</th>
					<th class="text-center">Titular</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($cursos as $c)
				<tr>
					<td>{{ $c->id_materia }} - {{ $c->nombre_materia }}</td>
				    <td class="text-center">{{ $c->fecha }}</td>
				    <td class="text-right">{{ $c->hora }}</td>
				    <td class="text-right">{{ $c->sede }}</td>
				    <td>{{ $c->titular }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</body>
</html>