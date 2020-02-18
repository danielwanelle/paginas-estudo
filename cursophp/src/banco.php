<?php

    require_once 'autoload.php';

    use banco\model\conta\{ContaPoupanca, ContaCorrente, Titular};
    use banco\model\{Cpf, Endereco};

    $endereco = new Endereco('Divinopolis', 'Centro', '1 de Junho', '30');

    $conta1 = new ContaCorrente('Daniel Wanelle', new Cpf('073.350.026-99'), $endereco, '111-1', '123456-34');
    $conta2 = new ContaCorrente('Sara Wanelle', new Cpf('073.350.026-99'), $endereco, '111-1', '123456-34');
    //$conta2 = new Conta('Teste 1', new Cpf('123.345.456-67'));

    //echo ContaCorrente::$taxaOperacao;
    
    $conta1->depositar(300);
    echo "O saldo da conta é: {$conta1->consultarSaldo()} <br>";
    //$conta1->sacar(100);
    //echo "O saldo da conta é: {$conta1->consultarSaldo()} <br>";
    try {
        $conta1->transferir($conta2, -100);
    } catch (Exception $erro) {
        echo $erro->getMessage();
    }
    echo "O saldo da conta é: {$conta1->consultarSaldo()} <br>";
    echo "O saldo da conta é: {$conta2->consultarSaldo()} <br>";

    //var_dump($conta1);

    echo ContaCorrente::getNumeroDeContas(); //Chama método estático

?>