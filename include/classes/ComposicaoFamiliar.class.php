<?php

require_once('Loader.class.php');

class ComposicaoFamiliar extends Persistivel {

    public $codigo;
    public $nome;
    public $grauParentesco;
    public $escola;
    public $dataNascimento;
    public $trabalho;
    public $renda;
    public $rg;
    public $grupoCasa;
    public $gestante;
    public $deficiencia;
    public $vicio;
    public $atendimentoMedicoEspecializado;

    public function getChavePrimaria() {
        return $this->codigo;
    }

}
