<?php
class Agencia{

public $nome;
public $numero;

}
$x = new Agencia();
$x->nome = "Agencia PHP: ";
$x->numero = "12345";

echo "Nome da Agencia 1: $x->nome " . PHP_EOL;
echo "Sala do curso: $x->numero " . PHP_EOL;

$y = new Agencia();
$y->nome = "Agencia JAVA: ";
$y->numero = "67890";

echo "Nome da Agencia 1: $y->nome " . PHP_EOL;
echo "Sala do curso: $y->numero " . PHP_EOL;


 ?>
