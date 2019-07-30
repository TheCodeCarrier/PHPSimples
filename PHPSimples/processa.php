<?
	$con = new PDO("mysql:host=localhost;dbname=teste", "root", "root");
	if(isset($_POST["logar"])) {
		$stmt = $con->prepare("SELECT * FROM usuario WHERE email = ? AND senha = md5(?)");
		$stmt->bindParam(1, $_POST["email"]);
		$stmt->bindParam(2, $_POST["senha"]);
		if ($stmt->execute()) {
			if($stmt->rowCount() > 0) {
				while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
					$nome = $row->nome;
				}
				header("location:principal.php?nome=" . $nome);
			}
			else {
				header("location:index.php?erro=diflogin");
			}
		}
		else {
			header("location:index.php?erro=elogin");
		}

	}
	else if(isset($_POST["cadastrar"])) {
		if ($_POST["senha"] != $_POST["confirmarsenha"]) {
			header("location:index.php?erro=sdif");
		}
		else {
			$stmt = $con->prepare("INSERT INTO usuario (email, nome, senha) VALUES (?, ?, md5(?))");

			$stmt->bindParam(1, $_POST["email"]);
			$stmt->bindParam(2, $_POST["nome"]);
			$stmt->bindParam(3, $_POST["senha"]);

			if($stmt->execute()) {
				header("location:index.php?erro=scad");
			}
			else {
				header("location:index.php?erro=ecad");
			}
		}
	}
	else {
		header("location:index.php");
	}

?>