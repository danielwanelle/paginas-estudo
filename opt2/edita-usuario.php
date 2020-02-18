<?php

include_once 'php_action/db_connect.php';
include_once 'inc/header.php';
include_once 'inc/bl.php';

//verifica se há id na urldecode
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT * FROM usuario WHERE idUsuario = '$id'";
  $resutado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resutado);
endif;

?>

  <div class="row">
    <div class="col s12 m10 push-m1">
      <h3 class="light">Editar usuário</h3>
        <form action="php_action/edit-user.php" method="post">
          <div class="input-field col s12 m6 push-m3">
            <input type="hidden" name="id" id="id"  value="<?php echo $dados['idUsuario']; ?>" />
            <input placeholder="" type="text" name="usuario" id="usuario" value="<?php echo $dados['usuario']; ?>" />
            <label for="usuario">Usuário</label>
            <input placeholder="" type="password" name="senha" id="senha" value="<?php echo $dados['senha']; ?>" />
            <label for="senha">Senha</label>
            <button type="submit" class="btn" name="btn-editar"><i class="material-icons">edit</i></button>
          </div>
        </form>
    </div>
  </div>

<?php include_once 'inc/footer.php' ?>
