<?php

    require_once('include/classes/Loader.class.php');
    require_once('include/retornasmarty.inc.php');

    $smarty = retornaSmarty();

    //chrcando a sessão do usuario
    //if (isset($_SESSION[Constantes::USUARIO_SESSION])) {
        $smarty->display("principal.tpl");
    //}


    //$smarty->display("index.tpl");
