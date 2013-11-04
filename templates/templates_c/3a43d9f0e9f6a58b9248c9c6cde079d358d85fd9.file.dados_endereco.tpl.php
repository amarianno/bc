<?php /* Smarty version Smarty-3.1.13, created on 2013-11-03 19:54:25
         compiled from "templates/dados_endereco.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93627068652769301550e83-91648250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a43d9f0e9f6a58b9248c9c6cde079d358d85fd9' => 
    array (
      0 => 'templates/dados_endereco.tpl',
      1 => 1383515479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93627068652769301550e83-91648250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52769301552f55_16449908',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52769301552f55_16449908')) {function content_52769301552f55_16449908($_smarty_tpl) {?><table border="0" width="100%" align="center" cellspacing="4" cellpadding="0">
    <tr>
        <td colspan="1">
            Endereço
        </td>
        <td colspan="3">
            <input id="txtEndereco" name="txtEndereco" type="text" tabindex="1" style="width: 664px"/>
        </td>
    </tr>
    <tr>
        <td>
            Número
        </td>
        <td>
            <input id="txtNumero" name="txtNumero" type="text" tabindex="2"/>
        </td>
        <td>
            Complemento
        </td>
        <td>
            <input id="txtComplemento" name="txtComplemento" type="text" tabindex="3" />
        </td>
    </tr>
    <tr>
        <td>
            Ponto de Referência
        </td>
        <td>
            <input id="txtPtReferencia" name="txtPtReferencia" type="text" tabindex="4"/>
        </td>
        <td>
            Bairro
        </td>
        <td>
            <input id="txtBairro" name="txtBairro" type="text" tabindex="5" />
        </td>
    </tr>
    <tr>
        <td>
            Cidade
        </td>
        <td>
            <input id="txtCidade" name="txtCidade" type="text" tabindex="6"/>
        </td>
        <td>
            CEP
        </td>
        <td>
            <input id="txtCep" name="txtCep" type="text" tabindex="7" />
        </td>
    </tr>
    <tr>
        <td>
            Telefone 1
        </td>
        <td>
            <input id="txtTel1" name="txtTel1" type="text" tabindex="8"/>
        </td>
        <td>
            Telefone 2
        </td>
        <td>
            <input id="txtTel2" name="txtTel2" type="text" tabindex="9" />
        </td>
    </tr>
    <tr>
        <td>
            Residência
        </td>
        <td>
            <select id="selTipoResidencia" name="selTipoResidencia" tabindex="10" style="width: 250px;">
                <option value="1" selected="selected">
                    Própria
                </option>
                <option value="2">
                    Invasão
                </option>
                <option value="3">
                    Alugada
                </option>
                <option value="4">
                    Aluguel Social
                </option>
                <option value="5">
                    Morador de rua
                </option>
            </select>
        </td>
        <td>
            Tipo de Construção?
        </td>
        <td>
            <select id="selTipoConstrucao" name="selTipoConstrucao" tabindex="11" style="width: 250px;">
                <option value="1" selected="selected">
                    Alvenaria
                </option>
                <option value="2">
                    Madeira
                </option>
                <option value="2">
                    Meio a Meio
                </option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Situação da Residência
        </td>
        <td>
            <select id="selSituacaoResidencia" name="selSituacaoResidencia" tabindex="12" style="width: 250px;">
                <option value="1" selected="selected">
                    Nova
                </option>
                <option value="2">
                    Antiga
                </option>
                <option value="3">
                    Oferece Risco
                </option>
                <option value="4">
                    Aluguel Social
                </option>
                <option value="5">
                    Morador de rua
                </option>
            </select>
        </td>
        <td>
            N de Cômodos
        </td>
        <td>
            <input id="txtNumComodos" name="txtNumComodos" type="text" tabindex="13" />
        </td>
    </tr>
    <tr>
        <td>
            Renda
        </td>
        <td>
            <select id="selRenda" name="selRenda" tabindex="14" style="width: 250px;">
                <option value="1" selected="selected">
                    Própria
                </option>
                <option value="2">
                    Renda Conjugê
                </option>
                <option value="3">
                    Bolsa Família
                </option>
                <option value="4">
                    Renda Mínima
                </option>
            </select>
        </td>
        <td>
            Outras Rendas
        </td>
        <td>
            <select id="selOutrasRenda" name="selOutrasRenda" tabindex="15" style="width: 250px;" onchange="isCesta()">
                <option value="1" selected="selected">
                    Nenhuma
                </option>
                <option value="2">
                    Aposentadoria
                </option>
                <option value="3">
                    Despesas
                </option>
                <option value="4">
                    Ganha Cesta
                </option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            De onde?
        </td>
        <td>
            <input id="txtDeOnde" name="txtDeOnde" type="text" tabindex="16" disabled="true" />
        </td>
        <td>
            Possui Veículo?
        </td>
        <td>
            <select id="selPossuiVeiculo" name="selPossuiVeiculo" tabindex="17" style="width: 250px;">
                <option value="1" selected="selected">
                    Não
                </option>
                <option value="2">
                    Novo Palio
                </option>
                <option value="3">
                    Palio
                </option>
                <option value="3">
                    Celta
                </option>
                <option value="3">
                    Meriva
                </option>
                <option value="3">
                    Camaro
                </option>
                <option value="3">
                    Golf
                </option>
                <option value="3">
                    Gol
                </option>
                <option value="3">
                    Fiat Uno
                </option>
                <option value="3">
                    Ford Ecosport
                </option>
            </select>
        </td>
    </tr>
</table><?php }} ?>