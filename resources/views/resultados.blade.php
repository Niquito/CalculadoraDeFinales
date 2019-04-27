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
	<div class="container d-flex justify-content-center align-items-center h-100">
		<table class="table table-sm table-hover table-responsive-sm" id="tablaResultados">
			<caption class="text-right">Total de registros: 10</caption>
			<thead>
				<tr>
					<th>Materia</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Sede</th>
					<th>Titular</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($cursos as $c)
				<tr>
					<td class="text-center">{{ $c->id_materia }} - {{ $c->nombre_materia }}</td>
				    <td class="text-right">{{ $c->fecha }}</td>
				    <td class="text-right">{{ $c->hora }}</td>
				    <td class="text-right">{{ $c->sede }}</td>
				    <td class="text-right">{{ $c->titular }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</body>
</html>