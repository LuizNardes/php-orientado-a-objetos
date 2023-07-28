<?php

require_once './src/Conta.php';
require_once './src/Titular.php';
require_once './src/CPF.php';

$Luiz = new Conta(new Titular(nome:'Luiz Nardes',cpf: new CPF('000.000.000-00')));
$Aline = new Conta(new Titular(nome:'Aline Nardes',cpf: new CPF('000.000.000-00')));

$Luiz->depositar(valorADepositar:500);
$Luiz->transferir(200,$Aline);

echo $Luiz->getNome().PHP_EOL;
echo $Luiz->getCPF().PHP_EOL;
echo $Luiz->recuperarSaldo().PHP_EOL;

echo PHP_EOL;

echo $Aline->getNome().PHP_EOL;
echo $Aline->getCPF().PHP_EOL;
echo $Aline->recuperarSaldo().PHP_EOL;

echo Conta::getNumeroDeContas().PHP_EOL;
