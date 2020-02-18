<?php

  //Conexão com o banco de dados

  $servername = "localhost";
  $username = "root";
  $password = "TdvlaC51";
  $db_name = "acadsis";

  $connect = mysqli_connect($servername, $username, $password, $db_name);
  mysqli_set_charset($connect, "utf8");

  if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
  endif;

 ?>
