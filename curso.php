<?php
class Curso{
/*  Sistemas web com  php 22/01/18

Orientada Objsetos
qd desenvolver um sistemas deve-se pensar em tds os requisitos.

Dominio  =  entidade e regras
Entidade:
ex.: curso  - curso de algoritmo – sala b5 – das 8:00 as 11:00 – em sistemas isso é representado como objeto
*/


public $nome;
public $sala;

}
$curso = new Curso();
$curso->nome = "Algoritmos em Java";
$curso->sala = "B05";

echo "Nome do curso: $curso->nome " . PHP_EOL;
echo "Sala do curso: $curso->sala " . PHP_EOL;



 ?>
