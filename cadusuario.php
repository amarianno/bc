<?php

require_once ('include/classes/Loader.class.php');
require_once ('include/retornasmarty.inc.php');
require_once ('include/confconexao.inc.php');
require_once ('include/retornaconexao.inc.php');

/*ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);*/

$op = $_POST['operacao'];
$usuarioBC = new UsuarioBomCaminhoBC();
$smarty = retornaSmarty();

if($op == "cadastrar") {

    $usuarioInserir = array();

    if(isset($_POST['hidCod'])) {
        $usuarioInserir['codigo'] = $_POST['hidCod'];
    }

    $usuarioInserir['nome'] = $_POST['txtNome'];
    $usuarioInserir['email'] = $_POST['txtEmail'];
    $usuarioInserir['senha'] = md5( $_POST['txtSenha'] );

    if(isset($_POST['hidCod'])) {
        $filtro = new FiltroSQL(FiltroSQL::CONECTOR_E, FiltroSQL::OPERADOR_IGUAL, array("codigo" => $_POST['hidCod']));
        $usuarioBC->alterar($_SESSION[BANCO_SESSAO], $usuarioInserir, $filtro);
        $smarty->assign("message", "Alterado com sucesso");
    } else {
        $usuarioBC->incluir($_SESSION[BANCO_SESSAO], $usuarioInserir);
        $smarty->assign("message", "Cadastrado com sucesso");
    }

    $smarty->assign("cor", "green");
    $smarty->assign("operacao", "cadastrar");
    $smarty->assign("codigo", "");
    $smarty->assign("nome", "");
    $smarty->assign("email", "");
    $smarty->assign("senha", "");
    $smarty->display("cadusuario.tpl");

} else {

    $smarty->assign("operacao", "cadastrar");
    $smarty->assign("codigo", "");
    $smarty->assign("nome", "");
    $smarty->assign("email", "");
    $smarty->assign("senha", "");
    $smarty->assign("message", "");
    $smarty->assign('perfil_usuarios', array(
                                            1 => 'Cadastrador',
                                            2 => 'Administrador'));
    $smarty->assign('selecionado', 1);
    $smarty->display("cadusuario.tpl");
}