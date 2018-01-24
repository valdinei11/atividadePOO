<?php
class Elevador {
    public $pesoMax, $passMax, $pernMax, $qtdAnd, $qtdPass=0, $andarAtual;

    public function __construct($pesoMax, $passMax, $pernMax, $qtdPass, $qtdAnd, $andarAtual) {
        $this->pesoMax = $pesoMax;
        $this->passMax = $passMax;
        $this->pernMax = $pernMax;
        $this->qtdPass = $qtdPass;
        $this->qtdAnd = $qtdAnd;
        $this->andarAtual = $andarAtual;
    }

    public function addPassageiro($pass) {
        $qtdPass++;
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
