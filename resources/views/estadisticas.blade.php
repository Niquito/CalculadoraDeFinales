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
			<caption class="text-right">Total de registros: {{ count($estadisticas) }}</caption>
			<thead>
				<tr>
					<th class="text-center">IP</th>
					<th class="text-right">Tiempo en página</th>
					<th class="text-right">Tiempo en TyC</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($estadisticas as $e)
				<tr>
					<td class="text-center">{{ substr ($e->ip, -10) }}</td>
				    <td class="text-right">{{ $e->tiempo_total_m }}m {{ $e->tiempo_total_s }}s</td>
				    <td class="text-right">{{ $e->tiempo_tyc_m }}m {{ $e->tiempo_tyc_s }}s</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</body>
</html>