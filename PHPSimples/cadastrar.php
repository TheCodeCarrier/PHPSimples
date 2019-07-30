<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Fazer cadastro</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</head>
	
	<body style="background-image: url(http://image.noelshack.com/fichiers/2013/29/1374194178-saint-seiya.jpg); background-repeat: no-repeat; background-size: 100%; color: #FFF8F3; ">

			<div class="row">
				<div class="col-3"></div>
				<div class="col-6">
					<h1>Faça seu cadastro</h1>
					<form name="cadastro" method="POST" action="processa.php">
						<div class="form-group">
							<label for="nome_cadastro">Nome</label>
							<input type="text" name="nome" id="nome_cadastro" placeholder="Nome" class="form-control" />
						</div>
						<div class="form-group">
							<label for="email_cadastro">E-mail</label>
							<input type="email" name="email" id="email_cadastro" placeholder="E-mail" class="form-control" />
						</div>
						<div class="form-group">
							<label for="senha_cadastro">Senha</label>
							<input type="password" name="senha" id="senha_cadastro" placeholder="Senha" class="form-control" />
						</div>

						<div class="form-group">
							<label for="confirmarsenha_cadastro">Confirmar senha </label>
							<input type="password" name="confirmarsenha" id="confirmarsenha_cadastro" placeholder="Confirmar senha" class="form-control" />
						</div>
						<div class="form-group">
							<input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-info" />
							<a href="index.php" class="btn btn-warning">Sair</a>
						</div>
					</form>
				</div>
			</div>
		</body>
		</html>
