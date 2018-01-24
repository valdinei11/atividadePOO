<?php
require_once('Elevador.php');
require_once('Pessoa.php');
require_once('Animal.php');

// TESTE 01
$elev1 = new Elevador(420, 6, 12, 0, 11, 0);
$pass1 = new Pessoa("Elias Anderson", 2, 50);

$elev1->addPassageiro();
