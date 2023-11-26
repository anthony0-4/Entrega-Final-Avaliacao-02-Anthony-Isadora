
<?php
 include './header.php';
 include 'menu.php';
 include '../bdclass.php';
?>

<?php
  $db = new DB();
  $db->conn();

  if(!empty($_POST['id'])){
    $db->update("livraria",$_POST);
    header("location: LivrariaList.php");
   
  } else if($_POST){
    $db->insert("livraria",$_POST);
    header("location: LivrariaList.php");
  }


  if(!empty($_GET['id'])){
    $livraria = $db->find("livraria", $_GET['id']);
  }
?>
    <div class="container mt-5">
    <h3>Formulário livraria</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="LivrariaList.php" class="btn btn-danger float-end">Voltar</a>
                    </div>
                    <div class="card-body">
                        <form action="LivrariaForm.php" method="POST">
                            <div class="mb-3">
                            <input type="hidden" name="id" value="<?php echo !empty($livraria->id) ? $livraria->id :"" ?>">
                            </div>
                            <div class="mb-3">
                            <label for="rua">Rua</label><br>
        <input type="text" name="rua" class="form-control" value="<?php echo !empty($livraria->rua) ? $livraria->rua :"" ?>">
                            </div>

                            <div class="mb-3">
                            <label for="numero">Numero</label><br>
        <input type="text" name="numero" class="form-control" value="<?php echo !empty($livraria->numero) ? $livraria->numero :"" ?>">
                            </div>

                            <div class="mb-3">
                            <label for="cidade">Cidade</label><br>
        <input type="text" name="cidade" class="form-control"  value="<?php echo !empty($livraria->cidade) ? $livraria->cidade :"" ?>">
                            </div>

                            <div class="mb-3">
                            <label for="estado">Estado</label><br>
        <input type="text" name="estado" class="form-control" value="<?php echo !empty($livraria->estado) ? $livraria->estado :"" ?>">
                            </div>

                            <div class="mb-3">
                            <label for="estabelecimento">Nome do Estabelecimento</label><br>
        <input type="text" name="estabelecimento" class="form-control" value="<?php echo !empty($livraria->estabelecimento) ? $livraria->estabelecimento :"" ?>">
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