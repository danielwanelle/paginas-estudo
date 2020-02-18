<?php

    spl_autoload_register(function($nomeCompletoDaClasse){ //Autoloader cria os requires de acordo com a necessidade da página
        $caminhoArquivo = str_replace('banco\\', 'src/', $nomeCompletoDaClasse);
        $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo); // Define os separadores corretos de acordo com o SO
        $caminhoArquivo .= '.class.php';

        //echo $caminhoArquivo;
        //exit();
        
        if(file_exists($caminhoArquivo)):
            require_once $caminhoArquivo;
        endif;
    });

?>