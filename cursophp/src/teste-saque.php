<?php

    require_once 'autoload.php';

    use banco\model\conta\{ContaPoupanca, ContaCorrente, Titular};
    use banco\model\{Cpf, Endereco};

    $conta = new ContaPoupanca(
        'Daniel',
        new Cpf('073.350.026.99'),
        new Endereco(
            'Divinopolis',
            'Centro',
            '1 de Junho',
            '30'
        )
    );

    $conta->depositar(500);
    $conta->sacar(100);

    echo $conta->consultarSaldo();

?>