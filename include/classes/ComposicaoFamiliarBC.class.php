<?php

require_once('Loader.class.php');

class ComposicaoFamiliarBC extends BC {

    private $DAO;

    public function __construct() {
        $this->DAO = new ComposicaoFamiliarDAOPersistivel();
    }

    public function incluir(DAOBanco $banco, $camposValores) {
        return $this->DAO->incluir($banco, $camposValores);
    }

    public function alterar(DAOBanco $banco, $camposValores, FiltroSQL $filtro = null) {
        return $this->DAO->alterar($banco, $camposValores, $filtro);
    }

    public function excluir(DAOBanco $banco, FiltroSQL $filtro = null) {
        return $this->DAO->excluir($banco, $filtro);
    }

    public function consultar(DAOBanco $banco, $campos, FiltroSQL $filtro = null) {
        return null;
    }

    public function teste() {
        return "funcionou";
    }

}

?>
