<?php

require_once ('include/classes/Loader.class.php');
require_once ('include/retornasmarty.inc.php');
require_once ('include/confconexao.inc.php');
require_once ('include/retornaconexao.inc.php');

function retornaGrauParentesco($grau) {
    if($grau == '1') {
        return 'Filho';
    } else if($grau == '2') {
        return 'Irmão(a)';
    } else if($grau == '3') {
        return 'Pai';
    } else {
        return 'Mãe';
    }
}
function imprimirGridSessao($composicaoFamiliar) {

    $cor = false;
    $htmlRetorno = "";

    $htmlRetorno .= "<div class='datagrid'>";
    $htmlRetorno .= "<table id='mainDeck'>";
    $htmlRetorno .= "<thead>";
    $htmlRetorno .= "   <tr>";
    $htmlRetorno .= "       <th></th>";
    $htmlRetorno .= "       <th>Nome</th>";
    $htmlRetorno .= "       <th>Grau Parentêsco</th>";
    $htmlRetorno .= "       <th>Escola</th>";
    $htmlRetorno .= "       <th>Data de Nascimento</th>";
    $htmlRetorno .= "       <th>Trabalho</th>";
    $htmlRetorno .= "       <th>Grupo na Casa</th>";
    $htmlRetorno .= "   </tr>";
    $htmlRetorno .= "</thead>";
    $htmlRetorno .= "<tbody>";

    if(count($composicaoFamiliar) > 0) {
        foreach ($composicaoFamiliar as $compFamiliar) {

            //$compFamiliar = new ComposicaoFamiliar();
            $classe = ($cor = !$cor) ? 'normal' : 'alt';
            $htmlRetorno .= "<tr class='" . $classe . "'>";
            $htmlRetorno .= "   <td>" . $compFamiliar->codigo . "º</td>";
            $htmlRetorno .= "   <td>" . $compFamiliar->nome . "</td>";
            $htmlRetorno .= "   <td>" . retornaGrauParentesco($compFamiliar->grauParentesco) . "</td>";
            $htmlRetorno .= "   <td>" . $compFamiliar->escola . "</td>";
            $htmlRetorno .= "   <td>" . $compFamiliar->dataNascimento . "</td>";
            $htmlRetorno .= "   <td>" . $compFamiliar->trabalho . "</td>";
            $htmlRetorno .= "   <td>" . $compFamiliar->grupoCasa . "</td>";
            $htmlRetorno .= '</tr>';


        }
    } else {
        $htmlRetorno .= "   <tr class='conteudo'>";
        $htmlRetorno .= "       <td class='semCartas' colspan='5'>Não contém resultados</td>";
        $htmlRetorno .= "   </tr>";
    }

    $htmlRetorno .= "</tbody>";
    $htmlRetorno .= "</table>";

    return $htmlRetorno;
}

$op = $_POST['operacao'];

if($op == 'inserir') {
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
        $composicaoFamiliar->codigo = count($arrayCompFamiliar) + 1;
        $arrayCompFamiliar[count($arrayCompFamiliar)] = $composicaoFamiliar;
        $_SESSION[Constantes::COMP_FAMILIAR] = $arrayCompFamiliar;
    } else {
        $arrayCompFamiliar = array();
        $composicaoFamiliar->codigo = 1;
        $arrayCompFamiliar[0] = $composicaoFamiliar;
        $_SESSION[Constantes::COMP_FAMILIAR] = $arrayCompFamiliar;
    }

    echo imprimirGridSessao($arrayCompFamiliar);
} else {
    echo imprimirGridSessao($_SESSION[Constantes::COMP_FAMILIAR]);
}

?>