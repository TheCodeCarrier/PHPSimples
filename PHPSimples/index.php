<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Fazer login e cadastro</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</head>
	
	<body style="background-image: url(http://image.noelshack.com/fichiers/2013/29/1374194178-saint-seiya.jpg); background-repeat: no-repeat; background-size: 100%; color: #FFF8F3; ">
		<div class="container">
			<div class="row">
				<div class="col">

					<?
						if (isset($_GET["erro"])){
							switch ($_GET["erro"]) {	
								case "sdif":		
					?>

							

								<div class="alert alert-warning alert-dismissible fade show" role="alert">
								  <strong>Senhas diferentes!</strong> As senhas cadastradas devem ser iguais.
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>

							<? break; ?>
							
							<? case "scad": ?>
							
								<div class="alert alert-success alert-dismissible fade show" role="alert">
								  <strong>Cadastro efetuado com sucesso!</strong>
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>

							<? break; ?>

							<? case "ecad": ?>

								<div class="alert alert-danger alert-dismissible fade show" role="alert">
								  <strong>Erro no cadastro!</strong> Tente mais tarde!
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>

							<? break; ?>

							<? case "elogin": ?>

								<div class="alert alert-danger alert-dismissible fade show" role="alert">
								  <strong>Erro no login!</strong> Tente mais tarde!
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>

							<? break; ?>

							<? case "diflogin": ?>

								<div class="alert alert-danger alert-dismissible fade show" role="alert">
								  <strong>Erro no login!</strong> Usuário inexistente e/ou senha não correspondente!
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>

							<? break; ?>


						<? } // switch ($_GET["erro"]) ?>

					<? } // if (isset($_GET["erro"]))?>

				</div>
			</div>
			<div class="row">
				<div class="col-3"></div>
				<div class="col-6">
					<h1>Faça seu login</h1>
					<form name="login" method="POST" action="processa.php">
						<div class="form-group">
							<label for="email_login">E-mail</label>
							<input type="email" name="email" id="email_login" placeholder="E-mail" class="form-control form-control-lg" />
						</div>
						<div class="form-group">
							<label for="senha_login">Senha</label>
							<input type="password" name="senha" id="senha_login" placeholder="Senha" class="form-control form-control-lg" />
						</div>
						<div class="form-group">
							<input type="submit" name="logar" value="Logar" class="btn btn-success" />
						</div>
					</form>
				</div>
			</div>
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
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>