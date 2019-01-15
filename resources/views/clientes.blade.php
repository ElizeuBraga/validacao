<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Clientes</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<meta charset="utf-8" name="csrf-token" content="{{csrf_token()}}">

	<style type="text/css">
		td,th, #tituloCard{
			text-align: center;
			text-decoration: line-through;
		}
	</style>
</head>
<body>
	<main role="main">
		<div class="row">
			<div class="container col-sm-8 offset-md-2">
				<div class="card border">
					<div class="card-header">
						<div class="car-title" id="tituloCard">
							Cadastro de clientes
						</div>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover" id="tabelaProdutos">
							<thead>
								<tr>
									<th>Código</th>
									<th>Nome</th>
									<th>Idade</th>
									<th>Email</th>
									<th>Endereço</th>
								</tr>
							</thead>
							<tbody class="">
								@foreach($clientes as $c)
									<tr>
										<td>{{$c->id}}</td>
										<td>{{$c->nome}}</td>
										<td>{{$c->idade}}</td>
										<td>{{$c->email}}</td>
										<td>{{$c->endereco}}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>