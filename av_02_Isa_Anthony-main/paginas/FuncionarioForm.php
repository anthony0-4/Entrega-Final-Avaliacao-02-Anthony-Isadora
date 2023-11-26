
<?php
 include './header.php';
 include 'menu.php';
 include '../bdclass.php';
?>

<?php
  $db = new DB();
  $db->conn();

  if(!empty($_POST['id'])){
    $db->update("funcinario",$_POST);
    header("location: FuncionarioList.php");
   
  } else if($_POST){
    $db->insert("funcionario",$_POST);
    header("location: FuncionarioList.php");
  }


  if(!empty($_GET['id'])){
    $funcionario = $db->find("funcionario", $_GET['id']);
  }
?>
    <div class="container mt-5">
    <h3>Formulário funcionario</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="FuncinarioList.php" class="btn btn-danger float-end">Voltar</a>
                    </div>
                    <div class="card-body">
                        <form action="FuncionarioForm.php" method="POST">
                            <div class="mb-3">
                            <input type="hidden" name="id" value="<?php echo !empty($funcionario->id) ? $funcionario->id :"" ?>">
                            </div>
                            <div class="mb-3">
                            <label for="nome_comp">Nome Completo</label><br>
        <input type="text" name="nome_comp" class="form-control" value="<?php echo !empty($funcionario->nome_comp) ? $funcionario->nome_comp :"" ?>">
                            </div>

                            <div class="mb-3">
                            <label for="idade">Idade</label><br>
        <input type="text" name="dade" class="form-control" value="<?php echo !empty($funcionario->dade) ? $funcionario->dade :"" ?>">
                            </div>

                            <div class="mb-3">
                            <label for="habilidade">Digite uma habilidade sua</label><br>
        <input type="text" name="habilidade" class="form-control"  value="<?php echo !empty($funcionario->habilidade) ? $funcionario->habilidade :"" ?>">
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