<?
  $con = new PDO("mysql:host=localhost;dbname=teste", "root", "root");
  if(isset($_POST["editar"])) {
      $stmt = $con->prepare("UPDATE usuario SET nome = ? WHERE email = ?");
    
      $stmt->bindParam(1, $_POST["nome"]);
      $stmt->bindParam(2, $_POST["email"]);

      if($stmt->execute()) {
        header("location:principal.php?erro=sedit");
      }
      else {
        header("location:editar.php?erro=eedit");
      }
    }
  
    ?>
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
             <strong>As senhas estão diferentes!</strong> Coloque senhas iguais em ambas as caixas.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

          <? break; ?>
              
          <? case "sedit": ?>
              
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Editado com sucesso!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

          <? break; ?>

           <? case "eedit": ?>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Erro ao fazer a  edição!</strong> Tente mais tarde!
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
          <h1>Edite aqui seu login</h1>
          <form name="editar" method="POST" action="editar.php">
            <div class="form-group">
              <label for="nome_cadastro">Digite um novo nome</label>
              <input type="text" name="nome" id="nome_cadastro" placeholder="Nome" class="form-control" />
              <label for="senha_cadastro">Digite uma nova senha</label>
              <input type="text" name="senha" id="senha_cadastro" placeholder="senha" class="form-control" />
            </div>

            <input type="hidden" name="email" value="<?= $_GET["email"] ?>" />
          
            <div class="form-group">
              <input type="submit" name="editar" value="Concluir" class="btn btn-info"/>
              <a href="principal.php" class="btn btn-warning">Voltar</a>
            </div>
          </form>
        </div>
      </div>
    
  </div>

  </body>
  </html>
</head>
</html>
            
            