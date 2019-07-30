<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Editar</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</head>

	<body style="background-image: url(http://image.noelshack.com/fichiers/2013/29/1374194178-saint-seiya.jpg); background-repeat: no-repeat; background-size: 100%;">

	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    
  	<?
  		$con = new PDO("mysql:host=localhost;dbname=teste", "root", "root");
  		$stmt = $con->prepare("SELECT * FROM usuario");
  		$stmt->execute();

  		while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
  	?>

		    <tr>
		      <th scope="row"><?= $row->nome ?></th>
		      <td><?= $row->email ?></td>
		      <td><a href="editar.php?email=<?= $row->email ?>" class="btn btn-primary">Editar</a></td>
		      <td><a href="excluir.php?email=<?= $row->email ?>" class="btn btn-danger">Excluir</a></td>
		    </tr>
   

   	<? } ?>
     
  </tbody>
</table>
	<a href="cadastrar.php" class="btn btn-success">Criar cadastro</a>
	<a href="index.php" class="btn btn-warning">Sair</a>
	<a href="index.php" class="btn btn-dark">&#128169;</a>

	</body>
</html>