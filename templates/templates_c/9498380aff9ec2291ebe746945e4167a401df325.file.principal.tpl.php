<?php /* Smarty version Smarty-3.1.13, created on 2013-11-03 19:38:08
         compiled from "templates/principal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183143587251800215cdbeb6-97691475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9498380aff9ec2291ebe746945e4167a401df325' => 
    array (
      0 => 'templates/principal.tpl',
      1 => 1383514576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183143587251800215cdbeb6-97691475',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51800215d02972_46267793',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51800215d02972_46267793')) {function content_51800215d02972_46267793($_smarty_tpl) {?><div class="centerDiv">

    <script>
        $(function() {
            $( "#tabs" ).tabs();
        });
    </script>

    <table style="width: 100%" border="0">
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td>
                <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1">Dados Pessoais</a></li>
                        <li><a href="#tabs-2">Dados Residênciais</a></li>
                        <li><a href="#tabs-3">Dados Familiares</a></li>
                        <li><a href="#tabs-4">Composição Familiar</a></li>
                    </ul>
                    <div id="tabs-1">
                        <p><?php echo $_smarty_tpl->getSubTemplate ("dados_pessoais.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</p>
                    </div>
                    <div id="tabs-2">
                        <p><?php echo $_smarty_tpl->getSubTemplate ("dados_endereco.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</p>
                    </div>
                    <div id="tabs-3">
                        <p>Cuidado com a Lingua dela.</p>
                        <p>Muuuuuuuuuuito cuidado com a lingua dela.</p>
                    </div>
                    <div id="tabs-4">
                        <p>Composição Familiar</p>
                    </div>
                </div>
            </td>
        </tr>
    </table>

</div>
<?php }} ?>