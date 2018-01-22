<?php
class Curso{

public $nome;
public $sala;

}
$curso = new Curso();
$curso->nome = "Algoritmos em Java";
$curso->sala = "B05";

echo "Nome do curso: $curso->nome " . PHP_EOL;
echo "Sala do curso: $curso->sala " . PHP_EOL;



 ?>
