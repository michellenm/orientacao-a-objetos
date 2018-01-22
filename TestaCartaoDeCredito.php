<?php

require  'lib/Carbon.php';   // p buscar  o arquivo
require 'CartaDeCredito.php';

use Carbon\Carbon;  //namespace nome da classe  = use carbon\carbon


$cartao = new CartaoDeCredito();
$x->numero = "12345";
$cartao->dataDeValidade = Carbon::createFronDate(2022, 09, 22, 'America/Sao_Paulo'); // procurar carbon php biliotecas do php

echo "Numero: $cartao->numero " . PHP_EOL;
echo "Validade: {$cartao->dataDeValidade->format('d/m/y')} " . PHP_EOL;
