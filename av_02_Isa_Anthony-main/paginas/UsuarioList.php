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
            $db->destroy("usuario",$_GET['id']);
          
            header('location: UsuarioList.php');
        }

        if(!empty($_POST)){
           $dados = $db->search("usurio",$_POST);
        } else {
           $dados = $db->select("usurio");
           
        }

    ?>
<div class="container mt-5"></div>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body mg-5px">
    <div>
        <h3>Listagem de Usuarios</h3>

        <form action="UsuarioList.php" method="post">
            <select name="tipo">
                <option value="nome">Nome</option>
                <option value="telefone">Telefone</option>
                <option value="email">Email</option>
                <option value="login">Login</option>
            </select>
            <input type="text" name="valor" />
            <button type="submit">Pesquisar</button>
            <a href="UsuarioForm.php"> Cadastrar </a>
        </form>
    </div>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">Login</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($dados as $item){
            echo "<tr>";
            echo "<th scope='row'>$item->id</th>";
            echo "<td>$item->nome</td>";
            echo "<td>$item->telefone</td>";
            echo "<td>$item->email</td>";
            echo "<td>$item->login</td>";
            echo "<td><a href='UsuarioForm.php?id=$item->id'>Editar</a></td>";
            echo "<td><a onclick='return confirm(\"Deseja Excluir?\")'
                    href='UsuarioList.php?id=$item->id'>Deletar</a>
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