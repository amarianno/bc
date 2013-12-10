<?php /* Smarty version Smarty-3.1.13, created on 2013-12-10 08:43:42
         compiled from "templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:964755378513f20a2006d81-52733366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a0270564c79ee7a1c4f40d2a5e8bcfac7e3570' => 
    array (
      0 => 'templates/login.tpl',
      1 => 1386672220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '964755378513f20a2006d81-52733366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_513f20a208d923_75420552',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f20a208d923_75420552')) {function content_513f20a208d923_75420552($_smarty_tpl) {?><div class="centerDiv">

    <script>
        $(function() {
            $( "#tabs" ).tabs();
        });
    </script>
    <br><br><br><br>
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Login</a></li>
        </ul>
        <div id="tabs-1">
            <form id="myform" action="autentica.php" method="POST">
                <table style="width: 100%" border="0">
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            <input type="text" name="txtLogin" id="txtLogin" value="amarianno@gmail.com" size="50">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Senha
                        </td>
                        <td>
                            <input type="password" id="txtSenha" name="txtSenha" value="123456" size="50">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Entrar" class="bt-03" style="background: #4F92A7; cursor: hand"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                          <span style="color: red"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</div>
<?php }} ?>