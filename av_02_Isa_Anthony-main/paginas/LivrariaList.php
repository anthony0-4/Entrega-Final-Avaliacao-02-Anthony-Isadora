<?php
 include 'header.php';
 include 'menu.php';
 include '../bdclass.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $db = new DB();
        $db->conn();

        if(!empty($_GET['id'])){
            $db->destroy("livraria",$_GET['id']);
          
            header('location: LivrariaList.php');
        }

        if(!empty($_POST)){
           $dados = $db->search("livraria",$_POST);
        } else {
           $dados = $db->select("livraria");
           
        }

    ?>
<div class="container mt-5"></div>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body mg-5px">
    <div>
        <h3>Listagem de Livrarias</h3>

        <form action="LivrariaList.php" method="post">
            <select name="tipo">
                <option value="rua">Rua</option>
                <option value="numero">Numero</option>
                <option value="cidade">Cidade</option>
                <option value="estado">Estado</option>
                <option value="estabelecimento">Estabelecimento</option>
            </select>
            <input type="text" name="valor" />
            <button type="submit">Pesquisar</button>
            <a href="LivrariaForm.php"> Cadastrar </a>
        </form>
    </div>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Rua</th>
      <th scope="col">Numero</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Estabelecimento</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($dados as $item){
            echo "<tr>";
            echo "<th scope='row'>$item->id</th>";
            echo "<td>$item->rua</td>";
            echo "<td>$item->numero</td>";
            echo "<td>$item->cidade</td>";
            echo "<td>$item->estado</td>";
            echo "<td>$item->estabelecimento</td>";
            echo "<td><a href='LivrariaForm.php?id=$item->id'>Editar</a></td>";
            echo "<td><a onclick='return confirm(\"Deseja Excluir?\")'
                    href='LivrariaList.php?id=$item->id'>Deletar</a>
                  </td>";
            echo "</tr>";   
        }
    ?>
  </tbody>
</table>

</div>
</div>
</div>
      </div>
      </div>

<?php include "./footer.php" ?>
<?php include "rodape.php" ?>