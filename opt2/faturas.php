<?php

include_once 'inc/msg.php';
include_once 'php_action/db_connect.php';
include_once 'inc/header.php';
include_once 'inc/bl.php';

//verifica se há id na urldecode
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT * FROM fatura WHERE idContrato = '$id'";
  $resutado = mysqli_query($connect, $sql);

endif;

?>

  <div class="row">
    <div class="col s12 m10 push-m1">
      <h3 class="light">Faturas</h3>
      <table class="striped">
        <thead>
          <tr>
            <th>Número</th>
            <th>Valor</th>
            <th>Vencimento</th>
            <th>Pago</th>
          </tr>
        </thead>
        <tbody>
          <?php

            while($dados = mysqli_fetch_array($resultado)):

          ?>
          <tr>
            <th><?php echo $dados['idFatura']; ?></th>
            <th><?php echo $dados['valor']; ?></th>
            <th><?php echo $dados['vencimento']; ?></th>
            <th><?php echo $dados['pago']; ?></th>
            <th><a href="construct/aluno.php?id=<?php echo $dados['idAluno']; ?>" class="btn-floating btn-small yellow"><i class="material-icons">edit</i></a></th>
            <th><a href="model/aluno.php?id=<?php echo $dados['idAluno']; ?>" class="btn-floating btn-small red"><i class="material-icons">delete</i></a></th>
          </tr>
          <?php

            endwhile;

          ?>
        </tbody>
      </table>
      <br />
    </div>
  </div>

<?php include_once 'inc/footer.php' ?>
