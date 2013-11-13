<?php

require_once ('include/classes/Loader.class.php');
require_once ('include/retornasmarty.inc.php');
require_once ('include/confconexao.inc.php');
require_once ('include/retornaconexao.inc.php');

$op = $_POST['operacao'];


if($op == 'consultar') {

    $familiaBC = new FamiliaBC();
    $camposDoFiltro = array();

    if($_POST['txtNome']) {
        $camposDoFiltro['nome'] = $_POST['txtNome'];
    }
    if($_POST['txtCPF']) {
        $camposDoFiltro['cpf'] = $_POST['txtCPF'];
    }
    if($_POST['selNaturalidade']) {
        $camposDoFiltro['naturalidade'] = $_POST['selNaturalidade'];
    }
    if($_POST['selEscolaridade']) {
        $camposDoFiltro['escolaridade'] = $_POST['selEscolaridade'];
    }
    if($_POST['selReligiao']) {
        $camposDoFiltro['religiao'] = $_POST['selReligiao'];
    }
    if($_POST['txtCidade']) {
        $camposDoFiltro['cidade'] = $_POST['txtCidade'];
    }
    if($_POST['selRenda']) {
        $camposDoFiltro['renda'] = $_POST['selRenda'];
    }
    if($_POST['selOutrasRenda']) {
        $camposDoFiltro['outra_renda'] = $_POST['selOutrasRenda'];
    }
    if($_POST['txtNecessidadeBasica']) {
        $camposDoFiltro['necessidade_basica'] = $_POST['txtNecessidadeBasica'];
    }
    if($_POST['selCorUbs']) {
        $camposDoFiltro['cor_ubs'] = $_POST['selCorUbs'];
    }
    if($_POST['txtUbsAcessa']) {
        $camposDoFiltro['ubs_acessa'] = $_POST['txtUbsAcessa'];
    }
    if($_POST['txtQtdePessoasMoram']) {
        $camposDoFiltro['qtde_moram_resid'] = $_POST['txtQtdePessoasMoram'];
    }
    if($_POST['selVisita']) {
        $camposDoFiltro['visita'] = $_POST['selVisita'];
    }
    if($_POST['selAcompanhamento']) {
        $camposDoFiltro['acompanhamento'] = $_POST['selAcompanhamento'];
    }

    $filtro = new FiltroSQL(FiltroSQL::CONECTOR_E, FiltroSQL::OPERADOR_IGUAL, $camposDoFiltro);
    $listaDeFamilias = $familiaBC->consultar($_SESSION[BANCO_SESSAO], null, $filtro);

    echo GridFamilia::montaGridAtestado($listaDeFamilias);

} else {
    $smarty = retornaSmarty();
    $smarty->display("consulta_geral.tpl");

}

?>