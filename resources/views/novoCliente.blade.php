<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Clientes</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<meta charset="utf-8" name="csrf-token" content="{{csrf_token()}}">
</head>
<body>
	<main role="main">
		<div class="row">
			<div class="container col-sm-8 offset-md-2">
				<div class="card border">
					<div class="card-header">
						<div class="car-title">
							Cadastro de clientes
						</div>
					</div>
					<div class="card-body">
						<form action="/novocliente" method="POST">
							@csrf
							<div class="form-group">
								<label for="">Nome</label>
								<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do cliente">

								<label for="">Idade</label>
								<input type="number" name="idade" id="idade" class="form-control" placeholder="Idade do cliente">

								<label for="">Endereco</label>
								<input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço do cliente">

								<label for="">Email</label>
								<input type="text" name="email" id="email" class="form-control" placeholder="Email do cliente">
							</div>
							<button class="btn btn-success" type="submit">Salvar</button>
							<button class="btn btn-danger" type="cancel">Cancelar</button>
						</form>
					</div>
					@if($errors->any())
					<div class="card-footer">
						@foreach($errors->all() as $e)
						<div class="alert alert-danger" role="alert">
							{{$error}}
						</div>
						@endforeach
					</div>
					@endif
				</div>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
	{{var_dump($errors)}}
</body>
</html>