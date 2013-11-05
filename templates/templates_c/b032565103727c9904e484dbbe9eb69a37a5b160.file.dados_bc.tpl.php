<?php /* Smarty version Smarty-3.1.13, created on 2013-11-05 11:43:51
         compiled from "templates/dados_bc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2978797445278cc69d5d7b9-27778090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b032565103727c9904e484dbbe9eb69a37a5b160' => 
    array (
      0 => 'templates/dados_bc.tpl',
      1 => 1383658636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2978797445278cc69d5d7b9-27778090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5278cc69d62cb6_91922168',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5278cc69d62cb6_91922168')) {function content_5278cc69d62cb6_91922168($_smarty_tpl) {?><table border="1" width="100%" align="center" cellspacing="4" cellpadding="0">
    <tr>
        <td>
            Objetivo do Cadastro
        </td>
        <td colspan="3">
            <input id="txtObjetivo" name="txtObjetivo" type="text" tabindex="1" style="width: 100%"/>
        </td>
    </tr>
    <tr>
        <td>
            Deseja visita do Grupo?
        </td>
        <td>
            <select id="selVisita" name="selVisita" tabindex="2" style="width: 100%;">
                <option value="S" selected="selected">
                    Sim
                </option>
                <option value="N">
                    Não
                </option>
            </select>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            Deseja Acompanhamento?
        </td>
        <td>
            <select id="selAcompanhamento" name="selAcompanhamento" tabindex="3" style="width: 100%;">
                <option value="S" selected="selected">
                    Sim
                </option>
                <option value="N">
                    Não
                </option>
            </select>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            Comentários
        </td>
        <td colspan="3">
            <textarea rows="9" cols="30" tabindex="4" id="txtComentario" name="txtComentario" ></textarea>
        </td>
    </tr>
    <tr>
        </td>
            <br>
        <td>
        </td>
        <td>
            <br>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <br>
            <input type="button" value="CADASTRAR FAMÍLIA" class="bt-03" style="background: #4F92A7; cursor: hand" onclick="cadastrar()"/>
        </td>
    </tr>
</table><?php }} ?>