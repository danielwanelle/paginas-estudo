<?php

include_once 'inc/msg.php';
include_once 'php_action/db_connect.php';
include_once 'inc/header.php';
include_once 'inc/bl.php';

?>

  <div class="row">
    <div class="col s12 m10 push-m1">
      <h3 class="light">Usuários</h3>
      <table class="striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Usuário</th>
            <th>Senha</th>
            <th>Ativo</th>
          </tr>
        </thead>
        <tbody>
          <?php

            $sql = "SELECT * FROM usuario";
            $resultado = mysqli_query($connect, $sql);

            while($dados = mysqli_fetch_array($resultado)):

          ?>
          <tr>
            <th><?php echo $dados['idUsuario']; ?></th>
            <th><?php echo $dados['usuario']; ?></th>
            <th><?php echo $dados['senha']; ?></th>
            <th><?php echo $dados['ativo']; ?></th>
            <th><a href="edita-usuario.php?id=<?php echo $dados['idUsuario']; ?>" class="btn-floating btn-small yellow"><i class="material-icons">edit</i></a></th>
            <th><a href="deleta-usuario.php?id=<?php echo $dados['idUsuario']; ?>" class="btn-floating btn-small red"><i class="material-icons">delete</i></a></th>
          </tr>
          <?php

            endwhile;

          ?>
        </tbody>
      </table>
      <br />
      <div class="fixed-action-btn">
        <a href="novo-usuario.php" class="btn-floating btn-large green"><i class="material-icons">add</i></a>
      </div>
    </div>
  </div>

<?php include_once 'inc/footer.php' ?>
