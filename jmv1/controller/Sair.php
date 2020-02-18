<?php

  session_start();

  var_dump($_SESSION['usuario']);
  var_dump($_SESSION['perfil']);

  unset(
    $_SESSION['usuario'],
    $_SESSION['perfil']
  );

  header("Location: ../index.php");

?>
