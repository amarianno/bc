<?php

require_once('Loader.class.php');

class FamiliaDAOPersistivel extends DAOPersistivel {

    const NOME_TABELA = "ficha_cadastral";

    public function __construct() {
        parent::__construct(FamiliaDAOPersistivel::NOME_TABELA);
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

    public function consultar(DAOBanco $banco, $campos, FiltroSQL $filtro = null) {
        $resultados = parent::consultar($banco, $campos, $filtro, "nome ASC");
        return $this->criaObjetos($resultados);
    }


    public function criaObjetos($resultados) {
        $resultsets = array();
        foreach ($resultados as $linha) {
            $familia = new Familia();
            foreach ($linha as $campo => $valor) {
                if (strcasecmp($campo, "codigo") == 0) {
                    $familia->codigo = $valor;
                } else if (strcasecmp($campo, "nome") == 0) {
                    $familia->nome = $valor;
                } else if (strcasecmp($campo, "cpf") == 0) {
                    $familia->cpf = $valor;
                } else if (strcasecmp($campo, "cidade") == 0) {
                    $familia->cidade = $valor;
                } else if (strcasecmp($campo, "necessidade_basica") == 0) {
                    $familia->necessidadeBasica = $valor;
                } else if (strcasecmp($campo, "ubs_acessa") == 0) {
                    $familia->ubsAcessa = $valor;
                }
            }
            $resultsets[] = $familia;
        }

        return $resultsets;
    }

}

?>
