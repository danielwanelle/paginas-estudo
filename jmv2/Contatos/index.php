<?php

  require_once '../dao/Contatos.dao.php';

  if(isset($_GET['q'])):
    foreach (ContatosDAO::readContatoByNome($_GET['q']) as $tabela):
      echo json_encode($tabela).'</br>';

      endforeach;
  else:
    foreach (ContatosDAO::readContato() as $tabela):
      echo json_encode($tabela).'</br>';

      endforeach;
  endif;



?>
