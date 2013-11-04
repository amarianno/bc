<?php /* Smarty version Smarty-3.1.13, created on 2013-11-04 10:31:24
         compiled from "templates/dados_familiares.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5527093665277887a177a07-34669659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '381a5eb81af7c10d183165e39a29b33a6fef15e6' => 
    array (
      0 => 'templates/dados_familiares.tpl',
      1 => 1383568282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5527093665277887a177a07-34669659',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5277887a1796f8_01236828',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5277887a1796f8_01236828')) {function content_5277887a1796f8_01236828($_smarty_tpl) {?><table border="1" width="100%" align="center" cellspacing="4" cellpadding="0">
    <tr>
        <td>
            Quantos filhos
        </td>
        <td>
            <select id="selQtdeFilhos" name="selQtdeFilhos" tabindex="1" style="width: 250px;" onchange="semFilhos()">
                <option value="0" selected="selected">
                    0
                </option>
                <option value="1">
                    1
                </option>
                <option value="2">
                    2
                </option>
                <option value="3">
                    3
                </option>
                <option value="4">
                    4
                </option>
                <option value="5">
                    5
                </option>
                <option value="6">
                    6
                </option>
                <option value="7">
                    7
                </option>
                <option value="8">
                    8
                </option>
                <option value="9">
                    9
                </option>
                <option value="10">
                    10 ou mais
                </option>
            </select>
        </td>
        <td>
            Todos de um único pai
        </td>
        <td>
            <select id="selTodosUnicoPai" name="selTodosUnicoPai" tabindex="2" style="width: 250px;">
                <option value="" selected="selected">
                    ---
                </option>
                <option value="1">
                    Sim
                </option>
                <option value="2">
                    Não
                </option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Pais das Crianças (1os)
        </td>
        <td colspan="3">
            <input id="txtNomePai1" name="txtNomePai1" type="text" tabindex="3" disabled="true" style="width: 100%"/>
        </td>
    </tr>
    <tr>
        <td>
            Pais das Crianças (2os)
        </td>
        <td colspan="3">
            <input id="txtNomePai2" name="txtNomePai2" type="text" tabindex="4" disabled="true" style="width: 100%"/>
        </td>
    </tr>
    <tr>
        <td>
            Maior necessidade básica
        </td>
        <td>
            <input id="txtNecessidadeBasica" name="txtNecessidadeBasica" type="text" tabindex="5"/>
        </td>
        <td>
            Cor de Atendimento da UBS
        </td>
        <td>
            <select id="selCorUbs" name="selCorUbs" tabindex="6" style="width: 250px;">
                <option value="1" selected="selected">
                    <span style="color: #0000ff">Azul</span>
                </option>
                <option value="2">
                    <span style="color: red">Vermelho</span>
                </option>
                <option value="2">
                    <span style="color: #008000">Verde</span>
                </option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            UBS que acessa
        </td>
        <td>
            <input id="txtUbsAcessa" name="txtUbsAcessa" type="text" tabindex="7"/>
        </td>
        <td>
            Moram na residência (Qtde)
        </td>
        <td>
            <input id="txtQtdePessoasMoram" name="txtQtdePessoasMoram" type="text" tabindex="8"/>
        </td>
    </tr>
    <tr>
        <td>
            Atendimento médico especializado
        </td>
        <td colspan="3">
            <input id="txtAtendMedico" name="txtAtendMedico" type="text" tabindex="9" style="width: 100%"/>
        </td>
    </tr>
</table><?php }} ?>