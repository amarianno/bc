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
    $htmlRetorno .= "       <th></th>";
    $htmlRetorno .= "       <th>Nome</th>";
    $htmlRetorno .= "       <th>Grau Parentêsco</th>";
    $htmlRetorno .= "       <th>RG</th>";
    $htmlRetorno .= "       <th>Escola</th>";
    $htmlRetorno .= "       <th>Data de Nascimento</th>";
    $htmlRetorno .= "       <th>Trabalho</th>";
    $htmlRetorno .= "       <th>Grupo na Casa</th>";
    $htmlRetorno .= "       <th></th>";
    $htmlRetorno .= "   </tr>";
    $htmlRetorno .= "</thead>";
    $htmlRetorno .= "<tbody>";

    if(count($composicaoFamiliar) > 0) {
        foreach ($composicaoFamiliar as $compFamiliar) {

            //$compFamiliar = new ComposicaoFamiliar();
            $classe = ($cor = !$cor) ? 'normal' : 'alt';
            $htmlRetorno .= "<tr class='" . $classe . "'>";
            $htmlRetorno .= "   <td>" . "<img src='include/img/search-submit.png' onclick='detalharCompFam(".$compFamiliar->codigo.")' />" . "</td>";
            $htmlRetorno .= "   <td>" . $compFamiliar->codigo . "º</td>";
            $htmlRetorno .= "   <td>" . $compFamiliar->nome . "</td>";
            $htmlRetorno .= "   <td>" . retornaGrauParentesco($compFamiliar->grauParentesco) . "</td>";
            $htmlRetorno .= "   <td>" . $compFamiliar->rg . "</td>";
            $htmlRetorno .= "   <td>" . $compFamiliar->escola . "</td>";
            $htmlRetorno .= "   <td>" . $compFamiliar->dataNascimento . "</td>";
            if($compFamiliar->trabalho != '') {
                $htmlRetorno .= "   <td>" . $compFamiliar->trabalho . "(R$". $compFamiliar->renda .")</td>";
            } else {
                $htmlRetorno .= "   <td></td>";
            }
            $htmlRetorno .= "   <td>" . $compFamiliar->grupoCasa . "</td>";
            $htmlRetorno .= "   <td>" . "<a href='#'><img src='include/img/icon/delete-icon.png' onclick='excluirCompFam(".$compFamiliar->codigo.")'  /></a>" . "</td>";
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

if ($op == 'detalhar') {

    $codigo = $_POST['codigo'];

    $arrayCompFamiliar = $_SESSION[Constantes::COMP_FAMILIAR];

    foreach ($arrayCompFamiliar as $compFamiliar) {
        if($codigo == $compFamiliar->codigo) {
            return json_encode($arrayCompFamiliar[0]);
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