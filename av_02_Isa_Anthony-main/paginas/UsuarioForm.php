<?php
 include './header.php';
 include '../bdclass.php';
?>

<?php
  $db = new DB();
  $db->conn();

  if($_POST){

    if($_POST['senha'] === $_POST['c_senha']){

      $_POST['senha'] = password_hash($_POST['senha'],PASSWORD_BCRYPT);
      unset($_POST['c_senha']);
      
      $db->insert("usuario",$_POST);
      header("location: UsuarioForm.php");

    } else{
      echo "<b style='color:red;'>As senhas não conhecidem</b>";
    }

  }

?>

    <div class="container mt-5">
    <h3>Cadastre-se</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="UsuarioList.php" class="btn btn-danger float-end">Voltar</a>
                    </div>
                    <div class="card-body">
                        <form action="UsuarioForm.php" method="POST">
                            <div class="mb-3">
                            <input type="hidden" name="id" value="<?php echo !empty($usuario->id) ? $usuario->id :"" ?>">
                            </div>
                            <div class="mb-3">
                            <label for="nome">Nome</label><br>
        <input type="text" name="nome" class="form-control" value="<?php echo !empty($usuario->nome) ? $usuario->nome :"" ?>">
                            </div>

                            <div class="mb-3">
                            <label for="telefone">Telefone</label><br>
        <input type="text" name="telefone" class="form-control" value="<?php echo !empty($usuario->telefone) ? $usuario->telefone :"" ?>">
                            </div>

                            <div class="mb-3">
                            <label for="email">Email</label><br>
        <input type="text" name="email" class="form-control"  value="<?php echo !empty($usuario->email) ? $usuario->email :"" ?>">
                            </div>

                            <div class="mb-3">
                            <label for="login">Login</label><br>
        <input type="text" name="login" class="form-control" value="<?php echo !empty($usuario->login) ? $usuario->login :"" ?>">
                            </div>

                            <div class="mb-3">
                            <label for="senha">Senha</label><br>
        <input type="passoword" name="senha" class="form-control" value="<?php echo !empty($usuario->senha) ? $usuario->senha :"" ?>">
                            </div>

                            <div class="mb-3">
                            <label for="c_senha">Confirmar Senha</label><br>
        <input type="passoword" name="c_senha" class="form-control" value="<?php echo !empty($usuario->c_senha) ? $usuario->c_senha :"" ?>">
                            </div>

                            <div class="mb-3">
                            <button type="submit"><?php echo !empty($_GET['id']) ? "Editar" : "Salvar" ?></button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "./footer.php" ?>
<?php include "rodape.php" ?>