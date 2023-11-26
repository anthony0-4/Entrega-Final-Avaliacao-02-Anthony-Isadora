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
            $db->destroy("funcionario",$_GET['id']);
          
            header('location: FuncionarioList.php');
        }

        if(!empty($_POST)){
           $dados = $db->search("funcionario",$_POST);
        } else {
           $dados = $db->select("funcionario");
           
        }

    ?>
<div class="container mt-5"></div>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body mg-5px">
    <div>
        <h3>Listagem de Funcionarios</h3>

        <form action="FuncionarioList.php" method="post">
            <select name="tipo">
                <option value="nome_comp">Nome Completo</option>
                <option value="idade">Idade</option>
                <option value="habilidade">Habilidades</option>
            </select>
            <input type="text" name="valor" />
            <button type="submit">Pesquisar</button>
            <a href="FuncionarioForm.php"> Cadastrar </a>
        </form>
    </div>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nome Completo</th>
      <th scope="col">Idade</th>
      <th scope="col">Habilidade</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($dados as $item){
            echo "<tr>";
            echo "<th scope='row'>$item->id</th>";
            echo "<td>$item->nome_comp</td>";
            echo "<td>$item->idade</td>";
            echo "<td>$item->habilidade</td>";
            echo "<td><a href='FuncionarioForm.php?id=$item->id'>Editar</a></td>";
            echo "<td><a onclick='return confirm(\"Deseja Excluir?\")'
                    href='FuncionarioList.php?id=$item->id'>Deletar</a>
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