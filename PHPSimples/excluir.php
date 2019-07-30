<?
	$con = new PDO("mysql:host=localhost;dbname=teste", "root", "root");
	if(isset($_POST["confirmar"])) {
		if ($_POST["confirmar"] == "sim") {
			$stmt = $con->prepare("DELETE  FROM usuario WHERE email = ?");
			$stmt->bindParam(1, $_POST["email"]);
			
			if($stmt->execute()) {
				header("location:principal.php?erro=sdelete");
			}
			else {
				header("location:principal.php?erro=edelete");
			}
		}
		else {
			header("location:principal.php");
		}
	}
?>
		
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Excluir</title>
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
								case "sdelete":		
					?>

						
					
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						  <strong>Excluido!</strong>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>

						<? break; ?>

						<? case "edelete": ?>

							<div class="alert alert-danger alert-dismissible fade show" role="alert">
							  <strong>Erro ao fazer a exclusão !</strong> Tente mais tarde!
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>

						<? break; ?>

						<? } // switch ($_GET["erro"]) ?>

					<? } // if (isset($_GET["erro"]))?>

						<form name="confirmarExclusao" method="POST" action="excluir.php">
							<input type="hidden" name="email" value="<?= $_GET["email"] ?>" />
							<div class="form-group">
								<input type="submit" name="confirmar" value="sim" class="btn btn-info"  />
							</div>

							<div class="form-group">
								<input type="submit" name="confirmar" value="nao" class="btn btn-danger"  />
							</div>

						</form>

							
						<a href="principal.php" class="btn btn-warning">Voltar</a>

				</div>
			</div>
		
					</div>
				</div>
			</body>
			</html>
