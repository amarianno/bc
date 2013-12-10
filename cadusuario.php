<?php

require_once('include/classes/Loader.class.php');
require_once('include/retornasmarty.inc.php');

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

$op = $_POST['operacao'];
$usuarioBC = new UsuarioBomCaminhoBC();

if($op == "cadastrar") {

    $usuarioInserir = array();

    $usuarioInserir['nome'] = $_POST['txtNome'];
    $usuarioInserir['email'] = $_POST['txtEmail'];
    $usuarioInserir['senha'] = md5( $_POST['txtSenha'] );

    $usuarioBC->incluir($_SESSION[BANCO_SESSAO], $usuarioInserir);

    $smarty->assign("cor", "green");
    $smarty->assign("message", "Cadastrado com sucesso");
    $smarty->assign("codigo", "");
    $smarty->assign("nome", "");
    $smarty->assign("email", "");
    $smarty->assign("senha", "");
    $smarty->display("cadusuario.tpl");

} else {
    $smarty = retornaSmarty();
    $smarty->assign("operacao", "cadastrar");
    $smarty->assign("codigo", "");
    $smarty->assign("nome", "");
    $smarty->assign("email", "");
    $smarty->assign("senha", "");
    $smarty->assign("message", "");
    $smarty->display("cadusuario.tpl");
}