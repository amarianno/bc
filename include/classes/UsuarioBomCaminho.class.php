<?php


class UsuarioBomCaminho extends Persistivel {

    public $codigo;
    public $nome;
    public $email;
    public $senha;


    public function getChavePrimaria() {
        return $this->codigo;
    }
}

?>