<?php

require_once('include/classes/Loader.class.php');
require_once('include/retornasmarty.inc.php');


$op = $_POST['operacao'];
$usuarioBC = new UsuarioBomCaminhoBC();

if($op == "cadastrar") {

    $usuarioInserir = array();

    $usuarioInserir['nome'] = $_POST['txtNome'];
    $usuarioInserir['email'] = $_POST['txtEmail'];
    $usuarioInserir['senha'] = md5( $_POST['txtSenha'] );

    $usuarioBC->incluir($_SESSION[BANCO_SESSAO], $usuarioInserir);

} else {
    $smarty = retornaSmarty();
    $smarty->display("cadusuario.tpl");
}