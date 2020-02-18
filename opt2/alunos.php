<?php

include_once 'inc/msg.php';
include_once 'php_action/db_connect.php';
include_once 'inc/header.php';
include_once 'inc/bl.php';

?>

  <div class="row">
    <div class="col s12 m10 push-m1">
      <h3 class="light">Alunos</h3>
      <table class="striped">
        <thead>
          <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>CPF</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Ficha</th>
          </tr>
        </thead>
        <tbody>
          <?php

            $sql = "SELECT * FROM Aluno INNER JOIN ficha ON ficha.idFicha = Aluno.idFicha WHERE ativo = true";
            $resultado = mysqli_query($connect, $sql);

            while($dados = mysqli_fetch_array($resultado)):

          ?>
          <tr>
            <th><?php echo $dados['nome']; ?></th>
            <th><?php echo $dados['email']; ?></th>
            <th><?php echo $dados['cpf']; ?></th>
            <th><?php echo $dados['peso']; ?></th>
            <th><?php echo $dados['altura']; ?></th>
            <th><?php echo $dados['descricao']; ?></th>
            <th><a href="view/edita-aluno.php?id=<?php echo $dados['idAluno']; ?>" class="btn-floating btn-small yellow"><i class="material-icons">edit</i></a></th>
            <th><a href="model/aluno.php?id=<?php echo $dados['idAluno']; ?>" class="btn-floating btn-small red"><i class="material-icons">delete</i></a></th>
          </tr>
          <?php

            endwhile;

          ?>
        </tbody>
      </table>
      <br />
      <div class="fixed-action-btn">
        <a href="view/novo-aluno.php" class="btn-floating btn-large green"><i class="material-icons">add</i></a>
      </div>
    </div>
  </div>

<?php include_once 'inc/footer.php' ?>
