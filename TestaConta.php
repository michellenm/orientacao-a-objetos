<?php

require'Conta.php';
$conta=new Conta();

$conta->saldo =0;
echo "saldo inicial: $conta->saldo" .PHP_EOL;
$conta->deposita(2000);
echo "saldo final: $conta->saldo" .PHP_EOL;

} ?>
