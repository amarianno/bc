<?php

require_once ('include/classes/Loader.class.php');
require_once ('include/retornasmarty.inc.php');
require_once ('include/confconexao.inc.php');
require_once ('include/retornaconexao.inc.php');


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

if(isset($_SESSION[Constantes::COMP_FAMILIAR])) {
    $arrayCompFamiliar = $_SESSION[Constantes::COMP_FAMILIAR];
    $arrayCompFamiliar[sizeof($arrayCompFamiliar)] = $composicaoFamiliar;
} else {
    $arrayCompFamiliar = array();
    $arrayCompFamiliar[0] = $composicaoFamiliar;
    $_SESSION[Constantes::COMP_FAMILIAR] = $arrayCompFamiliar;
}


?>