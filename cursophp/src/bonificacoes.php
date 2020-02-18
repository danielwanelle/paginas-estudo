<?php

    require_once 'autoload.php';

    use banco\model\Cpf;
    use banco\model\funcionario\{Desenvolvedor, Diretor, Gerente, Funcionario, Editor};
    use banco\model\servico\ControladorBonificacao;

    $Funcionario1 = new Desenvolvedor(
        'Daniel Wanelle',
        new Cpf('073.350.026-99'),
        '2000'
    );

    $Funcionario2 = new Gerente(
        'Manoel Ferreira',
        new Cpf('123.234.345-45'),
        '5000'
    );

    $Funcionario3 = new Diretor(
        'Ana Ferreira',
        new Cpf('123.345.456-67'),
        '6000'
    );

    $Funcionario4 = new Editor(
        'Luiz Gustavo',
        new Cpf('123.345.456-67'),
        '2000'
    );

    $controlador = new ControladorBonificacao();
    $controlador->adicionaBonificacao($Funcionario1);
    $controlador->adicionaBonificacao($Funcionario2);
    $controlador->adicionaBonificacao($Funcionario3);
    $controlador->adicionaBonificacao($Funcionario4);

    echo $controlador->getTotalBonificacoes();

?>