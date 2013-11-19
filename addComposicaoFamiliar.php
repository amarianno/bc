<?php

require_once ('include/classes/Loader.class.php');
require_once ('include/retornasmarty.inc.php');
require_once ('include/confconexao.inc.php');
require_once ('include/retornaconexao.inc.php');

$op = $_POST['operacao'];

if ($op == 'excluir') {

    $codigo = $_POST['codigo'];

    $arrayCompFamiliar = $_SESSION[Constantes::COMP_FAMILIAR];
    $novoArray = array();
    $posicao = 0;

    for($i = 0; $i < count($arrayCompFamiliar); $i++) {
        if($codigo != $arrayCompFamiliar[$i]->codigo) {
            $arrayCompFamiliar[$i]->codigo = $posicao + 1;
            $novoArray[$posicao++] = $arrayCompFamiliar[$i];
        }
    }

    $_SESSION[Constantes::COMP_FAMILIAR] = $novoArray;
    $arrayCompFamiliar = null;

    echo GridCompFamiliar::gridToHtml($novoArray);

} else if ($op == 'detalhar') {

    $codigo = $_POST['codigo'];

    $arrayCompFamiliar = $_SESSION[Constantes::COMP_FAMILIAR];

    foreach ($arrayCompFamiliar as $compFamiliar) {
        if($codigo == $compFamiliar->codigo) {
            echo json_encode($compFamiliar);
        }
    }

} else if($op == 'inserir') {
    $composicaoFamiliar = new ComposicaoFamiliar();

    $composicaoFamiliar->nome = $_POST['txtCompFamiliar'];
    $composicaoFamiliar->grauParentesco = $_POST['selGrauParenstescoAcompFamiliar'];
    $composicaoFamiliar->escola = $_POST['txtEscola'];
    $composicaoFamiliar->dataNascimento = $_POST['txtDtNascimentoCompFamiliar'];
    $composicaoFamiliar->trabalho = $_POST['txtTrabalha'];
    $composicaoFamiliar->renda = $_POST['txtRenda'];
    $composicaoFamiliar->rg = $_POST['txtRGAcompFamiliar'];
    $composicaoFamiliar->grupoCasa = $_POST['txtGrupoCasa'];
    $composicaoFamiliar->gestante = $_POST['selGestante'];
    $composicaoFamiliar->deficiencia = $_POST['txtDeficiencia'];
    $composicaoFamiliar->vicio = $_POST['txtVicio'];
    $composicaoFamiliar->atendimentoMedicoEspecializado = $_POST['txtAtendMedicEspec'];

    $arrayCompFamiliar = null;

    if(isset($_SESSION[Constantes::COMP_FAMILIAR])) {
        $arrayCompFamiliar = $_SESSION[Constantes::COMP_FAMILIAR];
        $arrayCompFamiliar[count($arrayCompFamiliar)] = $composicaoFamiliar;
        $arrayRetorno = array();

        $contCodigo = 0;
        foreach ($arrayCompFamiliar as $compFamiliar) {
            $compFamiliar->codigo = $contCodigo + 1;
            $contCodigo++;
            $arrayRetorno[count($arrayRetorno)] = $compFamiliar;
        }

        $_SESSION[Constantes::COMP_FAMILIAR] = $arrayRetorno;
    } else {
        $arrayCompFamiliar = array();
        $composicaoFamiliar->codigo = 1;
        $arrayCompFamiliar[0] = $composicaoFamiliar;
        $_SESSION[Constantes::COMP_FAMILIAR] = $arrayCompFamiliar;
    }

    echo GridCompFamiliar::gridToHtml($_SESSION[Constantes::COMP_FAMILIAR]);
} else {
    echo GridCompFamiliar::gridToHtml($_SESSION[Constantes::COMP_FAMILIAR]);
}

?>