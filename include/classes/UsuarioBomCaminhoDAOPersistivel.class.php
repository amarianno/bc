<?php

require_once('Loader.class.php');

class UsuarioBomCaminhoDAOPersistivel extends DAOPersistivel {

    const NOME_TABELA = "usuario";

    public function __construct() {
        parent::__construct(UsuarioBomCaminhoDAOPersistivel::NOME_TABELA);
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
            $user = new UsuarioBomCaminho();
            foreach ($linha as $campo => $valor) {
                if (strcasecmp($campo, "codigo") == 0) {
                    $user->codigo = $valor;
                } else if (strcasecmp($campo, "nome") == 0) {
                    $user->nome = $valor;
                } else if (strcasecmp($campo, "email") == 0) {
                    $user->email = $valor;
                }
            }
            $resultsets[] = $user;
        }

        return $resultsets;
    }

}

?>
