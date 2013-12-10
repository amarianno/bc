<?php /* Smarty version Smarty-3.1.13, created on 2013-12-10 11:34:42
         compiled from "templates/cadusuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38118232852a702e679efd7-13163327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bb874bde4fe66f9c00f59a4027806e7794e1627' => 
    array (
      0 => 'templates/cadusuario.tpl',
      1 => 1386682480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38118232852a702e679efd7-13163327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52a702e67e6821_83540197',
  'variables' => 
  array (
    'codigo' => 0,
    'operacao' => 0,
    'nome' => 0,
    'email' => 0,
    'cor' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a702e67e6821_83540197')) {function content_52a702e67e6821_83540197($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Cadastro de Famílias Assistidas pelo Bom Caminho"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="centerDiv">

    <script>
        $(function() {
            $( "#tabs" ).tabs();
        });
    </script>
    <br><br><br><br>
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Cadastro de Usuário</a></li>
        </ul>
        <div id="tabs-1">
            <form id="myformcaduser" action="cadusuario.php" method="POST">
                <table style="width: 100%" border="0">
                    <tr>
                        <td>
                            <br>
                            <input type="hidden" id="hidCod" name="hidCod" value="<?php echo $_smarty_tpl->tpl_vars['codigo']->value;?>
">
                            <input type="hidden" id="operacao" name="operacao" value="<?php echo $_smarty_tpl->tpl_vars['operacao']->value;?>
">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nome
                        </td>
                        <td>
                            <input type="text" name="txtNome" id="txtNome" required value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" size="50" onblur="onBlurNome()">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            <input type="text" name="txtEmail" id="txtEmail" required value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" size="50">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Senha
                        </td>
                        <td>
                            <input type="password" id="txtSenha" name="txtSenha" required value="" size="50">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="button"
                                   value="Incluir"
                                   class="bt-03" style="background: #4F92A7; cursor: hand; width: 30%"
                                   onclick="validarCadastroUsuario()"/>
                            <input type="button"
                                   value="Limpar Campos"
                                   class="bt-03" style="background: #4F92A7; cursor: hand; width: 30%"
                                   onclick="limparCadastroUsuario()"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                          <span style="color: <?php echo $_smarty_tpl->tpl_vars['cor']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</div>
<?php }} ?>