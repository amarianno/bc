<?php


class ComposicaoFamiliarDAOPersistivel extends DAOPersistivel {

    const NOME_TABELA = "composicao_familiar";

    public function __construct() {
        parent::__construct(ComposicaoFamiliarDAOPersistivel::NOME_TABELA);
    }

    public function incluir(DAOBanco $banco, $camposValores) {
        return parent::incluir($banco, $camposValores);
    }

    public function alterar(DAOBanco $banco, $camposValores, FiltroSQL $filtro = null) {
        return parent::alterar($banco, $camposValores, $filtro);
    }

    public function excluir(DAOBanco $banco, FiltroSQL $filtro = null) {
        return parent::excluir($banco, $filtro);
    }

    public function criaObjetos($resultados) {

    }

}

?>
