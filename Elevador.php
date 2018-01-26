<?php
class Elevador {
    public $pesoMax, $passMax, $pernMax, $qtdAnd;
    public $andarAtual, $pesoAtual=0, $pernAtual=0, $qtdPass=0;

    public function __construct($pesoMax, $passMax, $pernMax, $qtdPass, $qtdAnd, $andarAtual) {
        $this->pesoMax = $pesoMax;
        $this->passMax = $passMax;
        $this->pernMax = $pernMax;
        $this->qtdPass = $qtdPass;
        $this->qtdAnd = $qtdAnd;
        $this->andarAtual = $andarAtual;
    }

    public function addPassageiro($pass) {
        $this->qtdPass += 1;
        $this->$pernAtual += $pass->pernas;
        $this->$pesoAtual += $pass->peso;
    }

    public function delPassageiro() {

    }

    public function escolherAndar() {

    }

    public function imprimirAndar() {

    }

    public function imprimirPeso() {

    }

    public function imprimirPassageiros() {

    }
}
