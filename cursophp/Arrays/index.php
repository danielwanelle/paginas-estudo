<?php

    /**
     * array_search('elemento', $array); //retorna a posição
     * 
     * array_marge($array1, array2); //junta duas arrays
     * 
     * array_combine($array1, $array2); // combina em um array associativo;
     * 
     * array_key_exists("Valor", $array); // verifica se a chave existe no array associativo
     */
    
     $notas = [9, 3, 10, 5, 10];
     $v = 0;

    foreach($notas as $n):
        $v += $n;
    endforeach;

    //echo $v/sizeof($notas);

    //Utilizando implode e explode

    $nomes = "Daniel, Beatriz, Mariele, Thiago";

    $arrayNomes = explode(", ", $nomes);

    foreach($arrayNomes as $n):
      //  echo $n;
    endforeach;

    $nomesJuntos = implode(", ", $arrayNomes);

    //echo $nomesJuntos;

?>