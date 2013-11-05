<?php /* Smarty version Smarty-3.1.13, created on 2013-11-05 07:10:45
         compiled from "templates/dados_comp_familiar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1245370595277993f5b4414-32500519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b24f7e06358adbb0373116c609ca73a1485c1fe' => 
    array (
      0 => 'templates/dados_comp_familiar.tpl',
      1 => 1383642609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1245370595277993f5b4414-32500519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5277993f5b7833_96587935',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5277993f5b7833_96587935')) {function content_5277993f5b7833_96587935($_smarty_tpl) {?><table border="1" width="100%" align="center" cellspacing="4" cellpadding="0">
    <tr>
        <td>
            Composição Familiar
        </td>
        <td>
            <input id="txtCompFamiliar" name="txtCompFamiliar" type="text" tabindex="1"/>
        </td>
        <td>
            Grau de Parentesco
        </td>
        <td>
            <select id="selGrauParenstescoAcompFamiliar" name="selGrauParenstescoAcompFamiliar" tabindex="2" style="width: 100%;">
                <option value="1" selected="selected">
                    Filho
                </option>
                <option value="2">
                    Irmão(a)
                </option>
                <option value="3">
                    Pai
                </option>
                <option value="4">
                    Mãe
                </option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Escola
        </td>
        <td>
            <input id="txtEscola" name="txtEscola" type="text" tabindex="3"/>
        </td>
        <td>
            Data de Nascimento
        </td>
        <td>
            <input id="txtDtNascimentoCompFamiliar" name="txtDtNascimentoCompFamiliar" type="text" tabindex="4" />
        </td>
    </tr>
    <tr>
        <td>
            Trabalha
        </td>
        <td>
            <input id="txtTrabalha" name="txtTrabalha" type="text" tabindex="5"/>
        </td>
        <td>
            Renda
        </td>
        <td>
            <input id="txtRenda" name="txtRenda" type="text" tabindex="6" />
        </td>
    </tr>
    <tr>
        <td>
            RG
        </td>
        <td>
            <input id="txtRGAcompFamiliar" name="txtRGAcompFamiliar" type="text" tabindex="7"/>
        </td>
        <td>
            Participa de Qual grupo na casa
        </td>
        <td>
            <input id="txtGrupoCasa" name="txtGrupoCasa" type="text" tabindex="8" />
        </td>
    </tr>
    <tr>
        <td>
            Gestante
        </td>
        <td>
            <select id="selGestante" name="selGestante" tabindex="9" style="width: 100%;">
                <option value="N" selected="selected">
                    Não
                </option>
                <option value="S">
                    Sim
                </option>
            </select>
        </td>
        <td>
            Deficiência
        </td>
        <td>
            <input id="txtDeficiencia" name="txtDeficiencia" type="text" tabindex="10" />
        </td>
    </tr>
    <tr>
        <td>
            Viciação
        </td>
        <td>
            <input id="txtVicio" name="txtVicio" type="text" tabindex="11" />
        </td>
        <td>
            Atendimento Médico Especializado
        </td>
        <td>
            <input id="txtAtendMedicEspec" name="txtAtendMedicEspec" type="text" tabindex="12" />
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
            <input type="button" value="Limpar Campos" class="bt-03" style="background: #4F92A7; cursor: hand" onclick="limparComposicaoFamiliar()"/>
        </td>
        <td>
            <input type="button" value="adicionar" class="bt-03" style="background: #4F92A7; cursor: hand" onclick="addComposicaoFamiliar()"/>
        </td>
    </tr>
</table>
<br>
<div id="dados_composicao_familiar"></div>
<script>
    mostrarGrid();
</script><?php }} ?>