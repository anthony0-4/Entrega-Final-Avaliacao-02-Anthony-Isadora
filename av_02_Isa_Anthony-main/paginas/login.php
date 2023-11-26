<?php
 include 'header.php';
 include '../bdclass.php';
 session_start();
?>

<?php
  $db = new DB();
  $db->conn();

  if(!empty($_POST)){

    $usuario = $db->login("usuario", $_POST);
    //var_dump($usuario);
    //exit;
    if($usuario !== "Error"){

      $_SESSION['usuario'] = $usuario;
      
      header("location: Main.php");

    } else {
      echo "<b style='color:red'>Login e senha errado, por favor tente novamente!</b>";
    }

  } 

?>

    </form>
    <div class="container mt-5">
    <h3>Login</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="LivroList.php" class="btn btn-danger float-end">Voltar</a>
                    </div>
                    <div class="card-body">
                        <form action="LivroForm.php" method="POST">
                            <div class="mb-3">
                            <label for="email">Email</label><br>
        <input type="text" name="email" class="form-control"  value="<?php echo !empty($livro->email) ? $livro->email :"" ?>">
                            </div>

                            <div class="mb-3">
                            <label for="senha">Senha</label><br>
        <input type="text" name="senha" class="form-control" value="<?php echo !empty($livro->senha) ? $livro->senha :"" ?>">
                            </div>

                            <div class="mb-3">
                            <button type="submit"><?php echo !empty($_GET['id']) ? "Editar" : "Salvar" ?></button>
                            </div>

                            <div class="mb-3">
                                <a href="UsuarioForm.php"> Cadastrar-se </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "./footer.php" ?>
<?php include "rodape.php" ?>