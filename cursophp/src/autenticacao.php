<?php

    require_once 'autoload.php';

    use banco\model\Cpf;
    use banco\model\servico\Validador;
    use banco\model\funcionario\Diretor;

    $valida = new Validador();

    $diretor = new Diretor(
        'Juarez Gonzalez',
        new Cpf('123.234.345.67'),
        '5000'
    );

    $valida->login($diretor, '4321');

?>