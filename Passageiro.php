<?php
class Passageiro {
    public $nome, $pernas, $peso;

    public function __construct($nome, $pernas, $peso) {
        $this->nome = $nome;
        $this->pernas = $pernas;
        $this->peso = $peso;
    }
}
