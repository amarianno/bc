<?php

require_once ('include/classes/Loader.class.php');
require_once ('include/retornasmarty.inc.php');
require_once ('include/confconexao.inc.php');
require_once ('include/retornaconexao.inc.php');

/*ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);*/

$smarty = retornaSmarty();
$usuarioBC = new UsuarioBomCaminhoBC();

$filtro = new FiltroSQL(FiltroSQL::CONECTOR_E, FiltroSQL::OPERADOR_IGUAL, array("email" => $_POST['txtLogin'], "senha" => $_POST['txtSenha'] ));
$users = $usuarioBC->consultar($_SESSION[BANCO_SESSAO], null, $filtro);

if(sizeof($users) > 0) {
    $smarty->assign("nome", $users[0]->nome);
    $_SESSION[Constantes::USUARIO_SESSION] = $users[0];
    $smarty->display("principal.tpl");
} else {
    $smarty->assign("message","Login ou Senha inválidos");
    $smarty->display("index.tpl");
}



?>