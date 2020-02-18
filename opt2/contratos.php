<?php

include_once 'inc/msg.php';
include_once 'php_action/db_connect.php';
include_once 'inc/header.php';
include_once 'inc/bl.php';

?>

  <div class="row">
    <div class="col s12 m10 push-m1">
      <h3 class="light">Contratos</h3>
      <table class="striped">
        <thead>
          <tr>
            <th>Número</th>
            <th>Data de início</th>
            <th>Data de Término</th>
            <th>Valor</th>
            <th>Periodo</th>
            <th>Aluno</th>
          </tr>
        </thead>
        <tbody>
          <?php

            $sql = "SELECT * FROM contrato INNER JOIN Aluno ON Aluno.idAluno = contrato.idAluno WHERE ativo = true";
            $resultado = mysqli_query($connect, $sql);

            while($dados = mysqli_fetch_array($resultado)):

          ?>
          <tr>
            <th><?php echo $dados['idContrato']; ?></th>
            <th><?php echo $dados['dataInicio']; ?></th>
            <th><?php echo $dados['dataTermino']; ?></th>
            <th><?php echo $dados['valor']; ?></th>
            <th><?php echo $dados['periodo']; ?></th>
            <th><?php echo $dados['nome']; ?></th>
            <th><a href="view/edita-contrato.php?id=<?php echo $dados['idContrato']; ?>" class="btn-floating btn-small yellow"><i class="material-icons">edit</i></a></th>
            <th><a href="model/aluno.php?id=<?php echo $dados['idAluno']; ?>" class="btn-floating btn-small red"><i class="material-icons">delete</i></a></th>
          </tr>
          <?php

            endwhile;

          ?>
        </tbody>
      </table>
      <br />
      <div class="fixed-action-btn">
        <a href="view/novo-contrato.php" class="btn-floating btn-large green"><i class="material-icons">add</i></a>
      </div>
    </div>
  </div>

<?php include_once 'inc/footer.php' ?>
