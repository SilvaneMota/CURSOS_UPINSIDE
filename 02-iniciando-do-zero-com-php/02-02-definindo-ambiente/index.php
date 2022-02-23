<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.02 - Definindo Ambiente");

/*
 * 
 */
fullStackPHPClassSession("Debug Section", __LINE__);

$carro = "gol";
// var_dump serve para debugar a variável
var_dump($carro);
var_dump($_SERVER);